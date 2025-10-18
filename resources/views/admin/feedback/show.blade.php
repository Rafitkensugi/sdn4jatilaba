@extends('layouts.admin')

@section('title', 'Detail Feedback')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Feedback</h1>
        <div>
            <a href="{{ route('admin.feedback.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
            </a>
            
            @if($feedback->status == 'belum_dibaca')
                <form action="{{ route('admin.feedback.updateStatus', $feedback->id) }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="status" value="dibaca">
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fas fa-check"></i> Tandai Sudah Dibaca
                    </button>
                </form>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <!-- Detail Feedback Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi Feedback</h6>
                    <div>
                        @if($feedback->status == 'dibaca')
                            <span class="badge badge-success">Dibaca</span>
                        @else
                            <span class="badge badge-warning">Belum Dibaca</span>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Nama Pengirim:</strong>
                            <p class="mt-1">{{ $feedback->nama }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>Email:</strong>
                            <p class="mt-1">
                                <a href="mailto:{{ $feedback->email }}">{{ $feedback->email }}</a>
                            </p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Subjek:</strong>
                            <p class="mt-1">{{ $feedback->subjek }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>Tanggal:</strong>
                            <p class="mt-1">
                                {{ $feedback->tanggal->format('d F Y') }}
                                <br>
                                <small class="text-muted">{{ $feedback->tanggal->format('H:i:s') }}</small>
                            </p>
                        </div>
                    </div>

                    <div class="mb-3">
                        <strong>Pesan:</strong>
                        <div class="mt-2 p-3 bg-light rounded">
                            {!! nl2br(e($feedback->pesan)) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <!-- Action Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Aksi</h6>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="mailto:{{ $feedback->email }}?subject=Re: {{ $feedback->subjek }}" 
                           class="btn btn-primary btn-block">
                            <i class="fas fa-reply"></i> Balas Email
                        </a>
                        
                        @if($feedback->status == 'belum_dibaca')
                            <form action="{{ route('admin.feedback.updateStatus', $feedback->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="status" value="dibaca">
                                <button type="submit" class="btn btn-success btn-block">
                                    <i class="fas fa-check"></i> Tandai Sudah Dibaca
                                </button>
                            </form>
                        @else
                            <form action="{{ route('admin.feedback.updateStatus', $feedback->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="status" value="belum_dibaca">
                                <button type="submit" class="btn btn-warning btn-block">
                                    <i class="fas fa-envelope"></i> Tandai Belum Dibaca
                                </button>
                            </form>
                        @endif

                        <button type="button" class="btn btn-danger btn-block" 
                                data-toggle="modal" data-target="#deleteModal">
                            <i class="fas fa-trash"></i> Hapus Feedback
                        </button>
                    </div>
                </div>
            </div>

            <!-- Info Card -->
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi</h6>
                </div>
                <div class="card-body">
                    <small class="text-muted">
                        <i class="fas fa-info-circle"></i> 
                        Feedback ini diterima pada {{ $feedback->tanggal->diffForHumans() }}
                    </small>
                    <hr>
                    <small class="text-muted">
                        <i class="fas fa-clock"></i> 
                        Waktu: {{ $feedback->tanggal->format('H:i:s') }}
                    </small>
                    <hr>
                    <small class="text-muted">
                        <i class="fas fa-calendar"></i> 
                        Tanggal: {{ $feedback->tanggal->format('d/m/Y') }}
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
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
@endsection