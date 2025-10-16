<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contoh Card Agenda - SDN 4 Jatilaba</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .animate-fade-in {
        animation: fadeIn 0.6s ease-in;
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
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
<body class="bg-gradient-to-br from-gray-50 to-blue-50 py-12">

    <x-navbar></x-navbar>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Header Section -->
    <div class="text-center mb-12 animate-fade-in">
        <div class="inline-block mb-4">
            <span class="bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold">
                Agenda Sekolah
            </span>
        </div>
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
            Agenda & Kegiatan
        </h1>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto">
            Daftar kegiatan dan acara penting yang akan datang di SDN 4 Jatilaba
        </p>
    </div>

    <!-- Grid Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Card 1: Dengan Gambar (Upacara Bendera) -->
      <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 group">
        
        <!-- Image Section -->
        <div class="relative h-48 overflow-hidden">
          <img 
            src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800&q=80" 
            alt="Upacara Bendera"
            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
          >
          
          <!-- Date Badge Overlay -->
          <div class="absolute top-4 right-4 bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white px-4 py-1 text-center">
              <div class="text-xs font-semibold uppercase">Okt</div>
            </div>
            <div class="px-4 py-2 text-center">
              <div class="text-2xl font-bold text-gray-800">21</div>
            </div>
          </div>
        </div>

        <!-- Content Section -->
        <div class="p-6">
          <div class="flex items-center text-sm text-gray-500 mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="font-medium">Senin, 21 Oktober 2025</span>
          </div>

          <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 min-h-[3.5rem]">
            Upacara Bendera Hari Senin
          </h3>
          
          <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 mb-4">
            Upacara bendera rutin setiap hari Senin sebagai pembinaan karakter siswa dan peningkatan rasa nasionalisme di lingkungan sekolah.
          </p>

          <div class="flex items-center text-sm text-gray-500 mt-3 pt-3 border-t border-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span>Lapangan Sekolah</span>
          </div>
        </div>

        <div class="px-6 pb-6">
          <button class="w-full bg-blue-50 hover:bg-blue-100 text-blue-600 font-semibold py-3 rounded-lg transition-colors duration-200 flex items-center justify-center">
            <span>Lihat Detail</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Card 2: Dengan Gambar (Lomba Seni) -->
      <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 group">
        
        <div class="relative h-48 overflow-hidden">
          <img 
            src="https://images.unsplash.com/photo-1503676382389-4809596d5290?w=800&q=80" 
            alt="Lomba Seni"
            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
          >
          
          <div class="absolute top-4 right-4 bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white px-4 py-1 text-center">
              <div class="text-xs font-semibold uppercase">Nov</div>
            </div>
            <div class="px-4 py-2 text-center">
              <div class="text-2xl font-bold text-gray-800">05</div>
            </div>
          </div>
        </div>

        <div class="p-6">
          <div class="flex items-center text-sm text-gray-500 mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="font-medium">Selasa, 05 November 2025</span>
          </div>

          <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 min-h-[3.5rem]">
            Lomba Seni & Budaya Tingkat Sekolah
          </h3>
          
          <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 mb-4">
            Kompetisi seni meliputi menggambar, melukis, menyanyi, dan tari tradisional untuk mengembangkan bakat siswa di bidang seni dan budaya.
          </p>

          <div class="flex items-center text-sm text-gray-500 mt-3 pt-3 border-t border-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span>Aula Sekolah</span>
          </div>
        </div>

        <div class="px-6 pb-6">
          <button class="w-full bg-blue-50 hover:bg-blue-100 text-blue-600 font-semibold py-3 rounded-lg transition-colors duration-200 flex items-center justify-center">
            <span>Lihat Detail</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Card 3: Tanpa Gambar (Placeholder) -->
      <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 group">
        
        <div class="relative h-48 overflow-hidden">
          <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-blue-500 to-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-white opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </div>
          
          <div class="absolute top-4 right-4 bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white px-4 py-1 text-center">
              <div class="text-xs font-semibold uppercase">Nov</div>
            </div>
            <div class="px-4 py-2 text-center">
              <div class="text-2xl font-bold text-gray-800">15</div>
            </div>
          </div>
        </div>

        <div class="p-6">
          <div class="flex items-center text-sm text-gray-500 mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="font-medium">Jumat, 15 November 2025</span>
          </div>

          <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 min-h-[3.5rem]">
            Pertemuan Orang Tua Siswa
          </h3>
          
          <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 mb-4">
            Agenda rutin pertemuan dengan wali murid untuk membahas perkembangan akademik dan karakter siswa selama semester berjalan.
          </p>

          <div class="flex items-center text-sm text-gray-500 mt-3 pt-3 border-t border-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span>Ruang Kelas Masing-masing</span>
          </div>
        </div>

        <div class="px-6 pb-6">
          <button class="w-full bg-blue-50 hover:bg-blue-100 text-blue-600 font-semibold py-3 rounded-lg transition-colors duration-200 flex items-center justify-center">
            <span>Lihat Detail</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Card 4: Dengan Gambar (Olahraga) -->
      <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 group">
        
        <div class="relative h-48 overflow-hidden">
          <img 
            src="https://images.unsplash.com/photo-1517649763962-0c623066013b?w=800&q=80" 
            alt="Senam Bersama"
            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
          >
          
          <div class="absolute top-4 right-4 bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white px-4 py-1 text-center">
              <div class="text-xs font-semibold uppercase">Nov</div>
            </div>
            <div class="px-4 py-2 text-center">
              <div class="text-2xl font-bold text-gray-800">22</div>
            </div>
          </div>
        </div>

        <div class="p-6">
          <div class="flex items-center text-sm text-gray-500 mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="font-medium">Jumat, 22 November 2025</span>
          </div>

          <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 min-h-[3.5rem]">
            Senam Sehat Bersama
          </h3>
          
          <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 mb-4">
            Kegiatan senam bersama untuk menjaga kesehatan jasmani siswa dan guru. Dilaksanakan setiap Jumat pagi dengan instruktur profesional.
          </p>

          <div class="flex items-center text-sm text-gray-500 mt-3 pt-3 border-t border-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span>Halaman Sekolah</span>
          </div>
        </div>

        <div class="px-6 pb-6">
          <button class="w-full bg-blue-50 hover:bg-blue-100 text-blue-600 font-semibold py-3 rounded-lg transition-colors duration-200 flex items-center justify-center">
            <span>Lihat Detail</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Card 5: Dengan Gambar (Perpustakaan) -->
      <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 group">
        
        <div class="relative h-48 overflow-hidden">
          <img 
            src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=800&q=80" 
            alt="Kunjungan Perpustakaan"
            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
          >
          
          <div class="absolute top-4 right-4 bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white px-4 py-1 text-center">
              <div class="text-xs font-semibold uppercase">Des</div>
            </div>
            <div class="px-4 py-2 text-center">
              <div class="text-2xl font-bold text-gray-800">01</div>
            </div>
          </div>
        </div>

        <div class="p-6">
          <div class="flex items-center text-sm text-gray-500 mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="font-medium">Minggu, 01 Desember 2025</span>
          </div>

          <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 min-h-[3.5rem]">
            Kunjungan ke Perpustakaan Daerah
          </h3>
          
          <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 mb-4">
            Field trip ke perpustakaan daerah untuk menumbuhkan minat baca siswa dan memperkenalkan berbagai jenis buku serta cara memanfaatkan perpustakaan.
          </p>

          <div class="flex items-center text-sm text-gray-500 mt-3 pt-3 border-t border-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span>Perpustakaan Kota</span>
          </div>
        </div>

        <div class="px-6 pb-6">
          <button class="w-full bg-blue-50 hover:bg-blue-100 text-blue-600 font-semibold py-3 rounded-lg transition-colors duration-200 flex items-center justify-center">
            <span>Lihat Detail</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Card 6: Dengan Gambar (Perayaan) -->
      <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 group">
        
        <div class="relative h-48 overflow-hidden">
          <img 
            src="https://images.unsplash.com/photo-1530103862676-de8c9debad1d?w=800&q=80" 
            alt="Perayaan Akhir Tahun"
            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
          >
          
          <div class="absolute top-4 right-4 bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white px-4 py-1 text-center">
              <div class="text-xs font-semibold uppercase">Des</div>
            </div>
            <div class="px-4 py-2 text-center">
              <div class="text-2xl font-bold text-gray-800">20</div>
            </div>
          </div>
        </div>

        <div class="p-6">
          <div class="flex items-center text-sm text-gray-500 mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="font-medium">Jumat, 20 Desember 2025</span>
          </div>

          <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 min-h-[3.5rem]">
            Perayaan Akhir Tahun & Pembagian Rapor
          </h3>
          
          <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 mb-4">
            Perayaan akhir semester sekaligus pembagian rapor. Akan ada penampilan dari setiap kelas dan penganugerahan siswa berprestasi.
          </p>

          <div class="flex items-center text-sm text-gray-500 mt-3 pt-3 border-t border-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span>Aula Utama</span>
          </div>
        </div>

        <div class="px-6 pb-6">
          <button class="w-full bg-blue-50 hover:bg-blue-100 text-blue-600 font-semibold py-3 rounded-lg transition-colors duration-200 flex items-center justify-center">
            <span>Lihat Detail</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
      </div>

    </div>
  </div>
  
<x-footer></x-footer>


</body>
</html>