<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $prestasi->judul }} - Prestasi - {{ config('app.name', 'Sekolah Kami') }}</title>
    
    <!-- DaisyUI via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        .prestasi-image {
            max-height: 500px;
            object-fit: cover;
            width: 100%;
        }
        .info-card {
            transition: all 0.3s ease;
        }
        .info-card:hover {
            transform: translateY(-2px);
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
                    <li><a href="/prestasi">Prestasi</a></li>
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

    <!-- Breadcrumb -->
    <div class="container mx-auto px-4 py-4">
        <div class="text-sm breadcrumbs">
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="{{ route('prestasi.index') }}">Prestasi</a></li>
                <li class="text-primary">Detail Prestasi</li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Content -->
            <div class="lg:col-span-2">
                <article class="bg-base-100 rounded-2xl">
                    <!-- Header -->
                    <header class="mb-6">
                        <div class="flex flex-wrap gap-2 mb-4">
                            <div class="badge 
                                @if($prestasi->tingkat == 'Nasional') badge-primary
                                @elseif($prestasi->tingkat == 'Provinsi') badge-secondary
                                @elseif($prestasi->tingkat == 'Kabupaten') badge-accent
                                @else badge-neutral @endif 
                                badge-lg text-white">
                                {{ $prestasi->tingkat }}
                            </div>
                            <div class="badge badge-success badge-lg text-white">
                                <i class="fas fa-trophy mr-1"></i>
                                {{ $prestasi->juara }}
                            </div>
                        </div>
                        
                        <h1 class="text-4xl font-bold text-base-content mb-4">{{ $prestasi->judul }}</h1>
                        
                        <div class="flex flex-wrap gap-4 text-sm text-base-content/70 mb-6">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-calendar-alt"></i>
                                <span>{{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d F Y') }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>{{ $prestasi->tempat }}</span>
                            </div>
                        </div>
                    </header>

                    <!-- Featured Image -->
                    @if($prestasi->gambar)
                    <figure class="mb-8 rounded-2xl overflow-hidden shadow-lg">
                        <img src="{{ asset('storage/' . $prestasi->gambar) }}" 
                             alt="{{ $prestasi->judul }}" 
                             class="prestasi-image">
                    </figure>
                    @else
                    <div class="mb-8 rounded-2xl overflow-hidden shadow-lg bg-gradient-to-br from-primary to-secondary flex items-center justify-center h-64">
                        <i class="fas fa-trophy text-8xl text-primary-content opacity-80"></i>
                    </div>
                    @endif

                    <!-- Content -->
                    <div class="prose prose-lg max-w-none mb-8">
                        <div class="bg-base-200 rounded-2xl p-6 mb-6">
                            <p class="text-lg leading-relaxed text-base-content">
                                {{ $prestasi->deskripsi }}
                            </p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-4 mb-8">
                        <a href="{{ route('prestasi.index') }}" class="btn btn-outline">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Kembali ke Daftar Prestasi
                        </a>
                        <button class="btn btn-primary" onclick="window.print()">
                            <i class="fas fa-print mr-2"></i>
                            Cetak
                        </button>
                        <button class="btn btn-secondary" onclick="sharePrestasi()">
                            <i class="fas fa-share-alt mr-2"></i>
                            Bagikan
                        </button>
                    </div>
                </article>
            </div>

            <!-- Right Column - Sidebar -->
            <div class="space-y-6">
                <!-- Info Card -->
                <div class="card info-card bg-base-100 shadow-xl border border-base-300">
                    <div class="card-body">
                        <h3 class="card-title text-lg mb-4">
                            <i class="fas fa-info-circle text-primary mr-2"></i>
                            Informasi Prestasi
                        </h3>
                        
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-3 bg-base-200 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
                                        <i class="fas fa-trophy text-white"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm text-base-content/70">Pencapaian</div>
                                        <div class="font-semibold text-warning">{{ $prestasi->juara }}</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex items-center justify-between p-3 bg-base-200 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-secondary rounded-lg flex items-center justify-center">
                                        <i class="fas fa-layer-group text-white"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm text-base-content/70">Tingkat</div>
                                        <div class="font-semibold">{{ $prestasi->tingkat }}</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex items-center justify-between p-3 bg-base-200 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-accent rounded-lg flex items-center justify-center">
                                        <i class="fas fa-map-marker-alt text-white"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm text-base-content/70">Lokasi</div>
                                        <div class="font-semibold">{{ $prestasi->tempat }}</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex items-center justify-between p-3 bg-base-200 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-neutral rounded-lg flex items-center justify-center">
                                        <i class="fas fa-calendar-alt text-white"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm text-base-content/70">Tanggal</div>
                                        <div class="font-semibold">{{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d M Y') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prestasi Lainnya -->
                <div class="card bg-base-100 shadow-xl border border-base-300">
                    <div class="card-body">
                        <h3 class="card-title text-lg mb-4">
                            <i class="fas fa-star text-warning mr-2"></i>
                            Prestasi Lainnya
                        </h3>
                        
                        <div class="space-y-4">
                            @foreach($prestasiLainnya as $other)
                            <a href="{{ route('prestasi.show', $other->id) }}" 
                               class="block p-4 bg-base-200 rounded-lg hover:bg-base-300 transition-colors">
                                <div class="flex items-start gap-3">
                                    @if($other->gambar)
                                    <div class="flex-shrink-0 w-16 h-16">
                                        <img src="{{ asset('storage/' . $other->gambar) }}" 
                                             alt="{{ $other->judul }}"
                                             class="w-16 h-16 object-cover rounded-lg">
                                    </div>
                                    @else
                                    <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-lg flex items-center justify-center">
                                        <i class="fas fa-trophy text-white text-sm"></i>
                                    </div>
                                    @endif
                                    
                                    <div class="flex-1 min-w-0">
                                        <h4 class="font-semibold text-sm line-clamp-2 mb-1">
                                            {{ $other->judul }}
                                        </h4>
                                        <div class="flex items-center gap-2 text-xs text-base-content/70">
                                            <span class="badge 
                                                @if($other->tingkat == 'Nasional') badge-primary
                                                @elseif($other->tingkat == 'Provinsi') badge-secondary
                                                @elseif($other->tingkat == 'Kabupaten') badge-accent
                                                @else badge-neutral @endif 
                                                badge-xs">
                                                {{ $other->tingkat }}
                                            </span>
                                            <span>{{ $other->juara }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        
                        <div class="card-actions justify-center mt-4">
                            <a href="{{ route('prestasi.index') }}" class="btn btn-outline btn-sm">
                                Lihat Semua Prestasi
                                <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Share Section -->
                <div class="card bg-base-100 shadow-xl border border-base-300">
                    <div class="card-body">
                        <h3 class="card-title text-lg mb-4">
                            <i class="fas fa-share-nodes text-info mr-2"></i>
                            Bagikan Prestasi
                        </h3>
                        
                        <div class="flex justify-center gap-4">
                            <button class="btn btn-circle btn-outline btn-info" onclick="shareToFacebook()">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button class="btn btn-circle btn-outline btn-info" onclick="shareToTwitter()">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button class="btn btn-circle btn-outline btn-info" onclick="shareToWhatsApp()">
                                <i class="fab fa-whatsapp"></i>
                            </button>
                            <button class="btn btn-circle btn-outline btn-info" onclick="copyLink()">
                                <i class="fas fa-link"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded mt-12">
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
        // Share functionality
        function sharePrestasi() {
            if (navigator.share) {
                navigator.share({
                    title: '{{ $prestasi->judul }}',
                    text: '{{ Str::limit(strip_tags($prestasi->deskripsi), 100) }}',
                    url: window.location.href,
                })
                .then(() => console.log('Berhasil dibagikan'))
                .catch((error) => console.log('Error sharing', error));
            } else {
                // Fallback
                copyLink();
            }
        }

        function shareToFacebook() {
            const url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function shareToTwitter() {
            const text = '{{ $prestasi->judul }}';
            const url = `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}&url=${encodeURIComponent(window.location.href)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function shareToWhatsApp() {
            const text = '{{ $prestasi->judul }} - ' + window.location.href;
            const url = `https://wa.me/?text=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function copyLink() {
            navigator.clipboard.writeText(window.location.href).then(() => {
                // Show toast notification
                const toast = document.createElement('div');
                toast.className = 'toast toast-top toast-center';
                toast.innerHTML = `
                    <div class="alert alert-success">
                        <span>Link berhasil disalin!</span>
                    </div>
                `;
                document.body.appendChild(toast);
                
                setTimeout(() => {
                    document.body.removeChild(toast);
                }, 3000);
            });
        }

        // Print functionality
        function printPrestasi() {
            window.print();
        }
    </script>
</body>
</html>