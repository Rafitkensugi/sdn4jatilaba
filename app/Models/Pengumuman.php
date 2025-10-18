<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumuman'; // 👈 Tambahkan ini!

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'tanggal',
        'penulis',
        'status'
    ];

    protected $casts = [
        'tanggal' => 'datetime',
    ];
}
