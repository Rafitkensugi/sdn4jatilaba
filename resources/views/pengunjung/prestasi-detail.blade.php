<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Prestasi - {{ $prestasi->judul }}</title>
    @vite('resources/css/app.css')
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(30px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        .animate-fade-in { animation: fadeIn 0.8s ease-out; }
        .animate-slide-left { animation: slideInLeft 0.8s ease-out; }
        .animate-slide-right { animation: slideInRight 0.8s ease-out; }
        
        .parallax-img {
            transition: transform 0.3s ease-out;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .decoration-line {
            position: relative;
        }
        
        .decoration-line::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
        }
        
        .info-badge {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9);
        }
        
        @media (max-width: 768px) {
            .hero-height { height: 50vh; }
        }
        
        .hero-height { height: 70vh; }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 text-gray-900">

    <x-navbar></x-navbar>

    <!-- Hero Image Section -->
    <div class="relative hero-height overflow-hidden">
        <img src="{{ asset('storage/' . $prestasi->gambar) }}" 
             alt="{{ $prestasi->judul }}" 
             class="w-full h-full object-cover parallax-img">
        
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/30 to-black/70"></div>
        
        <!-- Trophy Badge -->
        <div class="absolute top-8 right-8 animate-fade-in">
            <div class="info-badge rounded-2xl shadow-2xl px-6 py-4 border border-white/20">
                <div class="flex items-center gap-3">
                    <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <div>
                        <div class="text-sm text-gray-600 font-medium">Peringkat</div>
                        <div class="text-xl font-bold text-gray-900">{{ $prestasi->juara }}</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Title at Bottom -->
        <div class="absolute bottom-0 left-0 right-0 p-8 md:p-12 animate-slide-left">
            <div class="container mx-auto max-w-6xl">
                <div class="inline-block bg-indigo-600 text-white px-4 py-1 rounded-full text-sm font-semibold mb-4">
                    {{ $prestasi->tingkat }}
                </div>
                <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-4 leading-tight drop-shadow-2xl">
                    {{ $prestasi->judul }}
                </h1>
                <div class="flex flex-wrap gap-6 text-white/90">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="font-medium">{{ $prestasi->tempat }}</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="font-medium">{{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d F Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container mx-auto max-w-6xl px-4 py-16 md:py-24">
        <div class="grid md:grid-cols-3 gap-12">
            
            <!-- Main Content -->
            <div class="md:col-span-2 animate-slide-right">
                <!-- Deskripsi -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-6 decoration-line gradient-text">
                        Tentang Prestasi
                    </h2>
                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 leading-relaxed text-lg">
                            {{ $prestasi->deskripsi }}
                        </p>
                    </div>
                </div>

                {{-- <!-- Quote/Highlight Section -->
                <div class="bg-gradient-to-r from-indigo-50 to-purple-50 border-l-4 border-indigo-600 p-8 rounded-r-2xl my-12">
                    <svg class="w-10 h-10 text-indigo-400 mb-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                    <p class="text-xl text-gray-800 font-medium italic">
                        Setiap pencapaian adalah bukti dari dedikasi, kerja keras, dan semangat yang tak pernah padam dalam mengejar keunggulan.
                    </p>
                </div> --}}

                <!-- Back Button -->
                <div class="mt-12">
                    <a href="{{ route('prestasi') }}" 
                       class="inline-flex items-center gap-3 bg-gradient-to-r from-gray-800 to-gray-900 text-white px-8 py-4 rounded-2xl font-semibold text-lg shadow-xl hover:shadow-2xl hover:from-gray-900 hover:to-black transform hover:-translate-y-1 transition duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Kembali ke Galeri
                    </a>
                </div>
            </div>

            <!-- Sidebar Info -->
            <div class="md:col-span-1 animate-fade-in">
                <div class="sticky top-8 space-y-6">
                    
                    <!-- Info Cards -->
                    {{-- <div class="bg-white rounded-3xl shadow-lg p-6 border border-gray-100">
                        <h3 class="text-sm uppercase tracking-wider text-gray-500 font-bold mb-4">Informasi Detail</h3>
                        
                        <div class="space-y-4">
                            <div class="flex items-start gap-4 p-4 bg-blue-50 rounded-xl">
                                <div class="flex-shrink-0 w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs text-gray-500 font-medium mb-1">Tempat Pelaksanaan</div>
                                    <div class="text-gray-900 font-semibold">{{ $prestasi->tempat }}</div>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-4 bg-indigo-50 rounded-xl">
                                <div class="flex-shrink-0 w-10 h-10 bg-indigo-500 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs text-gray-500 font-medium mb-1">Tingkat</div>
                                    <div class="text-gray-900 font-semibold">{{ $prestasi->tingkat }}</div>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-4 bg-purple-50 rounded-xl">
                                <div class="flex-shrink-0 w-10 h-10 bg-purple-500 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs text-gray-500 font-medium mb-1">Tanggal</div>
                                    <div class="text-gray-900 font-semibold">{{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d F Y') }}</div>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-4 bg-yellow-50 rounded-xl">
                                <div class="flex-shrink-0 w-10 h-10 bg-yellow-500 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs text-gray-500 font-medium mb-1">Peringkat</div>
                                    <div class="text-gray-900 font-semibold">{{ $prestasi->juara }}</div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>

        </div>
    </div>

    <x-footer></x-footer>

    <script>
        // Parallax effect untuk hero image
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.parallax-img');
            if (parallax) {
                parallax.style.transform = 'translateY(' + (scrolled * 0.3) + 'px)';
            }
        });
    </script>

</body>
</html>