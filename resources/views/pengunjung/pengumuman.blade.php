<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman - {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .image-placeholder {
            background: linear-gradient(45deg, #f0f0f0 25%, transparent 25%), 
                        linear-gradient(-45deg, #f0f0f0 25%, transparent 25%), 
                        linear-gradient(45deg, transparent 75%, #f0f0f0 75%), 
                        linear-gradient(-45deg, transparent 75%, #f0f0f0 75%);
            background-size: 20px 20px;
            background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <x-navbar></x-navbar>

    <!-- Hero Section -->
    <section class="gradient-bg text-white py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center fade-in">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Pengumuman</h1>
                <p class="text-xl opacity-90">Informasi dan pengumuman terbaru dari kami</p>
            </div>
        </div>
    </section>

    <!-- Pengumuman Content -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            @if($pengumuman->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($pengumuman as $item)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover fade-in">
                        <!-- Gambar Pengumuman -->
                        @if($item->gambar)
                            <div class="h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $item->gambar) }}" 
                                     alt="{{ $item->judul }}" 
                                     class="w-full h-full object-cover transition duration-300 hover:scale-105">
                            </div>
                        @else
                            <div class="h-48 image-placeholder flex items-center justify-center">
                                <div class="text-center text-gray-400">
                                    <i class="fas fa-newspaper text-5xl mb-2"></i>
                                    <p class="text-sm">Tidak ada gambar</p>
                                </div>
                            </div>
                        @endif
                        
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2">{{ $item->judul }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">
                                {{ Str::limit(strip_tags($item->deskripsi), 120) }}
                            </p>
                            
                            <div class="flex justify-between items-center text-sm text-gray-500 mb-4">
                                <div class="flex items-center">
                                    <i class="fas fa-user mr-2"></i>
                                    <span>{{ $item->penulis }}</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-calendar mr-2"></i>
                                    <span>{{ $item->created_at->format('d M Y') }}</span>
                                </div>
                            </div>
                            
                            <a href="{{ route('pengumuman.detail', $item->id) }}" 
                               class="block w-full bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white text-center font-medium py-3 px-4 rounded-lg transition duration-300 transform hover:scale-105">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($pengumuman->hasPages())
                <div class="mt-12 flex justify-center">
                    <div class="bg-white px-6 py-3 rounded-lg shadow-md">
                        {{ $pengumuman->links() }}
                    </div>
                </div>
                @endif
            @else
                <!-- Empty State -->
                <div class="text-center py-16 fade-in">
                    <div class="max-w-md mx-auto">
                        <div class="bg-gradient-to-r from-blue-100 to-purple-100 rounded-full w-32 h-32 flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-inbox text-5xl text-gray-500"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-700 mb-3">Belum ada pengumuman</h3>
                        <p class="text-gray-600">Silakan kembali lagi nanti untuk melihat pengumuman terbaru.</p>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Footer -->
    <x-footer></x-footer>

    <script>
        // Image error handling
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                img.addEventListener('error', function() {
                    this.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZjBmMGYwIi8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIxNCIgZmlsbD0iIzk5OSIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZHk9Ii4zZW0iPkltYWdlIE5vdCBGb3VuZDwvdGV4dD48L3N2Zz4=';
                    this.alt = 'Gambar tidak tersedia';
                });
            });
        });
    </script>
</body>
</html>