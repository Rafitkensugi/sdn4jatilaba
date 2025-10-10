<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - SD Harapan Bangsa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
    <x-navbar></x-navbar>

    <!-- Hero Section -->
    <section 
        class="relative w-full h-[300px] bg-center bg-cover flex items-center justify-center text-white"
        style="background-image: url('{{ asset('images/hero.jpeg') }}');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative text-center z-10">
            <h1 class="text-4xl font-bold mb-2">Hubungi Kami</h1>
            <p class="text-gray-200">Kami siap membantu menjawab pertanyaan Anda</p>
        </div>
    </section>

    <!-- Informasi Kontak -->
    <section class="py-12 px-4 md:px-16 lg:px-24 bg-white">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="p-6 bg-gray-50 rounded-2xl shadow hover:shadow-lg transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-3 text-blue-500" width="40" height="40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-width="1.5" d="M12 2C8 2 4.5 5.5 4.5 9.5c0 5 7.5 12.5 7.5 12.5s7.5-7.5 7.5-12.5C19.5 5.5 16 2 12 2zM12 11.5c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>
                </svg>
                <h3 class="text-lg font-semibold mb-1">Alamat</h3>
                <p>Jatilaba, Kec. Margasari Kab. Tegal, Jawa Tengah 52463</p>
            </div>

            <div class="p-6 bg-gray-50 rounded-2xl shadow hover:shadow-lg transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-3 text-green-500" width="40" height="40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-width="1.5" d="M2 5.5C2 4.12 3.12 3 4.5 3h15c1.38 0 2.5 1.12 2.5 2.5v13c0 1.38-1.12 2.5-2.5 2.5h-15A2.5 2.5 0 0 1 2 18.5v-13z"/>
                    <path stroke-width="1.5" d="M22 6 12 13 2 6"/>
                </svg>
                <h3 class="text-lg font-semibold mb-1">Email</h3>
                <p>jatilabaempatsdn@yahoo.co.id</p>
            </div>

            <div class="p-6 bg-gray-50 rounded-2xl shadow hover:shadow-lg transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-3 text-yellow-500" width="40" height="40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-width="1.5" d="M2 8.5V6a2 2 0 0 1 2-2h2.586a1 1 0 0 1 .707.293l2.121 2.121A1 1 0 0 0 10.707 7H20a2 2 0 0 1 2 2v9.5a2 2 0 0 1-2 2h-4.5"/>
                    <path stroke-width="1.5" d="M8 13v8l-3-3H3.5A1.5 1.5 0 0 1 2 16.5V13h6z"/>
                </svg>
                <h3 class="text-lg font-semibold mb-1">Telepon</h3>
                <p>(0283) 1234567</p>
            </div>
        </div>
    </section>

        <!-- Formulir Kontak & Google Maps -->
    <section class="py-16 px-4 md:px-16 lg:px-24 bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">
            
            <!-- Formulir Kontak -->
            <div class="bg-white rounded-3xl shadow-lg p-8 md:p-10">
                <h2 class="text-3xl font-bold mb-6 text-gray-800">Kirim Pesan</h2>
                <form class="grid grid-cols-1 gap-5">
                    <div>
                        <label class="block text-sm font-medium mb-2">Nama Lengkap</label>
                        <input type="text" placeholder="Masukkan nama anda" class="w-full border rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Email</label>
                        <input type="email" placeholder="Masukkan email anda" class="w-full border rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Pesan</label>
                        <textarea rows="5" placeholder="Tuliskan pesan anda..." class="w-full border rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-xl hover:bg-blue-700 transition duration-300 shadow-md w-full md:w-auto">Kirim Pesan</button>
                    </div>
                </form>
            </div>

            <!-- Google Maps -->
            <div class="overflow-hidden rounded-3xl shadow-lg">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15838.537053846903!2d109.01881482219848!3d-7.052190775310599!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f97c32a12678d%3A0xdd07f411804ab8ef!2sSDN%20Jatilaba%2004!5e0!3m2!1sid!2sid!4v1760078471195!5m2!1sid!2sid"
                    width="100%" height="100%" style="border:0; min-height: 400px;" allowfullscreen loading="lazy">
                </iframe>
            </div>

        </div>
    </section>


    <!-- Footer -->
    <x-footer></x-footer>
</body>
</html>
