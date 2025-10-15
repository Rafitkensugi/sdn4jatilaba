<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolah Dasar Negeri 04 Jatilaba - Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            500: '#3B82F6',
                            600: '#2563EB',
                        }
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            @apply transition-colors duration-500;
        }

        /* Mode gelap menyeluruh dengan gradien yang lebih halus */
        .dark body {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);
            background-attachment: fixed;
        }

        /* Efek glassmorphism untuk card di dark mode */
        .dark .glass-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Efek hover yang lebih halus */
        .dark .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .dark .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
        }

        /* Icon glow effect */
        .dark .icon-glow {
            filter: drop-shadow(0 0 8px rgba(59, 130, 246, 0.5));
        }

        /* Border gradient untuk section */
        .dark .border-gradient {
            position: relative;
        }

        .dark .border-gradient::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.5), transparent);
        }

        /* Transisi warna lembut */
        * {
            transition: background-color 0.4s ease, color 0.4s ease, border-color 0.4s ease, transform 0.3s ease;
        }

        /* Animasi untuk elemen yang muncul */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Custom styles for teacher cards */
        .teacher-card {
            min-width: 280px;
        }

        .teachers-container {
            scroll-behavior: smooth;
        }

        .teachers-container::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 transition-colors duration-500">
   <x-navbar></x-navbar>

   <!-- Hero Section -->
   <section id="home" 
        class="relative py-20 md:py-32 bg-center bg-cover bg-no-repeat" 
        style="background-image: url('{{ asset('images/hero.jpeg') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/50 dark:from-black/80 dark:to-purple-900/30"></div>
        <div class="container mx-auto px-4 relative z-10 text-center text-white">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-6xl font-bold mb-6 leading-tight animate-slideonce">
                SELAMAT DATANG
                </h2>

                <p class="text-xl mb-8 max-w-2xl mx-auto text-gray-100 fade-in" style="transition-delay: 0.2s;">
                    “Setiap anak adalah bintang, tugas kita adalah membuatnya bersinar.”
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in" style="transition-delay: 0.4s;">
                    <button class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-all duration-300 flex items-center justify-center dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 hover:shadow-lg hover:-translate-y-1">
                        Daftar Sekarang <i class="fas fa-arrow-right ml-2 icon-glow"></i>
                    </button>
                    <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-all duration-300 dark:border-gray-300 dark:hover:bg-gray-300 hover:shadow-lg hover:-translate-y-1">
                        Kunjungi Sekolah
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-grey dark:bg-transparent border-gradient" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="space-y-2 fade-in">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 flex items-center justify-center">
                        40+ <i class="fas fa-history ml-2 text-lg icon-glow"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">Tahun Berdiri</p>
                </div>
                <div class="space-y-2 fade-in" style="transition-delay: 0.1s;">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 flex items-center justify-center">
                        300+ <i class="fas fa-user-graduate ml-2 text-lg icon-glow"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">Siswa Aktif</p>
                </div>
                <div class="space-y-2 fade-in" style="transition-delay: 0.2s;">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 flex items-center justify-center">
                        16 <i class="fas fa-chalkboard-teacher ml-2 text-lg icon-glow"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">Guru Profesional</p>
                </div>
                <div class="space-y-2 fade-in" style="transition-delay: 0.3s;">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 flex items-center justify-center">
                        A <i class="fas fa-trophy ml-2 text-lg icon-glow"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">Akreditasi Sekolah</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white dark:bg-transparent border-gradient" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-4">Sejarah Singkat</h3>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Misi kami adalah memberikan pendidikan terbaik yang mengembangkan potensi setiap siswa secara holistik.</p>
            </div>
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2 fade-in">
                    <div class="relative">
                        <img src="https://placehold.co/600x400/1e40af/ffffff?text=Sekolah+Harapan+Bangsa" alt="Sekolah Harapan Bangsa" class="rounded-xl shadow-lg w-full hover-lift">
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-blue-600 dark:bg-blue-500 rounded-full flex items-center justify-center text-white text-2xl icon-glow animate-float">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 space-y-6 fade-in" style="transition-delay: 0.2s;">
                    <h4 class="text-2xl font-bold text-gray-800 dark:text-white">Visi & Misi</h4>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Sekolah Harapan Bangsa berkomitmen untuk menjadi lembaga pendidikan unggulan yang menghasilkan lulusan berkarakter, berprestasi, dan siap menghadapi tantangan global.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-blue-600 dark:text-blue-400 mt-1 icon-glow"></i>
                            <span class="text-gray-700 dark:text-gray-300">Kurikulum berbasis karakter dan kompetensi</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-blue-600 dark:text-blue-400 mt-1 icon-glow"></i>
                            <span class="text-gray-700 dark:text-gray-300">Pengembangan soft skills dan leadership</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-blue-600 dark:text-blue-400 mt-1 icon-glow"></i>
                            <span class="text-gray-700 dark:text-gray-300">Lingkungan belajar yang kondusif dan inspiratif</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="py-20 bg-gradient-to-br from-gray-50 via-blue-50/30 to-gray-50 relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-indigo-100/20 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16 animate-fade-in">
            <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-4">
                Blog & Artikel
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-[#002147] mb-4 bg-clip-text">
                Artikel Terbaru
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Temukan insight dan informasi terkini dari artikel-artikel pilihan kami
            </p>
        </div>

        @if($artikels->count() > 0)
        <!-- Articles Grid -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach($artikels as $artikel)
            <article class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-blue-200 flex flex-col">
                <!-- Image Container with Overlay -->
                <div class="relative overflow-hidden h-56">
                    <img src="{{ $artikel->gambar ?? asset('images/no-image.jpg') }}" 
                         alt="{{ $artikel->judul }}" 
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <!-- Floating badge -->
                    <div class="absolute top-4 right-4 bg-white/95 backdrop-blur-sm px-3 py-1 rounded-full shadow-lg">
                        <span class="text-xs font-semibold text-blue-600">New</span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-[#002147] mb-3 line-clamp-2 group-hover:text-blue-600 transition-colors duration-300 leading-snug">
                        {{ $artikel->judul }}
                    </h3>
                    
                    <!-- Meta Information -->
                    <div class="flex items-center gap-4 text-sm text-gray-500 mb-4 pb-4 border-b border-gray-100">
                        <span class="flex items-center gap-1.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            {{ $artikel->created_at->format('d M Y') }}
                        </span>
                        <span class="flex items-center gap-1.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            {{ $artikel->views }}x dibaca
                        </span>
                    </div>

                    <!-- Read More Link -->
                    <a href="{{ route('artikel.show', $artikel->id) }}" 
                       class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:gap-3 transition-all duration-300 mt-auto group/link">
                        <span>Baca Selengkapnya</span>
                        <svg class="w-5 h-5 transform group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>

        <!-- View All Button -->
        <div class="text-center mt-12">
            <a href="{{ route('artikel') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-[#002147] text-white rounded-full font-semibold hover:bg-blue-900 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                <span>Lihat Semua Artikel</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>

        @else
        <!-- Empty State -->
        <div class="text-center py-20">
            <div class="inline-flex items-center justify-center w-24 h-24 bg-gray-100 rounded-full mb-6">
                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Belum Ada Artikel</h3>
            <p class="text-gray-500 text-lg mb-8">Artikel akan segera hadir. Nantikan update terbaru dari kami!</p>
            <button class="px-6 py-3 bg-blue-600 text-white rounded-full font-semibold hover:bg-blue-700 transition-colors duration-300">
                Beritahu Saya
            </button>
        </div>
        @endif
    </div>
</section>

<style>
@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fade-in 0.6s ease-out;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>



    <!-- Teachers Section -->
    <section id="teachers" class="py-20 bg-gray-50 dark:bg-transparent border-gradient" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-4">Guru & Staff</h3>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Tenaga pendidik profesional yang berdedikasi untuk masa depan siswa.</p>
            </div>
            
            <div class="relative">
                <!-- Navigation Buttons -->
                <button id="prevBtn" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-all duration-300">
                    <i class="fas fa-chevron-left text-blue-600 dark:text-blue-400"></i>
                </button>
                <button id="nextBtn" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-all duration-300">
                    <i class="fas fa-chevron-right text-blue-600 dark:text-blue-400"></i>
                </button>
                
                <!-- Teachers Container -->
                <div id="teachersContainer" class="teachers-container flex overflow-x-auto gap-6 pb-4 px-2 scroll-smooth" style="scrollbar-width: none;">
                    <!-- Teacher Card 1 -->
                    <div class="teacher-card glass-card rounded-xl shadow-md hover-lift flex-shrink-0 fade-in">
                        <div class="p-4">
                            <div class="text-center mb-4">
                                <span class="text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full">Guru Kelas</span>
                            </div>
                            <div class="flex justify-center mb-4">
                                <img src="https://placehold.co/150x150/3b82f6/ffffff?text=Guru" alt="Guru" class="w-24 h-24 rounded-full object-cover border-4 border-blue-200 dark:border-blue-800">
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 dark:text-white text-center mb-2">Ahmad Fauzi, S.Pd</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-center mb-4">Guru Kelas 5A</p>
                            <div class="hidden teacher-details">
                                <div class="space-y-2 text-sm text-gray-700 dark:text-gray-300">
                                    <p><span class="font-semibold">NIP:</span> -</p>
                                    <p><span class="font-semibold">NUPTK:</span> -</p>
                                    <p><span class="font-semibold">Aktif:</span> 2018</p>
                                    <p><span class="font-semibold">Jabatan:</span> Guru Kelas</p>
                                    <p><span class="font-semibold">Status:</span> PNS</p>
                                    <p><span class="font-semibold">T.T.L:</span> Tegal, 11 Januari 1994</p>
                                    <p><span class="font-semibold">Agama:</span> Islam</p>
                                    <p><span class="font-semibold">HP:</span> -</p>
                                    <p><span class="font-semibold">Alamat:</span> Tegal</p>
                                </div>
                            </div>
                            <button class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition-colors duration-300 detail-btn">
                                Detail
                            </button>
                        </div>
                    </div>
                    
                    <!-- Teacher Card 2 -->
                    <div class="teacher-card glass-card rounded-xl shadow-md hover-lift flex-shrink-0 fade-in" style="transition-delay: 0.1s;">
                        <div class="p-4">
                            <div class="text-center mb-4">
                                <span class="text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full">Wali Kelas</span>
                            </div>
                            <div class="flex justify-center mb-4">
                                <img src="https://placehold.co/150x150/3b82f6/ffffff?text=Guru" alt="Guru" class="w-24 h-24 rounded-full object-cover border-4 border-blue-200 dark:border-blue-800">
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 dark:text-white text-center mb-2">Siti Aminah, S.Pd</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-center mb-4">Wali Kelas 4B</p>
                            <div class="hidden teacher-details">
                                <div class="space-y-2 text-sm text-gray-700 dark:text-gray-300">
                                    <p><span class="font-semibold">NIP:</span> -</p>
                                    <p><span class="font-semibold">NUPTK:</span> -</p>
                                    <p><span class="font-semibold">Aktif:</span> 2019</p>
                                    <p><span class="font-semibold">Jabatan:</span> Wali Kelas</p>
                                    <p><span class="font-semibold">Status:</span> PNS</p>
                                    <p><span class="font-semibold">T.T.L:</span> Tegal, 15 Maret 1990</p>
                                    <p><span class="font-semibold">Agama:</span> Islam</p>
                                    <p><span class="font-semibold">HP:</span> -</p>
                                    <p><span class="font-semibold">Alamat:</span> Tegal</p>
                                </div>
                            </div>
                            <button class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition-colors duration-300 detail-btn">
                                Detail
                            </button>
                        </div>
                    </div>
                    
                    <!-- Teacher Card 3 -->
                    <div class="teacher-card glass-card rounded-xl shadow-md hover-lift flex-shrink-0 fade-in" style="transition-delay: 0.2s;">
                        <div class="p-4">
                            <div class="text-center mb-4">
                                <span class="text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full">Guru/Staff</span>
                            </div>
                            <div class="flex justify-center mb-4">
                                <img src="https://placehold.co/150x150/3b82f6/ffffff?text=Guru" alt="Guru" class="w-24 h-24 rounded-full object-cover border-4 border-blue-200 dark:border-blue-800">
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 dark:text-white text-center mb-2">Budi Santoso, S.Pd</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-center mb-4">Guru Matematika</p>
                            <div class="hidden teacher-details">
                                <div class="space-y-2 text-sm text-gray-700 dark:text-gray-300">
                                    <p><span class="font-semibold">NIP:</span> -</p>
                                    <p><span class="font-semibold">NUPTK:</span> -</p>
                                    <p><span class="font-semibold">Aktif:</span> 2017</p>
                                    <p><span class="font-semibold">Jabatan:</span> Guru Matematika</p>
                                    <p><span class="font-semibold">Status:</span> PNS</p>
                                    <p><span class="font-semibold">T.T.L:</span> Tegal, 20 Juli 1988</p>
                                    <p><span class="font-semibold">Agama:</span> Islam</p>
                                    <p><span class="font-semibold">HP:</span> -</p>
                                    <p><span class="font-semibold">Alamat:</span> Tegal</p>
                                </div>
                            </div>
                            <button class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition-colors duration-300 detail-btn">
                                Detail
                            </button>
                        </div>
                    </div>
                    
                    <!-- Teacher Card 4 -->
                    <div class="teacher-card glass-card rounded-xl shadow-md hover-lift flex-shrink-0 fade-in" style="transition-delay: 0.3s;">
                        <div class="p-4">
                            <div class="text-center mb-4">
                                <span class="text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full">Pustakawan</span>
                            </div>
                            <div class="flex justify-center mb-4">
                                <img src="https://placehold.co/150x150/3b82f6/ffffff?text=Guru" alt="Guru" class="w-24 h-24 rounded-full object-cover border-4 border-blue-200 dark:border-blue-800">
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 dark:text-white text-center mb-2">Dewi Lestari, S.Pd</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-center mb-4">Pustakawan</p>
                            <div class="hidden teacher-details">
                                <div class="space-y-2 text-sm text-gray-700 dark:text-gray-300">
                                    <p><span class="font-semibold">NIP:</span> -</p>
                                    <p><span class="font-semibold">NUPTK:</span> -</p>
                                    <p><span class="font-semibold">Aktif:</span> 2018</p>
                                    <p><span class="font-semibold">Jabatan:</span> Pustakawan</p>
                                    <p><span class="font-semibold">Status:</span> GTT / PTT</p>
                                    <p><span class="font-semibold">T.T.L:</span> Tegal, 11 Januari 1994</p>
                                    <p><span class="font-semibold">Agama:</span> Islam</p>
                                    <p><span class="font-semibold">HP:</span> -</p>
                                    <p><span class="font-semibold">Alamat:</span> Tegal</p>
                                </div>
                            </div>
                            <button class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition-colors duration-300 detail-btn">
                                Detail
                            </button>
                        </div>
                    </div>
                    
                    <!-- Additional Teacher Cards -->
                    <div class="teacher-card glass-card rounded-xl shadow-md hover-lift flex-shrink-0 fade-in" style="transition-delay: 0.4s;">
                        <div class="p-4">
                            <div class="text-center mb-4">
                                <span class="text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full">Guru Olahraga</span>
                            </div>
                            <div class="flex justify-center mb-4">
                                <img src="https://placehold.co/150x150/3b82f6/ffffff?text=Guru" alt="Guru" class="w-24 h-24 rounded-full object-cover border-4 border-blue-200 dark:border-blue-800">
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 dark:text-white text-center mb-2">Rudi Hartono, S.Pd</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-center mb-4">Guru Olahraga</p>
                            <div class="hidden teacher-details">
                                <div class="space-y-2 text-sm text-gray-700 dark:text-gray-300">
                                    <p><span class="font-semibold">NIP:</span> -</p>
                                    <p><span class="font-semibold">NUPTK:</span> -</p>
                                    <p><span class="font-semibold">Aktif:</span> 2016</p>
                                    <p><span class="font-semibold">Jabatan:</span> Guru Olahraga</p>
                                    <p><span class="font-semibold">Status:</span> PNS</p>
                                    <p><span class="font-semibold">T.T.L:</span> Tegal, 5 Oktober 1985</p>
                                    <p><span class="font-semibold">Agama:</span> Islam</p>
                                    <p><span class="font-semibold">HP:</span> -</p>
                                    <p><span class="font-semibold">Alamat:</span> Tegal</p>
                                </div>
                            </div>
                            <button class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition-colors duration-300 detail-btn">
                                Detail
                            </button>
                        </div>
                    </div>
                    
                    <!-- Teacher Card 6 -->
                    <div class="teacher-card glass-card rounded-xl shadow-md hover-lift flex-shrink-0 fade-in" style="transition-delay: 0.5s;">
                        <div class="p-4">
                            <div class="text-center mb-4">
                                <span class="text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full">Guru Seni</span>
                            </div>
                            <div class="flex justify-center mb-4">
                                <img src="https://city-png.b-cdn.net/preview/preview_public/uploads/preview/hd-cristiano-ronaldo-al-nassr-with-golden-shoe-png-701751712070442muv4hgrbfi.png" alt="Guru" class="w-24 h-24 rounded-full object-cover border-4 border-blue-200 dark:border-blue-800">
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 dark:text-white text-center mb-2">Maya Sari, S.Pd</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-center mb-4">Guru Seni Budaya</p>
                            <div class="hidden teacher-details">
                                <div class="space-y-2 text-sm text-gray-700 dark:text-gray-300">
                                    <p><span class="font-semibold">NIP:</span> -</p>
                                    <p><span class="font-semibold">NUPTK:</span> -</p>
                                    <p><span class="font-semibold">Aktif:</span> 2020</p>
                                    <p><span class="font-semibold">Jabatan:</span> Guru Seni Budaya</p>
                                    <p><span class="font-semibold">Status:</span> PNS</p>
                                    <p><span class="font-semibold">T.T.L:</span> Tegal, 12 April 1992</p>
                                    <p><span class="font-semibold">Agama:</span> Islam</p>
                                    <p><span class="font-semibold">HP:</span> -</p>
                                    <p><span class="font-semibold">Alamat:</span> Tegal</p>
                                </div>
                            </div>
                            <button class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition-colors duration-300 detail-btn">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white dark:bg-transparent border-gradient" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-4">Testimoni Orang Tua</h3>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Apa kata mereka tentang pengalaman di Sekolah Harapan Bangsa.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass-card p-6 rounded-xl hover-lift fade-in">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 mb-4 italic">"Anak saya berkembang pesat baik akademik maupun karakter sejak bergabung di sekolah ini. Guru-gurunya sangat perhatian!"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-3 shadow-md">S</div>
                        <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Siti Rahayu</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Orang Tua Siswa</p>
                        </div>
                    </div>
                </div>
                <div class="glass-card p-6 rounded-xl hover-lift fade-in" style="transition-delay: 0.1s;">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 mb-4 italic">"Fasilitasnya lengkap dan kurikulumnya sangat baik. Saya puas dengan perkembangan anak saya di sini."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-3 shadow-md">B</div>
                        <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Budi Santoso</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Orang Tua Siswa</p>
                        </div>
                    </div>
                </div>
                <div class="glass-card p-6 rounded-xl hover-lift fade-in" style="transition-delay: 0.2s;">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 mb-4 italic">"Lingkungan belajarnya sangat kondusif dan guru-gurunya profesional. Anak saya senang sekolah di sini!"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-3 shadow-md">D</div>
                        <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Dewi Lestari</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Orang Tua Siswa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer></x-footer>

    <!-- Dark Mode Script -->
    <script>
        const userPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const savedTheme = localStorage.getItem('color-theme');

        if (savedTheme === 'dark' || (!savedTheme && userPrefersDark)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        // Sinkron ke perubahan sistem
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            const newScheme = e.matches ? 'dark' : 'light';
            document.documentElement.classList.toggle('dark', e.matches);
            localStorage.setItem('color-theme', newScheme);
        });

        // Optional toggle manual
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('darkModeToggle');
            if (btn) {
                btn.addEventListener('click', () => {
                    const isDark = document.documentElement.classList.toggle('dark');
                    localStorage.setItem('color-theme', isDark ? 'dark' : 'light');
                });
            }
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
            
            // Close mobile menu when clicking on a link
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });
        }

        // Fade in animation on scroll
        const fadeElements = document.querySelectorAll('.fade-in');
        
        const fadeInOnScroll = () => {
            fadeElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        };
        
        window.addEventListener('scroll', fadeInOnScroll);
        // Initial check
        fadeInOnScroll();

        // Teacher cards navigation
        const teachersContainer = document.getElementById('teachersContainer');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        
        if (teachersContainer && prevBtn && nextBtn) {
            const teacherCard = document.querySelector('.teacher-card');
            const cardWidth = teacherCard.offsetWidth + 24; // width + gap
            
            prevBtn.addEventListener('click', () => {
                teachersContainer.scrollBy({
                    left: -cardWidth * 3,
                    behavior: 'smooth'
                });
            });
            
            nextBtn.addEventListener('click', () => {
                teachersContainer.scrollBy({
                    left: cardWidth * 3,
                    behavior: 'smooth'
                });
            });
        }

        // Detail button functionality
        const detailButtons = document.querySelectorAll('.detail-btn');
        
        detailButtons.forEach(button => {
            button.addEventListener('click', function() {
                const details = this.previousElementSibling;
                const isHidden = details.classList.contains('hidden');
                
                if (isHidden) {
                    details.classList.remove('hidden');
                    this.textContent = 'Sembunyikan';
                } else {
                    details.classList.add('hidden');
                    this.textContent = 'Detail';
                }
            });
        });
    </script>
</body>
</html>