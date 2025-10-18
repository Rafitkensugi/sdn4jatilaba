<?php

namespace App\Http\Controllers;

use App\Models\SPMB;
use Illuminate\Http\Request;

class SPMBController extends Controller
{
    public function index()
    {
        return view('pengunjung.spmb');
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

        SPMB::create($request->all());

        return redirect()->back()->with('success', 'Pendaftaran berhasil dikirim!');
    }
}
