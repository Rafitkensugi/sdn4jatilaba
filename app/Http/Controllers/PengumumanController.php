<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'caption' => 'required|string',
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->storeAs('public/pengumuman', $gambarName);
        }

        Pengumuman::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'gambar' => $gambarName,
            'caption' => $request->caption,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'caption' => 'required|string',
        ]);

        $pengumuman = Pengumuman::findOrFail($id);
        $gambarName = $pengumuman->gambar;

        if ($request->hasFile('gambar')) {
            Storage::delete('public/pengumuman/' . $pengumuman->gambar);
            
            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->storeAs('public/pengumuman', $gambarName);
        }

        $pengumuman->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'gambar' => $gambarName,
            'caption' => $request->caption,
        ]);

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        Storage::delete('public/pengumuman/' . $pengumuman->gambar);
        $pengumuman->delete();

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil dihapus');
    }
}