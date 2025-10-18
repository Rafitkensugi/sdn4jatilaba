<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'kategori',
        'konten',
        'gambar',
        'penulis',
        'status',
        'views'
    ];

    protected $casts = [
        'views' => 'integer'
    ];
}