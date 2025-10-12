<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PPDBController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [BerandaController::class, 'index'])->name('home');

// Profil
Route::get('/profil', [ProfileController::class, 'index'])->name('profil');

// Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.detail');

// Prestasi
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');

// Galeri
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

// Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

// PPDB
Route::get('/ppdb', [PPDBController::class, 'index'])->name('ppdb');
Route::post('/ppdb', [PPDBController::class, 'store'])->name('ppdb.store');