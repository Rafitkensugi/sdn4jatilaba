<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Prestasi - {{ $prestasi->judul }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

    <x-navbar></x-navbar>

    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">
            <img src="{{ asset('storage/' . $prestasi->gambar) }}" 
                 alt="{{ $prestasi->judul }}" 
                 class="w-full h-64 object-cover">

            <div class="p-6">
                <h1 class="text-3xl font-bold mb-4">{{ $prestasi->judul }}</h1>

                <p><span class="font-semibold">Tempat:</span> {{ $prestasi->tempat }}</p>
                <p><span class="font-semibold">Tingkat:</span> {{ $prestasi->tingkat }}</p>
                <p><span class="font-semibold">Tanggal:</span> {{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d M Y') }}</p>
                <p><span class="font-semibold">Peringkat:</span> {{ $prestasi->juara }}</p>

                <div class="mt-6">
                    <a href="{{ route('prestasi') }}" 
                       class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition">
                        ← Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>

</body>
</html>
