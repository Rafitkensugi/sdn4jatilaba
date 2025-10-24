<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Sekolah - Sekolah Dasar Negeri 04 Jatilaba</title>
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

        .dark body {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);
            background-attachment: fixed;
        }

        .dark .glass-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .dark .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .dark .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
        }

        .dark .icon-glow {
            filter: drop-shadow(0 0 8px rgba(59, 130, 246, 0.5));
        }

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

        * {
            transition: background-color 0.4s ease, color 0.4s ease, border-color 0.4s ease, transform 0.3s ease;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 transition-colors duration-500">
   <x-navbar></x-navbar>

   <!-- Hero Section -->
   <section id="home" 
        class="relative py-20 md:py-32 bg-center bg-cover bg-no-repeat" 
        style="background-image: url('{{ asset('images/hero-program.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/50 dark:from-black/80 dark:to-purple-900/30"></div>
        <div class="container mx-auto px-4 relative z-10 text-center text-white">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-6xl font-bold mb-6 leading-tight fade-in">
                    Mengembangkan Bakat, Membentuk Karakter
                </h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto text-gray-100 fade-in" style="transition-delay: 0.2s;">
                    Program ekstrakurikuler kami dirancang untuk menumbuhkan minat, bakat, dan keterampilan sosial siswa di luar kelas.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in" style="transition-delay: 0.4s;">
                    <button class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-all duration-300 flex items-center justify-center dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 hover:shadow-lg hover:-translate-y-1">
                        Daftar Ekstrakurikuler <i class="fas fa-arrow-right ml-2 icon-glow"></i>
                    </button>
                    <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-all duration-300 dark:border-gray-300 dark:hover:bg-gray-300 hover:shadow-lg hover:-translate-y-1">
                        Lihat Jadwal
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white dark:bg-transparent border-gradient">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="space-y-2 fade-in">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 flex items-center justify-center">
                        12+ <i class="fas fa-users ml-2 text-lg icon-glow"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">Jenis Ekstrakurikuler</p>
                </div>
                <div class="space-y-2 fade-in" style="transition-delay: 0.1s;">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 flex items-center justify-center">
                        95% <i class="fas fa-child ml-2 text-lg icon-glow"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">Siswa Aktif Berpartisipasi</p>
                </div>
                <div class="space-y-2 fade-in" style="transition-delay: 0.2s;">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 flex items-center justify-center">
                        20+ <i class="fas fa-trophy ml-2 text-lg icon-glow"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">Prestasi Tingkat Kota</p>
                </div>
                <div class="space-y-2 fade-in" style="transition-delay: 0.3s;">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 flex items-center justify-center">
                        100% <i class="fas fa-heart ml-2 text-lg icon-glow"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">Dibimbing Guru Berpengalaman</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="ekskul" class="py-20 bg-gray-50 dark:bg-transparent border-gradient">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-4">Program Ekstrakurikuler</h3>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Kami percaya bahwa pendidikan tidak hanya terjadi di dalam kelas. Berikut kegiatan pengembangan yang kami sediakan:</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="glass-card p-8 rounded-xl shadow-md hover-lift fade-in">
                    <div class="text-blue-600 dark:text-blue-400 mb-4">
                        <i class="fas fa-futbol text-3xl icon-glow"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Olahraga</h4>
                    <ul class="text-gray-600 dark:text-gray-300 mb-4 space-y-2">
                        <li>• Sepak Bola</li>
                        <li>• Basket</li>
                        <li>• Atletik</li>
                        <li>• Pencak Silat</li>
                    </ul>
                    <a href="#" class="text-blue-600 dark:text-blue-400 font-medium hover:text-blue-700 dark:hover:text-blue-300 flex items-center group">
                        Jadwal Latihan 
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
                <div class="glass-card p-8 rounded-xl shadow-md hover-lift fade-in" style="transition-delay: 0.1s;">
                    <div class="text-blue-600 dark:text-blue-400 mb-4">
                        <i class="fas fa-paint-brush text-3xl icon-glow"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Seni & Budaya</h4>
                    <ul class="text-gray-600 dark:text-gray-300 mb-4 space-y-2">
                        <li>• Tari Tradisional</li>
                        <li>• Melukis</li>
                        <li>• Paduan Suara</li>
                        <li>• Teater Anak</li>
                    </ul>
                    <a href="#" class="text-blue-600 dark:text-blue-400 font-medium hover:text-blue-700 dark:hover:text-blue-300 flex items-center group">
                        Lihat Galeri Kegiatan 
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
                <div class="glass-card p-8 rounded-xl shadow-md hover-lift fade-in" style="transition-delay: 0.2s;">
                    <div class="text-blue-600 dark:text-blue-400 mb-4">
                        <i class="fas fa-robot text-3xl icon-glow"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Sains & Teknologi</h4>
                    <ul class="text-gray-600 dark:text-gray-300 mb-4 space-y-2">
                        <li>• Robotik Dasar</li>
                        <li>• Coding Anak</li>
                        <li>• Sains Eksperimen</li>
                        <li>• Matematika Kompetitif</li>
                    </ul>
                    <a href="#" class="text-blue-600 dark:text-blue-400 font-medium hover:text-blue-700 dark:hover:text-blue-300 flex items-center group">
                        Ikuti Workshop 
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
                <div class="glass-card p-8 rounded-xl shadow-md hover-lift fade-in" style="transition-delay: 0.3s;">
                    <div class="text-blue-600 dark:text-blue-400 mb-4">
                        <i class="fas fa-hand-holding-heart text-3xl icon-glow"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Karakter & Kepemimpinan</h4>
                    <ul class="text-gray-600 dark:text-gray-300 mb-4 space-y-2">
                        <li>• Pramuka</li>
                        <li>• OSIS Junior</li>
                        <li>• Pelatihan Kepemimpinan</li>
                        <li>• Bakti Sosial</li>
                    </ul>
                    <a href="#" class="text-blue-600 dark:text-blue-400 font-medium hover:text-blue-700 dark:hover:text-blue-300 flex items-center group">
                        Daftar Kegiatan 
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
                <div class="glass-card p-8 rounded-xl shadow-md hover-lift fade-in" style="transition-delay: 0.4s;">
                    <div class="text-blue-600 dark:text-blue-400 mb-4">
                        <i class="fas fa-language text-3xl icon-glow"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Bahasa & Literasi</h4>
                    <ul class="text-gray-600 dark:text-gray-300 mb-4 space-y-2">
                        <li>• Klub Bahasa Inggris</li>
                        <li>• Menulis Cerita Anak</li>
                        <li>• Perpustakaan Aktif</li>
                        <li>• Storytelling</li>
                    </ul>
                    <a href="#" class="text-blue-600 dark:text-blue-400 font-medium hover:text-blue-700 dark:hover:text-blue-300 flex items-center group">
                        Ikut Kompetisi 
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
                <div class="glass-card p-8 rounded-xl shadow-md hover-lift fade-in" style="transition-delay: 0.5s;">
                    <div class="text-blue-600 dark:text-blue-400 mb-4">
                        <i class="fas fa-seedling text-3xl icon-glow"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Lingkungan & Kreativitas</h4>
                    <ul class="text-gray-600 dark:text-gray-300 mb-4 space-y-2">
                        <li>• Pertanian Sekolah</li>
                        <li>• Daur Ulang Kreatif</li>
                        <li>• Eco Club</li>
                        <li>• Kerajinan Tangan</li>
                    </ul>
                    <a href="#" class="text-blue-600 dark:text-blue-400 font-medium hover:text-blue-700 dark:hover:text-blue-300 flex items-center group">
                        Lihat Proyek Siswa 
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20 bg-white dark:bg-transparent border-gradient">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-4">Manfaat Ekstrakurikuler</h3>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Setiap kegiatan dirancang untuk mendukung tumbuh kembang holistik siswa.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center fade-in">
                    <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-brain text-blue-600 dark:text-blue-400 text-2xl icon-glow"></i>
                    </div>
                    <h5 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Kecerdasan Emosional</h5>
                    <p class="text-gray-600 dark:text-gray-300">Mengasah empati, kerja tim, dan komunikasi interpersonal.</p>
                </div>
                <div class="text-center fade-in" style="transition-delay: 0.1s;">
                    <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-medal text-blue-600 dark:text-blue-400 text-2xl icon-glow"></i>
                    </div>
                    <h5 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Prestasi Non-Akademik</h5>
                    <p class="text-gray-600 dark:text-gray-300">Wadah mengekspresikan bakat dan meraih penghargaan.</p>
                </div>
                <div class="text-center fade-in" style="transition-delay: 0.2s;">
                    <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-balance-scale text-blue-600 dark:text-blue-400 text-2xl icon-glow"></i>
                    </div>
                    <h5 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Keseimbangan Hidup</h5>
                    <p class="text-gray-600 dark:text-gray-300">Mengurangi stres akademik dan meningkatkan kebahagiaan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-50 dark:bg-transparent border-gradient">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-4">Kata Mereka</h3>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Testimoni siswa dan orang tua tentang program ekstrakurikuler kami.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass-card p-6 rounded-xl hover-lift fade-in">
                    <p class="text-gray-700 dark:text-gray-300 mb-4 italic">"Sejak ikut klub robotik, aku jadi suka eksperimen dan berpikir logis. Sekarang aku juara lomba di tingkat kota!"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-teal-600 rounded-full flex items-center justify-center text-white font-bold mr-3 shadow-md">A</div>
                        <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Adi Pratama</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Kelas 5</p>
                        </div>
                    </div>
                </div>
                <div class="glass-card p-6 rounded-xl hover-lift fade-in" style="transition-delay: 0.1s;">
                    <p class="text-gray-700 dark:text-gray-300 mb-4 italic">"Anak saya jadi lebih percaya diri sejak ikut paduan suara. Guru-gurunya sangat mendukung!"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full flex items-center justify-center text-white font-bold mr-3 shadow-md">R</div>
                        <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Rina Wijaya</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Orang Tua Siswa</p>
                        </div>
                    </div>
                </div>
                <div class="glass-card p-6 rounded-xl hover-lift fade-in" style="transition-delay: 0.2s;">
                    <p class="text-gray-700 dark:text-gray-300 mb-4 italic">"Pramuka mengajarkanku tanggung jawab dan kerja sama. Aku suka kegiatan alam bebasnya!"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-red-600 rounded-full flex items-center justify-center text-white font-bold mr-3 shadow-md">D</div>
                        <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Dina Fitriani</p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Kelas 6</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer></x-footer>

    <!-- Dark Mode & Animation Script -->
    <script>
        const userPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const savedTheme = localStorage.getItem('color-theme');

        if (savedTheme === 'dark' || (!savedTheme && userPrefersDark)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            const newScheme = e.matches ? 'dark' : 'light';
            document.documentElement.classList.toggle('dark', e.matches);
            localStorage.setItem('color-theme', newScheme);
        });

        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('darkModeToggle');
            if (btn) {
                btn.addEventListener('click', () => {
                    const isDark = document.documentElement.classList.toggle('dark');
                    localStorage.setItem('color-theme', isDark ? 'dark' : 'light');
                });
            }
        });

        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
            
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });
        }

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
        fadeInOnScroll();
    </script>
</body>
</html>