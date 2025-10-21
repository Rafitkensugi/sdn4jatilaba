<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengumuman - SDN 4 Jatilaba</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">

  <script>
    function updateTheme() {
      if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.documentElement.classList.add('dark');
      } else {
        document.documentElement.classList.remove('dark');
      }
    }
    updateTheme();
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', updateTheme);
  </script>

  <style>
    body { font-family: 'Inter', system-ui, sans-serif; }
    .font-display { font-family: 'Playfair Display', serif; }

    .hero-gradient {
      background: linear-gradient(135deg, #004225 0%, #00773e 50%, #00a65a 100%);
      position: relative;
    }
    .dark .hero-gradient {
      background: linear-gradient(135deg, #002c1a 0%, #005a30 50%, #00994f 100%);
    }

    .hero-gradient::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image:
        radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
    }

    .floating-shapes { position: absolute; inset: 0; overflow: hidden; pointer-events: none; }
    .shape {
      position: absolute;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.03);
      animation: float 20s infinite ease-in-out;
    }
    .shape:nth-child(1){ width:300px; height:300px; top:-150px; right:-100px; animation-delay:0s; }
    .shape:nth-child(2){ width:200px; height:200px; bottom:-100px; left:-50px; animation-delay:-7s; }
    .shape:nth-child(3){ width:150px; height:150px; top:50%; left:20%; animation-delay:-14s; }

    @keyframes float {
      0%,100%{ transform:translate(0,0) scale(1);}
      33%{ transform:translate(30px,-30px) scale(1.1);}
      66%{ transform:translate(-20px,20px) scale(0.9);}
    }

    .announcement-card {
      position: relative;
      overflow: hidden;
      background: white;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      display: flex;
      flex-direction: column;
      height: 100%;
    }
    .dark .announcement-card { background: #1f2937; }

    .announcement-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 4px;
      background: linear-gradient(90deg, #00a65a, #00d278);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.4s ease;
    }
    .announcement-card:hover::before { transform: scaleX(1); }
    .announcement-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(0, 66, 37, 0.15);
    }
    .dark .announcement-card:hover {
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    .announcement-content { display:flex; flex-direction:column; flex:1; padding:1.5rem; }
    @media (max-width:640px){ .announcement-content{ padding:1rem; } }

    .announcement-title {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      height: 3.5rem;
      margin-bottom: 0.75rem;
    }

    .btn-detail {
      position: relative;
      overflow: hidden;
      z-index: 1;
      background: #00a65a !important;
      border: none !important;
    }
    .btn-detail::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, #00773e, #00d278);
      z-index: -1;
      transition: transform 0.4s ease;
      transform: scaleX(0);
      transform-origin: right;
    }
    .btn-detail:hover::before {
      transform: scaleX(1);
      transform-origin: left;
    }
    .btn-detail:hover { background: transparent !important; }

    .empty-state {
      background: linear-gradient(135deg, rgba(0, 66, 37, 0.03), rgba(0, 166, 90, 0.03));
      border: 2px dashed rgba(0, 66, 37, 0.2);
    }
    .dark .empty-state {
      background: linear-gradient(135deg, rgba(0, 66, 37, 0.1), rgba(0, 166, 90, 0.1));
      border: 2px dashed rgba(255, 255, 255, 0.2);
    }
  </style>
</head>

<body class="bg-gradient-to-br from-gray-50 via-green-50/30 to-gray-50 dark:from-gray-900 dark:via-gray-800/30 dark:to-gray-900">

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
        <div class="max-w-7xl mx-auto text-center px-4 sm:px-6">
          <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-green-100 text-sm font-medium mb-6" data-aos="fade-up" data-aos-delay="100">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
              <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
            </svg>
            Portal Pengumuman
          </div>

          <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight" data-aos="fade-up" data-aos-delay="150">
            Pengumuman Sekolah
          </h1>

          <p class="text-green-100 text-lg md:text-xl max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            Informasi resmi dan terbaru dari SDN 4 Jatilaba
          </p>
        </div>
      </header>
    </div>
  </div>

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
    
    @if ($pengumuman->isEmpty())
      <div class="empty-state rounded-3xl p-8 md:p-16 text-center max-w-2xl mx-auto" data-aos="fade-up">
        <div class="w-20 h-20 md:w-24 md:h-24 mx-auto mb-6 bg-gradient-to-br from-[#00a65a] to-[#00d278] rounded-full flex items-center justify-center shadow-xl">
          <svg class="w-10 h-10 md:w-12 md:h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <h3 class="text-xl md:text-2xl font-bold text-gray-800 dark:text-gray-200 mb-3">Belum Ada Pengumuman</h3>
        <p class="text-gray-600 dark:text-gray-400 text-base md:text-lg">
          Pengumuman akan segera dipublikasikan. Tetap pantau halaman ini untuk informasi terbaru!
        </p>
      </div>
    @else
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
        @foreach ($pengumuman as $pengumuman)
        <div class="announcement-card rounded-2xl shadow-lg dark:shadow-gray-900/30" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
          <div class="announcement-content">
            <h2 class="announcement-title text-xl font-bold text-gray-900 dark:text-gray-100 hover:text-[#00a65a] dark:hover:text-green-400 transition-colors duration-300">
              {{ $pengumuman->judul }}
            </h2>

            <div class="flex items-center gap-3 text-sm text-gray-500 dark:text-gray-400 mb-5">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
              <span>{{ $pengumuman->created_at->format('d M Y, H:i') }}</span>
            </div>

            <div class="mb-6 text-gray-600 dark:text-gray-300 leading-relaxed line-clamp-3">
              {{ Str::limit(strip_tags($pengumuman->isi), 120, '...') }}
            </div>

            <a href="{{ route('pengumuman.show', $pengumuman->id) }}" 
              class="btn-detail inline-flex items-center gap-2 w-full justify-center text-white px-5 py-3 rounded-xl font-medium shadow-lg hover:shadow-xl transition-all duration-300 group">
              <span>Baca Selengkapnya</span>
              <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
              </svg>
            </a>
          </div>
        </div>
        @endforeach
      </div>
    @endif
  </main>

  <x-footer />

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration:800, once:true, easing:'ease-out-cubic', offset:100 });
  </script>
</body>
</html>
