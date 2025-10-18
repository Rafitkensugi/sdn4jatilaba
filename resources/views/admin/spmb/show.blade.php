@extends('admin.layouts.app')

@section('title', 'Detail Pendaftar - ' . $data->nama_lengkap)

@section('content')
<div class="card">
    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
        <h3>Detail Pendaftar: {{ $data->nama_lengkap }}</h3>
        <div>
            <form action="{{ route('admin.spmb.updateStatus', $data->id) }}" method="POST" style="display: inline;">
                @csrf
                <select name="status" onchange="this.form.submit()" class="form-select" style="padding: 8px; border-radius: 6px; border: 1px solid #cbd5e1;">
                    <option value="menunggu" {{ $data->status == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                    <option value="diterima" {{ $data->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
                    <option value="ditolak" {{ $data->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                </select>
            </form>
            <a href="{{ route('admin.spmb.index') }}" class="btn btn-primary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <!-- Data Calon Siswa -->
        <div>
            <h4 style="margin-bottom: 20px; color: var(--primary); border-bottom: 2px solid var(--primary); padding-bottom: 8px;">
                <i class="fas fa-user-graduate"></i> Data Calon Siswa
            </h4>
            
            <div style="display: grid; gap: 15px;">
                <div>
                    <label style="font-weight: 600; color: var(--gray-600); display: block;">Nama Lengkap</label>
                    <p style="margin-top: 5px;">{{ $data->nama_lengkap }}</p>
                </div>
                
                <div>
                    <label style="font-weight: 600; color: var(--gray-600); display: block;">Nama Panggilan</label>
                    <p style="margin-top: 5px;">{{ $data->nama_panggilan }}</p>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <div>
                        <label style="font-weight: 600; color: var(--gray-600); display: block;">Tempat Lahir</label>
                        <p style="margin-top: 5px;">{{ $data->tempat_lahir }}</p>
                    </div>
                    
                    <div>
                        <label style="font-weight: 600; color: var(--gray-600); display: block;">Tanggal Lahir</label>
                        <p style="margin-top: 5px;">{{ \Carbon\Carbon::parse($data->tanggal_lahir)->format('d/m/Y') }}</p>
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <div>
                        <label style="font-weight: 600; color: var(--gray-600); display: block;">Jenis Kelamin</label>
                        <p style="margin-top: 5px;">{{ $data->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                    </div>
                    
                    <div>
                        <label style="font-weight: 600; color: var(--gray-600); display: block;">Agama</label>
                        <p style="margin-top: 5px;">{{ $data->agama }}</p>
                    </div>
                </div>
                
                <div>
                    <label style="font-weight: 600; color: var(--gray-600); display: block;">Alamat</label>
                    <p style="margin-top: 5px; line-height: 1.6;">{{ $data->alamat }}</p>
                </div>
            </div>
        </div>

        <!-- Data Orang Tua -->
        <div>
            <h4 style="margin-bottom: 20px; color: var(--primary); border-bottom: 2px solid var(--primary); padding-bottom: 8px;">
                <i class="fas fa-users"></i> Data Orang Tua
            </h4>
            
            <div style="display: grid; gap: 15px;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <div>
                        <label style="font-weight: 600; color: var(--gray-600); display: block;">Nama Ayah</label>
                        <p style="margin-top: 5px;">{{ $data->nama_ayah }}</p>
                    </div>
                    
                    <div>
                        <label style="font-weight: 600; color: var(--gray-600); display: block;">Nama Ibu</label>
                        <p style="margin-top: 5px;">{{ $data->nama_ibu }}</p>
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <div>
                        <label style="font-weight: 600; color: var(--gray-600); display: block;">Pekerjaan Ayah</label>
                        <p style="margin-top: 5px;">{{ $data->pekerjaan_ayah }}</p>
                    </div>
                    
                    <div>
                        <label style="font-weight: 600; color: var(--gray-600); display: block;">Pekerjaan Ibu</label>
                        <p style="margin-top: 5px;">{{ $data->pekerjaan_ibu }}</p>
                    </div>
                </div>
                
                <div>
                    <label style="font-weight: 600; color: var(--gray-600); display: block;">No. Telepon/HP</label>
                    <p style="margin-top: 5px;">{{ $data->no_telepon }}</p>
                </div>
            </div>

            <!-- Informasi Pendaftaran -->
            <div style="margin-top: 30px; padding: 20px; background: var(--gray-100); border-radius: 8px;">
                <h5 style="margin-bottom: 15px; color: var(--gray-600);">Informasi Pendaftaran</h5>
                
                <div style="display: grid; gap: 10px;">
                    <div style="display: flex; justify-content: space-between;">
                        <span>Status:</span>
                        <span class="badge badge-{{ $data->status }}">
                            @if($data->status == 'menunggu')
                                Menunggu
                            @elseif($data->status == 'diterima')
                                Diterima
                            @else
                                Ditolak
                            @endif
                        </span>
                    </div>
                    
                    <div style="display: flex; justify-content: space-between;">
                        <span>Tanggal Daftar:</span>
                        <span>{{ $data->created_at->format('d/m/Y H:i') }}</span>
                    </div>
                    
                    <div style="display: flex; justify-content: space-between;">
                        <span>Terakhir Diupdate:</span>
                        <span>{{ $data->updated_at->format('d/m/Y H:i') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 30px; display: flex; gap: 10px; justify-content: flex-end;">
        <form action="{{ route('admin.spmb.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash"></i> Hapus Data
            </button>
        </form>
    </div>
</div>
@endsection