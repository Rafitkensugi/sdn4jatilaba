<form action="{{ route('admin.kelola-guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <!-- Nama -->
    <div>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama', $guru->nama) }}" required>
    </div>

    <!-- NIP -->
    <div>
        <label for="nip">NIP:</label>
        <input type="text" name="nip" id="nip" value="{{ old('nip', $guru->nip) }}" required>
    </div>

    <!-- Email -->
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email', $guru->user->email) }}" required>
    </div>

    <!-- Password -->
    <div>
        <label for="password">Password (Biarkan kosong jika tidak ingin mengubah):</label>
        <input type="password" name="password" id="password">
    </div>

    <!-- Password Confirmation -->
    <div>
        <label for="password_confirmation">Konfirmasi Password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
    </div>

    <!-- Jabatan -->
    <div>
        <label for="jabatan">Jabatan:</label>
        <input type="text" name="jabatan" id="jabatan" value="{{ old('jabatan', $guru->jabatan) }}" required>
    </div>

    <!-- Bidang Studi -->
    <div>
        <label for="bidang_studi">Bidang Studi:</label>
        <input type="text" name="bidang_studi" id="bidang_studi" value="{{ old('bidang_studi', $guru->bidang_studi) }}" required>
    </div>

    <!-- Foto -->
    <div>
        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto" accept="image/*">
        @if($guru->foto)
            <div>
                <small>Foto saat ini:</small>
                <img src="{{ asset('storage/gurus/' . $guru->foto) }}" alt="{{ $guru->nama }}" width="100">
            </div>
        @endif
    </div>

    <!-- Submit -->
    <div>
        <button type="submit">Update</button>
    </div>
</form>