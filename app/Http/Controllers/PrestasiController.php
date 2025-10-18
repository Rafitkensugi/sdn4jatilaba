<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasis = Prestasi::latest()->paginate(9);
        return view('pengunjung.prestasi', compact('prestasis'));
    }

    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasiLainnya = Prestasi::where('id', '!=', $id)
            ->latest()
            ->limit(5)
            ->get();
            
        return view('pengunjung.prestasi-detail', compact('prestasi', 'prestasiLainnya'));
    }
}