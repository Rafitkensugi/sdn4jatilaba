<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::latest()->get();
        return view('admin.agenda.index', compact('agendas'));
    }

    public function create()
    {
        return view('admin.agenda.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'bulan' => 'required|string',
            'lokasi' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('agenda', 'public');
        }

        Agenda::create($data);

        return redirect()->route('admin.agenda.index')->with('success', 'Agenda berhasil ditambahkan!');
    }

    public function edit(Agenda $agenda)
    {
        return view('admin.agenda.edit', compact('agenda'));
    }

    public function update(Request $request, Agenda $agenda)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'bulan' => 'required|string',
            'lokasi' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            if ($agenda->gambar) {
                Storage::disk('public')->delete($agenda->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('agenda', 'public');
        }

        $agenda->update($data);

        return redirect()->route('admin.agenda.index')->with('success', 'Agenda berhasil diperbarui!');
    }

    public function destroy(Agenda $agenda)
    {
        if ($agenda->gambar) {
            Storage::disk('public')->delete($agenda->gambar);
        }
        $agenda->delete();

        return redirect()->route('admin.agenda.index')->with('success', 'Agenda berhasil dihapus!');
    }
}
