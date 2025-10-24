<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sejarah — SDN Jatilaba 4</title>
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
<body class="font-sans text-gray-800 bg-gray-50 dark:bg-gray-900 dark:text-gray-200">

    <!-- Navbar -->
    <x-navbar></x-navbar>

    <!-- Hero Section -->
    <section class="relative h-[60vh] flex items-center justify-center text-center text-white">
        <img src="{{ asset('images/sejarah-hero.jpg') }}"
             class="absolute inset-0 w-full h-full object-cover brightness-50 dark:brightness-75"
             alt="Sejarah SDN Jatilaba 4" />
        <div class="relative z-10 px-4" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-bold text-yellow-400 drop-shadow-lg">
                SEJARAH SDN JATILABA 4
            </h1>
            <p class="mt-4 text-lg md:text-2xl font-medium text-white dark:text-gray-100">
                "Menelusur Jejak Dulu, Merajut Masa Depan"
            </p>
        </div>
    </section>

    <!-- Konten Utama -->
    <main class="max-w-6xl mx-auto py-16 px-4 md:px-6 space-y-16">

        <!-- Pendahuluan / Latar Belakang -->
        <section data-aos="fade-up" class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 md:p-8">
            <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-300 border-l-8 border-yellow-400 pl-4 mb-6">
                LATAR BELAKANG
            </h2>
            <p class="text-gray-700 dark:text-gray-300">
                SD Negeri Jatilaba 4 atau SDN Jatilaba 04 adalah sekolah dasar negeri yang berlokasi di Jl. Keplik 01 RT 01 RW 01, Desa Jatilaba, Kecamatan Margasari, Kabupaten Tegal, Jawa Tengah.  
                Berdasarkan catatan sekolah lokal, sekolah ini resmi berdiri pada tanggal 1 Agustus 1985 melalui SK pendirian dan SK izin operasional yang dikeluarkan pada tahun yang sama.  
                Seiring waktu, sekolah ini berkembang dengan fasilitas dan tenaga pendidik untuk melayani masyarakat di sekitar desa Jatilaba.  
            </p>
        </section>

        <!-- Kronologi / Perjalanan Sejarah -->
        <section data-aos="fade-up" class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 md:p-8">
            <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-300 border-l-8 border-yellow-400 pl-4 mb-6">
                KRONOLOGI SEJARAH
            </h2>
            <div class="space-y-8 text-gray-700 dark:text-gray-300">
                <div>
                    <h3 class="text-2xl font-semibold text-blue-800 dark:text-blue-300 mb-2">1985: Pendirian Sekolah</h3>
                    <p>
                        Pada tanggal <strong>1 Agustus 1985</strong>, SDN Jatilaba 4 didirikan dengan SK Pendirian dan SK Izin Operasional yang dikeluarkan pada tahun tersebut.  
                        Pada awalnya, sekolah ini hanya memiliki ruang kelas dasar, jumlah siswa dan guru yang terbatas, serta fasilitas yang sederhana.
                    </p>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-blue-800 dark:text-blue-300 mb-2">Perkembangan Sarana dan Tenaga Pendidik</h3>
                    <p>
                        Seiring pertumbuhan jumlah siswa dan dukungan masyarakat, sekolah membuka ruang kelas tambahan serta perlengkapan fasilitas seperti perpustakaan.  
                        Berdasarkan data tahun 2021, sekolah memiliki sekitar 10 ruang kelas, satu ruang perpustakaan, dan total tenaga pendidik/tenaga kependidikan sebanyak 16 orang.  
                        Data ini mencerminkan bahwa sekolah terus berupaya meningkatkan layanan pendidikan.  
                    </p>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-blue-800 dark:text-blue-300 mb-2">Penerapan Kurikulum & Adaptasi</h3>
                    <p>
                        Untuk mempertahankan kualitas pendidikan, SDN Jatilaba 4 mengikuti Kurikulum 2013 (K13).  
                        Sekolah juga menyesuaikan dengan perubahan kebijakan, misalnya peningkatan kompetensi guru, penggunaan metode pembelajaran yang lebih interaktif, serta adaptasi teknologi informasi.
                    </p>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-blue-800 dark:text-blue-300 mb-2">Momen Khusus & Prestasi</h3>
                    <p>
                        <ul class="list-disc ml-6 space-y-1">
                            <li>Terdapat catatan bahwa batu misterius (diduga meteor) ditemukan oleh seorang siswa SDN Jatilaba 4 bernama Ibnu dari kelas 4.</li>
                            <li>Sekolah terus berpartisipasi dalam lomba akademik dan non-akademik di tingkat kecamatan.</li>
                            <li>Komite sekolah dan masyarakat desa turut mendukung pengembangan sarana hingga renovasi bangunan.</li>
                        </ul>
                    </p>
                </div>
            </div>
        </section>

        <!-- Makna & Filosofi Nama / Motto -->
        <section data-aos="fade-up" class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 md:p-8">
            <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-300 border-l-8 border-yellow-400 pl-4 mb-6">
                MAKSUD, MAUSAN, & FILOSOFI
            </h2>
            <div class="space-y-6 text-gray-700 dark:text-gray-300">
                <p>
                    "Mausan" atau <em>maksud tujuan</em> sekolah bukanlah sekadar slogan, melainkan pijakan filosofis dalam penyelenggaraan pendidikan.  
                </p>
                <p>
                    Beberapa poin mausan / filosofi yang dijunjung di SDN Jatilaba 4:
                </p>
                <ul class="list-decimal ml-6 space-y-1">
                    <li>Mendidik siswa agar memiliki karakter, kejujuran, dan moral luhur.</li>
                    <li>Memberikan kesempatan yang adil kepada semua anak untuk memperoleh pendidikan dasar yang berkualitas.</li>
                    <li>Menumbuhkan rasa kebangsaan, cinta tanah air, dan kesadaran akan budaya lokal.</li>
                    <li>Mengembangkan kreativitas, kemandirian, dan kesiapan menghadapi tantangan masa depan.</li>
                    <li>Menjadikan sekolah sebagai pusat pembelajaran yang inklusif, kolaboratif, dan adaptif terhadap perubahan.</li>
                </ul>
            </div>
        </section>

        <!-- Penutup -->
        <section data-aos="fade-up" class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 md:p-8">
            <p class="text-gray-700 dark:text-gray-300">
                Demikianlah sejarah singkat SDN Jatilaba 4. Semoga jejak masa lalu ini menjadi inspirasi agar ke depan sekolah terus tumbuh, berinovasi, dan mencetak generasi yang unggul, berkarakter, dan berdaya saing.
            </p>
        </section>

    </main>

    <!-- Footer -->
    <x-footer></x-footer>

</body>
</html>