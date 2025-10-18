@extends('layouts.app')

@section('title', 'Management Guru')

@section('content')
<div class="max-w-7xl mx-auto">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Management Guru</h1>
        <p class="text-gray-600 dark:text-gray-400">Kelola data guru dan staff sekolah</p>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 dark:bg-green-900 dark:border-green-600 dark:text-green-200">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6 dark:bg-red-900 dark:border-red-600 dark:text-red-200">
            {{ session('error') }}
        </div>
    @endif

    <!-- Actions -->
    <div class="flex justify-between items-center mb-6">
        <a href="{{ route('admin.guru.create') }}" 
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition-colors">
            <i class="fas fa-plus"></i>
            Tambah Guru
        </a>

        <!-- Status Filter -->
        <select id="statusFilter" class="px-4 py-2 border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white">
            <option value="">Semua Status</option>
            <option value="PNS">PNS</option>
            <option value="Honorer">Honorer</option>
        </select>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden dark:bg-gray-800">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Foto</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Nama & NIP</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Jabatan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Akses User</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                    @forelse($gurus as $guru)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700" data-status="{{ $guru->status }}">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img src="{{ $guru->foto ? asset('storage/'.$guru->foto) : asset('images/teacher-placeholder.jpg') }}" 
                                     alt="{{ $guru->nama }}" 
                                     class="w-12 h-12 rounded-full object-cover">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $guru->nama }}</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">{{ $guru->nip }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 dark:text-white">{{ $guru->jabatan }}</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">{{ $guru->bidang_studi }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    {{ $guru->status == 'PNS' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200' : 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200' }}">
                                    {{ $guru->status }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($guru->user_id)
                                    @php
                                        $isAdmin = $guru->user->hasRole('admin');
                                    @endphp
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                        {{ $isAdmin ? 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200' : 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200' }}">
                                        {{ $isAdmin ? 'Admin' : 'User' }}
                                    </span>
                                @else
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                                        Tidak Ada
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center gap-2">
                                    <!-- Role Management Dropdown -->
                                    @if($guru->user_id)
                                        <div class="relative group">
                                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-xs flex items-center gap-1">
                                                Role <i class="fas fa-chevron-down text-xs"></i>
                                            </button>
                                            <div class="absolute right-0 mt-1 w-48 bg-white rounded-md shadow-lg py-1 z-10 hidden group-hover:block dark:bg-gray-700">
                                                @if($guru->user->hasRole('admin'))
                                                    <form action="{{ route('admin.guru.remove-admin', $guru) }}" method="POST" class="w-full">
                                                        @csrf
                                                        <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left dark:text-gray-300 dark:hover:bg-gray-600">
                                                            Cabut Akses Admin
                                                        </button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('admin.guru.make-admin', $guru) }}" method="POST" class="w-full">
                                                        @csrf
                                                        <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left dark:text-gray-300 dark:hover:bg-gray-600">
                                                            Jadikan Admin
                                                        </button>
                                                    </form>
                                                @endif
                                                <form action="{{ route('admin.guru.reset-password', $guru) }}" method="POST" class="w-full">
                                                    @csrf
                                                    <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left dark:text-gray-300 dark:hover:bg-gray-600">
                                                        Reset Password
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    @else
                                        <form action="{{ route('admin.guru.make-user', $guru) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-xs">
                                                Buat User
                                            </button>
                                        </form>
                                    @endif

                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.guru.edit', $guru) }}" 
                                       class="bg-yellow-600 hover:bg-yellow-700 text-white px-3 py-1 rounded text-xs">
                                        Edit
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.guru.destroy', $guru) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data guru ini?')"
                                                class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-xs">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                Tidak ada data guru.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700">
            {{ $gurus->links() }}
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Filter status guru (PNS / Honorer)
    document.getElementById('statusFilter').addEventListener('change', function(e) {
        const statusValue = e.target.value;
        const rows = document.querySelectorAll('tbody tr[data-status]');
        
        rows.forEach(row => {
            if (!statusValue) {
                row.style.display = '';
                return;
            }
            const rowStatus = row.getAttribute('data-status');
            row.style.display = rowStatus === statusValue ? '' : 'none';
        });
    });
</script>
@endsection
