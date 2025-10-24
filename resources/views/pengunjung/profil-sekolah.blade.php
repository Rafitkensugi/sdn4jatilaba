<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah - SDN Jatilaba 4</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Inisialisasi dark mode berdasarkan preferensi sistem
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    <style>
        @media (max-width: 768px) {
            .mobile-card {
                border-bottom: 1px solid #e5e7eb;
                padding: 12px 0;
            }
            .mobile-card:last-child {
                border-bottom: none;
            }
            .dark .mobile-card {
                border-bottom-color: #374151;
            }
        }
        
        /* Animasi untuk hero section */
        @keyframes slideonce {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-slideonce {
            animation: slideonce 1s ease-out forwards;
        }
        
        .fade-in {
            opacity: 0;
            animation: fadeIn 1s ease-out 0.2s forwards;
        }
        
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body class="font-sans text-gray-800 bg-gray-50 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300">
    <!-- Navbar Component -->
    <x-navbar />

    <!-- Hero Section -->
    <section id="home" 
        class="relative py-20 md:py-32 bg-center bg-cover bg-no-repeat" 
        style="background-image: url('{{ asset('images/hero.jpeg') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/50 dark:from-black/80 dark:to-purple-900/30"></div>
        <div class="container mx-auto px-4 relative z-10 text-center text-white">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-6xl font-bold mb-6 leading-tight animate-slideonce">
                PROFIL SEKOLAH
                </h2>

                <p class="text-xl mb-8 max-w-2xl mx-auto text-gray-100 fade-in" style="transition-delay: 0.2s;">
                    SD Negeri 4 Jatilaba
                </p>
            </div>
        </div>
    </section>

    <!-- Konten Utama -->
    <main class="max-w-6xl mx-auto py-8 md:py-12 px-4 md:px-6">

        <!-- Identitas Sekolah -->
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 md:p-8 mb-6 md:mb-8 transition-colors duration-300">
            <div class="border-l-4 border-yellow-400 pl-4 mb-6 md:mb-8">
                <h2 class="text-xl md:text-2xl font-bold text-blue-900 dark:text-blue-300">IDENTITAS SEKOLAH</h2>
            </div>
            
            <!-- Desktop View -->
            <div class="hidden md:grid md:grid-cols-2 gap-x-12 gap-y-4">
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Nama Sekolah</span>
                    <span class="text-gray-600 dark:text-gray-400">: SDN Jatilaba 4</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">NPSN</span>
                    <span class="text-gray-600 dark:text-gray-400">: 20323456</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">NSS</span>
                    <span class="text-gray-600 dark:text-gray-400">: 101032401234</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Jenjang Pendidikan</span>
                    <span class="text-gray-600 dark:text-gray-400">: Sekolah Dasar (SD)</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Status Sekolah</span>
                    <span class="text-gray-600 dark:text-gray-400">: Negeri</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Akreditasi</span>
                    <span class="text-gray-600 dark:text-gray-400">: A (Unggul)</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">No. SK Akreditasi</span>
                    <span class="text-gray-600 dark:text-gray-400">: 123/BAN-SM/SK/2023</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Tanggal Akreditasi</span>
                    <span class="text-gray-600 dark:text-gray-400">: 15 November 2023</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">SK Pendirian</span>
                    <span class="text-gray-600 dark:text-gray-400">: 421.2/234/1985</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Tanggal Pendirian</span>
                    <span class="text-gray-600 dark:text-gray-400">: 1 Agustus 1985</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">SK Operasional</span>
                    <span class="text-gray-600 dark:text-gray-400">: 421.2/235/1985</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Tanggal Operasional</span>
                    <span class="text-gray-600 dark:text-gray-400">:1 Agustus 1985</span>
                </div>
            </div>
            
            <!-- Mobile View -->
            <div class="md:hidden space-y-0">
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Nama Sekolah</div>
                    <div class="text-gray-600 dark:text-gray-400">SDN Jatilaba 4</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">NPSN</div>
                    <div class="text-gray-600 dark:text-gray-400">20323456</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">NSS</div>
                    <div class="text-gray-600 dark:text-gray-400">101032401234</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Jenjang Pendidikan</div>
                    <div class="text-gray-600 dark:text-gray-400">Sekolah Dasar (SD)</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Status Sekolah</div>
                    <div class="text-gray-600 dark:text-gray-400">Negeri</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Akreditasi</div>
                    <div class="text-gray-600 dark:text-gray-400">A (Unggul)</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">No. SK Akreditasi</div>
                    <div class="text-gray-600 dark:text-gray-400">123/BAN-SM/SK/2023</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Tanggal Akreditasi</div>
                    <div class="text-gray-600 dark:text-gray-400">15 November 2023</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">SK Pendirian</div>
                    <div class="text-gray-600 dark:text-gray-400">421.2/234/1985</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Tanggal Pendirian</div>
                    <div class="text-gray-600 dark:text-gray-400">1 Agustus 1985</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">SK Operasional</div>
                    <div class="text-gray-600 dark:text-gray-400">421.2/235/1985</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Tanggal Operasional</div>
                    <div class="text-gray-600 dark:text-gray-400">1 Agustus 1985</div>
                </div>
            </div>
        </section>

        <!-- Alamat dan Kontak -->
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 md:p-8 mb-6 md:mb-8 transition-colors duration-300">
            <div class="border-l-4 border-yellow-400 pl-4 mb-6 md:mb-8">
                <h2 class="text-xl md:text-2xl font-bold text-blue-900 dark:text-blue-300">ALAMAT DAN KONTAK</h2>
            </div>
            
            <!-- Desktop View -->
            <div class="hidden md:grid md:grid-cols-2 gap-x-12 gap-y-4">
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Alamat</span>
                    <span class="text-gray-600 dark:text-gray-400">: JL KEPLIK 01 RT 01/RW 01</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Desa/Kelurahan</span>
                    <span class="text-gray-600 dark:text-gray-400">: Desa Jatilaba</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Kecamatan</span>
                    <span class="text-gray-600 dark:text-gray-400">: Margasari</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Kabupaten/Kota</span>
                    <span class="text-gray-600 dark:text-gray-400">: Kabupaten Tegal</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Provinsi</span>
                    <span class="text-gray-600 dark:text-gray-400">: Jawa Tengah</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Kode Pos</span>
                    <span class="text-gray-600 dark:text-gray-400">: 52463</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Nomor Telepon</span>
                    <span class="text-gray-600 dark:text-gray-400">: (0283) 123456</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Email</span>
                    <span class="text-gray-600 dark:text-gray-400">: sdnjatilaba4@gmail.com</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Website</span>
                    <span class="text-gray-600 dark:text-gray-400">: www.sdnjatilaba4.sch.id</span>
                </div>
            </div>
            
            <!-- Mobile View -->
            <div class="md:hidden space-y-0">
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Alamat</div>
                    <div class="text-gray-600 dark:text-gray-400">JL KEPLIK 01 RT 01/RW 01</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Desa/Kelurahan</div>
                    <div class="text-gray-600 dark:text-gray-400">Desa Jatilaba</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Kecamatan</div>
                    <div class="text-gray-600 dark:text-gray-400">Margasari</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Kabupaten/Kota</div>
                    <div class="text-gray-600 dark:text-gray-400">Kabupaten Tegal</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Provinsi</div>
                    <div class="text-gray-600 dark:text-gray-400">Jawa Tengah</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Kode Pos</div>
                    <div class="text-gray-600 dark:text-gray-400">52463</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Nomor Telepon</div>
                    <div class="text-gray-600 dark:text-gray-400">(0283) 123456</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Email</div>
                    <div class="text-gray-600 dark:text-gray-400">sdnjatilaba4@gmail.com</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Website</div>
                    <div class="text-gray-600 dark:text-gray-400">www.sdnjatilaba4.sch.id</div>
                </div>
            </div>
        </section>

        <!-- Data Kepemimpinan -->
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 md:p-8 mb-6 md:mb-8 transition-colors duration-300">
            <div class="border-l-4 border-yellow-400 pl-4 mb-6 md:mb-8">
                <h2 class="text-xl md:text-2xl font-bold text-blue-900 dark:text-blue-300">KEPEMIMPINAN</h2>
            </div>
            
            <!-- Desktop View -->
            <div class="hidden md:grid md:grid-cols-2 gap-x-12 gap-y-4">
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Kepala Sekolah</span>
                    <span class="text-gray-600 dark:text-gray-400">: Sri Nurhayati, S.Pd.SD</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">NIP Kepala Sekolah</span>
                    <span class="text-gray-600 dark:text-gray-400">: 196505101987032008</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Operator Sekolah</span>
                    <span class="text-gray-600 dark:text-gray-400">: Raihan Aji Zaefani</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Kordinator</span>
                    <span class="text-gray-600 dark:text-gray-400">: Parwiti</span>
                </div>
            </div>
            
            <!-- Mobile View -->
            <div class="md:hidden space-y-0">
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Kepala Sekolah</div>
                    <div class="text-gray-600 dark:text-gray-400">Sri Nurhayati, S.Pd.SD</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">NIP Kepala Sekolah</div>
                    <div class="text-gray-600 dark:text-gray-400">196505101987032008</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Operator Sekolah</div>
                    <div class="text-gray-600 dark:text-gray-400">Raihan Aji Zaefani</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Kordinator</div>
                    <div class="text-gray-600 dark:text-gray-400">Parwiti</div>
                </div>
            </div>
        </section>

        <!-- Data Statistik -->
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 md:p-8 transition-colors duration-300">
            <div class="border-l-4 border-yellow-400 pl-4 mb-6 md:mb-8">
                <h2 class="text-xl md:text-2xl font-bold text-blue-900 dark:text-blue-300">DATA STATISTIK</h2>
            </div>
            
            <!-- Desktop View -->
            <div class="hidden md:grid md:grid-cols-2 gap-x-12 gap-y-4">
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Jumlah Siswa</span>
                    <span class="text-gray-600 dark:text-gray-400">: 320 siswa</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Jumlah Guru</span>
                    <span class="text-gray-600 dark:text-gray-400">: 16 orang</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Luas Tanah</span>
                    <span class="text-gray-600 dark:text-gray-400">: 2.500 m²</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-600 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Luas Bangunan</span>
                    <span class="text-gray-600 dark:text-gray-400">: 1.800 m²</span>
                </div>
            </div>
            
            <!-- Mobile View -->
            <div class="md:hidden space-y-0">
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Jumlah Siswa</div>
                    <div class="text-gray-600 dark:text-gray-400">320 siswa</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Jumlah Guru</div>
                    <div class="text-gray-600 dark:text-gray-400">16 orang</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Luas Tanah</div>
                    <div class="text-gray-600 dark:text-gray-400">2.500 m²</div>
                </div>
                
                <div class="mobile-card">
                    <div class="font-semibold text-gray-700 dark:text-gray-300">Luas Bangunan</div>
                    <div class="text-gray-600 dark:text-gray-400">1.800 m²</div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer Component -->
    <x-footer />
</body>
</html>