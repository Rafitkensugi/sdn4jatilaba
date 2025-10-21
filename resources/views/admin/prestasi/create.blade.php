@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-200">Tambah Prestasi</h1>

    <form action="{{ route('admin.prestasi.store') }}" method="POST" enctype="multipart/form-data" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="judul" class="block font-semibold">Judul</label>
                <input type="text" id="judul" name="judul" class="w-full p-2 border rounded-lg dark:bg-gray-700" value="{{ old('judul') }}">
            </div>

            <div>
                <label for="tempat" class="block font-semibold">Tempat</label>
                <input type="text" id="tempat" name="tempat" class="w-full p-2 border rounded-lg dark:bg-gray-700" value="{{ old('tempat') }}">
            </div>

            <div>
                <label for="tingkat" class="block font-semibold">Tingkat</label>
                <input type="text" id="tingkat" name="tingkat" class="w-full p-2 border rounded-lg dark:bg-gray-700" value="{{ old('tingkat') }}">
            </div>

            <div>
                <label for="tanggal" class="block font-semibold">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" class="w-full p-2 border rounded-lg dark:bg-gray-700" value="{{ old('tanggal') }}">
            </div>

            <div>
                <label for="juara" class="block font-semibold">Juara</label>
                <input type="text" id="juara" name="juara" class="w-full p-2 border rounded-lg dark:bg-gray-700" value="{{ old('juara') }}">
            </div>

            <div>
                <label for="gambar" class="block font-semibold">Gambar</label>
                <input type="file" id="gambar" name="gambar" class="w-full p-2 border rounded-lg dark:bg-gray-700">
            </div>
        </div>

        <div class="mt-4">
            <label for="deskripsi" class="block font-semibold">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" rows="4" class="w-full p-2 border rounded-lg dark:bg-gray-700">{{ old('deskripsi') }}</textarea>
        </div>

        <div class="mt-6 flex justify-end space-x-2">
            <a href="{{ route('admin.prestasi.index') }}" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-lg">Batal</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">Simpan</button>
        </div>
    </form>
</div>
@endsection
