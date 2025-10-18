<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SPMB;
use Illuminate\Http\Request;

class SPMBController extends Controller
{
    public function index()
    {
        // Tampilkan semua data pendaftar tanpa status
        $spmb = SPMB::latest()->paginate(10);
        $totalPendaftar = SPMB::count();

        return view('admin.spmb.index', compact('spmb', 'totalPendaftar'));
    }

    public function show($id)
    {
        // Detail satu pendaftar
        $data = SPMB::findOrFail($id);
        return view('admin.spmb.show', compact('data'));
    }

    public function destroy($id)
    {
        // Hapus data pendaftar
        $data = SPMB::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.spmb.index')
                         ->with('success', 'Data pendaftar berhasil dihapus!');
    }
}
