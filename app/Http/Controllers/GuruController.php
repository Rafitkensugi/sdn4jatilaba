<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::where('status', 'PNS')
                    ->orderBy('jabatan')
                    ->orderBy('nama')
                    ->get();
        
        return view('guru.index', compact('gurus'));
    }

    public function show($id)
    {
        $guru = Guru::with('user')->findOrFail($id);
        
        return view('guru.show', compact('guru'));
    }

    public function profile()
    {
        // Untuk menampilkan profile guru yang sedang login
        if (auth()->check() && auth()->user()->guru) {
            $guru = auth()->user()->guru;
            return view('guru.profile', compact('guru'));
        }
        
        return redirect()->route('home')->with('error', 'Anda bukan guru.');
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        
        $gurus = Guru::where('nama', 'LIKE', "%{$query}%")
                    ->orWhere('bidang_studi', 'LIKE', "%{$query}%")
                    ->orWhere('jabatan', 'LIKE', "%{$query}%")
                    ->get();
        
        return view('guru.search', compact('gurus', 'query'));
    }
}