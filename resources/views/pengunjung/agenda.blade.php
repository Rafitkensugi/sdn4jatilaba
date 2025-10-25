<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light dark">
  <title>Agenda - SDN 4 Jatilaba</title>
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
      background: linear-gradient(to right, rgba(0, 0, 0, 0.8) 0%, rgba(30, 64, 175, 0.3) 100%);
    }

    /* Floating Particles - Warna Biru */
    .floating-shapes { position: absolute; inset: 0; overflow: hidden; pointer-events: none; }
    .shape {
      position: absolute;
      background: radial-gradient(circle, rgba(59, 130, 246, 0.1), transparent 70%);
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

    /* Agenda Card - LIGHT MODE: Putih, DARK MODE: Gelap */
    .agenda-card {
      position: relative;
      overflow: hidden;
      background: #ffffff;
      border: 1px solid #e5e7eb;
      transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
      display: flex;
      flex-direction: column;
      height: 100%;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }
    
    /* Dark mode styles untuk agenda card */
    @media (prefers-color-scheme: dark) {
      .agenda-card { 
        background: #1f2937;
        border: 1px solid #374151;
      }
    }
    
    .dark .agenda-card { 
      background: #1f2937;
      border: 1px solid #374151;
    }

    /* HAPUS: Efek garis biru di atas card */
    /* .agenda-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 3px;
      background: linear-gradient(90deg, #3b82f6, #2563eb, #1d4ed8);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    } */

    /* HAPUS: Efek glow biru saat hover */
    /* .agenda-card::after {
      content: '';
      position: absolute;
      inset: -2px;
      background: linear-gradient(135deg, #3b82f6, #2563eb, #1d4ed8);
      border-radius: inherit;
      z-index: -1;
      opacity: 0;
      transition: opacity 0.5s ease;
      filter: blur(20px);
    } */

    /* HAPUS: Efek garis biru saat hover */
    /* .agenda-card:hover::before { transform: scaleX(1); } */
    
    /* HAPUS: Efek glow biru saat hover */
    /* .agenda-card:hover::after { opacity: 0.3; } */
    
    .agenda-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
      border-color: #d1d5db;
    }
    
    /* Dark mode hover effects */
    @media (prefers-color-scheme: dark) {
      .agenda-card:hover {
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        border-color: #4b5563;
      }
    }
    
    .dark .agenda-card:hover {
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
      border-color: #4b5563;
    }

    .agenda-content { 
      display:flex; 
      flex-direction:column; 
      flex:1; 
      padding:1.5rem;
      position: relative;
      z-index: 1;
    }

    .agenda-title {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      min-height: 3.5rem;
      margin-bottom: 1rem;
      color: #1f2937;
      transition: all 0.3s ease;
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      font-size: 1.25rem;
      line-height: 1.4;
    }
    
    /* Dark mode text colors */
    @media (prefers-color-scheme: dark) {
      .agenda-title {
        color: #f9fafb;
      }
    }
    
    .dark .agenda-title {
      color: #f9fafb;
    }
    
    .agenda-card:hover .agenda-title {
      color: #374151;
    }
    
    .dark .agenda-card:hover .agenda-title {
      color: #e5e7eb;
    }

    /* Text content in cards */
    .agenda-content .text-content {
      color: #4b5563;
      line-height: 1.6;
    }
    
    @media (prefers-color-scheme: dark) {
      .agenda-content .text-content {
        color: #d1d5db;
      }
    }
    
    .dark .agenda-content .text-content {
      color: #d1d5db;
    }

    /* HAPUS: Date Badge - dihapus sesuai permintaan */
    /* .date-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.5rem 1rem;
      background: rgba(59, 130, 246, 0.1);
      border: 1px solid rgba(59, 130, 246, 0.2);
      border-radius: 9999px;
      font-size: 0.875rem;
      color: #1e40af;
      transition: all 0.3s ease;
    } */

    /* Location Badge */
    .location-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.5rem 1rem;
      background: rgba(34, 197, 94, 0.1);
      border: 1px solid rgba(34, 197, 94, 0.2);
      border-radius: 9999px;
      font-size: 0.875rem;
      color: #166534;
      transition: all 0.3s ease;
    }
    
    @media (prefers-color-scheme: dark) {
      .location-badge {
        background: rgba(34, 197, 94, 0.15);
        border-color: rgba(34, 197, 94, 0.3);
        color: #4ade80;
      }
    }
    
    .dark .location-badge {
      background: rgba(34, 197, 94, 0.15);
      border-color: rgba(34, 197, 94, 0.3);
      color: #4ade80;
    }

    /* Empty State */
    .empty-state {
      background: rgba(59, 130, 246, 0.03);
      border: 2px dashed rgba(59, 130, 246, 0.2);
      position: relative;
      overflow: hidden;
    }
    
    @media (prefers-color-scheme: dark) {
      .empty-state {
        background: rgba(59, 130, 246, 0.08);
        border: 2px dashed rgba(59, 130, 246, 0.3);
      }
    }
    
    .empty-state::before {
      content: '';
      position: absolute;
      inset: -50%;
      background: conic-gradient(from 180deg at 50% 50%, transparent 0deg, rgba(59, 130, 246, 0.05) 180deg, transparent 360deg);
      animation: rotate 20s linear infinite;
    }
    @keyframes rotate { to { transform: rotate(360deg); } }
    .dark .empty-state {
      background: rgba(59, 130, 246, 0.08);
      border: 2px dashed rgba(59, 130, 246, 0.3);
    }

    /* Portal Badge */
    .portal-badge {
      background: rgba(255, 255, 255, 0.15);
      border: 1px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      color: white;
    }

    /* Filter Buttons */
    .filter-btn {
      padding: 0.5rem 1.5rem;
      border-radius: 9999px;
      font-size: 0.875rem;
      font-weight: 500;
      transition: all 0.3s ease;
      border: 1px solid #d1d5db;
      background: white;
      color: #374151;
    }
    
    .filter-btn.active {
      background: #374151;
      color: white;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      border-color: #374151;
    }
    
    .filter-btn:not(.active):hover {
      background: #f3f4f6;
      border-color: #9ca3af;
    }
    
    @media (prefers-color-scheme: dark) {
      .filter-btn:not(.active) {
        background: #374151;
        color: #d1d5db;
        border-color: #4b5563;
      }
      
      .filter-btn:not(.active):hover {
        background: #4b5563;
        border-color: #6b7280;
      }
      
      .filter-btn.active {
        background: #60a5fa;
        color: white;
        border-color: #60a5fa;
      }
    }
    
    .dark .filter-btn:not(.active) {
      background: #374151;
      color: #d1d5db;
      border-color: #4b5563;
    }
    
    .dark .filter-btn:not(.active):hover {
      background: #4b5563;
      border-color: #6b7280;
    }
    
    .dark .filter-btn.active {
      background: #60a5fa;
      color: white;
      border-color: #60a5fa;
    }

    /* Background body untuk light dan dark mode */
    .body-bg {
      background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    }
    
    @media (prefers-color-scheme: dark) {
      .body-bg {
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
      }
    }
    
    .dark .body-bg {
      background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    }

    /* Date indicator di gambar */
    .date-indicator {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
    }
    
    @media (prefers-color-scheme: dark) {
      .date-indicator {
        background: rgba(31, 41, 55, 0.95);
      }
    }
    
    .dark .date-indicator {
      background: rgba(31, 41, 55, 0.95);
    }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
  </style>
