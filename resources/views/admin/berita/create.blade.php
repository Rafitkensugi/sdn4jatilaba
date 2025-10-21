        <h1>Tambah Berita Baru</h1>

        {{-- Display validation errors if any --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form to store the new 'Berita' (News) item --}}
        {{-- The 'files' attribute is essential for file uploads (gambar) --}}
        <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Judul (Title) --}}
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Berita</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}" required>
            </div>

            {{-- Kategori (Category) --}}
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="{{ old('kategori') }}" required>
            </div>

            {{-- Konten (Content) --}}
            <div class="mb-3">
                <label for="konten" class="form-label">Konten Berita</label>
                {{-- A textarea is used for content, often replaced by a rich text editor in a real application --}}
                <textarea class="form-control" id="konten" name="konten" rows="10" required>{{ old('konten') }}</textarea>
            </div>

            {{-- Gambar (Image) --}}
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Utama (Max 2MB)</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/jpeg,image/png,image/jpg,image/gif">
            </div>

            {{-- Penulis (Author) --}}
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" value="{{ old('penulis', auth()->user()->name ?? '') }}" required>
                {{-- Prefill with the logged-in user's name if available --}}
            </div>

            {{-- Status (draft/published) --}}
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div>

            {{-- Submit Button --}}
            <button type="submit" class="btn btn-primary">Simpan Berita</button>
            <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Batal</a>
        </form>