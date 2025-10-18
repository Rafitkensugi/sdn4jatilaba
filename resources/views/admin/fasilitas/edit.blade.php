@extends('layouts.admin')

@section('title', 'Edit Fasilitas')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Fasilitas</h1>
        <a href="{{ route('admin.fasilitas.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Fasilitas</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.fasilitas.update', $fasilitas->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="nama">Nama Fasilitas *</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                           id="nama" name="nama" value="{{ old('nama', $fasilitas->nama) }}" 
                           placeholder="Masukkan nama fasilitas" required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi Fasilitas *</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                              id="deskripsi" name="deskripsi" rows="5" 
                              placeholder="Masukkan deskripsi lengkap fasilitas" required>{{ old('deskripsi', $fasilitas->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar Fasilitas</label>
                    
                    @if($fasilitas->gambar)
                        <div class="mb-3">
                            <p><strong>Gambar Saat Ini:</strong></p>
                            <img src="{{ asset('storage/' . $fasilitas->gambar) }}" 
                                 alt="{{ $fasilitas->nama }}" 
                                 class="img-thumbnail" style="max-width: 300px;">
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="hapus_gambar" name="hapus_gambar">
                                <label class="form-check-label text-danger" for="hapus_gambar">
                                    Hapus gambar saat ini
                                </label>
                            </div>
                        </div>
                    @endif

                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('gambar') is-invalid @enderror" 
                               id="gambar" name="gambar" accept="image/*">
                        <label class="custom-file-label" for="gambar">
                            {{ $fasilitas->gambar ? 'Ganti file gambar...' : 'Pilih file gambar...' }}
                        </label>
                        @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <small class="form-text text-muted">
                        Biarkan kosong jika tidak ingin mengubah gambar. Format: JPG, JPEG, PNG (Maksimal 2MB).
                    </small>
                    
                    <div class="mt-2">
                        <img id="preview" src="#" alt="Preview" class="img-thumbnail mt-2" style="display: none; max-width: 300px;">
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Fasilitas
                    </button>
                    <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Batal
                    </a>
                    
                    <a href="{{ route('fasilitas.show', $fasilitas->id) }}" 
                       class="btn btn-info" target="_blank">
                        <i class="fas fa-eye"></i> Lihat di Website
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Preview image sebelum upload
    document.getElementById('gambar').addEventListener('change', function(e) {
        const preview = document.getElementById('preview');
        const file = e.target.files[0];
        
        if (file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            
            reader.readAsDataURL(file);
        } else {
            preview.style.display = 'none';
        }
        
        // Update label file input
        const fileName = e.target.files[0] ? e.target.files[0].name : 'Pilih file gambar...';
        e.target.nextElementSibling.innerText = fileName;
    });

    // Textarea auto resize
    document.getElementById('deskripsi').addEventListener('input', function() {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    });

    // Handle hapus gambar checkbox
    document.getElementById('hapus_gambar').addEventListener('change', function() {
        const fileInput = document.getElementById('gambar');
        if (this.checked) {
            fileInput.disabled = true;
            fileInput.nextElementSibling.innerText = 'Gambar akan dihapus';
        } else {
            fileInput.disabled = false;
            fileInput.nextElementSibling.innerText = 'Ganti file gambar...';
        }
    });
</script>
@endsection