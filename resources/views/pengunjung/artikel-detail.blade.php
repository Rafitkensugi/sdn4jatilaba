<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $artikel->judul }} - SDN 4 Jatilaba</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <script>
    // Inisialisasi dark mode otomatis
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

    /* ===== Background umum ===== */
    .gradient-bg {
      background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 50%, #e2e8f0 100%);
    }
    .dark .gradient-bg {
      background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
    }

    /* ===== Header Hero Pattern ===== */
    .hero-pattern {
      background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
    }
    .dark .hero-pattern {
      background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
    }

    .hero-pattern h1,
    .hero-pattern p,
    .hero-pattern span {
      color: #ffffff;
    }

    /* ===== Card Artikel ===== */
    .article-card {
      background: linear-gradient(to bottom right, #ffffff, #f0f7ff);
      border: 1px solid #e5e7eb;
      box-shadow: 0 8px 25px -8px rgba(0,0,0,0.1);
    }
    .dark .article-card {
      background: linear-gradient(to bottom right, #1e293b, #0f172a);
      border: 1px solid #334155;
      box-shadow: 0 8px 25px -8px rgba(0,0,0,0.6);
    }

    /* ===== Artikel Konten ===== */
    .article-content {
      color: #4b5563;
      line-height: 1.8;
      font-size: 1.05rem;
    }
    .dark .article-content {
      color: #e5e7eb;
    }
    
    .article-content h1 {
      margin-top: 2rem;
      margin-bottom: 1.5rem;
      font-weight: 700;
      color: #1e3a8a;
      font-size: 1.875rem;
      border-bottom: 2px solid #0066cc;
      padding-bottom: 0.5rem;
    }
    .dark .article-content h1 {
      color: #93c5fd;
      border-bottom-color: #3b82f6;
    }
    
    .article-content h2 {
      margin-top: 2.5rem;
      margin-bottom: 1rem;
      font-weight: 700;
      color: #1e3a8a;
      font-size: 1.5rem;
      border-left: 4px solid #0066cc;
      padding-left: 1rem;
    }
    .dark .article-content h2 {
      color: #93c5fd;
      border-left-color: #3b82f6;
    }
    
    .article-content h3 {
      margin-top: 2rem;
      margin-bottom: 0.75rem;
      font-weight: 600;
      color: #374151;
      font-size: 1.25rem;
    }
    .dark .article-content h3 {
      color: #d1d5db;
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
    .dark .article-content strong {
      color: #f9fafb;
    }
    
    .article-content blockquote {
      border-left: 4px solid #d1d5db;
      padding-left: 1.5rem;
      margin: 1.5rem 0;
      font-style: italic;
      color: #6b7280;
    }
    .dark .article-content blockquote {
      border-left-color: #4b5563;
      color: #9ca3af;
    }
    
    .article-content a {
      color: #2563eb;
      text-decoration: underline;
      transition: color 0.2s;
    }
    .dark .article-content a {
      color: #60a5fa;
    }
    .article-content a:hover {
      color: #1d4ed8;
    }
    .dark .article-content a:hover {
      color: #93c5fd;
    }
    
    .article-content img {
      border-radius: 0.75rem;
      margin: 2rem 0;
      width: 100%;
      height: auto;
      box-shadow: 0 10px 25px -5px rgba(0,0,0,0.15);
    }
    .dark .article-content img {
      box-shadow: 0 10px 25px -5px rgba(0,0,0,0.4);
    }

    /* ===== Info meta artikel ===== */
    .article-meta {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      margin-bottom: 2rem;
      padding: 1rem;
      background-color: #f8fafc;
      border-radius: 0.75rem;
      border-left: 4px solid #3b82f6;
    }
    .dark .article-meta {
      background-color: #1e293b;
      border-left-color: #60a5fa;
    }
    
    .meta-item {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: #4b5563;
      font-size: 0.875rem;
    }
    .dark .meta-item {
      color: #d1d5db;
    }
    
    .meta-item svg {
      width: 1rem;
      height: 1rem;
    }

    /* Perbaikan warna teks untuk info header */
    .header-info {
      color: rgba(255, 255, 255, 0.9);
    }
    .dark .header-info {
      color: rgba(255, 255, 255, 0.9);
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

<body class="gradient-bg text-gray-900 dark:text-gray-100 transition-colors duration-300">
  <x-navbar />

  <!-- HEADER -->
  <div class="relative overflow-hidden hero-pattern">
    <header class="relative z-10 py-16 md:py-20 text-white" data-aos="fade-down">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center md:text-left">
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-sm font-medium mb-6">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
          </svg>
          Artikel Sekolah
        </div>
        
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
          {{ $artikel->judul }}
        </h1>

        <div class="flex flex-col sm:flex-row sm:items-center gap-4 header-info">
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <span>{{ $artikel->created_at->format('d M Y, H:i') }}</span>
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
            </svg>
            <span>{{ number_format($artikel->views) }} kali dibaca</span>
          </div>
        </div>
      </div>
    </header>
  </div>

  <!-- MAIN -->
  <main class="max-w-4xl mx-auto px-4 sm:px-6 py-10 md:py-14">
    <article class="article-card rounded-2xl overflow-hidden transition-all duration-500 hover:-translate-y-1" data-aos="fade-up">
      <div class="relative h-64 sm:h-80 md:h-96 overflow-hidden">
        @if($artikel->gambar)
          <img src="{{ asset('storage/'.$artikel->gambar) }}" alt="{{ $artikel->judul }}" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
        @else
          <img src="https://source.unsplash.com/1200x600/?school,education,learning" alt="{{ $artikel->judul }}" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
        @endif
        <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"></div>
      </div>

      <div class="p-6 sm:p-8 md:p-10">
        <!-- Meta info tambahan -->
        <div class="article-meta">
          <div class="meta-item">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>Waktu baca: {{ $artikel->estimated_reading_time ?? '5' }} menit</span>
          </div>
          <div class="meta-item">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
            <span>Penulis: {{ $artikel->author ?? 'Admin SDN 4 Jatilaba' }}</span>
          </div>
        </div>
        
        <!-- Konten artikel -->
        <div class="article-content">
          {!! nl2br(e($artikel->isi)) !!}
        </div>
      </div>
    </article>

    <div class="mt-10 text-center" data-aos="fade-up" data-aos-delay="200">
      <a href="{{ url()->previous() }}" 
         class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 text-white px-8 py-4 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1 font-semibold group">
        <svg class="w-5 h-5 transition-transform duration-300 group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Kembali ke Artikel Lain
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