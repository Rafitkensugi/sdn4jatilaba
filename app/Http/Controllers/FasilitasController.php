<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('fasilitas.index', compact('fasilitas'));
    }

    public function show($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $lainnya = Fasilitas::where('id', '!=', $id)->get();

        return view('fasilitas.show', compact('fasilitas', 'lainnya'));
    }
}
