<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah - SDN Jatilaba 4</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-800 bg-gray-50">
    <x-navbar />
    
    <!-- Hero Section -->
    <section id="home" 
        class="relative py-20 md:py-32 bg-center bg-cover bg-no-repeat" 
        style="background-image: url('{{ asset('images/hero.jpeg') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/50"></div>
        <div class="container mx-auto px-4 relative z-10 text-center text-white">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    SEJARAH SEKOLAH
                </h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto text-gray-100">
                    SD Negeri 4 Jatilaba
                </p>
            </div>
        </div>
    </section>

    <!-- Konten Utama -->
    <main class="max-w-6xl mx-auto py-12 px-4 md:px-6">

        <!-- Latar Belakang -->
        <section class="bg-white rounded-lg shadow-md p-8 mb-8">
            <div class="border-l-4 border-yellow-400 pl-4 mb-8">
                <h2 class="text-2xl font-bold text-blue-900">LATAR BELAKANG</h2>
            </div>
            
            <p class="text-gray-700 leading-relaxed mb-4">
                SD Negeri Jatilaba 4 atau SDN Jatilaba 04 adalah sekolah dasar negeri yang berlokasi di Jl. Keplik 01 RT 01 RW 01, Desa Jatilaba, Kecamatan Margasari, Kabupaten Tegal, Jawa Tengah.
            </p>
            <p class="text-gray-700 leading-relaxed mb-4">
                Berdasarkan catatan sekolah lokal, sekolah ini resmi berdiri pada tanggal 1 Agustus 1985 melalui SK pendirian dan SK izin operasional yang dikeluarkan pada tahun yang sama.
            </p>
            <p class="text-gray-700 leading-relaxed">
                Seiring waktu, sekolah ini berkembang dengan fasilitas dan tenaga pendidik untuk melayani masyarakat di sekitar desa Jatilaba.
            </p>
        </section>

        <!-- Kronologi Sejarah -->
        <section class="bg-white rounded-lg shadow-md p-8 mb-8">
            <div class="border-l-4 border-yellow-400 pl-4 mb-8">
                <h2 class="text-2xl font-bold text-blue-900">KRONOLOGI SEJARAH</h2>
            </div>
            
            <div class="space-y-8">
                <!-- 1985 -->
                <div class="border-l-4 border-blue-500 pl-6">
                    <h3 class="text-xl font-semibold text-blue-800 mb-3">1985: Pendirian Sekolah</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Pada tanggal <strong>1 Agustus 1985</strong>, SDN Jatilaba 4 didirikan dengan SK Pendirian dan SK Izin Operasional yang dikeluarkan pada tahun tersebut. Pada awalnya, sekolah ini hanya memiliki ruang kelas dasar, jumlah siswa dan guru yang terbatas, serta fasilitas yang sederhana.
                    </p>
                </div>
                
                <!-- Perkembangan Sarana -->
                <div class="border-l-4 border-green-500 pl-6">
                    <h3 class="text-xl font-semibold text-blue-800 mb-3">Perkembangan Sarana dan Tenaga Pendidik</h3>
                    <p class="text-gray-700 leading-relaxed mb-3">
                        Seiring pertumbuhan jumlah siswa dan dukungan masyarakat, sekolah membuka ruang kelas tambahan serta perlengkapan fasilitas seperti perpustakaan.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Berdasarkan data tahun 2021, sekolah memiliki sekitar 10 ruang kelas, satu ruang perpustakaan, dan total tenaga pendidik/tenaga kependidikan sebanyak 16 orang. Data ini mencerminkan bahwa sekolah terus berupaya meningkatkan layanan pendidikan.
                    </p>
                </div>
                
                <!-- Kurikulum -->
                <div class="border-l-4 border-purple-500 pl-6">
                    <h3 class="text-xl font-semibold text-blue-800 mb-3">Penerapan Kurikulum & Adaptasi</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Untuk mempertahankan kualitas pendidikan, SDN Jatilaba 4 mengikuti Kurikulum 2013 (K13). Sekolah juga menyesuaikan dengan perubahan kebijakan, misalnya peningkatan kompetensi guru, penggunaan metode pembelajaran yang lebih interaktif, serta adaptasi teknologi informasi.
                    </p>
                </div>
                
                <!-- Prestasi -->
                <div class="border-l-4 border-yellow-500 pl-6">
                    <h3 class="text-xl font-semibold text-blue-800 mb-3">Momen Khusus & Prestasi</h3>
                    <div class="space-y-2">
                        <div class="flex items-start">
                            <span class="text-yellow-500 mr-2">•</span>
                            <p class="text-gray-700">Terdapat catatan bahwa batu misterius (diduga meteor) ditemukan oleh seorang siswa SDN Jatilaba 4 bernama Ibnu dari kelas 4.</p>
                        </div>
                        <div class="flex items-start">
                            <span class="text-yellow-500 mr-2">•</span>
                            <p class="text-gray-700">Sekolah terus berpartisipasi dalam lomba akademik dan non-akademik di tingkat kecamatan.</p>
                        </div>
                        <div class="flex items-start">
                            <span class="text-yellow-500 mr-2">•</span>
                            <p class="text-gray-700">Komite sekolah dan masyarakat desa turut mendukung pengembangan sarana hingga renovasi bangunan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Filosofi -->
        <section class="bg-white rounded-lg shadow-md p-8 mb-8">
            <div class="border-l-4 border-yellow-400 pl-4 mb-8">
                <h2 class="text-2xl font-bold text-blue-900">MAKSUD, TUJUAN, & FILOSOFI</h2>
            </div>
            
            <p class="text-gray-700 leading-relaxed mb-4">
                "Mausan" atau <em>maksud tujuan</em> sekolah bukanlah sekadar slogan, melainkan pijakan filosofis dalam penyelenggaraan pendidikan.
            </p>
            
            <p class="text-gray-700 font-semibold mb-4">
                Beberapa poin mausan / filosofi yang dijunjung di SDN Jatilaba 4:
            </p>
            
            <div class="space-y-3">
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-500 text-white font-bold mr-3 flex-shrink-0">1</span>
                    <p class="text-gray-700 pt-1">Mendidik siswa agar memiliki karakter, kejujuran, dan moral luhur</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-500 text-white font-bold mr-3 flex-shrink-0">2</span>
                    <p class="text-gray-700 pt-1">Memberikan kesempatan yang adil kepada semua anak untuk memperoleh pendidikan dasar yang berkualitas</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-500 text-white font-bold mr-3 flex-shrink-0">3</span>
                    <p class="text-gray-700 pt-1">Menumbuhkan rasa kebangsaan, cinta tanah air, dan kesadaran akan budaya lokal</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-500 text-white font-bold mr-3 flex-shrink-0">4</span>
                    <p class="text-gray-700 pt-1">Mengembangkan kreativitas, kemandirian, dan kesiapan menghadapi tantangan masa depan</p>
                </div>
                <div class="flex items-start">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-500 text-white font-bold mr-3 flex-shrink-0">5</span>
                    <p class="text-gray-700 pt-1">Menjadikan sekolah sebagai pusat pembelajaran yang inklusif, kolaboratif, dan adaptif terhadap perubahan</p>
                </div>
            </div>
        </section>

        <!-- Penutup -->
        <section class="bg-gradient-to-r from-blue-50 to-yellow-50 rounded-lg shadow-md p-8">
            <p class="text-gray-700 leading-relaxed text-center italic">
                Demikianlah sejarah singkat SDN Jatilaba 4. Semoga jejak masa lalu ini menjadi inspirasi agar ke depan sekolah terus tumbuh, berinovasi, dan mencetak generasi yang unggul, berkarakter, dan berdaya saing.
            </p>
        </section>

    </main>

    <!-- Footer -->
    <x-footer />
</body>
</html>