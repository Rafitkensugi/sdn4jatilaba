<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {
        $artikels = [
            [
                'judul' => 'Penerimaan Peserta Didik Baru Tahun 2024',
                'slug' => Str::slug('Penerimaan Peserta Didik Baru Tahun 2024'),
                'isi' => '<p>Penerimaan Peserta Didik Baru (PPDB) Tahun Ajaran 2024/2025 akan dibuka mulai tanggal 1 Juni 2024. Berikut adalah informasi lengkap mengenai persyaratan dan jadwal pendaftaran.</p><p>Persyaratan yang harus dipenuhi:</p><ul><li>Foto copy akta kelahiran</li><li>Foto copy kartu keluarga</li><li>Pas foto 3x4</li><li>Rapor SD/MI</li></ul><p>Untuk informasi lebih lanjut, silakan hubungi panitia PPDB di sekolah.</p>',
                'gambar' => 'artikel/ppdb.jpg',
                'penulis' => 'Admin Sekolah',
                'dibaca' => 1250,
                'status' => 'published',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Workshop Pembelajaran Digital untuk Guru',
                'slug' => Str::slug('Workshop Pembelajaran Digital untuk Guru'),
                'isi' => '<p>Dalam rangka meningkatkan kompetensi guru dalam bidang teknologi pendidikan, sekolah menyelenggarakan workshop pembelajaran digital selama 3 hari.</p><p>Workshop ini diikuti oleh seluruh guru dan staf pengajar. Materi yang diberikan meliputi:</p><ul><li>Penggunaan platform e-learning</li><li>Pembuatan konten digital interaktif</li><li>Teknik assessment online</li><li>Manajemen kelas virtual</li></ul><p>Diharapkan setelah workshop ini, guru dapat mengimplementasikan pembelajaran digital yang lebih efektif.</p>',
                'gambar' => 'artikel/workshop.jpg',
                'penulis' => 'Tim Kurikulum',
                'dibaca' => 890,
                'status' => 'published',
                'published_at' => now()->subDays(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Pentas Seni Tahun 2024 Sukses Digelar',
                'slug' => Str::slug('Pentas Seni Tahun 2024 Sukses Digelar'),
                'isi' => '<p>Pentas Seni tahunan sekolah berhasil diselenggarakan dengan meriah pada tanggal 15 Maret 2024. Acara yang mengusung tema "Kreativitas tanpa Batas" ini menampilkan berbagai pertunjukan dari siswa-siswi.</p><p>Beberapa penampilan yang ditampilkan antara lain:</p><ul><li>Tari tradisional dan modern</li><li>Band dan solo vocal</li><li>Teater dan drama musikal</li><li>Pameran karya seni rupa</li></ul><p>Acara ini dihadiri oleh orang tua siswa dan masyarakat sekitar. Semua penampilan mendapat sambutan yang sangat meriah dari penonton.</p>',
                'gambar' => 'artikel/pentas-seni.jpg',
                'penulis' => 'Tim Kesenian',
                'dibaca' => 1560,
                'status' => 'published',
                'published_at' => now()->subDays(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($artikels as $artikel) {
            Artikel::firstOrCreate(
                ['slug' => $artikel['slug']],
                $artikel
            );
        }
    }
}