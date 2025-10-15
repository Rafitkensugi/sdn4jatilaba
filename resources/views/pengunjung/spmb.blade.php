<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pendaftaran Siswa Baru SDN 4 Jatilaba">
  <title>SPMB - SDN 4 Jatilaba</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800 antialiased">

  <!-- Navbar -->
  <x-navbar></x-navbar>

  <!-- Hero Section -->
  <section class="relative bg-gradient-to-br from-[#002147] to-blue-800 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/asfalt-light.png')] opacity-10"></div>
    <div class="relative max-w-5xl mx-auto px-6 text-center animate-fadeIn">
      <h1 class="text-4xl md:text-5xl font-extrabold mb-3 drop-shadow-lg">
        Seleksi Penerimaan Murid Baru (SPMB)
      </h1>
      <p class="text-blue-100 text-lg">SD Negeri 4 Jatilaba</p>
    </div>
  </section>

  <!-- Main Content -->
  <main class="max-w-5xl mx-auto px-6 py-16 space-y-16">

    <!-- Informasi Umum -->
    <section class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 md:p-12 hover:shadow-2xl transition-all duration-300 animate-fadeIn">
      <h2 class="text-2xl font-bold text-[#002147] mb-6 text-center">
        Informasi Umum Pendaftaran
      </h2>
      <p class="text-gray-700 leading-relaxed mb-4 text-justify">
        Selamat datang di halaman pendaftaran SPMB SD Negeri 4 Jatilaba. Melalui halaman ini,
        calon peserta didik baru dapat melakukan pendaftaran secara daring dengan mudah dan cepat.
        Kami berkomitmen memberikan layanan pendidikan yang berkualitas, ramah, dan berkarakter.
      </p>
      <p class="text-gray-700 leading-relaxed text-justify">
        Mohon pastikan seluruh data yang Anda masukkan sudah benar sebelum mengirimkan formulir.
        Data yang tidak valid dapat berpengaruh terhadap proses seleksi administrasi.
      </p>
    </section>

    <!-- Formulir Pendaftaran -->
    <section class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 md:p-12 hover:shadow-2xl transition-all duration-300 animate-fadeIn">
      <h2 class="text-2xl font-bold text-[#002147] mb-8 text-center">
        Formulir Pendaftaran
      </h2>

      <form action="#" method="POST" class="space-y-8">
        @csrf

        <!-- Data Pribadi -->
        <div class="space-y-6">
          <h3 class="text-lg font-semibold text-[#002147] border-b pb-2">Data Pribadi Siswa</h3>

          <div class="grid md:grid-cols-2 gap-6">
            <div>
              <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
              <input type="text" name="nama" required
                class="mt-1 w-full rounded-lg border-gray-300 focus:ring-blue-600 focus:border-blue-600 transition-all">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">NISN</label>
              <input type="text" name="nisn" required
                class="mt-1 w-full rounded-lg border-gray-300 focus:ring-blue-600 focus:border-blue-600 transition-all">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
              <input type="text" name="tempat_lahir" required
                class="mt-1 w-full rounded-lg border-gray-300 focus:ring-blue-600 focus:border-blue-600 transition-all">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" required
                class="mt-1 w-full rounded-lg border-gray-300 focus:ring-blue-600 focus:border-blue-600 transition-all">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
              <select name="jenis_kelamin" required
                class="mt-1 w-full rounded-lg border-gray-300 focus:ring-blue-600 focus:border-blue-600 transition-all">
                <option value="">Pilih</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">Agama</label>
              <select name="agama" required
                class="mt-1 w-full rounded-lg border-gray-300 focus:ring-blue-600 focus:border-blue-600 transition-all">
                <option value="">Pilih Agama</option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katolik</option>
                <option>Hindu</option>
                <option>Buddha</option>
                <option>Konghucu</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Data Orang Tua -->
        <div class="space-y-6">
          <h3 class="text-lg font-semibold text-[#002147] border-b pb-2">Data Orang Tua / Wali</h3>

          <div class="grid md:grid-cols-2 gap-6">
            <div>
              <label class="block text-sm font-medium text-gray-700">Nama Ayah</label>
              <input type="text" name="nama_ayah"
                class="mt-1 w-full rounded-lg border-gray-300 focus:ring-blue-600 focus:border-blue-600 transition-all">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">Pekerjaan Ayah</label>
              <input type="text" name="pekerjaan_ayah"
                class="mt-1 w-full rounded-lg border-gray-300 focus:ring-blue-600 focus:border-blue-600 transition-all">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">Nama Ibu</label>
              <input type="text" name="nama_ibu"
                class="mt-1 w-full rounded-lg border-gray-300 focus:ring-blue-600 focus:border-blue-600 transition-all">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">Pekerjaan Ibu</label>
              <input type="text" name="pekerjaan_ibu"
                class="mt-1 w-full rounded-lg border-gray-300 focus:ring-blue-600 focus:border-blue-600 transition-all">
            </div>
          </div>
        </div>

        <!-- Alamat -->
        <div>
          <h3 class="text-lg font-semibold text-[#002147] border-b pb-2 mb-4">Alamat</h3>
          <textarea name="alamat" rows="4" required
            class="w-full rounded-lg border-gray-300 focus:ring-blue-600 focus:border-blue-600 transition-all"></textarea>
        </div>

        <!-- Tombol -->
        <div class="text-center pt-4">
          <button type="submit"
            class="bg-[#002147] hover:bg-blue-800 text-white font-semibold px-10 py-3 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
            Kirim Pendaftaran
          </button>
        </div>
      </form>
    </section>

    <!-- Informasi Tambahan -->
    <section class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 md:p-12 hover:shadow-2xl transition-all duration-300 animate-fadeIn">
      <h2 class="text-2xl font-bold text-[#002147] mb-6 text-center">Informasi Tambahan</h2>
      <ul class="list-disc list-inside text-gray-700 space-y-2 leading-relaxed">
        <li>Waktu pendaftaran: 1 Mei – 30 Juni 2025.</li>
        <li>Pengumuman hasil seleksi: 10 Juli 2025 melalui website ini.</li>
        <li>Calon siswa wajib membawa dokumen asli saat verifikasi ulang di sekolah.</li>
      </ul>
      <p class="mt-4 text-gray-700 text-justify">
        Untuk informasi lebih lanjut, silakan hubungi panitia SPMB SDN 4 Jatilaba melalui halaman kontak.
      </p>
    </section>
  </main>

  <!-- Footer -->
  <x-footer></x-footer>

</body>
</html>
