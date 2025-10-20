@extends('layouts.app')

@section('title', 'Edit Agenda')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Edit Agenda</h1>

    <form action="{{ route('admin.agenda.update', $agenda->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Judul -->
        <div>
            <label for="judul" class="block text-gray-700 dark:text-gray-300 mb-1">Judul</label>
            <input type="text" name="judul" id="judul" value="{{ old('judul', $agenda->judul) }}"
                class="w-full border rounded-lg p-2 dark:bg-gray-800 dark:border-gray-600" required>
            @error('judul')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tanggal -->
        <div>
            <label for="tanggal" class="block text-gray-700 dark:text-gray-300 mb-1">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal"
                value="{{ old('tanggal', $agenda->tanggal->format('Y-m-d')) }}"
                class="w-full border rounded-lg p-2 dark:bg-gray-800 dark:border-gray-600" required>
            @error('tanggal')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Bulan -->
        <div>
            <label for="bulan" class="block text-gray-700 dark:text-gray-300 mb-1">Bulan</label>
            <select name="bulan" id="bulan" class="w-full border rounded-lg p-2 dark:bg-gray-800 dark:border-gray-600">
                @foreach(['oktober', 'november', 'desember'] as $b)
                    <option value="{{ $b }}" {{ $agenda->bulan == $b ? 'selected' : '' }}>
                        {{ ucfirst($b) }}
                    </option>
                @endforeach
            </select>
            @error('bulan')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Lokasi -->
        <div>
            <label for="lokasi" class="block text-gray-700 dark:text-gray-300 mb-1">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" value="{{ old('lokasi', $agenda->lokasi) }}"
                class="w-full border rounded-lg p-2 dark:bg-gray-800 dark:border-gray-600">
            @error('lokasi')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Deskripsi -->
        <div>
            <label for="deskripsi" class="block text-gray-700 dark:text-gray-300 mb-1">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="4"
                class="w-full border rounded-lg p-2 dark:bg-gray-800 dark:border-gray-600">{{ old('deskripsi', $agenda->deskripsi) }}</textarea>
            @error('deskripsi')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Gambar Saat Ini -->
        @if($agenda->gambar)
            <div>
                <p class="text-gray-600 dark:text-gray-300 mb-1">Gambar Saat Ini:</p>
                <img src="{{ asset('storage/' . $agenda->gambar) }}" class="h-40 rounded-lg mb-2">
            </div>
        @endif

        <!-- Upload Gambar Baru -->
        <div>
            <label for="gambar" class="block text-gray-700 dark:text-gray-300 mb-1">Gambar Baru (opsional)</label>
            <input type="file" name="gambar" id="gambar"
                class="w-full border rounded-lg p-2 dark:bg-gray-800 dark:border-gray-600">
        </div>

        <!-- Tombol Update -->
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            Update
        </button>
    </form>
</div>
@endsection
