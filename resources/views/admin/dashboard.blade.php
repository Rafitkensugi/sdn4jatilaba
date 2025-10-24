<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - SDN 4 Jatilaba</title>

    <!-- Tailwind & Font Awesome -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            500: '#3b82f6',
                            600: '#2563eb',
                        }
                    }
                }
            }
        }

        function detectColorScheme() {
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            const html = document.documentElement;
            prefersDark ? html.classList.add('dark') : html.classList.remove('dark');
        }
        document.addEventListener('DOMContentLoaded', detectColorScheme);
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', detectColorScheme);
    </script>

    <style>
        .custom-scrollbar::-webkit-scrollbar { width: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #f1f5f9; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 3px; }
        .dark .custom-scrollbar::-webkit-scrollbar-track { background: #1e293b; }
        .dark .custom-scrollbar::-webkit-scrollbar-thumb { background: #475569; }

        .stat-card {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1),
                        0 10px 10px -5px rgba(0,0,0,0.04);
        }
        .dark .stat-card:hover {
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.3),
                        0 10px 10px -5px rgba(0,0,0,0.2);
        }
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #3b82f6, #60a5fa);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .stat-card:hover::before { opacity: 1; }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in { animation: fadeIn 0.5s ease-in-out; }

        @keyframes growWidth {
            from { width: 0%; }
            to { width: 100%; }
        }
        .progress-bar { animation: growWidth 1s ease-out; }
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900 font-sans transition-colors duration-300">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <x-sidebar active-menu="dashboard"></x-sidebar>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <main class="flex-1 overflow-y-auto p-4 sm:p-6 bg-gray-50 dark:bg-gray-900 custom-scrollbar transition-colors duration-300">
                <!-- Welcome Section -->
                <div class="mb-8 fade-in">
                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl p-6 text-white shadow-lg">
                        <h1 class="text-2xl sm:text-3xl font-bold mb-2">Selamat Datang, Admin!</h1>
                        <p class="text-blue-100 text-sm sm:text-base max-w-2xl">
                            Kelola konten website SDN 4 Jatilaba dengan mudah melalui dashboard ini. 
                            Pantau aktivitas terbaru dan statistik situs web di bawah ini.
                        </p>
                    </div>
                </div>

                <!-- Statistik Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="stat-card bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm fade-in">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 rounded-xl bg-blue-100 dark:bg-blue-900/30">
                                <i class="fas fa-newspaper text-blue-600 dark:text-blue-400 text-xl"></i>
                            </div>
                            <span class="text-xs font-medium px-2 py-1 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400">+{{ $newArtikel    }} baru</span>
                        </div>
                        <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium mb-1">Total Berita</h3>
                        <p class="text-2xl sm:text-3xl font-bold text-gray-800 dark:text-white mb-2">{{ $artikels }}</p>
                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full progress-bar" style="width: 75%"></div>
                        </div>
                    </div>

                    <div class="stat-card bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm fade-in">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 rounded-xl bg-green-100 dark:bg-green-900/30">
                                <i class="fas fa-bullhorn text-green-600 dark:text-green-400 text-xl"></i>
                            </div>
                            <span class="text-xs font-medium px-2 py-1 rounded-full bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400">+{{ $newPengumuman }} baru</span>
                        </div>
                        <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium mb-1">Total Pengumuman</h3>
                        <p class="text-2xl sm:text-3xl font-bold text-gray-800 dark:text-white mb-2">{{ $pengumumans }}</p>
                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                            <div class="bg-green-600 h-2 rounded-full progress-bar" style="width: 40%"></div>
                        </div>
                    </div>

                    <div class="stat-card bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm fade-in">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 rounded-xl bg-purple-100 dark:bg-purple-900/30">
                                <i class="fas fa-trophy text-purple-600 dark:text-purple-400 text-xl"></i>
                            </div>
                            <span class="text-xs font-medium px-2 py-1 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400">+{{ $newPrestasi }} baru</span>
                        </div>
                        <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium mb-1">Total Prestasi</h3>
                        <p class="text-2xl sm:text-3xl font-bold text-gray-800 dark:text-white mb-2">{{ $prestasis }}</p>
                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                            <div class="bg-purple-600 h-2 rounded-full progress-bar" style="width: 90%"></div>
                        </div>
                    </div>

                    <div class="stat-card bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm fade-in">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 rounded-xl bg-yellow-100 dark:bg-yellow-900/30">
                                <i class="fas fa-building text-yellow-600 dark:text-yellow-400 text-xl"></i>
                            </div>
                            <span class="text-xs font-medium px-2 py-1 rounded-full bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600 dark:text-yellow-400">+{{ $newFasilitas }} baru</span>
                        </div>
                        <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium mb-1">Total Fasilitas</h3>
                        <p class="text-2xl sm:text-3xl font-bold text-gray-800 dark:text-white mb-2">{{ $fasilitas }}</p>
                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                            <div class="bg-yellow-600 h-2 rounded-full progress-bar" style="width: 60%"></div>
                        </div>
                    </div>
                </div>

                <!-- Aktivitas Terbaru -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm fade-in transition-colors duration-300">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-white flex items-center">
                            <i class="fas fa-chart-line text-blue-500 mr-2"></i> Aktivitas Terbaru
                        </h2>
                        <a href="#" class="text-sm text-blue-500 hover:text-blue-700 dark:hover:text-blue-400 transition-colors duration-300">Lihat Semua</a>
                    </div>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                <i class="fas fa-newspaper text-blue-600 dark:text-blue-400 text-sm"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-700 dark:text-gray-300 text-sm">Berita baru "Penerimaan Siswa Baru" ditambahkan</p>
                                <p class="text-gray-500 dark:text-gray-400 text-xs mt-1">10 menit lalu</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-8 h-8 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center">
                                <i class="fas fa-bullhorn text-green-600 dark:text-green-400 text-sm"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-700 dark:text-gray-300 text-sm">Pengumuman rapat guru dikirim</p>
                                <p class="text-gray-500 dark:text-gray-400 text-xs mt-1">1 jam lalu</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-8 h-8 rounded-full bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center">
                                <i class="fas fa-info-circle text-pink-600 dark:text-pink-400 text-sm"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-700 dark:text-gray-300 text-sm">Informasi PPDB diperbarui</p>
                                <p class="text-gray-500 dark:text-gray-400 text-xs mt-1">Hari ini</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-8 h-8 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center">
                                <i class="fas fa-trophy text-purple-600 dark:text-purple-400 text-sm"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-700 dark:text-gray-300 text-sm">Prestasi siswa dalam lomba sains ditambahkan</p>
                                <p class="text-gray-500 dark:text-gray-400 text-xs mt-1">2 hari lalu</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
