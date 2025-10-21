<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SPMB Online - PPDB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

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
            --danger: #ef4444;
            --success: #10b981;
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

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html, body { height: 100%; }
        body {
            background: var(--bg);
            color: var(--text);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            transition: background 0.3s, color 0.3s;
            -webkit-font-smoothing: antialiased;
        }

        /* Theme Toggle Button - Bottom Right */
        .theme-toggle {
            position: fixed; bottom: 30px; right: 30px; z-index: 9999;
            width: 60px; height: 60px; border-radius: 50%;
            background: var(--gradient-primary); border: none; cursor: pointer;
            box-shadow: 0 10px 40px var(--shadow);
            display:flex; align-items:center; justify-content:center;
            animation: pulse-ring 2s cubic-bezier(0.4,0,0.6,1) infinite;
        }
        .theme-toggle i { font-size: 24px; color: white; transition: transform 0.5s; }
        .theme-toggle:hover { transform: translateY(-5px) scale(1.05); }

        @keyframes pulse-ring {
            0% { box-shadow: 0 0 0 0 rgba(102,126,234,0.4); }
            50% { box-shadow: 0 0 0 20px rgba(102,126,234,0); }
            100% { box-shadow: 0 0 0 0 rgba(102,126,234,0); }
        }

        /* Floating Circles (background) */
        .floating-circles { position:absolute; width:100%; height:100%; overflow:hidden; pointer-events:none; top:0; left:0; }
        .circle { position:absolute; border-radius:50%; background: linear-gradient(135deg, var(--primary), var(--accent)); opacity:0.05; animation: float 20s infinite ease-in-out; }
        .circle.c1 { width:300px; height:300px; top:8%; left:6%; }
        .circle.c2 { width:200px; height:200px; top:65%; right:18%; }
        .circle.c3 { width:150px; height:150px; bottom:8%; left:50%; }

        @keyframes float {
            0%,100% { transform: translateY(0) translateX(0) scale(1); }
            33% { transform: translateY(-30px) translateX(20px) scale(1.1); }
            66% { transform: translateY(20px) translateX(-20px) scale(0.9); }
        }

        /* Hero */
        .hero { position: relative; padding: 160px 0 80px; background: var(--gradient-primary); overflow:hidden; }
        .hero::before { content:''; position:absolute; inset:0; background: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1') center/cover no-repeat; opacity:0.12; }
        .hero::after { content:''; position:absolute; inset:0; background: var(--gradient-primary); opacity:0.8; }
        .hero-content { position:relative; z-index:2; text-align:center; color: white; }
        .hero h1 { font-size:3.2rem; font-weight:800; margin-bottom:8px; text-shadow:0 8px 20px rgba(0,0,0,0.2); }
        .hero p { font-size:1.1rem; font-weight:300; opacity:0.95; }

        /* Container & Sections */
        .container { max-width:1200px; margin:0 auto; padding: 0 20px; }
        section { position: relative; padding: 80px 0; }

        /* Cards and Info */
        .card { background: var(--card-bg); border-radius: 18px; padding: 30px; position: relative; overflow: hidden; border:1px solid var(--border); transition: all .3s; box-shadow: 0 8px 30px var(--shadow); }
        .card:hover { transform: translateY(-8px); box-shadow: 0 20px 60px var(--shadow); }

        .info-box { background: var(--card-bg); padding: 25px; border-radius: 14px; border:1px solid var(--border); box-shadow: 0 8px 30px var(--shadow); }

        /* Form Elements */
        .form-group { margin-bottom: 18px; }
        .form-label { display:block; color: var(--text); margin-bottom:8px; font-weight:600; font-size:13px; text-transform:uppercase; letter-spacing:0.5px; }
        .form-input, .form-select, .form-textarea {
            width:100%; padding:12px 14px; border:2px solid var(--border); border-radius:10px; font-size:14px; background: var(--bg); color:var(--text);
            transition: all .2s;
        }
        .form-input:focus, .form-select:focus, .form-textarea:focus { outline:none; border-color:var(--primary); box-shadow:0 10px 30px var(--shadow); transform: translateY(-2px); background: var(--card-bg); }

        .radio-group { display:flex; gap:12px; }
        .radio-label { padding:12px 14px; border:2px solid var(--border); border-radius:10px; display:flex; align-items:center; gap:10px; cursor:pointer; background:var(--bg); }
        .radio-label input[type="radio"] { width:18px; height:18px; accent-color:var(--primary); }

        /* Button */
        .btn { display:inline-flex; align-items:center; gap:10px; padding:14px 22px; border:none; border-radius:12px; background:var(--gradient-primary); color:white; font-weight:700; cursor:pointer; box-shadow:0 10px 30px var(--shadow); }
        .btn:active { transform: translateY(1px); }

        /* Grid */
        .grid { display:grid; gap:28px; }
        .grid-2 { grid-template-columns: repeat(2, 1fr); }
        .grid-3 { grid-template-columns: repeat(3, 1fr); }

        /* Titles */
        .section-title { text-align:center; margin-bottom:40px; }
        .section-title h2 { font-size:2.4rem; font-weight:800; margin-bottom:10px; background: var(--gradient-primary); -webkit-background-clip:text; -webkit-text-fill-color:transparent; }
        .section-title p { color: var(--text-muted); }

        /* schedule item */
        .schedule-item { display:flex; justify-content:space-between; align-items:center; padding:14px; border-radius:10px; margin-bottom:10px; border:1px solid transparent; transition: all .2s; }
        .schedule-item:hover { padding-left:20px; border-color:var(--primary); background: rgba(0,0,0,0.02); }

        /* icon box */
        .icon-box { width:72px; height:72px; border-radius:50%; display:flex; align-items:center; justify-content:center; margin: 0 auto 16px; background:var(--gradient-primary); box-shadow:0 10px 30px var(--shadow); }
        .icon-box i { color:white; font-size:22px; }

        /* messages */
        .success-message { background: linear-gradient(135deg, var(--success), #059669); color:white; padding:14px; border-radius:10px; margin-bottom:18px; box-shadow: 0 10px 30px rgba(16,185,129,0.18); }
        .error-message { background: rgba(239,68,68,0.06); color: var(--danger); padding:10px; border-radius:8px; border:1px solid rgba(239,68,68,0.12); margin-top:8px; font-size:13px; }

        /* form small hint */
        .form-hint { font-size:13px; color:var(--text-muted); margin-top:6px; }

        /* footer */
        footer { background: var(--card-bg); border-top: 1px solid var(--border); padding: 40px 0; margin-top: 40px; }
        .footer-grid { display:flex; gap:40px; align-items: flex-start; justify-content: space-between; flex-wrap:wrap; max-width:1200px; margin:0 auto; padding:0 20px; }
        .footer-col { min-width:200px; max-width:360px; }
        .footer-col h4 { margin-bottom:12px; font-size:16px; color:var(--text); }
        .social a { text-decoration:none; margin-right:10px; color:var(--text-muted); font-size:18px; }

        /* validation small */
        .invalid { border-color: var(--danger) !important; }

        /* responsive */
        @media (max-width: 900px) {
            .grid-2, .grid-3 { grid-template-columns: 1fr; }
            .navbar-nav { display:none; position:absolute; top:100%; left:0; right:0; background: var(--card-bg); flex-direction:column; padding:16px; box-shadow:0 12px 40px var(--shadow); border-top:1px solid var(--border); }
            .navbar-nav.active { display:flex; }
            .navbar-toggle { display:block; }
            .hero h1 { font-size:2rem; }
        }

        /* small tweaks for blade error text */
        .field-error { color: var(--danger); font-size:13px; margin-top:6px; }
    </style>
</head>
<body>
    <x-navbar />

    <!-- Theme Toggle Button -->
    <button class="theme-toggle" onclick="toggleTheme()" aria-label="Toggle Dark Mode">
        <i class="fas fa-moon" id="theme-icon"></i>
    </button>

    <!-- Hero Section -->
    <section class="hero" style="padding: 150px 0 80px;">
        <div class="container">
            <div class="hero-content">
                <h1>SPMB Online</h1>
                <p>Sistem Penerimaan Murid Baru SD Negeri 4 Jatilaba</p>
            </div>
        </div>
    </section>

    <!-- SPMB Section -->
    <section>
        <div class="container">
            <div class="grid grid-2" style="gap: 50px;">
                <div style="animation: fadeInLeft 0.8s ease;">
                    <h2 style="color: var(--primary); margin-bottom: 20px; font-size: 2.2rem;">Informasi SPMB</h2>
                    
                    <div style="background: var(--white); padding: 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <h3 style="color: var(--primary); margin-bottom: 15px;">Jadwal SPMB 2026</h3>
                        <div style="display: grid; gap: 15px;">
                            <div style="display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid var(--gray-light);">
                                <span style="color: var(--gray-dark);">Pendaftaran Gelombang 1</span>
                                <span style="color: var(--primary); font-weight: 500;">1 - 15 Juni 2024</span>
                            </div>
                            <div class="schedule-item">
                                <span>Pengumuman Gelombang 1</span>
                                <span style="color: var(--primary); font-weight: 700;">20 Juni 2024</span>
                            </div>
                            <div class="schedule-item">
                                <span>Pendaftaran Gelombang 2</span>
                                <span style="color: var(--primary); font-weight: 700;">25 - 30 Juni 2024</span>
                            </div>
                            <div class="schedule-item">
                                <span>Pengumuman Gelombang 2</span>
                                <span style="color: var(--primary); font-weight: 700;">5 Juli 2024</span>
                            </div>
                        </div>
                    </div>

                    <div class="info-box">
                        <h3 style="margin-bottom: 16px;">📋 Persyaratan</h3>
                        <ul>
                            <li>✓ Usia minimal 6 tahun per 1 Juli 2024</li>
                            <li>✓ Fotokopi akta kelahiran</li>
                            <li>✓ Fotokopi kartu keluarga</li>
                            <li>✓ Pas foto 3x4 (2 lembar)</li>
                            <li>✓ Surat keterangan sehat dari dokter</li>
                        </ul>
                        <p class="form-hint" style="margin-top:12px;">Pastikan semua berkas discan dan diunggah pada saat registrasi (format JPG/PNG/PDF - maksimal 2MB per file).</p>
                    </div>
                </div>

                <div>
                    <div class="card" aria-live="polite">
                        <h2 style="text-align: center; margin-bottom: 20px; font-size: 1.6rem;">📝 Formulir Pendaftaran</h2>

                        {{-- Success message (Laravel session) --}}
                        @if(session('success'))
                        <div style="background: var(--primary-light); color: var(--white); padding: 15px; border-radius: 10px; margin-bottom: 20px; text-align: center;">
                            {{ session('success') }}
                        </div>
                        @endif
                        
                        <form action="/ppdb" method="POST">
                            @csrf
                            <div style="display: grid; gap: 20px;">
                                <h4 style="color: var(--primary); margin-bottom: 10px;">Data Calon Siswa</h4>
                                
                                <div>
                                    <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px; border-radius: 10px; font-family: inherit; transition: all 0.3s ease;">
                                </div>
                                
                                <div>
                                    <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Nama Panggilan</label>
                                    <input type="text" name="nama_panggilan" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px; border-radius: 10px; font-family: inherit; transition: all 0.3s ease;">
                                </div>
                        
                                <div class="grid grid-2" style="gap: 15px;">
                                    <div>
                                        <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px; border-radius: 10px; font-family: inherit; transition: all 0.3s ease;">
                                    </div>
                                    
                                    <div>
                                        <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px; border-radius: 10px; font-family: inherit; transition: all 0.3s ease;">
                                    </div>
                                </div>
                                
                                <div>
                                    <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Jenis Kelamin</label>
                                    <div style="display: flex; gap: 20px;">
                                        <label style="display: flex; align-items: center; gap: 8px;">
                                            <input type="radio" name="jenis_kelamin" value="L" required>
                                            <span>Laki-laki</span>
                                        </label>
                                        <label style="display: flex; align-items: center; gap: 8px;">
                                            <input type="radio" name="jenis_kelamin" value="P">
                                            <span>Perempuan</span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div>
                                    <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Agama</label>
                                    <select name="agama" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px; border-radius: 10px; font-family: inherit;">
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Alamat</label>
                                    <textarea name="alamat" rows="3" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px;  border-radius: 10px; font-family: inherit; resize: vertical;"></textarea>
                                </div>
                                
                                <h4 style="color: var(--primary); margin-bottom: 10px; margin-top: 20px;">Data Orang Tua</h4>
                                
                                <div class="grid grid-2" style="gap: 15px;">
                                    <div>
                                        <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Nama Ayah</label>
                                        <input type="text" name="nama_ayah" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px;  border-radius: 10px; font-family: inherit;">
                                    </div>
                                    
                                    <div>
                                        <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Nama Ibu</label>
                                        <input type="text" name="nama_ibu" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px;  border-radius: 10px; font-family: inherit;">
                                    </div>
                                </div>
                                
                                <div class="grid grid-2" style="gap: 15px;">
                                    <div>
                                        <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Pekerjaan Ayah</label>
                                        <input type="text" name="pekerjaan_ayah" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px; class="border border-indigo-500"  border-radius: 10px; font-family: inherit;">
                                    </div>
                                    
                                    <div>
                                        <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">Pekerjaan Ibu</label>
                                        <input type="text" name="pekerjaan_ibu" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px;  border-radius: 10px; font-family: inherit;">
                                    </div>
                                </div>
                                
                                <div>
                                    <label style="display: block; color: var(--primary); margin-bottom: 8px; font-weight: 500;">No. Telepon/HP</label>
                                    <input type="tel" name="no_telepon" required class="border border-indigo-500" style="width: 100%; padding: 12px 15px;  border-radius: 10px; font-family: inherit;">
                                </div>
                                
                                <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-3 px-4 rounded-xl w-full mt-5">
                                    <i class="fas fa-paper-plane"></i> Daftar Sekarang
                                </button>
                            </div>
                            

                        {{-- Show validation summary if exists --}}
                        @if ($errors->any())
                            <div class="error-message" role="alert">
                                Terdapat beberapa kesalahan pada form. Silakan periksa kembali isian yang bertanda merah.
                            </div>
                        @endif

                        <form action="{{ url('/spmb') }}" method="POST" enctype="multipart/form-data" novalidate>
                            @csrf

                            <h4 style="margin-bottom: 12px; color: var(--primary);">👤 Data Calon Siswa</h4>

                            <div class="form-group">
                                <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
                                <input id="nama_lengkap" type="text" name="nama_lengkap" class="form-input @error('nama_lengkap') invalid @enderror" required value="{{ old('nama_lengkap') }}" placeholder="Masukkan nama lengkap">
                                @error('nama_lengkap') <div class="field-error">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="nama_panggilan">Nama Panggilan</label>
                                <input id="nama_panggilan" type="text" name="nama_panggilan" class="form-input @error('nama_panggilan') invalid @enderror" required value="{{ old('nama_panggilan') }}" placeholder="Masukkan nama panggilan">
                                @error('nama_panggilan') <div class="field-error">{{ $message }}</div> @enderror
                            </div>

                            <div class="grid grid-2" style="gap:12px;">
                                <div class="form-group">
                                    <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
                                    <input id="tempat_lahir" type="text" name="tempat_lahir" class="form-input @error('tempat_lahir') invalid @enderror" value="{{ old('tempat_lahir') }}" required placeholder="Kota kelahiran">
                                    @error('tempat_lahir') <div class="field-error">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input id="tanggal_lahir" type="date" name="tanggal_lahir" class="form-input @error('tanggal_lahir') invalid @enderror" value="{{ old('tanggal_lahir') }}" required>
                                    @error('tanggal_lahir') <div class="field-error">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Jenis Kelamin</label>
                                <div class="radio-group">
                                    <label class="radio-label">
                                        <input type="radio" name="jenis_kelamin" value="L" {{ old('jenis_kelamin') == 'L' ? 'checked' : '' }} required>
                                        <span>Laki-laki</span>
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" name="jenis_kelamin" value="P" {{ old('jenis_kelamin') == 'P' ? 'checked' : '' }}>
                                        <span>Perempuan</span>
                                    </label>
                                </div>
                                @error('jenis_kelamin') <div class="field-error">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="agama">Agama</label>
                                <select id="agama" name="agama" class="form-select @error('agama') invalid @enderror" required>
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                    <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                    <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                    <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                </select>
                                @error('agama') <div class="field-error">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="alamat">Alamat</label>
                                <textarea id="alamat" name="alamat" rows="3" class="form-textarea @error('alamat') invalid @enderror" required placeholder="Masukkan alamat lengkap">{{ old('alamat') }}</textarea>
                                @error('alamat') <div class="field-error">{{ $message }}</div> @enderror
                            </div>

                            <h4 style="margin: 18px 0 10px; color: var(--primary);">👨‍👩‍👧 Data Orang Tua / Wali</h4>

                            <div class="grid grid-2" style="gap:12px;">
                                <div class="form-group">
                                    <label class="form-label" for="nama_ayah">Nama Ayah</label>
                                    <input id="nama_ayah" type="text" name="nama_ayah" class="form-input @error('nama_ayah') invalid @enderror" value="{{ old('nama_ayah') }}" required placeholder="Nama ayah">
                                    @error('nama_ayah') <div class="field-error">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="nama_ibu">Nama Ibu</label>
                                    <input id="nama_ibu" type="text" name="nama_ibu" class="form-input @error('nama_ibu') invalid @enderror" value="{{ old('nama_ibu') }}" required placeholder="Nama ibu">
                                    @error('nama_ibu') <div class="field-error">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="grid grid-2" style="gap:12px;">
                                <div class="form-group">
                                    <label class="form-label" for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                    <input id="pekerjaan_ayah" type="text" name="pekerjaan_ayah" class="form-input @error('pekerjaan_ayah') invalid @enderror" value="{{ old('pekerjaan_ayah') }}" placeholder="Pekerjaan ayah">
                                    @error('pekerjaan_ayah') <div class="field-error">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                    <input id="pekerjaan_ibu" type="text" name="pekerjaan_ibu" class="form-input @error('pekerjaan_ibu') invalid @enderror" value="{{ old('pekerjaan_ibu') }}" placeholder="Pekerjaan ibu">
                                    @error('pekerjaan_ibu') <div class="field-error">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="no_telepon">No. Telepon/HP</label>
                                <input id="no_telepon" type="tel" name="no_telepon" class="form-input @error('no_telepon') invalid @enderror" value="{{ old('no_telepon') }}" required placeholder="08xx xxxx xxxx">
                                @error('no_telepon') <div class="field-error">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="no_darurat">Kontak Darurat</label>
                                <input id="no_darurat" type="tel" name="no_darurat" class="form-input @error('no_darurat') invalid @enderror" value="{{ old('no_darurat') }}" placeholder="Nomor telepon jika darurat">
                                <div class="form-hint">Opsional — nomor keluarga atau saudara yang bisa dihubungi saat darurat.</div>
                                @error('no_darurat') <div class="field-error">{{ $message }}</div> @enderror
                            </div>

                            <h4 style="margin: 18px 0 10px; color: var(--primary);">📎 Upload Berkas (opsional)</h4>

                            <div class="form-group">
                                <label class="form-label" for="akta">Akta Kelahiran (JPG/PDF max 2MB)</label>
                                <input id="akta" type="file" name="akta" accept=".jpg,.jpeg,.png,.pdf" class="form-input @error('akta') invalid @enderror">
                                @error('akta') <div class="field-error">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="kk">Kartu Keluarga (JPG/PDF max 2MB)</label>
                                <input id="kk" type="file" name="kk" accept=".jpg,.jpeg,.png,.pdf" class="form-input @error('kk') invalid @enderror">
                                @error('kk') <div class="field-error">{{ $message }}</div> @enderror
                            </div>

                            <div style="margin-top:16px; display:flex; gap:12px; align-items:center;">
                                <button type="submit" class="btn" aria-label="Kirim Pendaftaran">
                                    <i class="fas fa-paper-plane"></i> <span>Daftar Sekarang</span>
                                </button>

                                <a href="{{ url('/') }}" style="text-decoration:none;">
                                    <button type="button" class="btn" style="background:transparent; color:var(--primary); border:1px solid var(--border); box-shadow:none;">
                                        Batal
                                    </button>
                                </a>
                            </div>

                            <p class="form-hint" style="margin-top:12px;">Dengan menekan <strong>Daftar Sekarang</strong> Anda menyetujui bahwa data yang dimasukkan adalah benar.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-footer />

    <script>
        // Theme Toggle (persist in localStorage)
        function toggleTheme() {
            const html = document.documentElement;
            const current = html.getAttribute('data-theme');
            const icon = document.getElementById('theme-icon');

            const next = current === 'dark' ? 'light' : 'dark';
            html.setAttribute('data-theme', next);
            localStorage.setItem('theme', next);
            icon.className = next === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
        }

        // Load saved theme on page load
        document.addEventListener('DOMContentLoaded', function() {
            const saved = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-theme', saved);
            const icon = document.getElementById('theme-icon');
            if (icon) icon.className = saved === 'dark' ? 'fas fa-sun' : 'fas fa-moon';

            // Intersection Observer for staggered items
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.stagger-item').forEach(item => observer.observe(item));

            // Navbar toggle
            const navToggle = document.getElementById('navbarToggle');
            navToggle && navToggle.addEventListener('click', function() {
                const nav = document.getElementById('navbarNav');
                nav.classList.toggle('active');
                const expanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', (!expanded).toString());
            });
        });

        // Basic client-side highlight for required fields when submit attempted
        (function() {
            const form = document.querySelector('form');
            if (!form) return;
            form.addEventListener('submit', function(e) {
                // Remove previous highlights
                document.querySelectorAll('.invalid').forEach(el => el.classList.remove('invalid'));
                // Basic required check (enhancement - server-side validation仍 harus ada)
                const requiredFields = form.querySelectorAll('[required]');
                let hadError = false;
                requiredFields.forEach(field => {
                    if (!field.value || field.value.trim() === '') {
                        field.classList.add('invalid');
                        hadError = true;
                    }
                });
                if (hadError) {
                    // let server handle error messages; prevent double submit UX if you'd like:
                    // e.preventDefault(); // uncomment if you want client-only blocking
                }
            });
        })();
    </script>
</body>
</html>
