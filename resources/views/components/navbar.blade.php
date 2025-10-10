 <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="bg-blue-600 p-2 rounded-lg">
                        <i class="fas fa-school text-white text-2xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Sekolah Harapan Bangsa</h1>
                        <p class="text-sm text-gray-600">Membangun Generasi Unggul</p>
                    </div>
                </div>
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Beranda</a>
                    <a href="#about" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Tentang</a>
                    <a href="#programs" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Program</a>
                    <a href="{{ route('fasilitas.index') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Fasilitas</a>
                    <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Kontak</a>
                </nav>
                <button class="hidden md:block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors font-medium">
                    Daftar Sekarang
                </button>
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden bg-blue-600 text-white p-2 rounded-lg">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
            <!-- Mobile Navigation -->
            <nav id="mobile-menu" class="hidden md:hidden mt-4 pb-4 space-y-3">
                <a href="#home" class="block text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Beranda</a>
                <a href="#about" class="block text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Tentang</a>
                <a href="#programs" class="block text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Program</a>
                <a href="#facilities" class="block text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Fasilitas</a>
                <a href="#contact" class="block text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Kontak</a>
                <button class="w-full bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors font-medium mt-2">
                    Daftar Sekarang
                </button>
            </nav>
        </div>
    </header>