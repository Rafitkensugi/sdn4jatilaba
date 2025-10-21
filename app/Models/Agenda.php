<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'tanggal',
        'lokasi',
        'deskripsi',
        'gambar',
        'bulan'
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}
