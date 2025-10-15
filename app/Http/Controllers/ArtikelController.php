<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
{
    $artikels = \App\Models\Artikel::orderBy('created_at', 'desc')->paginate(6);
    return view('pengunjung.artikel', compact('artikels'));
}


        public function show($id)
    {
        $artikel = \App\Models\Artikel::findOrFail($id);

        // Tambah 1 ke view count
        $artikel->increment('views');

        return view('pengunjung.artikel-detail', compact('artikel'));
    }


    // ---------- CRUD (untuk admin) ----------
    public function create()
    {
        return view('admin.artikel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|image|max:2048'
        ]);

        $path = $request->file('gambar')?->store('artikels', 'public');

        Artikel::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis ?? 'Admin SDN 4 Jatilaba',
            'isi' => $request->isi,
            'gambar' => $path,
            'tanggal' => now(),
        ]);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil ditambahkan!');
    }
    public function destroy()
    {
        //
    }
}
