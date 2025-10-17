<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard Admin - Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Inisialisasi dark mode berdasarkan preferensi sistem
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 dark:bg-gray-900 font-sans transition-colors duration-300">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 dark:bg-gray-900 text-white">
            <div class="p-4 border-b border-gray-700 dark:border-gray-700">
                <h1 class="text-xl font-bold">Sekolah Admin</h1>
            </div>
            <nav class="mt-4">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-800 hover:text-white {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700 dark:bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Dashboard
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-800 hover:text-white {{ request()->routeIs('admin.berita.*') ? 'bg-gray-700 dark:bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9m0 0v12m0 0h2m-2 0h4"></path>
                    </svg>
                    Berita
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-800 hover:text-white {{ request()->routeIs('admin.pengumuman.*') ? 'bg-gray-700 dark:bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                    </svg>
                    Pengumuman
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-800 hover:text-white {{ request()->routeIs('admin.prestasi.*') ? 'bg-gray-700 dark:bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Prestasi
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-800 hover:text-white {{ request()->routeIs('admin.fasilitas.*') ? 'bg-gray-700 dark:bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    Fasilitas
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-800 hover:text-white {{ request()->routeIs('admin.feedback.*') ? 'bg-gray-700 dark:bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                    </svg>
                    Feedback
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="flex items-center px-4 py-3 text-gray-300 hover:bg-red-700 dark:hover:bg-red-800 hover:text-white mt-6 w-full text-left">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        Logout
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white dark:bg-gray-800 shadow dark:shadow-gray-900/50">
                <div class="flex items-center justify-between px-6 py-3">
                    <div class="text-lg font-semibold text-gray-800 dark:text-white">Dashboard Admin</div>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600 dark:text-gray-300">Halo, {{ Auth::user()->name ?? 'Admin' }}</span>
                        <img class="w-10 h-10 rounded-full object-cover border-2 border-gray-300 dark:border-gray-600" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'Admin') }}&background=6366f1&color=fff" alt="Profile">
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100 dark:bg-gray-900">
                <!-- Statistik Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow dark:shadow-gray-900/50">
                        <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Berita</h3>
                        <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">{{ $totalBerita ?? 25 }}</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow dark:shadow-gray-900/50">
                        <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Pengumuman</h3>
                        <p class="text-3xl font-bold text-green-600 dark:text-green-400">{{ $totalPengumuman ?? 8 }}</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow dark:shadow-gray-900/50">
                        <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Jumlah Prestasi</h3>
                        <p class="text-3xl font-bold text-purple-600 dark:text-purple-400">{{ $totalPrestasi ?? 15 }}</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow dark:shadow-gray-900/50">
                        <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Fasilitas</h3>
                        <p class="text-3xl font-bold text-yellow-600 dark:text-yellow-400">{{ $totalFasilitas ?? 10 }}</p>
                    </div>
                </div>

                <!-- Grid untuk Feedback dan Aktivitas -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Feedback Terbaru -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow dark:shadow-gray-900/50">
                        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Feedback Terbaru</h2>
                        <ul class="space-y-3">
                            <li class="flex justify-between text-sm border-b pb-3 dark:border-gray-700">
                                <div>
                                    <span class="text-gray-800 dark:text-gray-200 font-medium">Saran untuk perpustakaan</span>
                                    <p class="text-gray-600 dark:text-gray-400 text-xs mt-1">Dari: Orang Tua Siswa</p>
                                </div>
                                <span class="text-gray-500 dark:text-gray-400 text-xs">Hari ini</span>
                            </li>
                            <li class="flex justify-between text-sm border-b pb-3 dark:border-gray-700">
                                <div>
                                    <span class="text-gray-800 dark:text-gray-200 font-medium">Pujian untuk kegiatan ekstrakurikuler</span>
                                    <p class="text-gray-600 dark:text-gray-400 text-xs mt-1">Dari: Siswa</p>
                                </div>
                                <span class="text-gray-500 dark:text-gray-400 text-xs">Kemarin</span>
                            </li>
                            <li class="flex justify-between text-sm">
                                <div>
                                    <span class="text-gray-800 dark:text-gray-200 font-medium">Masukan untuk kantin sekolah</span>
                                    <p class="text-gray-600 dark:text-gray-400 text-xs mt-1">Dari: Guru</p>
                                </div>
                                <span class="text-gray-500 dark:text-gray-400 text-xs">2 hari lalu</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Aktivitas Terbaru -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow dark:shadow-gray-900/50">
                        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Aktivitas Terbaru</h2>
                        <ul class="space-y-3">
                            <li class="flex justify-between text-sm border-b pb-3 dark:border-gray-700">
                                <span class="text-gray-800 dark:text-gray-200">Berita baru ditambahkan: "Penerimaan Siswa Baru"</span>
                                <span class="text-gray-500 dark:text-gray-400">10 menit lalu</span>
                            </li>
                            <li class="flex justify-between text-sm border-b pb-3 dark:border-gray-700">
                                <span class="text-gray-800 dark:text-gray-200">Pengumuman rapat guru dikirim</span>
                                <span class="text-gray-500 dark:text-gray-400">1 jam lalu</span>
                            </li>
                            <li class="flex justify-between text-sm border-b pb-3 dark:border-gray-700">
                                <span class="text-gray-800 dark:text-gray-200">Prestasi siswa diupdate</span>
                                <span class="text-gray-500 dark:text-gray-400">2 jam lalu</span>
                            </li>
                            <li class="flex justify-between text-sm">
                                <span class="text-gray-800 dark:text-gray-200">Foto fasilitas baru diupload</span>
                                <span class="text-gray-500 dark:text-gray-400">Hari ini</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>
</html>