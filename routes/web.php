<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ArtikelController,
    PPDBController,
    BeritaController,
    GaleriController,
    KontakController,
    ProfileController,
    ProgramController,
    PrestasiController,
    SambutanController,
    VisiMisiController,
    FasilitasController,
    Auth\AuthenticatedSessionController,
    BerandaController
};

// ✅ Halaman utama beranda
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::get('/', [BerandaController::class, 'index']);

// Artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');

// Sambutan
Route::get('/sambutan', [SambutanController::class, 'index'])->name('sambutan');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

// Auth
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Fasilitas
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');
Route::get('/fasilitas/{id}', [FasilitasController::class, 'show'])->name('fasilitas.show');

// PPDB
Route::get('/ppdb', [PPDBController::class, 'index'])->name('ppdb');
Route::post('/ppdb', [PPDBController::class, 'store'])->name('ppdb.store');

// Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.detail');

// Prestasi
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');

// Galeri
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

// Program
Route::get('/program', [ProgramController::class, 'index'])->name('program');

// Visi Misi
Route::get('/visi-misi', [VisiMisiController::class, 'index'])->name('visi-misi');

require __DIR__.'/auth.php';
