<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi & Misi - SDN Jatilaba</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
<body class="font-sans text-gray-800 bg-gray-50 dark:bg-gray-900 dark:text-gray-200 transition-colors duration-300">

    <x-navbar></x-navbar>

    <!-- Hero Section -->
  <section class="relative h-[70vh] flex items-center justify-center text-center text-white">
        <img src="{{ asset('images/hero.jpeg') }}" 
             class="absolute inset-0 w-full h-full object-cover brightness-50">
        <div class="relative z-10" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-bold text-yellow-400 drop-shadow-lg">VISI & MISI</h1>
            <p class="mt-4 text-lg md:text-2xl font-medium">Membangun Generasi Berbudi Pekerti Luhur & Berprestasi</p>
        </div>
    </section>

    <!-- Konten Utama -->
    <main class="max-w-6xl mx-auto py-16 px-6 space-y-16">

        <!-- Visi -->
        <section data-aos="fade-up" class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 md:p-8 transition-colors duration-300">
            <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-300 border-l-8 border-yellow-400 pl-4 mb-6">VISI SEKOLAH</h2>
            <p class="italic text-lg mb-6 text-gray-700 dark:text-gray-300 leading-relaxed">"Terbentuknya Warga Sekolah Berbudi Pekerti Luhur, Berprestasi dan Terampil dalam IPTEK. Dilandasi Iman dan Taqwa yang Mengedepankan Profil Pelajar Pancasila."</p>
            
            <h3 class="text-2xl font-semibold text-blue-800 dark:text-blue-300 mt-8 mb-3">Indikator Visi</h3>
            <ul class="list-decimal ml-6 space-y-2 text-gray-700 dark:text-gray-300">
                <li class="leading-relaxed">Terbentuknya pribadi yang beriman dan taqwa;</li>
                <li class="leading-relaxed">Terciptanya siswa berakhlakul karimah;</li>
                <li class="leading-relaxed">Terwujudnya siswa yang unggul di bidang akademik dan non akademik;</li>
                <li class="leading-relaxed">Terwujudnya siswa terampil dalam ilmu pengetahuan dan teknologi;</li>
                <li class="leading-relaxed">Terlaksananya proses pembelajaran yang variatif dan inovatif berbasis teknologi informasi;</li>
                <li class="leading-relaxed">Terciptanya hubungan yang harmonis dan sinergis dengan masyarakat sekitar sekolah.</li>
            </ul>
        </section>

        <!-- Misi -->
        <section data-aos="fade-up" class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 md:p-8 transition-colors duration-300">
            <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-300 border-l-8 border-yellow-400 pl-4 mb-6">MISI SEKOLAH</h2>
            <ul class="list-decimal ml-6 space-y-2 text-gray-700 dark:text-gray-300">
                <li class="leading-relaxed">Meningkatkan kualitas iman dan taqwa kepada Tuhan Yang Maha Esa;</li>
                <li class="leading-relaxed">Meningkatkan perilaku berbudi pekerti luhur;</li>
                <li class="leading-relaxed">Memacu prestasi di bidang akademik dan non akademik;</li>
                <li class="leading-relaxed">Menumbuhkembangkan kreativitas dan keterampilan dalam bidang IPTEK;</li>
                <li class="leading-relaxed">Melaksanakan pembelajaran dengan model yang efektif berbasis teknologi informasi;</li>
                <li class="leading-relaxed">Meningkatkan kesadaran masyarakat terhadap lingkungan sekolah.</li>
            </ul>
        </section>

        <!-- Tujuan -->
        <section data-aos="fade-up" class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 md:p-8 transition-colors duration-300">
            <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-300 border-l-8 border-yellow-400 pl-4 mb-6">TUJUAN SATUAN PENDIDIKAN</h2>
            <p class="text-gray-700 dark:text-gray-300 mb-4 leading-relaxed">Berdasarkan visi dan misi sekolah, maka tujuan yang hendak dicapai tahun ajaran 2023/2024 adalah sebagai berikut:</p>
            <ul class="list-decimal ml-6 space-y-2 text-gray-700 dark:text-gray-300">
                <li class="leading-relaxed">Terwujudnya lulusan yang unggul dalam bidang akademik dan non akademik serta berkarakter Pancasila;</li>
                <li class="leading-relaxed">Terwujudnya pendidikan yang mengedepankan pembentukan profil pelajar Pancasila;</li>
                <li class="leading-relaxed">Terwujudnya pendidikan yang menjamin hak belajar bagi setiap peserta didik;</li>
                <li class="leading-relaxed">Terwujudnya pendidikan menggunakan pendekatan atau model yang beragam;</li>
                <li class="leading-relaxed">Terwujudnya pendidikan yang mengembangkan keterampilan abad 21;</li>
                <li class="leading-relaxed">Terlaksananya kegiatan belajar mengajar dengan menumbuhkan pendidikan karakter untuk seluruh mata pelajaran.</li>
            </ul>
        </section>
    </main>

    <x-footer></x-footer>

</body>
</html>
