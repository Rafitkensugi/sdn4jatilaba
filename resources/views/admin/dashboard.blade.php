<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard Admin - SDN 4 Jatilaba</title>
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
        /* Custom scrollbar untuk dark mode */
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
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 font-sans transition-colors duration-300">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 dark:bg-gray-900 text-white fixed h-full lg:relative lg:translate-x-0 transform -translate-x-full transition-transform duration-300 z-50" id="sidebar">
            <div class="p-4 border-b border-gray-700 dark:border-gray-700">
                <h1 class="text-xl font-bold">SDN 4 Jatilaba</h1>
                <p class="text-sm text-gray-400 mt-1">Admin Panel</p>
            </div>
            <nav class="mt-4">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-800 hover:text-white transition-colors duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700 dark:bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Dashboard
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-800 hover:text-white transition-colors duration-200 {{ request()->routeIs('admin.berita.*') ? 'bg-gray-700 dark:bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9m0 0v12m0-12a2 2 0 012-2h2a2 2 0 012 2m-6 9v2m0-4v2"></path>
                    </svg>
                    Berita
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-800 hover:text-white transition-colors duration-200 {{ request()->routeIs('admin.pengumuman.*') ? 'bg-gray-700 dark:bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                    </svg>
                    Pengumuman
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-800 hover:text-white transition-colors duration-200 {{ request()->routeIs('admin.prestasi.*') ? 'bg-gray-700 dark:bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Prestasi
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-800 hover:text-white transition-colors duration-200 {{ request()->routeIs('admin.fasilitas.*') ? 'bg-gray-700 dark:bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    Fasilitas
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-800 hover:text-white transition-colors duration-200 {{ request()->routeIs('admin.feedback.*') ? 'bg-gray-700 dark:bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                    </svg>
                    Feedback
                </a>
                
                <form action="{{ route('logout') }}" method="POST" class="mt-6">
                    @csrf
                    <button type="submit" class="flex items-center w-full px-4 py-3 text-gray-300 hover:bg-red-700 dark:hover:bg-red-800 hover:text-white transition-colors duration-200">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        Logout
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Mobile Menu Button -->
        <button class="lg:hidden fixed top-4 left-4 z-50 p-2 bg-gray-800 dark:bg-gray-900 text-white rounded-md shadow-md" id="menuToggle">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Overlay for mobile -->
        <div class="lg:hidden fixed inset-0 bg-black bg-opacity-50 z-40 hidden" id="overlay"></div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden lg:ml-0">
            <!-- Header -->
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="flex items-center justify-between px-6 py-3">
                    <div class="text-lg font-semibold text-gray-800 dark:text-white">Dashboard Admin</div>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600 dark:text-gray-300">Halo, {{ Auth::user()->name ?? 'Admin' }}</span>
                        <img class="w-10 h-10 rounded-full object-cover border-2 border-gray-300 dark:border-gray-600" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'Admin') }}&background=4F46E5&color=ffffff" alt="Profile">
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100 dark:bg-gray-900 custom-scrollbar">
                <!-- Welcome Section -->
                <div class="mb-6">
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Selamat Datang, {{ Auth::user()->name ?? 'Admin' }}!</h1>
                    <p class="text-gray-600 dark:text-gray-400">Kelola konten website SDN 4 Jatilaba dengan mudah melalui dashboard ini.</p>
                </div>

                <!-- Statistik Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow dark:shadow-gray-700/50 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-100 dark:bg-blue-900/30 mr-4">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9m0 0v12"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Berita</h3>
                                <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">{{ $totalBerita ?? 24 }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow dark:shadow-gray-700/50 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 dark:bg-green-900/30 mr-4">
                                <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Pengumuman</h3>
                                <p class="text-3xl font-bold text-green-600 dark:text-green-400">{{ $totalPengumuman ?? 8 }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow dark:shadow-gray-700/50 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-purple-100 dark:bg-purple-900/30 mr-4">
                                <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Prestasi</h3>
                                <p class="text-3xl font-bold text-purple-600 dark:text-purple-400">{{ $totalPrestasi ?? 36 }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow dark:shadow-gray-700/50 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-yellow-100 dark:bg-yellow-900/30 mr-4">
                                <svg class="w-6 h-6 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Fasilitas</h3>
                                <p class="text-3xl font-bold text-yellow-600 dark:text-yellow-400">{{ $totalFasilitas ?? 15 }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Aktivitas Terbaru -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow dark:shadow-gray-700/50">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white flex items-center">
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
                        <li class="flex justify-between items-center text-sm">
                            <div class="flex items-center">
                                <span class="w-2 h-2 bg-yellow-500 rounded-full mr-3"></span>
                                <span class="text-gray-700 dark:text-gray-300">Data fasilitas laboratorium komputer diperbarui</span>
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
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        });

        // Close sidebar when clicking on a link (mobile)
        const sidebarLinks = document.querySelectorAll('aside nav a');
        sidebarLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 1024) {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                }
            });
        });

        // Add hover effect to cards
        const cards = document.querySelectorAll('.bg-white');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('shadow-lg');
            });
            card.addEventListener('mouseleave', () => {
                card.classList.remove('shadow-lg');
            });
        });
    </script>

</body>
</html>