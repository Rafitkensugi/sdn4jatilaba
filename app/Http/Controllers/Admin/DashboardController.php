<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Fasilitas;
use App\Models\Pengumuman;
use App\Models\Prestasi;
use App\Models\Artikel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $today = Carbon::today();

        $artikels = Artikel::count();
        $newArtikel = Artikel::whereDate('created_at', $today)->count();

        $pengumumans = Pengumuman::count();
        $newPengumuman = Pengumuman::whereDate('created_at', $today)->count();

        $prestasis = Prestasi::count();
        $newPrestasi = Prestasi::whereDate('created_at', $today)->count();
        
        $fasilitas = Fasilitas::count();
        $newFasilitas = Fasilitas::whereDate('created_at', $today)->count();

        return view('admin.dashboard', compact('artikels', 'newArtikel', 'pengumumans', 'newPengumuman', 'prestasis', 'newPrestasi', 'fasilitas', 'newFasilitas'));
    }
}   


