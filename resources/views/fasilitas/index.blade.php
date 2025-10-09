@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-12">
    <div class="max-w-7xl mx-auto px-6">
        <h1 class="text-4xl font-bold text-center mb-10 text-gray-800 dark:text-white">
            Fasilitas Sekolah
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($fasilitas as $item)
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow hover:shadow-lg transition transform hover:-translate-y-1">
                    <img src="{{ asset($item['foto']) }}" alt="{{ $item['nama'] }}" 
                         class="w-full h-56 object-cover rounded-t-2xl">

                    <div class="p-5">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-2">
                            {{ $item['nama'] }}
                        </h2>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">
                            {{ $item['deskripsi'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<x-footer></x-footer>
@endsection
