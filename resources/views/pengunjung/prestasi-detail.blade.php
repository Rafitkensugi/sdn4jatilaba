@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">
        <img src="{{ asset('storage/' . $prestasi->gambar) }}" alt="{{ $prestasi->judul }}" class="w-full h-64 object-cover">
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $prestasi->judul }}</h1>
            <p><span class="font-semibold">Tempat:</span> {{ $prestasi->tempat }}</p>
            <p><span class="font-semibold">Tingkat:</span> {{ $prestasi->tingkat }}</p>
            <p><span class="font-semibold">Tanggal:</span> {{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d M Y') }}</p>
            <p><span class="font-semibold">Peringkat:</span> {{ $prestasi->juara }}</p>
            <div class="mt-6">
                <a href="{{ route('prestasi') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
                    ← Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
