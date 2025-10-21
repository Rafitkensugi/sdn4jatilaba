@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Tambah Artikel Baru</h1>

    <form action="{{ route('admin.artikel.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
            <label class="block font-medium">Judul</label>
            <input type="text" name="judul" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-medium">Isi</label>
            <textarea name="isi" class="w-full border p-2 rounded h-40" required></textarea>
        </div>

        <div>
            <label class="block font-medium">Gambar</label>
            <input type="file" name="gambar" class="w-full border p-2 rounded">
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
