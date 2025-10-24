<?php

namespace App\Http\Controllers;

use App\Models\PPDB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PPDBController extends Controller
{
    public function index()
    {
        return view('pengunjung.spmb');
    }

    public function store(Request $request)
    {   
        // Validasi data
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
            'no_telepon' => 'required|string|max:20',
            'no_darurat' => 'nullable|string|max:20',
            'akta' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'kk' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048'
        ]);

        try {
            // Handle file uploads
            $aktaPath = null;
            $kkPath = null;

            if ($request->hasFile('akta')) {
                $aktaFile = $request->file('akta');
                $aktaName = 'akta_' . Str::random(10) . '_' . time() . '.' . $aktaFile->getClientOriginalExtension();
                $aktaPath = $aktaFile->storeAs('ppdb/documents', $aktaName, 'public');
            }

            if ($request->hasFile('kk')) {
                $kkFile = $request->file('kk');
                $kkName = 'kk_' . Str::random(10) . '_' . time() . '.' . $kkFile->getClientOriginalExtension();
                $kkPath = $kkFile->storeAs('ppdb/documents', $kkName, 'public');
            }

            // Create PPDB record
            PPDB::create([
                'nama_lengkap' => $request->nama_lengkap,
                'nama_panggilan' => $request->nama_panggilan,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'no_telepon' => $request->no_telepon,
                'no_darurat' => $request->no_darurat,
                'akta_path' => $aktaPath,
                'kk_path' => $kkPath
            ]);

            return redirect()->back()->with('success', 'Pendaftaran berhasil dikirim! Data telah disimpan.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    // Method untuk menampilkan data PPDB (opsional, untuk admin)
    public function showData()
    {
        $ppdbData = PPDB::latest()->get();
        return view('admin.ppdb.index', compact('ppdbData'));
    }
}