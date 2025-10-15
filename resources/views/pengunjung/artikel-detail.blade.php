<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $artikel->judul }} - SDN 4 Jatilaba</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-gray-50 text-gray-900">

  <x-navbar />

  <!-- Header -->
  <header class="bg-[#002147] text-white py-12 shadow-lg" data-aos="fade-down">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h1 class="text-3xl md:text-4xl font-bold mb-3">{{ $artikel->judul }}</h1>
      <div class="text-blue-200 text-sm flex justify-center gap-4">
        <p>📅 {{ $artikel->created_at->format('d M Y, H:i') }}</p>
        <p>👁️ {{ $artikel->views }} kali dibaca</p>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main class="max-w-4xl mx-auto px-6 py-12" data-aos="fade-up">

    <!-- Gambar Utama -->
    <div class="rounded-xl overflow-hidden shadow-lg mb-8" data-aos="zoom-in">
      <img 
        src="{{ $artikel->gambar ? asset('storage/'.$artikel->gambar) : 'https://source.unsplash.com/1000x600/?school,education' }}" 
        alt="{{ $artikel->judul }}" 
        class="w-full h-72 object-cover">
    </div>

    <!-- Isi Artikel -->
    <article class="bg-white p-8 rounded-xl shadow-md leading-relaxed text-gray-800 prose max-w-none" data-aos="fade-up" data-aos-delay="150">
      {!! nl2br(e($artikel->isi)) !!}
    </article>

    <!-- Tombol Kembali -->
    <div class="mt-12 text-center" data-aos="fade-up" data-aos-delay="300">
      <a href="{{ route('artikel') }}" 
         class="inline-block bg-[#002147] text-white px-6 py-3 rounded-lg hover:bg-[#013068] transition">
        ← Kembali ke Daftar Artikel
      </a>
    </div>

  </main>

  <x-footer />

  <!-- AOS Script -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true,
    });
  </script>
</body>
</html>
