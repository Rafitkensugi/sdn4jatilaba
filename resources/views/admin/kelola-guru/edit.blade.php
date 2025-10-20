<form action="{{ route('admin.kelola-guru.update') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Nama -->
    <div>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
    </div>

    <!-- NIP -->
    <div>
        <label for="nip">NIP:</label>
        <input type="text" name="nip" id="nip" required>
    </div>

    <!-- Jabatan -->
    <div>
        <label for="jabatan">Jabatan:</label>
        <input type="text" name="jabatan" id="jabatan" required>
    </div>

    <!-- Bidang Studi -->
    <div>
        <label for="bidang_studi">Bidang Studi:</label>
        <input type="text" name="bidang_studi" id="bidang_studi" required>
    </div>

    <!-- Foto -->
    <div>
        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto" accept="image/*">
    </div>

    <!-- Submit -->
    <div>
        <button type="submit">Simpan</button>
    </div>
</form>
