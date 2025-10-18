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
                        primary: '#2563EB',
                        secondary: '#1E293B'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 flex h-screen overflow-hidden">

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Overlay (untuk mobile) -->
    <div id="overlay"
         class="fixed inset-0 bg-black opacity-50 hidden z-40 lg:hidden transition-opacity"></div>

    <!-- Konten utama -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Header -->
        <header class="bg-white dark:bg-gray-800 shadow p-4 flex justify-between items-center">
            <button id="menuToggle" class="lg:hidden text-gray-700 dark:text-gray-300 focus:outline-none">
                ☰
            </button>
            <h1 class="text-lg font-semibold">@yield('header', 'Dashboard Admin')</h1>
            <form action="{{ route('logout') }}" method="POST" class="ml-auto">
                @csrf
                <button type="submit"
                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg transition">
                    Logout
                </button>
            </form>
        </header>

        <!-- Konten -->
        <main class="flex-1 overflow-y-auto p-6">
            @yield('content')
        </main>
    </div>

    <!-- Script Sidebar Toggle -->
    <script>
        const toggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        toggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        });
    </script>
</body>
</html>
