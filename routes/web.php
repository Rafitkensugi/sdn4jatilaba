<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\FasilitasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SambutanController;

Route::get('beranda', function () {
    return view('pengunjung.beranda');
})->name('beranda');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');
Route::get('/fasilitas/{id}', [FasilitasController::class, 'show'])->name('fasilitas.show');

// Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.detail');

// Prestasi
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');

// Galeri
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

// PPDB
Route::get('/ppdb', [PPDBController::class, 'index'])->name('ppdb');
Route::post('/ppdb', [PPDBController::class, 'store'])->name('ppdb.store');

require __DIR__.'/auth.php';
