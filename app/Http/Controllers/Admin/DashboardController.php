<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\Prestasi;
use App\Models\Fasilitas;
use App\Models\Guru;
use App\Models\SPMB;
use App\Models\Siswa;
use App\Models\Feedback;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'totalBerita' => Berita::count(),
            'totalPengumuman' => Pengumuman::count(),
            'totalPrestasi' => Prestasi::count(),
            'totalFasilitas' => Fasilitas::count(),
            'totalGuru' => Guru::count(),
            'totalPendaftarSPMB' => SPMB::count(),
          
            'totalFeedback' => Feedback::where('status', 'baru')->count(),
        ];

        $recentActivities = [
            [
                'message' => 'Berita baru "Penerimaan Siswa Baru" ditambahkan',
                'time' => '10 menit lalu'
            ],
            [
                'message' => 'Pengumuman rapat guru dikirim',
                'time' => '1 jam lalu'
            ],
            [
                'message' => 'Prestasi siswa di Olimpiade Matematika diinput',
                'time' => '2 jam lalu'
            ],
            [
                'message' => 'Data guru baru ditambahkan',
                'time' => '3 jam lalu'
            ],
            [
                'message' => 'Informasi SPMB diperbarui',
                'time' => 'Hari ini'
            ],
        ];

        return view('admin.dashboard', compact('stats', 'recentActivities'));
    }
}