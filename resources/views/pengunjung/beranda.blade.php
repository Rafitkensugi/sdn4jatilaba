<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolah Harapan Bangsa - Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af',
                        secondary: '#3b82f6',
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100">
   <x-navbar />

   <!-- Hero Section -->
<section id="home" 
    class="relative py-20 md:py-32 bg-center bg-cover bg-no-repeat" 
    style="background-image: url('{{ asset('images/hero.jpeg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="container mx-auto px-4 relative z-10 text-center text-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Mendidik untuk Masa Depan yang Cemerlang
            </h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto text-gray-100">
                Sekolah Harapan Bangsa menawarkan pendidikan berkualitas dengan kurikulum modern dan fasilitas lengkap untuk mendukung perkembangan akademik dan karakter siswa.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors flex items-center justify-center">
                    Daftar Sekarang <i class="fas fa-arrow-right ml-2"></i>
                </button>
                <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                    Kunjungi Sekolah
                </button>
            </div>
        </div>
    </div>
</section>


    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="space-y-2">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600">25+</div>
                    <p class="text-gray-600">Tahun Pengalaman</p>
                </div>
                <div class="space-y-2">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600">1,200+</div>
                    <p class="text-gray-600">Siswa Aktif</p>
                </div>
                <div class="space-y-2">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600">85+</div>
                    <p class="text-gray-600">Guru Profesional</p>
                </div>
                <div class="space-y-2">
                    <div class="text-3xl md:text-4xl font-bold text-blue-600">98%</div>
                    <p class="text-gray-600">Kelulusan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Tentang Kami</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">Misi kami adalah memberikan pendidikan terbaik yang mengembangkan potensi setiap siswa secara holistik.</p>
            </div>
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2">
                    <img src="https://placehold.co/600x400/1e40af/ffffff?text=Sekolah+Harapan+Banga" alt="Sekolah Harapan Bangsa" class="rounded-xl shadow-lg w-full">
                </div>
                <div class="lg:w-1/2 space-y-6">
                    <h4 class="text-2xl font-bold text-gray-800">Visi & Misi</h4>
                    <p class="text-gray-600 leading-relaxed">
                        Sekolah Harapan Bangsa berkomitmen untuk menjadi lembaga pendidikan unggulan yang menghasilkan lulusan berkarakter, berprestasi, dan siap menghadapi tantangan global.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                            <span class="text-gray-700">Kurikulum berbasis karakter dan kompetensi</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                            <span class="text-gray-700">Pengembangan soft skills dan leadership</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                            <span class="text-gray-700">Lingkungan belajar yang kondusif dan inspiratif</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Program Pendidikan</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami menawarkan berbagai jenjang pendidikan dengan kurikulum terpadu dan modern.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-child text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-3">Taman Kanak-Kanak</h4>
                    <p class="text-gray-600 mb-4">Mengembangkan fondasi belajar melalui bermain dan eksplorasi yang menyenangkan.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-700">Pelajari Lebih Lanjut →</a>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-book-open text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-3">Sekolah Dasar</h4>
                    <p class="text-gray-600 mb-4">Membangun dasar akademik yang kuat dengan pendekatan pembelajaran aktif.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-700">Pelajari Lebih Lanjut →</a>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-graduation-cap text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-3">Sekolah Menengah</h4>
                    <p class="text-gray-600 mb-4">Mempersiapkan siswa untuk pendidikan tinggi dan karir masa depan.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-700">Pelajari Lebih Lanjut →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section id="facilities" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Fasilitas Unggulan</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">Dukungan fasilitas lengkap untuk pengalaman belajar yang optimal.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <i class="fas fa-laptop text-blue-600 text-3xl mb-3"></i>
                    <h5 class="font-semibold text-gray-800 mb-2">Laboratorium Komputer</h5>
                    <p class="text-gray-600 text-sm">Dilengkapi perangkat modern dan software terkini.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <i class="fas fa-flask text-blue-600 text-3xl mb-3"></i>
                    <h5 class="font-semibold text-gray-800 mb-2">Lab Sains</h5>
                    <p class="text-gray-600 text-sm">Fasilitas lengkap untuk eksperimen IPA dan kimia.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <i class="fas fa-dumbbell text-blue-600 text-3xl mb-3"></i>
                    <h5 class="font-semibold text-gray-800 mb-2">Lapangan Olahraga</h5>
                    <p class="text-gray-600 text-sm">Area luas untuk berbagai kegiatan olahraga.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <i class="fas fa-book text-blue-600 text-3xl mb-3"></i>
                    <h5 class="font-semibold text-gray-800 mb-2">Perpustakaan</h5>
                    <p class="text-gray-600 text-sm">Koleksi buku lengkap dan ruang baca nyaman.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Testimoni Orang Tua</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">Apa kata mereka tentang pengalaman di Sekolah Harapan Bangsa.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4 italic">"Anak saya berkembang pesat baik akademik maupun karakter sejak bergabung di sekolah ini. Guru-gurunya sangat perhatian!"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-3">S</div>
                        <div>
                            <p class="font-semibold text-gray-800">Siti Rahayu</p>
                            <p class="text-gray-600 text-sm">Orang Tua Siswa</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4 italic">"Fasilitasnya lengkap dan kurikulumnya sangat baik. Saya puas dengan perkembangan anak saya di sini."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-3">B</div>
                        <div>
                            <p class="font-semibold text-gray-800">Budi Santoso</p>
                            <p class="text-gray-600 text-sm">Orang Tua Siswa</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4 italic">"Lingkungan belajarnya sangat kondusif dan guru-gurunya profesional. Anak saya senang sekolah di sini!"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-3">D</div>
                        <div>
                            <p class="font-semibold text-gray-800">Dewi Lestari</p>
                            <p class="text-gray-600 text-sm">Orang Tua Siswa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer></x-footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
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
    </script>
</body>
</html>