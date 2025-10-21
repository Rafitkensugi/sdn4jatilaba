@extends('layouts.admin')

@section('title', 'Tambah Guru')

@section('content')
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">
                <i class="fas fa-plus"></i> Tambah Data Guru
            </h5>
        </div>
        <div class="card-body">
            <!-- Alert Error -->
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle"></i> 
                    <strong>Terjadi kesalahan:</strong>
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form action="{{ route('admin.kelola-guru.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <!-- Nama -->
                    <div class="col-md-6 mb-3">
                        <label for="nama" class="form-label">Nama Guru <span class="text-danger">*</span></label>
                        <input type="text" name="nama" id="nama" 
                               class="form-control @error('name') is-invalid @enderror" 
                               value="{{ old('nama') }}" 
                               required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- NIP -->
                    <div class="col-md-6 mb-3">
                        <label for="nip" class="form-label">NIP <span class="text-danger">*</span></label>
                        <input type="text" name="nip" id="nip" 
                               class="form-control @error('nip') is-invalid @enderror" 
                               value="{{ old('nip') }}" 
                               required>
                        @error('nip')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Email -->
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
    </div>

    <!-- Password -->
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
    </div>

    <!-- Password Confirmation -->
    <div>
        <label for="password_confirmation">Konfirmasi Password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
    </div>
                
                <div class="row">
                    <!-- Jabatan -->
                    <div class="col-md-6 mb-3">
                        <label for="jabatan" class="form-label">Jabatan <span class="text-danger">*</span></label>
                        <input type="text" name="jabatan" id="jabatan" 
                               class="form-control @error('jabatan') is-invalid @enderror" 
                               value="{{ old('jabatan') }}" 
                               required>
                        @error('jabatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Bidang Studi -->
                    <div class="col-md-6 mb-3">
                        <label for="bidang_studi" class="form-label">Bidang Studi <span class="text-danger">*</span></label>
                        <input type="text" name="bidang_studi" id="bidang_studi" 
                               class="form-control @error('bidang_studi') is-invalid @enderror" 
                               value="{{ old('bidang_studi') }}" 
                               required>
                        @error('bidang_studi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Foto -->
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto <span class="text-danger">*</span></label>
                    <input type="file" name="foto" id="foto" 
                           class="form-control @error('foto') is-invalid @enderror" 
                           accept="image/*"
                           required>
                    <div class="form-text">Format: JPEG, PNG, JPG, GIF. Maksimal: 2MB</div>
                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Preview Foto -->
                <div class="mb-3">
                    <img id="fotoPreview" src="#" alt="Preview Foto" 
                         class="img-thumbnail d-none" 
                         style="max-width: 200px; max-height: 200px;">
                </div>

                <!-- Submit & Cancel -->
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                    <a href="{{ route('admin.kelola-guru.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Script untuk preview foto -->
<script>
    document.getElementById('foto').addEventListener('change', function(e) {
        const preview = document.getElementById('fotoPreview');
        const file = e.target.files[0];
        
        if (file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('d-none');
            }
            
            reader.readAsDataURL(file);
        } else {
            preview.classList.add('d-none');
        }
    });
</script>
@endsection