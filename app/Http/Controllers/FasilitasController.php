<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    private $fasilitas = [
        [
            'slug' => 'perpustakaan-sekolah',
            'nama' => 'Perpustakaan Sekolah',
            'gambar' => 'images/perpustakaan.jpg',
            'deskripsi' => 'Perpustakaan dengan koleksi buku lengkap, ruang baca nyaman, dan suasana tenang.',
        ],
        [
            'slug' => 'lapangan-upacara',
            'nama' => 'Lapangan Upacara',
            'gambar' => 'images/lapangan.jpg',
            'deskripsi' => 'Lapangan serbaguna untuk upacara, olahraga, dan kegiatan luar ruangan.',
        ],
        [
            'slug' => 'Kamar mandi-siswa',
            'nama' => 'Kamar mandi siswa',
            'gambar' => 'images/kamarmandi.jpg',
            'deskripsi' => 'Menjaga Kesehatan Siswa Melalui Toilet Sekolah yang Bersih.',
        ],
        [
            'slug' => 'parkiran-siswa',
            'nama' => 'Parkiran Siswa',
            'gambar' => 'images/parkirsiswa.jpg',
            'deskripsi' => 'Area parkir yang aman untuk kendaraan siswa dan tamu sekolah.',
        ],
        [
            'slug' => 'ruang-kelas-nyaman',
            'nama' => 'Ruang Kelas Nyaman',
            'gambar' => 'images/ruangkelas.jpg',
            'deskripsi' => 'Ruang kelas modern dengan ventilasi baik dan fasilitas multimedia.',
        ],
    ];

    public function index()
    {
        $fasilitas = $this->fasilitas;
        return view('fasilitas.index', compact('fasilitas'));
    }

    public function show($slug)
    {
        $fasilitas = collect($this->fasilitas)->firstWhere('slug', $slug);
        $lainnya = collect($this->fasilitas)->where('slug', '!=', $slug)->take(4);

        if (!$fasilitas) abort(404);

        return view('fasilitas.show', compact('fasilitas', 'lainnya'));
    }
}
