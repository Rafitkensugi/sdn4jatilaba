<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ArtikelController,
    SPMBController,
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

use App\Http\Controllers\Admin\{
    DashboardController,
    BeritaController as AdminBeritaController,
    PengumumanController,
    GuruController,
    SPMBController as AdminSPMBController,
    FeedbackController
};

// Halaman utama beranda
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::get('/', [BerandaController::class, 'index']);

// Agenda Sekolah
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');

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
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Fasilitas
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');
Route::get('/fasilitas/{id}', [FasilitasController::class, 'show'])->name('fasilitas.show');

//SPMB
Route::get('/spmb', [SPMBController::class, 'index'])->name('spmb');
Route::post('/spmb', [SPMBController::class, 'store'])->name('spmb.store');

// Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.detail');

// Prestasi
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');
Route::get('/prestasi/{id}', [PrestasiController::class, 'show'])->name('prestasi.show');

// Galeri
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

// Program
Route::get('/program', [ProgramController::class, 'index'])->name('program');

// Visi Misi
Route::get('/visi-misi', [VisiMisiController::class, 'index'])->name('visi-misi');

// profil sekolah
Route::get('/profil-sekolah', [ProfilSekolahController::class, 'index'])->name('profil-sekolah');

// sejarah 
Route::get('/sejarah', [SejarahController::class, 'index'])->name('sejarah');

// Admin Routes
Route::middleware(['auth', 'role:admin|super-admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Berita
    Route::get('/berita', [AdminBeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/create', [AdminBeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita', [AdminBeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita/{berita}/edit', [AdminBeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{berita}', [AdminBeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{berita}', [AdminBeritaController::class, 'destroy'])->name('berita.destroy');
    
    // Pengumuman
    Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
    Route::get('/pengumuman/create', [PengumumanController::class, 'create'])->name('pengumuman.create');
    Route::post('/pengumuman', [PengumumanController::class, 'store'])->name('pengumuman.store');
    Route::get('/pengumuman/{pengumuman}/edit', [PengumumanController::class, 'edit'])->name('pengumuman.edit');
    Route::put('/pengumuman/{pengumuman}', [PengumumanController::class, 'update'])->name('pengumuman.update');
    Route::delete('/pengumuman/{pengumuman}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');
    
    // Guru
    Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
    Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
    Route::post('/guru', [GuruController::class, 'store'])->name('guru.store');
    Route::get('/guru/{guru}/edit', [GuruController::class, 'edit'])->name('guru.edit');
    Route::put('/guru/{guru}', [GuruController::class, 'update'])->name('guru.update');
    Route::delete('/guru/{guru}', [GuruController::class, 'destroy'])->name('guru.destroy');
    Route::post('/guru/{guru}/make-admin', [GuruController::class, 'makeAdmin'])->name('guru.make-admin');
    
    //SPMB
    Route::get('/spmb', [AdminSPMBController::class, 'index'])->name('spmb.index');
    
    // Feedback
    Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
});

require __DIR__ . '/auth.php';