@extends('layouts.admin')

@section('title', 'Tambah Fasilitas Baru')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Fasilitas Baru</h1>
        <a href="{{ route('admin.fasilitas.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Fasilitas</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.fasilitas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <label for="nama">Nama Fasilitas *</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                           id="nama" name="nama" value="{{ old('nama') }}" 
                           placeholder="Masukkan nama fasilitas" required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi Fasilitas *</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                              id="deskripsi" name="deskripsi" rows="5" 
                              placeholder="Masukkan deskripsi lengkap fasilitas" required>{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">
                        Jelaskan detail fasilitas, manfaat, dan spesifikasinya.
                    </small>
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar Fasilitas</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('gambar') is-invalid @enderror" 
                               id="gambar" name="gambar" accept="image/*">
                        <label class="custom-file-label" for="gambar">Pilih file gambar...</label>
                        @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <small class="form-text text-muted">
                        Format: JPG, JPEG, PNG (Maksimal 2MB). Rekomendasi rasio 4:3 untuk tampilan terbaik.
                    </small>
                    
                    <div class="mt-2">
                        <img id="preview" src="#" alt="Preview" class="img-thumbnail mt-2" style="display: none; max-width: 300px;">
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan Fasilitas
                    </button>
                    <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Batal
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
</script>
@endsection