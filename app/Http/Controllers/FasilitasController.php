<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('pengunjung.fasilitas.index', compact('fasilitas'));
    }

    public function show($slug)
    {
        $fasilitas = Fasilitas::where('slug', $slug)->firstOrFail();

        $lainnya = Fasilitas::where('id', '!=', $fasilitas->id)->get();

        return view('pengunjung.fasilitas.show', compact('fasilitas', 'lainnya'));
    }
}
