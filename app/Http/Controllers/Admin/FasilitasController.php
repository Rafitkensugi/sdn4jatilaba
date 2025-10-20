<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::latest()->paginate(10);
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('admin.fasilitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fotoPath = $request->file('foto')?->store('fasilitas', 'public');

        Fasilitas::create([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('admin.fasilitas.index')->with('success', '✅ Fasilitas berhasil ditambahkan.');
    }

    public function edit(Fasilitas $fasilita)
    {
        return view('admin.fasilitas.edit', compact('fasilita'));
    }

    public function update(Request $request, Fasilitas $fasilita)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $slug = $fasilita->nama === $request->nama
            ? $fasilita->slug
            : Str::slug($request->nama);

        if ($request->hasFile('foto')) {
            if ($fasilita->foto && Storage::disk('public')->exists($fasilita->foto)) {
                Storage::disk('public')->delete($fasilita->foto);
            }

            $fotoBaru = $request->file('foto')->store('fasilitas', 'public');
            $fasilita->foto = $fotoBaru;
        }

        $fasilita->update([
            'nama' => $request->nama,
            'slug' => $slug,
            'deskripsi' => $request->deskripsi,
            'foto' => $fasilita->foto,
        ]);

        return redirect()->route('admin.fasilitas.index')->with('success', '✅ Fasilitas berhasil diperbarui.');
    }

    public function destroy(Fasilitas $fasilita)
    {
        if ($fasilita->foto && Storage::disk('public')->exists($fasilita->foto)) {
            Storage::disk('public')->delete($fasilita->foto);
        }

        $fasilita->delete();

        return redirect()->route('admin.fasilitas.index')->with('success', '🗑️ Fasilitas berhasil dihapus.');
    }
}
