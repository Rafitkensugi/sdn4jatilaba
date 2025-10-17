<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Prestasi</title>
    @vite('resources/css/app.css')
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .card-animate {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
        }
        
        .gradient-overlay {
            background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.7) 100%);
        }
        
        .shine-effect {
            position: relative;
            overflow: hidden;
        }
        
        .shine-effect::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }
        
        .shine-effect:hover::before {
            left: 100%;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 text-gray-900 min-h-screen">

    <x-navbar></x-navbar>

    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white py-20 mb-12">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.05\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center">
                <h1 class="text-5xl md:text-6xl font-extrabold mb-4 tracking-tight">
                    Galeri Prestasi
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 max-w-2xl mx-auto">
                    Koleksi pencapaian dan kebanggaan yang memotivasi masa depan
                </p>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 pb-16">
        
        <!-- Cards Grid -->
        <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
            @foreach($prestasis as $index => $prestasi)
            <div class="card-hover card-animate bg-white rounded-3xl shadow-xl overflow-hidden group" 
                 style="animation-delay: {{ $index * 0.1 }}s; opacity: 0;">
                
                <!-- Image Container -->
                <div class="relative h-56 overflow-hidden shine-effect">
                    <img src="{{ asset('storage/' . $prestasi->gambar) }}" 
                         alt="{{ $prestasi->judul }}" 
                         class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 gradient-overlay"></div>
                    
                    <!-- Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 py-2 rounded-full text-xs font-bold shadow-lg backdrop-blur-sm">
                            {{ $prestasi->juara }}
                        </span>
                    </div>
                    
                    <!-- Title Overlay -->
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h2 class="text-white text-xl font-bold leading-tight">
                            {{ $prestasi->judul }}
                        </h2>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6">
                    <!-- Info Grid -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-sm"><strong>Tempat:</strong> {{ $prestasi->tempat }}</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            <span class="text-sm font-medium"><strong>Tingkat:</strong> {{ $prestasi->tingkat }}</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-sm"><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d M Y') }}</span>
                        </div>
                    </div>

                    <!-- Button -->
                    <a href="{{ route('prestasi.show', $prestasi->id) }}" 
                       class="block w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-center px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl hover:from-blue-700 hover:to-indigo-700 transform hover:-translate-y-0.5 transition duration-300">
                        Lihat Detail
                        <svg class="w-4 h-4 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <x-footer></x-footer>
</body>
</html>