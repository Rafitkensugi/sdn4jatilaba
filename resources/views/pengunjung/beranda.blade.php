<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolah Harapan Bangsa - Landing Page</title>
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
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="bg-blue-600 p-2 rounded-lg">
                        <i class="fas fa-school text-white text-2xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Sekolah Harapan Bangsa</h1>
                        <p class="text-sm text-gray-600">Membangun Generasi Unggul</p>
                    </div>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Beranda</a>
                    <a href="#about" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Tentang</a>
                    <a href="#programs" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Program</a>
                    <a href="#facilities" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Fasilitas</a>
                    <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Kontak</a>
                </nav>
                <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors font-medium">
                    Daftar Sekarang
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="relative py-20 md:py-32">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-700 opacity-90"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    Mendidik untuk Masa Depan yang Cemerlang
                </h2>
                <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
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

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center text-white mb-16">
                <h3 class="text-3xl md:text-4xl font-bold mb-4">Hubungi Kami</h3>
                <p class="text-blue-100">Siap membantu Anda dengan informasi lebih lanjut tentang pendaftaran dan program kami.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <div class="space-y-8">
                    <div class="flex items-center space-x-4">
                        <div class="bg-white bg-opacity-20 p-3 rounded-lg">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <h5 class="font-semibold text-lg">Alamat</h5>
                            <p class="text-blue-100">Jl. Pendidikan No. 123, Kota Harapan, Indonesia</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="bg-white bg-opacity-20 p-3 rounded-lg">
                            <i class="fas fa-phone text-xl"></i>
                        </div>
                        <div>
                            <h5 class="font-semibold text-lg">Telepon</h5>
                            <p class="text-blue-100">+62 21 1234 5678</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="bg-white bg-opacity-20 p-3 rounded-lg">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <div>
                            <h5 class="font-semibold text-lg">Email</h5>
                            <p class="text-blue-100">info@sekolahharapanbangsa.sch.id</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="bg-white bg-opacity-20 p-3 rounded-lg">
                            <i class="fas fa-clock text-xl"></i>
                        </div>
                        <div>
                            <h5 class="font-semibold text-lg">Jam Operasional</h5>
                            <p class="text-blue-100">Senin - Jumat: 07.00 - 16.00 WIB</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm p-8 rounded-xl">
                    <form class="space-y-6">
                        <div>
                            <label class="block text-white font-medium mb-2">Nama Lengkap</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent" placeholder="Masukkan nama Anda">
                        </div>
                        <div>
                            <label class="block text-white font-medium mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent" placeholder="Masukkan email Anda">
                        </div>
                        <div>
                            <label class="block text-white font-medium mb-2">Pesan</label>
                            <textarea rows="4" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent" placeholder="Tulis pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="bg-blue-600 p-2 rounded-lg">
                            <i class="fas fa-school text-white text-xl"></i>
                        </div>
                        <h4 class="text-xl font-bold">Sekolah Harapan Bangsa</h4>
                    </div>
                    <p class="text-gray-400 mb-4 max-w-md">
                        Membangun generasi unggul melalui pendidikan berkualitas dengan nilai-nilai karakter yang kuat.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 w-10 h-10 rounded-full flex items-center justify-center transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 w-10 h-10 rounded-full flex items-center justify-center transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 w-10 h-10 rounded-full flex items-center justify-center transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 w-10 h-10 rounded-full flex items-center justify-center transition-colors">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h5 class="font-semibold mb-4">Program</h5>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Taman Kanak-Kanak</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Sekolah Dasar</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Sekolah Menengah</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Ekstrakurikuler</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-semibold mb-4">Informasi</h5>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Berita & Acara</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Karir</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Sekolah Harapan Bangsa. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>