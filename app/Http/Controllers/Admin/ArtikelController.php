<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    // Halaman daftar artikel
    public function index()
    {
        $artikels = Artikel::latest()->paginate(10);
        return view('admin.artikel.index', compact('artikels'));
    }

    // Form tambah artikel
    public function create()
    {
        return view('admin.artikel.create');
    }

    // Simpan artikel baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('gambar') ? $request->file('gambar')->store('artikels', 'public') : null;

        Artikel::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis ?? 'Admin SDN 4 Jatilaba',
            'isi' => $request->isi,
            'gambar' => $path,
            'tanggal' => now(),
        ]);

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil ditambahkan!');
    }

    // Form edit artikel
    public function edit(Artikel $artikel)
    {
        return view('admin.artikel.edit', compact('artikel'));
    }

    // Update artikel
    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $artikel->gambar;
        if ($request->hasFile('gambar')) {
            if ($path) Storage::disk('public')->delete($path);
            $path = $request->file('gambar')->store('artikels', 'public');
        }

        $artikel->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $path,
        ]);

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    // Hapus artikel
    public function destroy(Artikel $artikel)
    {
        if ($artikel->gambar) {
            Storage::disk('public')->delete($artikel->gambar);
        }
        $artikel->delete();

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil dihapus!');
    }
}
