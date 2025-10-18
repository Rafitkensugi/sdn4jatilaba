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
        'user_id'
    ];

    protected $casts = [
        'aktif_sejak' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Scope untuk filter status
    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    // Scope untuk search
    public function scopeSearch($query, $search)
    {
        return $query->where('nama', 'like', "%{$search}%")
                    ->orWhere('nip', 'like', "%{$search}%")
                    ->orWhere('jabatan', 'like', "%{$search}%")
                    ->orWhere('bidang_studi', 'like', "%{$search}%");
    }

    // Accessor untuk foto URL
    public function getFotoUrlAttribute()
    {
        if ($this->foto) {
            return asset('storage/' . $this->foto);
        }
        
        return asset('images/teacher-placeholder.jpg');
    }

    // Accessor untuk masa kerja
    public function getMasaKerjaAttribute()
    {
        return $this->aktif_sejak->diffInYears(now());
    }

    // Method untuk cek apakah guru adalah admin
    public function getIsAdminAttribute()
    {
        return $this->user && $this->user->hasRole('admin');
    }
}