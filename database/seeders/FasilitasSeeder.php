<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fasilitas;

class FasilitasSeeder extends Seeder
{
    public function run(): void
    {
        $fasilitas = [
            [
                'nama' => 'Perpustakaan Sekolah',
                'deskripsi' => 'Perpustakaan Sekolah Harapan Bangsa merupakan pusat sumber belajar yang nyaman dan modern. Dilengkapi dengan ribuan koleksi buku cetak maupun digital, siswa dapat memperluas wawasan dalam berbagai bidang ilmu. Ruangan perpustakaan didesain dengan pencahayaan alami, kursi baca ergonomis, serta area tenang untuk membaca maupun diskusi kelompok. Selain itu, tersedia juga komputer yang terkoneksi internet untuk mendukung kegiatan riset dan literasi digital siswa. Setiap minggu diadakan kegiatan “Hari Membaca” untuk menumbuhkan minat baca sejak dini.',
                'foto' => 'images/perpustakaan.jpg',
            ],
            [
                'nama' => 'Lapangan Olahraga',
                'deskripsi' => 'Area olahraga untuk sepak bola, voli, dan basket.',
                'foto' => 'images/lapangan.jpg',
            ],
            [
                'nama' => 'Kamar Mandi Siswa',
                'deskripsi' => 'Dilengkapi fasilitas kamar mandi yang bersih dan terawat.',
                'foto' => 'images/kamarmandi.jpg',
            ],
            [
                'nama' => 'Parkiran Siswa',
                'deskripsi' => 'Area parkir luas untuk kendaraan siswa dan guru.',
                'foto' => 'images/parkirsiswa.jpg',
            ],
            [
                'nama' => 'Ruang kelas',
                'deskripsi' => 'Ruang kelas yang bersih dan nyaman membuat siswa dan siswi nyaman belajar',
                'foto' => 'images/ruangkelas.jpg',
            ],
        ];

        foreach ($fasilitas as $item) {
            Fasilitas::create($item);
        }
    }
}
