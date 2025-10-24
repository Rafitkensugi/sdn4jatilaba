<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi, Misi, dan Tujuan - SDN Jatilaba 4</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'media',
        }
    </script>
    <style>
        /* Smooth transition untuk dark mode */
        * {
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }
    </style>
</head>
<body class="font-sans text-gray-800 bg-gray-50 dark:bg-gray-900 dark:text-gray-100">
    <x-navbar />
    <!-- Hero Section -->
    <section id="home" 
        class="relative py-20 md:py-32 bg-center bg-cover bg-no-repeat" 
        style="background-image: url('{{ asset('images/hero.jpeg') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/50 dark:from-black/80 dark:to-purple-900/30"></div>
        <div class="container mx-auto px-4 relative z-10 text-center text-white">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    VISI, MISI, DAN TUJUAN
                </h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto text-gray-100">
                    SD Negeri 4 Jatilaba
                </p>
            </div>
        </div>
    </section>

    <!-- Konten Utama -->
    <main class="max-w-6xl mx-auto py-12 px-4 md:px-6">

        <!-- Visi -->
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-8 mb-8">
            <div class="border-l-4 border-yellow-400 dark:border-yellow-500 pl-4 mb-8">
                <h2 class="text-2xl font-bold text-blue-900 dark:text-blue-400">VISI SEKOLAH</h2>
            </div>
            
            <p class="italic text-lg mb-8 text-gray-700 dark:text-gray-200 bg-blue-50 dark:bg-blue-900/30 p-6 rounded-lg border-l-4 border-blue-500 dark:border-blue-400">
                "Terbentuknya Warga Sekolah Berbudi Pekerti Luhur, Berprestasi dan Terampil dalam IPTEK. Dilandasi Iman dan Taqwa yang Mengedepankan Profil Pelajar Pancasila."
            </p>
            
            <h3 class="text-xl font-semibold text-blue-800 dark:text-blue-300 mb-4">Indikator Visi</h3>
            <div class="space-y-3">
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-yellow-400 dark:bg-yellow-500 text-blue-900 dark:text-blue-950 font-bold mr-3 flex-shrink-0">1</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Terbentuknya pribadi yang beriman dan taqwa</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-yellow-400 dark:bg-yellow-500 text-blue-900 dark:text-blue-950 font-bold mr-3 flex-shrink-0">2</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Terciptanya siswa berakhlakul karimah</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-yellow-400 dark:bg-yellow-500 text-blue-900 dark:text-blue-950 font-bold mr-3 flex-shrink-0">3</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Terwujudnya siswa yang unggul di bidang akademik dan non akademik</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-yellow-400 dark:bg-yellow-500 text-blue-900 dark:text-blue-950 font-bold mr-3 flex-shrink-0">4</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Terwujudnya siswa terampil dalam ilmu pengetahuan dan teknologi</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-yellow-400 dark:bg-yellow-500 text-blue-900 dark:text-blue-950 font-bold mr-3 flex-shrink-0">5</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Terlaksananya proses pembelajaran yang variatif dan inovatif berbasis teknologi informasi</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-yellow-400 dark:bg-yellow-500 text-blue-900 dark:text-blue-950 font-bold mr-3 flex-shrink-0">6</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Terciptanya hubungan yang harmonis dan sinergis dengan masyarakat sekitar sekolah</p>
                </div>
            </div>
        </section>

        <!-- Misi -->
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-8 mb-8">
            <div class="border-l-4 border-yellow-400 dark:border-yellow-500 pl-4 mb-8">
                <h2 class="text-2xl font-bold text-blue-900 dark:text-blue-400">MISI SEKOLAH</h2>
            </div>
            
            <div class="space-y-3">
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-500 dark:bg-blue-600 text-white font-bold mr-3 flex-shrink-0">1</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Meningkatkan kualitas iman dan taqwa kepada Tuhan Yang Maha Esa</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-500 dark:bg-blue-600 text-white font-bold mr-3 flex-shrink-0">2</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Meningkatkan perilaku berbudi pekerti luhur</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-500 dark:bg-blue-600 text-white font-bold mr-3 flex-shrink-0">3</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Memacu prestasi di bidang akademik dan non akademik</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-500 dark:bg-blue-600 text-white font-bold mr-3 flex-shrink-0">4</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Menumbuhkembangkan kreativitas dan keterampilan dalam bidang IPTEK</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-500 dark:bg-blue-600 text-white font-bold mr-3 flex-shrink-0">5</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Melaksanakan pembelajaran dengan model yang efektif berbasis teknologi informasi</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-500 dark:bg-blue-600 text-white font-bold mr-3 flex-shrink-0">6</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Meningkatkan kesadaran masyarakat terhadap lingkungan sekolah</p>
                </div>
            </div>
        </section>

        <!-- Tujuan -->
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-8">
            <div class="border-l-4 border-yellow-400 dark:border-yellow-500 pl-4 mb-8">
                <h2 class="text-2xl font-bold text-blue-900 dark:text-blue-400">TUJUAN SATUAN PENDIDIKAN</h2>
            </div>
            
            <p class="text-gray-700 dark:text-gray-300 mb-6">
                Berdasarkan visi dan misi sekolah, maka tujuan yang hendak dicapai tahun ajaran 2023/2024 adalah sebagai berikut:
            </p>
            
            <div class="space-y-3">
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-green-500 dark:bg-green-600 text-white font-bold mr-3 flex-shrink-0">1</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Terwujudnya lulusan yang unggul dalam bidang akademik dan non akademik serta berkarakter Pancasila</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-green-500 dark:bg-green-600 text-white font-bold mr-3 flex-shrink-0">2</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Terwujudnya pendidikan yang mengedepankan pembentukan profil pelajar Pancasila</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-green-500 dark:bg-green-600 text-white font-bold mr-3 flex-shrink-0">3</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Terwujudnya pendidikan yang menjamin hak belajar bagi setiap peserta didik</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-green-500 dark:bg-green-600 text-white font-bold mr-3 flex-shrink-0">4</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Terwujudnya pendidikan menggunakan pendekatan atau model yang beragam</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-green-500 dark:bg-green-600 text-white font-bold mr-3 flex-shrink-0">5</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Terwujudnya pendidikan yang mengembangkan keterampilan abad 21</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-green-500 dark:bg-green-600 text-white font-bold mr-3 flex-shrink-0">6</span>
                    <p class="text-gray-700 dark:text-gray-300 pt-1">Terlaksananya kegiatan belajar mengajar dengan menumbuhkan pendidikan karakter untuk seluruh mata pelajaran</p>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <x-footer />
</body>
</html>