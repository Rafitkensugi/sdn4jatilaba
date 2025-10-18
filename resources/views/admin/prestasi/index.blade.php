@extends('layouts.app')

@section('title', 'Manajemen Prestasi')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manajemen Prestasi</h1>
        <a href="{{ route('admin.prestasi.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Prestasi
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Prestasi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Tempat</th>
                            <th>Tingkat</th>
                            <th>Tanggal</th>
                            <th>Juara</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($prestasis as $prestasi)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if($prestasi->gambar)
                                    <img src="{{ asset('storage/' . $prestasi->gambar) }}" alt="{{ $prestasi->judul }}" class="img-thumbnail" style="width: 80px; height: 60px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('images/default-prestasi.jpg') }}" alt="Default Image" class="img-thumbnail" style="width: 80px; height: 60px; object-fit: cover;">
                                @endif
                            </td>
                            <td>{{ $prestasi->judul }}</td>
                            <td>{{ $prestasi->tempat }}</td>
                            <td>
                                <span class="badge 
                                    @if($prestasi->tingkat == 'Nasional') badge-success
                                    @elseif($prestasi->tingkat == 'Provinsi') badge-primary
                                    @elseif($prestasi->tingkat == 'Kabupaten') badge-warning
                                    @else badge-secondary @endif">
                                    {{ $prestasi->tingkat }}
                                </span>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d M Y') }}</td>
                            <td>
                                <span class="badge badge-info">{{ $prestasi->juara }}</span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.prestasi.edit', $prestasi->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $prestasi->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal{{ $prestasi->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $prestasi->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $prestasi->id }}">Konfirmasi Hapus</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus prestasi "{{ $prestasi->judul }}"?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <form action="{{ route('admin.prestasi.destroy', $prestasi->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center">Tidak ada data prestasi</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
            }
        });
    });
</script>
@endsection
