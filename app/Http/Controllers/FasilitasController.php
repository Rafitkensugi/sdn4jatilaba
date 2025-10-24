<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('pengunjung.fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('admin.fasilitas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'deskripsi' => 'nullable|string',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // max 2MB
    ]);

    $slug = Str::slug($validated['nama']);

    $count = Fasilitas::where('slug', 'LIKE', "$slug%")->count();
    if ($count > 0) {
        $slug .= '-' . ($count + 1);
    }

    $fotoPath = null;
    if ($request->hasFile('foto')) {
        $fotoPath = $request->file('foto')->store('fasilitas', 'public');
    }

    Fasilitas::create([
        'nama' => $validated['nama'],
        'slug' => $slug,
        'deskripsi' => $validated['deskripsi'] ?? null,
        'foto' => $fotoPath,
    ]);

    return redirect()->back()->with('success', 'Fasilitas berhasil disimpan.');
    }

    public function show($slug)
    {
        $fasilitas = Fasilitas::where('slug', $slug)->firstOrFail();

        $lainnya = Fasilitas::where('id', '!=', $fasilitas->id)->get();

        return view('pengunjung.fasilitas.show', compact('fasilitas', 'lainnya'));
    }
}
