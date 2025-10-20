@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-6">➕ Tambah Fasilitas</h2>

    @if (session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg shadow">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.fasilitas.store') }}" method="POST" enctype="multipart/form-data" class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 space-y-5">
        @csrf

        <div>
            <label class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Nama Fasilitas</label>
            <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Contoh: Ruang Kelas, Perpustakaan, Laboratorium..." class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 rounded-lg focus:ring focus:ring-blue-400 p-2">
            @error('nama')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Deskripsi</label>
            <textarea name="deskripsi" rows="4" placeholder="Tuliskan deskripsi singkat fasilitas..." class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 rounded-lg focus:ring focus:ring-blue-400 p-2">{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Foto (Opsional)</label>
            <input type="file" name="foto" accept="image/*" class="w-full text-gray-700 dark:text-gray-300">
            @error('foto')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow-md transition-all duration-200">💾 Simpan</button>
            <a href="{{ route('admin.fasilitas.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition-all duration-200">⬅️ Kembali</a>
        </div>
    </form>
</div>
@endsection
