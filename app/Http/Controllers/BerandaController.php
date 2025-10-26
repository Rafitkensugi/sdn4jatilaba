<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Guru;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Tampilkan halaman beranda pengunjung.
     */
    public function index()
    {
        // Ambil 3 artikel terbaru
        $artikels = Artikel::latest()->take(3)->get();

        // Ambil semua data guru
        $gurus = Guru::all();

        // Ambil 3 pengumuman terbaru
        $pengumuman = Pengumuman::latest()->take(3)->get();

        // Kirim semua data ke view
        return view('pengunjung.beranda', [
            'artikels' => $artikels,
            'gurus' => $gurus,
            'pengumuman' => $pengumuman,
        ]);
    }
}
