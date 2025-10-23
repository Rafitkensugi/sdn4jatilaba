<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Negeri 4 Jatilaba</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --oxford-blue: #67308b;
            --maize-yellow: #F2C94C;
        }

        header.sticky-header {
            background-color: var(--oxford-blue) !important;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
        }

        .school-title {
            color: white !important;
            font-family: 'Helvetica', serif;
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

        /* Desktop Dropdown */
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

        /* Mobile Menu Button - Enhanced */
        #mobile-menu-button {
            background-color: var(--maize-yellow) !important;
            color: var(--oxford-blue) !important;
            transition: all 0.3s ease;
            padding: 0.75rem;
            border-radius: 0.5rem;
            box-shadow: 0 2px 8px rgba(242, 201, 76, 0.3);
        }

        #mobile-menu-button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(242, 201, 76, 0.4);
        }

        #mobile-menu-button:active {
            transform: scale(0.98);
        }

        /* Hamburger Icon Style */
        .hamburger-icon {
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Mobile Menu */
        #mobile-menu {
            display: none;
        }

        #mobile-menu.show {
            display: block;
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #mobile-menu a,
        #mobile-menu .mobile-dropdown-toggle {
            color: white !important;
            padding: 12px;
            border-left: 3px solid transparent;
            transition: all 0.2s;
            text-decoration: none;
            display: block;
        }

        #mobile-menu a:hover,
        #mobile-menu .mobile-dropdown-toggle:hover {
            color: var(--maize-yellow) !important;
            border-left-color: var(--maize-yellow);
            background-color: rgba(255, 255, 255, 0.05);
        }

        /* Mobile Dropdown */
        .mobile-dropdown-toggle {
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .mobile-dropdown-toggle.active {
            border-left-color: var(--maize-yellow) !important;
            background-color: rgba(255, 255, 255, 0.05);
        }

        .mobile-dropdown-content {
            display: none;
            background-color: rgba(0, 0, 0, 0.2);
            margin-left: 12px;
            border-left: 2px solid rgba(255, 255, 255, 0.2);
        }

        .mobile-dropdown-content.show {
            display: block;
            animation: slideDown 0.2s ease-out;
        }

        .mobile-dropdown-content a {
            padding: 10px 16px;
            font-size: 0.9rem;
        }

        .chevron-icon {
            transition: transform 0.3s ease;
        }

        .chevron-icon.rotate {
            transform: rotate(180deg);
        }

        #mobile-menu .btn-register-mobile {
            background-color: var(--maize-yellow) !important;
            color: var(--oxford-blue) !important;
            font-weight: 600;
            width: 100%;
            border: none;
            padding: 0.75rem;
            border-radius: 0.5rem;
            margin-top: 0.5rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        #mobile-menu .btn-register-mobile:hover {
            background-color: #e0b83a !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .school-title {
                font-size: 1.1rem;
            }
            .school-tagline {
                font-size: 0.7rem;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="sticky-header shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="flex items-center justify-center">
                        <img 
                            src="https://files.catbox.moe/tfztat.png" 
                            alt="Logo SDN 04 Jatilaba" 
                            class="h-10 w-auto object-contain"
                        >
                    </div>
                    <div>
                        <h1 class="school-title text-2xl font-bold">SD NEGERI 4 JATILABA</h1>
                        <p class="school-tagline">Jalan Keplik, Desa Jatilaba, Kec. Margasari, Kab. Tegal</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('beranda') }}" class="nav-link">Beranda</a>

                    <div class="dropdown">
                        <a href="#" class="nav-link flex items-center">
                            Profil <i class="fas fa-chevron-down text-xs ml-1 mt-0.5"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('profil-sekolah') }}">Profil Sekolah</a>
                            <a href="{{ route('visi-misi') }}">Visi & Misi</a>
                            <a href="{{ route('sejarah') }}">Sejarah</a>
                            <a href="{{ route('sambutan') }}">Kepala Sekolah</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a href="#" class="nav-link flex items-center">
                            Informasi <i class="fas fa-chevron-down text-xs ml-1 mt-0.5"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('pengumuman') }}">Pengumuman</a>
                            <a href="{{ route('agenda') }}">Agenda</a>
                            <a href="{{ route('prestasi') }}">Prestasi</a>
                        </div>
                    </div>

                    <a href="{{ route('pengunjung.fasilitas.index') }}" class="nav-link">Fasilitas</a>
                    <a href="{{ route('kontak.index') }}" class="nav-link">Kontak</a>

                    @can('access admin panel')
                        <a href="{{ route('admin.dashboard') }}" class="nav-link">Admin</a>
                    @endcan
                </nav>

                <button 
                    onclick="window.location.href='{{ route('spmb') }}'" 
                    class="hidden md:block btn-register px-6 py-2 rounded-lg font-medium">
                    SPMB
                </button>

                <!-- Mobile Menu Button - Enhanced with Yellow Background -->
                <button id="mobile-menu-button" class="md:hidden" aria-label="Toggle menu">
                    <i class="fas fa-bars hamburger-icon"></i>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <nav id="mobile-menu" class="md:hidden mt-4 pb-4 space-y-2" aria-label="Mobile navigation">
                <a href="{{ route('beranda') }}">Beranda</a>

                <!-- Profil Dropdown -->
                <div class="mobile-dropdown">
                    <div class="mobile-dropdown-toggle" data-target="profil">
                        <span>Profil</span>
                        <i class="fas fa-chevron-down text-sm chevron-icon"></i>
                    </div>
                    <div class="mobile-dropdown-content" id="profil-content">
                        <a href="{{ route('profil-sekolah') }}">Profil Sekolah</a>
                        <a href="{{ route('visi-misi') }}">Visi & Misi</a>
                        <a href="{{ route('sejarah') }}">Sejarah</a>
                        <a href="{{ route('sambutan') }}">Kepala Sekolah</a>
                    </div>
                </div>

                <!-- Informasi Dropdown -->
                <div class="mobile-dropdown">
                    <div class="mobile-dropdown-toggle" data-target="informasi">
                        <span>Informasi</span>
                        <i class="fas fa-chevron-down text-sm chevron-icon"></i>
                    </div>
                    <div class="mobile-dropdown-content" id="informasi-content">
                        <a href="{{ route('pengumuman') }}">Pengumuman</a>
                        <a href="{{ route('agenda') }}">Agenda</a>
                        <a href="{{ route('prestasi') }}">Prestasi</a>
                    </div>
                </div>

                <a href="{{ route('pengunjung.fasilitas.index') }}">Fasilitas</a>
                <a href="{{ route('kontak.index') }}">Kontak</a>

                @can('access admin panel')
                    <a href="{{ route('admin.dashboard') }}">Admin</a>
                @endcan

                <button 
                    onclick="window.location.href='{{ route('spmb') }}'" 
                    class="btn-register-mobile">
                    SPMB
                </button>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Konten halaman akan ditampilkan di sini -->
    </main>

    <script>
        (function () {
            'use strict';

            document.addEventListener('DOMContentLoaded', function () {
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const mobileMenu = document.getElementById('mobile-menu');

                if (!mobileMenuButton || !mobileMenu) return;

                // Toggle main mobile menu
                mobileMenuButton.addEventListener('click', function (e) {
                    e.stopPropagation();
                    const isExpanded = mobileMenu.classList.toggle('show');
                    const icon = this.querySelector('i');
                    if (icon) {
                        icon.className = isExpanded
                            ? 'fas fa-times hamburger-icon'
                            : 'fas fa-bars hamburger-icon';
                    }
                });

                // Handle dropdown toggles
                const dropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
                dropdownToggles.forEach(toggle => {
                    toggle.addEventListener('click', function (e) {
                        e.stopPropagation();
                        const targetId = this.getAttribute('data-target') + '-content';
                        const content = document.getElementById(targetId);
                        const icon = this.querySelector('.chevron-icon');

                        if (!content || !icon) return;

                        const isShown = content.classList.toggle('show');
                        icon.classList.toggle('rotate', isShown);
                        this.classList.toggle('active', isShown);
                    });
                });

                // Close menu when clicking outside
                document.addEventListener('click', function (e) {
                    if (
                        !mobileMenu.contains(e.target) &&
                        !mobileMenuButton.contains(e.target) &&
                        mobileMenu.classList.contains('show')
                    ) {
                        mobileMenu.classList.remove('show');
                        mobileMenuButton.querySelector('i').className = 'fas fa-bars hamburger-icon';

                        // Close all dropdowns
                        document.querySelectorAll('.mobile-dropdown-content').forEach(el => {
                            el.classList.remove('show');
                        });
                        document.querySelectorAll('.chevron-icon').forEach(el => {
                            el.classList.remove('rotate');
                        });
                        document.querySelectorAll('.mobile-dropdown-toggle').forEach(el => {
                            el.classList.remove('active');
                        });
                    }
                });

                // Prevent closing when clicking inside menu
                mobileMenu.addEventListener('click', e => e.stopPropagation());
            });
        })();
    </script>
</body>
</html>