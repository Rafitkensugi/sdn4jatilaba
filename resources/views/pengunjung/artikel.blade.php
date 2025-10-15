<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artikel - SDN 4 Jatilaba</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', system-ui, sans-serif;
    }
    
    .font-display {
      font-family: 'Playfair Display', serif;
    }
    
    .hero-gradient {
      background: linear-gradient(135deg, #002147 0%, #004080 50%, #0066cc 100%);
      position: relative;
    }
    
    .hero-gradient::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: 
        radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
    }
    
    .floating-shapes {
      position: absolute;
      inset: 0;
      overflow: hidden;
      pointer-events: none;
    }
    
    .shape {
      position: absolute;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.03);
      animation: float 20s infinite ease-in-out;
    }
    
    .shape:nth-child(1) {
      width: 300px;
      height: 300px;
      top: -150px;
      right: -100px;
      animation-delay: 0s;
    }
    
    .shape:nth-child(2) {
      width: 200px;
      height: 200px;
      bottom: -100px;
      left: -50px;
      animation-delay: -7s;
    }
    
    .shape:nth-child(3) {
      width: 150px;
      height: 150px;
      top: 50%;
      left: 20%;
      animation-delay: -14s;
    }
    
    @keyframes float {
      0%, 100% { transform: translate(0, 0) scale(1); }
      33% { transform: translate(30px, -30px) scale(1.1); }
      66% { transform: translate(-20px, 20px) scale(0.9); }
    }
    
    .article-card {
      position: relative;
      overflow: hidden;
      background: white;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      display: flex;
      flex-direction: column;
      height: 100%;
    }
    
    .article-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #002147, #0066cc);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.4s ease;
    }
    
    .article-card:hover::before {
      transform: scaleX(1);
    }
    
    .article-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(0, 33, 71, 0.15);
    }
    
    .article-image {
      position: relative;
      overflow: hidden;
      height: 240px;
      flex-shrink: 0;
    }
    
    .article-image img {
      transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .article-card:hover .article-image img {
      transform: scale(1.1);
    }
    
    .article-image::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(0, 33, 71, 0.6), transparent 60%);
      opacity: 0;
      transition: opacity 0.4s ease;
    }
    
    .article-card:hover .article-image::after {
      opacity: 1;
    }
    
    .glass-badge {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .btn-detail {
      position: relative;
      overflow: hidden;
      z-index: 1;
    }
    
    .btn-detail::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, #001a35, #004080);
      z-index: -1;
      transition: transform 0.4s ease;
      transform: scaleX(0);
      transform-origin: right;
    }
    
    .btn-detail:hover::before {
      transform: scaleX(1);
      transform-origin: left;
    }
    
    .empty-state {
      background: linear-gradient(135deg, rgba(0, 33, 71, 0.03), rgba(0, 102, 204, 0.03));
      border: 2px dashed rgba(0, 33, 71, 0.2);
    }
    
    .article-content {
      display: flex;
      flex-direction: column;
      flex: 1;
      padding: 1.5rem;
    }
    
    .article-title {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      height: 3.5rem;
      margin-bottom: 0.75rem;
    }
    
    .article-footer {
      margin-top: auto;
      padding-top: 0.5rem;
    }
  </style>
</head>

<body class="bg-gradient-to-br from-gray-50 via-blue-50/30 to-gray-50">

  <x-navbar />

  <!-- Hero Header -->
  <div class="relative overflow-hidden">
    <div class="hero-gradient">
      <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
      </div>
      
      <header class="relative z-10 py-16 lg:py-20" data-aos="fade-down">
        <div class="max-w-7xl mx-auto text-center px-6">
          <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-blue-100 text-sm font-medium mb-6" data-aos="fade-up" data-aos-delay="100">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
              <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
            </svg>
            Portal Berita
          </div>
          
          <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight" data-aos="fade-up" data-aos-delay="150">
            Artikel Sekolah
          </h1>
          
          <p class="text-blue-100 text-lg md:text-xl max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            Informasi dan kegiatan terbaru SDN 4 Jatilaba
          </p>
        </div>
      </header>
    </div>
  </div>

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    
    @if ($artikels->isEmpty())
      <!-- Empty State -->
      <div class="empty-state rounded-3xl p-16 text-center max-w-2xl mx-auto" data-aos="fade-up">
        <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-br from-[#002147] to-[#0066cc] rounded-full flex items-center justify-center shadow-xl">
          <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-3">Belum Ada Artikel</h3>
        <p class="text-gray-600 text-lg">
          Artikel akan segera hadir. Pantau terus halaman ini untuk mendapatkan informasi terbaru!
        </p>
      </div>
    @else
      <!-- Articles Grid -->
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($artikels as $artikel)
        <div class="article-card rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
          
          <!-- Image Container -->
          <div class="article-image relative">
            <img 
              src="{{ $artikel->gambar ? asset('storage/'.$artikel->gambar) : 'https://source.unsplash.com/800x600/?school,education,learning' }}" 
              alt="{{ $artikel->judul }}" 
              class="w-full h-full object-cover"
            >
            
            <!-- Date Badge -->
            <div class="absolute top-4 left-4 glass-badge px-3 py-1.5 rounded-lg shadow-lg">
              <div class="flex items-center gap-2 text-[#002147]">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <span class="text-xs font-semibold">{{ $artikel->created_at->format('d M Y') }}</span>
              </div>
            </div>
          </div>

          <!-- Content -->
          <div class="article-content">
            <h2 class="article-title text-xl font-bold text-gray-900 hover:text-[#002147] transition-colors duration-300">
              {{ $artikel->judul }}
            </h2>

            <!-- Meta Info -->
            <div class="flex items-center gap-4 text-sm text-gray-500 mb-5">
              <div class="flex items-center gap-1.5">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>{{ $artikel->created_at->format('H:i') }}</span>
              </div>
              <div class="w-1 h-1 bg-gray-300 rounded-full"></div>
              <div class="flex items-center gap-1.5">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                <span>{{ number_format($artikel->views) }}x</span>
              </div>
            </div>

            <!-- Button -->
            <div class="article-footer">
              <a 
                href="{{ route('artikel.show', $artikel->id) }}" 
                class="btn-detail inline-flex items-center gap-2 w-full justify-center bg-[#002147] text-white px-5 py-3 rounded-xl font-medium shadow-lg hover:shadow-xl transition-all duration-300 group"
              >
                <span>Baca Selengkapnya</span>
                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    @endif

  </main>

  <x-footer />

  <!-- Scripts -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true,
      easing: 'ease-out-cubic',
      offset: 100
    });
  </script>

</body>
</html>