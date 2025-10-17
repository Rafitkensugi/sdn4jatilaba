<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda - SDN 4 Jatilaba</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
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
<body class="bg-gray-50">

  <x-navbar></x-navbar>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    
    <!-- Header -->
    <div class="text-center mb-8">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">
            Agenda & Kegiatan
        </h1>
        <p class="text-gray-600">
            Daftar kegiatan dan acara penting di SDN 4 Jatilaba
        </p>
    </div>

    <!-- Filter -->
    <div class="flex flex-wrap gap-2 justify-center mb-6">
        <button class="filter-btn px-4 py-2 rounded-full bg-blue-600 text-white text-sm font-medium" onclick="filterAgenda('all')">
            Semua
        </button>
        <button class="filter-btn px-4 py-2 rounded-full bg-white text-gray-700 text-sm font-medium border" onclick="filterAgenda('oktober')">
            Oktober
        </button>
        <button class="filter-btn px-4 py-2 rounded-full bg-white text-gray-700 text-sm font-medium border" onclick="filterAgenda('november')">
            November
        </button>
        <button class="filter-btn px-4 py-2 rounded-full bg-white text-gray-700 text-sm font-medium border" onclick="filterAgenda('desember')">
            Desember
        </button>
    </div>

    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <!-- Card 1 -->
      <div class="agenda-card bg-white rounded-xl shadow hover:shadow-lg transition-shadow border" data-month="oktober">
        <div class="relative h-40 overflow-hidden rounded-t-xl">
          <img 
            src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800&q=80" 
            alt="Upacara Bendera"
            class="w-full h-full object-cover"
          >
          <div class="absolute top-3 right-3 bg-white rounded-lg shadow px-3 py-1">
            <div class="text-xs text-gray-500">OKT</div>
            <div class="text-lg font-bold text-gray-800">21</div>
          </div>
        </div>

        <div class="p-4">
          <div class="text-xs text-gray-500 mb-2">Senin, 21 Oktober 2025</div>
          <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2">
            Upacara Bendera Hari Senin
          </h3>
          <p class="text-sm text-gray-600 line-clamp-3 mb-3">
            Upacara bendera rutin setiap hari Senin sebagai pembinaan karakter siswa dan peningkatan rasa nasionalisme di lingkungan sekolah.
          </p>
          <div class="text-xs text-gray-500 pt-2 border-t">
            📍 Lapangan Sekolah
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="agenda-card bg-white rounded-xl shadow hover:shadow-lg transition-shadow border" data-month="november">
        <div class="relative h-40 overflow-hidden rounded-t-xl">
          <img 
            src="https://images.unsplash.com/photo-1503676382389-4809596d5290?w=800&q=80" 
            alt="Lomba Seni"
            class="w-full h-full object-cover"
          >
          <div class="absolute top-3 right-3 bg-white rounded-lg shadow px-3 py-1">
            <div class="text-xs text-gray-500">NOV</div>
            <div class="text-lg font-bold text-gray-800">05</div>
          </div>
        </div>

        <div class="p-4">
          <div class="text-xs text-gray-500 mb-2">Selasa, 05 November 2025</div>
          <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2">
            Lomba Seni & Budaya Tingkat Sekolah
          </h3>
          <p class="text-sm text-gray-600 line-clamp-3 mb-3">
            Kompetisi seni meliputi menggambar, melukis, menyanyi, dan tari tradisional untuk mengembangkan bakat siswa di bidang seni dan budaya.
          </p>
          <div class="text-xs text-gray-500 pt-2 border-t">
            📍 Aula Sekolah
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="agenda-card bg-white rounded-xl shadow hover:shadow-lg transition-shadow border" data-month="november">
        <div class="relative h-40 overflow-hidden rounded-t-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
          <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
          <div class="absolute top-3 right-3 bg-white rounded-lg shadow px-3 py-1">
            <div class="text-xs text-gray-500">NOV</div>
            <div class="text-lg font-bold text-gray-800">15</div>
          </div>
        </div>

        <div class="p-4">
          <div class="text-xs text-gray-500 mb-2">Jumat, 15 November 2025</div>
          <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2">
            Pertemuan Orang Tua Siswa
          </h3>
          <p class="text-sm text-gray-600 line-clamp-3 mb-3">
            Agenda rutin pertemuan dengan wali murid untuk membahas perkembangan akademik dan karakter siswa selama semester berjalan.
          </p>
          <div class="text-xs text-gray-500 pt-2 border-t">
            📍 Ruang Kelas Masing-masing
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="agenda-card bg-white rounded-xl shadow hover:shadow-lg transition-shadow border" data-month="november">
        <div class="relative h-40 overflow-hidden rounded-t-xl">
          <img 
            src="https://images.unsplash.com/photo-1517649763962-0c623066013b?w=800&q=80" 
            alt="Senam Bersama"
            class="w-full h-full object-cover"
          >
          <div class="absolute top-3 right-3 bg-white rounded-lg shadow px-3 py-1">
            <div class="text-xs text-gray-500">NOV</div>
            <div class="text-lg font-bold text-gray-800">22</div>
          </div>
        </div>

        <div class="p-4">
          <div class="text-xs text-gray-500 mb-2">Jumat, 22 November 2025</div>
          <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2">
            Senam Sehat Bersama
          </h3>
          <p class="text-sm text-gray-600 line-clamp-3 mb-3">
            Kegiatan senam bersama untuk menjaga kesehatan jasmani siswa dan guru. Dilaksanakan setiap Jumat pagi dengan instruktur profesional.
          </p>
          <div class="text-xs text-gray-500 pt-2 border-t">
            📍 Halaman Sekolah
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="agenda-card bg-white rounded-xl shadow hover:shadow-lg transition-shadow border" data-month="desember">
        <div class="relative h-40 overflow-hidden rounded-t-xl">
          <img 
            src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=800&q=80" 
            alt="Kunjungan Perpustakaan"
            class="w-full h-full object-cover"
          >
          <div class="absolute top-3 right-3 bg-white rounded-lg shadow px-3 py-1">
            <div class="text-xs text-gray-500">DES</div>
            <div class="text-lg font-bold text-gray-800">01</div>
          </div>
        </div>

        <div class="p-4">
          <div class="text-xs text-gray-500 mb-2">Minggu, 01 Desember 2025</div>
          <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2">
            Kunjungan ke Perpustakaan Daerah
          </h3>
          <p class="text-sm text-gray-600 line-clamp-3 mb-3">
            Field trip ke perpustakaan daerah untuk menumbuhkan minat baca siswa dan memperkenalkan berbagai jenis buku serta cara memanfaatkan perpustakaan.
          </p>
          <div class="text-xs text-gray-500 pt-2 border-t">
            📍 Perpustakaan Kota
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="agenda-card bg-white rounded-xl shadow hover:shadow-lg transition-shadow border" data-month="desember">
        <div class="relative h-40 overflow-hidden rounded-t-xl">
          <img 
            src="https://images.unsplash.com/photo-1530103862676-de8c9debad1d?w=800&q=80" 
            alt="Perayaan Akhir Tahun"
            class="w-full h-full object-cover"
          >
          <div class="absolute top-3 right-3 bg-white rounded-lg shadow px-3 py-1">
            <div class="text-xs text-gray-500">DES</div>
            <div class="text-lg font-bold text-gray-800">20</div>
          </div>
        </div>

        <div class="p-4">
          <div class="text-xs text-gray-500 mb-2">Jumat, 20 Desember 2025</div>
          <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2">
            Perayaan Akhir Tahun & Pembagian Rapor
          </h3>
          <p class="text-sm text-gray-600 line-clamp-3 mb-3">
            Perayaan akhir semester sekaligus pembagian rapor. Akan ada penampilan dari setiap kelas dan penganugerahan siswa berprestasi.
          </p>
          <div class="text-xs text-gray-500 pt-2 border-t">
            📍 Aula Utama
          </div>
        </div>
      </div>

    </div>
  </div>

  <x-footer></x-footer>

  <script>
    function filterAgenda(month) {
      const cards = document.querySelectorAll('.agenda-card');
      const buttons = document.querySelectorAll('.filter-btn');
      
      buttons.forEach(btn => {
        btn.className = 'filter-btn px-4 py-2 rounded-full text-sm font-medium border';
        if (btn.textContent.toLowerCase().includes(month) || (month === 'all' && btn.textContent === 'Semua')) {
          btn.className = 'filter-btn px-4 py-2 rounded-full bg-blue-600 text-white text-sm font-medium';
        } else {
          btn.className += ' bg-white text-gray-700';
        }
      });
      
      cards.forEach(card => {
        if (month === 'all' || card.dataset.month === month) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    }
  </script>

</body>
</html>