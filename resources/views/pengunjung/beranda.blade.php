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
                <h2 class="text-4xl md:text-6xl font-bold mb-6 leading-tight fade-in">
                    SELAMAT DATANG!
                </h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto text-gray-100 fade-in" style="transition-delay: 0.2s;">
                    Sekolah Harapan Bangsa menawarkan pendidikan berkualitas dengan kurikulum modern dan fasilitas lengkap untuk mendukung perkembangan akademik dan karakter siswa.
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
    <section class="py-16 bg-white dark:bg-transparent border-gradient" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="space-y-2 fade-in">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 flex items-center justify-center">
                        25+ <i class="fas fa-history ml-2 text-lg icon-glow"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">Tahun Pengalaman</p>
                </div>
                <div class="space-y-2 fade-in" style="transition-delay: 0.1s;">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 flex items-center justify-center">
                        1,200+ <i class="fas fa-user-graduate ml-2 text-lg icon-glow"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">Siswa Aktif</p>
                </div>
                <div class="space-y-2 fade-in" style="transition-delay: 0.2s;">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 flex items-center justify-center">
                        85+ <i class="fas fa-chalkboard-teacher ml-2 text-lg icon-glow"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">Guru Profesional</p>
                </div>
                <div class="space-y-2 fade-in" style="transition-delay: 0.3s;">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 flex items-center justify-center">
                        98% <i class="fas fa-trophy ml-2 text-lg icon-glow"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">Kelulusan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50 dark:bg-transparent border-gradient" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-4">Tentang Kami</h3>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Misi kami adalah memberikan pendidikan terbaik yang mengembangkan potensi setiap siswa secara holistik.</p>
            </div>
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2 fade-in">
                    <div class="relative">
                        <img src="https://placehold.co/600x400/1e40af/ffffff?text=Sekolah+Harapan+Banga" alt="Sekolah Harapan Bangsa" class="rounded-xl shadow-lg w-full hover-lift">
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

    <!-- Programs Section -->
    <section id="programs" class="py-20 bg-white dark:bg-transparent border-gradient" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-4">Program Pendidikan</h3>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Kami menawarkan berbagai jenjang pendidikan dengan kurikulum terpadu dan modern.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass-card p-8 rounded-xl shadow-md hover-lift fade-in">
                    <div class="text-blue-600 dark:text-blue-400 mb-4 flex justify-between items-center">
                        <i class="fas fa-child text-3xl icon-glow"></i>
                        <span class="text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full">Usia 4-6</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Taman Kanak-Kanak</h4>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Mengembangkan fondasi belajar melalui bermain dan eksplorasi yang menyenangkan.</p>
                    <a href="#" class="text-blue-600 dark:text-blue-400 font-medium hover:text-blue-700 dark:hover:text-blue-300 flex items-center group">
                        Pelajari Lebih Lanjut 
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
                <div class="glass-card p-8 rounded-xl shadow-md hover-lift fade-in" style="transition-delay: 0.1s;">
                    <div class="text-blue-600 dark:text-blue-400 mb-4 flex justify-between items-center">
                        <i class="fas fa-book-open text-3xl icon-glow"></i>
                        <span class="text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full">Kelas 1-6</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Sekolah Dasar</h4>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Membangun dasar akademik yang kuat dengan pendekatan pembelajaran aktif.</p>
                    <a href="#" class="text-blue-600 dark:text-blue-400 font-medium hover:text-blue-700 dark:hover:text-blue-300 flex items-center group">
                        Pelajari Lebih Lanjut 
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
                <div class="glass-card p-8 rounded-xl shadow-md hover-lift fade-in" style="transition-delay: 0.2s;">
                    <div class="text-blue-600 dark:text-blue-400 mb-4 flex justify-between items-center">
                        <i class="fas fa-graduation-cap text-3xl icon-glow"></i>
                        <span class="text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full">Kelas 7-9</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Sekolah Menengah</h4>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Mempersiapkan siswa untuk pendidikan tinggi dan karir masa depan.</p>
                    <a href="#" class="text-blue-600 dark:text-blue-400 font-medium hover:text-blue-700 dark:hover:text-blue-300 flex items-center group">
                        Pelajari Lebih Lanjut 
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section id="facilities" class="py-20 bg-gray-50 dark:bg-transparent border-gradient" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-4">Fasilitas Unggulan</h3>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Dukungan fasilitas lengkap untuk pengalaman belajar yang optimal.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="glass-card p-6 rounded-lg shadow-md text-center hover-lift fade-in">
                    <div class="relative inline-block mb-3">
                        <i class="fas fa-laptop text-blue-600 dark:text-blue-400 text-3xl icon-glow"></i>
                        <div class="absolute -top-1 -right-1 w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                    </div>
                    <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Laboratorium Komputer</h5>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Dilengkapi perangkat modern dan software terkini.</p>
                </div>
                <div class="glass-card p-6 rounded-lg shadow-md text-center hover-lift fade-in" style="transition-delay: 0.1s;">
                    <i class="fas fa-flask text-blue-600 dark:text-blue-400 text-3xl mb-3 icon-glow"></i>
                    <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Lab Sains</h5>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Fasilitas lengkap untuk eksperimen IPA dan kimia.</p>
                </div>
                <div class="glass-card p-6 rounded-lg shadow-md text-center hover-lift fade-in" style="transition-delay: 0.2s;">
                    <i class="fas fa-dumbbell text-blue-600 dark:text-blue-400 text-3xl mb-3 icon-glow"></i>
                    <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Lapangan Olahraga</h5>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Area luas untuk berbagai kegiatan olahraga.</p>
                </div>
                <div class="glass-card p-6 rounded-lg shadow-md text-center hover-lift fade-in" style="transition-delay: 0.3s;">
                    <i class="fas fa-book text-blue-600 dark:text-blue-400 text-3xl mb-3 icon-glow"></i>
                    <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Perpustakaan</h5>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Koleksi buku lengkap dan ruang baca nyaman.</p>
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
    </script>
</body>
</html>