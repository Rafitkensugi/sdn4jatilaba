<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin - SDN 4 Jatilaba')</title>
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
        
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
        
        .overlay {
            transition: opacity 0.3s ease-in-out;
        }
        
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
        @include('components.admin-sidebar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden lg:ml-0">
            <!-- Header -->
            <header class="bg-white dark:bg-gray-800 shadow transition-colors duration-300">
                <div class="flex items-center justify-between px-4 sm:px-6 py-3">
                    <div class="text-lg font-semibold text-gray-800 dark:text-white">@yield('header', 'Dashboard Admin')</div>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600 dark:text-gray-300 text-sm sm:text-base">Halo, {{ Auth::user()->name ?? 'Admin' }}</span>
                        <img class="w-8 h-8 sm:w-10 sm:h-10 rounded-full object-cover border-2 border-gray-300 dark:border-gray-600" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'Admin') }}&background=4F46E5&color=ffffff" alt="Profile">
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-y-auto p-4 sm:p-6 bg-gray-100 dark:bg-gray-900 custom-scrollbar transition-colors duration-300">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        if (menuToggle && sidebar && overlay) {
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
        }

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

    @yield('scripts')
</body>
</html>