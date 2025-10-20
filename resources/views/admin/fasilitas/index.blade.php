@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">🏫 Daftar Fasilitas Sekolah</h2>
        <a href="{{ route('admin.fasilitas.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow transition-all duration-200">
            ➕ Tambah Fasilitas
        </a>
    </div>

    @if (session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg shadow">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow-md rounded-xl">
        <table class="min-w-full divide-y divide-gray-300 dark:divide-gray-700">
            <thead class="bg-gray-100 dark:bg-gray-700">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">Foto</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">Deskripsi</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                @forelse ($fasilitas as $index => $item)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-all duration-200">
                        <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">{{ $index + 1 }}</td>

                        <td class="px-6 py-4">
                            @if ($item->foto)
                                <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto Fasilitas" class="w-16 h-16 object-cover rounded-lg shadow">
                            @else
                                <span class="text-gray-400 italic text-sm">Tidak ada foto</span>
                            @endif
                        </td>

                        <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">
                            {{ $item->nama }}
                        </td>

                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400 max-w-md">
                            {{ Str::limit($item->deskripsi, 100) }}
                        </td>

                        <td class="px-6 py-4 text-center">
                            <div class="flex justify-center gap-3">
                                <a href="{{ route('admin.fasilitas.edit', $item->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-lg shadow transition-all duration-200">
                                    ✏️ Edit
                                </a>

                                <form action="{{ route('admin.fasilitas.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus fasilitas ini?')" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg shadow transition-all duration-200">
                                        🗑️ Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                            Belum ada fasilitas yang ditambahkan.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
