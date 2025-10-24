<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasis = Prestasi::latest()->get();
        return view('pengunjung.prestasi', compact('prestasis'));
    }

    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('pengunjung.prestasi-detail', compact('prestasi'));
    }
}
