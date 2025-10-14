<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artikel - SDN 4 Jatilaba</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800">

  <x-navbar></x-navbar>

  <header class="bg-[#002147] text-black py-12 shadow-md">
    <div class="max-w-5xl mx-auto text-center px-6">
      <h1 class="text-4xl font-bold mb-2">Artikel Sekolah</h1>
      <p class="text-blue-200">Informasi dan kegiatan terbaru SDN 4 Jatilaba</p>
    </div>
  </header>

  <main class="max-w-6xl mx-auto px-6 py-12">
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

      @foreach ($artikels as $artikel)
      <div 
        class="bg-white rounded-2xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300"
      >
        <img 
          src="{{ asset($artikel->gambar ?? 'images/default.jpg') }}" 
          alt="{{ $artikel->judul }}" 
          class="w-full h-48 object-cover rounded-t-2xl"
        >

        <div class="p-6">
          <h2 class="text-xl font-bold text-[#002147] mb-2 line-clamp-2">
            {{ $artikel->judul }}
          </h2>

          <!-- Info kecil -->
          <div class="text-sm text-gray-500 flex items-center justify-between mb-4">
            <p>
              📅 {{ $artikel->created_at->format('d M Y, H:i') }}
            </p>
            <p>
              👁️ {{ $artikel->views }}x dibaca
            </p>
          </div>

          <!-- Tombol Lihat Detail -->
          <div class="mt-4 text-right text-black">
            <a 
              href="{{ route('artikel.show', $artikel->id) }}" 
              class="inline-block bg-[#002147] text-white px-4 py-2 rounded-lg hover:bg-blue-900 transition-all duration-300"
            >
              Lihat Detail
            </a>
          </div>
        </div>
      </div>
      @endforeach

    </div>

    <!-- Jika tidak ada artikel -->
    @if ($artikels->isEmpty())
      <p class="text-center text-gray-500 mt-12">Belum ada artikel yang tersedia.</p>
    @endif
  </main>

  <x-footer></x-footer>

</body>
</html>
{{-- alfarizq --}}