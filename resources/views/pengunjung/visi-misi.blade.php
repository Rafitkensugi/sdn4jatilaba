<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi & Misi - SDN Jatilaba</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<x-navbar></x-navbar>
<body class="font-sans text-gray-800 bg-gray-50">

    <!-- Hero Section -->
    <section class="relative h-[70vh] flex items-center justify-center text-center text-white">
        <img src="{{ asset('images/hero.jpeg') }}" 
             class="absolute inset-0 w-full h-full object-cover brightness-50">
        <div class="relative z-10" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-bold text-yellow-400 drop-shadow-lg">VISI & MISI SDN JATILABA</h1>
            <p class="mt-4 text-lg md:text-2xl font-medium">Membangun Generasi Berbudi Pekerti Luhur & Berprestasi</p>
        </div>
    </section>

    <!-- Konten Utama -->
    <main class="max-w-6xl mx-auto py-16 px-6 space-y-16">

        <!-- Visi -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold text-blue-900 border-l-8 border-yellow-400 pl-4 mb-6">VISI SEKOLAH</h2>
            <p class="italic text-lg mb-6">"Terbentuknya Warga Sekolah Berbudi Pekerti Luhur, Berprestasi dan Terampil dalam IPTEK. Dilandasi Iman dan Taqwa yang Mengedepankan Profil Pelajar Pancasila."</p>
            
            <h3 class="text-2xl font-semibold text-blue-800 mt-8 mb-3">Indikator Visi</h3>
            <ul class="list-decimal ml-6 space-y-2 text-gray-700">
                <li>Terbentuknya pribadi yang beriman dan taqwa;</li>
                <li>Terciptanya siswa berakhlakul karimah;</li>
                <li>Terwujudnya siswa yang unggul di bidang akademik dan non akademik;</li>
                <li>Terwujudnya siswa terampil dalam ilmu pengetahuan dan teknologi;</li>
                <li>Terlaksananya proses pembelajaran yang variatif dan inovatif berbasis teknologi informasi;</li>
                <li>Terciptanya hubungan yang harmonis dan sinergis dengan masyarakat sekitar sekolah.</li>
            </ul>
        </section>

        <!-- Misi -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold text-blue-900 border-l-8 border-yellow-400 pl-4 mb-6">MISI SEKOLAH</h2>
            <ul class="list-decimal ml-6 space-y-2 text-gray-700">
                <li>Meningkatkan kualitas iman dan taqwa kepada Tuhan Yang Maha Esa;</li>
                <li>Meningkatkan perilaku berbudi pekerti luhur;</li>
                <li>Memacu prestasi di bidang akademik dan non akademik;</li>
                <li>Menumbuhkembangkan kreativitas dan keterampilan dalam bidang IPTEK;</li>
                <li>Melaksanakan pembelajaran dengan model yang efektif berbasis teknologi informasi;</li>
                <li>Meningkatkan kesadaran masyarakat terhadap lingkungan sekolah.</li>
            </ul>
        </section>

        <!-- Tujuan -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold text-blue-900 border-l-8 border-yellow-400 pl-4 mb-6">TUJUAN SATUAN PENDIDIKAN</h2>
            <p class="text-gray-700 mb-4">Berdasarkan visi dan misi sekolah, maka tujuan yang hendak dicapai tahun ajaran 2023/2024 adalah sebagai berikut:</p>
            <ul class="list-decimal ml-6 space-y-2 text-gray-700">
                <li>Terwujudnya lulusan yang unggul dalam bidang akademik dan non akademik serta berkarakter Pancasila;</li>
                <li>Terwujudnya pendidikan yang mengedepankan pembentukan profil pelajar Pancasila;</li>
                <li>Terwujudnya pendidikan yang menjamin hak belajar bagi setiap peserta didik;</li>
                <li>Terwujudnya pendidikan menggunakan pendekatan atau model yang beragam;</li>
                <li>Terwujudnya pendidikan yang mengembangkan keterampilan abad 21;</li>
                <li>Terlaksananya kegiatan belajar mengajar dengan menumbuhkan pendidikan karakter untuk seluruh mata pelajaran.</li>
            </ul>
        </section>
    </main>

  <x-footer></x-footer>

</body>
</html>
