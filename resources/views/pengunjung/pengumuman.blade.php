<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light dark">
  <title>Pengumuman - SDN 4 Jatilaba</title>
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
  background: linear-gradient(to right, rgba(0, 0, 0, 0.8) 0%, rgba(88, 28, 135, 0.3) 100%);
}


    /* Floating Particles */
    .floating-shapes { position: absolute; inset: 0; overflow: hidden; pointer-events: none; }
    .shape {
      position: absolute;
      background: radial-gradient(circle, rgba(168, 85, 247, 0.1), transparent 70%);
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

    /* Announcement Card - FIXED DARK MODE */
    .announcement-card {
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
    
    /* Dark mode styles for announcement card */
    @media (prefers-color-scheme: dark) {
      .announcement-card { 
        background: linear-gradient(to bottom, #1f1f2e, #1a1a28);
        border: 1px solid rgba(139, 92, 246, 0.15);
      }
    }
    
    .dark .announcement-card { 
      background: linear-gradient(to bottom, #1f1f2e, #1a1a28);
      border: 1px solid rgba(139, 92, 246, 0.15);
    }

    .announcement-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 3px;
      background: linear-gradient(90deg, #8b5cf6, #a855f7, #c084fc);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .announcement-card::after {
      content: '';
      position: absolute;
      inset: -2px;
      background: linear-gradient(135deg, #8b5cf6, #a855f7, #c084fc);
      border-radius: inherit;
      z-index: -1;
      opacity: 0;
      transition: opacity 0.5s ease;
      filter: blur(20px);
    }

    .announcement-card:hover::before { transform: scaleX(1); }
    .announcement-card:hover::after { opacity: 0.3; }
    .announcement-card:hover {
      transform: translateY(-12px) scale(1.02);
      box-shadow: 0 25px 50px rgba(139, 92, 246, 0.2), 0 10px 20px rgba(0, 0, 0, 0.15);
      border-color: rgba(139, 92, 246, 0.3);
    }
    
    /* Dark mode hover effects */
    @media (prefers-color-scheme: dark) {
      .announcement-card:hover {
        box-shadow: 0 25px 50px rgba(139, 92, 246, 0.3), 0 10px 20px rgba(0, 0, 0, 0.5);
      }
    }
    
    .dark .announcement-card:hover {
      box-shadow: 0 25px 50px rgba(139, 92, 246, 0.3), 0 10px 20px rgba(0, 0, 0, 0.5);
    }

    .announcement-content { 
      display:flex; 
      flex-direction:column; 
      flex:1; 
      padding:2rem;
      position: relative;
      z-index: 1;
    }
    @media (max-width:640px){ .announcement-content{ padding:1.5rem; } }

    .announcement-title {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      min-height: 3.5rem;
      margin-bottom: 1rem;
      background: linear-gradient(135deg, #1a1a2e 0%, #6b2d6b 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      transition: all 0.3s ease;
    }
    
    /* Dark mode text colors */
    @media (prefers-color-scheme: dark) {
      .announcement-title {
        background: linear-gradient(135deg, #ffffff 0%, #c084fc 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }
    }
    
    .dark .announcement-title {
      background: linear-gradient(135deg, #ffffff 0%, #c084fc 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .announcement-card:hover .announcement-title {
      background: linear-gradient(135deg, #8b5cf6 0%, #a855f7 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* Text content in cards */
    .announcement-content .text-gray-700 {
      color: #374151;
    }
    
    @media (prefers-color-scheme: dark) {
      .announcement-content .text-gray-700 {
        color: #d1d5db;
      }
    }
    
    .dark .announcement-content .text-gray-700 {
      color: #d1d5db;
    }

    .btn-detail {
      position: relative;
      overflow: hidden;
      z-index: 1;
      background: linear-gradient(135deg, #8b5cf6, #a855f7) !important;
      border: none !important;
      box-shadow: 0 4px 15px rgba(139, 92, 246, 0.4);
    }
    .btn-detail::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, #6b2d6b, #8b5cf6, #c084fc);
      z-index: -1;
      transition: all 0.4s ease;
      transform: scaleX(0);
      transform-origin: right;
    }
    .btn-detail:hover::before { transform: scaleX(1); transform-origin: left; }
    .btn-detail:hover { 
      background: transparent !important; 
      box-shadow: 0 6px 25px rgba(139, 92, 246, 0.6);
      transform: translateY(-2px);
    }

    .date-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.5rem 1rem;
      background: linear-gradient(135deg, rgba(139, 92, 246, 0.1), rgba(168, 85, 247, 0.05));
      border: 1px solid rgba(139, 92, 246, 0.2);
      border-radius: 9999px;
      font-size: 0.875rem;
      color: #6b2d6b;
      transition: all 0.3s ease;
    }
    
    @media (prefers-color-scheme: dark) {
      .date-badge {
        background: linear-gradient(135deg, rgba(139, 92, 246, 0.15), rgba(168, 85, 247, 0.1));
        border-color: rgba(139, 92, 246, 0.3);
        color: #c084fc;
      }
    }
    
    .dark .date-badge {
      background: linear-gradient(135deg, rgba(139, 92, 246, 0.15), rgba(168, 85, 247, 0.1));
      border-color: rgba(139, 92, 246, 0.3);
      color: #c084fc;
    }

    .empty-state {
      background: linear-gradient(135deg, rgba(139, 92, 246, 0.03), rgba(168, 85, 247, 0.02));
      border: 2px dashed rgba(139, 92, 246, 0.2);
      position: relative;
      overflow: hidden;
    }
    
    @media (prefers-color-scheme: dark) {
      .empty-state {
        background: linear-gradient(135deg, rgba(139, 92, 246, 0.08), rgba(168, 85, 247, 0.05));
        border: 2px dashed rgba(139, 92, 246, 0.3);
      }
    }
    
    .empty-state::before {
      content: '';
      position: absolute;
      inset: -50%;
      background: conic-gradient(from 180deg at 50% 50%, transparent 0deg, rgba(139, 92, 246, 0.05) 180deg, transparent 360deg);
      animation: rotate 20s linear infinite;
    }
    @keyframes rotate { to { transform: rotate(360deg); } }
    .dark .empty-state {
      background: linear-gradient(135deg, rgba(139, 92, 246, 0.08), rgba(168, 85, 247, 0.05));
      border: 2px dashed rgba(139, 92, 246, 0.3);
    }

    .portal-badge {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.15), rgba(192, 132, 252, 0.1));
      border: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
    }
  </style>
</head>

<body class="bg-gradient-to-br from-gray-50 via-purple-50/20 to-gray-100 dark:from-gray-950 dark:via-purple-950/20 dark:to-gray-900 transition-colors duration-300">

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
      <div class="portal-badge inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-purple-100 text-sm font-semibold mb-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
          <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
        </svg>
        Portal Pengumuman Resmi
      </div>

      <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight tracking-tight drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]" data-aos="fade-up" data-aos-delay="150">
        Pengumuman Sekolah
      </h1>

      <p class="text-white text-lg md:text-xl lg:text-2xl max-w-3xl mx-auto font-light leading-relaxed drop-shadow-[0_2px_4px_rgba(0,0,0,0.4)]" data-aos="fade-up" data-aos-delay="200">
        Informasi resmi dan terbaru dari SDN 4 Jatilaba
      </p>

      <div class="mt-8 flex items-center justify-center gap-3" data-aos="fade-up" data-aos-delay="250">
        <div class="h-px w-16 bg-gradient-to-r from-transparent to-purple-300"></div>
        <div class="w-2 h-2 rounded-full bg-purple-300"></div>
        <div class="h-px w-16 bg-gradient-to-l from-transparent to-purple-300"></div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
    
    @if ($pengumuman->isEmpty())
      <div class="empty-state rounded-3xl p-12 md:p-20 text-center max-w-2xl mx-auto relative z-10" data-aos="fade-up">
        <div class="w-24 h-24 md:w-28 md:h-28 mx-auto mb-8 bg-gradient-to-br from-purple-600 via-purple-500 to-purple-400 rounded-full flex items-center justify-center shadow-2xl relative" data-aos="zoom-in" data-aos-delay="100">
          <div class="absolute inset-0 bg-gradient-to-br from-purple-600 to-purple-400 rounded-full animate-ping opacity-20"></div>
          <svg class="w-12 h-12 md:w-14 md:h-14 text-white relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-gray-100 mb-4 font-display">Belum Ada Pengumuman</h3>
        <p class="text-gray-600 dark:text-gray-400 text-base md:text-lg leading-relaxed">
          Pengumuman akan segera dipublikasikan. Tetap pantau halaman ini untuk informasi terbaru dari sekolah!
        </p>
      </div>
    @else
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
       @foreach ($pengumuman as $pengumuman)
  <div class="announcement-card rounded-3xl shadow-xl overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
    
    {{-- Thumbnail --}}
    @if ($pengumuman->gambar)
      <div class="relative overflow-hidden group">
        <img src="{{ asset('storage/pengumuman/' . $pengumuman->gambar) }}" 
             alt="{{ $pengumuman->judul }}" 
             class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
      </div>
    @endif

    {{-- Konten --}}
    <div class="announcement-content">
      <h2 class="announcement-title text-2xl font-bold leading-tight">
        {{ $pengumuman->judul }}
      </h2>

      <div class="date-badge mb-6">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
        <span class="font-medium">{{ $pengumuman->created_at->translatedFormat('d F Y') }}</span>
      </div>

      <div class="mb-8 text-gray-700 dark:text-gray-300 leading-relaxed line-clamp-3 text-base">
        {!! Str::limit(strip_tags($pengumuman->isi), 150, '...') !!}
      </div>

      <div class="mt-auto pt-6">
        <a href="{{ route('pengumuman.show', $pengumuman->id) }}" 
           class="btn-detail text-white font-medium px-5 py-3 rounded-xl shadow-md transition-all duration-300 inline-flex items-center gap-2 group">
          <span>Lihat Detail</span>
          <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
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

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true, easing: 'ease-out-cubic' });
  </script>
</body>
</html>