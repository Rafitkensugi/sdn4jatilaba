<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    // ----------------- Pengunjung -----------------
    public function index()
    {
        $pengumuman = Pengumuman::orderBy('created_at', 'desc')->paginate(6);
        return view('pengunjung.pengumuman', compact('pengumuman'));
    }

    public function show($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        // Tambah 1 ke jumlah views
        $pengumuman->increment('views');

        return view('pengunjung.pengumuman-detail', compact('pengumuman'));
    }

    // ----------------- Admin (CRUD) -----------------
    public function create()
    {
        return view('admin.pengumuman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'gambar' => 'nullable|image|max:2048'
        ]);

        $path = $request->file('gambar')?->store('pengumuman', 'public');

        Pengumuman::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis ?? 'Admin SDN 4 Jatilaba',
            'isi' => $request->isi,
            'gambar' => $path,
            'tanggal' => now(),
        ]);

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->delete();

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil dihapus!');
    }
}
