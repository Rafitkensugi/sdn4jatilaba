<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPDB extends Model
{
    use HasFactory;

    protected $table = 'ppdb';

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
        'no_telepon',
        'no_darurat',
        'akta_path',
        'kk_path'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date'
    ];

    // Accessor untuk jenis kelamin
    public function getJenisKelaminTextAttribute()
    {
        return $this->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan';
    }

    // Accessor untuk tanggal lahir format Indonesia
    public function getTanggalLahirFormattedAttribute()
    {
        return $this->tanggal_lahir->format('d F Y');
    }

    // Accessor untuk tanggal lahir format pendek
    public function getTanggalLahirShortAttribute()
    {
        return $this->tanggal_lahir->format('d/m/Y');
    }

    // Accessor untuk usia
    public function getUsiaAttribute()
    {
        return $this->tanggal_lahir->age;
    }
}