</head>

<body class="body-bg text-gray-900 dark:text-gray-100 transition-colors duration-300">

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
      <div class="portal-badge inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-sm font-semibold mb-8" data-aos="fade-up" data-aos-delay="100">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
        </svg>
        Kalender Kegiatan Sekolah
      </div>

      <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight tracking-tight drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]" data-aos="fade-up" data-aos-delay="150">
        Agenda & Kegiatan
      </h1>

      <p class="text-white text-lg md:text-xl lg:text-2xl max-w-3xl mx-auto font-light leading-relaxed drop-shadow-[0_2px_4px_rgba(0,0,0,0.4)]" data-aos="fade-up" data-aos-delay="200">
        Jadwal kegiatan dan acara terbaru di SDN 4 Jatilaba
      </p>

      <div class="mt-8 flex items-center justify-center gap-3" data-aos="fade-up" data-aos-delay="250">
        <div class="h-px w-16 bg-gradient-to-r from-transparent to-blue-300"></div>
        <div class="w-2 h-2 rounded-full bg-blue-300"></div>
        <div class="h-px w-16 bg-gradient-to-l from-transparent to-blue-300"></div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
    
    <!-- Filter Buttons - Hanya muncul jika ada agenda -->
    @if (!$agendas->isEmpty())
    <div class="flex flex-wrap justify-center gap-3 mb-12" data-aos="fade-up" id="filter-buttons">
      <button class="filter-btn active" onclick="filterAgenda('all')">
        Semua Agenda
      </button>
      <!-- Filter bulan akan di-generate oleh JavaScript berdasarkan data yang ada -->
    </div>
    @endif

    @if ($agendas->isEmpty())
      <!-- Empty State -->
      <div class="empty-state rounded-3xl p-12 md:p-20 text-center max-w-2xl mx-auto relative z-10" data-aos="fade-up">
        <div class="w-24 h-24 md:w-28 md:h-28 mx-auto mb-8 bg-gradient-to-br from-blue-600 via-blue-500 to-blue-400 rounded-full flex items-center justify-center shadow-2xl relative" data-aos="zoom-in" data-aos-delay="100">
          <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-400 rounded-full animate-ping opacity-20"></div>
          <svg class="w-12 h-12 md:w-14 md:h-14 text-white relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class="font-display text-2xl md:text-3xl font-bold text-gray-900 dark:text-gray-100 mb-4">Belum Ada Agenda</h3>
        <p class="text-gray-600 dark:text-gray-400 text-base md:text-lg leading-relaxed">
          Saat ini belum ada agenda kegiatan yang dijadwalkan. Agenda akan segera dipublikasikan untuk informasi kegiatan sekolah.
        </p>
      </div>
    @else
      <!-- Grid Agenda -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10" id="agenda-grid">
        @foreach ($agendas as $agenda)
          <div class="agenda-card rounded-2xl overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}" data-month="{{ strtolower($agenda->bulan) }}">
            
            <!-- Thumbnail -->
            <div class="relative overflow-hidden group h-48">
              @if ($agenda->gambar)
                <img src="{{ asset('storage/' . $agenda->gambar) }}" 
                     alt="{{ $agenda->judul }}" 
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
              @else
                <div class="w-full h-full bg-gradient-to-br from-gray-400 to-gray-600 flex items-center justify-center">
                  <svg class="w-16 h-16 text-white opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                  </svg>
                </div>
              @endif

              <!-- Date Indicator -->
              <div class="date-indicator absolute top-4 right-4 rounded-xl shadow-lg p-3 text-center min-w-16">
                <div class="text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wide">
                  {{ strtoupper(substr($agenda->bulan, 0, 3)) }}
                </div>
                <div class="text-xl font-bold text-gray-800 dark:text-white mt-1">
                  {{ \Carbon\Carbon::parse($agenda->tanggal)->format('d') }}
                </div>
              </div>
            </div>

            <!-- Konten -->
            <div class="agenda-content">
              <h2 class="agenda-title">
                {{ $agenda->judul }}
              </h2>

              <!-- HAPUS: Date Badge dihapus sesuai permintaan -->

              <div class="mb-6 text-content leading-relaxed line-clamp-3 text-sm flex-grow">
                {{ $agenda->deskripsi }}
              </div>

              <div class="location-badge mt-auto">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span class="font-medium">{{ $agenda->lokasi ?? 'Lokasi belum ditentukan' }}</span>
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

    // Generate filter buttons berdasarkan bulan yang ada di data
    function generateMonthFilters() {
      const cards = document.querySelectorAll('.agenda-card');
      const filterContainer = document.getElementById('filter-buttons');
      
      if (!filterContainer) return;
      
      const months = new Set();
      
      // Kumpulkan semua bulan unik dari data agenda
      cards.forEach(card => {
        months.add(card.dataset.month);
      });
      
      // Urutkan bulan berdasarkan urutan kalender
      const monthOrder = {
        'januari': 1, 'februari': 2, 'maret': 3, 'april': 4, 'mei': 5, 'juni': 6,
        'juli': 7, 'agustus': 8, 'september': 9, 'oktober': 10, 'november': 11, 'desember': 12
      };
      
      const sortedMonths = Array.from(months).sort((a, b) => monthOrder[a] - monthOrder[b]);
      
      // Tambahkan tombol filter untuk setiap bulan
      sortedMonths.forEach(month => {
        const button = document.createElement('button');
        button.className = 'filter-btn';
        button.textContent = capitalizeFirstLetter(month);
        button.onclick = () => filterAgenda(month);
        filterContainer.appendChild(button);
      });
    }

    // Fungsi untuk membuat huruf pertama kapital
    function capitalizeFirstLetter(string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    }

    // Fungsi filter agenda
    function filterAgenda(month) {
      const cards = document.querySelectorAll('.agenda-card');
      const buttons = document.querySelectorAll('.filter-btn');
      
      // Update active button
      buttons.forEach(btn => {
        btn.classList.remove('active');
        if ((month === 'all' && btn.textContent.includes('Semua')) || 
            btn.textContent.toLowerCase() === month) {
          btn.classList.add('active');
        }
      });
      
      // Show/hide cards
      cards.forEach(card => {
        if (month === 'all' || card.dataset.month === month) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    }

    // Jalankan generate filter ketika halaman dimuat
    document.addEventListener('DOMContentLoaded', function() {
      generateMonthFilters();
    });
  </script>
</body>
</html>