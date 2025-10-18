<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi - {{ config('app.name', 'Sekolah Kami') }}</title>
    
    <!-- DaisyUI via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        .prestasi-card {
            transition: all 0.3s ease;
        }
        .prestasi-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .badge-tingkat {
            position: absolute;
            top: 12px;
            right: 12px;
            z-index: 10;
        }
    </style>
</head>
<body class="min-h-screen bg-base-100">
    <!-- Navigation -->
    <div class="navbar bg-primary text-primary-content">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-primary rounded-box w-52">
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/prestasi" class="active">Prestasi</a></li>
                    <li><a href="/berita">Berita</a></li>
                    <li><a href="/pengumuman">Pengumuman</a></li>
                    <li><a href="/galeri">Galeri</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl" href="/">{{ config('app.name', 'Sekolah Kami') }}</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="/">Beranda</a></li>
                <li><a href="/prestasi" class="active">Prestasi</a></li>
                <li><a href="/berita">Berita</a></li>
                <li><a href="/pengumuman">Pengumuman</a></li>
                <li><a href="/galeri">Galeri</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <a href="/login" class="btn btn-ghost">
                <i class="fas fa-sign-in-alt mr-2"></i>
                Login
            </a>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero min-h-64 bg-gradient-to-r from-primary to-secondary text-primary-content">
        <div class="hero-content text-center">
            <div class="max-w-2xl">
                <h1 class="text-5xl font-bold mb-4">Prestasi Kami</h1>
                <p class="text-xl opacity-90">
                    Kumpulan prestasi gemilang yang telah diraih oleh siswa dan sekolah kami
                </p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <!-- Filter Section -->
        <div class="flex flex-col lg:flex-row justify-between items-center mb-8 gap-4">
            <div class="stats shadow">
                <div class="stat">
                    <div class="stat-title">Total Prestasi</div>
                    <div class="stat-value text-primary">{{ $prestasis->total() }}</div>
                    <div class="stat-desc">Yang telah diraih</div>
                </div>
            </div>
            
            <div class="join">
                <button class="btn join-btn active">Semua</button>
                <button class="btn join-btn">Nasional</button>
                <button class="btn join-btn">Provinsi</button>
                <button class="btn join-btn">Kabupaten</button>
            </div>
        </div>

        <!-- Prestasi Grid -->
        @if($prestasis->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            @foreach($prestasis as $prestasi)
            <div class="card prestasi-card bg-base-100 shadow-xl border border-base-300">
                <figure class="relative">
                    @if($prestasi->gambar)
                    <img src="{{ asset('storage/' . $prestasi->gambar) }}" 
                         alt="{{ $prestasi->judul }}" 
                         class="w-full h-48 object-cover" />
                    @else
                    <div class="w-full h-48 bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
                        <i class="fas fa-trophy text-6xl text-primary-content opacity-80"></i>
                    </div>
                    @endif
                    
                    <!-- Badge Tingkat -->
                    <div class="badge-tingkat">
                        <div class="badge 
                            @if($prestasi->tingkat == 'Nasional') badge-primary
                            @elseif($prestasi->tingkat == 'Provinsi') badge-secondary
                            @elseif($prestasi->tingkat == 'Kabupaten') badge-accent
                            @else badge-neutral @endif 
                            badge-lg text-white">
                            {{ $prestasi->tingkat }}
                        </div>
                    </div>
                </figure>
                
                <div class="card-body">
                    <div class="flex items-start justify-between mb-2">
                        <h2 class="card-title text-lg line-clamp-2">{{ $prestasi->judul }}</h2>
                    </div>
                    
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-base-content/70">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>{{ $prestasi->tempat }}</span>
                        </div>
                        <div class="flex items-center text-sm text-base-content/70">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>{{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d M Y') }}</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <i class="fas fa-trophy mr-2 text-warning"></i>
                            <span class="font-semibold text-warning">{{ $prestasi->juara }}</span>
                        </div>
                    </div>
                    
                    <p class="text-base-content/80 text-sm line-clamp-3 mb-4">
                        {{ Str::limit(strip_tags($prestasi->deskripsi), 120) }}
                    </p>
                    
                    <div class="card-actions justify-end">
                        <a href="{{ route('prestasi.show', $prestasi->id) }}" 
                           class="btn btn-primary btn-sm">
                            <i class="fas fa-eye mr-1"></i>
                            Detail
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        @if($prestasis->hasPages())
        <div class="flex justify-center mt-8">
            <div class="join">
                {{-- Previous Page Link --}}
                @if($prestasis->onFirstPage())
                <button class="join-item btn btn-disabled">
                    <i class="fas fa-chevron-left"></i>
                </button>
                @else
                <a href="{{ $prestasis->previousPageUrl() }}" class="join-item btn">
                    <i class="fas fa-chevron-left"></i>
                </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach(range(1, $prestasis->lastPage()) as $i)
                <a href="{{ $prestasis->url($i) }}" 
                   class="join-item btn {{ $prestasis->currentPage() == $i ? 'btn-active' : '' }}">
                    {{ $i }}
                </a>
                @endforeach

                {{-- Next Page Link --}}
                @if($prestasis->hasMorePages())
                <a href="{{ $prestasis->nextPageUrl() }}" class="join-item btn">
                    <i class="fas fa-chevron-right"></i>
                </a>
                @else
                <button class="join-item btn btn-disabled">
                    <i class="fas fa-chevron-right"></i>
                </button>
                @endif
            </div>
        </div>
        @endif

        @else
        <!-- Empty State -->
        <div class="text-center py-12">
            <div class="max-w-md mx-auto">
                <i class="fas fa-trophy text-6xl text-base-300 mb-4"></i>
                <h3 class="text-2xl font-bold text-base-content mb-2">Belum Ada Prestasi</h3>
                <p class="text-base-content/70 mb-6">
                    Saat ini belum ada data prestasi yang ditampilkan. Silakan kembali lagi nanti.
                </p>
            </div>
        </div>
        @endif
    </div>

    <!-- Footer -->
    <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
        <aside>
            <div class="grid grid-flow-col gap-4">
                <a class="link link-hover">Tentang Kami</a>
                <a class="link link-hover">Kontak</a>
                <a class="link link-hover">Privacy Policy</a>
            </div>
            <div class="flex justify-center gap-4 mt-4">
                <a href="#" class="btn btn-circle btn-outline">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="btn btn-circle btn-outline">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="btn btn-circle btn-outline">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="btn btn-circle btn-outline">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </aside>
        <div>
            <p>Copyright © {{ date('Y') }} - {{ config('app.name', 'Sekolah Kami') }}</p>
        </div>
    </footer>

    <script>
        // Simple filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.join-btn');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('btn-active'));
                    // Add active class to clicked button
                    this.classList.add('btn-active');
                    
                    // Here you can add AJAX filtering logic
                    const filter = this.textContent.trim();
                    if(filter !== 'Semua') {
                        // Filter by tingkat
                        console.log('Filter by:', filter);
                    }
                });
            });
        });
    </script>
</body>
</html>