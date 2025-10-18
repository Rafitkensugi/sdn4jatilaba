<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Guru | SDN 04 Jatilaba</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50 dark:bg-gray-900 min-h-screen">
    <x-admin-header></x-admin-header>

    <div class="flex">
        <x-admin-sidebar></x-admin-sidebar>

        <div class="flex-1 p-6 ml-64">
            <div class="max-w-4xl mx-auto">
                <!-- Header -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Tambah Data Guru</h1>
                    <p class="text-gray-600 dark:text-gray-400">Isi form berikut untuk menambahkan data guru baru</p>
                </div>

                <!-- Form -->
                <div class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
                    <form action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nama -->
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nama Lengkap *</label>
                                <input type="text" id="nama" name="nama" value="{{ old('nama') }}" 
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                       required>
                                @error('nama')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- NIP -->
                            <div>
                                <label for="nip" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">NIP *</label>
                                <input type="text" id="nip" name="nip" value="{{ old('nip') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                       required>
                                @error('nip')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Jabatan -->
                            <div>
                                <label for="jabatan" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Jabatan *</label>
                                <input type="text" id="jabatan" name="jabatan" value="{{ old('jabatan') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                       required>
                                @error('jabatan')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Bidang Studi -->
                            <div>
                                <label for="bidang_studi" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Bidang Studi *</label>
                                <input type="text" id="bidang_studi" name="bidang_studi" value="{{ old('bidang_studi') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                       required>
                                @error('bidang_studi')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div>
                                <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Status *</label>
                                <select id="status" name="status" 
                                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                        required>
                                    <option value="">Pilih Status</option>
                                    <option value="PNS" {{ old('status') == 'PNS' ? 'selected' : '' }}>PNS</option>
                                    <option value="Honorer" {{ old('status') == 'Honorer' ? 'selected' : '' }}>Honorer</option>
                                </select>
                                @error('status')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Aktif Sejak -->
                            <div>
                                <label for="aktif_sejak" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Aktif Sejak *</label>
                                <input type="date" id="aktif_sejak" name="aktif_sejak" value="{{ old('aktif_sejak') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                       required>
                                @error('aktif_sejak')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Domisili -->
                            <div class="md:col-span-2">
                                <label for="domisili" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Domisili *</label>
                                <input type="text" id="domisili" name="domisili" value="{{ old('domisili') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                       required>
                                @error('domisili')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Foto -->
                            <div class="md:col-span-2">
                                <label for="foto" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Foto</label>
                                <input type="file" id="foto" name="foto" 
                                       accept="image/jpeg,image/png,image/jpg,image/gif"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <p class="text-xs text-gray-500 mt-1">Format: JPEG, PNG, JPG, GIF (Maksimal 2MB)</p>
                                @error('foto')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Make Admin -->
                            <div class="md:col-span-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="make_admin" name="make_admin" value="1"
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="make_admin" class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                        Buat akun admin untuk guru ini
                                    </label>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">Jika dicentang, akan dibuat akun user dengan role admin</p>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="flex justify-end gap-4 mt-8 pt-6 border-t border-gray-200 dark:border-gray-700">
                            <a href="{{ route('admin.guru.index') }}" 
                               class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700">
                                Batal
                            </a>
                            <button type="submit" 
                                    class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                Simpan Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>