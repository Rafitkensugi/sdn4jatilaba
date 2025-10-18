<?php

namespace Database\Seeders;

use App\Models\Prestasi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrestasiSeeder extends Seeder
{
    public function run(): void
    {
        $prestasis = [
            [
                'judul' => 'Juara 1 Lomba Cerdas Cermat Nasional 2024',
                'tempat' => 'Jakarta Convention Center',
                'tingkat' => 'Nasional',
                'tanggal' => '2024-03-15',
                'juara' => 'Juara 1',
                'deskripsi' => 'Tim cerdas cermat sekolah berhasil meraih juara pertama dalam Lomba Cerdas Cermat Nasional 2024 yang diikuti oleh 100 sekolah dari seluruh Indonesia. Prestasi ini merupakan hasil dari kerja keras dan persiapan yang matang selama berbulan-bulan.',
                'gambar' => 'prestasi/cerdas-cermat.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Medali Emas Olimpiade Sains Nasional',
                'tempat' => 'Surabaya',
                'tingkat' => 'Nasional',
                'tanggal' => '2024-02-20',
                'juara' => 'Medali Emas',
                'deskripsi' => 'Siswa berhasil meraih medali emas dalam Olimpiade Sains Nasional bidang Matematika. Kompetisi ini diikuti oleh siswa-siswa terbaik dari seluruh Indonesia dan menjadi kebanggaan bagi sekolah.',
                'gambar' => 'prestasi/olimpiade-sains.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Juara 2 Lomba Debat Bahasa Inggris',
                'tempat' => 'Bandung',
                'tingkat' => 'Provinsi',
                'tanggal' => '2024-01-25',
                'juara' => 'Juara 2',
                'deskripsi' => 'Tim debat bahasa Inggris sekolah berhasil mencapai final dan meraih juara kedua dalam kompetisi debat tingkat provinsi. Prestasi ini menunjukkan kemampuan bahasa Inggris siswa yang sangat baik.',
                'gambar' => 'prestasi/debat-bahasa.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Juara 1 Festival Robotik Sekolah',
                'tempat' => 'Yogyakarta',
                'tingkat' => 'Nasional',
                'tanggal' => '2023-12-10',
                'juara' => 'Juara 1',
                'deskripsi' => 'Tim robotik sekolah berhasil menjuarai Festival Robotik Nasional dengan inovasi robot pembersih sampah otomatis. Robot ini dirancang untuk membantu kebersihan lingkungan sekolah.',
                'gambar' => 'prestasi/robotik.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Medali Perunggu Olimpiade Olahraga',
                'tempat' => 'Semarang',
                'tingkat' => 'Nasional',
                'tanggal' => '2023-11-05',
                'juara' => 'Medali Perunggu',
                'deskripsi' => 'Atlet sekolah berhasil meraih medali perunggu dalam cabang olahraga atletik pada Olimpiade Olahraga Siswa Nasional. Prestasi ini membuktikan bahwa sekolah tidak hanya unggul di akademik tetapi juga di non-akademik.',
                'gambar' => 'prestasi/atletik.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Juara Harapan 1 Lomba Karya Tulis Ilmiah',
                'tempat' => 'Malang',
                'tingkat' => 'Nasional',
                'tanggal' => '2023-10-15',
                'juara' => 'Juara Harapan 1',
                'deskripsi' => 'Siswa berhasil meraih juara harapan pertama dalam Lomba Karya Tulis Ilmiah Nasional dengan penelitian tentang pemanfaatan limbah pertanian. Karya ini diapresiasi karena kontribusinya terhadap lingkungan.',
                'gambar' => 'prestasi/karya-tulis.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Juara 3 Lomba Programming',
                'tempat' => 'Jakarta',
                'tingkat' => 'Nasional',
                'tanggal' => '2023-09-20',
                'juara' => 'Juara 3',
                'deskripsi' => 'Tim programming sekolah berhasil meraih juara ketiga dalam kompetisi coding nasional. Mereka berhasil menyelesaikan semua challenge dengan waktu yang cepat dan kode yang efisien.',
                'gambar' => 'prestasi/programming.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Juara 1 Lomba Paduan Suara',
                'tempat' => 'Surakarta',
                'tingkat' => 'Regional',
                'tanggal' => '2023-08-12',
                'juara' => 'Juara 1',
                'deskripsi' => 'Paduan suara sekolah berhasil meraih juara pertama dalam festival paduan suara regional. Penampilan mereka dengan lagu tradisional dan modern memukau dewan juri dan penonton.',
                'gambar' => 'prestasi/paduan-suara.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($prestasis as $prestasi) {
            Prestasi::firstOrCreate(
                ['judul' => $prestasi['judul']],
                $prestasi
            );
        }
    }
}