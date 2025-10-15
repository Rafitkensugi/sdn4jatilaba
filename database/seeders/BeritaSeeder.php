<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Berita;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder {
    public function run(){
        Berita::create([
            'judul' => 'Selamat Datang di SDN 4 Jatilaba',
            'slug' => Str::slug('Selamat Datang di SDN 4 Jatilaba'),
            'excerpt' => 'Berita selamat datang dan pengumuman penting untuk orangtua siswa.',
            'konten' => '<p>Ini contoh konten pembuka. Silakan ganti dengan konten resmi.</p>',
            'gambar' => 'uploads/berita/sample-hero.jpg',
            'published_at' => now()
        ]);
    }
}
