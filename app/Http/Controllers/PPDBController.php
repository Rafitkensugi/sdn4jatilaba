<?php

namespace App\Http\Controllers;

use App\Models\PPDB;
use Illuminate\Http\Request;

class PPDBController extends Controller
{
    public function index()
    {
        return view('pengunjung.spmb');
    }

    public function store(Request $request)
{   
    
    $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'nama_panggilan' => 'required|string|max:100',
        'tempat_lahir' => 'required|string|max:100',
        'tanggal_lahir' => 'required|date|before:today',
        'jenis_kelamin' => 'required|in:L,P',
        'agama' => 'required|string|max:50',
        'alamat' => 'required|string|max:500',
        'nama_ayah' => 'required|string|max:255',
        'nama_ibu' => 'required|string|max:255',
        'pekerjaan_ayah' => 'required|string|max:100',
        'pekerjaan_ibu' => 'required|string|max:100',
        'no_telepon' => 'required|string|max:20'
    ]);

    
    try {
        PPDB::create($request->all());
        return redirect()->back()->with('success', 'Pendaftaran berhasil dikirim!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
    
}
}
