<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengumumanData = [
            [
                'judul' => 'Pemberitahuan Libur Semester Ganjil',
                'isi' => 'Diumumkan kepada seluruh siswa SDN 4 Jatilaba bahwa libur semester ganjil akan dimulai pada tanggal 20 Desember 2025 sampai dengan 5 Januari 2026. Kegiatan belajar mengajar akan dimulai kembali pada tanggal 6 Januari 2026.',
                'gambar' => null,
            ],
            [
                'judul' => 'Pengumuman Hasil Evaluasi Tengah Semester',
                'isi' => 'Hasil evaluasi tengah semester akan diumumkan pada hari Senin, 10 November 2025 melalui wali kelas masing-masing.',
                'gambar' => null,
            ],
            [
                'judul' => 'Pelaksanaan Vaksinasi di Sekolah',
                'isi' => 'SDN 4 Jatilaba bekerja sama dengan Puskesmas Margasari akan mengadakan vaksinasi untuk siswa kelas 1 hingga 6 pada tanggal 3 November 2025. Mohon kehadiran orang tua/wali siswa.',
                'gambar' => null,
            ],
            [
                'judul' => 'Pengambilan Raport Akhir Tahun',
                'isi' => 'Pengambilan raport akhir tahun ajaran 2025/2026 akan dilaksanakan pada hari Sabtu, 21 Juni 2026 mulai pukul 08.00 WIB di ruang kelas masing-masing.',
                'gambar' => null,
            ],
            [
                'judul' => 'Kegiatan Gotong Royong Sekolah',
                'isi' => 'Dalam rangka menjaga kebersihan lingkungan sekolah, diharapkan seluruh siswa dan guru mengikuti kegiatan gotong royong pada hari Jumat, 24 Oktober 2025.',
                'gambar' => null,
            ],
        ];

        foreach ($pengumumanData as $data) {
            DB::table('pengumuman')->insert([
                'judul' => $data['judul'],
                'penulis' => 'Admin SDN 4 Jatilaba',
                'isi' => $data['isi'],
                'gambar' => $data['gambar'],
                'tanggal' => now()->subDays(rand(0, 30)),
                'views' => rand(5, 300),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
