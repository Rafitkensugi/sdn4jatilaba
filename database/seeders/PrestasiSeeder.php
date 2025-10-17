<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrestasiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('prestasis')->insert([
            [
                'judul' => 'Lomba Cerdas Cermat Nasional',
                'tempat' => 'Jakarta',
                'tingkat' => 'Nasional',
                'tanggal' => '2024-11-12',
                'juara' => 'Juara 1',
                'deskripsi' => 'Tim sekolah berhasil meraih juara pertama dalam ajang Cerdas Cermat Nasional yang diikuti oleh 34 provinsi di Indonesia.',
                'gambar' => 'prestasi1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Olimpiade Sains Kabupaten',
                'tempat' => 'Bandung',
                'tingkat' => 'Kabupaten',
                'tanggal' => '2024-08-10',
                'juara' => 'Juara 2',
                'deskripsi' => 'Siswa berhasil menorehkan prestasi gemilang dengan meraih juara kedua dalam ajang Olimpiade Sains tingkat kabupaten.',
                'gambar' => 'prestasi2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Lomba Menulis Cerpen Pelajar',
                'tempat' => 'Surabaya',
                'tingkat' => 'Provinsi',
                'tanggal' => '2024-06-25',
                'juara' => 'Juara Harapan 1',
                'deskripsi' => 'Karya cerpen bertema pendidikan yang ditulis oleh salah satu siswa sekolah kita berhasil masuk lima besar terbaik tingkat provinsi.',
                'gambar' => 'prestasi3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
