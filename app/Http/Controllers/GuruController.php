<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    //
    public function index()
    {
        $gurus = Guru::all();
        return view('admin.kelola-guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('admin.kelola-guru.create');
    }

    public function show (Guru $guru)
    {
        return view('admin.kelola-guru.show', compact('guru'));
    }
}
