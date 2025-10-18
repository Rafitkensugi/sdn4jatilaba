<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Guru;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        // Ambil 3 artikel terbaru
        $artikels = Artikel::orderBy('created_at', 'desc')->take(3)->get();

        // Ambil data guru
        $gurus = Guru::orderBy('jabatan')->get();

        // Kirim ke view
        return view('pengunjung.beranda', compact('artikels', 'gurus'));
    }
}