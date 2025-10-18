<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nip',
        'jabatan',
        'foto',
        'bidang_studi',
        'aktif_sejak',
        'status',
        'domisili',
        'user_id' // untuk relasi dengan user jika menjadi admin
    ];

    protected $casts = [
        'aktif_sejak' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}