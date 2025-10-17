<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah - SDN Jatilaba 4</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<x-navbar></x-navbar>
<body class="font-sans text-gray-800 bg-gray-50">

    <!-- Hero Section -->
    <section class="relative h-[70vh] flex items-center justify-center text-center text-white">
        <img src="{{ asset('images/hero-sekolah.jpeg') }}" 
             class="absolute inset-0 w-full h-full object-cover brightness-50">
        <div class="relative z-10" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-bold text-yellow-400 drop-shadow-lg">PROFIL SDN JATILABA 4</h1>
            <p class="mt-4 text-lg md:text-2xl font-medium">Sekolah Dasar Negeri Jatilaba 4 - Membangun Generasi Unggul</p>
        </div>
    </section>

    <!-- Konten Utama -->
    <main class="max-w-6xl mx-auto py-16 px-6 space-y-16">

        <!-- Tentang Sekolah -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold text-blue-900 border-l-8 border-yellow-400 pl-4 mb-6">TENTANG SEKOLAH</h2>
            <p class="text-gray-700 leading-relaxed">
                SDN Jatilaba 4 merupakan salah satu sekolah dasar negeri yang terletak di Kecamatan Margasari, Kabupaten Tegal. 
                Sekolah ini berkomitmen untuk mencetak generasi yang berprestasi, berkarakter, serta memiliki kemampuan dalam bidang ilmu pengetahuan dan teknologi. 
                Dengan suasana belajar yang nyaman, guru yang kompeten, dan fasilitas yang terus ditingkatkan, SDN Jatilaba 4 siap mengantarkan peserta didik menuju masa depan yang cerah.
            </p>
        </section>

        <!-- Data Sekolah -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold text-blue-900 border-l-8 border-yellow-400 pl-4 mb-6">DATA SEKOLAH</h2>
            <div class="grid md:grid-cols-2 gap-6 text-gray-700">
                <ul class="space-y-2">
                    <li><strong>Nama Sekolah:</strong> SDN Jatilaba 4</li>
                    <li><strong>NPSN:</strong> 12345678</li>
                    <li><strong>Alamat:</strong> Desa Jatilaba, Kecamatan Margasari, Kabupaten Tegal</li>
                    <li><strong>Akreditasi:</strong> A</li>
                </ul>
                <ul class="space-y-2">
                    <li><strong>Kepala Sekolah:</strong> Ibu Siti Aminah, S.Pd</li>
                    <li><strong>Jumlah Guru:</strong> 15 orang</li>
                    <li><strong>Jumlah Siswa:</strong> ± 320 siswa</li>
                    <li><strong>Status:</strong> Negeri</li>
                </ul>
            </div>
        </section>

        <!-- Fasilitas -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold text-blue-900 border-l-8 border-yellow-400 pl-4 mb-6">FASILITAS SEKOLAH</h2>
            <ul class="list-disc ml-6 space-y-2 text-gray-700">
                <li>Ruang kelas yang nyaman dan memadai</li>
                <li>Laboratorium komputer dengan akses internet</li>
                <li>Perpustakaan dengan koleksi buku pelajaran dan bacaan</li>
                <li>Lapangan olahraga multifungsi</li>
                <li>Ruang UKS untuk kesehatan siswa</li>
                <li>Sarana ibadah (mushola)</li>
            </ul>
        </section>

        <!-- Kegiatan Unggulan -->
        <section data-aos="fade-up">
            <h2 class="text-3xl font-bold text-blue-900 border-l-8 border-yellow-400 pl-4 mb-6">KEGIATAN UNGGULAN</h2>
            <p class="text-gray-700 mb-4">Untuk mendukung pengembangan bakat dan minat siswa, SDN Jatilaba 4 memiliki berbagai kegiatan unggulan, antara lain:</p>
            <ul class="list-decimal ml-6 space-y-2 text-gray-700">
                <li>Ekstrakurikuler Pramuka</li>
                <li>Kegiatan olahraga (futsal, voli, bulutangkis)</li>
                <li>Kesenian tradisional (tari daerah, karawitan)</li>
                <li>Lomba akademik (OSN, literasi, matematika)</li>
                <li>Program Adiwiyata untuk peduli lingkungan</li>
            </ul>
        </section>
    </main>

  <x-footer></x-footer>

</body>
</html>
