<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Guru;
use App\Models\User;

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
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'nip' => 'required|string|max:20|unique:gurus,nip',
        'jabatan' => 'required|string|max:255',
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'bidang_studi' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email', // Add email validation
        'password' => 'required|min:8|confirmed', // Add password validation
    ]);

    // Handle file upload
    if ($request->hasFile('foto')) {
        $fotoName = time() . '_' . $request->file('foto')->getClientOriginalName();
        $request->file('foto')->storeAs('public/gurus', $fotoName);
        $validated['foto'] = $fotoName;
    }

    // Create guru first
    $guru = Guru::create([
        'nama' => $validated['nama'],
        'nip' => $validated['nip'],
        'jabatan' => $validated['jabatan'],
        'foto' => $validated['foto'],
        'bidang_studi' => $validated['bidang_studi'],
    ]);

    // Create user account for the guru
    $user = User::create([
        'name' => $validated['nama'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password']),
        'guru_id' => $guru->id,
    ]);

    return redirect()->route('admin.kelola-guru.index')
        ->with('success', 'Data guru dan akun berhasil ditambahkan!');
}
 public function edit(Guru $guru)
 {
    return view('admin.kelola-guru.edit', compact('guru'));
 }
 public function update(Request $request, Guru $guru)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'nip' => 'required|string|max:20|unique:gurus,nip,' . $guru->id,
        'jabatan' => 'required|string|max:255',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'bidang_studi' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $guru->user->id, // Update email validation
        'password' => 'nullable|min:8|confirmed', // Make password optional for update
    ]);

    // Handle file upload
    if ($request->hasFile('foto')) {
        // Delete old photo if exists
        if ($guru->foto && Storage::exists('public/gurus/' . $guru->foto)) {
            Storage::delete('public/gurus/' . $guru->foto);
        }
        
        $fotoName = time() . '_' . $request->file('foto')->getClientOriginalName();
        $request->file('foto')->storeAs('public/gurus', $fotoName);
        $validated['foto'] = $fotoName;
    } else {
        // Keep the existing photo if no new photo uploaded
        unset($validated['foto']);
    }

    // Update guru data
    $guru->update([
        'nama' => $validated['nama'],
        'nip' => $validated['nip'],
        'jabatan' => $validated['jabatan'],
        'bidang_studi' => $validated['bidang_studi'],
        'foto' => $validated['foto'] ?? $guru->foto,
    ]);

    // Update user data
    $userData = [
        'name' => $validated['nama'],
        'email' => $validated['email'],
    ];

    // Only update password if provided
    if (!empty($validated['password'])) {
        $userData['password'] = bcrypt($validated['password']);
    }

    $guru->user->update($userData);

    return redirect()->route('admin.kelola-guru.index')
        ->with('success', 'Data guru dan akun berhasil diperbarui!');
}
public function destroy(Guru $guru)
{
    // Delete the user account if exists
    if ($guru->user) {
        $guru->user->delete();
    }

    // Delete the photo from storage if exists
    if ($guru->foto && Storage::exists('public/gurus/' . $guru->foto)) {
        Storage::delete('public/gurus/' . $guru->foto);
    }

    // Delete the guru record
    $guru->delete();

    return redirect()->route('admin.kelola-guru.index')
        ->with('success', 'Data guru dan akun berhasil dihapus!');
}
}
