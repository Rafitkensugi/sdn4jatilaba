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

    /* Dropdown */
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

    /* Mobile Menu Button */
    #mobile-menu-button {
        background-color: var(--maize-yellow) !important;
        color: var(--oxford-blue) !important;
        transition: transform 0.2s;
    }

    #mobile-menu-button:hover {
        transform: scale(1.05);
    }

    /* Mobile Menu - Using display instead of max-height for more reliable behavior */
    #mobile-menu {
        display: none;
    }

    #mobile-menu.show {
        display: block;
    }

    #mobile-menu a {
        color: white !important;
        padding: 12px;
        border-left: 3px solid transparent;
        transition: border-color 0.2s;
        text-decoration: none;
        display: block;
    }

    #mobile-menu a:hover {
        color: var(--maize-yellow) !important;
        border-left-color: var(--maize-yellow);
        background-color: rgba(255, 255, 255, 0.05);
    }

    /* Mobile Dropdown */
    .mobile-dropdown-toggle {
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        color: white !important;
        padding: 12px;
        border-left: 3px solid transparent;
        transition: all 0.2s;
    }

    .mobile-dropdown-toggle:hover {
        color: var(--maize-yellow) !important;
        border-left-color: var(--maize-yellow);
        background-color: rgba(255, 255, 255, 0.05);
    }

    .mobile-dropdown-toggle.active {
        border-left-color: var(--maize-yellow) !important;
    }

    .mobile-dropdown-content {
        display: none;
        background-color: rgba(0, 0, 0, 0.2);
        margin-left: 12px;
        border-left: 2px solid rgba(255, 255, 255, 0.2);
    }

    .mobile-dropdown-content.show {
        display: block;
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
    }
</style>

<!-- Header -->
<header class="sticky-header shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <!-- Logo tanpa latar kuning -->
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

                <!-- Dropdown Tentang -->
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

                <div class="dropdown">
                    <a href="#" class="nav-link flex items-center">
                        Informasi
                        <i class="fas fa-chevron-down text-xs ml-1 mt-0.5"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ route('visi-misi') }}">Pengumuman</a>
                        <a href="{{ route('agenda') }}">Agenda</a>
                    </div>
                </div>
                <a href="{{ route('fasilitas.index') }}" class="nav-link">Fasilitas</a>
                <a href="{{ route('kontak.index') }}" class="nav-link">Kontak</a>
            </nav>

            <button 
                onclick="window.location.href='{{ route('spmb') }}'" 
                class="hidden md:block btn-register px-6 py-2 rounded-lg font-medium">
                SPMB
            </button>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <nav id="mobile-menu" class="md:hidden mt-4 pb-4 space-y-2">
            <a href="{{ route('beranda') }}">Beranda</a>
            
            <!-- Mobile Dropdown Profil -->
            <div class="mobile-dropdown">
                <div class="mobile-dropdown-toggle" id="mobile-dropdown-toggle">
                    <span>Profil</span>
                    <i class="fas fa-chevron-down text-sm chevron-icon" id="chevron-icon"></i>
                </div>
                <div class="mobile-dropdown-content" id="mobile-dropdown-content">
                    <a href="#profil">Profil Sekolah</a>
                    <a href="{{ route('visi-misi') }}">Visi & Misi</a>
                    <a href="#sejarah">Sejarah</a>
                    <a href="{{ route('sambutan') }}">Kepala Sekolah</a>
                </div>
            </div>

            <a href="{{ route('program') }}">Program</a>
            <a href="{{ route('fasilitas.index') }}">Fasilitas</a>
            <a href="{{ route('kontak.index') }}">Kontak</a>
            
            <button 
                onclick="window.location.href='{{ route('spmb') }}'" 
                class="btn-register-mobile">
                SPMB
            </button>
        </nav>
    </div>
</header>

<!-- Mobile Menu Toggle Script -->
<script>
    (function() {
        'use strict';
        
        // Wait for DOM to be fully loaded
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initNavbar);
        } else {
            initNavbar();
        }
        
        function initNavbar() {
            // Get elements
            var mobileMenuButton = document.getElementById('mobile-menu-button');
            var mobileMenu = document.getElementById('mobile-menu');
            var mobileDropdownToggle = document.getElementById('mobile-dropdown-toggle');
            var mobileDropdownContent = document.getElementById('mobile-dropdown-content');
            var chevronIcon = document.getElementById('chevron-icon');
            
            // Check if elements exist
            if (!mobileMenuButton || !mobileMenu) {
                console.error('Mobile menu elements not found');
                return;
            }
            
            // Toggle Mobile Menu
            mobileMenuButton.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                mobileMenu.classList.toggle('show');
                
                // Change icon
                var icon = this.querySelector('i');
                if (icon) {
                    if (mobileMenu.classList.contains('show')) {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-times');
                    } else {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                        
                        // Close dropdown when menu closes
                        if (mobileDropdownContent && mobileDropdownContent.classList.contains('show')) {
                            mobileDropdownContent.classList.remove('show');
                            if (chevronIcon) chevronIcon.classList.remove('rotate');
                            if (mobileDropdownToggle) mobileDropdownToggle.classList.remove('active');
                        }
                    }
                }
            });
            
            // Toggle Mobile Dropdown
            if (mobileDropdownToggle) {
                mobileDropdownToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    if (mobileDropdownContent) {
                        mobileDropdownContent.classList.toggle('show');
                    }
                    
                    if (chevronIcon) {
                        chevronIcon.classList.toggle('rotate');
                    }
                    
                    this.classList.toggle('active');
                });
            }
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                if (!mobileMenu.contains(event.target) && 
                    !mobileMenuButton.contains(event.target) && 
                    mobileMenu.classList.contains('show')) {
                    
                    mobileMenu.classList.remove('show');
                    
                    var icon = mobileMenuButton.querySelector('i');
                    if (icon) {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                    
                    // Reset dropdown
                    if (mobileDropdownContent && mobileDropdownContent.classList.contains('show')) {
                        mobileDropdownContent.classList.remove('show');
                        if (chevronIcon) chevronIcon.classList.remove('rotate');
                        if (mobileDropdownToggle) mobileDropdownToggle.classList.remove('active');
                    }
                }
            });
            
            // Prevent menu from closing when clicking inside
            if (mobileMenu) {
                mobileMenu.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            }
        }
    })();
</script>