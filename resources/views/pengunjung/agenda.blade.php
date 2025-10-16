<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sambutan Kepala Sekolah SDN 4 Jatilaba">
  <title>Agenda - SDN 4 Jatilaba</title>
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

  <!-- Navbar -->
  <x-navbar></x-navbar>

<div class="min-h-screen bg-gray-50 py-10">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800">Agenda Sekolah</h1>
            <p class="text-gray-600 mt-3">Daftar kegiatan dan acara penting yang akan datang</p>
        </div>

        <!-- Daftar Agenda dalam Card -->
        @if($agendas->isEmpty())
            <div class="text-center py-16">
                <div class="inline-block p-6 bg-white rounded-xl shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <h3 class="mt-4 text-lg font-medium text-gray-700">Tidak ada agenda saat ini</h3>
                    <p class="text-gray-500 mt-1">Silakan cek kembali nanti.</p>
                </div>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($agendas as $agenda)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                        <!-- Header Card: Tanggal -->
                        <div class="bg-blue-600 text-white p-4 text-center">
                            <div class="text-2xl font-bold">
                                {{ \Carbon\Carbon::parse($agenda->tanggal)->format('d') }}
                            </div>
                            <div class="text-sm uppercase tracking-wider mt-1">
                                {{ \Carbon\Carbon::parse($agenda->tanggal)->format('M Y') }}
                            </div>
                        </div>

                        <!-- Konten Card -->
                        <div class="p-5">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $agenda->judul }}</h3>
                            @if($agenda->deskripsi)
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    {{ Str::limit($agenda->deskripsi, 120, '...') }}
                                </p>
                            @endif
                        </div>

                        <!-- Footer Card (opsional) -->
                        <div class="px-5 pb-5 text-right">
                            <span class="inline-block text-xs text-gray-500">
                                {{ \Carbon\Carbon::parse($agenda->tanggal)->translatedFormat('l, d F Y') }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
<x-footer></x-footer>

</body>
</html>