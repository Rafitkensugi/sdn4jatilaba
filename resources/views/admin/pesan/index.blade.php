@extends('layouts.app')

@section('content')
<x-sidebar active-menu="feadback"></x-sidebar>

<div class="ml-0 lg:ml-64 p-6 bg-gray-50 dark:bg-gray-900 min-h-screen transition-all duration-300" id="main-content">
    <button id="mobileMenuToggle" class="lg:hidden mb-4 p-2 rounded-md bg-white dark:bg-gray-800 shadow text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
        </svg>
    </button>

    <div class="max-w-6xl mx-auto bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden">
        <div class="px-6 py-5 border-b border-gray-200 dark:border-gray-700">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Pesan dari Pengunjung</h2>
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Kelola pesan yang diterima dari pengunjung website</p>
        </div>

        @if (session('success'))
            <div class="mx-6 mt-4 mb-2">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    {{ session('success') }}
                </div>
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Nama</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Email</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Pesan</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse ($pesan as $p)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-750 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-200">{{ $p->nama }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-300">{{ $p->email }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300 max-w-xs">
                                <div class="break-words">
                                    {{ Str::limit($p->pesan, 100) }}
                                    @if(strlen($p->pesan) > 100)
                                        <button class="text-blue-500 hover:text-blue-700 text-xs mt-1" onclick="toggleMessage({{ $p->id }})">Lihat selengkapnya</button>
                                        <div id="full-message-{{ $p->id }}" class="hidden mt-2 p-2 bg-gray-100 dark:bg-gray-700 rounded">
                                            {{ $p->pesan }}
                                            <button class="text-blue-500 hover:text-blue-700 text-xs mt-1 block" onclick="toggleMessage({{ $p->id }})">Tutup</button>
                                        </div>
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <form action="{{ route('admin.pesan.destroy', $p->id) }}" method="POST" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300 transition flex items-center justify-center mx-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="ml-1">Hapus</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-12 text-center text-sm text-gray-500 dark:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Belum ada pesan
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="px-6 py-4 bg-gray-50 dark:bg-gray-750 border-t border-gray-200 dark:border-gray-700">
            {{ $pesan->links() }}
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white dark:bg-gray-800 rounded-lg p-6 max-w-md w-full mx-4">
        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Konfirmasi Hapus</h3>
        <p class="text-gray-600 dark:text-gray-300 mb-4">Apakah Anda yakin ingin menghapus pesan ini? Tindakan ini tidak dapat dibatalkan.</p>
        <div class="flex justify-end space-x-3">
            <button id="cancelDelete" class="px-4 py-2 text-gray-700 dark:text-gray-300 bg-gray-200 dark:bg-gray-700 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600 transition">
                Batal
            </button>
            <button id="confirmDelete" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                Hapus
            </button>
        </div>
    </div>
</div>

<script>
    // Toggle sidebar di mobile
    document.getElementById('mobileMenuToggle').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('-translate-x-full');
    });

    // Toggle pesan lengkap
    function toggleMessage(id) {
        const fullMessage = document.getElementById('full-message-' + id);
        fullMessage.classList.toggle('hidden');
    }

    // Konfirmasi hapus dengan modal
    document.addEventListener('DOMContentLoaded', function() {
        const deleteForms = document.querySelectorAll('.delete-form');
        const deleteModal = document.getElementById('deleteModal');
        const cancelDelete = document.getElementById('cancelDelete');
        const confirmDelete = document.getElementById('confirmDelete');
        
        let currentForm = null;
        
        deleteForms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                currentForm = this;
                deleteModal.classList.remove('hidden');
            });
        });
        
        cancelDelete.addEventListener('click', function() {
            deleteModal.classList.add('hidden');
            currentForm = null;
        });
        
        confirmDelete.addEventListener('click', function() {
            if (currentForm) {
                currentForm.submit();
            }
        });
    });
</script>

<style>
    /* Responsif untuk mobile */
    @media (max-width: 1024px) {
        #sidebar {
            transform: translateX(-100%);
        }
        #sidebar:not(.hidden) {
            transform: translateX(0);
        }
        #main-content {
            margin-left: 0;
        }
    }
</style>
@endsection