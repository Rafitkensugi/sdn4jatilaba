<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail PPDB - Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --bg-primary: #f8fafc;
      --bg-secondary: #ffffff;
      --bg-tertiary: #f1f5f9;
      --text-primary: #1e293b;
      --text-secondary: #475569;
      --text-tertiary: #64748b;
      --accent-primary: #6366f1;
      --accent-secondary: #facc15;
      --accent-danger: #ef4444;
      --border-color: #e2e8f0;
      --header-gradient: linear-gradient(135deg, #b45309, #92400e);
    }

    @media (prefers-color-scheme: dark) {
      :root {
        --bg-primary: #0f172a;
        --bg-secondary: #1e293b;
        --bg-tertiary: #0f172a;
        --text-primary: #f8fafc;
        --text-secondary: #e2e8f0;
        --text-tertiary: #94a3b8;
        --accent-primary: #6366f1;
        --accent-secondary: #facc15;
        --accent-danger: #ef4444;
        --border-color: #334155;
        --header-gradient: linear-gradient(135deg, #b45309, #92400e);
      }
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--bg-primary);
      color: var(--text-primary);
      transition: background-color 0.3s, color 0.3s;
    }
    
    .header-section {
      background: var(--header-gradient);
      padding: 1.5rem 1rem;
      color: white;
    }
    
    @media (min-width: 768px) {
      .header-section {
        padding: 2rem 3rem;
      }
    }
    
    .header-title {
      display: flex;
      align-items: center;
      gap: 1rem;
      font-size: 1.5rem;
      font-weight: 700;
    }
    
    @media (min-width: 768px) {
      .header-title {
        font-size: 1.75rem;
      }
    }
    
    .header-subtitle {
      color: #fef9c3;
      font-size: 0.9rem;
      margin-top: 0.25rem;
    }
    
    @media (min-width: 768px) {
      .header-subtitle {
        font-size: 1rem;
      }
    }
    
    .breadcrumb {
      background: var(--bg-secondary);
      padding: 1rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.875rem;
      color: var(--text-tertiary);
      border-bottom: 1px solid var(--border-color);
    }
    
    @media (min-width: 768px) {
      .breadcrumb {
        padding: 1rem 3rem;
      }
    }
    
    .breadcrumb a {
      color: var(--text-secondary);
      text-decoration: none;
    }
    
    .breadcrumb a:hover {
      color: var(--accent-secondary);
    }
    
    .card {
      background: var(--bg-secondary);
      border-radius: 10px;
      margin: 1.5rem 1rem;
      padding: 1.5rem;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      border: 1px solid var(--border-color);
    }
    
    @media (min-width: 768px) {
      .card {
        margin: 2rem 3rem;
        padding: 2rem;
      }
    }
    
    .section-title {
      color: var(--accent-secondary);
      font-size: 1.1rem;
      font-weight: 600;
      margin-bottom: 1.5rem;
      text-transform: uppercase;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    
    @media (min-width: 768px) {
      .section-title {
        font-size: 1.25rem;
      }
    }
    
    .info-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1rem;
    }
    
    @media (min-width: 640px) {
      .info-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    
    @media (min-width: 1024px) {
      .info-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      }
    }
    
    .info-item {
      background: var(--bg-tertiary);
      border-radius: 8px;
      padding: 1rem;
      border: 1px solid var(--border-color);
    }
    
    .info-label {
      font-size: 0.875rem;
      color: var(--text-tertiary);
    }
    
    .info-value {
      font-size: 1rem;
      font-weight: 500;
      color: var(--text-primary);
      margin-top: 0.25rem;
    }
    
    .btn {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 10px 18px;
      border-radius: 6px;
      font-size: 0.875rem;
      font-weight: 500;
      transition: all 0.2s;
      text-decoration: none;
      border: none;
      cursor: pointer;
    }
    
    .btn-primary {
      background: var(--accent-primary);
      color: white;
    }
    
    .btn-primary:hover { 
      background: #4f46e5; 
      transform: translateY(-2px);
    }
    
    .btn-secondary {
      background: var(--bg-tertiary);
      color: var(--text-primary);
      border: 1px solid var(--border-color);
    }
    
    .btn-secondary:hover { 
      background: var(--border-color);
      transform: translateY(-2px);
    }
    
    .btn-danger {
      background: var(--accent-danger);
      color: white;
    }
    
    .btn-danger:hover { 
      background: #dc2626; 
      transform: translateY(-2px);
    }
    
    .action-buttons {
      margin-top: 2rem;
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
    }
    
    /* Mobile-specific adjustments */
    @media (max-width: 640px) {
      .action-buttons {
        flex-direction: column;
      }
      
      .action-buttons .btn {
        width: 100%;
        justify-content: center;
      }
    }
  </style>
