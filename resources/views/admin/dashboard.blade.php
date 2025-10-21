<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - SDN 4 Jatilaba</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }
        .dark .custom-scrollbar::-webkit-scrollbar-track {
            background: #1e293b;
        }
        .dark .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #475569;
        }
        
        /* Animasi untuk sidebar */
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
        
        /* Overlay untuk mobile */
        .overlay {
            transition: opacity 0.3s ease-in-out;
        }
        
        /* Efek untuk kartu statistik */
        .stat-card {
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .dark .stat-card:hover {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 font-sans transition-colors duration-300">

    <div class="flex min-h-screen">
       <x-sidebar></x-sidebar>

        <!-- Mobile Menu Button -->
        <button class="lg:hidden fixed top-4 left-4 z-50 p-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-white rounded-md shadow-md" id="menuToggle">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Overlay for mobile -->
        <div class="lg:hidden fixed inset-0 bg-black bg-opacity-50 z-40 hidden overlay" id="overlay"></div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden lg:ml-0">
            <!-- Header -->
            <header class="bg-white dark:bg-gray-800 shadow transition-colors duration-300">
                <div class="flex items-center justify-between px-4 sm:px-6 py-3">
                    <div class="text-lg font-semibold text-gray-800 dark:text-white">Dashboard Admin</div>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600 dark:text-gray-300 text-sm sm:text-base">Halo, {{ Auth::user()->name }}</span>
                        <img class="w-8 h-8 sm:w-10 sm:h-10 rounded-full object-cover border-2 border-gray-300 dark:border-gray-600" src="https://ui-avatars.com/api/?name=Admin&background=4F46E5&color=ffffff" alt="Profile">
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-y-auto p-4 sm:p-6 bg-gray-100 dark:bg-gray-900 custom-scrollbar transition-colors duration-300">
                <!-- Welcome Section -->
                <div class="mb-6">
                    <h1 class="text-xl sm:text-2xl font-bold text-gray-800 dark:text-white mb-2">Selamat Datang, {{  Auth::user()->name }}!</h1>
                    <p class="text-gray-600 dark:text-gray-400 text-sm sm:text-base">Kelola konten website SDN 4 Jatilaba dengan mudah melalui dashboard ini.</p>
                </div>

                <!-- Statistik Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-6">
                    <div class="stat-card bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow dark:shadow-gray-700/50 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-100 dark:bg-blue-900/30 mr-4">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9m0 0v12"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Berita</h3>
                                <p class="text-2xl sm:text-3xl font-bold text-blue-600 dark:text-blue-400">24</p>
                            </div>
                        </div>
                    </div>
                    <div class="stat-card bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow dark:shadow-gray-700/50 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 dark:bg-green-900/30 mr-4">
                                <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Pengumuman</h3>
                                <p class="text-2xl sm:text-3xl font-bold text-green-600 dark:text-green-400">8</p>
                            </div>
                        </div>
                    </div>
                    <div class="stat-card bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow dark:shadow-gray-700/50 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-purple-100 dark:bg-purple-900/30 mr-4">
                                <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Prestasi</h3>
                                <p class="text-2xl sm:text-3xl font-bold text-purple-600 dark:text-purple-400">36</p>
                            </div>
                        </div>
                    </div>
                    <div class="stat-card bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow dark:shadow-gray-700/50 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-yellow-100 dark:bg-yellow-900/30 mr-4">
                                <svg class="w-6 h-6 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Fasilitas</h3>
                                <p class="text-2xl sm:text-3xl font-bold text-yellow-600 dark:text-yellow-400">15</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kartu Statistik Baru untuk Menu yang Ditambahkan -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-6">
                    <div class="stat-card bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow dark:shadow-gray-700/50 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-indigo-100 dark:bg-indigo-900/30 mr-4">
                                <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Guru</h3>
                                <p class="text-2xl sm:text-3xl font-bold text-indigo-600 dark:text-indigo-400">28</p>
                            </div>
                        </div>
                    </div>
                    <div class="stat-card bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow dark:shadow-gray-700/50 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-pink-100 dark:bg-pink-900/30 mr-4">
                                <svg class="w-6 h-6 text-pink-600 dark:text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Pendaftar SPMB </h3>
                                <p class="text-2xl sm:text-3xl font-bold text-pink-600 dark:text-pink-400">42</p>
                            </div>
                        </div>
                    </div>
                    <div class="stat-card bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow dark:shadow-gray-700/50 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-teal-100 dark:bg-teal-900/30 mr-4">
                                <svg class="w-6 h-6 text-teal-600 dark:text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Siswa</h3>
                                <p class="text-2xl sm:text-3xl font-bold text-teal-600 dark:text-teal-400">312</p>
                            </div>
                        </div>
                    </div>
                    <div class="stat-card bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow dark:shadow-gray-700/50 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-orange-100 dark:bg-orange-900/30 mr-4">
                                <svg class="w-6 h-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Feedback Baru</h3>
                                <p class="text-2xl sm:text-3xl font-bold text-orange-600 dark:text-orange-400">7</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Aktivitas Terbaru -->
                <div class="bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow dark:shadow-gray-700/50 transition-colors duration-300">
                    <h2 class="text-lg sm:text-xl font-semibold mb-4 text-gray-800 dark:text-white flex items-center">
                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        Aktivitas Terbaru
                    </h2>
                    <ul class="space-y-3">
                        <li class="flex justify-between items-center text-sm border-b dark:border-gray-700 pb-3">
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>
                                <span class="text-gray-700 dark:text-gray-300">Berita baru "Penerimaan Siswa Baru" ditambahkan</span>
                            </div>
                            <span class="text-gray-500 dark:text-gray-400 text-xs">10 menit lalu</span>
                        </li>
                        <li class="flex justify-between items-center text-sm border-b dark:border-gray-700 pb-3">
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                                <span class="text-gray-700 dark:text-gray-300">Pengumuman rapat guru dikirim</span>
                            </div>
                            <span class="text-gray-500 dark:text-gray-400 text-xs">1 jam lalu</span>
                        </li>
                        <li class="flex justify-between items-center text-sm border-b dark:border-gray-700 pb-3">
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>
                                <span class="text-gray-700 dark:text-gray-300">Prestasi siswa di Olimpiade Matematika diinput</span>
                            </div>
                            <span class="text-gray-500 dark:text-gray-400 text-xs">2 jam lalu</span>
                        </li>
                        <li class="flex justify-between items-center text-sm border-b dark:border-gray-700 pb-3">
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                                <span class="text-gray-700 dark:text-gray-300">Data guru baru ditambahkan</span>
                            </div>
                            <span class="text-gray-500 dark:text-gray-400 text-xs">3 jam lalu</span>
                        </li>
                        <li class="flex justify-between items-center text-sm">
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-pink-500 rounded-full mr-3"></span>
                                <span class="text-gray-700 dark:text-gray-300">Informasi PPDB diperbarui</span>
                            </div>
                            <span class="text-gray-500 dark:text-gray-400 text-xs">Hari ini</span>
                        </li>
                    </ul>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });

        // Close sidebar when clicking on a link (mobile)
        const sidebarLinks = document.querySelectorAll('aside nav a');
        sidebarLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 1024) {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                }
            });
        });

        // Handle window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
            }
        });

        // Set theme based on browser preference
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        // Listen for changes in browser theme preference
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
            if (event.matches) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        });
    </script>

</body>
</html>