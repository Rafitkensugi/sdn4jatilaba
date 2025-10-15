@extends('layouts.app')

@section('content')
<section class="py-10 px-4 max-w-7xl mx-auto">
    <h2 class="text-3xl font-bold text-center mb-10">Fasilitas Sekolah</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($fasilitas as $item)
        <a href="{{ route('fasilitas.show', $item->id) }}" class="group block bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow hover:shadow-lg transition">
            <img src="{{ asset($item->foto) }}" alt="{{ $item->nama }}" class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-300">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white group-hover:text-blue-700 dark:group-hover:text-blue-400">
                    {{ $item->nama }}
                </h3>
            </div>
        </a>
        @endforeach
    </div>
</section>
@endsection