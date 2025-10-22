<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Agenda - SDN 4 Jatilaba</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes fade-in-down {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fade-in {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .animate-fade-in-down {
            animation: fade-in-down 0.5s ease-out;
        }

        .animate-fade-in {
            animation: fade-in 0.3s ease-out;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }

        .dark .custom-scrollbar::-webkit-scrollbar-track {
            background: #374151;
        }

        .dark .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #6b7280;
        }

        .dark .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #9ca3af;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 min-h-screen transition-colors duration-300" x-data="{ sidebarOpen: false }">
    <!-- Layout dengan Sidebar Component -->
    <div class="flex min-h-screen">
        <!-- Sidebar Component -->
        <x-sidebar active-menu="agenda"></x-sidebar>

        <!-- Sidebar Backdrop for Mobile -->
        <div x-show="sidebarOpen" 
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-40 bg-gray-900 bg-opacity-50 lg:hidden"
             @click="sidebarOpen = false">
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <main class="p-4">
                <!-- Header Section -->
                <div class="bg-gradient-to-r from-teal-600 to-emerald-700 dark:from-teal-800 dark:to-emerald-900 rounded-2xl shadow-xl p-6 mb-6">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <div>
                            <h1 class="text-2xl sm:text-3xl font-bold text-white mb-2 flex items-center">
                                <i class="fas fa-calendar-alt mr-3 text-white"></i>
                                Kelola Agenda
                            </h1>
                            <p class="text-teal-100 text-sm sm:text-base">Kelola agenda dan kegiatan SDN 4 Jatilaba</p>
                        </div>
                        <a href="{{ route('admin.agenda.create') }}" 
                           class="inline-flex items-center px-5 py-2.5 bg-white hover:bg-gray-50 text-teal-600 font-semibold rounded-lg shadow-md hover:shadow-lg transition-all duration-200 transform hover:scale-105">
                            <i class="fas fa-plus-circle mr-2"></i>
                            Tambah Agenda
                        </a>
                    </div>
                </div>

                <!-- Success Alert -->
                @if(session('success'))
                <div class="mb-6 bg-green-50 dark:bg-green-900/30 border-l-4 border-green-500 p-4 rounded-r-lg shadow-md animate-fade-in-down">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-3 text-lg"></i>
                        <div>
                            <p class="font-medium text-green-800 dark:text-green-300">{{ session('success') }}</p>
                        </div>
                        <button onclick="this.parentElement.parentElement.remove()" class="ml-auto text-green-500 hover:text-green-700">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                @endif

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-6">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="p-3 bg-teal-100 dark:bg-teal-900/30 rounded-lg">
                                <i class="fas fa-calendar-alt text-teal-600 dark:text-teal-400 text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Agenda</p>
                                <p class="text-3xl font-bold text-gray-800 dark:text-white">{{ $agendas->count() }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="p-3 bg-green-100 dark:bg-green-900/30 rounded-lg">
                                <i class="fas fa-calendar-day text-green-600 dark:text-green-400 text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Agenda Bulan Ini</p>
                                <p class="text-3xl font-bold text-gray-800 dark:text-white">{{ $agendas->where('bulan', strtolower(now()->format('F')))->count() }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-lg">
                                <i class="fas fa-clock text-blue-600 dark:text-blue-400 text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Agenda Mendatang</p>
                                <p class="text-3xl font-bold text-gray-800 dark:text-white">{{ $agendas->where('tanggal', '>=', now())->count() }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="p-3 bg-purple-100 dark:bg-purple-900/30 rounded-lg">
                                <i class="fas fa-file-alt text-purple-600 dark:text-purple-400 text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Halaman</p>
                                <p class="text-3xl font-bold text-gray-800 dark:text-white">1/1</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Desktop Table View -->
                <div class="hidden lg:block bg-white dark:bg-gray-800 rounded-xl shadow-xl overflow-hidden">
                    <div class="overflow-x-auto custom-scrollbar">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                        <i class="fas fa-hashtag mr-2"></i>No
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                        <i class="fas fa-heading mr-2"></i>Judul Agenda
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                        <i class="fas fa-calendar-day mr-2"></i>Tanggal
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                        <i class="fas fa-map-marker-alt mr-2"></i>Lokasi
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-center text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                        <i class="fas fa-cog mr-2"></i>Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse ($agendas as $agenda)
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-300">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-semibold text-gray-900 dark:text-white line-clamp-2">{{ $agenda->judul }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-600 dark:text-gray-400">{{ \Carbon\Carbon::parse($agenda->tanggal)->format('d M Y') }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-600 dark:text-gray-400">{{ $agenda->lokasi }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <div class="flex justify-center gap-2">
                                            <a href="{{ route('admin.agenda.edit', $agenda->id) }}" 
                                               class="inline-flex items-center px-3 py-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-200"
                                               title="Edit Agenda">
                                                <i class="fas fa-edit mr-1"></i>
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.agenda.destroy', $agenda->id) }}" method="POST" class="inline-block" onsubmit="return confirmDelete()">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="inline-flex items-center px-3 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-200"
                                                        title="Hapus Agenda">
                                                    <i class="fas fa-trash-alt mr-1"></i>
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-12 text-center">
                                        <div class="flex flex-col items-center justify-center">
                                            <i class="fas fa-calendar-times text-gray-400 text-6xl mb-4"></i>
                                            <p class="text-xl font-semibold text-gray-500 dark:text-gray-400 mb-2">Belum Ada Agenda</p>
                                            <p class="text-gray-400 dark:text-gray-500 mb-4">Mulai tambahkan agenda pertama Anda</p>
                                            <a href="{{ route('admin.agenda.create') }}" class="inline-flex items-center px-6 py-3 bg-teal-600 hover:bg-teal-700 text-white font-medium rounded-lg shadow-lg hover:shadow-xl transition-all duration-200">
                                                <i class="fas fa-plus-circle mr-2"></i>
                                                Tambah Agenda Pertama
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Mobile & Tablet Card View -->
                <div class="lg:hidden grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                    @forelse ($agendas as $agenda)
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                        <!-- Content -->
                        <div class="p-4 sm:p-5">
                            <div class="flex items-center mb-4">
                                <div class="h-12 w-12 bg-teal-100 dark:bg-teal-900/30 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-calendar-alt text-teal-600 dark:text-teal-400"></i>
                                </div>
                                <div class="ml-4 flex-1">
                                    <div class="flex justify-between items-start">
                                        <div class="flex-1">
                                            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2 line-clamp-2">
                                                {{ $agenda->judul }}
                                            </h3>
                                        </div>
                                        <div class="bg-teal-600 text-white px-2 py-1 rounded-full text-xs font-bold ml-2">
                                            #{{ $loop->iteration }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex items-center text-sm text-gray-600 dark:text-gray-400 mb-2">
                                <i class="fas fa-calendar-day mr-2 text-teal-500"></i>
                                {{ \Carbon\Carbon::parse($agenda->tanggal)->format('d M Y') }}
                            </div>
                            
                            <div class="flex items-center text-sm text-gray-600 dark:text-gray-400 mb-4">
                                <i class="fas fa-map-marker-alt mr-2 text-teal-500"></i>
                                {{ $agenda->lokasi }}
                            </div>

                            <!-- Actions -->
                            <div class="flex gap-2 pt-4 border-t border-gray-200 dark:border-gray-700">
                                <a href="{{ route('admin.agenda.edit', $agenda->id) }}" 
                                   class="flex-1 inline-flex items-center justify-center px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                                    <i class="fas fa-edit mr-2"></i>
                                    Edit
                                </a>
                                <form action="{{ route('admin.agenda.destroy', $agenda->id) }}" method="POST" class="flex-1" onsubmit="return confirmDelete()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="w-full inline-flex items-center justify-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                                        <i class="fas fa-trash-alt mr-2"></i>
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-1 md:col-span-2 bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 sm:p-12 text-center">
                        <i class="fas fa-calendar-times text-gray-400 text-6xl sm:text-7xl mx-auto mb-6"></i>
                        <p class="text-xl sm:text-2xl font-bold text-gray-700 dark:text-gray-300 mb-3">Belum Ada Agenda</p>
                        <p class="text-gray-500 dark:text-gray-400 mb-6">Mulai tambahkan agenda pertama Anda</p>
                        <a href="{{ route('admin.agenda.create') }}" class="inline-flex items-center px-6 py-3 bg-teal-600 hover:bg-teal-700 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-200">
                            <i class="fas fa-plus-circle mr-2"></i>
                            Tambah Agenda Pertama
                        </a>
                    </div>
                    @endforelse
                </div>

                <!-- Pagination Section - Diperbaiki untuk Collection -->
                @if($agendas->count() > 0)
                <div class="mt-6">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-4">
                        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                            <div class="text-sm text-gray-600 dark:text-gray-400">
                                Menampilkan {{ $agendas->count() }} agenda
                            </div>
                            <!-- Jika ingin menambahkan pagination di masa depan, 
                                 pastikan controller mengembalikan Paginator, bukan Collection -->
                        </div>
                    </div>
                </div>
                @endif
            </main>
        </div>
    </div>

    <script>
    function confirmDelete() {
        return confirm('Apakah Anda yakin ingin menghapus agenda ini?');
    }

    // Auto hide success message after 5 seconds
    setTimeout(function() {
        const successAlert = document.querySelector('.animate-fade-in-down');
        if (successAlert) {
            successAlert.style.transition = 'opacity 0.5s ease-out';
            successAlert.style.opacity = '0';
            setTimeout(() => successAlert.remove(), 500);
        }
    }, 5000);
    </script>
</body>
</html>