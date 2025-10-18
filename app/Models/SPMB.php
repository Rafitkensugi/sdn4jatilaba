<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPMB extends Model
{
    use HasFactory;

    protected $table = 'spmb'; // <== tambahkan ini

    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'no_telepon'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date'
    ];
}
