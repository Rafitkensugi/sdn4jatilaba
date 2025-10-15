<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artikelData = [
            [
                'judul' => 'Pentingnya Pendidikan Karakter di Sekolah Dasar',
                'isi' => 'Pendidikan karakter merupakan fondasi penting dalam membentuk pribadi siswa yang berakhlak mulia. Di SDN 4 Jatilaba, kami menekankan nilai-nilai seperti kejujuran, tanggung jawab, dan gotong royong sejak dini.',
                'gambar' => null, // Anda bisa tambahkan path gambar jika ada
            ],
            [
                'judul' => 'Kegiatan Ekstrakurikuler yang Mengasah Bakat Siswa',
                'isi' => 'SDN 4 Jatilaba menyediakan berbagai ekstrakurikuler seperti pramuka, seni tari, dan olahraga untuk mengembangkan minat dan bakat siswa di luar jam pelajaran.',
                'gambar' => null,
            ],
            [
                'judul' => 'Peringatan Hari Kemerdekaan di SDN 4 Jatilaba',
                'isi' => 'Pada 17 Agustus 2025, SDN 4 Jatilaba mengadakan upacara bendera dan berbagai lomba tradisional untuk memperingati Hari Kemerdekaan Republik Indonesia ke-80.',
                'gambar' => null,
            ],
            [
                'judul' => 'Sosialisasi Bahaya Narkoba untuk Siswa Kelas 6',
                'isi' => 'Dalam rangka pencegahan dini, pihak sekolah menggandeng BNN Kabupaten untuk memberikan sosialisasi tentang bahaya narkoba kepada siswa kelas 6.',
                'gambar' => null,
            ],
            [
                'judul' => 'Peningkatan Sarana dan Prasarana Sekolah Tahun 2025',
                'isi' => 'Tahun ini, SDN 4 Jatilaba mendapatkan bantuan dari pemerintah daerah untuk memperbaiki perpustakaan dan menambah fasilitas laboratorium komputer.',
                'gambar' => null,
            ],
        ];

        foreach ($artikelData as $data) {
            DB::table('artikels')->insert([
                'judul' => $data['judul'],
                'penulis' => 'Admin SDN 4 Jatilaba',
                'isi' => $data['isi'],
                'gambar' => $data['gambar'],
                'tanggal' => now()->subDays(rand(0, 30)), // Tanggal acak dalam 30 hari terakhir
                'views' => rand(10, 500),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}