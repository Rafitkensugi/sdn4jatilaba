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
        /* Scrollbar custom */
        .custom-scrollbar::-webkit-scrollbar { width: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #f1f5f9; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 3px; }
        .dark .custom-scrollbar::-webkit-scrollbar-track { background: #1e293b; }
        .dark .custom-scrollbar::-webkit-scrollbar-thumb { background: #475569; }

        /* Card animasi hover */
        .stat-card { transition: all 0.3s ease; }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1),
                        0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .dark .stat-card:hover {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.3),
                        0 10px 10px -5px rgba(0, 0, 0, 0.2);
        }

        /* Animasi masuk */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in { animation: fadeIn 0.5s ease-in-out; }
    </style>
</head>

<body class="bg-gray-100 dark:bg-gray-900 font-sans transition-colors duration-300">

    <!-- Flex container utama -->
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

        <!-- Konten utama -->
        <main class="flex-1 overflow-y-auto p-4 sm:p-6 bg-gray-100 dark:bg-gray-900 
                     custom-scrollbar transition-colors duration-300">

            <!-- Welcome Section -->
            <div class="mb-6 fade-in">
                <h1 class="text-xl sm:text-2xl font-bold text-gray-800 dark:text-white mb-2">
                    Selamat Datang, Admin!
                </h1>
                <p class="text-gray-600 dark:text-gray-400 text-sm sm:text-base">
                    Kelola konten website SDN 4 Jatilaba dengan mudah melalui dashboard ini.
                </p>
            </div>

            <!-- Statistik Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-6">
                <!-- Card 1 -->
                <div class="stat-card bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow dark:shadow-gray-700/50 fade-in">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 dark:bg-blue-900/30 mr-4">
                            <i class="fas fa-newspaper text-blue-600 dark:text-blue-400 text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Berita</h3>
                            <p class="text-2xl sm:text-3xl font-bold text-blue-600 dark:text-blue-400">24</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="stat-card bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow dark:shadow-gray-700/50 fade-in">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-100 dark:bg-green-900/30 mr-4">
                            <i class="fas fa-bullhorn text-green-600 dark:text-green-400 text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Pengumuman</h3>
                            <p class="text-2xl sm:text-3xl font-bold text-green-600 dark:text-green-400">8</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="stat-card bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow dark:shadow-gray-700/50 fade-in">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-purple-100 dark:bg-purple-900/30 mr-4">
                            <i class="fas fa-trophy text-purple-600 dark:text-purple-400 text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Prestasi</h3>
                            <p class="text-2xl sm:text-3xl font-bold text-purple-600 dark:text-purple-400">36</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="stat-card bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow dark:shadow-gray-700/50 fade-in">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-yellow-100 dark:bg-yellow-900/30 mr-4">
                            <i class="fas fa-building text-yellow-600 dark:text-yellow-400 text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Fasilitas</h3>
                            <p class="text-2xl sm:text-3xl font-bold text-yellow-600 dark:text-yellow-400">15</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Aktivitas Terbaru -->
            <div class="bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow dark:shadow-gray-700/50 
                        transition-colors duration-300 fade-in">
                <h2 class="text-lg sm:text-xl font-semibold mb-4 text-gray-800 dark:text-white flex items-center">
                    <i class="fas fa-chart-line text-blue-500 mr-2"></i> Aktivitas Terbaru
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
</body>
</html>
