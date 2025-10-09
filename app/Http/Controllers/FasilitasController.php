<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $deskripsiSekolah = "
            Sekolah kami berkomitmen memberikan lingkungan belajar yang nyaman, 
            modern, dan mendukung perkembangan siswa secara menyeluruh. 
            Berikut adalah beberapa fasilitas unggulan yang kami sediakan 
            untuk menunjang proses pembelajaran dan kegiatan siswa sehari-hari.
        ";

        $fasilitas = [
            [
                'nama' => 'Perpustakaan Sekolah',
                'deskripsi' => 'Tempat membaca dan meminjam buku dengan koleksi lengkap serta suasana tenang untuk belajar.',
                'foto' => 'images/perpustakaan.jpg',
            ],
            [
                'nama' => 'Lapangan Olahraga',
                'deskripsi' => 'Area luas untuk kegiatan olahraga seperti sepak bola, voli, dan basket.',
                'foto' => 'images/lapangan.jpg',
            ],
            [
                'nama' => 'Laboratorium Komputer',
                'deskripsi' => 'Dilengkapi komputer modern dan jaringan internet untuk pembelajaran teknologi informasi.',
                'foto' => 'images/lab-komputer.jpg',
            ],
            [
                'nama' => 'Kamar Mandi Siswa',
                'deskripsi' => 'Fasilitas sanitasi yang bersih dan terawat untuk kenyamanan seluruh siswa.',
                'foto' => 'images/kamarmandi.jpg',
            ],
            [
                'nama' => 'Parkiran Siswa',
                'deskripsi' => 'Area parkir luas dan aman untuk kendaraan siswa dan guru.',
                'foto' => 'images/parkirsiswa.jpg',
            ],
            [
                'nama' => 'Ruang Kelas Nyaman',
                'deskripsi' => 'Setiap ruang kelas dilengkapi dengan pencahayaan yang baik, ventilasi, serta peralatan multimedia.',
                'foto' => 'images/ruangkelas.jpg',
            ],
        ];

        return view('fasilitas.index', compact('fasilitas', 'deskripsiSekolah'));
    }
}
