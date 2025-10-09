@extends('layouts.app')

@section('content')
<div class="bg-white py-10">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Fasilitas Sekolah</h1>
        <p class="text-gray-600 mb-8">Berbagai sarana dan prasarana yang mendukung kegiatan belajar mengajar.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($fasilitas as $item)
                <a href="{{ route('fasilitas.show', $item['slug']) }}"
                   class="group block bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                    <div class="overflow-hidden">
                        <img src="{{ asset($item['gambar']) }}"
                             alt="{{ $item['nama'] }}"
                             class="w-full h-56 object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <div class="p-4 text-left">
                        <h2 class="font-semibold text-lg text-gray-800 group-hover:text-blue-600">{{ $item['nama'] }}</h2>
                        <p class="text-sm text-gray-600 mt-1">{{ Str::limit($item['deskripsi'], 80) }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
<x-footer></x-footer>
@endsection
