<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'foto', 
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($fasilitas) {
            $fasilitas->slug = Str::slug($fasilitas->nama);
        });

        static::updating(function ($fasilitas) {
            $fasilitas->slug = Str::slug($fasilitas->nama);
        });
    }
}
