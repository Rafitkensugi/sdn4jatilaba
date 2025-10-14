<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navbar SD Negeri 4 Jatilaba</title>

  <!-- Font Awesome 6 (untuk ikon) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
    :root {
      --oxford-blue: #67308B;
      --maize-yellow: #FCFF00;
      --light-purple: #8B51C7;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Header dengan efek glassmorphism saat scroll */
    header.sticky-header {
      background: linear-gradient(135deg, var(--oxford-blue) 0%, var(--light-purple) 100%);
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
      position: sticky;
      top: 0;
      z-index: 1000;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    header.sticky-header.scrolled {
      background: rgba(103, 48, 139, 0.95);
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }

    /* Shine effect on header */
    header.sticky-header::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
      animation: shine 8s infinite;
    }

    @keyframes shine {
      0%, 100% { left: -100%; }
      50% { left: 100%; }
    }

    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    .header-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 0;
      transition: padding 0.3s ease;
    }

    header.scrolled .header-content {
      padding: 0.5rem 0;
    }

    /* Logo & Info Sekolah dengan animasi */
    .school-info {
      display: flex;
      align-items: center;
      gap: 1rem;
      animation: slideInLeft 0.6s ease-out;
    }

    @keyframes slideInLeft {
      from {
        opacity: 0;
        transform: translateX(-30px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    .school-logo {
      position: relative;
      transition: transform 0.3s ease;
    }

    .school-logo:hover {
      transform: scale(1.1) rotate(5deg);
    }

    .school-logo img {
      height: 50px;
      object-fit: contain;
      filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
      transition: all 0.3s ease;
    }

    header.scrolled .school-logo img {
      height: 40px;
    }

    .school-text h1 {
      color: white;
      font-size: 1.5rem;
      font-weight: 700;
      letter-spacing: -0.5px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
      transition: font-size 0.3s ease;
    }

    header.scrolled .school-text h1 {
      font-size: 1.25rem;
    }

    .school-text p {
      color: rgba(255, 255, 255, 0.85);
      font-size: 0.8rem;
      margin-top: 0.25rem;
      opacity: 1;
      max-height: 50px;
      transition: all 0.3s ease;
      overflow: hidden;
    }

    header.scrolled .school-text p {
      opacity: 0;
      max-height: 0;
      margin: 0;
    }

    /* Navigation dengan animasi */
    .nav-menu {
      display: flex;
      align-items: center;
      gap: 1.5rem;
      animation: slideInRight 0.6s ease-out;
    }

    @keyframes slideInRight {
      from {
        opacity: 0;
        transform: translateX(30px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    .nav-link {
      color: rgba(255, 255, 255, 0.9);
      text-decoration: none;
      font-weight: 500;
      position: relative;
      padding: 0.5rem 0;
      display: flex;
      align-items: center;
      gap: 0.3rem;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .nav-link i {
      font-size: 0.75rem;
      opacity: 0.8;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      color: var(--maize-yellow);
      transform: translateY(-2px);
    }

    .nav-link:hover i {
      opacity: 1;
      transform: scale(1.2);
    }

    /* Underline animation */
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 50%;
      width: 0;
      height: 2px;
      background: linear-gradient(90deg, var(--maize-yellow), #FFD700);
      transition: all 0.3s ease;
      transform: translateX(-50%);
    }

    .nav-link:not(.dropdown-toggle):hover::after {
      width: 100%;
    }

    /* Dropdown dengan animasi modern */
    .dropdown {
      position: relative;
    }

    .dropdown-toggle .fa-chevron-down {
      transition: transform 0.3s ease;
    }

    .dropdown:hover .dropdown-toggle .fa-chevron-down {
      transform: rotate(180deg);
    }

    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      background: white;
      min-width: 220px;
      border-radius: 12px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
      padding: 0.75rem 0;
      z-index: 100;
      opacity: 0;
      visibility: hidden;
      transform: translateY(-20px) scale(0.95);
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      overflow: hidden;
    }

    .dropdown-menu::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, var(--oxford-blue), var(--light-purple));
    }

    .dropdown:hover .dropdown-menu {
      opacity: 1;
      visibility: visible;
      transform: translateY(10px) scale(1);
    }

    .dropdown-menu a {
      display: flex;
      align-items: center;
      padding: 0.85rem 1.25rem;
      color: var(--oxford-blue);
      text-decoration: none;
      font-weight: 500;
      gap: 0.75rem;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .dropdown-menu a::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: 4px;
      background: var(--maize-yellow);
      transform: scaleY(0);
      transition: transform 0.3s ease;
    }

    .dropdown-menu a:hover::before {
      transform: scaleY(1);
    }

    .dropdown-menu a i {
      font-size: 1rem;
      color: var(--oxford-blue);
      transition: all 0.3s ease;
    }

    .dropdown-menu a:hover {
      background: linear-gradient(90deg, rgba(103, 48, 139, 0.08), transparent);
      padding-left: 1.75rem;
      color: var(--oxford-blue);
    }

    .dropdown-menu a:hover i {
      color: var(--light-purple);
      transform: scale(1.2) rotate(10deg);
    }

    /* Tombol SPMB dengan efek menarik */
    .btn-register {
      background: linear-gradient(135deg, var(--maize-yellow) 0%, #FFD700 100%);
      color: var(--oxford-blue);
      font-weight: 700;
      border: none;
      padding: 0.65rem 1.5rem;
      border-radius: 0.75rem;
      box-shadow: 0 4px 15px rgba(252, 255, 0, 0.3);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      position: relative;
      overflow: hidden;
      animation: pulse 2s infinite;
      cursor: pointer;
    }

    @keyframes pulse {
      0%, 100% {
        box-shadow: 0 4px 15px rgba(252, 255, 0, 0.3);
      }
      50% {
        box-shadow: 0 4px 25px rgba(252, 255, 0, 0.5);
      }
    }

    .btn-register::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.3);
      transform: translate(-50%, -50%);
      transition: width 0.5s, height 0.5s;
    }

    .btn-register:hover::before {
      width: 300px;
      height: 300px;
    }

    .btn-register:hover {
      transform: translateY(-3px) scale(1.05);
      box-shadow: 0 8px 25px rgba(252, 255, 0, 0.5);
    }

    .btn-register i {
      position: relative;
      z-index: 1;
      transition: transform 0.3s ease;
    }

    .btn-register:hover i {
      transform: scale(1.2);
    }

    /* Mobile Menu Button dengan animasi */
    .mobile-menu-button {
      display: none;
      background: linear-gradient(135deg, var(--maize-yellow) 0%, #FFD700 100%);
      color: var(--oxford-blue);
      border: none;
      width: 45px;
      height: 45px;
      border-radius: 10px;
      font-size: 1.25rem;
      cursor: pointer;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .mobile-menu-button::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      background: rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      transform: translate(-50%, -50%);
      transition: width 0.3s, height 0.3s;
    }

    .mobile-menu-button:hover::before {
      width: 100px;
      height: 100px;
    }

    .mobile-menu-button:hover {
      transform: scale(1.1);
    }

    .mobile-menu-button i {
      position: relative;
      z-index: 1;
      transition: transform 0.3s ease;
    }

    .mobile-menu-button.active i {
      transform: rotate(90deg);
    }

    /* Responsif */
    @media (max-width: 768px) {
      .nav-menu,
      .btn-register {
        display: none;
      }

      .mobile-menu-button {
        display: flex;
        align-items: center;
        justify-content: center;
      }

      /* Mobile Menu Overlay */
      .nav-menu.mobile-active {
        display: flex;
        flex-direction: column;
        position: fixed;
        top: 80px;
        left: 0;
        right: 0;
        background: linear-gradient(135deg, var(--oxford-blue) 0%, var(--light-purple) 100%);
        padding: 1.5rem;
        gap: 0.5rem;
        animation: slideDown 0.4s ease-out;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        max-height: calc(100vh - 80px);
        overflow-y: auto;
      }

      @keyframes slideDown {
        from {
          opacity: 0;
          transform: translateY(-20px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .nav-menu.mobile-active .nav-link {
        width: 100%;
        padding: 0.85rem 1rem;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 8px;
        transition: all 0.3s ease;
      }

      .nav-menu.mobile-active .nav-link::after {
        display: none;
      }

      .nav-menu.mobile-active .nav-link:hover {
        background: rgba(252, 255, 0, 0.15);
        padding-left: 1.5rem;
        transform: translateX(5px) translateY(0);
      }

      .nav-menu.mobile-active .dropdown {
        width: 100%;
      }

      .nav-menu.mobile-active .dropdown-menu {
        position: static;
        opacity: 0;
        visibility: hidden;
        max-height: 0;
        transform: none;
        background: rgba(255, 255, 255, 0.05);
        margin-top: 0.5rem;
        transition: all 0.3s ease;
        box-shadow: none;
      }

      .nav-menu.mobile-active .dropdown-menu::before {
        display: none;
      }

      .nav-menu.mobile-active .dropdown.active .dropdown-menu {
        opacity: 1;
        visibility: visible;
        max-height: 400px;
      }

      .nav-menu.mobile-active .dropdown-menu a {
        color: rgba(255, 255, 255, 0.9);
        padding: 0.75rem 1rem;
      }

      .nav-menu.mobile-active .dropdown-menu a i {
        color: rgba(255, 255, 255, 0.8);
      }

      .nav-menu.mobile-active .dropdown-menu a:hover {
        background: rgba(252, 255, 0, 0.1);
        color: var(--maize-yellow);
      }

      .nav-menu.mobile-active .dropdown-menu a:hover i {
        color: var(--maize-yellow);
      }

      .nav-menu.mobile-active .btn-register {
        display: flex;
        width: 100%;
        justify-content: center;
        margin-top: 0.5rem;
        padding: 1rem;
      }

      .school-text h1 {
        font-size: 1.1rem;
      }

      .school-text p {
        font-size: 0.7rem;
      }

      .school-logo img {
        height: 40px;
      }

      header.scrolled .school-logo img {
        height: 35px;
      }
    }

    @media (max-width: 480px) {
      .school-text h1 {
        font-size: 0.95rem;
      }

      .school-text p {
        display: none;
      }

      .school-logo img {
        height: 35px;
      }

      header.scrolled .school-logo img {
        height: 30px;
      }
    }
  </style>
</head>
<body>

<!-- Header / Navbar -->
<header class="sticky-header" id="header">
  <div class="container">
    <div class="header-content">
      <!-- Logo & Info Sekolah -->
      <div class="school-info">
        <div class="school-logo">
          <img src="https://files.catbox.moe/tfztat.png" alt="Logo SDN 04 Jatilaba" />
        </div>
        <div class="school-text">
          <h1>SD NEGERI 4 JATILABA</h1>
          <p>Jalan Keplik, Desa Jatilaba, Kec. Margasari, Kab. Tegal</p>
        </div>
      </div>

      <!-- Navigation Menu (Desktop & Mobile) -->
      <nav class="nav-menu" id="navMenu">
        <a href="{{ route('beranda') }}" class="nav-link">
          <i class="fas fa-home"></i> Beranda
        </a>

        <div class="dropdown" id="dropdownProfil">
          <a href="#" class="nav-link dropdown-toggle" id="dropdownToggle">
            <i class="fas fa-user-graduate"></i> Profil
            <i class="fas fa-chevron-down"></i>
          </a>
          <div class="dropdown-menu">
            <a href="#profil"><i class="fas fa-building"></i> Profil Sekolah</a>
            <a href="{{ route('visi-misi') }}"><i class="fas fa-bullseye"></i> Visi & Misi</a>
            <a href="#sejarah"><i class="fas fa-history"></i> Sejarah</a>
            <a href="{{ route('sambutan') }}"><i class="fas fa-user-tie"></i> Kepala Sekolah</a>
          </div>
        </div>

        <a href="{{ route('program') }}" class="nav-link">
          <i class="fas fa-tasks"></i> Program
        </a>
        <a href="{{ route('fasilitas.index') }}" class="nav-link">
          <i class="fas fa-school"></i> Fasilitas
        </a>
        <a href="{{ route('kontak.index') }}" class="nav-link">
          <i class="fas fa-address-book"></i> Kontak
        </a>

        <a href="{{ route('ppdb') }}" class="btn-register">
          <i class="fas fa-user-plus"></i> SPMB
        </a>
      </nav>

      <!-- Mobile Menu Button -->
      <button class="mobile-menu-button" id="mobileMenuButton" aria-label="Toggle menu">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </div>
</header>

<!-- Scripts -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const navMenu = document.getElementById('navMenu');
    const header = document.getElementById('header');
    const dropdownProfil = document.getElementById('dropdownProfil');
    const dropdownToggle = document.getElementById('dropdownToggle');

    // Toggle mobile menu
    mobileMenuButton.addEventListener('click', function () {
      navMenu.classList.toggle('mobile-active');
      this.classList.toggle('active');
      
      // Animate icon
      const icon = this.querySelector('i');
      if (navMenu.classList.contains('mobile-active')) {
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
      } else {
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
        // Reset dropdown when closing menu
        dropdownProfil.classList.remove('active');
      }
    });

    // Mobile dropdown toggle
    dropdownToggle.addEventListener('click', function(e) {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        dropdownProfil.classList.toggle('active');
      }
    });

    // Close mobile menu when clicking a link
    const navLinks = navMenu.querySelectorAll('a:not(.dropdown-toggle)');
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        if (window.innerWidth <= 768) {
          navMenu.classList.remove('mobile-active');
          mobileMenuButton.classList.remove('active');
          const icon = mobileMenuButton.querySelector('i');
          icon.classList.remove('fa-times');
          icon.classList.add('fa-bars');
        }
      });
    });

    // Header scroll effect
    window.addEventListener('scroll', () => {
      const currentScroll = window.pageYOffset;

      if (currentScroll > 100) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });

    // Close mobile menu on window resize
    window.addEventListener('resize', () => {
      if (window.innerWidth > 768) {
        navMenu.classList.remove('mobile-active');
        mobileMenuButton.classList.remove('active');
        dropdownProfil.classList.remove('active');
        const icon = mobileMenuButton.querySelector('i');
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
      }
    });
  });
</script>

</body>
</html>