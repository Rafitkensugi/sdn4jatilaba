<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>SDN 4 Jatilaba - @yield('title','Home')</title>
  <!-- Tailwind compiled CSS -->
  <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('assets/js/app.js') }}" defer></script>
</head>
<body class="antialiased bg-white text-gray-800">
  <header class="shadow-sm sticky top-0 bg-white/60 backdrop-blur z-50">
    <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
      <a href="{{ route('home') }}" class="flex items-center gap-3">
        <img src="{{ asset('uploads/logo/logo.png') }}" alt="SDN4" class="w-12 h-12 rounded-full border-2 border-green-500">
        <div>
          <h1 class="font-bold text-lg text-green-700">SDN Negeri 4 Jatilaba</h1>
          <p class="text-sm text-slate-600">Belajar | Berbudaya | Berkarya</p>
        </div>
      </a>

      <nav class="hidden md:flex gap-6 items-center">
        <a href="{{ route('home') }}" class="nav-link">Home</a>
        <a href="{{ route('profil') }}" class="nav-link">Profil</a>
        <a href="{{ route('berita.index') }}" class="nav-link">Berita</a>
        <a href="{{ route('galeri') }}" class="nav-link">Galeri</a>
        <a href="{{ route('ppdb') }}" class="nav-link btn-ppdb">PPDB</a>
      </nav>

      <button id="mobileMenuBtn" class="md:hidden p-2">
        <span class="sr-only">Menu</span>
        <!-- simple hamburger -->
        <svg width="24" height="24" fill="none"><path d="M4 7h16M4 12h16M4 17h16" stroke="#064E3B" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
    </div>
  </header>

  <main class="min-h-[70vh]">
    @yield('content')
  </main>

  <footer class="bg-green-50 border-t">
    <div class="max-w-6xl mx-auto px-4 py-8 flex flex-col md:flex-row justify-between items-start gap-6">
      <div>
        <h3 class="font-bold text-green-800">SDN Negeri 4 Jatilaba</h3>
        <p class="text-sm text-slate-600">Alamat sekolah, telepon, jam kerja, dan info singkat.</p>
      </div>
      <div>
        <h4 class="font-semibold text-sm">Navigasi</h4>
        <ul class="text-sm text-slate-600">
          <li><a href="{{ route('profil') }}">Profil</a></li>
          <li><a href="{{ route('berita.index') }}">Berita</a></li>
          <li><a href="{{ route('galeri') }}">Galeri</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-semibold text-sm">Kontak</h4>
        <p class="text-sm text-slate-600">email@sdn4jatilaba.sch.id</p>
      </div>
    </div>
    <div class="text-center py-4 text-xs text-slate-500 bg-white">© {{ date('Y') }} SDN 4 Jatilaba — All rights reserved.</div>
  </footer>

  <style>
    .nav-link { color: #064E3B; padding: 6px 8px; border-radius: 8px; transition: background .18s, transform .18s;}
    .nav-link:hover { background: rgba(6,78,59,0.06); transform: translateY(-2px); }
    .btn-ppdb { background: linear-gradient(90deg,#FDE68A,#D1FAE5); padding: .4rem .7rem; border-radius: 10px; font-weight:600; }
  </style>
</body>
</html>
