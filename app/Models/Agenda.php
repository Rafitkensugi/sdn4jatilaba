<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agendas'; // nama tabel
    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
    ];
}
