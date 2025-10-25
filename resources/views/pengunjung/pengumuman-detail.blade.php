<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light dark">
  <title>{{ $pengumuman->judul }} - SDN 4 Jatilaba</title>
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

    /* Hero Section dengan Background Image */
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

    /* Article Card */
    .article-card {
      position: relative;
      overflow: hidden;
      background: linear-gradient(to bottom, #ffffff, #fafafa);
      border: 1px solid rgba(0, 0, 0, 0.08);
      transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
      backdrop-filter: blur(10px);
    }
    
    /* Dark mode styles untuk article card */
    @media (prefers-color-scheme: dark) {
      .article-card { 
        background: linear-gradient(to bottom, #1f1f2e, #1a1a28);
        border: 1px solid rgba(139, 92, 246, 0.15);
      }
    }
    
    .dark .article-card { 
      background: linear-gradient(to bottom, #1f1f2e, #1a1a28);
      border: 1px solid rgba(139, 92, 246, 0.15);
    }

    .article-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 3px;
      background: linear-gradient(90deg, #8b5cf6, #a855f7, #c084fc);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .article-card::after {
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

    .article-card:hover::before { transform: scaleX(1); }
    .article-card:hover::after { opacity: 0.3; }
    .article-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 25px 50px rgba(139, 92, 246, 0.2), 0 10px 20px rgba(0, 0, 0, 0.15);
      border-color: rgba(139, 92, 246, 0.3);
    }
    
    /* Dark mode hover effects */
    @media (prefers-color-scheme: dark) {
      .article-card:hover {
        box-shadow: 0 25px 50px rgba(139, 92, 246, 0.3), 0 10px 20px rgba(0, 0, 0, 0.5);
      }
    }
    
    .dark .article-card:hover {
      box-shadow: 0 25px 50px rgba(139, 92, 246, 0.3), 0 10px 20px rgba(0, 0, 0, 0.5);
    }

    /* Portal Badge */
    .portal-badge {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.15), rgba(192, 132, 252, 0.1));
      border: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
    }

    /* Date Badge */
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

    /* Button Kembali */
    .btn-kembali {
      position: relative;
      overflow: hidden;
      z-index: 1;
      background: linear-gradient(135deg, #8b5cf6, #a855f7) !important;
      border: none !important;
      box-shadow: 0 4px 15px rgba(139, 92, 246, 0.4);
    }
    .btn-kembali::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, #6b2d6b, #8b5cf6, #c084fc);
      z-index: -1;
      transition: all 0.4s ease;
      transform: scaleX(0);
      transform-origin: right;
    }
    .btn-kembali:hover::before { transform: scaleX(1); transform-origin: left; }
    .btn-kembali:hover { 
      background: transparent !important; 
      box-shadow: 0 6px 25px rgba(139, 92, 246, 0.6);
      transform: translateY(-2px);
    }

    /* ===== PERBAIKAN: Artikel Konten ===== */
    .article-content {
      color: #4b5563;
      line-height: 1.8;
      font-size: 1.05rem;
    }
    
    /* PERBAIKAN: Warna text untuk dark mode */
    @media (prefers-color-scheme: dark) {
      .article-content {
        color: #e5e7eb !important;
      }
    }
    
    .dark .article-content {
      color: #e5e7eb !important;
    }
    
    .article-content h1 {
      margin-top: 2rem;
      margin-bottom: 1.5rem;
      font-weight: 700;
      color: #1e3a8a;
      font-size: 1.875rem;
      border-bottom: 2px solid #8b5cf6;
      padding-bottom: 0.5rem;
    }
    
    @media (prefers-color-scheme: dark) {
      .article-content h1 {
        color: #c084fc !important;
        border-bottom-color: #a855f7;
      }
    }
    
    .dark .article-content h1 {
      color: #c084fc !important;
      border-bottom-color: #a855f7;
    }
    
    .article-content h2 {
      margin-top: 2.5rem;
      margin-bottom: 1rem;
      font-weight: 700;
      color: #1e3a8a;
      font-size: 1.5rem;
      border-left: 4px solid #8b5cf6;
      padding-left: 1rem;
    }
    
    @media (prefers-color-scheme: dark) {
      .article-content h2 {
        color: #c084fc !important;
        border-left-color: #a855f7;
      }
    }
    
    .dark .article-content h2 {
      color: #c084fc !important;
      border-left-color: #a855f7;
    }
    
    .article-content h3 {
      margin-top: 2rem;
      margin-bottom: 0.75rem;
      font-weight: 600;
      color: #374151;
      font-size: 1.25rem;
    }
    
    @media (prefers-color-scheme: dark) {
      .article-content h3 {
        color: #d1d5db !important;
      }
    }
    
    .dark .article-content h3 {
      color: #d1d5db !important;
    }
    
    .article-content p {
      margin-bottom: 1.5rem;
    }
    
    .article-content ul, .article-content ol {
      margin-bottom: 1.5rem;
      padding-left: 1.5rem;
    }
    
    .article-content li {
      margin-bottom: 0.5rem;
    }
    
    .article-content strong {
      font-weight: 600;
      color: #1f2937;
    }
    
    @media (prefers-color-scheme: dark) {
      .article-content strong {
        color: #f9fafb !important;
      }
    }
    
    .dark .article-content strong {
      color: #f9fafb !important;
    }
    
    .article-content blockquote {
      border-left: 4px solid #d1d5db;
      padding-left: 1.5rem;
      margin: 1.5rem 0;
      font-style: italic;
      color: #6b7280;
    }
    
    @media (prefers-color-scheme: dark) {
      .article-content blockquote {
        border-left-color: #4b5563;
        color: #9ca3af !important;
      }
    }
    
    .dark .article-content blockquote {
      border-left-color: #4b5563;
      color: #9ca3af !important;
    }
    
    .article-content a {
      color: #8b5cf6;
      text-decoration: underline;
      transition: color 0.2s;
    }
    
    @media (prefers-color-scheme: dark) {
      .article-content a {
        color: #a855f7 !important;
      }
    }
    
    .dark .article-content a {
      color: #a855f7 !important;
    }
    
    .article-content a:hover {
      color: #7c3aed;
    }
    
    @media (prefers-color-scheme: dark) {
      .article-content a:hover {
        color: #c084fc !important;
      }
    }
    
    .dark .article-content a:hover {
      color: #c084fc !important;
    }
    
    .article-content img {
      border-radius: 0.75rem;
      margin: 2rem 0;
      width: 100%;
      height: auto;
      box-shadow: 0 10px 25px -5px rgba(0,0,0,0.15);
    }
    
    @media (prefers-color-scheme: dark) {
      .article-content img {
        box-shadow: 0 10px 25px -5px rgba(0,0,0,0.4);
      }
    }

    /* ===== PERBAIKAN: Info meta artikel ===== */
    .article-meta {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      margin-bottom: 2rem;
      padding: 1rem;
      background-color: #f8fafc;
      border-radius: 0.75rem;
      border-left: 4px solid #8b5cf6;
    }
    
    @media (prefers-color-scheme: dark) {
      .article-meta {
        background-color: #1e293b;
        border-left-color: #a855f7;
      }
    }
    
    .dark .article-meta {
      background-color: #1e293b;
      border-left-color: #a855f7;
    }
    
    .meta-item {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: #4b5563;
      font-size: 0.875rem;
    }
    
    /* PERBAIKAN: Warna text meta-item untuk dark mode */
    @media (prefers-color-scheme: dark) {
      .meta-item {
        color: #e5e7eb !important;
      }
    }
    
    .dark .meta-item {
      color: #e5e7eb !important;
    }
    
    .meta-item svg {
      width: 1rem;
      height: 1rem;
    }

    /* PERBAIKAN: Warna judul artikel */
    .article-title {
      color: #1f2937;
    }
    
    @media (prefers-color-scheme: dark) {
      .article-title {
        color: #f9fafb !important;
      }
    }
    
    .dark .article-title {
      color: #f9fafb !important;
    }

    /* Perbaikan warna teks untuk info header */
    .header-info {
      color: rgba(255, 255, 255, 0.9);
    }
    
    @media (prefers-color-scheme: dark) {
      .header-info {
        color: rgba(255, 255, 255, 0.9) !important;
      }
    }
    
    .dark .header-info {
      color: rgba(255, 255, 255, 0.9) !important;
    }

    /* Responsif */
    @media (max-width: 640px) {
      .article-content h1 { 
        font-size: 1.5rem; 
        margin-top: 1.5rem;
        margin-bottom: 1rem;
      }
      .article-content h2 { 
        font-size: 1.25rem; 
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
      }
      .article-content h3 { 
        font-size: 1.125rem; 
        margin-top: 1.25rem;
        margin-bottom: 0.5rem;
      }
      .article-content p, .article-content li { 
        font-size: 1rem; 
        margin-bottom: 1.25rem;
      }
      
      .article-meta {
        flex-direction: column;
        gap: 0.75rem;
        padding: 0.75rem;
      }
      
      .article-content img {
        margin: 1.5rem 0;
        border-radius: 0.5rem;
      }
      
      .article-content blockquote {
        margin: 1.25rem 0;
        padding-left: 1rem;
      }
      
      .article-content ul, .article-content ol {
        padding-left: 1.25rem;
        margin-bottom: 1.25rem;
      }
    }

    /* Perbaikan untuk layar sangat kecil */
    @media (max-width: 480px) {
      .article-content {
        font-size: 1rem;
        line-height: 1.7;
      }
      
      .article-content h1 {
        font-size: 1.375rem;
      }
      
      .article-content h2 {
        font-size: 1.125rem;
      }
      
      .article-content h3 {
        font-size: 1rem;
      }
    }
  </style>
</head>

<body class="bg-gradient-to-br from-gray-50 via-purple-50/20 to-gray-100 dark:from-gray-950 dark:via-purple-950/20 dark:to-gray-900 transition-colors duration-300">

  <x-navbar />

  <!-- Hero Header dengan Background Image -->
  <section id="home" class="hero-section py-20 md:py-32" style="background-image: url('{{ asset('images/hero.jpeg') }}');">
    <div class="floating-shapes">
      <div class="shape"></div>
      <div class="shape"></div>
      <div class="shape"></div>
      <div class="shape"></div>
    </div>

    <div class="relative z-10 text-center">
      <div class="portal-badge inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-purple-100 text-sm font-semibold mb-8" data-aos="fade-up" data-aos-delay="100">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
          <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
        </svg>
        Portal Pengumuman Resmi
      </div>

      <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight tracking-tight drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]" data-aos="fade-up" data-aos-delay="150">
        Detail Pengumuman
      </h1>

      <p class="text-white text-lg md:text-xl lg:text-2xl max-w-3xl mx-auto font-light leading-relaxed drop-shadow-[0_2px_4px_rgba(0,0,0,0.4)]" data-aos="fade-up" data-aos-delay="200">
        Informasi lengkap dan terperinci dari SDN 4 Jatilaba
      </p>

      <div class="mt-8 flex items-center justify-center gap-3" data-aos="fade-up" data-aos-delay="250">
        <div class="h-px w-16 bg-gradient-to-r from-transparent to-purple-300"></div>
        <div class="w-2 h-2 rounded-full bg-purple-300"></div>
        <div class="h-px w-16 bg-gradient-to-l from-transparent to-purple-300"></div>
      </div>
    </div>
  </section>

  <!-- MAIN CONTENT -->
  <main class="max-w-4xl mx-auto px-4 sm:px-6 py-10 md:py-14">
    <article class="article-card rounded-3xl overflow-hidden" data-aos="fade-up">
      <!-- Gambar Utama -->
      <div class="relative h-64 sm:h-80 md:h-96 overflow-hidden">
        @if($pengumuman->gambar)
          <img src="{{ asset('storage/'.$pengumuman->gambar) }}" alt="{{ $pengumuman->judul }}"
            class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
        @else
          <img src="https://source.unsplash.com/1200x600/?announcement,school,education"
            alt="{{ $pengumuman->judul }}"
            class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
        @endif
        <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"></div>
      </div>

      <!-- Konten Artikel -->
      <div class="p-6 sm:p-8 md:p-10">
        <!-- PERBAIKAN: Judul Artikel dengan class article-title -->
        <h1 class="article-title text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
          {{ $pengumuman->judul }}
        </h1>

        <!-- Meta Info -->
        <div class="flex flex-wrap items-center gap-4 mb-8">
          <div class="date-badge">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <span class="font-medium">{{ $pengumuman->created_at->translatedFormat('d F Y') }}</span>
          </div>
          
          <div class="date-badge">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            <span>{{ number_format($pengumuman->views) }} kali dilihat</span>
          </div>
        </div>

        <!-- Meta Info Tambahan -->
        <div class="article-meta">
          <div class="meta-item">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Diumumkan pada: {{ $pengumuman->created_at->format('d M Y') }}</span>
          </div>
          <div class="meta-item">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            <span>Oleh: {{ $pengumuman->author ?? 'Admin SDN 4 Jatilaba' }}</span>
          </div>
        </div>

        <!-- Isi Pengumuman -->
        <div class="article-content mt-6">
          {!! nl2br(e($pengumuman->isi)) !!}
        </div>
      </div>
    </article>

    <!-- Tombol Kembali -->
    <div class="mt-10 text-center" data-aos="fade-up" data-aos-delay="200">
      <a href="{{ url()->previous() }}"
        class="btn-kembali text-white font-medium px-8 py-4 rounded-xl shadow-md transition-all duration-300 inline-flex items-center gap-3 group">
        <svg class="w-5 h-5 transition-transform duration-300 group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        <span>Kembali ke Daftar Pengumuman</span>
      </a>
    </div>
  </main>

  <x-footer />

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true, easing: 'ease-out-cubic' });
  </script>
</body>
</html>