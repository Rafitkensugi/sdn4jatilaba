<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Guru - Sekolah Dasar Negeri 04 Jatilaba</title>
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

        /* Loading animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .dark ::-webkit-scrollbar-track {
            background: #374151;
        }

        ::-webkit-scrollbar-thumb {
            background: #3b82f6;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #2563eb;
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 transition-colors duration-500">
    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-900 shadow-lg sticky top-0 z-50 transition-colors duration-500">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-blue-600 dark:text-blue-400 flex items-center">
                        <i class="fas fa-school mr-2 icon-glow"></i>
                        SDN 04 Jatilaba
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">Beranda</a>
                    <a href="/#about" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">Tentang</a>
                    <a href="/#programs" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">Program</a>
                    <a href="{{ route('allguru') }}" class="text-blue-600 dark:text-blue-400 font-semibold border-b-2 border-blue-600 dark:border-blue-400">Guru & Staff</a>
                    <a href="/#contact" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">Kontak</a>
                    <button id="darkModeToggle" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors duration-300">
                        <i class="fas fa-moon"></i>
                    </button>
                </div>
                <button id="mobile-menu-button" class="md:hidden p-2">
                    <i class="fas fa-bars text-gray-700 dark:text-gray-300"></i>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden py-4 border-t dark:border-gray-700">
                <div class="flex flex-col space-y-4">
                    <a href="/" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">Beranda</a>
                    <a href="/#about" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">Tentang</a>
                    <a href="/#programs" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">Program</a>
                    <a href="{{ route('allguru') }}" class="text-blue-600 dark:text-blue-400 font-semibold">Guru & Staff</a>
                    <a href="/#contact" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">Kontak</a>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-700 dark:text-gray-300">Mode Gelap</span>
                        <button id="mobile-dark-mode-toggle" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300">
                            <i class="fas fa-moon"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-purple-600 dark:from-gray-800 dark:to-gray-900 text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 fade-in">Daftar Semua Guru & Staff</h1>
            <p class="text-xl max-w-2xl mx-auto mb-8 fade-in" style="transition-delay: 0.1s;">
                Tenaga pendidik profesional yang berdedikasi untuk masa depan siswa SDN 04 Jatilaba
            </p>
            <div class="fade-in" style="transition-delay: 0.2s;">
                <a href="/#teachers" class="inline-flex items-center px-6 py-3 bg-white text-blue-600 rounded-lg font-semibold hover:bg-blue-50 transition-all duration-300 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 hover:shadow-lg hover:-translate-y-1">
                    <i class="fas fa-arrow-left mr-2"></i> Kembali ke Beranda
                </a>
            </div>
        </div>
    </section>

    <!-- Guru List Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <!-- Search and Filter -->
            <div class="mb-12 p-6 bg-white dark:bg-gray-800 rounded-xl shadow-lg fade-in">
                <div class="flex flex-col lg:flex-row gap-6 items-center justify-between">
                    <div class="w-full lg:w-96">
                        <div class="relative">
                            <input 
                                type="text" 
                                id="searchInput" 
                                placeholder="Cari guru berdasarkan nama atau jabatan..." 
                                class="w-full px-4 py-3 pl-12 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                            >
                            <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            <button id="clearSearch" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 hidden">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">
                        <select id="filterJabatan" class="px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                            <option value="">Semua Jabatan</option>
                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                            <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                            <option value="Guru Kelas">Guru Kelas</option>
                            <option value="Wali Kelas">Wali Kelas</option>
                            <option value="Guru Matematika">Guru Matematika</option>
                            <option value="Guru IPA">Guru IPA</option>
                            <option value="Guru IPS">Guru IPS</option>
                            <option value="Guru Bahasa Indonesia">Guru Bahasa Indonesia</option>
                            <option value="Guru Bahasa Inggris">Guru Bahasa Inggris</option>
                            <option value="Guru Olahraga">Guru Olahraga</option>
                            <option value="Guru Seni Budaya">Guru Seni Budaya</option>
                            <option value="Pustakawan">Pustakawan</option>
                        </select>
                        <select id="filterStatus" class="px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                            <option value="">Semua Status</option>
                            <option value="PNS">PNS</option>
                            <option value="GTT / PTT">GTT / PTT</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="mb-12 grid grid-cols-2 md:grid-cols-4 gap-6 text-center fade-in" style="transition-delay: 0.1s;">
                <div class="glass-card rounded-xl p-6 shadow-lg hover-lift">
                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">{{ count($allguru) }}</div>
                    <div class="text-gray-600 dark:text-gray-300 font-semibold">Total Guru</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400 mt-1">Semua Tenaga Pendidik</div>
                </div>
                <div class="glass-card rounded-xl p-6 shadow-lg hover-lift">
                    <div class="text-3xl font-bold text-green-600 dark:text-green-400 mb-2">
                        @php
                            $pnsCount = 0;
                            foreach($allguru as $g) {
                                if($g['status'] === 'PNS') {
                                    $pnsCount++;
                                }
                            }
                            echo $pnsCount;
                        @endphp
                    </div>
                    <div class="text-gray-600 dark:text-gray-300 font-semibold">Guru PNS</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400 mt-1">Pegawai Negeri Sipil</div>
                </div>
                <div class="glass-card rounded-xl p-6 shadow-lg hover-lift">
                    <div class="text-3xl font-bold text-purple-600 dark:text-purple-400 mb-2">
                        @php
                            $honorerCount = 0;
                            foreach($allguru as $g) {
                                if($g['status'] === 'GTT / PTT') {
                                    $honorerCount++;
                                }
                            }
                            echo $honorerCount;
                        @endphp
                    </div>
                    <div class="text-gray-600 dark:text-gray-300 font-semibold">Guru Honorer</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400 mt-1">GTT / PTT</div>
                </div>
                <div class="glass-card rounded-xl p-6 shadow-lg hover-lift">
                    <div class="text-3xl font-bold text-orange-600 dark:text-orange-400 mb-2">
                        @php
                            $jabatanUnik = [];
                            foreach($allguru as $g) {
                                if(!in_array($g['jabatan'], $jabatanUnik)) {
                                    $jabatanUnik[] = $g['jabatan'];
                                }
                            }
                            echo count($jabatanUnik);
                        @endphp
                    </div>
                    <div class="text-gray-600 dark:text-gray-300 font-semibold">Jenis Jabatan</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400 mt-1">Ragam Posisi</div>
                </div>
            </div>

            <!-- Results Info -->
            <div id="resultsInfo" class="mb-6 fade-in" style="transition-delay: 0.2s;">
                <div class="flex justify-between items-center">
                    <p id="resultsCount" class="text-gray-600 dark:text-gray-300 font-semibold">
                        Menampilkan <span class="text-blue-600 dark:text-blue-400">{{ count($allguru) }}</span> guru
                    </p>
                    <div class="flex items-center space-x-4">
                        <span class="text-sm text-gray-500 dark:text-gray-400">Urutkan:</span>
                        <select id="sortSelect" class="text-sm px-3 py-1 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="nama">Nama A-Z</option>
                            <option value="nama_desc">Nama Z-A</option>
                            <option value="jabatan">Jabatan</option>
                            <option value="tahun_aktif">Pengalaman</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Guru Grid -->
            <div id="guruContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach($allguru as $teacher)
                <div class="guru-card glass-card rounded-xl shadow-lg hover-lift transition-all duration-300 fade-in" 
                     data-name="{{ strtolower($teacher['nama']) }}" 
                     data-jabatan="{{ $teacher['jabatan'] }}"
                     data-status="{{ $teacher['status'] }}"
                     data-tahun="{{ $teacher['tahun_aktif'] }}">
                    <div class="p-6">
                        <!-- Badge Status -->
                        <div class="flex justify-between items-start mb-4">
                            <span class="text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 px-3 py-1 rounded-full font-semibold">
                                {{ $teacher['jabatan'] }}
                            </span>
                            <span class="text-xs bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 px-2 py-1 rounded-full">
                                {{ $teacher['status'] }}
                            </span>
                        </div>
                        
                        <!-- Foto dan Nama -->
                        <div class="flex flex-col items-center mb-6">
                            <div class="relative mb-4">
                                <img src="{{ $teacher['foto'] }}" alt="{{ $teacher['nama'] }}" 
                                     class="w-32 h-32 rounded-full object-cover border-4 border-blue-200 dark:border-blue-800 shadow-lg">
                                <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white text-xs">
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white text-center mb-2">{{ $teacher['nama'] }}</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-center">Aktif sejak {{ $teacher['tahun_aktif'] }}</p>
                        </div>
                        
                        <!-- Info Singkat -->
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                <i class="fas fa-id-card mr-3 text-blue-500"></i>
                                <span>NIP: {{ $teacher['nip'] }}</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                <i class="fas fa-envelope mr-3 text-blue-500"></i>
                                <span class="truncate">{{ $teacher['email'] }}</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                <i class="fas fa-phone mr-3 text-blue-500"></i>
                                <span>{{ $teacher['telepon'] }}</span>
                            </div>
                        </div>
                        
                        <!-- Detail Lengkap (Hidden) -->
                        <div class="hidden teacher-details">
                            <div class="space-y-3 text-sm text-gray-700 dark:text-gray-300 border-t dark:border-gray-600 pt-6">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <p class="font-semibold text-gray-800 dark:text-gray-200">NUPTK:</p>
                                        <p>{{ $teacher['nuptk'] }}</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800 dark:text-gray-200">Tahun Aktif:</p>
                                        <p>{{ $teacher['tahun_aktif'] }}</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800 dark:text-gray-200">Tempat, Tanggal Lahir:</p>
                                    <p>{{ $teacher['tempat_lahir'] }}, {{ $teacher['tanggal_lahir'] }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800 dark:text-gray-200">Agama:</p>
                                    <p>{{ $teacher['agama'] }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800 dark:text-gray-200">Alamat:</p>
                                    <p class="text-justify">{{ $teacher['alamat'] }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Action Button -->
                        <button class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg transition-all duration-300 detail-btn flex items-center justify-center font-semibold group">
                            <span>Detail Lengkap</span>
                            <i class="fas fa-chevron-down ml-2 transition-transform duration-300 group-hover:translate-y-1"></i>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Empty State -->
            <div id="emptyState" class="hidden text-center py-16 fade-in">
                <div class="max-w-md mx-auto">
                    <i class="fas fa-search text-6xl text-gray-400 mb-6"></i>
                    <h3 class="text-2xl font-semibold text-gray-600 dark:text-gray-300 mb-4">Guru tidak ditemukan</h3>
                    <p class="text-gray-500 dark:text-gray-400 mb-6">
                        Coba gunakan kata kunci pencarian yang berbeda atau atur filter lainnya
                    </p>
                    <button id="resetFilters" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold transition-colors duration-300">
                        <i class="fas fa-refresh mr-2"></i> Reset Filter
                    </button>
                </div>
            </div>

            <!-- Loading State -->
            <div id="loadingState" class="hidden text-center py-16">
                <div class="loading mx-auto mb-4"></div>
                <p class="text-gray-600 dark:text-gray-300">Memuat data guru...</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-purple-600 dark:from-gray-800 dark:to-gray-900 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Butuh Informasi Lebih Lanjut?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Hubungi kami untuk informasi lebih detail mengenai tenaga pendidik di SDN 04 Jatilaba
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+622812345678" class="inline-flex items-center px-8 py-3 bg-white text-blue-600 rounded-lg font-semibold hover:bg-blue-50 transition-all duration-300 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 hover:shadow-lg hover:-translate-y-1">
                    <i class="fas fa-phone mr-2"></i> Hubungi Sekolah
                </a>
                <a href="mailto:info@sdn04jatilaba.sch.id" class="inline-flex items-center px-8 py-3 border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <i class="fas fa-envelope mr-2"></i> Kirim Email
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 dark:bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 flex items-center">
                        <i class="fas fa-school mr-2 icon-glow"></i>
                        SDN 04 Jatilaba
                    </h3>
                    <p class="text-gray-300 leading-relaxed">
                        Mendidik untuk masa depan yang cemerlang dengan kurikulum modern dan fasilitas lengkap.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="/" class="hover:text-white transition-colors duration-300 flex items-center"><i class="fas fa-home mr-2 w-4"></i> Beranda</a></li>
                        <li><a href="/#about" class="hover:text-white transition-colors duration-300 flex items-center"><i class="fas fa-info-circle mr-2 w-4"></i> Tentang Kami</a></li>
                        <li><a href="/#programs" class="hover:text-white transition-colors duration-300 flex items-center"><i class="fas fa-book mr-2 w-4"></i> Program</a></li>
                        <li><a href="{{ route('allguru') }}" class="text-blue-400 font-semibold flex items-center"><i class="fas fa-chalkboard-teacher mr-2 w-4"></i> Guru & Staff</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-3 text-blue-400"></i>
                            <span>Jl. Pendidikan No. 123, Jatilaba, Tegal</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-3 text-blue-400"></i>
                            <span>(0283) 123456</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-blue-400"></i>
                            <span>info@sdn04jatilaba.sch.id</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Follow Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 transform hover:scale-110">
                            <i class="fab fa-facebook text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 transform hover:scale-110">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 transform hover:scale-110">
                            <i class="fab fa-youtube text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 transform hover:scale-110">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-300">
                <p>&copy; 2024 SDN 04 Jatilaba. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Dark Mode Script
        const userPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const savedTheme = localStorage.getItem('color-theme');

        if (savedTheme === 'dark' || (!savedTheme && userPrefersDark)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        // Dark mode toggle
        function toggleDarkMode() {
            const isDark = document.documentElement.classList.toggle('dark');
            localStorage.setItem('color-theme', isDark ? 'dark' : 'light');
            
            // Update icons
            const icons = document.querySelectorAll('#darkModeToggle i, #mobile-dark-mode-toggle i');
            icons.forEach(icon => {
                if (isDark) {
                    icon.className = 'fas fa-sun';
                } else {
                    icon.className = 'fas fa-moon';
                }
            });
        }

        const darkModeToggle = document.getElementById('darkModeToggle');
        const mobileDarkModeToggle = document.getElementById('mobile-dark-mode-toggle');
        
        if (darkModeToggle) {
            darkModeToggle.addEventListener('click', toggleDarkMode);
        }
        
        if (mobileDarkModeToggle) {
            mobileDarkModeToggle.addEventListener('click', toggleDarkMode);
        }

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                // Update icon
                const icon = mobileMenuButton.querySelector('i');
                if (mobileMenu.classList.contains('hidden')) {
                    icon.className = 'fas fa-bars';
                } else {
                    icon.className = 'fas fa-times';
                }
            });
            
            // Close mobile menu when clicking on a link
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    mobileMenuButton.querySelector('i').className = 'fas fa-bars';
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

        // Search and Filter functionality
        const searchInput = document.getElementById('searchInput');
        const clearSearch = document.getElementById('clearSearch');
        const filterJabatan = document.getElementById('filterJabatan');
        const filterStatus = document.getElementById('filterStatus');
        const sortSelect = document.getElementById('sortSelect');
        const guruCards = document.querySelectorAll('.guru-card');
        const emptyState = document.getElementById('emptyState');
        const guruContainer = document.getElementById('guruContainer');
        const resultsInfo = document.getElementById('resultsInfo');
        const resultsCount = document.getElementById('resultsCount');
        const resetFilters = document.getElementById('resetFilters');
        const loadingState = document.getElementById('loadingState');

        // Show/hide clear search button
        if (searchInput && clearSearch) {
            searchInput.addEventListener('input', function() {
                if (this.value.length > 0) {
                    clearSearch.classList.remove('hidden');
                } else {
                    clearSearch.classList.add('hidden');
                }
                filterGuru();
            });

            clearSearch.addEventListener('click', function() {
                searchInput.value = '';
                this.classList.add('hidden');
                filterGuru();
                searchInput.focus();
            });
        }

        // Filter function
        function filterGuru() {
            const searchTerm = searchInput.value.toLowerCase();
            const jabatanFilter = filterJabatan.value;
            const statusFilter = filterStatus.value;
            const sortBy = sortSelect.value;
            
            let visibleCount = 0;
            let filteredCards = [];

            // Show loading
            loadingState.classList.remove('hidden');
            guruContainer.classList.add('opacity-50');

            setTimeout(() => {
                guruCards.forEach(card => {
                    const name = card.dataset.name;
                    const jabatan = card.dataset.jabatan;
                    const status = card.dataset.status;
                    
                    const matchesSearch = name.includes(searchTerm) || jabatan.toLowerCase().includes(searchTerm);
                    const matchesJabatan = !jabatanFilter || jabatan === jabatanFilter;
                    const matchesStatus = !statusFilter || status === statusFilter;
                    
                    if (matchesSearch && matchesJabatan && matchesStatus) {
                        card.style.display = 'block';
                        filteredCards.push(card);
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Sort filtered cards
                sortGuruCards(filteredCards, sortBy);

                // Update results count
                resultsCount.innerHTML = `Menampilkan <span class="text-blue-600 dark:text-blue-400">${visibleCount}</span> guru`;

                // Show/hide empty state
                if (visibleCount === 0) {
                    emptyState.classList.remove('hidden');
                    guruContainer.classList.add('hidden');
                    resultsInfo.classList.add('hidden');
                } else {
                    emptyState.classList.add('hidden');
                    guruContainer.classList.remove('hidden');
                    resultsInfo.classList.remove('hidden');
                }

                // Hide loading
                loadingState.classList.add('hidden');
                guruContainer.classList.remove('opacity-50');
            }, 300);
        }

        // Sort function
        function sortGuruCards(cards, sortBy) {
            const container = document.getElementById('guruContainer');
            const sortedCards = [...cards].sort((a, b) => {
                switch(sortBy) {
                    case 'nama':
                        return a.dataset.name.localeCompare(b.dataset.name);
                    case 'nama_desc':
                        return b.dataset.name.localeCompare(a.dataset.name);
                    case 'jabatan':
                        return a.dataset.jabatan.localeCompare(b.dataset.jabatan);
                    case 'tahun_aktif':
                        return parseInt(b.dataset.tahun) - parseInt(a.dataset.tahun);
                    default:
                        return 0;
                }
            });

            // Reappend sorted cards
            sortedCards.forEach(card => {
                container.appendChild(card);
            });
        }

        // Event listeners
        if (searchInput) searchInput.addEventListener('input', filterGuru);
        if (filterJabatan) filterJabatan.addEventListener('change', filterGuru);
        if (filterStatus) filterStatus.addEventListener('change', filterGuru);
        if (sortSelect) sortSelect.addEventListener('change', filterGuru);

        // Reset filters
        if (resetFilters) {
            resetFilters.addEventListener('click', function() {
                searchInput.value = '';
                filterJabatan.value = '';
                filterStatus.value = '';
                sortSelect.value = 'nama';
                if (clearSearch) clearSearch.classList.add('hidden');
                filterGuru();
            });
        }

        // Detail button functionality
        const detailButtons = document.querySelectorAll('.detail-btn');
        
        detailButtons.forEach(button => {
            button.addEventListener('click', function() {
                const details = this.previousElementSibling;
                const isHidden = details.classList.contains('hidden');
                
                // Close all other open details
                document.querySelectorAll('.teacher-details').forEach(detail => {
                    if (detail !== details) {
                        detail.classList.add('hidden');
                    }
                });
                
                // Update all buttons
                document.querySelectorAll('.detail-btn').forEach(btn => {
                    if (btn !== this) {
                        btn.innerHTML = '<span>Detail Lengkap</span><i class="fas fa-chevron-down ml-2 transition-transform duration-300 group-hover:translate-y-1"></i>';
                        btn.classList.remove('bg-blue-700');
                    }
                });

                if (isHidden) {
                    details.classList.remove('hidden');
                    this.innerHTML = '<span>Sembunyikan</span><i class="fas fa-chevron-up ml-2 transition-transform duration-300"></i>';
                    this.classList.add('bg-blue-700');
                    
                    // Scroll to details if needed
                    const card = this.closest('.guru-card');
                    const cardRect = card.getBoundingClientRect();
                    if (cardRect.bottom > window.innerHeight) {
                        card.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                } else {
                    details.classList.add('hidden');
                    this.innerHTML = '<span>Detail Lengkap</span><i class="fas fa-chevron-down ml-2 transition-transform duration-300 group-hover:translate-y-1"></i>';
                    this.classList.remove('bg-blue-700');
                }
            });
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            filterGuru();
        });
    </script>
</body>
</html>