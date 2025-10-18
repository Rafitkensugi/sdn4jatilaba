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

        // Handle file upload
        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('uploads/guru', 'public');
        }

        $guru = Guru::create($validated);

        // Jika dipilih untuk membuat user admin
        if ($request->has('make_admin')) {
            $user = $this->createUserAccount($validated['nama'], 'admin');
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

        // Handle file upload
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
        // Delete foto if exists
        if ($guru->foto) {
            Storage::disk('public')->delete($guru->foto);
        }

        // Jika guru memiliki user account, hapus juga
        if ($guru->user_id) {
            $guru->user->delete();
        }

        $guru->delete();

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data guru berhasil dihapus!');
    }

    public function makeAdmin(Guru $guru)
    {
        if (!$guru->user_id) {
            $user = $this->createUserAccount($guru->nama, 'admin');
            $guru->update(['user_id' => $user->id]);

            return redirect()->back()->with('success', 'Guru berhasil dijadikan admin!');
        }

        return redirect()->back()->with('error', 'Guru sudah memiliki akses admin!');
    }

    public function removeAdmin(Guru $guru)
    {
        if ($guru->user_id) {
            // Hapus role admin tapi tetap pertahankan user account
            $guru->user->removeRole('admin');
            
            return redirect()->back()->with('success', 'Akses admin berhasil dicabut!');
        }

        return redirect()->back()->with('error', 'Guru tidak memiliki akses admin!');
    }

    public function makeUser(Guru $guru)
    {
        if (!$guru->user_id) {
            $user = $this->createUserAccount($guru->nama, 'user');
            $guru->update(['user_id' => $user->id]);

            return redirect()->back()->with('success', 'Akun user berhasil dibuat untuk guru!');
        }

        return redirect()->back()->with('error', 'Guru sudah memiliki akun user!');
    }

    private function createUserAccount($nama, $role = 'user')
    {
        $email = strtolower(str_replace(' ', '.', $nama)) . '@sdn4jatilaba.sch.id';
        
        // Cek jika email sudah ada
        $counter = 1;
        $originalEmail = $email;
        while (User::where('email', $email)->exists()) {
            $email = $originalEmail . $counter;
            $counter++;
        }

        $user = User::create([
            'name' => $nama,
            'email' => $email,
            'password' => Hash::make('password123'),
        ]);

        $user->assignRole($role);

        return $user;
    }

    public function updateRole(Request $request, Guru $guru)
    {
        $request->validate([
            'role' => 'required|in:admin,user'
        ]);

        if (!$guru->user_id) {
            return redirect()->back()->with('error', 'Guru belum memiliki akun user!');
        }

        // Hapus semua role sebelumnya
        $guru->user->syncRoles([$request->role]);

        return redirect()->back()->with('success', 'Role berhasil diubah menjadi ' . $request->role . '!');
    }

    public function resetPassword(Guru $guru)
    {
        if ($guru->user_id) {
            $guru->user->update([
                'password' => Hash::make('password123')
            ]);

            return redirect()->back()->with('success', 'Password berhasil direset ke default!');
        }

        return redirect()->back()->with('error', 'Guru tidak memiliki akun user!');
    }
}