@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-200">Edit Prestasi</h1>

    <form action="{{ route('admin.prestasi.update', $prestasi->id) }}" method="POST" enctype="multipart/form-data" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block font-semibold">Judul</label>
                <input type="text" name="judul" class="w-full p-2 border rounded-lg dark:bg-gray-700" value="{{ old('judul', $prestasi->judul) }}">
            </div>

            <div>
                <label class="block font-semibold">Tempat</label>
                <input type="text" name="tempat" class="w-full p-2 border rounded-lg dark:bg-gray-700" value="{{ old('tempat', $prestasi->tempat) }}">
            </div>

            <div>
                <label class="block font-semibold">Tingkat</label>
                <input type="text" name="tingkat" class="w-full p-2 border rounded-lg dark:bg-gray-700" value="{{ old('tingkat', $prestasi->tingkat) }}">
            </div>

            <div>
                <label class="block font-semibold">Tanggal</label>
                <input type="date" name="tanggal" class="w-full p-2 border rounded-lg dark:bg-gray-700" value="{{ old('tanggal', $prestasi->tanggal) }}">
            </div>

            <div>
                <label class="block font-semibold">Juara</label>
                <input type="text" name="juara" class="w-full p-2 border rounded-lg dark:bg-gray-700" value="{{ old('juara', $prestasi->juara) }}">
            </div>

            <div>
                <label class="block font-semibold">Gambar</label>
                @if ($prestasi->gambar)
                    <img src="{{ asset('storage/' . $prestasi->gambar) }}" alt="Gambar" class="w-32 mb-2 rounded">
                @endif
                <input type="file" name="gambar" class="w-full p-2 border rounded-lg dark:bg-gray-700">
            </div>
        </div>

        <div class="mt-4">
            <label class="block font-semibold">Deskripsi</label>
            <textarea name="deskripsi" rows="4" class="w-full p-2 border rounded-lg dark:bg-gray-700">{{ old('deskripsi', $prestasi->deskripsi) }}</textarea>
        </div>

        <div class="mt-6 flex justify-end space-x-2">
            <a href="{{ route('admin.prestasi.index') }}" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-lg">Batal</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">Perbarui</button>
        </div>
    </form>
</div>
@endsection
