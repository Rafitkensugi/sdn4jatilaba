<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light dark">
  <title>{{ $prestasi->judul }} - Galeri Prestasi SDN 4 Jatilaba</title>
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

    .info-badge {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.9);
    }
    
    .dark .info-badge {
      background: rgba(0, 0, 0, 0.7);
    }

    .btn-back {
      position: relative;
      overflow: hidden;
      z-index: 1;
      background: linear-gradient(135deg, #0e7490, #0891b2) !important;
      border: none !important;
      box-shadow: 0 4px 15px rgba(14, 116, 144, 0.4);
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
    .btn-back:hover::before { transform: scaleX(1); transform-origin: left; }
    .btn-back:hover { 
      background: transparent !important; 
      box-shadow: 0 6px 25px rgba(14, 116, 144, 0.6);
      transform: translateY(-2px);
    }

    .date-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.5rem 1rem;
      background: linear-gradient(135deg, rgba(14, 116, 144, 0.1), rgba(8, 145, 178, 0.05));
      border: 1px solid rgba(14, 116, 144, 0.2);
      border-radius: 9999px;
      font-size: 0.875rem;
      color: #0e7490;
      transition: all 0.3s ease;
    }
    
    @media (prefers-color-scheme: dark) {
      .date-badge {
        background: linear-gradient(135deg, rgba(14, 116, 144, 0.15), rgba(8, 145, 178, 0.1));
        border-color: rgba(14, 116, 144, 0.3);
        color: #22d3ee;
      }
    }
    
    .dark .date-badge {
      background: linear-gradient(135deg, rgba(14, 116, 144, 0.15), rgba(8, 145, 178, 0.1));
      border-color: rgba(14, 116, 144, 0.3);
      color: #22d3ee;
    }

    .juara-badge {
      position: absolute;
      top: 1rem;
      right: 1rem;
      background: linear-gradient(135deg, rgba(245, 158, 11, 0.9), rgba(217, 119, 6, 0.9));
      color: white;
      padding: 0.5rem 1rem;
      border-radius: 9999px;
      font-size: 0.875rem;
      font-weight: 600;
      z-index: 10;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .portal-badge {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.15), rgba(14, 116, 144, 0.1));
      border: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
    }

    .info-card {
      background: linear-gradient(to bottom, #ffffff, #fafafa);
      border: 1px solid rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
    }
    
    @media (prefers-color-scheme: dark) {
      .info-card { 
        background: linear-gradient(to bottom, #1f1f2e, #1a1a28);
        border: 1px solid rgba(14, 116, 144, 0.15);
      }
    }
    
    .dark .info-card { 
      background: linear-gradient(to bottom, #1f1f2e, #1a1a28);
      border: 1px solid rgba(14, 116, 144, 0.15);
    }

    .info-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(14, 116, 144, 0.15);
    }
    
    @media (prefers-color-scheme: dark) {
      .info-card:hover {
        box-shadow: 0 15px 30px rgba(14, 116, 144, 0.25);
      }
    }
    
    .dark .info-card:hover {
      box-shadow: 0 15px 30px rgba(14, 116, 144, 0.25);
    }

    .hero-height { height: 70vh; }
    
    @media (max-width: 768px) {
      .hero-height { height: 50vh; }
    }
  </style>
</head>

<body class="bg-gradient-to-br from-gray-50 via-cyan-50/20 to-gray-100 dark:from-gray-950 dark:via-cyan-950/20 dark:to-gray-900 transition-colors duration-300">

  <x-navbar />

  <!-- Hero Header with Background Image -->
  <section class="hero-section hero-height" style="background-image: url('{{ asset('storage/' . $prestasi->gambar) }}');">
    <div class="floating-shapes">
      <div class="shape"></div>
      <div class="shape"></div>
      <div class="shape"></div>
      <div class="shape"></div>
    </div>

    <div class="relative z-10 h-full flex flex-col justify-end pb-12">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="portal-badge inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-cyan-100 text-sm font-semibold mb-6" data-aos="fade-up" data-aos-delay="100">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
          </svg>
          Detail Prestasi
        </div>

        <div class="juara-badge" data-aos="fade-left" data-aos-delay="200">
          {{ $prestasi->juara }}
        </div>

        <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight tracking-tight drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]" data-aos="fade-up" data-aos-delay="150">
          {{ $prestasi->judul }}
        </h1>

        <div class="flex flex-wrap gap-4 text-white/90 mb-6" data-aos="fade-up" data-aos-delay="200">
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <span class="font-medium">{{ $prestasi->tempat }}</span>
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <span class="font-medium">{{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d F Y') }}</span>
          </div>
        </div>

        <div class="flex items-center gap-3" data-aos="fade-up" data-aos-delay="250">
          <div class="h-px w-16 bg-gradient-to-r from-transparent to-cyan-300"></div>
          <div class="w-2 h-2 rounded-full bg-cyan-300"></div>
          <div class="h-px w-16 bg-gradient-to-l from-transparent to-cyan-300"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
    <div class="grid md:grid-cols-3 gap-8 md:gap-12">
      
      <!-- Main Content -->
      <div class="md:col-span-2">
        <div class="detail-content rounded-3xl shadow-xl p-8 md:p-12" data-aos="fade-up">
          <!-- Deskripsi -->
          <div class="mb-10">
            <h2 class="detail-title text-3xl font-bold mb-6 font-display">
              Tentang Prestasi
            </h2>
            <div class="text-gray-700 dark:text-gray-300 leading-relaxed text-lg">
              <p>{{ $prestasi->deskripsi }}</p>
            </div>
          </div>

          <!-- Back Button -->
          <div class="mt-12">
            <a href="{{ route('prestasi') }}" 
               class="btn-back text-white font-medium px-6 py-3 rounded-xl shadow-md transition-all duration-300 inline-flex items-center gap-2 group">
              <svg class="w-5 h-5 transition-transform duration-300 group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
              </svg>
              <span>Kembali ke Galeri</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Sidebar Info -->
      <div class="md:col-span-1">
        <div class="sticky top-8 space-y-6">
          <!-- Info Cards -->
          <div class="info-card rounded-2xl p-6" data-aos="fade-left" data-aos-delay="100">
            <h3 class="text-sm uppercase tracking-wider text-gray-500 dark:text-gray-400 font-bold mb-4">Informasi Detail</h3>
            
            <div class="space-y-4">
              <div class="flex items-start gap-4 p-4 bg-cyan-50 dark:bg-cyan-900/20 rounded-xl">
                <div class="flex-shrink-0 w-10 h-10 bg-cyan-500 rounded-lg flex items-center justify-center">
                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                  </svg>
                </div>
                <div>
                  <div class="text-xs text-gray-500 dark:text-gray-300 font-medium mb-1">Tempat Pelaksanaan</div>
                  <div class="text-gray-900 dark:text-white font-semibold">{{ $prestasi->tempat }}</div>
                </div>
              </div>

              <div class="flex items-start gap-4 p-4 bg-blue-50 dark:bg-blue-900/20 rounded-xl">
                <div class="flex-shrink-0 w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                  </svg>
                </div>
                <div>
                  <div class="text-xs text-gray-500 dark:text-gray-300 font-medium mb-1">Tingkat</div>
                  <div class="text-gray-900 dark:text-white font-semibold">{{ $prestasi->tingkat }}</div>
                </div>
              </div>

              <div class="flex items-start gap-4 p-4 bg-indigo-50 dark:bg-indigo-900/20 rounded-xl">
                <div class="flex-shrink-0 w-10 h-10 bg-indigo-500 rounded-lg flex items-center justify-center">
                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                  </svg>
                </div>
                <div>
                  <div class="text-xs text-gray-500 dark:text-gray-300 font-medium mb-1">Tanggal</div>
                  <div class="text-gray-900 dark:text-white font-semibold">{{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d F Y') }}</div>
                </div>
              </div>

              <div class="flex items-start gap-4 p-4 bg-yellow-50 dark:bg-yellow-900/20 rounded-xl">
                <div class="flex-shrink-0 w-10 h-10 bg-yellow-500 rounded-lg flex items-center justify-center">
                  <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                  </svg>
                </div>
                <div>
                  <div class="text-xs text-gray-500 dark:text-gray-300 font-medium mb-1">Peringkat</div>
                  <div class="text-gray-900 dark:text-white font-semibold">{{ $prestasi->juara }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <x-footer />

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true, easing: 'ease-out-cubic' });
  </script>
</body>
</html>