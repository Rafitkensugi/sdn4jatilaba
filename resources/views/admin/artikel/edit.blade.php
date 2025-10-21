@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-6">Edit Artikel</h1>

    <form action="{{ route('admin.artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Judul</label>
            <input type="text" name="judul" value="{{ old('judul', $artikel->judul) }}" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Isi Artikel</label>
            <textarea name="isi" rows="6" class="w-full border border-gray-300 rounded px-3 py-2" required>{{ old('isi', $artikel->isi) }}</textarea>
        </div>

        @if ($artikel->gambar)
            <div class="mb-4">
                <p class="text-gray-700 font-medium mb-2">Gambar Sekarang:</p>
                <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" class="w-40 h-28 object-cover rounded mb-2">
            </div>
        @endif

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Ganti Gambar (opsional)</label>
            <input type="file" name="gambar" accept="image/*" class="border border-gray-300 rounded px-3 py-2 w-full">
        </div>

        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">Update</button>
        <a href="{{ route('admin.artikel.index') }}" class="ml-3 text-gray-600 hover:underline">Batal</a>
    </form>
</div>
@endsection
