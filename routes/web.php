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

// ======================================================
// 🧑‍💼 ADMIN DASHBOARD
// ======================================================
Route::middleware(['auth', 'role:admin|super-admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// ======================================================
// 👤 USER DASHBOARD
// ======================================================
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// ======================================================
// 🌐 HALAMAN PUBLIK
// ======================================================
   
// Halaman Beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/beranda', [BerandaController::class, 'index']);

// Agenda Sekolah
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');

// Artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');

// Sambutan Kepala Sekolah
Route::get('/sambutan', [SambutanController::class, 'index'])->name('sambutan');

// Kontak & Pesan
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

// Fasilitas Sekolah
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');
Route::get('/fasilitas/{id}', [FasilitasController::class, 'show'])->name('fasilitas.show');

// PPDB / SPMB
Route::get('/spmb', [PPDBController::class, 'index'])->name('spmb');
Route::post('/spmb', [PPDBController::class, 'store'])->name('spmb.store');

// Berita Sekolah
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.detail');

// Prestasi
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');

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

// ======================================================
// 🔐 AUTHENTICATION
// ======================================================
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// ======================================================
// 👤 PROFILE (Hanya Untuk User yang Login)
// ======================================================
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ======================================================
// 🔁 API UNTUK REALTIME DASHBOARD (Feedback & Fasilitas)
// ======================================================
Route::get('/api/latest-feedback', function () {
    return Feedback::latest()->take(5)->get();
});

Route::get('/api/latest-fasilitas', function () {
    return Fasilitas::latest()->take(5)->get();
});

// ======================================================
// ⛓️ INCLUDE ROUTE DARI AUTH.PHP (DEFAULT LARAVEL BREEZE / JETSTREAM)
// ======================================================
require __DIR__ . '/auth.php';
