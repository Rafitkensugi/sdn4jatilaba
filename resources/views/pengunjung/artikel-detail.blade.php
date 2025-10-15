<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $artikel->judul }} - SDN 4 Jatilaba</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', system-ui, sans-serif;
    }
    .hero-pattern {
      background-color: #002147;
      background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
    .article-content h2,
    .article-content h3 {
      @apply mt-8 mb-4 font-semibold text-gray-900;
    }
    .article-content p {
      @apply mb-5 text-gray-700 leading-relaxed;
    }
    .article-content img {
      @apply rounded-lg my-6 shadow-md max-w-full h-auto;
    }
    .article-content ul,
    .article-content ol {
      @apply list-disc list-inside mb-5 pl-4 space-y-1 text-gray-700;
    }
  </style>
</head>

<body class="bg-gray-50 text-gray-900">

  <x-navbar />

  <!-- Elegant Header -->
  <div class="relative overflow-hidden">
    <div class="hero-pattern absolute inset-0"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-indigo-500/5 rounded-full blur-3xl"></div>

    <header class="relative z-10 bg-gradient-to-r from-[#002147] to-[#003366] text-white py-16 shadow-2xl" data-aos="fade-down">
      <div class="max-w-4xl mx-auto px-6 text-center md:text-left">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 tracking-tight leading-tight">
          {{ $artikel->judul }}
        </h1>
        <div class="text-blue-200 text-sm flex flex-col sm:flex-row sm:items-center sm:justify-center md:justify-start gap-3 mt-2">
          <div class="flex items-center justify-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            {{ $artikel->created_at->format('d M Y, H:i') }}
          </div>
          <div class="flex items-center justify-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
            </svg>
            {{ number_format($artikel->views) }} kali dibaca
          </div>
        </div>
      </div>
    </header>
  </div>

  <!-- Main Content -->
  <main class="max-w-4xl mx-auto px-4 sm:px-6 py-12">

    <!-- Unified Article Card -->
    <article 
      class="bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-500 hover:shadow-2xl group"
      data-aos="fade-up"
    >
      <!-- Featured Image as Card Top -->
      <div class="relative h-64 sm:h-80 overflow-hidden">
        <img 
          src="{{ $artikel->gambar ? asset('storage/'.$artikel->gambar) : 'https://source.unsplash.com/1000x600/?school,education' }}" 
          alt="{{ $artikel->judul }}" 
          class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
      </div>

      <!-- Article Body -->
      <div class="article-content p-6 sm:p-8 prose prose-blue max-w-none">
        {!! nl2br(e($artikel->isi)) !!}
      </div>
    </article>

    <!-- Back Button -->
    <div class="mt-12 text-center" data-aos="fade-up" data-aos-delay="200">
      <a href="{{ url()->previous() }}" 
         class="inline-flex items-center gap-2 bg-[#002147] text-white px-7 py-3.5 rounded-xl hover:bg-[#013068] transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Kembali
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
      easing: 'ease-out-cubic'
    });
  </script>
</body>
</html>