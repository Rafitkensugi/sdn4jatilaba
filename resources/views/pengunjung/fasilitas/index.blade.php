<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light dark">
  <title>Fasilitas Sekolah - SDN 4 Jatilaba</title>
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

    /* Hero Section with Background Image */
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

    /* Fasilitas Card - FIXED DARK MODE */
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

    .fasilitas-card::after {
      content: '';
      position: absolute;
      inset: -2px;
      background: linear-gradient(135deg, #0e7490, #0891b2, #06b6d4);
      border-radius: inherit;
      z-index: -1;
      opacity: 0;
      transition: opacity 0.5s ease;
      filter: blur(20px);
    }

    .fasilitas-card:hover::before { transform: scaleX(1); }
    .fasilitas-card:hover::after { opacity: 0.3; }
    .fasilitas-card:hover {
      transform: translateY(-12px) scale(1.02);
      box-shadow: 0 25px 50px rgba(14, 116, 144, 0.2), 0 10px 20px rgba(0, 0, 0, 0.15);
      border-color: rgba(14, 116, 144, 0.3);
    }
    
    /* Dark mode hover effects */
    @media (prefers-color-scheme: dark) {
      .fasilitas-card:hover {
        box-shadow: 0 25px 50px rgba(14, 116, 144, 0.3), 0 10px 20px rgba(0, 0, 0, 0.5);
      }
    }
    
    .dark .fasilitas-card:hover {
      box-shadow: 0 25px 50px rgba(14, 116, 144, 0.3), 0 10px 20px rgba(0, 0, 0, 0.5);
    }

    .fasilitas-content { 
      display:flex; 
      flex-direction:column; 
      flex:1; 
      padding:1.5rem;
      position: relative;
      z-index: 1;
    }

    .fasilitas-title {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      min-height: 3rem;
      margin-bottom: 0.5rem;
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
    
    .fasilitas-card:hover .fasilitas-title {
      background: linear-gradient(135deg, #0e7490 0%, #0891b2 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* Text content in cards */
    .fasilitas-content .text-gray-700 {
      color: #374151;
    }
    
    @media (prefers-color-scheme: dark) {
      .fasilitas-content .text-gray-700 {
        color: #d1d5db;
      }
    }
    
    .dark .fasilitas-content .text-gray-700 {
      color: #d1d5db;
    }

    .portal-badge {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.15), rgba(14, 116, 144, 0.1));
      border: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
    }

    .empty-state {
      background: linear-gradient(135deg, rgba(14, 116, 144, 0.03), rgba(8, 145, 178, 0.02));
      border: 2px dashed rgba(14, 116, 144, 0.2);
      position: relative;
      overflow: hidden;
    }
    
    @media (prefers-color-scheme: dark) {
      .empty-state {
        background: linear-gradient(135deg, rgba(14, 116, 144, 0.08), rgba(8, 145, 178, 0.05));
        border: 2px dashed rgba(14, 116, 144, 0.3);
      }
    }
    
    .empty-state::before {
      content: '';
      position: absolute;
      inset: -50%;
      background: conic-gradient(from 180deg at 50% 50%, transparent 0deg, rgba(14, 116, 144, 0.05) 180deg, transparent 360deg);
      animation: rotate 20s linear infinite;
    }
    @keyframes rotate { to { transform: rotate(360deg); } }
    .dark .empty-state {
      background: linear-gradient(135deg, rgba(14, 116, 144, 0.08), rgba(8, 145, 178, 0.05));
      border: 2px dashed rgba(14, 116, 144, 0.3);
    }
  </style>
</head>

<body class="bg-gradient-to-br from-gray-50 via-cyan-50/20 to-gray-100 dark:from-gray-950 dark:via-cyan-950/20 dark:to-gray-900 transition-colors duration-300">

  <x-navbar />

  <!-- Hero Header with Background Image -->
  <section id="home" class="hero-section py-20 md:py-32" style="background-image: url('{{ asset('images/hero.jpeg') }}');">
    <div class="floating-shapes">
      <div class="shape"></div>
      <div class="shape"></div>
      <div class="shape"></div>
      <div class="shape"></div>
    </div>

    <div class="relative z-10 text-center">
      <div class="portal-badge inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-cyan-100 text-sm font-semibold mb-8" data-aos="fade-up" data-aos-delay="100">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"></path>
        </svg>
        Fasilitas Sekolah SDN 4 Jatilaba
      </div>

      <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight tracking-tight drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]" data-aos="fade-up" data-aos-delay="150">
        Fasilitas Sekolah
      </h1>

      <p class="text-white text-lg md:text-xl lg:text-2xl max-w-3xl mx-auto font-light leading-relaxed drop-shadow-[0_2px_4px_rgba(0,0,0,0.4)]" data-aos="fade-up" data-aos-delay="200">
        Sarana dan prasarana yang mendukung proses belajar mengajar yang optimal
      </p>

      <div class="mt-8 flex items-center justify-center gap-3" data-aos="fade-up" data-aos-delay="250">
        <div class="h-px w-16 bg-gradient-to-r from-transparent to-cyan-300"></div>
        <div class="w-2 h-2 rounded-full bg-cyan-300"></div>
        <div class="h-px w-16 bg-gradient-to-l from-transparent to-cyan-300"></div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
    
    @if ($fasilitas->isEmpty())
      <div class="empty-state rounded-3xl p-12 md:p-20 text-center max-w-2xl mx-auto relative z-10" data-aos="fade-up">
        <div class="w-24 h-24 md:w-28 md:h-28 mx-auto mb-8 bg-gradient-to-br from-cyan-600 via-cyan-500 to-cyan-400 rounded-full flex items-center justify-center shadow-2xl relative" data-aos="zoom-in" data-aos-delay="100">
          <div class="absolute inset-0 bg-gradient-to-br from-cyan-600 to-cyan-400 rounded-full animate-ping opacity-20"></div>
          <svg class="w-12 h-12 md:w-14 md:h-14 text-white relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
          </svg>
        </div>
        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-gray-100 mb-4 font-display">Belum Ada Fasilitas</h3>
        <p class="text-gray-600 dark:text-gray-400 text-base md:text-lg leading-relaxed">
          Informasi fasilitas akan segera dipublikasikan. Pantau terus halaman ini untuk update terbaru!
        </p>
      </div>
    @else
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 md:gap-10">
        @foreach ($fasilitas as $item)
          <a href="{{ route('pengunjung.fasilitas.show', $item->slug) }}" 
             class="fasilitas-card rounded-3xl shadow-xl overflow-hidden group" 
             data-aos="fade-up" 
             data-aos-delay="{{ $loop->index * 80 }}">

            {{-- Thumbnail --}}
            <div class="relative overflow-hidden">
              <img src="{{ asset('storage/' . $item->foto) }}" 
                   alt="{{ $item->nama }}" 
                   class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>

            {{-- Konten --}}
            <div class="fasilitas-content">
              <h2 class="fasilitas-title text-xl font-bold leading-tight">
                {{ $item->nama }}
              </h2>

              @if($item->deskripsi_singkat)
                <p class="text-gray-700 dark:text-gray-300 text-sm leading-relaxed mt-2 line-clamp-3">
                  {{ $item->deskripsi_singkat }}
                </p>
              @endif

              {{-- Arrow indicator --}}
              <div class="mt-4 flex justify-end">
                <div class="w-8 h-8 bg-cyan-500 rounded-full flex items-center justify-center transform group-hover:translate-x-1 transition-transform duration-300">
                  <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                  </svg>
                </div>
              </div>
            </div>
          </a>
        @endforeach
      </div>
    @endif
  </main>

  <x-footer />

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true, easing: 'ease-out-cubic' });
  </script>
</body>
</html>