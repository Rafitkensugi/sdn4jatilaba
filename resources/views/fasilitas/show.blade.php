@extends('layouts.app')

@section('content')
<section class="w-full">
    <!-- Header Foto -->
    <div class="relative w-full h-[350px] md:h-[450px] overflow-hidden">
        <img src="{{ asset($fasilitas->foto) }}" alt="{{ $fasilitas->nama }}" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-3">{{ $fasilitas->nama }}</h1>
        </div>
    </div>

    <!-- Deskripsi -->
    <div class="max-w-4xl mx-auto py-10 px-4 text-center">
        <p class="text-gray-700 leading-relaxed text-lg">{{ $fasilitas->deskripsi }}</p>
    </div>

    <!-- Fasilitas Lainnya -->
    <div class="max-w-6xl mx-auto py-10 px-4">
        <h2 class="text-2xl font-bold mb-6 text-center">Fasilitas Lainnya</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($lainnya as $item)
            <a href="{{ route('fasilitas.show', $item->id) }}" class="block bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                <img src="{{ asset($item->foto) }}" alt="{{ $item->nama }}" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                <div class="p-4 text-center">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $item->nama }}</h3>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection
