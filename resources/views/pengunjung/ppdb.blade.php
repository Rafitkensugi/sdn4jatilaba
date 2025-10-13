@extends('layouts.app')

@section('title', 'PPDB Online')

@section('content')
    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1e40af;
            --primary-light: #60a5fa;
            --accent: #8b5cf6;
            --white: #ffffff;
            --bg: #f8fafc;
            --card-bg: #ffffff;
            --text: #1e293b;
            --text-muted: #64748b;
            --border: #e2e8f0;
            --shadow: rgba(15, 23, 42, 0.08);
            --gradient-1: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-2: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --gradient-3: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        [data-theme="dark"] {
            --primary: #60a5fa;
            --primary-dark: #3b82f6;
            --primary-light: #93c5fd;
            --accent: #a78bfa;
            --white: #0f172a;
            --bg: #020617;
            --card-bg: #1e293b;
            --text: #f1f5f9;
            --text-muted: #94a3b8;
            --border: #334155;
            --shadow: rgba(0, 0, 0, 0.3);
            --gradient-1: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-2: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --gradient-3: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: var(--bg);
            color: var(--text);
            transition: background 0.3s cubic-bezier(0.4, 0, 0.2, 1), color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Theme Toggle Button - Bottom Right */
        .theme-toggle {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 9999;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--gradient-primary);
            border: none;
            cursor: pointer;
            box-shadow: 0 10px 40px var(--shadow), 0 0 0 0 rgba(102, 126, 234, 0.4);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            justify-content: center;
            animation: pulse-ring 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        .theme-toggle:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 20px 60px var(--shadow);
        }
        
        .theme-toggle i {
            font-size: 24px;
            color: white;
            transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        
        .theme-toggle:hover i {
            transform: rotate(180deg);
        }
        
        @keyframes pulse-ring {
            0% {
                box-shadow: 0 0 0 0 rgba(102, 126, 234, 0.4);
            }
            50% {
                box-shadow: 0 0 0 20px rgba(102, 126, 234, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(102, 126, 234, 0);
            }
        }
        
        /* Floating Background Circles */
        .floating-circles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }
        
        .circle {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            opacity: 0.05;
            animation: float 20s infinite ease-in-out;
        }
        
        .circle:nth-child(1) {
            width: 300px;
            height: 300px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .circle:nth-child(2) {
            width: 200px;
            height: 200px;
            top: 60%;
            right: 20%;
            animation-delay: 2s;
        }
        
        .circle:nth-child(3) {
            width: 150px;
            height: 150px;
            bottom: 10%;
            left: 50%;
            animation-delay: 4s;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0) translateX(0) scale(1);
            }
            33% {
                transform: translateY(-30px) translateX(20px) scale(1.1);
            }
            66% {
                transform: translateY(20px) translateX(-20px) scale(0.9);
            }
        }
        
        /* Hero Section */
        .hero {
            position: relative;
            padding: 200px 0 120px;
            background: var(--gradient-primary);
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="60" height="60" xmlns="http://www.w3.org/2000/svg"><circle cx="30" cy="30" r="1.5" fill="white" opacity="0.1"/></svg>');
            animation: shimmer 30s linear infinite;
        }
        
        @keyframes shimmer {
            0% {
                transform: translateX(0) translateY(0);
            }
            100% {
                transform: translateX(-60px) translateY(-60px);
            }
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 4rem;
            font-weight: 800;
            color: white;
            margin-bottom: 20px;
            text-shadow: 0 10px 30px rgba(0,0,0,0.2);
            letter-spacing: -1px;
        }
        
        .hero p {
            font-size: 1.5rem;
            color: rgba(255,255,255,0.95);
            font-weight: 300;
        }
        
        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Section */
        section {
            position: relative;
            padding: 100px 0;
        }
        
        /* Cards with Premium Effects */
        .card {
            background: var(--card-bg);
            border-radius: 24px;
            padding: 40px;
            position: relative;
            overflow: hidden;
            border: 1px solid var(--border);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 20px var(--shadow);
        }
        
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 3px;
            background: var(--gradient-primary);
            transition: left 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            opacity: 0;
            transition: opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: -1;
        }
        
        .card:hover {
            transform: translateY(-20px) scale(1.02);
            box-shadow: 0 30px 60px var(--shadow);
            border-color: var(--primary);
        }
        
        .card:hover::before {
            left: 0;
        }
        
        /* Info Box */
        .info-box {
            background: var(--card-bg);
            padding: 35px;
            border-radius: 20px;
            border: 1px solid var(--border);
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 20px var(--shadow);
        }
        
        .info-box::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--gradient-primary);
            transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .info-box:hover {
            transform: translateX(10px);
            box-shadow: 0 20px 40px var(--shadow);
        }
        
        .info-box:hover::before {
            width: 100%;
            opacity: 0.05;
        }
        
        /* Schedule Items */
        .schedule-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 10px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid transparent;
        }
        
        .schedule-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 0;
            background: var(--gradient-primary);
            transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0.1;
        }
        
        .schedule-item:hover {
            background: var(--border);
            border-color: var(--primary);
            padding-left: 30px;
        }
        
        .schedule-item:hover::before {
            width: 100%;
        }
        
        /* Icon Box with Advanced Animation */
        .icon-box {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            position: relative;
            transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            box-shadow: 0 10px 30px var(--shadow);
            animation: icon-pulse 3s ease-in-out infinite;
        }
        
        .icon-box::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border: 2px dashed var(--primary);
            border-radius: 50%;
            opacity: 0;
            animation: rotate-dashed 10s linear infinite;
        }
        
        .card:hover .icon-box {
            transform: rotate(360deg) scale(1.2);
            background: var(--gradient-2);
        }
        
        .card:hover .icon-box::before {
            opacity: 0.5;
        }
        
        .icon-box i {
            font-size: 2rem;
            color: white;
            z-index: 2;
        }
        
        @keyframes icon-pulse {
            0%, 100% {
                box-shadow: 0 10px 30px var(--shadow);
            }
            50% {
                box-shadow: 0 10px 40px var(--shadow), 0 0 0 15px rgba(102, 126, 234, 0.1);
            }
        }
        
        @keyframes rotate-dashed {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        
        /* Form Elements */
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-label {
            display: block;
            color: var(--text);
            margin-bottom: 10px;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .form-input, .form-select, .form-textarea {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid var(--border);
            border-radius: 12px;
            font-family: inherit;
            font-size: 15px;
            background: var(--bg);
            color: var(--text);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .form-input:focus, .form-select:focus, .form-textarea:focus {
            outline: none;
            border-color: var(--primary);
            background: var(--card-bg);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px var(--shadow), 0 0 0 4px rgba(102, 126, 234, 0.1);
        }
        
        .form-input:hover, .form-select:hover, .form-textarea:hover {
            border-color: var(--primary-light);
        }
        
        /* Radio Buttons */
        .radio-group {
            display: flex;
            gap: 15px;
        }
        
        .radio-label {
            flex: 1;
            padding: 15px 20px;
            border: 2px solid var(--border);
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            gap: 10px;
            background: var(--bg);
        }
        
        .radio-label:hover {
            border-color: var(--primary);
            background: var(--card-bg);
            transform: translateY(-2px);
        }
        
        .radio-label input[type="radio"] {
            width: 20px;
            height: 20px;
            accent-color: var(--primary);
        }
        
        .radio-label input[type="radio"]:checked ~ span {
            color: var(--primary);
            font-weight: 600;
        }
        
        /* Button with Ripple Effect */
        .btn {
            width: 100%;
            padding: 18px 40px;
            border: none;
            border-radius: 12px;
            background: var(--gradient-primary);
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 10px 30px var(--shadow);
        }
        
        .btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255,255,255,0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .btn:hover::before {
            width: 400px;
            height: 400px;
        }
        
        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px var(--shadow);
        }
        
        .btn:active {
            transform: translateY(-2px);
        }
        
        .btn span {
            position: relative;
            z-index: 1;
        }
        
        /* Success Message */
        .success-message {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 25px;
            text-align: center;
            font-weight: 500;
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);
            animation: slideInDown 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Grid System */
        .grid {
            display: grid;
            gap: 40px;
        }
        
        .grid-2 {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .grid-3 {
            grid-template-columns: repeat(3, 1fr);
        }
        
        /* Section Title */
        .section-title {
            text-align: center;
            margin-bottom: 70px;
        }
        
        .section-title h2 {
            font-size: 3rem;
            font-weight: 800;
            color: var(--text);
            margin-bottom: 15px;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .section-title p {
            font-size: 1.2rem;
            color: var(--text-muted);
        }
        
        /* Staggered Animation */
        .stagger-item {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .stagger-item.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .stagger-item:nth-child(1) { transition-delay: 0.1s; }
        .stagger-item:nth-child(2) { transition-delay: 0.2s; }
        .stagger-item:nth-child(3) { transition-delay: 0.3s; }
        
        /* Responsive */
        @media (max-width: 768px) {
            .grid-2, .grid-3 {
                grid-template-columns: 1fr;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .theme-toggle {
                bottom: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
        }
        
        /* Headings */
        h2, h3, h4 {
            color: var(--text);
        }
        
        h3 {
            font-size: 1.5rem;
            font-weight: 700;
        }
        
        h4 {
            font-size: 1.2rem;
            font-weight: 600;
        }
        
        /* Text */
        p, span, li {
            color: var(--text-muted);
        }
        
        ul {
            list-style: none;
            padding: 0;
        }
        
        ul li {
            padding: 12px 0;
            border-bottom: 1px solid var(--border);
            transition: all 0.3s ease;
        }
        
        ul li:hover {
            padding-left: 10px;
            color: var(--primary);
        }
        
        ul li:last-child {
            border-bottom: none;
        }
    </style>
    
    <!-- Theme Toggle Button -->
    <button class="theme-toggle" onclick="toggleTheme()" aria-label="Toggle Dark Mode">
        <i class="fas fa-moon" id="theme-icon"></i>
    </button>
    
    <script>
        // Theme Toggle
        function toggleTheme() {
            const html = document.documentElement;
            const currentTheme = html.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            const icon = document.getElementById('theme-icon');
            
            html.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            
            icon.className = newTheme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
        }
        
        // Load saved theme
        document.addEventListener('DOMContentLoaded', function() {
            const savedTheme = localStorage.getItem('theme') || 'light';
            const icon = document.getElementById('theme-icon');
            
            document.documentElement.setAttribute('data-theme', savedTheme);
            icon.className = savedTheme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
            
            // Intersection Observer for Staggered Animation
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });
            
            document.querySelectorAll('.stagger-item').forEach(item => {
                observer.observe(item);
            });
        });
    </script>

    <!-- Hero Section -->
    <section class="hero">
        <div class="floating-circles">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <h1>PPDB Online</h1>
                <p>Penerimaan Peserta Didik Baru SD Negeri 4 Jatilaba</p>
            </div>
        </div>
    </section>

    <!-- PPDB Section -->
    <section style="position: relative;">
        <div class="floating-circles">
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
        <div class="container">
            <div class="grid grid-2">
                <div>
                    <h2 style="font-size: 2.5rem; margin-bottom: 40px; font-weight: 800;">Informasi PPDB</h2>
                    
                    <div class="info-box" style="margin-bottom: 30px;">
                        <h3 style="margin-bottom: 25px;">📅 Jadwal PPDB 2024</h3>
                        <div>
                            <div class="schedule-item">
                                <span>Pendaftaran Gelombang 1</span>
                                <span style="color: var(--primary); font-weight: 600;">1 - 15 Juni 2024</span>
                            </div>
                            <div class="schedule-item">
                                <span>Pengumuman Gelombang 1</span>
                                <span style="color: var(--primary); font-weight: 600;">20 Juni 2024</span>
                            </div>
                            <div class="schedule-item">
                                <span>Pendaftaran Gelombang 2</span>
                                <span style="color: var(--primary); font-weight: 600;">25 - 30 Juni 2024</span>
                            </div>
                            <div class="schedule-item">
                                <span>Pengumuman Gelombang 2</span>
                                <span style="color: var(--primary); font-weight: 600;">5 Juli 2024</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-box">
                        <h3 style="margin-bottom: 25px;">📋 Persyaratan</h3>
                        <ul>
                            <li>✓ Usia minimal 6 tahun per 1 Juli 2024</li>
                            <li>✓ Fotokopi akta kelahiran</li>
                            <li>✓ Fotokopi kartu keluarga</li>
                            <li>✓ Pas foto 3x4 (2 lembar)</li>
                            <li>✓ Surat keterangan sehat dari dokter</li>
                        </ul>
                    </div>
                </div>
                
                <div>
                    <div class="card">
                        <h2 style="text-align: center; margin-bottom: 35px; font-size: 2rem;">📝 Formulir Pendaftaran</h2>
                        
                        @if(session('success'))
                        <div class="success-message">
                            ✓ {{ session('success') }}
                        </div>
                        @endif
                        
                        <form action="/ppdb" method="POST">
                            @csrf
                            
                            <h4 style="margin-bottom: 25px; color: var(--primary);">👤 Data Calon Siswa</h4>
                            
                            <div class="form-group">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-input" required placeholder="Masukkan nama lengkap">
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Nama Panggilan</label>
                                <input type="text" name="nama_panggilan" class="form-input" required placeholder="Masukkan nama panggilan">
                            </div>
                            
                            <div class="grid grid-2">
                                <div class="form-group">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-input" required placeholder="Kota kelahiran">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-input" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Jenis Kelamin</label>
                                <div class="radio-group">
                                    <label class="radio-label">
                                        <input type="radio" name="jenis_kelamin" value="L" required>
                                        <span>Laki-laki</span>
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" name="jenis_kelamin" value="P">
                                        <span>Perempuan</span>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Agama</label>
                                <select name="agama" class="form-select" required>
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Alamat</label>
                                <textarea name="alamat" rows="3" class="form-textarea" required placeholder="Masukkan alamat lengkap"></textarea>
                            </div>
                            
                            <h4 style="margin: 35px 0 25px; color: var(--primary);">👨‍👩‍👧 Data Orang Tua</h4>
                            
                            <div class="grid grid-2">
                                <div class="form-group">
                                    <label class="form-label">Nama Ayah</label>
                                    <input type="text" name="nama_ayah" class="form-input" required placeholder="Nama ayah">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Nama Ibu</label>
                                    <input type="text" name="nama_ibu" class="form-input" required placeholder="Nama ibu">
                                </div>
                            </div>
                            
                            <div class="grid grid-2">
                                <div class="form-group">
                                    <label class="form-label">Pekerjaan Ayah</label>
                                    <input type="text" name="pekerjaan_ayah" class="form-input" required placeholder="Pekerjaan ayah">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Pekerjaan Ibu</label>
                                    <input type="text" name="pekerjaan_ibu" class="form-input" required placeholder="Pekerjaan ibu">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">No. Telepon/HP</label>
                                <input type="tel" name="no_telepon" class="form-input" required placeholder="08xx xxxx xxxx">
                            </div>
                            
                            <button type="submit" class="btn">
                                <span><i class="fas fa-paper-plane"></i> Daftar Sekarang</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Informasi Tambahan -->
    <section style="background: var(--bg); position: relative;">
        <div class="floating-circles">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
        <div class="container">
            <div class="section-title">
                <h2>Informasi Tambahan</h2>
                <p>Hal-hal yang perlu diketahui calon orang tua siswa</p>
            </div>
            
            <div class="grid grid-3">
                <div class="card stagger-item" style="text-align: center;">
                    <div class="icon-box">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4 style="margin-bottom: 20px; font-size: 1.4rem;">Kurikulum</h4>
                    <p style="line-height: 1.8;">Menggunakan Kurikulum Merdeka yang berfokus pada pengembangan karakter dan kompetensi siswa</p>
                </div>
                
                <div class="card stagger-item" style="text-align: center;">
                    <div class="icon-box">
                        <i class="fas fa-book"></i>
                    </div>
                    <h4 style="margin-bottom: 20px; font-size: 1.4rem;">Ekstrakurikuler</h4>
                    <p style="line-height: 1.8;">Berbagai pilihan ekstrakurikuler untuk mengembangkan bakat dan minat siswa</p>
                </div>
                
                <div class="card stagger-item" style="text-align: center;">
                    <div class="icon-box">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4 style="margin-bottom: 20px; font-size: 1.4rem;">Lingkungan</h4>
                    <p style="line-height: 1.8;">Lingkungan sekolah yang aman, nyaman, dan mendukung proses belajar mengajar</p>
                </div>
            </div>
        </div>
    </section>
@endsection