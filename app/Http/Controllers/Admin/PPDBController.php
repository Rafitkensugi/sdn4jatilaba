<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PPDB;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PPDBController extends Controller
{
    public function index()
    {
        $ppdbData = PPDB::orderBy('created_at', 'desc')->get();
        return view('admin.ppdb.index', compact('ppdbData'));
    }

    public function show($id)
    {
        $ppdb = PPDB::findOrFail($id);
        return view('admin.ppdb.show', compact('ppdb'));
    }

    public function destroy($id)
    {
        try {
            $ppdb = PPDB::findOrFail($id);
            
            // Hapus file jika ada
            if ($ppdb->akta_path && \Storage::disk('public')->exists($ppdb->akta_path)) {
                \Storage::disk('public')->delete($ppdb->akta_path);
            }
            
            if ($ppdb->kk_path && \Storage::disk('public')->exists($ppdb->kk_path)) {
                \Storage::disk('public')->delete($ppdb->kk_path);
            }
            
            $ppdb->delete();
            
            return redirect()->route('admin.ppdb.index')->with('success', 'Data PPDB berhasil dihapus!');
            
        } catch (\Exception $e) {
            return redirect()->route('admin.ppdb.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function downloadPDF($id)
    {
        $ppdb = PPDB::findOrFail($id);
        
        $pdf = Pdf::loadView('admin.ppdb.pdf', compact('ppdb'));
        
        $filename = 'formulir-ppdb-' . str_replace(' ', '-', $ppdb->nama_lengkap) . '-' . date('Y-m-d') . '.pdf';
        
        return $pdf->download($filename);
    }

    public function viewPDF($id)
    {
        $ppdb = PPDB::findOrFail($id);
        
        $pdf = Pdf::loadView('admin.ppdb.pdf', compact('ppdb'));
        
        $filename = 'formulir-ppdb-' . str_replace(' ', '-', $ppdb->nama_lengkap) . '-' . date('Y-m-d') . '.pdf';
        
        return $pdf->stream($filename);
    }
}