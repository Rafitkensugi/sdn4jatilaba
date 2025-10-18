<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'tempat', 
        'tingkat',
        'tanggal',
        'juara',
        'gambar',
        'deskripsi'
    ];

    protected $casts = [
        'tanggal' => 'date'
    ];

    // Accessor untuk format tanggal yang lebih baik
    public function getTanggalFormattedAttribute()
    {
        return $this->tanggal->format('d F Y');
    }

    // Scope untuk filtering berdasarkan tingkat
    public function scopeTingkat($query, $tingkat)
    {
        return $query->where('tingkat', $tingkat);
    }

    // Scope untuk prestasi terbaru
    public function scopeTerbaru($query, $limit = 6)
    {
        return $query->orderBy('tanggal', 'desc')->limit($limit);
    }
}