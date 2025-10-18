<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::with('user')->latest()->paginate(10);
        return view('admin.guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:20|unique:gurus,nip',
            'jabatan' => 'required|string|max:100',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bidang_studi' => 'required|string|max:100',
            'aktif_sejak' => 'required|date',
            'status' => 'required|in:PNS,Honorer',
            'domisili' => 'required|string|max:255',
            'make_admin' => 'boolean'
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('uploads/guru', 'public');
        }

        $guru = Guru::create($validated);

        // Jika dipilih untuk membuat user admin
        if ($request->has('make_admin')) {
            $user = User::create([
                'name' => $validated['nama'],
                'email' => strtolower(str_replace(' ', '.', $validated['nama'])) . '@sdn4jatilaba.sch.id',
                'password' => Hash::make('password123'),
            ]);

            $user->assignRole('admin');
            
            $guru->update(['user_id' => $user->id]);
        }

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data guru berhasil ditambahkan!');
    }

    public function edit(Guru $guru)
    {
        return view('admin.guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:20|unique:gurus,nip,' . $guru->id,
            'jabatan' => 'required|string|max:100',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bidang_studi' => 'required|string|max:100',
            'aktif_sejak' => 'required|date',
            'status' => 'required|in:PNS,Honorer',
            'domisili' => 'required|string|max:255',
        ]);

        if ($request->hasFile('foto')) {
            // Delete old image
            if ($guru->foto) {
                Storage::disk('public')->delete($guru->foto);
            }
            $validated['foto'] = $request->file('foto')->store('uploads/guru', 'public');
        }

        $guru->update($validated);

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data guru berhasil diperbarui!');
    }

    public function destroy(Guru $guru)
    {
        if ($guru->foto) {
            Storage::disk('public')->delete($guru->foto);
        }

        $guru->delete();

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data guru berhasil dihapus!');
    }

    public function makeAdmin(Guru $guru)
    {
        if (!$guru->user_id) {
            $user = User::create([
                'name' => $guru->nama,
                'email' => strtolower(str_replace(' ', '.', $guru->nama)) . '@sdn4jatilaba.sch.id',
                'password' => Hash::make('password123'),
            ]);

            $user->assignRole('admin');
            $guru->update(['user_id' => $user->id]);

            return redirect()->back()->with('success', 'Guru berhasil dijadikan admin!');
        }

        return redirect()->back()->with('error', 'Guru sudah memiliki akses admin!');
    }
}