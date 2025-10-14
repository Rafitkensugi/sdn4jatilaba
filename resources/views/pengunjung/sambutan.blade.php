<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi & Misi - SDN Jatilaba 04</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans text-gray-800 bg-gray-50">

    <x-navbar></x-navbar>

    {{-- Hero Section --}}
    <section class="relative h-96 sm:h-[500px] flex items-center justify-center overflow-hidden">
        <img 
            src="{{ asset('images/sekolah-hero.jpg') }}" 
            alt="Sekolah SDN Jatilaba 04" 
            class="absolute inset-0 w-full h-full object-cover"
        >
        <div class="absolute inset-0 bg-black/60"></div>
        
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <h1 class="text-3xl sm:text-5xl md:text-6xl font-bold text-white mb-4">
                Visi, Misi & Tujuan Sekolah
            </h1>
            <p class="text-base sm:text-lg text-gray-200">
                Mewujudkan generasi unggul, berkarakter, dan berakhlak mulia
            </p>
        </div>
    </section>

    {{-- Main Content --}}
    <main class="max-w-6xl mx-auto px-4 sm:px-6 py-12 sm:py-16">
        {{-- Visi Section --}}
        <section id="visi" class="mb-16 scroll-mt-20">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-6 border-l-4 border-blue-600 pl-4">
                Visi Sekolah
            </h2>
            <div class="bg-blue-600 text-white p-6 sm:p-8 rounded-lg mb-8 shadow-lg">
                <p class="text-base sm:text-lg italic leading-relaxed">
                    "Terbentuknya Warga Sekolah Berbudi Pekerti Luhur, Berprestasi dan Terampil dalam IPTEK, Dilandasi Iman dan Taqwa yang Mengedepankan Profil Pelajar Pancasila."
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                {{-- Visi Point 1 --}}
                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    <svg class="w-8 h-8 text-blue-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                    <p class="text-gray-700 text-sm sm:text-base">Terbentuknya pribadi yang beriman dan taqwa</p>
                </div>

                {{-- Visi Point 2 --}}
                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    <svg class="w-8 h-8 text-blue-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <p class="text-gray-700 text-sm sm:text-base">Terciptanya siswa berakhlakul karimah</p>
                </div>

                {{-- Visi Point 3 --}}
                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    <svg class="w-8 h-8 text-blue-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                    <p class="text-gray-700 text-sm sm:text-base">Terwujudnya siswa unggul di bidang akademik dan non-akademik</p>
                </div>

                {{-- Visi Point 4 --}}
                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    <svg class="w-8 h-8 text-blue-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                    <p class="text-gray-700 text-sm sm:text-base">Terwujudnya siswa terampil dalam ilmu pengetahuan dan teknologi</p>
                </div>

                {{-- Visi Point 5 --}}
                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    <svg class="w-8 h-8 text-blue-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    <p class="text-gray-700 text-sm sm:text-base">Pembelajaran variatif dan inovatif berbasis teknologi informasi</p>
                </div>

                {{-- Visi Point 6 --}}
                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    <svg class="w-8 h-8 text-blue-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
                    </svg>
                    <p class="text-gray-700 text-sm sm:text-base">Hubungan harmonis dengan masyarakat sekitar sekolah</p>
                </div>
            </div>
        </section>

        {{-- Misi Section --}}
        <section id="misi" class="mb-16 scroll-mt-20">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-6 border-l-4 border-green-600 pl-4">
                Misi Sekolah
            </h2>
            <div class="space-y-4">
                @php
                    $misiItems = [
                        'Meningkatkan kualitas iman dan taqwa kepada Tuhan Yang Maha Esa',
                        'Meningkatkan perilaku berbudi pekerti luhur',
                        'Memacu prestasi di bidang akademik dan non-akademik',
                        'Menumbuhkembangkan kreativitas dan keterampilan dalam IPTEK',
                        'Melaksanakan pembelajaran efektif berbasis teknologi informasi',
                        'Meningkatkan kesadaran masyarakat terhadap lingkungan sekolah'
                    ];
                @endphp

                @foreach($misiItems as $index => $item)
                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-green-600 text-white rounded-full flex items-center justify-center font-bold">
                            {{ $index + 1 }}
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base flex-1">{{ $item }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        {{-- Tujuan Section --}}
        <section id="tujuan" class="mb-16 scroll-mt-20">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-6 border-l-4 border-yellow-500 pl-4">
                Tujuan Sekolah
            </h2>
            <div class="space-y-4">
                @php
                    $tujuanItems = [
                        'Lulusan unggul dalam akademik dan non-akademik serta berkarakter Pancasila',
                        'Pendidikan membentuk profil pelajar Pancasila',
                        'Pendidikan menjamin hak belajar bagi setiap peserta didik',
                        'Pendidikan menggunakan pendekatan pembelajaran beragam',
                        'Pengembangan keterampilan abad 21',
                        'Pendidikan karakter di seluruh mata pelajaran'
                    ];
                @endphp

                @foreach($tujuanItems as $index => $item)
                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-yellow-500 text-white rounded-full flex items-center justify-center font-bold">
                            {{ $index + 1 }}
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base flex-1">{{ $item }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 text-center">
            <div class="flex items-center justify-center space-x-2 mb-3">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                <span class="font-bold text-lg">SDN Jatilaba 04</span>
            </div>
            <p class="text-gray-400 text-sm">
                © 2025 SDN Jatilaba 04. All rights reserved.
            </p>
        </div>
    </footer>

    {{-- Smooth Scroll --}}
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

</body>
</html>