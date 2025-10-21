<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    //
    public function index()
    {
        $gurus = Guru::latest()->paginate(10);
        return view('admin.kelola-guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('admin.kelola-guru.create');
    }

    public function show(Guru $guru)
    {
        return view('admin.kelola-guru.show', compact('guru'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'nip' => 'required|string|max:20|unique:gurus,nip',
        'jabatan' => 'required|string|max:255',
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'bidang_studi' => 'required|string|max:255'
    ]);

    if ($request->hasFile('foto')) {
        $fotoName = time() . '_' . $request->file('foto')->getClientOriginalName();
        $request->file('foto')->storeAs('public/gurus', $fotoName);
        $validated['foto'] = $fotoName;
    }

    Guru::create($validated);

    return redirect()->route('admin.kelola-guru.index')
        ->with('success', 'Data guru berhasil ditambahkan!');
}

}
