@extends('layouts.app')

@section('title', 'Tambah Agenda')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Tambah Agenda Baru</h1>

    <form action="{{ route('admin.agenda.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label for="judul" class="block text-gray-700 dark:text-gray-300 mb-1">Judul</label>
            <input type="text" name="judul" id="judul" required
                class="w-full border rounded-lg p-2 dark:bg-gray-800 dark:border-gray-600">
        </div>

        <div>
            <label for="tanggal" class="block text-gray-700 dark:text-gray-300 mb-1">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" required
                class="w-full border rounded-lg p-2 dark:bg-gray-800 dark:border-gray-600">
        </div>

        <div>
            <label for="bulan" class="block text-gray-700 dark:text-gray-300 mb-1">Bulan</label>
            <select name="bulan" id="bulan"
                class="w-full border rounded-lg p-2 dark:bg-gray-800 dark:border-gray-600">
                <option value="oktober">Oktober</option>
                <option value="november">November</option>
                <option value="desember">Desember</option>
            </select>
        </div>

        <div>
            <label for="lokasi" class="block text-gray-700 dark:text-gray-300 mb-1">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi"
                class="w-full border rounded-lg p-2 dark:bg-gray-800 dark:border-gray-600">
        </div>

        <div>
            <label for="deskripsi" class="block text-gray-700 dark:text-gray-300 mb-1">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="4"
                class="w-full border rounded-lg p-2 dark:bg-gray-800 dark:border-gray-600"></textarea>
        </div>

        <div>
            <label for="gambar" class="block text-gray-700 dark:text-gray-300 mb-1">Gambar (opsional)</label>
            <input type="file" name="gambar" id="gambar"
                class="w-full border rounded-lg p-2 dark:bg-gray-800 dark:border-gray-600">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            Simpan
        </button>
    </form>
</div>
@endsection
