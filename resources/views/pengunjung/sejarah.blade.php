<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang Kami — SDN Jatilaba 4</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<x-navbar></x-navbar>
<body class="font-sans text-gray-800 bg-gray-50">

  {{-- mass depan tolong rapikan ya UwU --}}

  <!-- Hero Section -->
  <section class="relative h-[60vh] flex items-center justify-center text-center text-white">
    <img src="{{ asset('images/school-hero.jpg') }}"
         class="absolute inset-0 w-full h-full object-cover brightness-50" />
    <div class="relative z-10 px-4" data-aos="fade-up">
      <h1 class="text-4xl md:text-6xl font-bold text-yellow-400 drop-shadow-lg">
        TENTANG SDN JATILABA 4
      </h1>
      <p class="mt-4 text-lg md:text-2xl font-medium">
        “Mendidik dengan Hati, Menuju Generasi Mandiri & Berkarakter”  
      </p>
    </div>
  </section>

  <!-- Konten Utama -->
  <main class="max-w-6xl mx-auto py-16 px-6 space-y-16">

    <!-- Identitas Sekolah -->
    <section data-aos="fade-up">
      <h2 class="text-3xl font-bold text-blue-900 border-l-8 border-yellow-400 pl-4 mb-6">
        IDENTITAS SEKOLAH
      </h2>
      <div class="space-y-4 text-gray-700">
        <p><strong>Nama Sekolah :</strong> SD Negeri Jatilaba 4 / SDN Jatilaba 04</p>
        <p><strong>NPSN :</strong> 20325815 :contentReference[oaicite:0]{index=0}</p>
        <p><strong>Alamat :</strong> Jl. Keplik 01 RT 01 RW 01, Desa Jatilaba, Kecamatan Margasari, Kabupaten Tegal, Jawa Tengah :contentReference[oaicite:1]{index=1}</p>
        <p><strong>Tanggal Berdiri : </strong>1 Agustus 1985 :contentReference[oaicite:2]{index=2}</p>
        <p><strong>Status :</strong> Sekolah Negeri (pemerintah) :contentReference[oaicite:3]{index=3}</p>
        <p><strong>Akreditasi :</strong> A (SK Akreditasi 1347/BAN-SM/SK/2021, 8 Desember 2021) :contentReference[oaicite:4]{index=4}</p>
        <p><strong>Email :</strong> jatilabaempatsdn@yahoo.co.id :contentReference[oaicite:5]{index=5}</p>
      </div>
    </section>

    <!-- Visi & Misi -->
    <section data-aos="fade-up">
      <h2 class="text-3xl font-bold text-blue-900 border-l-8 border-yellow-400 pl-4 mb-6">
        VISI & MISI
      </h2>
      <div class="space-y-8">
        <div>
          <h3 class="text-2xl font-semibold text-blue-800 mb-3">Visi</h3>
          <p class="italic text-lg text-gray-700">
            “Menjadi sekolah unggul yang membentuk karakter, kompetensi, dan kreativitas siswa, berlandaskan nilai religius dan kearifan lokal.”  
          </p>
          <h4 class="mt-4 font-semibold">Indikator Visi:</h4>
          <ul class="list-decimal ml-6 space-y-1 text-gray-700">
            <li>Siswa yang taat beribadah dan memiliki akhlak mulia;</li>
            <li>Siswa berprestasi akademik dan non-akademik;</li>
            <li>Pembelajaran aktif, kreatif dan berbasis teknologi;</li>
            <li>Hubungan positif antara sekolah, keluarga, dan masyarakat;</li>
            <li>Lingkungan sekolah yang bersih, aman, dan hijau.</li>
          </ul>
        </div>
        <div>
          <h3 class="text-2xl font-semibold text-blue-800 mb-3">Misi</h3>
          <ul class="list-decimal ml-6 space-y-1 text-gray-700">
            <li>Meningkatkan keimanan dan ketakwaan kepada Tuhan Yang Maha Esa;</li>
            <li>Mendidik siswa agar berperilaku santun, jujur, dan disiplin;</li>
            <li>Memfasilitasi pembelajaran yang inovatif, interaktif, dan menyenangkan;</li>
            <li>Menumbuhkembangkan bakat dan minat melalui kegiatan ekstrakurikuler;</li>
            <li>Memberdayakan guru melalui pelatihan, penelitian dan kolaborasi;</li>
            <li>Membangun kemitraan aktif dengan masyarakat dan lembaga sekitar sekolah.</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Tujuan Sekolah -->
    <section data-aos="fade-up">
      <h2 class="text-3xl font-bold text-blue-900 border-l-8 border-yellow-400 pl-4 mb-6">
        TUJUAN SEKOLAH
      </h2>
      <p class="text-gray-700 mb-4">
        Berdasarkan visi dan misi tersebut, tujuan strategis SDN Jatilaba 4 adalah sebagai berikut:
      </p>
      <ul class="list-decimal ml-6 space-y-2 text-gray-700">
        <li>Melahirkan lulusan yang memiliki karakter Pancasila dan kompetensi abad 21;</li>
        <li>Menjamin hak belajar setiap siswa dengan adil dan inklusif;</li>
        <li>Menciptakan suasana belajar yang aman, nyaman, dan kondusif;</li>
        <li>Menjadi pusat kreativitas dan inovasi dalam pembelajaran di desa;</li>
        <li>Menjalin kerjasama dengan orang tua, masyarakat, serta stakeholder lokal;</li>
        <li>Memelihara dan meningkatkan sarana prasarana sekolah agar mendukung proses pembelajaran.</li>
      </ul>
    </section>

    <!-- Tenaga Pendidik & Fasilitas -->
    <section data-aos="fade-up">
      <h2 class="text-3xl font-bold text-blue-900 border-l-8 border-yellow-400 pl-4 mb-6">
        TENAGA PENDIDIK & FASILITAS SEKOLAH
      </h2>
      <div class="space-y-6 text-gray-700">
        <p>
          Berdasarkan data per juli 2025, SDN Jatilaba 4 memiliki tenaga pendidik yang terdiri dari 16 orang guru & tenaga kependidikan. :contentReference[oaicite:6]{index=6}  
        </p>
        <p>
          Beberapa guru inti antara lain:<br>
          Kepala Sekolah: Sri Nurhayati, S.Pd.SD :contentReference[oaicite:7]{index=7} <br>
          Guru Kelas, Guru PJOK, dan guru mata pelajaran lainnya (PAI, Bahasa Indonesia, Matematika, dll). :contentReference[oaicite:8]{index=8}
        </p>
        <p>
          Fasilitas yang tersedia meliputi ruang kelas (sekitar 10 ruang), ruang perpustakaan, serta prasarana pendukung lainnya. :contentReference[oaicite:9]{index=9}
        </p>
      </div>
    </section>

    <!-- Nilai & Budaya Sekolah -->
    <section data-aos="fade-up">
      <h2 class="text-3xl font-bold text-blue-900 border-l-8 border-yellow-400 pl-4 mb-6">
        NILAI & BUDAYA SEKOLAH
      </h2>
      <p class="text-gray-700 mb-4">
        Nilai-nilai yang dijunjung tinggi di SDN Jatilaba 4 mencerminkan karakter yang diharapkan tumbuh pada siswa, yaitu:
      </p>
      <ul class="list-disc ml-6 space-y-1 text-gray-700">
        <li><strong>Religius:</strong> sikap taat, toleran, dan menghargai agama orang lain;</li>
        <li><strong>Integritas:</strong> kejujuran, tanggung jawab, dan konsistensi tindakan;</li>
        <li><strong>Kerjasama:</strong> saling membantu, gotong royong, dan menghormati perbedaan;</li>
        <li><strong>Kreativitas & Inovasi:</strong> berpikir kritis, mencari solusi baru, dan eksplorasi;</li>
        <li><strong>Pelestarian Lingkungan:</strong> menjaga kebersihan, daur ulang, dan penghijauan sekolah.</li>
      </ul>
    </section>

  </main>

  <x-footer></x-footer>
</body>
</html>
