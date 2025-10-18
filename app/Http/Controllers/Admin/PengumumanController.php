<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::latest()->paginate(10);
        return view('admin.pengumuman.index', compact('pengumuman'));
    }

    public function create()
    {
        return view('admin.pengumuman.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'penulis' => 'required|string|max:100',
            'status' => 'required|in:draft,published',
        ]);

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = 'pengumuman-' . time() . '-' . Str::random(10) . '.' . $gambar->getClientOriginalExtension();
            $gambarPath = $gambar->storeAs('uploads/pengumuman', $gambarName, 'public');
            $validated['gambar'] = $gambarPath;
        }

        Pengumuman::create($validated);

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil ditambahkan!');
    }

    public function edit(Pengumuman $pengumuman)
    {
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request, Pengumuman $pengumuman)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'penulis' => 'required|string|max:100',
            'status' => 'required|in:draft,published',
        ]);

        // Upload gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Delete old image
            if ($pengumuman->gambar && Storage::disk('public')->exists($pengumuman->gambar)) {
                Storage::disk('public')->delete($pengumuman->gambar);
            }
            
            $gambar = $request->file('gambar');
            $gambarName = 'pengumuman-' . time() . '-' . Str::random(10) . '.' . $gambar->getClientOriginalExtension();
            $gambarPath = $gambar->storeAs('uploads/pengumuman', $gambarName, 'public');
            $validated['gambar'] = $gambarPath;
        } else {
            // Keep the old image if no new image uploaded
            $validated['gambar'] = $pengumuman->gambar;
        }

        $pengumuman->update($validated);

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil diperbarui!');
    }

    public function destroy(Pengumuman $pengumuman)
    {
        // Delete image from storage
        if ($pengumuman->gambar && Storage::disk('public')->exists($pengumuman->gambar)) {
            Storage::disk('public')->delete($pengumuman->gambar);
        }

        $pengumuman->delete();

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil dihapus!');
    }
}