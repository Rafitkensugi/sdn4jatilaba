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

// Controller untuk Admin
use App\Http\Controllers\Admin\FasilitasController as AdminFasilitasController;
use App\Http\Controllers\Admin\AgendaController as AdminAgendaController;
use App\Http\Controllers\Admin\PrestasiController as AdminPrestasiController;
use App\Http\Controllers\Admin\PesanController as AdminPesanController; // ✅ Tambahkan ini

// =======================================================
// 🔹 ROUTE UNTUK ADMIN (Dashboard & CRUD)
// =======================================================
Route::middleware(['auth', 'role:admin|super-admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard Admin
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // CRUD Fasilitas Admin
        Route::resource('fasilitas', AdminFasilitasController::class);

        // CRUD Agenda Admin
        Route::resource('agenda', AdminAgendaController::class);

        // CRUD Prestasi Admin
        Route::resource('prestasi', AdminPrestasiController::class);

        // ✅ CRUD Pesan (dari halaman kontak)
        Route::get('/pesan', [AdminPesanController::class, 'index'])->name('pesan.index');
        Route::delete('/pesan/{id}', [AdminPesanController::class, 'destroy'])->name('pesan.destroy');

        // Kelola Guru Admin
        Route::prefix('kelola-guru')->name('kelola-guru.')->group(function () {
            Route::get('/', [GuruController::class, 'index'])->name('index');
            Route::get('/create', [GuruController::class, 'create'])->name('create');
            Route::post('/', [GuruController::class, 'store'])->name('store');
            Route::get('/{guru}', [GuruController::class, 'show'])->name('show');
            Route::get('/{guru}/edit', [GuruController::class, 'edit'])->name('edit');
            Route::put('/{guru}', [GuruController::class, 'update'])->name('update');
            Route::delete('/{guru}', [GuruController::class, 'destroy'])->name('destroy');
        });
    });

// =======================================================
// 🔹 ROUTE UNTUK PENGUNJUNG / PUBLIK
// =======================================================

// Halaman utama / beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/beranda', [BerandaController::class, 'index']);

// Agenda Sekolah
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/agenda/{id}', [AgendaController::class, 'show'])->name('agenda.show');

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

require __DIR__ . '/auth.php';
