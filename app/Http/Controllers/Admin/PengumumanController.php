<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    // Halaman daftar pengumuman
    public function index()
    {
        $pengumumans = Pengumuman::latest()->paginate(10);
        return view('admin.pengumuman.index', compact('pengumumans'));
    }

    // Form tambah pengumuman
    public function create()
    {
        return view('admin.pengumuman.create');
    }

    // Simpan pengumuman baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('gambar')
            ? $request->file('gambar')->store('pengumuman', 'public')
            : null;

        Pengumuman::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis ?? 'Admin SDN 4 Jatilaba',
            'isi' => $request->isi,
            'gambar' => $path,
            'tanggal' => now(),
        ]);

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil ditambahkan!');
    }

    // Form edit pengumuman
    public function edit(Pengumuman $pengumuman)
    {
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    // Update pengumuman
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $pengumuman->gambar;

        if ($request->hasFile('gambar')) {
            if ($path) {
                Storage::disk('public')->delete($path);
            }
            $path = $request->file('gambar')->store('pengumuman', 'public');
        }

        $pengumuman->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $path,
        ]);

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui!');
    }

    // Hapus pengumuman
    public function destroy(Pengumuman $pengumuman)
    {
        if ($pengumuman->gambar) {
            Storage::disk('public')->delete($pengumuman->gambar);
        }

        $pengumuman->delete();

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil dihapus!');
    }
}
