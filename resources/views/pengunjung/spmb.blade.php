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
        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
        }
        
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --primary-light: #818cf8;
            --accent: #8b5cf6;
            --white: #ffffff;
            --bg: #f8fafc;
            --card-bg: #ffffff;
            --text: #1e293b;
            --text-muted: #64748b;
            --border: #e2e8f0;
            --shadow: rgba(99, 102, 241, 0.1);
            --success: #10b981;
            --danger: #ef4444;
            --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        [data-theme="dark"] {
            --primary: #818cf8;
            --primary-dark: #6366f1;
            --primary-light: #a5b4fc;
            --accent: #a78bfa;
            --white: #0f172a;
            --bg: #020617;
            --card-bg: #1e293b;
            --text: #f1f5f9;
            --text-muted: #94a3b8;
            --border: #334155;
            --shadow: rgba(99, 102, 241, 0.2);
        }

        html { 
            scroll-behavior: smooth; 
            height: 100%;
        }
        
        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            transition: background 0.3s, color 0.3s;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            min-height: 100%;
            overflow-x: hidden;
        }

        /* Theme Toggle Button */
        .theme-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--gradient-primary);
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.2s;
        }

        .theme-toggle i {
            font-size: 20px;
            color: white;
        }

        .theme-toggle:hover {
            transform: scale(1.05);
        }

        /* Hero Section */
        .hero {
            position: relative;
            padding: 100px 0 60px;
            background: var(--gradient-primary);
            overflow: hidden;
            text-align: center;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            text-align: center;
            color: white;
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 700;
            margin-bottom: 16px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .hero p {
            font-size: clamp(1rem, 2.5vw, 1.2rem);
            font-weight: 400;
            opacity: 0.95;
            max-width: 600px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }

        .hero-cta {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .hero-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s;
        }

        .hero-btn-primary {
            background: white;
            color: var(--primary-dark);
        }

        .hero-btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.7);
        }

        .hero-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }

        /* Main Content Section */
        .main-section {
            padding: 60px 0;
            position: relative;
        }

        /* Grid Layout */
        .content-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
            align-items: start;
        }

        /* Info Column */
        .info-column {
            max-width: 900px;
            margin: 0 auto;
            width: 100%;
        }

        .info-column h2 {
            color: var(--primary);
            font-size: clamp(1.5rem, 3vw, 2rem);
            font-weight: 700;
            margin-bottom: 24px;
            text-align: center;
        }

        /* Info Card */
        .info-card {
            background: var(--card-bg);
            padding: 24px;
            border-radius: 12px;
            border: 1px solid var(--border);
            box-shadow: 0 4px 12px var(--shadow);
            margin-bottom: 24px;
            transition: box-shadow 0.2s;
        }

        .info-card:hover {
            box-shadow: 0 6px 16px var(--shadow);
        }

        .info-card h3 {
            color: var(--primary);
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Schedule Items */
        .schedule-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .schedule-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 16px;
            background: var(--bg);
            border-radius: 8px;
            border: 1px solid var(--border);
            transition: border-color 0.2s;
        }

        .schedule-item:hover {
            border-color: var(--primary);
        }

        .schedule-item span:first-child {
            color: var(--text);
            font-weight: 500;
        }

        .schedule-item span:last-child {
            color: var(--primary);
            font-weight: 600;
            font-size: 0.9rem;
        }

        /* Requirements Box */
        .requirements-box {
            background: var(--card-bg);
            padding: 24px;
            border-radius: 12px;
            border: 1px solid var(--border);
            box-shadow: 0 4px 12px var(--shadow);
            transition: box-shadow 0.2s;
        }

        .requirements-box:hover {
            box-shadow: 0 6px 16px var(--shadow);
        }

        .requirements-box h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 16px;
            color: var(--text);
        }

        .requirements-box ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .requirements-box li {
            display: flex;
            align-items: start;
            gap: 10px;
            color: var(--text);
            line-height: 1.6;
        }

        .requirements-box li::before {
            content: '✓';
            color: var(--success);
            font-weight: 700;
            flex-shrink: 0;
        }

        .form-hint {
            font-size: 0.875rem;
            color: var(--text-muted);
            margin-top: 8px;
            line-height: 1.5;
        }

        /* Form Column */
        .form-column {
            max-width: 900px;
            margin: 0 auto;
            width: 100%;
        }

        /* Form Card */
        .form-card {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 30px;
            border: 1px solid var(--border);
            box-shadow: 0 4px 12px var(--shadow);
        }

        .form-card h2 {
            text-align: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 24px;
            color: var(--text);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        /* Form Elements */
        .form-section-title {
            color: var(--primary);
            font-size: 1.1rem;
            font-weight: 600;
            margin: 24px 0 16px 0;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-section-title:first-of-type {
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            color: var(--text);
            margin-bottom: 6px;
            font-weight: 600;
            font-size: 0.875rem;
        }

        .form-input,
        .form-select,
        .form-textarea {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 1rem;
            background: var(--bg);
            color: var(--text);
            font-family: inherit;
            transition: border-color 0.2s;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.1);
        }

        .form-input::placeholder,
        .form-textarea::placeholder {
            color: var(--text-muted);
        }

        .form-textarea {
            resize: vertical;
            min-height: 100px;
        }

        /* Radio Group */
        .radio-group {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .radio-label {
            flex: 1;
            min-width: 120px;
            padding: 12px 14px;
            border: 1px solid var(--border);
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            background: var(--bg);
            transition: border-color 0.2s;
        }

        .radio-label:hover {
            border-color: var(--primary);
        }

        .radio-label input[type="radio"] {
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
            cursor: pointer;
        }

        .radio-label:has(input[type="radio"]:checked) {
            border-color: var(--primary);
            background: rgba(99, 102, 241, 0.05);
        }

        /* Grid for inputs */
        .input-grid {
            display: grid;
            gap: 16px;
        }

        @media (min-width: 640px) {
            .input-grid-2 {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Button */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 14px 24px;
            border: none;
            border-radius: 8px;
            background: var(--gradient-primary);
            color: white;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: transform 0.2s, box-shadow 0.2s;
            width: 100%;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background: transparent;
            color: var(--primary);
            border: 1px solid var(--border);
            box-shadow: none;
        }

        .btn-secondary:hover {
            background: var(--bg);
            border-color: var(--primary);
        }

        /* Error Messages */
        .error-message {
            background: rgba(239, 68, 68, 0.08);
            color: var(--danger);
            padding: 10px 14px;
            border-radius: 8px;
            border: 1px solid rgba(239, 68, 68, 0.2);
            margin-top: 8px;
            font-size: 0.875rem;
        }

        .field-error {
            color: var(--danger);
            font-size: 0.875rem;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .field-error::before {
            content: '⚠';
        }

        .invalid {
            border-color: var(--danger) !important;
            background: rgba(239, 68, 68, 0.03);
        }

        /* Action Buttons Container */
        .action-buttons {
            margin-top: 24px;
            display: flex;
            gap: 12px;
            flex-direction: column;
        }

        @media (min-width: 640px) {
            .action-buttons {
                flex-direction: row;
            }
            
            .action-buttons .btn {
                width: auto;
                flex: 1;
            }
            
            .action-buttons .btn-secondary {
                flex: 0 0 auto;
                min-width: 120px;
            }
        }

        /* Footer */
        footer {
            background: var(--card-bg);
            border-top: 1px solid var(--border);
            padding: 30px 0;
            margin-top: 60px;
        }

        .footer-content {
            text-align: center;
            color: var(--text-muted);
            font-size: 0.875rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero {
                padding: 80px 0 40px;
            }

            .main-section {
                padding: 40px 0;
            }

            .info-card,
            .requirements-box,
            .form-card {
                padding: 20px;
            }

            .theme-toggle {
                width: 44px;
                height: 44px;
                bottom: 16px;
                right: 16px;
            }

            .theme-toggle i {
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 16px;
            }

            .form-card {
                padding: 16px;
            }

            .radio-group {
                flex-direction: column;
            }

            .radio-label {
                min-width: 100%;
            }
        }
    </style>
</head>
<body>
    <x-navbar />
    <!-- Theme Toggle Button -->
    <button class="theme-toggle" onclick="toggleTheme()" aria-label="Toggle Dark Mode">
        <i class="fas fa-moon" id="theme-icon"></i>
    </button>

    <!-- Hero Section -->
    <section id="home" 
        class="relative py-20 md:py-32 bg-center bg-cover bg-no-repeat" 
        style="background-image: url('{{ asset('images/hero.jpeg') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/50 dark:from-black/80 dark:to-purple-900/30"></div>
        <div class="container mx-auto px-4 relative z-10 text-center text-white">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-6xl font-bold mb-6 leading-tight animate-slideonce">
                Sistem Penerimaan Murid Baru
                </h2>

                <p class="text-xl mb-8 max-w-2xl mx-auto text-gray-100 fade-in" style="transition-delay: 0.2s;">
                Segera daftarkan putra-putri Anda di SD Negeri 4 Jatilaba.
                Sekolah yang berkomitmen mencetak generasi cerdas, berkarakter, dan berprestasi!
                </p>
            <div class="hero-cta">
                <a href="#form-section" class="hero-btn hero-btn-primary">
                        <i class="fas fa-edit"></i>
                        <span>Daftar Sekarang</span>
                </a>
                <a href="#info-section" class="hero-btn hero-btn-secondary">
                        <i class="fas fa-info-circle"></i>
                        <span>Lihat Informasi</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-section" id="info-section">
        <div class="container">
            <div class="content-grid">
                <!-- Info Column -->
                <div class="info-column">
                    <h2>Informasi SPMB</h2>
                    
                    <div class="info-card">
                        <h3>
                            <i class="fas fa-calendar-alt"></i>
                            Jadwal SPMB 2026
                        </h3>
                        <div class="schedule-list">
                            <div class="schedule-item">
                                <span>Pendaftaran Gelombang 1</span>
                                <span>1 - 15 Juni 2024</span>
                            </div>
                            <div class="schedule-item">
                                <span>Pengumuman Gelombang 1</span>
                                <span>20 Juni 2024</span>
                            </div>
                            <div class="schedule-item">
                                <span>Pendaftaran Gelombang 2</span>
                                <span>25 - 30 Juni 2024</span>
                            </div>
                            <div class="schedule-item">
                                <span>Pengumuman Gelombang 2</span>
                                <span>5 Juli 2024</span>
                            </div>
                        </div>
                    </div>

                    <div class="requirements-box">
                        <h3>📋 Persyaratan</h3>
                        <ul>
                            <li>Usia minimal 6 tahun per 1 Juli 2024</li>
                            <li>Fotokopi akta kelahiran</li>
                            <li>Fotokopi kartu keluarga</li>
                            <li>Pas foto 3x4 (2 lembar)</li>
                            <li>Surat keterangan sehat dari dokter</li>
                        </ul>
                        <p class="form-hint" style="margin-top: 16px;">
                            Pastikan semua berkas discan dan diunggah pada saat registrasi (format JPG/PNG/PDF - maksimal 2MB per file).
                        </p>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column" id="form-section">
                    <div class="form-card">
                        <h2>
                            <i class="fas fa-edit"></i>
                            Formulir Pendaftaran
                        </h2>

                        <form id="registration-form" method="POST" action="{{ route('spmb.store') }}" enctype="multipart/form-data">
    @csrf
    <h4 class="form-section-title">
        <i class="fas fa-user"></i>
        Data Calon Siswa
    </h4>

    <div class="form-group">
        <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
        <input 
            id="nama_lengkap" 
            type="text" 
            name="nama_lengkap" 
            class="form-input" 
            required 
            placeholder="Masukkan nama lengkap"
        >
    </div>

    <div class="form-group">
        <label class="form-label" for="nama_panggilan">Nama Panggilan</label>
        <input 
            id="nama_panggilan" 
            type="text" 
            name="nama_panggilan" 
            class="form-input" 
            required 
            placeholder="Masukkan nama panggilan"
        >
    </div>

    <div class="input-grid input-grid-2">
        <div class="form-group">
            <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
            <input 
                id="tempat_lahir" 
                type="text" 
                name="tempat_lahir" 
                class="form-input" 
                required 
                placeholder="Kota kelahiran"
            >
        </div>

        <div class="form-group">
            <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
            <input 
                id="tanggal_lahir" 
                type="date" 
                name="tanggal_lahir" 
                class="form-input" 
                required
            >
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
        <label class="form-label" for="agama">Agama</label>
        <select id="agama" name="agama" class="form-select" required>
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
        <label class="form-label" for="alamat">Alamat</label>
        <textarea 
            id="alamat" 
            name="alamat" 
            rows="3" 
            class="form-textarea" 
            required 
            placeholder="Masukkan alamat lengkap"
        ></textarea>
    </div>

    <h4 class="form-section-title">
        <i class="fas fa-users"></i>
        Data Orang Tua / Wali
    </h4>

    <div class="input-grid input-grid-2">
        <div class="form-group">
            <label class="form-label" for="nama_ayah">Nama Ayah</label>
            <input 
                id="nama_ayah" 
                type="text" 
                name="nama_ayah" 
                class="form-input" 
                required 
                placeholder="Nama ayah"
            >
        </div>

        <div class="form-group">
            <label class="form-label" for="nama_ibu">Nama Ibu</label>
            <input 
                id="nama_ibu" 
                type="text" 
                name="nama_ibu" 
                class="form-input" 
                required 
                placeholder="Nama ibu"
            >
        </div>
    </div>

    <div class="input-grid input-grid-2">
        <div class="form-group">
            <label class="form-label" for="pekerjaan_ayah">Pekerjaan Ayah</label>
            <input 
                id="pekerjaan_ayah" 
                type="text" 
                name="pekerjaan_ayah" 
                class="form-input" 
                required 
                placeholder="Pekerjaan ayah"
            >
        </div>

        <div class="form-group">
            <label class="form-label" for="pekerjaan_ibu">Pekerjaan Ibu</label>
            <input 
                id="pekerjaan_ibu" 
                type="text" 
                name="pekerjaan_ibu" 
                class="form-input" 
                required 
                placeholder="Pekerjaan ibu"
            >
        </div>
    </div>

    <div class="form-group">
        <label class="form-label" for="no_telepon">No. Telepon/HP</label>
        <input 
            id="no_telepon" 
            type="tel" 
            name="no_telepon" 
            class="form-input" 
            required 
            placeholder="08xx xxxx xxxx"
        >
    </div>

    <div class="form-group">
        <label class="form-label" for="no_darurat">Kontak Darurat</label>
        <input 
            id="no_darurat" 
            type="tel" 
            name="no_darurat" 
            class="form-input" 
            placeholder="Nomor telepon jika darurat"
        >
        <div class="form-hint">
            Opsional — nomor keluarga atau saudara yang bisa dihubungi saat darurat.
        </div>
    </div>

    <h4 class="form-section-title">
        <i class="fas fa-paperclip"></i>
        Upload Berkas (opsional)
    </h4>

    <div class="form-group">
        <label class="form-label" for="akta">Akta Kelahiran</label>
        <input 
            id="akta" 
            type="file" 
            name="akta" 
            accept=".jpg,.jpeg,.png,.pdf" 
            class="form-input"
        >
        <div class="form-hint">Format: JPG/PNG/PDF - Maksimal 2MB</div>
    </div>

    <div class="form-group">
        <label class="form-label" for="kk">Kartu Keluarga</label>
        <input 
            id="kk" 
            type="file" 
            name="kk" 
            accept=".jpg,.jpeg,.png,.pdf" 
            class="form-input"
        >
        <div class="form-hint">Format: JPG/PNG/PDF - Maksimal 2MB</div>
    </div>

    <div class="action-buttons">
        <button type="submit" class="btn" aria-label="Kirim Pendaftaran">
            <i class="fas fa-paper-plane"></i>
            <span>Daftar Sekarang</span>
        </button>

        <button type="button" class="btn btn-secondary" onclick="window.location.href='/'">
            Batal
        </button>
    </div>

    <p class="form-hint" style="margin-top: 16px; text-align: center;">
        Dengan menekan <strong>Daftar Sekarang</strong> Anda menyetujui bahwa data yang dimasukkan adalah benar.
    </p>
</form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-footer />

    <script>
    // Theme Toggle
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
        if (icon) {
            icon.className = saved === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
        }

        // Form validation
        const form = document.getElementById('registration-form');
        if (form) {
            const inputs = form.querySelectorAll('input, select, textarea');
            
            inputs.forEach(input => {
                // Real-time validation feedback
                input.addEventListener('blur', function() {
                    if (this.hasAttribute('required') && !this.value.trim()) {
                        this.classList.add('invalid');
                    } else {
                        this.classList.remove('invalid');
                    }
                });

                // Remove invalid class on input
                input.addEventListener('input', function() {
                    this.classList.remove('invalid');
                });
            });

            // Form submit validation - HANYA validasi, biarkan form submit normal
            form.addEventListener('submit', function(e) {
                let isValid = true;
                const requiredFields = form.querySelectorAll('[required]');
                
                requiredFields.forEach(field => {
                    if (!field.value || field.value.trim() === '') {
                        field.classList.add('invalid');
                        isValid = false;
                    } else {
                        field.classList.remove('invalid');
                    }
                });

                if (!isValid) {
                    // Hanya prevent default jika form tidak valid
                    e.preventDefault();
                    
                    // Scroll to first invalid field
                    const firstInvalid = form.querySelector('.invalid');
                    if (firstInvalid) {
                        firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        firstInvalid.focus();
                    }
                }
                // Jika valid, biarkan form submit secara normal
            });
        }

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // File input feedback
        const fileInputs = document.querySelectorAll('input[type="file"]');
        fileInputs.forEach(input => {
            input.addEventListener('change', function() {
                if (this.files.length > 0) {
                    const fileName = this.files[0].name;
                    const label = this.previousElementSibling;
                    if (label && label.classList.contains('form-label')) {
                        label.innerHTML = `${label.textContent.split(' - ')[0]} - <span style="color: var(--success);">${fileName}</span>`;
                    }
                }
            });
        });
    });
</script>
</body>
</html>