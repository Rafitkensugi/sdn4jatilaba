<!DOCTYPE html>
<html lang="id" class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda - SDN 4 Jatilaba</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark');
    }
  </script>
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
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">

  <x-navbar></x-navbar>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    
    <!-- Header -->
    <div class="text-center mb-8">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-2">
            Agenda & Kegiatan
        </h1>
        <p class="text-gray-600 dark:text-gray-300">
            Daftar kegiatan dan acara penting di SDN 4 Jatilaba
        </p>
    </div>

    <!-- Filter -->
    <div class="flex flex-wrap gap-2 justify-center mb-6">
        <button class="filter-btn px-4 py-2 rounded-full bg-blue-600 text-white text-sm font-medium" onclick="filterAgenda('all')">
            Semua
        </button>
        <button class="filter-btn px-4 py-2 rounded-full bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 text-sm font-medium border dark:border-gray-700" onclick="filterAgenda('oktober')">
            Oktober
        </button>
        <button class="filter-btn px-4 py-2 rounded-full bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 text-sm font-medium border dark:border-gray-700" onclick="filterAgenda('november')">
            November
        </button>
        <button class="filter-btn px-4 py-2 rounded-full bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 text-sm font-medium border dark:border-gray-700" onclick="filterAgenda('desember')">
            Desember
        </button>
    </div>

    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      @forelse($agendas as $agenda)
      <div class="agenda-card bg-white dark:bg-gray-800 rounded-xl shadow hover:shadow-lg transition-all duration-300 border dark:border-gray-700" data-month="{{ strtolower($agenda->bulan) }}">
        <div class="relative h-40 overflow-hidden rounded-t-xl">
          @if($agenda->gambar)
            <img src="{{ asset('storage/' . $agenda->gambar) }}" alt="{{ $agenda->judul }}" class="w-full h-full object-cover">
          @else
            <div class="w-full h-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-400">Tidak ada gambar</div>
          @endif

          <div class="absolute top-3 right-3 bg-white dark:bg-gray-700 rounded-lg shadow px-3 py-1 text-center">
            <div class="text-xs text-gray-500 dark:text-gray-400">{{ strtoupper(substr($agenda->bulan, 0, 3)) }}</div>
            <div class="text-lg font-bold text-gray-800 dark:text-white">{{ \Carbon\Carbon::parse($agenda->tanggal)->format('d') }}</div>
          </div>
        </div>

        <div class="p-4">
          <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">
            {{ \Carbon\Carbon::parse($agenda->tanggal)->translatedFormat('l, d F Y') }}
          </div>
          <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 line-clamp-2">
            {{ $agenda->judul }}
          </h3>
          <p class="text-sm text-gray-600 dark:text-gray-300 line-clamp-3 mb-3">
            {{ $agenda->deskripsi }}
          </p>
          <div class="text-xs text-gray-500 dark:text-gray-400 pt-2 border-t dark:border-gray-600">
            📍 {{ $agenda->lokasi ?? 'Lokasi belum ditentukan' }}
          </div>
        </div>
      </div>
      @empty
        <p class="text-gray-500 dark:text-gray-400 text-center col-span-3">Belum ada agenda yang ditambahkan.</p>
      @endforelse

    </div>
  </div>

  <x-footer></x-footer>

  <script>
    function filterAgenda(month) {
      const cards = document.querySelectorAll('.agenda-card');
      const buttons = document.querySelectorAll('.filter-btn');
      
      buttons.forEach(btn => {
        btn.className = 'filter-btn px-4 py-2 rounded-full text-sm font-medium border dark:border-gray-700';
        if (btn.textContent.toLowerCase().includes(month) || (month === 'all' && btn.textContent === 'Semua')) {
          btn.className = 'filter-btn px-4 py-2 rounded-full bg-blue-600 text-white text-sm font-medium';
        } else {
          btn.className += ' bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300';
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
