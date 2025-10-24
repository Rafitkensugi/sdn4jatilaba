<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel agendas
        $agendas = Agenda::latest()->get();

        return view('pengunjung.agenda', compact('agendas'));
    }
}
