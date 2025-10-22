<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data PPDB - Admin</title>
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
            --warning: #f59e0b;
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
            max-width: 1200px;
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
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid var(--border);
        }

        .table th {
            background: var(--bg);
            font-weight: 600;
            color: var(--text-muted);
            font-size: 0.875rem;
        }

        .table tbody tr:hover {
            background: var(--bg);
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
            padding: 8px 16px;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            font-size: 0.875rem;
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

        .btn-sm {
            padding: 6px 12px;
            font-size: 0.75rem;
        }

        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .action-buttons {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid;
        }

        .alert-success {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success);
            border-color: rgba(16, 185, 129, 0.3);
        }

        .alert-danger {
            background: rgba(239, 68, 68, 0.1);
            color: var(--danger);
            border-color: rgba(239, 68, 68, 0.3);
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: var(--text-muted);
        }

        .empty-state i {
            font-size: 3rem;
            margin-bottom: 16px;
            opacity: 0.5;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: var(--card-bg);
            padding: 20px;
            border-radius: 12px;
            border: 1px solid var(--border);
            text-align: center;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 8px;
        }

        .stat-label {
            color: var(--text-muted);
            font-size: 0.875rem;
        }
        .full-width {
    grid-column: 1 / -1;
}

.text-xs {
    font-size: 0.75rem;
}

.text-center {
    text-align: center;
}

.mt-1 {
    margin-top: 0.25rem;
}
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold">Data Pendaftaran PPDB</h1>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i>
                    Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Stats -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">{{ $ppdbData->count() }}</div>
                <div class="stat-label">Total Pendaftar</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">{{ $ppdbData->where('jenis_kelamin', 'L')->count() }}</div>
                <div class="stat-label">Laki-laki</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">{{ $ppdbData->where('jenis_kelamin', 'P')->count() }}</div>
                <div class="stat-label">Perempuan</div>
            </div>
        </div>

        <!-- Alert Messages -->
        @if(session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
            </div>
        @endif

        <!-- Data Table -->
        <div class="card">
            @if($ppdbData->count() > 0)
                <div class="overflow-x-auto">
                    <table class="table">
                        <!-- Dalam bagian tabel, ganti kolom tanggal lahir -->
<thead>
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Nama Panggilan</th>
        <th>Tanggal Lahir</th>
        <th>Usia</th>
        <th>Jenis Kelamin</th>
        <th>Nama Orang Tua</th>
        <th>Telepon</th>
        <th>Tanggal Daftar</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach($ppdbData as $index => $data)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td class="font-semibold">{{ $data->nama_lengkap }}</td>
            <td>{{ $data->nama_panggilan }}</td>
            <td>
                <div class="text-sm">
                    <div>{{ $data->tanggal_lahir_short }}</div>
                    <div class="text-xs text-muted">{{ $data->tempat_lahir }}</div>
                </div>
            </td>
            <td class="text-center">
                <span class="badge badge-success">{{ $data->usia }} tahun</span>
            </td>
            <td>
                <span class="badge {{ $data->jenis_kelamin == 'L' ? 'badge-success' : '' }}">
                    {{ $data->jenis_kelamin_text }}
                </span>
            </td>
            <td>
                <div class="text-sm">
                    <div>Ayah: {{ $data->nama_ayah }}</div>
                    <div>Ibu: {{ $data->nama_ibu }}</div>
                </div>
            </td>
            <td>{{ $data->no_telepon }}</td>
            <td>{{ $data->created_at->format('d/m/Y H:i') }}</td>
            <td>
                <div class="action-buttons">
                    <a href="{{ route('admin.ppdb.show', $data->id) }}" 
                       class="btn btn-primary btn-sm"
                       title="Lihat Detail">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.ppdb.download.pdf', $data->id) }}" 
                       class="btn btn-secondary btn-sm"
                       title="Download PDF">
                        <i class="fas fa-download"></i>
                    </a>
                    <form action="{{ route('admin.ppdb.destroy', $data->id) }}" 
                        method="POST" 
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                        style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" title="Hapus">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
</tbody>
                    </table>
                </div>
            @else
                <div class="empty-state">
                    <i class="fas fa-inbox"></i>
                    <h3 class="text-lg font-semibold mb-2">Belum ada data pendaftaran</h3>
                    <p class="text-muted">Data pendaftaran PPDB akan muncul di sini</p>
                </div>
            @endif
        </div>
    </div>

    <script>
        // Theme toggle (jika diperlukan)
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