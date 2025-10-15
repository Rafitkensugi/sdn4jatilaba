@extends('layouts.app')

@section('title', 'PPDB Online')

@section('content')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes scaleIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }

    @keyframes shimmer {
        0% {
            background-position: -1000px 0;
        }
        100% {
            background-position: 1000px 0;
        }
    }

    /* Container */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Hero Section Styles */
    .hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 120px 0 100px;
        position: relative;
        overflow: hidden;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><rect width="100" height="100" fill="none"/><circle cx="50" cy="50" r="40" fill="white" opacity="0.1"/></svg>');
        animation: float 6s ease-in-out infinite;
    }

    .hero-content {
        position: relative;
        z-index: 1;
        text-align: center;
        color: white;
        animation: fadeInUp 1s ease;
    }

    .hero-content h1 {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        letter-spacing: -1px;
    }

    .hero-content p {
        font-size: 1.25rem;
        opacity: 0.95;
        font-weight: 500;
    }

    /* Card Styles */
    .card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        overflow: hidden;
        height: 100%;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 60px rgba(0,0,0,0.15);
    }

    /* Form Styles */
    .form-input {
        width: 100%;
        padding: 15px 20px;
        border: 2px solid #e0e7ff;
        border-radius: 12px;
        font-family: inherit;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: #f8fafc;
    }

    .form-input:focus {
        outline: none;
        border-color: #667eea;
        background: white;
        box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
        transform: translateY(-2px);
    }

    .form-input:hover {
        border-color: #818cf8;
    }

    textarea.form-input {
        min-height: 100px;
    }

    /* Button Styles */
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 18px 32px;
        border: none;
        border-radius: 12px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 25px rgba(102, 126, 234, 0.6);
    }

    .btn-primary:active {
        transform: translateY(-1px);
    }

    /* Schedule Item */
    .schedule-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 25px;
        border-bottom: 1px solid #e0e7ff;
        transition: all 0.3s ease;
        border-radius: 8px;
    }

    .schedule-item:hover {
        background: #f8fafc;
        transform: translateX(5px);
        border-bottom-color: #667eea;
    }

    .schedule-item:last-child {
        border-bottom: none;
    }

    .schedule-label {
        color: #475569;
        font-weight: 500;
        font-size: 1rem;
    }

    .schedule-date {
        color: #667eea;
        font-weight: 700;
        font-size: 1rem;
        white-space: nowrap;
    }

    /* Info Box */
    .info-box {
        background: white;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        margin-bottom: 30px;
        transition: all 0.3s ease;
        height: auto;
    }

    .info-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    }

    .info-box h3 {
        color: #667eea;
        margin-bottom: 30px;
        font-size: 1.5rem;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* Icon Circle */
    .icon-circle {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        width: 90px;
        height: 90px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px;
        transition: all 0.5s ease;
        animation: pulse 2s ease-in-out infinite;
    }

    .card:hover .icon-circle {
        transform: rotate(360deg) scale(1.1);
        animation: none;
    }

    /* Success Alert */
    .alert-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        padding: 20px 25px;
        border-radius: 12px;
        margin-bottom: 30px;
        text-align: center;
        animation: scaleIn 0.5s ease;
        box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        font-weight: 600;
    }

    /* Label Styles */
    .form-label {
        display: block;
        color: #4c1d95;
        margin-bottom: 10px;
        font-weight: 600;
        font-size: 0.95rem;
    }

    /* Section Styles */
    .section-content {
        padding: 100px 0;
    }

    .section-gray {
        background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
        padding: 100px 0;
    }

    /* Grid Styles */
    .grid-2 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 40px;
        align-items: start;
    }

    .grid-3 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 35px;
    }

    /* Animation Classes */
    .animate-left {
        animation: fadeInLeft 0.8s ease;
    }

    .animate-right {
        animation: fadeInRight 0.8s ease;
    }

    .animate-up {
        animation: fadeInUp 0.8s ease;
    }

    /* Radio Styles */
    input[type="radio"] {
        width: 20px;
        height: 20px;
        cursor: pointer;
        accent-color: #667eea;
    }

    .radio-label {
        display: flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        padding: 10px 20px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .radio-label:hover {
        background: #f8fafc;
    }

    /* Select Styles */
    select.form-input {
        cursor: pointer;
        background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="%23667eea" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>');
        background-repeat: no-repeat;
        background-position: right 15px center;
        appearance: none;
    }

    /* Section Title */
    .section-title {
        text-align: center;
        margin-bottom: 70px;
    }

    .section-title h2 {
        font-size: 2.8rem;
        color: #4c1d95;
        margin-bottom: 15px;
        font-weight: 800;
        letter-spacing: -1px;
    }

    .section-title p {
        color: #64748b;
        font-size: 1.15rem;
        font-weight: 500;
    }

    /* Page Title */
    .page-title {
        color: #4c1d95;
        margin-bottom: 40px;
        font-size: 2.8rem;
        font-weight: 800;
        letter-spacing: -1px;
    }

    /* Requirements List */
    .requirements-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .requirements-list li {
        padding: 15px 0;
        padding-left: 45px;
        position: relative;
        color: #475569;
        line-height: 1.7;
        font-size: 1rem;
    }

    .requirements-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        color: #10b981;
        font-weight: bold;
        font-size: 1.4rem;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #dcfce7;
        border-radius: 50%;
    }

    /* Form Section Title */
    .form-section-title {
        color: #667eea;
        margin-bottom: 25px;
        margin-top: 30px;
        font-size: 1.3rem;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
        padding-bottom: 15px;
        border-bottom: 2px solid #e0e7ff;
    }

    .form-section-title:first-of-type {
        margin-top: 0;
    }

    /* Info Card Content */
    .info-card-content {
        text-align: center;
        padding: 45px 35px;
    }

    .info-card-content h4 {
        color: #4c1d95;
        margin-bottom: 20px;
        font-size: 1.4rem;
        font-weight: 700;
    }

    .info-card-content p {
        color: #64748b;
        line-height: 1.8;
        font-size: 1rem;
    }

    /* Form Card */
    .form-card {
        padding: 50px;
    }

    .form-card h2 {
        color: #4c1d95;
        margin-bottom: 40px;
        text-align: center;
        font-size: 2.2rem;
        font-weight: 800;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .grid-2, .grid-3 {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        .hero-content h1 {
            font-size: 2.5rem;
        }

        .hero {
            padding: 100px 0 80px;
        }

        .section-content,
        .section-gray {
            padding: 60px 0;
        }

        .page-title,
        .section-title h2 {
            font-size: 2rem;
        }

        .form-card {
            padding: 30px 25px;
        }

        .info-box {
            padding: 30px 25px;
        }
    }

    /* Input Group */
    .input-group {
        margin-bottom: 25px;
    }

    /* Radio Group */
    .radio-group {
        display: flex;
        gap: 25px;
        flex-wrap: wrap;
    }
</style>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>SPMB Online</h1>
            <p>Sistem Penerimaan Murid Baru SD Negeri 4 Jatilaba</p>
        </div>
    </div>
</section>

<!-- SPMB Section -->
<section class="section-content">
    <div class="container">
        <div class="grid-2">
            <div class="animate-left">
                <h2 class="page-title">Informasi SPMB</h2>
                
                <div class="info-box">
                    <h3>📅 Jadwal SPMB 2026</h3>
                    <div>
                        <div class="schedule-item">
                            <span class="schedule-label">Pendaftaran Gelombang 1</span>
                            <span class="schedule-date">1 - 15 Juni 2024</span>
                        </div>
                        <div class="schedule-item">
                            <span class="schedule-label">Pengumuman Gelombang 1</span>
                            <span class="schedule-date">20 Juni 2024</span>
                        </div>
                        <div class="schedule-item">
                            <span class="schedule-label">Pendaftaran Gelombang 2</span>
                            <span class="schedule-date">25 - 30 Juni 2024</span>
                        </div>
                        <div class="schedule-item">
                            <span class="schedule-label">Pengumuman Gelombang 2</span>
                            <span class="schedule-date">5 Juli 2024</span>
                        </div>
                    </div>
                </div>
                
                <div class="info-box">
                    <h3>📋 Persyaratan</h3>
                    <ul class="requirements-list">
                        <li>Usia minimal 6 tahun per 1 Juli 2024</li>
                        <li>Fotokopi akta kelahiran</li>
                        <li>Fotokopi kartu keluarga</li>
                        <li>Pas foto 3x4 (2 lembar)</li>
                        <li>Surat keterangan sehat dari dokter</li>
                    </ul>
                </div>
            </div>
            
            <div class="animate-right">
                <div class="card form-card">
                    <h2>📝 Formulir Pendaftaran</h2>
                    
                    @if(session('success'))
                    <div class="alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    
                    <form action="/ppdb" method="POST">
                        @csrf
                        
                        <h4 class="form-section-title">👤 Data Calon Siswa</h4>
                        
                        <div class="input-group">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" required class="form-input" placeholder="Masukkan nama lengkap">
                        </div>
                        
                        <div class="input-group">
                            <label class="form-label">Nama Panggilan</label>
                            <input type="text" name="nama_panggilan" required class="form-input" placeholder="Masukkan nama panggilan">
                        </div>
                
                        <div class="grid-2" style="gap: 20px; margin-bottom: 25px;">
                            <div>
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" required class="form-input" placeholder="Kota lahir">
                            </div>
                            
                            <div>
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" required class="form-input">
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <label class="form-label">Jenis Kelamin</label>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input type="radio" name="jenis_kelamin" value="L" required>
                                    <span style="color: #475569; font-weight: 500;">Laki-laki</span>
                                </label>
                                <label class="radio-label">
                                    <input type="radio" name="jenis_kelamin" value="P" required>
                                    <span style="color: #475569; font-weight: 500;">Perempuan</span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <label class="form-label">Agama</label>
                            <select name="agama" required class="form-input">
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        
                        <div class="input-group">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" rows="3" required class="form-input" placeholder="Masukkan alamat lengkap" style="resize: vertical;"></textarea>
                        </div>
                        
                        <h4 class="form-section-title">👨‍👩‍👧 Data Orang Tua</h4>
                        
                        <div class="grid-2" style="gap: 20px; margin-bottom: 25px;">
                            <div>
                                <label class="form-label">Nama Ayah</label>
                                <input type="text" name="nama_ayah" required class="form-input" placeholder="Nama ayah kandung">
                            </div>
                            
                            <div>
                                <label class="form-label">Nama Ibu</label>
                                <input type="text" name="nama_ibu" required class="form-input" placeholder="Nama ibu kandung">
                            </div>
                        </div>
                        
                        <div class="grid-2" style="gap: 20px; margin-bottom: 25px;">
                            <div>
                                <label class="form-label">Pekerjaan Ayah</label>
                                <input type="text" name="pekerjaan_ayah" required class="form-input" placeholder="Pekerjaan ayah">
                            </div>
                            
                            <div>
                                <label class="form-label">Pekerjaan Ibu</label>
                                <input type="text" name="pekerjaan_ibu" required class="form-input" placeholder="Pekerjaan ibu">
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <label class="form-label">No. Telepon/HP</label>
                            <input type="tel" name="no_telepon" required class="form-input" placeholder="08xxxxxxxxxx">
                        </div>
                        
                        <button type="submit" class="btn-primary">
                            <i class="fas fa-paper-plane"></i> 
                            <span>Daftar Sekarang</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Informasi Tambahan -->
<section class="section-gray">
    <div class="container">
        <div class="section-title">
            <h2>Informasi Tambahan</h2>
            <p>Hal-hal yang perlu diketahui calon orang tua siswa</p>
        </div>
        
        <div class="grid-3">
            <div class="card animate-up">
                <div class="info-card-content">
                    <div class="icon-circle">
                        <i class="fas fa-graduation-cap" style="font-size: 2.2rem; color: white;"></i>
                    </div>
                    <h4>Kurikulum</h4>
                    <p>Menggunakan Kurikulum Merdeka yang berfokus pada pengembangan karakter dan kompetensi siswa</p>
                </div>
            </div>
            
            <div class="card animate-up" style="animation-delay: 0.2s;">
                <div class="info-card-content">
                    <div class="icon-circle">
                        <i class="fas fa-book" style="font-size: 2.2rem; color: white;"></i>
                    </div>
                    <h4>Ekstrakurikuler</h4>
                    <p>Berbagai pilihan ekstrakurikuler untuk mengembangkan bakat dan minat siswa</p>
                </div>
            </div>
            
            <div class="card animate-up" style="animation-delay: 0.4s;">
                <div class="info-card-content">
                    <div class="icon-circle">
                        <i class="fas fa-heart" style="font-size: 2.2rem; color: white;"></i>
                    </div>
                    <h4>Lingkungan</h4>
                    <p>Lingkungan sekolah yang aman, nyaman, dan mendukung proses belajar mengajar</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection