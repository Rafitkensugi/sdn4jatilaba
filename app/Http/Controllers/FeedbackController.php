<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Menyimpan feedback baru dari form kontak
     */
    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        // Simpan ke database
        Feedback::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'subjek' => $validated['subjek'],
            'pesan' => $validated['pesan'],
            'status' => 'belum_dibaca',
            'tanggal' => now(),
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Terima kasih! Pesan Anda telah berhasil dikirim.');
    }
}