</head>
<body>
  <!-- HEADER -->
  <div class="header-section">
    <div class="header-title">
      <a href="{{ route('admin.ppdb.index') }}" class="text-white hover:text-yellow-300">
        <i class="fas fa-arrow-left text-xl"></i>
      </a>
      <span><i class="fas fa-file-alt"></i> Detail PPDB</span>
    </div>
    <p class="header-subtitle">Informasi lengkap calon siswa SDN 4 Jatilaba</p>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb">
    <i class="fas fa-home"></i>
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <span>›</span>
    <a href="{{ route('admin.ppdb.index') }}">PPDB</a>
    <span>›</span>
    <span class="text-gray-400">Detail</span>
  </div>

  <!-- DATA SISWA -->
  <div class="card">
    <h3 class="section-title"><i class="fas fa-user-graduate"></i> Data Calon Siswa</h3>
    <div class="info-grid">
      <div class="info-item"><div class="info-label">Nama Lengkap</div><div class="info-value">{{ $ppdb->nama_lengkap }}</div></div>
      <div class="info-item"><div class="info-label">Nama Panggilan</div><div class="info-value">{{ $ppdb->nama_panggilan }}</div></div>
      <div class="info-item"><div class="info-label">Tempat Lahir</div><div class="info-value">{{ $ppdb->tempat_lahir }}</div></div>
      <div class="info-item"><div class="info-label">Tanggal Lahir</div><div class="info-value">{{ $ppdb->tanggal_lahir_formatted }}</div></div>
      <div class="info-item"><div class="info-label">Usia</div><div class="info-value">{{ $ppdb->usia }} tahun</div></div>
      <div class="info-item"><div class="info-label">Jenis Kelamin</div><div class="info-value">{{ $ppdb->jenis_kelamin_text }}</div></div>
      <div class="info-item"><div class="info-label">Agama</div><div class="info-value">{{ $ppdb->agama }}</div></div>
      <div class="info-item"><div class="info-label">Alamat Lengkap</div><div class="info-value">{{ $ppdb->alamat }}</div></div>
    </div>
  </div>

  <!-- DATA ORANG TUA / WALI -->
  <div class="card">
    <h3 class="section-title"><i class="fas fa-users"></i> Data Orang Tua / Wali</h3>
    <div class="info-grid">
      <div class="info-item"><div class="info-label">Nama Ayah</div><div class="info-value">{{ $ppdb->nama_ayah }}</div></div>
      <div class="info-item"><div class="info-label">Pekerjaan Ayah</div><div class="info-value">{{ $ppdb->pekerjaan_ayah }}</div></div>
      <div class="info-item"><div class="info-label">Nama Ibu</div><div class="info-value">{{ $ppdb->nama_ibu }}</div></div>
      <div class="info-item"><div class="info-label">Pekerjaan Ibu</div><div class="info-value">{{ $ppdb->pekerjaan_ibu }}</div></div>
      <div class="info-item"><div class="info-label">No. Telepon / HP</div><div class="info-value">{{ $ppdb->no_telepon }}</div></div>
      <div class="info-item"><div class="info-label">Kontak Darurat</div><div class="info-value">{{ $ppdb->kontak_darurat }}</div></div>
    </div>
  </div>

  <!-- BERKAS UPLOAD -->
  <div class="card">
    <h3 class="section-title"><i class="fas fa-folder-open"></i> Berkas Upload</h3>
    <div class="info-grid">
      <div class="info-item"><div class="info-label">Akta Kelahiran</div><div class="info-value">{{ $ppdb->akta_kelahiran ? 'TERSEDIA' : 'TIDAK ADA' }}</div></div>
      <div class="info-item"><div class="info-label">Kartu Keluarga</div><div class="info-value">{{ $ppdb->kartu_keluarga ? 'TERSEDIA' : 'TIDAK ADA' }}</div></div>
    </div>
  </div>

  <!-- INFORMASI PENDAFTARAN -->
  <div class="card">
    <h3 class="section-title"><i class="fas fa-calendar-alt"></i> Informasi Pendaftaran</h3>
    <div class="info-grid">
      <div class="info-item"><div class="info-label">Tanggal Pendaftaran</div><div class="info-value">{{ $ppdb->created_at->translatedFormat('d F Y H:i') }}</div></div>
    </div>

    <div class="action-buttons">
      <a href="{{ route('admin.ppdb.download.pdf', $ppdb->id) }}" class="btn btn-primary"><i class="fas fa-file-pdf"></i> Download PDF</a>
      <a href="{{ route('admin.ppdb.view.pdf', $ppdb->id) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i> Lihat PDF</a>
      <form action="{{ route('admin.ppdb.destroy', $ppdb->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')" style="display:inline;">
        @csrf @method('DELETE')
        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
      </form>
    </div>
  </div>
</body>
</html>