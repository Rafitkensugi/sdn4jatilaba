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
                'gambar' => 'prestasi2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
