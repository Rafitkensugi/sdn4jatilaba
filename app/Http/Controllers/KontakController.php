<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class KontakController extends Controller
{
    public function index()
    {
        return view('pengunjung.kontak');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'pesan' => 'required|string|max:500',
        ]);

        Pesan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        return back()->with('success', 'Pesan kamu berhasil dikirim! Terima kasih sudah menghubungi kami.');
    }
}
