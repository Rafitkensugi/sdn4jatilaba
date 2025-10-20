<!DOCTYPE html>
<html lang="id" class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sambutan Kepala Sekolah SDN 4 Jatilaba">
  <title>Sambutan Kepala Sekolah - SDN 4 Jatilaba</title>
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Dark mode script -->
  <script>
    // Inisialisasi dark mode berdasarkan preferensi sistem
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark');
    }
  </script>
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200 antialiased transition-colors duration-300">

  <!-- Navbar -->
  <x-navbar></x-navbar>

  {{-- <!-- Elegant Header -->
  <header class="relative bg-gradient-to-br from-[#002147] to-blue-800 dark:from-gray-900 dark:to-gray-800 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/asfalt-light.png')] opacity-10 dark:opacity-5"></div>
    <div class="relative max-w-5xl mx-auto px-6 text-center">
      <h1 class="text-4xl md:text-5xl font-extrabold mb-4 drop-shadow-lg">
        Sambutan Kepala Sekolah
      </h1>
      <p class="text-blue-100 dark:text-blue-300 text-lg">SDN 4 Jatilaba</p>
    </div>
  </header> --}}

<!-- Hero Section -->
    <section class="relative h-[70vh] flex items-center justify-center text-center text-white">
        <img src="{{ asset('images/hero.jpeg') }}" 
             class="absolute inset-0 w-full h-full object-cover brightness-50">
        <div class="relative z-10" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-bold text-yellow-400 drop-shadow-lg">Sambutan Kepala Sekolah</h1>
            <p class="mt-4 text-lg md:text-2xl font-medium">SDN 04 Jatilaba</p>
        </div>
    </section>

  <!-- Main Content -->
  <main class="max-w-5xl mx-auto px-6 py-16">
    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 p-8 md:p-12 hover:shadow-2xl transition-all duration-300 ease-in-out">

      <div class="flex flex-col md:flex-row items-center gap-10">
        
        <!-- Photo -->
        <div class="flex-shrink-0">
          <div class="relative">
            <img src="https://www.wowkeren.com/images/photo/cristiano_ronaldo.jpg" 
                 alt="Kepala Sekolah SDN 4 Jatilaba" 
                 class="w-56 h-56 object-cover rounded-xl shadow-md ring-4 ring-blue-100 dark:ring-gray-600 transition-transform duration-300 hover:scale-105">
            <div class="absolute -bottom-3 -right-3 bg-blue-600 dark:bg-blue-700 text-white text-xs px-3 py-1 rounded-full shadow-lg">
              Sri Nurhayati, S.Pd.SD
            </div>
          </div>
        </div>

        <!-- Text Content -->
        <div class="flex-1 space-y-6">
          <!-- Opening -->
          <div class="text-center md:text-left">
            <p class="text-[#002147] dark:text-blue-400 font-semibold text-xl mb-2 tracking-wide">
              بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم
            </p>
            <p class="text-[#002147] dark:text-blue-400 font-semibold text-lg italic">
              Assalamu'alaikum Warahmatullahi Wabarakatuh
            </p>
          </div>

          <!-- Body -->
          <div class="space-y-4 text-gray-700 dark:text-gray-300 leading-relaxed text-justify">
            <p>
              Puji syukur kita panjatkan ke hadirat Allah SWT atas limpahan rahmat dan karunia-Nya,
              sehingga website SDN 4 Jatilaba ini dapat terus berkembang dan memberikan informasi
              kepada masyarakat luas. Kami berkomitmen untuk membangun generasi penerus bangsa yang
              <span class="font-semibold text-blue-700 dark:text-blue-400">berkarakter</span>,
              <span class="font-semibold text-blue-700 dark:text-blue-400">berprestasi</span>, dan
              <span class="font-semibold text-blue-700 dark:text-blue-400">berakhlak mulia</span>.
            </p>
            
            <p>
              Terima kasih atas dukungan seluruh pihak yang telah berkontribusi terhadap kemajuan sekolah ini.
              Semoga keberadaan website ini dapat menjadi media komunikasi dan informasi yang bermanfaat
              bagi kita semua.
            </p>
          </div>

          <!-- Closing -->
          <div class="pt-6 text-center md:text-left">
            <p class="text-[#002147] dark:text-blue-400 font-semibold italic mb-4">
              Wassalamu'alaikum Warahmatullahi Wabarakatuh
            </p>
            <p class="text-gray-600 dark:text-gray-400">Hormat kami,</p>
            <p class="text-xl font-bold text-[#002147] dark:text-blue-400 mt-1">
              Kepala Sekolah SDN 4 Jatilaba
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <x-footer></x-footer>

</body>
</html>