<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - SDN 4 Jatilaba</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        // Deteksi tema sistem
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            localStorage.theme = 'dark';
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.theme = 'light';
        }
        
        // Status sidebar
        let isSidebarOpen = false;
        
        // Fungsi toggle sidebar
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            const toggleButton = document.getElementById('toggle-button');
            isSidebarOpen = !isSidebarOpen;
            
            if (isSidebarOpen) {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');
                overlay.classList.remove('hidden');
                // Sembunyikan tombol toggle
                toggleButton.classList.add('hidden');
            } else {
                sidebar.classList.remove('translate-x-0');
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
                // Tampilkan kembali tombol toggle
                toggleButton.classList.remove('hidden');
            }
        }
        
        // Tutup sidebar saat klik overlay
        function closeSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            const toggleButton = document.getElementById('toggle-button');
            
            sidebar.classList.remove('translate-x-0');
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            // Tampilkan kembali tombol toggle
            toggleButton.classList.remove('hidden');
            isSidebarOpen = false;
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
            background: #374151;
        }
        .dark .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #4b5563;
        }
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
        .sidebar-blur {
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }
        .icon-transition {
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>
<body class="h-full bg-gray-50 dark:bg-gray-900">
    <!-- Tombol untuk membuka sidebar di mobile - POJOK KANAN -->
    <div class="lg:hidden p-3 fixed top-3 right-3 z-50">
        <button id="toggle-button" onclick="toggleSidebar()" class="p-2 rounded-md bg-white dark:bg-gray-800 shadow-md hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors w-10 h-10 flex items-center justify-center">
            <!-- Default icon garis tiga -->
            <i class="fas fa-bars text-gray-700 dark:text-gray-300 text-base icon-transition"></i>
        </button>
    </div>

    <!-- Sidebar -->
    <aside class="w-64 bg-white/95 dark:bg-gray-800/95 text-gray-900 dark:text-white fixed h-full lg:relative lg:translate-x-0 transform -translate-x-full sidebar-transition z-40 sidebar-blur"
           id="sidebar">
        <!-- Header Sidebar -->
        <div class="p-4 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
            <div>
                <h1 class="text-xl font-bold">SDN 4 Jatilaba</h1>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Admin Panel</p>
            </div>
            <!-- Tombol tutup sidebar di mobile -->
            <button onclick="toggleSidebar()" class="lg:hidden p-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700">
                <i class="fas fa-times text-gray-700 dark:text-gray-300"></i>
            </button>
        </div>
        
        <!-- Navigasi Menu -->
        <nav class="mt-4 custom-scrollbar overflow-y-auto h-[calc(100vh-120px)]">
            <!-- Dashboard -->
            <a href="{{ route('admin.dashboard') }}" 
               class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white transition-colors duration-200">
                <i class="fas fa-tachometer-alt w-5 h-5 mr-3 text-center"></i>
                Dashboard
            </a>
            
            <!-- Berita -->
            <a href="{{ route('admin.artikel.index') }}" 
               class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white transition-colors duration-200 ">
                <i class="fas fa-newspaper w-5 h-5 mr-3 text-center"></i>
                Artikel
            </a>
            
            <!-- Pengumuman -->
            <a href="{{ route('admin.pengumuman.index') }}" 
               class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white transition-colors duration-200">
                <i class="fas fa-bullhorn w-5 h-5 mr-3 text-center"></i>
                Pengumuman
            </a>
            
            <!-- Prestasi -->
            <a href="{{ route('admin.prestasi.index') }}" 
               class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white transition-colors duration-200">
                <i class="fas fa-trophy w-5 h-5 mr-3 text-center"></i>
                Prestasi
            </a>
            
            <!-- Fasilitas -->
            <a href="{{ route('admin.fasilitas.index') }}" 
               class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white transition-colors duration-200">
                <i class="fas fa-building w-5 h-5 mr-3 text-center"></i>
                Fasilitas
            </a>
            
            <!-- Agenda -->
            <a href="{{ route('admin.agenda.index') }}" 
               class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white transition-colors duration-200">
                <i class="fas fa-calendar-alt w-5 h-5 mr-3 text-center"></i>
                Agenda
            </a>
            
            <!-- Kelola Guru -->
            <a href="{{ route('admin.kelola-guru.index') }}" 
               class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white transition-colors duration-200">
                <i class="fas fa-chalkboard-teacher w-5 h-5 mr-3 text-center"></i>
                Kelola Guru
            </a>
            
            <!-- Informasi SPMB -->
            <a href="{{ route('admin.ppdb.index') }}" 
               class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white transition-colors duration-200">
                <i class="fas fa-user-graduate w-5 h-5 mr-3 text-center"></i>
                Informasi SPMB
            </a>
            
            <!-- Feedback -->
            <a href="{{ route('admin.pesan.index') }}" 
               class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white transition-colors duration-200 mb-4">
                <i class="fas fa-comments w-5 h-5 mr-3 text-center"></i>
                Feedback
            </a>
            
            <!-- Beranda (dipindah ke atas Logout) -->
            <a href="{{ route('beranda') }}" 
               class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white transition-colors duration-200 mt-2">
                <i class="fas fa-home w-5 h-5 mr-3 text-center"></i>
                Beranda
            </a>
            
            <!-- Logout -->
            <form action="{{ route('logout') }}" method="POST" class="mt-2">
                @csrf
                <button type="submit" 
                        class="flex items-center w-full px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-red-100 dark:hover:bg-red-900/50 hover:text-red-700 dark:hover:text-red-300 transition-colors duration-200">
                    <i class="fas fa-sign-out-alt w-5 h-5 mr-3 text-center"></i>
                    Logout
                </button>
            </form>
        </nav>
    </aside>

    <!-- Overlay untuk mobile -->
    <div id="sidebar-overlay" 
         class="fixed inset-0 bg-black/50 dark:bg-black/70 z-30 lg:hidden hidden backdrop-blur-sm" 
         onclick="closeSidebar()"></div>
</body>
</html>