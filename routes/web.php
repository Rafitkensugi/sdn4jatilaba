<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\KontakController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home & Public Pages
Route::get('/', function () {
    $recentNews = \App\Models\Berita::published()->latest()->take(6)->get();
    $prestasis = \App\Models\Prestasi::latest()->take(6)->get();
    $galeris = \App\Models\Galeri::latest()->take(6)->get();
    $profil = \App\Models\Profil::first();
    
    return view('pages.home', compact('recentNews', 'prestasis', 'galeris', 'profil'));
})->name('home');

Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{berita:slug}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi.index');
Route::get('/prestasi/{prestasi}', [PrestasiController::class, 'show'])->name('prestasi.show');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/guru/{guru}', [GuruController::class, 'show'])->name('guru.show');
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');
Route::get('/ekstrakurikuler', [EkskulController::class, 'index'])->name('ekskul.index');
Route::get('/ppdb', [PPDBController::class, 'index'])->name('ppdb.index');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    
    // Dashboard
    Route::get('/dashboard', function () {
        $stats = [
            'total_berita' => \App\Models\Berita::count(),
            'total_guru' => \App\Models\Guru::count(),
            'total_siswa' => \App\Models\Siswa::where('status', 'Aktif')->count(),
            'total_prestasi' => \App\Models\Prestasi::count(),
            'total_pesan' => \App\Models\Kontak::where('status', 'Baru')->count(),
        ];
        
        $recentNews = \App\Models\Berita::latest()->take(5)->get();
        $recentMessages = \App\Models\Kontak::latest()->take(5)->get();
        
        return view('admin.dashboard', compact('stats', 'recentNews', 'recentMessages'));
    })->name('dashboard');
    
    // Berita Management
    Route::resource('berita', BeritaController::class);
    Route::get('berita-list', [BeritaController::class, 'adminIndex'])->name('berita.list');
    
    // Guru Management
    Route::resource('guru', GuruController::class);
    Route::get('guru-list', [GuruController::class, 'adminIndex'])->name('guru.list');
    
    // Prestasi Management
    Route::resource('prestasi', PrestasiController::class);
    Route::get('prestasi-list', [PrestasiController::class, 'adminIndex'])->name('prestasi.list');
    
    // Galeri Management
    Route::resource('galeri', GaleriController::class);
    
    // Fasilitas Management
    Route::resource('fasilitas', FasilitasController::class);
    
    // PPDB Management
    Route::resource('ppdb', PPDBController::class);
    
    // Ekstrakurikuler Management
    Route::resource('ekskul', EkskulController::class);
    
    // Profil Sekolah Management
    Route::get('profil', [ProfilController::class, 'edit'])->name('profil.edit');
    Route::put('profil', [ProfilController::class, 'update'])->name('profil.update');
    
    // Kontak/Pesan Management
    Route::get('kontak', [KontakController::class, 'adminIndex'])->name('kontak.index');
    Route::get('kontak/{kontak}', [KontakController::class, 'show'])->name('kontak.show');
    Route::delete('kontak/{kontak}', [KontakController::class, 'destroy'])->name('kontak.destroy');
    Route::post('kontak/{kontak}/mark-read', [KontakController::class, 'markAsRead'])->name('kontak.mark-read');
});

require __DIR__.'/auth.php';