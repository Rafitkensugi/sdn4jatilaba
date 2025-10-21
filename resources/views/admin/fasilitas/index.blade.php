<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Fasilitas Sekolah - SDN 4 Jatilaba</title>
    <script src="https://cdn.tailwindcss.com"></script>
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

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Custom scrollbar */
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

        /* Dark mode scrollbar */
        .dark .custom-scrollbar::-webkit-scrollbar-track {
            background: #374151;
        }

        .dark .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #6b7280;
        }

        .dark .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #9ca3af;
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 transition-colors duration-300">
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-700 dark:from-blue-800 dark:to-blue-900 shadow-lg">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-bold text-white mb-2">
                        <i class="fas fa-school mr-2"></i>Daftar Fasilitas Sekolah
                    </h1>
                    <p class="text-blue-100 text-sm">Kelola fasilitas SDN 4 Jatilaba dengan mudah</p>
                </div>
                <a href="{{ route('admin.fasilitas.create') }}" 
                   class="inline-flex items-center px-5 py-2.5 bg-white hover:bg-gray-50 text-blue-600 font-semibold rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                    <i class="fas fa-plus-circle mr-2"></i>Tambah Fasilitas
                </a>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Success Alert -->
        @if (session('success'))
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
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-8">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
                <div class="flex items-center">
                    <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-lg">
                        <i class="fas fa-building text-blue-600 dark:text-blue-400 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Fasilitas</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white">{{ $fasilitas->total() }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
                <div class="flex items-center">
                    <div class="p-3 bg-green-100 dark:bg-green-900/30 rounded-lg">
                        <i class="fas fa-file-alt text-green-600 dark:text-green-400 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Halaman</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white">{{ $fasilitas->currentPage() }} / {{ $fasilitas->lastPage() }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300 sm:col-span-2 lg:col-span-1">
                <div class="flex items-center">
                    <div class="p-3 bg-purple-100 dark:bg-purple-900/30 rounded-lg">
                        <i class="fas fa-list-ol text-purple-600 dark:text-purple-400 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Tampil Per Halaman</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white">{{ $fasilitas->perPage() }}</p>
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
                            <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">No</th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">Foto</th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">Nama Fasilitas</th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">Deskripsi</th>
                            <th scope="col" class="px-6 py-4 text-center text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                        @forelse ($fasilitas as $index => $item)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-300">
                                {{ $fasilitas->firstItem() + $index }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($item->foto)
                                <div class="relative group">
                                    <img src="{{ asset('storage/' . $item->foto) }}" 
                                         alt="{{ $item->nama }}" 
                                         class="w-20 h-20 object-cover rounded-lg shadow-md group-hover:shadow-xl transition-shadow duration-300 cursor-pointer"
                                         onclick="showImageModal('{{ asset('storage/' . $item->foto) }}', '{{ $item->nama }}')">
                                    <div class="absolute inset-0 bg-opacity-0 group-hover:bg-opacity-20 rounded-lg transition-all duration-300 flex items-center justify-center">
                                        <i class="fas fa-search-plus text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                                    </div>
                                </div>
                                @else
                                <div class="w-20 h-20 bg-gray-200 dark:bg-gray-700 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-image text-gray-400 text-xl"></i>
                                </div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ $item->nama }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-600 dark:text-gray-400 max-w-md">
                                    {{ Str::limit($item->deskripsi, 100) }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="flex justify-center gap-2">
                                    <a href="{{ route('admin.fasilitas.edit', $item->id) }}" 
                                       class="inline-flex items-center px-3 py-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                                        <i class="fas fa-edit mr-1"></i>
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.fasilitas.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus fasilitas ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="inline-flex items-center px-3 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-200">
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
                                    <i class="fas fa-inbox text-gray-400 text-6xl mb-4"></i>
                                    <p class="text-xl font-semibold text-gray-500 dark:text-gray-400 mb-2">Belum Ada Fasilitas</p>
                                    <p class="text-gray-400 dark:text-gray-500 mb-4">Mulai tambahkan fasilitas sekolah Anda</p>
                                    <a href="{{ route('admin.fasilitas.create') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-lg hover:shadow-xl transition-all duration-200">
                                        <i class="fas fa-plus-circle mr-2"></i>
                                        Tambah Fasilitas Pertama
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
        <div class="lg:hidden grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
            @forelse ($fasilitas as $index => $item)
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                <!-- Image -->
                @if ($item->foto)
                <div class="relative h-48 sm:h-56 overflow-hidden group cursor-pointer" onclick="showImageModal('{{ asset('storage/' . $item->foto) }}', '{{ $item->nama }}')">
                    <img src="{{ asset('storage/' . $item->foto) }}" 
                         alt="{{ $item->nama }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <p class="text-white text-sm font-medium"><i class="fas fa-search-plus mr-1"></i>Klik untuk melihat</p>
                        </div>
                    </div>
                    <div class="absolute top-3 left-3 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-bold">
                        #{{ $fasilitas->firstItem() + $index }}
                    </div>
                </div>
                @else
                <div class="h-48 sm:h-56 bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                    <i class="fas fa-image text-gray-400 text-4xl"></i>
                </div>
                @endif

                <!-- Content -->
                <div class="p-4 sm:p-5">
                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 dark:text-white mb-2 line-clamp-2">
                        <i class="fas fa-building text-blue-500 mr-2"></i>{{ $item->nama }}
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
                        <i class="fas fa-align-left text-gray-400 mr-2"></i>{{ $item->deskripsi }}
                    </p>

                    <!-- Actions -->
                    <div class="flex gap-2 pt-4 border-t border-gray-200 dark:border-gray-700">
                        <a href="{{ route('admin.fasilitas.edit', $item->id) }}" 
                           class="flex-1 inline-flex items-center justify-center px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                            <i class="fas fa-edit mr-2"></i>
                            Edit
                        </a>
                        <form action="{{ route('admin.fasilitas.destroy', $item->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Apakah Anda yakin ingin menghapus fasilitas ini?')">
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
            <div class="col-span-1 sm:col-span-2 bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 sm:p-12 text-center">
                <i class="fas fa-inbox text-gray-400 text-6xl sm:text-7xl mx-auto mb-6"></i>
                <p class="text-xl sm:text-2xl font-bold text-gray-700 dark:text-gray-300 mb-3">Belum Ada Fasilitas</p>
                <p class="text-gray-500 dark:text-gray-400 mb-6">Mulai tambahkan fasilitas sekolah Anda</p>
                <a href="{{ route('admin.fasilitas.create') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-200">
                    <i class="fas fa-plus-circle mr-2"></i>
                    Tambah Fasilitas Pertama
                </a>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($fasilitas->hasPages())
        <div class="mt-8">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-4">
                {{ $fasilitas->links() }}
            </div>
        </div>
        @endif
    </div>

    <!-- Image Modal -->
    <div id="imageModal" class="hidden fixed inset-0 bg-black bg-opacity-75 z-50 flex items-center justify-center p-4 animate-fade-in" onclick="closeImageModal()">
        <div class="relative max-w-5xl max-h-full" onclick="event.stopPropagation()">
            <button onclick="closeImageModal()" class="absolute -top-10 right-0 text-white hover:text-gray-300 transition-colors duration-200">
                <i class="fas fa-times text-2xl"></i>
            </button>
            <img id="modalImage" src="" alt="" class="max-w-full max-h-[80vh] object-contain rounded-lg shadow-2xl">
            <p id="modalTitle" class="text-white text-center mt-4 text-lg font-semibold"></p>
        </div>
    </div>

    <script>
    function showImageModal(imageUrl, title) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const modalTitle = document.getElementById('modalTitle');
        
        modalImage.src = imageUrl;
        modalTitle.textContent = title;
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeImageModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Close modal dengan ESC key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeImageModal();
        }
    });

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