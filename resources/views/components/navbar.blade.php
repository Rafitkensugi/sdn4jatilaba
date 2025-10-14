<style>
    :root {
        --oxford-blue: #002147;
        --maize-yellow: #F2C94C;
    }

    header.sticky-header {
        background-color: var(--oxford-blue) !important;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
    }

    .school-icon-bg {
        background-color: var(--maize-yellow) !important;
    }

    .school-icon {
        color: var(--oxford-blue) !important;
    }

    .school-title {
        color: white !important;
        font-family: 'Georgia', serif;
        letter-spacing: -0.5px;
    }

    .school-tagline {
        color: rgba(255, 255, 255, 0.85) !important;
        font-size: 0.85rem;
    }

    /* Desktop Nav */
    .nav-link {
        color: rgba(255, 255, 255, 0.9) !important;
        position: relative;
        font-weight: 500;
        text-decoration: none;
        padding: 0.5rem 0;
    }

    .nav-link:hover {
        color: var(--maize-yellow) !important;
    }

    .nav-link:not(.dropdown-toggle):hover::after {
        content: '';
        position: absolute;
        bottom: -4px;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: var(--maize-yellow);
        transition: width 0.3s ease;
    }

    /* Dropdown */
    .dropdown {
        position: relative;
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        min-width: 200px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        border-radius: 8px;
        padding: 8px 0;
        z-index: 60;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
    }

    .dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .dropdown-menu a {
        display: block;
        padding: 10px 20px;
        color: var(--oxford-blue) !important;
        text-decoration: none;
        font-weight: 500;
        transition: background 0.2s, color 0.2s;
    }

    .dropdown-menu a:hover {
        background-color: rgba(0, 33, 71, 0.05);
        color: var(--maize-yellow) !important;
        padding-left: 24px;
    }

    /* Daftar Sekarang Button */
    .btn-register {
        background-color: var(--maize-yellow) !important;
        color: var(--oxford-blue) !important;
        font-weight: 600;
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .btn-register:hover {
        background-color: #e0b83a !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.18);
    }

    /* Mobile Menu Button */
    #mobile-menu-button {
        background-color: var(--maize-yellow) !important;
        color: var(--oxford-blue) !important;
        transition: transform 0.2s;
    }

    #mobile-menu-button:hover {
        transform: scale(1.05);
    }

    /* Mobile Menu */
    #mobile-menu a {
        color: white !important;
        padding-left: 12px;
        border-left: 3px solid transparent;
        transition: border-color 0.2s;
        text-decoration: none;
        display: block;
    }

    #mobile-menu a:hover {
        color: var(--maize-yellow) !important;
        border-left-color: var(--maize-yellow);
    }

    #mobile-menu .btn-register-mobile {
        background-color: var(--maize-yellow) !important;
        color: var(--oxford-blue) !important;
        font-weight: 600;
        width: 100%;
        border: none;
    }
</style>

<!-- Header -->
<header class="sticky-header shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="school-icon-bg p-2 rounded-lg">
                    <i class="fas fa-school school-icon text-2xl"></i>
                </div>
                <div>
                    <h1 class="school-title text-2xl font-bold">SDN 04 Jatilaba</h1>
                    <p class="school-tagline">Membangun Generasi Unggul</p>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="{{ route('beranda') }}" class="nav-link">Beranda</a>

                <!-- Dropdown Tentang dengan #anchor -->
                <div class="dropdown">
                    <a href="#" class="nav-link flex items-center">
                        Profil
                        <i class="fas fa-chevron-down text-xs ml-1 mt-0.5"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="#profil">Profil Sekolah</a>
                        <a href="{{ route('visi-misi') }}">Visi & Misi</a>
                        <a href="#sejarah">Sejarah</a>
                        <a href="{{ route('sambutan') }}">Kepala Sekolah</a>
                    </div>
                </div>

                <a href="{{ route('program') }}" class="nav-link">Program</a>
                <a href="{{ route('fasilitas.index') }}" class="nav-link">Fasilitas</a>
                <a href="{{ route('kontak.index') }}" class="nav-link">Kontak</a>
            </nav>

            <button 
                onclick="window.location.href='{{ route('ppdb') }}'" 
                class="hidden md:block btn-register px-6 py-2 rounded-lg font-medium">
                PPDB
            </button>


            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <nav id="mobile-menu" class="hidden md:hidden mt-4 pb-4 space-y-3">
            <a href="{{ route('beranda') }}" class="py-2">Beranda</a>
            <a href="#" class="py-2">Profil</a>
            <a href="{{ route('program') }}" class="py-2">Program</a>
            <a href="{{ route('fasilitas.index') }}" class="py-2">Fasilitas</a>
            <a href="{{ route('kontak.index') }}" class="py-2">Kontak</a>
            <button 
                onclick="window.location.href='{{ route('ppdb') }}'" 
                class="hidden md:block btn-register px-6 py-2 rounded-lg font-medium">
                PPDB
            </button>
        </nav>
    </div>
</header>

<!-- Mobile Menu Toggle Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>