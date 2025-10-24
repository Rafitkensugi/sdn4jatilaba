<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir PPDB - {{ $ppdb->nama_lengkap }}</title>
    <style>
        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #4f46e5;
            padding-bottom: 20px;
        }
        
        .header h1 {
            color: #4f46e5;
            margin: 0;
            font-size: 24px;
        }
        
        .header .subtitle {
            color: #666;
            font-size: 14px;
        }
        
        .section {
            margin-bottom: 25px;
        }
        
        .section-title {
            background: #f8fafc;
            padding: 8px 12px;
            border-left: 4px solid #4f46e5;
            margin-bottom: 15px;
            font-weight: bold;
            color: #4f46e5;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }
        
        .info-item {
            margin-bottom: 8px;
        }
        
        .info-label {
            font-weight: bold;
            color: #666;
            font-size: 12px;
            margin-bottom: 2px;
        }
        
        .info-value {
            font-size: 14px;
        }
        
        .full-width {
            grid-column: 1 / -1;
        }
        
        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 12px;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }
        
        .badge {
            display: inline-block;
            padding: 2px 8px;
            background: #10b981;
            color: white;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        table td {
            padding: 8px;
            border: 1px solid #ddd;
        }
        
        .file-info {
            font-size: 12px;
            color: #666;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>FORMULIR PENDAFTARAN PPDB</h1>
        <div class="subtitle">SD NEGERI 4 JATILABA - TAHUN AJARAN 2024/2025</div>
    </div>

    <!-- Data Calon Siswa -->
<div class="section">
    <div class="section-title">DATA CALON SISWA</div>
    <div class="info-grid">
        <div class="info-item">
            <div class="info-label">Nama Lengkap</div>
            <div class="info-value">{{ $ppdb->nama_lengkap }}</div>
        </div>
        <div class="info-item">
            <div class="info-label">Nama Panggilan</div>
            <div class="info-value">{{ $ppdb->nama_panggilan }}</div>
        </div>
        <div class="info-item">
            <div class="info-label">Tempat Lahir</div>
            <div class="info-value">{{ $ppdb->tempat_lahir }}</div>
        </div>
        <div class="info-item">
            <div class="info-label">Tanggal Lahir</div>
            <div class="info-value">
                {{ $ppdb->tanggal_lahir->format('d F Y') }}
                <div style="font-size: 10px; color: #666;">Usia: {{ $ppdb->usia }} tahun</div>
            </div>
        </div>
        <div class="info-item">
            <div class="info-label">Jenis Kelamin</div>
            <div class="info-value">{{ $ppdb->jenis_kelamin_text }}</div>
        </div>
        <div class="info-item">
            <div class="info-label">Agama</div>
            <div class="info-value">{{ $ppdb->agama }}</div>
        </div>
        <div class="info-item full-width">
            <div class="info-label">Alamat Lengkap</div>
            <div class="info-value">{{ $ppdb->alamat }}</div>
        </div>
    </div>
</div>

    <!-- Data Orang Tua -->
    <div class="section">
        <div class="section-title">DATA ORANG TUA / WALI</div>
        <div class="info-grid">
            <div class="info-item">
                <div class="info-label">Nama Ayah</div>
                <div class="info-value">{{ $ppdb->nama_ayah }}</div>
            </div>
            <div class="info-item">
                <div class="info-label">Pekerjaan Ayah</div>
                <div class="info-value">{{ $ppdb->pekerjaan_ayah }}</div>
            </div>
            <div class="info-item">
                <div class="info-label">Nama Ibu</div>
                <div class="info-value">{{ $ppdb->nama_ibu }}</div>
            </div>
            <div class="info-item">
                <div class="info-label">Pekerjaan Ibu</div>
                <div class="info-value">{{ $ppdb->pekerjaan_ibu }}</div>
            </div>
            <div class="info-item">
                <div class="info-label">No. Telepon/HP</div>
                <div class="info-value">{{ $ppdb->no_telepon }}</div>
            </div>
            <div class="info-item">
                <div class="info-label">Kontak Darurat</div>
                <div class="info-value">{{ $ppdb->no_darurat ?: '-' }}</div>
            </div>
        </div>
    </div>

    <!-- Berkas Upload -->
    <div class="section">
        <div class="section-title">BERKAS UPLOAD</div>
        <div class="info-grid">
            <div class="info-item">
                <div class="info-label">Akta Kelahiran</div>
                <div class="info-value">
                    @if($ppdb->akta_path)
                        <span class="badge">TERSEDIA</span>
                    @else
                        <span style="color: #666;">Tidak ada file</span>
                    @endif
                </div>
            </div>
            <div class="info-item">
                <div class="info-label">Kartu Keluarga</div>
                <div class="info-value">
                    @if($ppdb->kk_path)
                        <span class="badge">TERSEDIA</span>
                    @else
                        <span style="color: #666;">Tidak ada file</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Informasi Pendaftaran -->
    <div class="section">
        <div class="section-title">INFORMASI PENDAFTARAN</div>
        <div class="info-grid">
            <div class="info-item">
                <div class="info-label">Tanggal Pendaftaran</div>
                <div class="info-value">{{ $ppdb->created_at->format('d F Y H:i') }}</div>
            </div>
            <div class="info-item">
                <div class="info-label">Status</div>
                <div class="info-value">
                    <span class="badge">TERDAFTAR</span>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Dokumen ini dicetak secara otomatis pada {{ now()->format('d F Y H:i') }}</p>
        <p>SD Negeri 4 Jatilaba - Sistem Penerimaan Murid Baru</p>
    </div>
</body>
</html>