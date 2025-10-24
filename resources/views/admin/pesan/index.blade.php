@extends('layouts.app')

@section('content')
<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Pesan dari Pengunjung</h2>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full text-left border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
        <thead class="bg-gray-100 dark:bg-gray-700">
            <tr>
                <th class="px-4 py-2 text-gray-700 dark:text-gray-300">Nama</th>
                <th class="px-4 py-2 text-gray-700 dark:text-gray-300">Email</th>
                <th class="px-4 py-2 text-gray-700 dark:text-gray-300">Pesan</th>
                <th class="px-4 py-2 text-gray-700 dark:text-gray-300 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pesan as $p)
                <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-900 transition">
                    <td class="px-4 py-2 text-gray-800 dark:text-gray-200">{{ $p->nama }}</td>
                    <td class="px-4 py-2 text-gray-800 dark:text-gray-200">{{ $p->email }}</td>
                    <td class="px-4 py-2 text-gray-800 dark:text-gray-200">{{ $p->pesan }}</td>
                    <td class="px-4 py-2 text-center">
                        <form action="{{ route('admin.pesan.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin hapus pesan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800 font-semibold">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center py-4 text-gray-600 dark:text-gray-400">Belum ada pesan</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $pesan->links() }}
    </div>
</div>
@endsection
