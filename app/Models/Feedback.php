<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model
     */
    protected $table = 'feedback';

    /**
     * Kolom yang dapat diisi (mass assignable)
     */
    protected $fillable = [
        'nama',
        'email', 
        'subjek',
        'pesan',
        'status',
        'tanggal'
    ];

    /**
     * Tipe data yang harus di-cast
     */
    protected $casts = [
        'tanggal' => 'datetime',
    ];

    /**
     * Scope untuk feedback yang belum dibaca
     */
    public function scopeBelumDibaca($query)
    {
        return $query->where('status', 'belum_dibaca');
    }

    /**
     * Scope untuk feedback yang sudah dibaca
     */
    public function scopeSudahDibaca($query)
    {
        return $query->where('status', 'dibaca');
    }

    /**
     * Scope untuk urutkan terbaru
     */
    public function scopeTerbaru($query)
    {
        return $query->orderBy('tanggal', 'desc');
    }

    /**
     * Accessor untuk menampilkan nama dengan format title case
     */
    public function getNamaFormattedAttribute()
    {
        return ucwords(strtolower($this->nama));
    }

    /**
     * Accessor untuk menampilkan subjek yang dipotong jika terlalu panjang
     */
    public function getSubjekPendekAttribute()
    {
        return strlen($this->subjek) > 50 
            ? substr($this->subjek, 0, 50) . '...' 
            : $this->subjek;
    }

    /**
     * Accessor untuk menampilkan pesan yang dipotong jika terlalu panjang
     */
    public function getPesanPendekAttribute()
    {
        return strlen($this->pesan) > 100 
            ? substr($this->pesan, 0, 100) . '...' 
            : $this->pesan;
    }
}