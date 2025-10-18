<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::where('status', 'published')
            ->latest()
            ->paginate(9);
            
        return view('pengumuman', compact('pengumuman'));
    }

    public function show($id)
    {
        $pengumuman = Pengumuman::where('status', 'published')
            ->findOrFail($id);
            
        // Get related pengumuman
        $related = Pengumuman::where('status', 'published')
            ->where('id', '!=', $id)
            ->latest()
            ->take(3)
            ->get();
            
        return view('pengumuman-detail', compact('pengumuman', 'related'));
    }
}