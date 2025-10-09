@extends('layouts.app')

@section('content')
<div class="w-full">
    <!-- Header Foto -->
    <div class="relative h-80 md:h-96 overflow-hidden">
        <img src="{{ asset($fasilitas['gambar']) }}" alt="{{ $fasilitas['nama'] }}"
             class="w-full h-full object-cover brightness-75">
        <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
            <h1 class="text-3xl md:text-4xl font-bold mb-2">{{ $fasilitas['nama'] }}</h1>
            <p class="text-center text-lg max-w-2xl">{{ $fasilitas['deskripsi'] }}</p>
        </div>
    </div>

    <!-- Deskripsi -->
    <div class="max-w-5xl mx-auto px-4 py-8">
        <a href="{{ route('fasilitas.index') }}"
           class="inline-block mb-6 px-4 py-2 bg-gray-200 rounded-lg text-gray-700 hover:bg-gray-300 transition">
           ← Kembali ke Daftar Fasilitas
        </a>

        <!-- Fasilitas Lainnya -->
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Fasilitas Lainnya</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($lainnya as $item)
                <a href="{{ route('fasilitas.show', $item['slug']) }}"
                   class="block bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                    <img src="{{ asset($item['gambar']) }}"
                         alt="{{ $item['nama'] }}"
                         class="w-full h-40 object-cover">
                    <div class="p-3">
                        <h3 class="font-medium text-gray-800 text-base">{{ $item['nama'] }}</h3>
                        <p class="text-sm text-gray-600 mt-1">{{ Str::limit($item['deskripsi'], 60) }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
