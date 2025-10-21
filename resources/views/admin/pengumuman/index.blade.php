@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Daftar Pengumuman</h1>

    <a href="{{ route('admin.pengumuman.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">+ Tambah Pengumuman</a>

    @if(session('success'))
        <div class="mt-4 p-3 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full mt-6 border-collapse border">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-3 border">Judul</th>
                <th class="p-3 border">Tanggal</th>
                <th class="p-3 border">Gambar</th>
                <th class="p-3 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengumumans as $pengumuman)
            <tr class="border-b hover:bg-gray-50">
                <td class="p-3">{{ $pengumuman->judul }}</td>
                <td class="p-3">{{ $pengumuman->tanggal }}</td>
                <td class="p-3">
                    @if($pengumuman->gambar)
                        <img src="{{ asset('storage/'.$pengumuman->gambar) }}" class="w-20 h-20 object-cover rounded">
                    @endif
                </td>
                <td class="p-3">
                    <a href="{{ route('admin.pengumuman.edit', $pengumuman->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                    <form action="{{ route('admin.pengumuman.destroy', $pengumuman->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus pengumuman ini?')">
                        @csrf @method('DELETE')
                        <button class="bg-red-600 text-white px-3 py-1 rounded">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $pengumumans->links() }}
    </div>
</div>
@endsection
