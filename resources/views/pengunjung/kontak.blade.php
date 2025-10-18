<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontak Kami - SD Harapan Bangsa</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Konfigurasi Tailwind -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            500: '#3B82F6',
                            600: '#2563EB',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            @apply transition-colors duration-500;
        }

        /* Mode gelap menyeluruh */
        .dark body {
            background: linear-gradient(to bottom right, #0f172a, #1e293b);
        }

        /* Section transparan agar gradien global terlihat */
        .dark section {
            background-color: transparent;
        }

        /* Semua elemen putih ikut gelap */
        .dark .bg-white {
            background-color: #1e293b !important;
        }

        .dark .border-gray-100 {
            border-color: #374151 !important;
        }

        .dark .text-gray-600 {
            color: #d1d5db !important;
        }

        .dark .text-gray-800 {
            color: #f1f5f9 !important;
        }

        /* Transisi warna lembut */
        * {
            transition: background-color 0.4s ease, color 0.4s ease;
        }

        /* Glow ringan untuk ikon */
        .dark-mode-glow {
            filter: drop-shadow(0 0 6px rgba(255,255,255,0.4));
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 transition-colors duration-500">
    <x-navbar></x-navbar>

    <!-- Hero Section -->
    <section 
        class="relative w-full h-[300px] bg-center bg-cover flex items-center justify-center text-white"
        style="background-image: url('{{ asset('images/hero.jpeg') }}');">
        <div class="absolute inset-0 bg-black/60 dark:bg-black/70"></div>
        <div class="relative text-center z-10">
            <h1 class="text-4xl font-bold mb-2 drop-shadow-md">Hubungi Kami</h1>
            <p class="text-gray-200 drop-shadow-sm">Kami siap membantu menjawab pertanyaan Anda</p>
        </div>
    </section>

    <!-- Informasi Kontak -->
    <section class="py-16 px-4 md:px-16 lg:px-24">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <!-- Alamat -->
            <div class="p-7 bg-white dark:bg-gray-900 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-4 text-blue-500 dark:text-blue-400 dark-mode-glow" width="40" height="40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-width="1.5" d="M12 2C8 2 4.5 5.5 4.5 9.5c0 5 7.5 12.5 7.5 12.5s7.5-7.5 7.5-12.5C19.5 5.5 16 2 12 2zM12 11.5c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>
                </svg>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">Alamat</h3>
                <p class="text-gray-600 dark:text-gray-300">Jatilaba, Kec. Margasari<br>Kab. Tegal, Jawa Tengah 52463</p>
            </div>

            <!-- Email -->
            <div class="p-7 bg-white dark:bg-gray-900 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-4 text-green-500 dark:text-green-400 dark-mode-glow" width="40" height="40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-width="1.5" d="M2 5.5C2 4.12 3.12 3 4.5 3h15c1.38 0 2.5 1.12 2.5 2.5v13c0 1.38-1.12 2.5-2.5 2.5h-15A2.5 2.5 0 0 1 2 18.5v-13z"/>
                    <path stroke-width="1.5" d="M22 6 12 13 2 6"/>
                </svg>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">Email</h3>
                <p class="text-gray-600 dark:text-gray-300 break-words">jatilabaempatsdn@yahoo.co.id</p>
            </div>

            <!-- Telepon -->
            <div class="p-7 bg-white dark:bg-gray-900 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-4 text-yellow-500 dark:text-yellow-400 dark-mode-glow" width="40" height="40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-width="1.5" d="M2 8.5V6a2 2 0 0 1 2-2h2.586a1 1 0 0 1 .707.293l2.121 2.121A1 1 0 0 0 10.707 7H20a2 2 0 0 1 2 2v9.5a2 2 0 0 1-2 2h-4.5"/>
                    <path stroke-width="1.5" d="M8 13v8l-3-3H3.5A1.5 1.5 0 0 1 2 16.5V13h6z"/>
                </svg>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">Telepon</h3>
                <p class="text-gray-600 dark:text-gray-300">(0283) 1234567</p>
            </div>
        </div>
    </section>

    <!-- Formulir Kontak & Google Maps -->
    <section class="py-16 px-4 md:px-16 lg:px-24">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">
            <!-- Formulir Kontak -->
            <div class="bg-white dark:bg-gray-900 rounded-3xl shadow-xl p-8 md:p-10 border border-gray-100 dark:border-gray-700">
                <h2 class="text-3xl font-bold mb-6 text-gray-800 dark:text-white">Kirim Pesan</h2>
                <form action="{{ route('kontak.store') }}" method="POST" class="grid grid-cols-1 gap-5">
                    @csrf
                    
                    <!-- TAMBAHKAN FIELD SUBJEK -->
                    <div>
                        <label class="block text-sm font-medium mb-2 dark:text-gray-300">Subjek *</label>
                        <input type="text" name="subjek" placeholder="Masukkan subjek pesan"
                            class="w-full border dark:border-gray-600 rounded-xl px-4 py-3 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:outline-none transition" 
                            value="{{ old('subjek') }}" required>
                        @error('subjek')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-medium mb-2 dark:text-gray-300">Nama Lengkap *</label>
                            <input type="text" name="nama" placeholder="Masukkan nama Anda"
                                class="w-full border dark:border-gray-600 rounded-xl px-4 py-3 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:outline-none transition" 
                                value="{{ old('nama') }}" required>
                            @error('nama')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2 dark:text-gray-300">Email *</label>
                            <input type="email" name="email" placeholder="Masukkan email Anda"
                                class="w-full border dark:border-gray-600 rounded-xl px-4 py-3 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:outline-none transition"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2 dark:text-gray-300">Pesan *</label>
                        <textarea name="pesan" rows="5" placeholder="Tuliskan pesan Anda..."
                            class="w-full border dark:border-gray-600 rounded-xl px-4 py-3 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:outline-none transition"
                            required>{{ old('pesan') }}</textarea>
                        @error('pesan')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="text-center">
                        <button type="submit"
                            class="bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-xl transition duration-300 shadow-md w-full md:w-auto font-medium">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>

            <!-- Google Maps -->
            <div class="overflow-hidden rounded-3xl shadow-xl h-[450px] border border-gray-200 dark:border-gray-700">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15838.537053846903!2d109.01881482219848!3d-7.052190775310599!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f97c32a12678d%3A0xdd07f411804ab8ef!2sSDN%20Jatilaba%2004!5e0!3m2!1sid!2sid!4v1760078471195!5m2!1sid!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-6 text-center text-sm text-gray-600 dark:text-gray-400 border-t border-gray-200 dark:border-gray-800 mt-12">
        &copy; {{ date('Y') }} SD Harapan Bangsa. Semua hak dilindungi.
    </footer>

    <!-- Dark Mode Script -->
    <script>
        const userPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const savedTheme = localStorage.getItem('color-theme');

        if (savedTheme === 'dark' || (!savedTheme && userPrefersDark)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        // Sinkron ke perubahan sistem
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            const newScheme = e.matches ? 'dark' : 'light';
            document.documentElement.classList.toggle('dark', e.matches);
            localStorage.setItem('color-theme', newScheme);
        });

        // Optional toggle manual
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('darkModeToggle');
            if (btn) {
                btn.addEventListener('click', () => {
                    const isDark = document.documentElement.classList.toggle('dark');
                    localStorage.setItem('color-theme', isDark ? 'dark' : 'light');
                });
            }
        });
    </script>

    <!-- SweetAlert -->
    @if (session('success'))
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            icon: 'success',
            background: '#fff',
            color: '#333',
            confirmButtonText: 'Oke Siap!',
            confirmButtonColor: '#3B82F6',
            showClass: { popup: 'animate__animated animate__fadeInDown' },
            hideClass: { popup: 'animate__animated animate__fadeOutUp' }
        });
    </script>
    @endif

    <!-- TAMBAHKAN ERROR HANDLING -->
    @if ($errors->any())
    <script>
        Swal.fire({
            title: 'Terjadi Kesalahan!',
            html: `@foreach ($errors->all() as $error)• {{ $error }}<br>@endforeach`,
            icon: 'error',
            background: '#fff',
            color: '#333',
            confirmButtonText: 'Oke, Saya Perbaiki',
            confirmButtonColor: '#EF4444',
            showClass: { popup: 'animate__animated animate__headShake' },
            hideClass: { popup: 'animate__animated animate__fadeOutUp' }
        });
    </script>
    @endif
</body>
</html>