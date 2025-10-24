<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah - SDN Jatilaba 4</title>
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
                <h2 class="text-4xl md:text-6xl font-bold mb-6 leading-tight animate-slideonce">
                PROFIL SEKOLAH
                </h2>

                <p class="text-xl mb-8 max-w-2xl mx-auto text-gray-100 fade-in" style="transition-delay: 0.2s;">
                    SD Negeri 4 Jatilaba
                </p>
            </div>
        </div>
    </section>

    <!-- Konten Utama -->
    <main class="max-w-6xl mx-auto py-12 px-4 md:px-6">

        <!-- Identitas Sekolah -->
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-8 mb-8">
            <div class="border-l-4 border-yellow-400 dark:border-yellow-500 pl-4 mb-8">
                <h2 class="text-2xl font-bold text-blue-900 dark:text-blue-400">IDENTITAS SEKOLAH</h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-x-12 gap-y-4">
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Nama Sekolah</span>
                    <span class="text-gray-600 dark:text-gray-400">: SDN Jatilaba 4</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">NPSN</span>
                    <span class="text-gray-600 dark:text-gray-400">: 20323456</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">NSS</span>
                    <span class="text-gray-600 dark:text-gray-400">: 101032401234</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Jenjang Pendidikan</span>
                    <span class="text-gray-600 dark:text-gray-400">: Sekolah Dasar (SD)</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Status Sekolah</span>
                    <span class="text-gray-600 dark:text-gray-400">: Negeri</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Akreditasi</span>
                    <span class="text-gray-600 dark:text-gray-400">: A (Unggul)</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">No. SK Akreditasi</span>
                    <span class="text-gray-600 dark:text-gray-400">: 123/BAN-SM/SK/2023</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Tanggal Akreditasi</span>
                    <span class="text-gray-600 dark:text-gray-400">: 15 November 2023</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">SK Pendirian</span>
                    <span class="text-gray-600 dark:text-gray-400">: 421.2/234/1985</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Tanggal Pendirian</span>
                    <span class="text-gray-600 dark:text-gray-400">: 1 Januari 1985</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">SK Operasional</span>
                    <span class="text-gray-600 dark:text-gray-400">: 421.2/235/1985</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Tanggal Operasional</span>
                    <span class="text-gray-600 dark:text-gray-400">: 15 Juli 1985</span>
                </div>
            </div>
        </section>

        <!-- Alamat dan Kontak -->
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-8 mb-8">
            <div class="border-l-4 border-yellow-400 dark:border-yellow-500 pl-4 mb-8">
                <h2 class="text-2xl font-bold text-blue-900 dark:text-blue-400">ALAMAT DAN KONTAK</h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-x-12 gap-y-4">
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Alamat</span>
                    <span class="text-gray-600 dark:text-gray-400">: Jalan Pendidikan No. 123</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Desa/Kelurahan</span>
                    <span class="text-gray-600 dark:text-gray-400">: Jatilaba</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Kecamatan</span>
                    <span class="text-gray-600 dark:text-gray-400">: Margasari</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Kabupaten/Kota</span>
                    <span class="text-gray-600 dark:text-gray-400">: Kabupaten Tegal</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Provinsi</span>
                    <span class="text-gray-600 dark:text-gray-400">: Jawa Tengah</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Kode Pos</span>
                    <span class="text-gray-600 dark:text-gray-400">: 52461</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Nomor Telepon</span>
                    <span class="text-gray-600 dark:text-gray-400">: (0283) 123456</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Email</span>
                    <span class="text-gray-600 dark:text-gray-400">: sdnjatilaba4@gmail.com</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Website</span>
                    <span class="text-gray-600 dark:text-gray-400">: www.sdnjatilaba4.sch.id</span>
                </div>
            </div>
        </section>

        <!-- Data Kepemimpinan -->
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-8 mb-8">
            <div class="border-l-4 border-yellow-400 dark:border-yellow-500 pl-4 mb-8">
                <h2 class="text-2xl font-bold text-blue-900 dark:text-blue-400">KEPEMIMPINAN</h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-x-12 gap-y-4">
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Kepala Sekolah</span>
                    <span class="text-gray-600 dark:text-gray-400">: Siti Aminah, S.Pd</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">NIP Kepala Sekolah</span>
                    <span class="text-gray-600 dark:text-gray-400">: 196505101987032008</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Operator Sekolah</span>
                    <span class="text-gray-600 dark:text-gray-400">: Ahmad Fauzi, S.Kom</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Bendahara</span>
                    <span class="text-gray-600 dark:text-gray-400">: Rini Susanti, S.Pd</span>
                </div>
            </div>
        </section>

        <!-- Data Statistik -->
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-8">
            <div class="border-l-4 border-yellow-400 dark:border-yellow-500 pl-4 mb-8">
                <h2 class="text-2xl font-bold text-blue-900 dark:text-blue-400">DATA STATISTIK</h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-x-12 gap-y-4">
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Jumlah Siswa</span>
                    <span class="text-gray-600 dark:text-gray-400">: 320 siswa</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Jumlah Guru</span>
                    <span class="text-gray-600 dark:text-gray-400">: 15 orang</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Jumlah Tenaga Kependidikan</span>
                    <span class="text-gray-600 dark:text-gray-400">: 5 orang</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Jumlah Rombel</span>
                    <span class="text-gray-600 dark:text-gray-400">: 12 rombongan belajar</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Luas Tanah</span>
                    <span class="text-gray-600 dark:text-gray-400">: 2.500 m²</span>
                </div>
                
                <div class="flex border-b border-gray-200 dark:border-gray-700 py-3">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-48">Luas Bangunan</span>
                    <span class="text-gray-600 dark:text-gray-400">: 1.800 m²</span>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <x-footer />

</body>
</html>