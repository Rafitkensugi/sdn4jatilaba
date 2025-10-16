<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Prestasi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

    <x-navbar></x-navbar>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Daftar Prestasi</h1>

        <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
            @foreach($prestasis as $prestasi)
            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition duration-300 overflow-hidden">
                <img src="{{ asset('storage/' . $prestasi->gambar) }}" 
                     alt="{{ $prestasi->judul }}" 
                     class="w-full h-48 object-cover">

                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $prestasi->judul }}</h2>
                    <p class="text-gray-600 text-sm">Tempat: {{ $prestasi->tempat }}</p>
                    <p class="text-gray-600 text-sm">Tingkat: {{ $prestasi->tingkat }}</p>
                    <p class="text-gray-600 text-sm">Tanggal: {{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d M Y') }}</p>
                    <p class="text-gray-600 text-sm mb-4">Peringkat: {{ $prestasi->juara }}</p>

                    <a href="{{ route('prestasi.show', $prestasi->id) }}" 
                       class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                        Lihat Detail
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <x-footer></x-footer>
</body>
</html>
