<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail PPDB - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --success: #10b981;
            --danger: #ef4444;
            --bg: #f8fafc;
            --card-bg: #ffffff;
            --text: #1e293b;
            --text-muted: #64748b;
            --border: #e2e8f0;
        }

        [data-theme="dark"] {
            --primary: #818cf8;
            --bg: #0f172a;
            --card-bg: #1e293b;
            --text: #f1f5f9;
            --text-muted: #94a3b8;
            --border: #334155;
        }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'Inter', sans-serif;
            transition: background 0.3s, color 0.3s;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header {
            background: var(--card-bg);
            border-bottom: 1px solid var(--border);
            padding: 1rem 0;
            margin-bottom: 2rem;
        }

        .card {
            background: var(--card-bg);
            border-radius: 12px;
            border: 1px solid var(--border);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            margin-bottom: 20px;
        }

        .card-header {
            padding: 20px;
            border-bottom: 1px solid var(--border);
            background: var(--bg);
        }

        .card-body {
            padding: 20px;
        }

        .section-title {
            color: var(--primary);
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 24px;
        }

        .info-item {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .info-label {
            font-size: 0.875rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        .info-value {
            font-weight: 500;
            color: var(--text);
        }

        .badge {
            display: inline-flex;
            align-items: center;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .badge-success {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-danger {
            background: var(--danger);
            color: white;
        }

        .btn-secondary {
            background: var(--bg);
            color: var(--text);
            border: 1px solid var(--border);
        }

        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .file-download {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            background: var(--bg);
            border: 1px solid var(--border);
            border-radius: 8px;
            text-decoration: none;
            color: var(--text);
            transition: all 0.2s;
        }

        .file-download:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        .action-buttons {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 24px;
            padding-top: 24px;
            border-top: 1px solid var(--border);
        }

        .no-file {
            color: var(--text-muted);
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold">Detail Pendaftaran PPDB</h1>
                <a href="{{ route('admin.ppdb.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i>
                    Kembali ke Daftar
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="text-xl font-bold">{{ $ppdb->nama_lengkap }}</h2>
                <p class="text-muted">Terdaftar pada: {{ $ppdb->created_at->format('d F Y H:i') }}</p>
            </div>

            <div class="card-body">
               <!-- Data Calon Siswa -->
<h3 class="section-title">
    <i class="fas fa-user"></i>
    Data Calon Siswa
</h3>

<div class="info-grid">
    <div class="info-item">
        <span class="info-label">Nama Lengkap</span>
        <span class="info-value">{{ $ppdb->nama_lengkap }}</span>
    </div>
    <div class="info-item">
        <span class="info-label">Nama Panggilan</span>
        <span class="info-value">{{ $ppdb->nama_panggilan }}</span>
    </div>
    <div class="info-item">
        <span class="info-label">Tempat Lahir</span>
        <span class="info-value">{{ $ppdb->tempat_lahir }}</span>
    </div>
    <div class="info-item">
        <span class="info-label">Tanggal Lahir</span>
        <span class="info-value">
            {{ $ppdb->tanggal_lahir_formatted }}
            <div class="text-sm text-muted mt-1">Usia: {{ $ppdb->usia }} tahun</div>
        </span>
    </div>
    <div class="info-item">
        <span class="info-label">Jenis Kelamin</span>
        <span class="info-value">
            <span class="badge {{ $ppdb->jenis_kelamin == 'L' ? 'badge-success' : '' }}">
                {{ $ppdb->jenis_kelamin_text }}
            </span>
        </span>
    </div>
    <div class="info-item">
        <span class="info-label">Agama</span>
        <span class="info-value">{{ $ppdb->agama }}</span>
    </div>
    <div class="info-item full-width">
        <span class="info-label">Alamat</span>
        <span class="info-value">{{ $ppdb->alamat }}</span>
    </div>
</div>

                <!-- Data Orang Tua -->
                <h3 class="section-title">
                    <i class="fas fa-users"></i>
                    Data Orang Tua / Wali
                </h3>
                
                <div class="info-grid">
                    <div class="info-item">
                        <span class="info-label">Nama Ayah</span>
                        <span class="info-value">{{ $ppdb->nama_ayah }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Pekerjaan Ayah</span>
                        <span class="info-value">{{ $ppdb->pekerjaan_ayah }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Nama Ibu</span>
                        <span class="info-value">{{ $ppdb->nama_ibu }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Pekerjaan Ibu</span>
                        <span class="info-value">{{ $ppdb->pekerjaan_ibu }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">No. Telepon/HP</span>
                        <span class="info-value">{{ $ppdb->no_telepon }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Kontak Darurat</span>
                        <span class="info-value">{{ $ppdb->no_darurat ?: '-' }}</span>
                    </div>
                </div>

                <!-- Berkas Upload -->
                <h3 class="section-title">
                    <i class="fas fa-paperclip"></i>
                    Berkas Upload
                </h3>
                
                <div class="info-grid">
                    <div class="info-item">
                        <span class="info-label">Akta Kelahiran</span>
                        @if($ppdb->akta_path)
                            <a href="{{ Storage::url($ppdb->akta_path) }}" 
                               target="_blank" 
                               class="file-download">
                                <i class="fas fa-download"></i>
                                Download Akta
                            </a>
                        @else
                            <span class="no-file">Tidak ada file</span>
                        @endif
                    </div>
                    <div class="info-item">
                        <span class="info-label">Kartu Keluarga</span>
                        @if($ppdb->kk_path)
                            <a href="{{ Storage::url($ppdb->kk_path) }}" 
                               target="_blank" 
                               class="file-download">
                                <i class="fas fa-download"></i>
                                Download KK
                            </a>
                        @else
                            <span class="no-file">Tidak ada file</span>
                        @endif
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <a href="{{ route('admin.ppdb.download.pdf', $ppdb->id) }}" 
                       class="btn btn-primary">
                        <i class="fas fa-file-pdf"></i>
                        Download PDF
                    </a>
                    
                    <a href="{{ route('admin.ppdb.view.pdf', $ppdb->id) }}" 
                       target="_blank"
                       class="btn btn-secondary">
                        <i class="fas fa-eye"></i>
                        Lihat PDF
                    </a>
                    
                    <form action="{{ route('admin.ppdb.destroy', $ppdb->id) }}" 
                          method="POST" 
                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                          style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                            Hapus Data
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Theme toggle
        function toggleTheme() {
            const html = document.documentElement;
            const current = html.getAttribute('data-theme');
            const next = current === 'dark' ? 'light' : 'dark';
            html.setAttribute('data-theme', next);
            localStorage.setItem('theme', next);
        }

        // Load saved theme
        document.addEventListener('DOMContentLoaded', function() {
            const saved = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-theme', saved);
        });
    </script>
</body>
</html>