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
    BerandaController,
    AgendaController,
    ProfilSekolahController,
    SejarahController
};
use App\Models\Feedback;
use App\Models\Fasilitas;

// Controller untuk Admin
use App\Http\Controllers\Admin\FasilitasController as AdminFasilitasController;
use App\Http\Controllers\Admin\AgendaController as AdminAgendaController;
use App\Http\Controllers\Admin\GuruController as AdminGuruController;
use App\Http\Controllers\Admin\PengumumanController as AdminPengumumanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// =======================================================
// 🔹 ROUTE UNTUK ADMIN (Dashboard & CRUD)
// =======================================================
Route::middleware(['auth', 'role:admin|super-admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // CRUD Fasilitas
        Route::resource('fasilitas', AdminFasilitasController::class);

        // CRUD Agenda
        Route::resource('agenda', AdminAgendaController::class);
        Route::resource('/berita', BeritaController::class);
        Route::get('/berita', [BeritaController::class, 'adminIndex'])->name('admin.berita.index');     
    });

// =======================================================
// 🔹 ROUTE UNTUK PENGUNJUNG / PUBLIK
// =======================================================

// Halaman utama / beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/beranda', [BerandaController::class, 'index']);

// Agenda Sekolah
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');

// Artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');

// Sambutan Kepala Sekolah
Route::get('/sambutan', [SambutanController::class, 'index'])->name('sambutan');

// Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

// Fasilitas
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('pengunjung.fasilitas.index');
Route::get('/fasilitas/{slug}', [FasilitasController::class, 'show'])->name('pengunjung.fasilitas.show');

// PPDB / SPMB
Route::get('/spmb', [PPDBController::class, 'index'])->name('spmb');
Route::post('/spmb', [PPDBController::class, 'store'])->name('spmb.store');

// Berita Sekolah
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.detail');

// Prestasi
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');
Route::get('/prestasi/{id}', [PrestasiController::class, 'show'])->name('prestasi.show');

// Galeri
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

// Program Sekolah
Route::get('/program', [ProgramController::class, 'index'])->name('program');

// Visi & Misi
Route::get('/visi-misi', [VisiMisiController::class, 'index'])->name('visi-misi');

// Profil Sekolah
Route::get('/profil-sekolah', [ProfilSekolahController::class, 'index'])->name('profil-sekolah');

// Sejarah Sekolah
Route::get('/sejarah', [SejarahController::class, 'index'])->name('sejarah');

// =======================================================
// 🔹 ROUTE UNTUK AUTENTIKASI & PROFILE
// =======================================================
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Dashboard user biasa
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile user login
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route tambahan Laravel Breeze / Jetstream
require __DIR__ . '/auth.php';
