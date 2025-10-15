<?php

namespace App\Http\Controllers;

use App\Models\PPDB;
use Illuminate\Http\Request;

class PPDBController extends Controller
{
    public function index()
    {
        return view('ppdb.pengunjung');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'no_telepon' => 'required'
        ]);

        PPDB::create($request->all());

        return redirect()->back()->with('success', 'Pendaftaran berhasil dikirim!');
    }
}
