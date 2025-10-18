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
    SejarahController,
    PengumumanController
};

use App\Http\Controllers\Admin\{
    DashboardController,
    BeritaController as AdminBeritaController,
    PengumumanController as AdminPengumumanController,
    GuruController as AdminGuruController,
    SPMBController as AdminSPMBController,
    FeedbackController,
    FasilitasController as AdminFasilitasController,
    PrestasiController as AdminPrestasiController // TAMBAHKAN INI
};

// Halaman utama beranda (sudah ada section guru)
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

// Fasilitas (Public)
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');
Route::get('/fasilitas/{id}', [FasilitasController::class, 'show'])->name('fasilitas.show');

// SPMB
Route::get('/spmb', [SPMBController::class, 'index'])->name('spmb');
Route::post('/spmb', [SPMBController::class, 'store'])->name('spmb.store');

// Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.detail');

// PENGUMUMAN PUBLIC
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/pengumuman/{id}', [PengumumanController::class, 'show'])->name('pengumuman.detail');

// Prestasi (Public)
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
    
    // Pengumuman (Admin)
    Route::get('/pengumuman', [AdminPengumumanController::class, 'index'])->name('pengumuman.index');
    Route::get('/pengumuman/create', [AdminPengumumanController::class, 'create'])->name('pengumuman.create');
    Route::post('/pengumuman', [AdminPengumumanController::class, 'store'])->name('pengumuman.store');
    Route::get('/pengumuman/{pengumuman}/edit', [AdminPengumumanController::class, 'edit'])->name('pengumuman.edit');
    Route::put('/pengumuman/{pengumuman}', [AdminPengumumanController::class, 'update'])->name('pengumuman.update');
    Route::delete('/pengumuman/{pengumuman}', [AdminPengumumanController::class, 'destroy'])->name('pengumuman.destroy');
    
    // Guru
    Route::get('/guru', [AdminGuruController::class, 'index'])->name('guru.index');
    Route::get('/guru/create', [AdminGuruController::class, 'create'])->name('guru.create');
    Route::post('/guru', [AdminGuruController::class, 'store'])->name('guru.store');
    Route::get('/guru/{guru}/edit', [AdminGuruController::class, 'edit'])->name('guru.edit');
    Route::put('/guru/{guru}', [AdminGuruController::class, 'update'])->name('guru.update');
    Route::delete('/guru/{guru}', [AdminGuruController::class, 'destroy'])->name('guru.destroy');
    
    // Management Role Guru
    Route::post('/guru/{guru}/make-admin', [AdminGuruController::class, 'makeAdmin'])->name('guru.make-admin');
    Route::post('/guru/{guru}/remove-admin', [AdminGuruController::class, 'removeAdmin'])->name('guru.remove-admin');
    Route::post('/guru/{guru}/make-user', [AdminGuruController::class, 'makeUser'])->name('guru.make-user');
    Route::post('/guru/{guru}/update-role', [AdminGuruController::class, 'updateRole'])->name('guru.update-role');
    Route::post('/guru/{guru}/reset-password', [AdminGuruController::class, 'resetPassword'])->name('guru.reset-password');
    
    // SPMB (Admin)
    Route::get('/spmb', [AdminSPMBController::class, 'index'])->name('spmb.index');
    Route::get('/spmb/{id}', [AdminSPMBController::class, 'show'])->name('spmb.show');
    Route::delete('/spmb/{id}', [AdminSPMBController::class, 'destroy'])->name('spmb.destroy');
    Route::post('/spmb/{id}/status', [AdminSPMBController::class, 'updateStatus'])->name('spmb.status');
    
    // Feedback
    Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
    Route::get('/feedback/{id}', [FeedbackController::class, 'show'])->name('feedback.show');
    Route::post('/feedback/{id}/status', [FeedbackController::class, 'updateStatus'])->name('feedback.updateStatus');
    Route::delete('/feedback/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
    
    // Fasilitas (Admin)
    Route::get('/fasilitas', [AdminFasilitasController::class, 'index'])->name('fasilitas.index');
    Route::get('/fasilitas/create', [AdminFasilitasController::class, 'create'])->name('fasilitas.create');
    Route::post('/fasilitas', [AdminFasilitasController::class, 'store'])->name('fasilitas.store');
    Route::get('/fasilitas/{id}/edit', [AdminFasilitasController::class, 'edit'])->name('fasilitas.edit');
    Route::put('/fasilitas/{id}', [AdminFasilitasController::class, 'update'])->name('fasilitas.update');
    Route::delete('/fasilitas/{id}', [AdminFasilitasController::class, 'destroy'])->name('fasilitas.destroy');
    
    // Prestasi (Admin) - TAMBAHKAN INI
    Route::get('/prestasi', [AdminPrestasiController::class, 'index'])->name('prestasi.index');
    Route::get('/prestasi/create', [AdminPrestasiController::class, 'create'])->name('prestasi.create');
    Route::post('/prestasi', [AdminPrestasiController::class, 'store'])->name('prestasi.store');
    Route::get('/prestasi/{id}/edit', [AdminPrestasiController::class, 'edit'])->name('prestasi.edit');
    Route::put('/prestasi/{id}', [AdminPrestasiController::class, 'update'])->name('prestasi.update');
    Route::delete('/prestasi/{id}', [AdminPrestasiController::class, 'destroy'])->name('prestasi.destroy');
});

require __DIR__ . '/auth.php';