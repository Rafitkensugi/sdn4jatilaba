<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light dark">
  <title>{{ $fasilitas->nama }} - Fasilitas SDN 4 Jatilaba</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">

  <style>
    html {
      color-scheme: light dark;
      transition: color 0.3s ease, background-color 0.3s ease;
    }

    body { font-family: 'Inter', system-ui, sans-serif; }
    .font-display { font-family: 'Playfair Display', serif; }

    /* Hero Section */
    .hero-section {
      position: relative;
      overflow: hidden;
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
    }
    .hero-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(to right, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.5) 100%);
      z-index: 1;
    }

    .dark .hero-section::before {
      background: linear-gradient(to right, rgba(0, 0, 0, 0.8) 0%, rgba(14, 116, 144, 0.3) 100%);
    }

    /* Floating Particles */
    .floating-shapes { position: absolute; inset: 0; overflow: hidden; pointer-events: none; }
    .shape {
      position: absolute;
      background: radial-gradient(circle, rgba(14, 116, 144, 0.1), transparent 70%);
      border-radius: 50%;
      animation: float 25s infinite ease-in-out;
      filter: blur(40px);
    }
    .shape:nth-child(1){ width:400px; height:400px; top:-200px; right:-150px; animation-delay:0s; }
    .shape:nth-child(2){ width:350px; height:350px; bottom:-150px; left:-100px; animation-delay:-8s; }
    .shape:nth-child(3){ width:250px; height:250px; top:40%; left:15%; animation-delay:-15s; }
    .shape:nth-child(4){ width:300px; height:300px; top:60%; right:10%; animation-delay:-20s; }

    @keyframes float {
      0%,100%{ transform:translate(0,0) scale(1); opacity:0.3; }
      33%{ transform:translate(40px,-40px) scale(1.2); opacity:0.5; }
      66%{ transform:translate(-30px,30px) scale(0.9); opacity:0.4; }
    }

    /* Detail Content Section */
    .detail-content {
      background: linear-gradient(to bottom, #ffffff, #fafafa);
      border: 1px solid rgba(0, 0, 0, 0.08);
      backdrop-filter: blur(10px);
    }
    
    /* Dark mode styles for detail content */
    @media (prefers-color-scheme: dark) {
      .detail-content { 
        background: linear-gradient(to bottom, #1f1f2e, #1a1a28);
        border: 1px solid rgba(14, 116, 144, 0.15);
      }
    }
    
    .dark .detail-content { 
      background: linear-gradient(to bottom, #1f1f2e, #1a1a28);
      border: 1px solid rgba(14, 116, 144, 0.15);
    }

    .detail-title {
      background: linear-gradient(135deg, #1a1a2e 0%, #0e7490 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    /* Dark mode text colors */
    @media (prefers-color-scheme: dark) {
      .detail-title {
        background: linear-gradient(135deg, #ffffff 0%, #22d3ee 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }
    }
    
    .dark .detail-title {
      background: linear-gradient(135deg, #ffffff 0%, #22d3ee 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* Fasilitas Lainnya Card */
    .fasilitas-card {
      position: relative;
      overflow: hidden;
      background: linear-gradient(to bottom, #ffffff, #fafafa);
      border: 1px solid rgba(0, 0, 0, 0.08);
      transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
      display: flex;
      flex-direction: column;
      height: 100%;
      backdrop-filter: blur(10px);
    }
    
    /* Dark mode styles for fasilitas card */
    @media (prefers-color-scheme: dark) {
      .fasilitas-card { 
        background: linear-gradient(to bottom, #1f1f2e, #1a1a28);
        border: 1px solid rgba(14, 116, 144, 0.15);
      }
    }
    
    .dark .fasilitas-card { 
      background: linear-gradient(to bottom, #1f1f2e, #1a1a28);
      border: 1px solid rgba(14, 116, 144, 0.15);
    }

    .fasilitas-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 3px;
      background: linear-gradient(90deg, #0e7490, #0891b2, #06b6d4);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .fasilitas-card:hover::before { transform: scaleX(1); }
    .fasilitas-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(14, 116, 144, 0.2), 0 8px 16px rgba(0, 0, 0, 0.15);
      border-color: rgba(14, 116, 144, 0.3);
    }
    
    /* Dark mode hover effects */
    @media (prefers-color-scheme: dark) {
      .fasilitas-card:hover {
        box-shadow: 0 20px 40px rgba(14, 116, 144, 0.3), 0 8px 16px rgba(0, 0, 0, 0.5);
      }
    }
    
    .dark .fasilitas-card:hover {
      box-shadow: 0 20px 40px rgba(14, 116, 144, 0.3), 0 8px 16px rgba(0, 0, 0, 0.5);
    }

    .fasilitas-title {
      background: linear-gradient(135deg, #1a1a2e 0%, #0e7490 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      transition: all 0.3s ease;
    }
    
    /* Dark mode text colors */
    @media (prefers-color-scheme: dark) {
      .fasilitas-title {
        background: linear-gradient(135deg, #ffffff 0%, #22d3ee 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }
    }
    
    .dark .fasilitas-title {
      background: linear-gradient(135deg, #ffffff 0%, #22d3ee 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* Tombol Kembali */
    .btn-back {
      position: relative;
      overflow: hidden;
      z-index: 1;
      background: linear-gradient(135deg, #0e7490, #0891b2) !important;
      border: none !important;
      box-shadow: 0 4px 15px rgba(14, 116, 144, 0.4);
      transition: all 0.4s ease;
    }
    .btn-back::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, #0e7490, #0891b2, #06b6d4);
      z-index: -1;
      transition: all 0.4s ease;
      transform: scaleX(0);
      transform-origin: right;
    }
    .btn-back:hover::before { 
      transform: scaleX(1); 
      transform-origin: left; 
    }
    .btn-back:hover { 
      background: transparent !important; 
      box-shadow: 0 6px 25px rgba(14, 116, 144, 0.6);
      transform: translateY(-2px);
    }

    .portal-badge {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.15), rgba(14, 116, 144, 0.1));
      border: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
    }

    .section-title {
      background: linear-gradient(135deg, #1a1a2e 0%, #0e7490 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      position: relative;
      display: inline-block;
    }
    
    .section-title::after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background: linear-gradient(90deg, #0e7490, #0891b2, #06b6d4);
      border-radius: 2px;
    }
    
    @media (prefers-color-scheme: dark) {
      .section-title {
        background: linear-gradient(135deg, #ffffff 0%, #22d3ee 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }
    }
    
    .dark .section-title {
      background: linear-gradient(135deg, #ffffff 0%, #22d3ee 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
  </style>
</head>

<body class="bg-gradient-to-br from-gray-50 via-cyan-50/20 to-gray-100 dark:from-gray-950 dark:via-cyan-950/20 dark:to-gray-900 transition-colors duration-300">

  <x-navbar />

  <!-- Hero Header with Background Image -->
  <section class="hero-section h-[350px] md:h-[450px]" style="background-image: url('{{ asset('storage/' . $fasilitas->foto) }}');">
    <div class="floating-shapes">
      <div class="shape"></div>
      <div class="shape"></div>
      <div class="shape"></div>
      <div class="shape"></div>
    </div>

    <div class="relative z-10 h-full flex flex-col justify-center items-center text-center px-4">
      <div class="portal-badge inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-cyan-100 text-sm font-semibold mb-6" data-aos="fade-up" data-aos-delay="100">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"></path>
        </svg>
        Detail Fasilitas
      </div>

      <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight tracking-tight drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]" data-aos="fade-up" data-aos-delay="150">
        {{ $fasilitas->nama }}
      </h1>

      <div class="mt-6 flex items-center justify-center gap-3" data-aos="fade-up" data-aos-delay="200">
        <div class="h-px w-16 bg-gradient-to-r from-transparent to-cyan-300"></div>
        <div class="w-2 h-2 rounded-full bg-cyan-300"></div>
        <div class="h-px w-16 bg-gradient-to-l from-transparent to-cyan-300"></div>
      </div>
    </div>
  </section>

  <!-- Deskripsi Fasilitas -->
  <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
    <div class="detail-content rounded-3xl shadow-xl p-8 md:p-12" data-aos="fade-up">
      <h2 class="detail-title text-3xl font-bold mb-8 text-center font-display">
        Tentang Fasilitas
      </h2>
      <div class="prose prose-lg max-w-none dark:prose-invert">
        <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-lg text-center">
          {{ $fasilitas->deskripsi }}
        </p>
      </div>

      <!-- Tombol Kembali -->
      <div class="mt-12 text-center">
        <a href="{{ route('pengunjung.fasilitas.index') }}" 
           class="btn-back text-white font-medium px-8 py-4 rounded-xl shadow-md transition-all duration-300 inline-flex items-center gap-3 group">
          <svg class="w-5 h-5 transition-transform duration-300 group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
          </svg>
          <span class="text-lg">Kembali ke Daftar Fasilitas</span>
        </a>
      </div>
    </div>
  </section>

  <!-- Fasilitas Lainnya -->
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 md:pb-24">
    <div class="text-center mb-12" data-aos="fade-up">
      <h2 class="section-title text-3xl md:text-4xl font-bold font-display mb-4">
        Fasilitas Lainnya
      </h2>
      <p class="text-gray-600 dark:text-gray-400 text-lg max-w-2xl mx-auto">
        Jelajahi berbagai fasilitas penunjang lainnya yang tersedia di sekolah kami
      </p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
      @foreach ($lainnya as $item)
        <a href="{{ route('pengunjung.fasilitas.show', $item->slug) }}" 
           class="fasilitas-card rounded-2xl shadow-lg overflow-hidden group" 
           data-aos="fade-up" 
           data-aos-delay="{{ $loop->index * 80 }}">

          <!-- Thumbnail -->
          <div class="relative overflow-hidden">
            <img src="{{ asset('storage/' . $item->foto) }}" 
                 alt="{{ $item->nama }}" 
                 class="w-full h-48 object-cover transition-transform duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </div>

          <!-- Konten -->
          <div class="p-4 text-center">
            <h3 class="fasilitas-title text-lg font-bold leading-tight mb-2">
              {{ $item->nama }}
            </h3>
            
            <!-- Arrow indicator -->
            <div class="mt-2 flex justify-center">
              <div class="w-6 h-6 bg-cyan-500 rounded-full flex items-center justify-center transform group-hover:translate-x-1 transition-transform duration-300">
                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </div>
            </div>
          </div>
        </a>
      @endforeach
    </div>
  </section>

  <x-footer />

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true, easing: 'ease-out-cubic' });
  </script>
</body>
</html>