<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Prestasi - SDN 4 Jatilaba</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes fade-in-down {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in-down { animation: fade-in-down 0.5s ease-out; }

        .custom-scrollbar::-webkit-scrollbar { width: 6px; height: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #f1f1f1; border-radius: 10px; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #c1c1c1; border-radius: 10px; }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #a8a8a8; }

        .dark .custom-scrollbar::-webkit-scrollbar-track { background: #374151; }
        .dark .custom-scrollbar::-webkit-scrollbar-thumb { background: #6b7280; }
        .dark .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #9ca3af; }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 min-h-screen transition-colors duration-300">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <x-sidebar active-menu="prestasi"></x-sidebar>

        <!-- Main Area -->
        <div class="flex-1">
            <main class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-6 pb-12">

                <!-- Header Section -->
                <div class="bg-gradient-to-r from-amber-500 to-orange-600 dark:from-amber-700 dark:to-orange-800 rounded-2xl shadow-xl p-6 mb-8">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <div>
                            <h1 class="text-2xl sm:text-3xl font-bold text-white mb-2 flex items-center">
                                <i class="fas fa-trophy mr-3 text-white"></i>
                                Kelola Prestasi
                            </h1>
                            <p class="text-amber-100 text-sm sm:text-base">Kelola prestasi membanggakan SDN 4 Jatilaba</p>
                        </div>
                        <a href="{{ route('admin.prestasi.create') }}" 
                           class="inline-flex items-center px-5 py-2.5 bg-white hover:bg-gray-50 text-amber-600 font-semibold rounded-lg shadow-md hover:shadow-lg transition-all duration-200 transform hover:scale-105">
                            <i class="fas fa-plus-circle mr-2"></i>
                            Tambah Prestasi
                        </a>
                    </div>
                </div>

                <!-- Success Alert -->
                @if(session('success'))
                <div class="mb-8 bg-green-50 dark:bg-green-900/30 border-l-4 border-green-500 p-4 rounded-r-lg shadow-md animate-fade-in-down">
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
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="p-3 bg-amber-100 dark:bg-amber-900/30 rounded-lg">
                                <i class="fas fa-trophy text-amber-600 dark:text-amber-400 text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Prestasi</p>
                                <p class="text-3xl font-bold text-gray-800 dark:text-white">{{ $prestasi->total() }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-lg">
                                <i class="fas fa-medal text-blue-600 dark:text-blue-400 text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Juara 1</p>
                                <p class="text-3xl font-bold text-gray-800 dark:text-white">{{ $prestasi->where('juara', 'Juara 1')->count() }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="p-3 bg-purple-100 dark:bg-purple-900/30 rounded-lg">
                                <i class="fas fa-globe text-purple-600 dark:text-purple-400 text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Internasional</p>
                                <p class="text-3xl font-bold text-gray-800 dark:text-white">{{ $prestasi->where('tingkat', 'Internasional')->count() }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="p-3 bg-green-100 dark:bg-green-900/30 rounded-lg">
                                <i class="fas fa-calendar-day text-green-600 dark:text-green-400 text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Halaman</p>
                                <p class="text-3xl font-bold text-gray-800 dark:text-white">{{ $prestasi->currentPage() }}/{{ $prestasi->lastPage() }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Desktop Table View -->
                <div class="hidden lg:block bg-white dark:bg-gray-800 rounded-xl shadow-xl overflow-hidden px-4">
                    <div class="overflow-x-auto custom-scrollbar">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                        <i class="fas fa-hashtag mr-2"></i>No
                                    </th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                        <i class="fas fa-trophy mr-2"></i>Judul Prestasi
                                    </th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                        <i class="fas fa-map-marker-alt mr-2"></i>Tempat
                                    </th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                        <i class="fas fa-chart-line mr-2"></i>Tingkat
                                    </th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                        <i class="fas fa-calendar-day mr-2"></i>Tanggal
                                    </th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                        <i class="fas fa-award mr-2"></i>Juara
                                    </th>
                                    <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                        <i class="fas fa-cog mr-2"></i>Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse ($prestasi as $item)
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-300">
                                        {{ $loop->iteration + ($prestasi->currentPage() - 1) * $prestasi->perPage() }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ $item->judul }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-600 dark:text-gray-400">{{ $item->tempat }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium 
                                            {{ $item->tingkat == 'Nasional' ? 'bg-purple-100 text-purple-800 dark:bg-purple-900/30 dark:text-purple-300' : 
                                               ($item->tingkat == 'Internasional' ? 'bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-300' : 
                                               ($item->tingkat == 'Provinsi' ? 'bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300' :
                                               ($item->tingkat == 'Kabupaten' ? 'bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300' :
                                               'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300'))) }}">
                                            <i class="fas fa-{{ $item->tingkat == 'Internasional' ? 'globe' : 'map-marker-alt' }} mr-1 text-xs"></i>
                                            {{ $item->tingkat }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-600 dark:text-gray-400">{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium 
                                            {{ $item->juara == 'Juara 1' ? 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-300' : 
                                               ($item->juara == 'Juara 2' ? 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300' :
                                               ($item->juara == 'Juara 3' ? 'bg-amber-100 text-amber-800 dark:bg-amber-900/30 dark:text-amber-300' :
                                               'bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300')) }}">
                                            <i class="fas fa-trophy mr-1 text-xs"></i>
                                            {{ $item->juara }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <div class="flex justify-center gap-2">
                                            <a href="{{ route('admin.prestasi.edit', $item->id) }}" 
                                               class="inline-flex items-center px-3 py-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-200"
                                               title="Edit Prestasi">
                                                <i class="fas fa-edit mr-1"></i>
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.prestasi.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirmDelete()">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="inline-flex items-center px-3 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-200"
                                                        title="Hapus Prestasi">
                                                    <i class="fas fa-trash-alt mr-1"></i>
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-12 text-center">
                                        <div class="flex flex-col items-center justify-center">
                                            <i class="fas fa-trophy text-gray-400 text-6xl mb-4"></i>
                                            <p class="text-xl font-semibold text-gray-500 dark:text-gray-400 mb-2">Belum Ada Prestasi</p>
                                            <p class="text-gray-400 dark:text-gray-500 mb-4">Mulai tambahkan prestasi pertama Anda</p>
                                            <a href="{{ route('admin.prestasi.create') }}" class="inline-flex items-center px-6 py-3 bg-amber-600 hover:bg-amber-700 text-white font-medium rounded-lg shadow-lg hover:shadow-xl transition-all duration-200">
                                                <i class="fas fa-plus-circle mr-2"></i>
                                                Tambah Prestasi Pertama
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination -->
                @if($prestasi->hasPages())
                <div class="mt-10">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-4">
                        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                            <div class="text-sm text-gray-600 dark:text-gray-400">
                                Menampilkan {{ $prestasi->firstItem() }} - {{ $prestasi->lastItem() }} dari {{ $prestasi->total() }} prestasi
                            </div>
                            {{ $prestasi->links() }}
                        </div>
                    </div>
                </div>
                @endif

            </main>
        </div>
    </div>

    <script>
    function confirmDelete() {
        return confirm('Apakah Anda yakin ingin menghapus prestasi ini?');
    }

    // Auto hide success message
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
