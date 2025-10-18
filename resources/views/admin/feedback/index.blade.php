@extends('layouts.app')

@section('title', 'Manajemen Feedback')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manajemen Feedback</h1>
        <div class="d-flex">
            <span class="badge badge-primary mr-2">
                Total: {{ $feedbacks->count() }}
            </span>
            <span class="badge badge-success mr-2">
                Dibaca: {{ $feedbacks->where('status', 'dibaca')->count() }}
            </span>
            <span class="badge badge-warning">
                Belum Dibaca: {{ $feedbacks->where('status', 'belum_dibaca')->count() }}
            </span>
        </div>
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
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Feedback</h6>
            <div class="btn-group">
                <a href="?status=belum_dibaca" class="btn btn-warning btn-sm">
                    <i class="fas fa-envelope"></i> Belum Dibaca
                </a>
                <a href="?status=dibaca" class="btn btn-success btn-sm">
                    <i class="fas fa-envelope-open"></i> Sudah Dibaca
                </a>
                <a href="{{ route('admin.feedback.index') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-list"></i> Semua
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pengirim</th>
                            <th>Email</th>
                            <th>Subjek</th>
                            <th>Pesan</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($feedbacks as $feedback)
                        <tr class="{{ $feedback->status == 'belum_dibaca' ? 'table-warning' : '' }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <strong>{{ $feedback->nama }}</strong>
                            </td>
                            <td>
                                <a href="mailto:{{ $feedback->email }}">{{ $feedback->email }}</a>
                            </td>
                            <td>
                                <strong>{{ Str::limit($feedback->subjek, 30) }}</strong>
                            </td>
                            <td>
                                {{ Str::limit($feedback->pesan, 50) }}
                                @if(strlen($feedback->pesan) > 50)
                                    <span class="text-primary">...selengkapnya</span>
                                @endif
                            </td>
                            <td>
                                <small>{{ $feedback->tanggal->format('d M Y') }}</small>
                                <br>
                                <small class="text-muted">{{ $feedback->tanggal->format('H:i') }}</small>
                            </td>
                            <td>
                                @if($feedback->status == 'dibaca')
                                    <span class="badge badge-success">Dibaca</span>
                                @else
                                    <span class="badge badge-warning">Belum Dibaca</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.feedback.show', $feedback->id) }}" 
                                       class="btn btn-info btn-sm" title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    
                                    @if($feedback->status == 'belum_dibaca')
                                        <form action="{{ route('admin.feedback.updateStatus', $feedback->id) }}" 
                                              method="POST" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="status" value="dibaca">
                                            <button type="submit" class="btn btn-success btn-sm" title="Tandai Sudah Dibaca">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route('admin.feedback.updateStatus', $feedback->id) }}" 
                                              method="POST" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="status" value="belum_dibaca">
                                            <button type="submit" class="btn btn-warning btn-sm" title="Tandai Belum Dibaca">
                                                <i class="fas fa-envelope"></i>
                                            </button>
                                        </form>
                                    @endif

                                    <button type="button" class="btn btn-danger btn-sm" 
                                            data-toggle="modal" data-target="#deleteModal{{ $feedback->id }}" 
                                            title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal{{ $feedback->id }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Konfirmasi Hapus</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah Anda yakin ingin menghapus feedback dari <strong>"{{ $feedback->nama }}"</strong>?</p>
                                                <p class="text-danger">Data yang dihapus tidak dapat dikembalikan!</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <form action="{{ route('admin.feedback.destroy', $feedback->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center py-4">
                                <div class="text-muted">
                                    <i class="fas fa-inbox fa-3x mb-3"></i>
                                    <p>Tidak ada data feedback</p>
                                </div>
                            </td>
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
            },
            "order": [[5, "desc"]],
            "columnDefs": [
                { "orderable": false, "targets": [7] }
            ]
        });
    });

    // Auto refresh setiap 30 detik untuk feedback baru
    setInterval(function() {
        $.get(window.location.href, function(data) {
            var newContent = $(data).find('.table-responsive').html();
            $('.table-responsive').html(newContent);
        });
    }, 30000);
</script>
@endsection