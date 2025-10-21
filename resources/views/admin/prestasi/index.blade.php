<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Prestasi</title>
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
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
            <div class="mb-4 md:mb-0">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Daftar Prestasi</h1>
                <p class="text-gray-600 dark:text-gray-400 mt-2">Kelola data prestasi siswa dengan mudah</p>
            </div>
            <a href="{{ route('admin.prestasi.create') }}" class="bg-gradient-to-r from-primary-500 to-primary-600 hover:from-primary-600 hover:to-primary-700 text-white px-5 py-3 rounded-xl shadow-lg transition-all duration-300 flex items-center font-medium">
                <i class="fas fa-plus-circle mr-2"></i>
                Tambah Prestasi
            </a>
        </div>

        <!-- Success Alert -->
        @if(session('success'))
            <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-6 rounded-lg shadow-sm dark:bg-green-900/20 dark:border-green-400 transition-all duration-300">
                <div class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-3"></i>
                    <p class="text-green-700 dark:text-green-300">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        <!-- Table Section -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden transition-all duration-300">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gradient-to-r from-gray-50 to-gray-100 dark:from-gray-700 dark:to-gray-800 text-gray-700 dark:text-gray-300">
                        <tr>
                            <th class="px-6 py-4 text-left font-semibold">Judul Prestasi</th>
                            <th class="px-6 py-4 text-left font-semibold">Tempat</th>
                            <th class="px-6 py-4 text-left font-semibold">Tingkat</th>
                            <th class="px-6 py-4 text-left font-semibold">Tanggal</th>
                            <th class="px-6 py-4 text-left font-semibold">Juara</th>
                            <th class="px-6 py-4 text-center font-semibold">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($prestasi as $item)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors duration-200">
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-white">{{ $item->judul }}</div>
                                </td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-400">{{ $item->tempat }}</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium 
                                        {{ $item->tingkat == 'Nasional' ? 'bg-purple-100 text-purple-800 dark:bg-purple-900/30 dark:text-purple-300' : 
                                           ($item->tingkat == 'Internasional' ? 'bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-300' : 
                                           'bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300') }}">
                                        {{ $item->tingkat }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-400">{{ $item->tanggal }}</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-300">
                                        <i class="fas fa-trophy mr-1"></i>
                                        {{ $item->juara }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-center space-x-2">
                                        <a href="{{ route('admin.prestasi.edit', $item->id) }}" class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition-colors duration-200 flex items-center shadow-sm">
                                            <i class="fas fa-edit mr-2"></i>
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.prestasi.destroy', $item->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Yakin ingin menghapus prestasi ini?')" class="bg-rose-600 hover:bg-rose-700 text-white px-4 py-2 rounded-lg transition-colors duration-200 flex items-center shadow-sm">
                                                <i class="fas fa-trash-alt mr-2"></i>
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-6 flex justify-center">
            <div class="bg-white dark:bg-gray-800 px-4 py-3 rounded-xl shadow-md">
                {{ $prestasi->links() }}
            </div>
        </div>

        <!-- Empty State (if needed) -->
        @if($prestasi->isEmpty())
        <div class="text-center py-12">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100 dark:bg-gray-800 mb-4">
                <i class="fas fa-trophy text-gray-400 text-xl"></i>
            </div>
            <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">Belum ada prestasi</h3>
            <p class="text-gray-500 dark:text-gray-400 mb-6">Mulai dengan menambahkan prestasi pertama Anda</p>
            <a href="{{ route('admin.prestasi.create') }}" class="bg-gradient-to-r from-primary-500 to-primary-600 hover:from-primary-600 hover:to-primary-700 text-white px-5 py-3 rounded-xl shadow-lg transition-all duration-300 inline-flex items-center font-medium">
                <i class="fas fa-plus-circle mr-2"></i>
                Tambah Prestasi Pertama
            </a>
        </div>
        @endif
    </div>

    <!-- Dark Mode Toggle (optional) -->
    <div class="fixed bottom-4 right-4">
        <button id="darkModeToggle" class="bg-white dark:bg-gray-800 p-3 rounded-full shadow-lg border border-gray-200 dark:border-gray-700 transition-colors duration-300">
            <i class="fas fa-moon text-gray-700 dark:text-yellow-400"></i>
        </button>
    </div>

    <script>
        // Simple dark mode toggle
        document.getElementById('darkModeToggle').addEventListener('click', function() {
            document.documentElement.classList.toggle('dark');
            
            const icon = this.querySelector('i');
            if (document.documentElement.classList.contains('dark')) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }
        });

        // Check for saved theme preference or respect OS setting
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            document.getElementById('darkModeToggle').querySelector('i').classList.remove('fa-moon');
            document.getElementById('darkModeToggle').querySelector('i').classList.add('fa-sun');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</body>
</html>