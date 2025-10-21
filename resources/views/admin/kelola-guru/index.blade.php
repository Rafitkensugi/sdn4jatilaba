<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Guru - SDN 4 Jatilaba</title>
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

        .animate-fade-in-down {
            animation: fade-in-down 0.5s ease-out;
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
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 min-h-screen transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header Section -->
        <div class="bg-gradient-to-r from-emerald-600 to-green-700 dark:from-emerald-800 dark:to-green-900 rounded-2xl shadow-xl p-6 mb-8">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-bold text-white mb-2 flex items-center">
                        <i class="fas fa-chalkboard-teacher mr-3 text-white"></i>
                        Kelola Data Guru
                    </h1>
                    <p class="text-green-100 text-sm sm:text-base">Kelola informasi guru SDN 4 Jatilaba</p>
                </div>
                <a href="{{ route('admin.kelola-guru.create') }}" 
                   class="inline-flex items-center px-5 py-2.5 bg-white hover:bg-gray-50 text-emerald-600 font-semibold rounded-lg shadow-md hover:shadow-lg transition-all duration-200 transform hover:scale-105">
                    <i class="fas fa-plus-circle mr-2"></i>
                    Tambah Guru
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
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
                <div class="flex items-center">
                    <div class="p-3 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg">
                        <i class="fas fa-users text-emerald-600 dark:text-emerald-400 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Guru</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white">{{ $gurus->total() }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
                <div class="flex items-center">
                    <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-lg">
                        <i class="fas fa-graduation-cap text-blue-600 dark:text-blue-400 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Bidang Studi</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white">{{ $gurus->unique('bidang_studi')->count() }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
                <div class="flex items-center">
                    <div class="p-3 bg-purple-100 dark:bg-purple-900/30 rounded-lg">
                        <i class="fas fa-briefcase text-purple-600 dark:text-purple-400 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Jabatan</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white">{{ $gurus->unique('jabatan')->count() }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
                <div class="flex items-center">
                    <div class="p-3 bg-orange-100 dark:bg-orange-900/30 rounded-lg">
                        <i class="fas fa-file-alt text-orange-600 dark:text-orange-400 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Halaman</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white">{{ $gurus->currentPage() }}/{{ $gurus->lastPage() }}</p>
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
                                <i class="fas fa-image mr-2"></i>Foto
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                <i class="fas fa-user mr-2"></i>Nama Guru
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                <i class="fas fa-id-card mr-2"></i>NIP
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                <i class="fas fa-briefcase mr-2"></i>Jabatan
                            </th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                <i class="fas fa-book mr-2"></i>Bidang Studi
                            </th>
                            <th scope="col" class="px-6 py-4 text-center text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">
                                <i class="fas fa-cog mr-2"></i>Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                        @forelse ($gurus as $guru)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-300">
                                {{ $loop->iteration + ($gurus->currentPage() - 1) * $gurus->perPage() }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($guru->foto)
                                <div class="relative group">
                                    <img src="{{ asset('storage/gurus/' . $guru->foto) }}" 
                                         alt="{{ $guru->name }}" 
                                         class="w-12 h-12 rounded-full object-cover shadow-md group-hover:shadow-lg transition-shadow duration-300 cursor-pointer"
                                         onclick="showImageModal('{{ asset('storage/gurus/' . $guru->foto) }}', '{{ $guru->name }}')">
                                    <div class="absolute inset-0 bg-opacity-0 group-hover:bg-opacity-20 rounded-full transition-all duration-300 flex items-center justify-center">
                                        <i class="fas fa-search-plus text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm"></i>
                                    </div>
                                </div>
                                @else
                                <div class="w-12 h-12 bg-gray-200 dark:bg-gray-700 rounded-full flex items-center justify-center">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ $guru->nama }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-600 dark:text-gray-400 font-mono">{{ $guru->nip }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300">
                                    <i class="fas fa-briefcase mr-1"></i>{{ $guru->jabatan }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-600 dark:text-gray-400">{{ $guru->bidang_studi }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="flex justify-center gap-2">
                                    <a href="{{ route('admin.kelola-guru.show', $guru->id) }}" 
                                       class="inline-flex items-center px-3 py-2 bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-200"
                                       title="Detail Guru">
                                        <i class="fas fa-eye mr-1"></i>
                                        Detail
                                    </a>
                                    <a href="{{ route('admin.kelola-guru.edit', $guru->id) }}" 
                                       class="inline-flex items-center px-3 py-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-200"
                                       title="Edit Guru">
                                        <i class="fas fa-edit mr-1"></i>
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.kelola-guru.destroy', $guru->id) }}" method="POST" class="inline-block" onsubmit="return confirmDelete()">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="inline-flex items-center px-3 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-200"
                                                title="Hapus Guru">
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
                                    <i class="fas fa-users text-gray-400 text-6xl mb-4"></i>
                                    <p class="text-xl font-semibold text-gray-500 dark:text-gray-400 mb-2">Belum Ada Data Guru</p>
                                    <p class="text-gray-400 dark:text-gray-500 mb-4">Mulai tambahkan data guru Anda</p>
                                    <a href="{{ route('admin.kelola-guru.create') }}" class="inline-flex items-center px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg shadow-lg hover:shadow-xl transition-all duration-200">
                                        <i class="fas fa-plus-circle mr-2"></i>
                                        Tambah Guru Pertama
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
            @forelse ($gurus as $guru)
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                <!-- Header -->
                <div class="bg-gradient-to-r from-emerald-500 to-green-600 dark:from-emerald-700 dark:to-green-800 px-4 py-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            @if($guru->foto)
                            <img src="{{ asset('storage/gurus/' . $guru->foto) }}" 
                                 alt="{{ $guru->name }}" 
                                 class="w-10 h-10 rounded-full object-cover border-2 border-white">
                            @else
                            <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            @endif
                            <div class="ml-3">
                                <h3 class="text-white font-semibold text-sm line-clamp-1">{{ $guru->name }}</h3>
                                <p class="text-emerald-100 text-xs">{{ $guru->nip }}</p>
                            </div>
                        </div>
                        <span class="bg-white/20 text-white px-2 py-1 rounded-full text-xs font-bold">
                            #{{ $loop->iteration + ($gurus->currentPage() - 1) * $gurus->perPage() }}
                        </span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-4 sm:p-5">
                    <div class="space-y-3">
                        <div class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                            <i class="fas fa-briefcase mr-3 text-emerald-500"></i>
                            <span>{{ $guru->jabatan }}</span>
                        </div>
                        
                        <div class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                            <i class="fas fa-book mr-3 text-emerald-500"></i>
                            <span>{{ $guru->bidang_studi }}</span>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex gap-2 pt-4 mt-4 border-t border-gray-200 dark:border-gray-700">
                        <a href="{{ route('admin.kelola-guru.show', $guru->id) }}" 
                           class="flex-1 inline-flex items-center justify-center px-3 py-2 bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                            <i class="fas fa-eye mr-2"></i>
                            Detail
                        </a>
                        <a href="{{ route('admin.kelola-guru.edit', $guru->id) }}" 
                           class="flex-1 inline-flex items-center justify-center px-3 py-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                            <i class="fas fa-edit mr-2"></i>
                            Edit
                        </a>
                        <form action="{{ route('admin.kelola-guru.destroy', $guru->id) }}" method="POST" class="flex-1" onsubmit="return confirmDelete()">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="w-full inline-flex items-center justify-center px-3 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                                <i class="fas fa-trash-alt mr-2"></i>
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-1 md:col-span-2 bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 sm:p-12 text-center">
                <i class="fas fa-users text-gray-400 text-6xl sm:text-7xl mx-auto mb-6"></i>
                <p class="text-xl sm:text-2xl font-bold text-gray-700 dark:text-gray-300 mb-3">Belum Ada Data Guru</p>
                <p class="text-gray-500 dark:text-gray-400 mb-6">Mulai tambahkan data guru Anda</p>
                <a href="{{ route('admin.kelola-guru.create') }}" class="inline-flex items-center px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-200">
                    <i class="fas fa-plus-circle mr-2"></i>
                    Tambah Guru Pertama
                </a>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($gurus->hasPages())
        <div class="mt-8">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-4">
                <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div class="text-sm text-gray-600 dark:text-gray-400">
                        Menampilkan {{ $gurus->firstItem() }} - {{ $gurus->lastItem() }} dari {{ $gurus->total() }} guru
                    </div>
                    {{ $gurus->links() }}
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- Image Modal -->
    <div id="imageModal" class="hidden fixed inset-0 bg-black bg-opacity-75 z-50 flex items-center justify-center p-4 animate-fade-in" onclick="closeImageModal()">
        <div class="relative max-w-4xl max-h-full" onclick="event.stopPropagation()">
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

    function confirmDelete() {
        return confirm('Apakah Anda yakin ingin menghapus guru ini?');
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

    // Add line-clamp utility for mobile view
    const style = document.createElement('style');
    style.textContent = `
        .line-clamp-1 {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    `;
    document.head.appendChild(style);
    </script>
</body>
</html>