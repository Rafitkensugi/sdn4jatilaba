<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    // Tambahkan baris ini untuk memastikan Laravel pakai tabel 'pengumuman'
    protected $table = 'pengumuman';

    protected $fillable = [
        'judul',
        'penulis',
        'isi',
        'gambar',
        'tanggal',
        'views',
    ];
}
    