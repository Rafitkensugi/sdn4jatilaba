@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 dark:bg-gray-900 transition-colors duration-300">
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 dark:from-yellow-700 dark:to-yellow-800 shadow-lg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex items-center">
                <a href="{{ route('admin.fasilitas.index') }}" class="mr-4 p-2 hover:bg-white/10 rounded-lg transition-colors duration-200">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </a>
                <div>
                    <h1 class="text-2xl sm:text-3xl font-bold text-white mb-2 flex items-center">
                        <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Edit Fasilitas
                    </h1>
                    <p class="text-yellow-100 text-sm sm:text-base">Perbarui informasi fasilitas {{ $fasilita->nama }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Breadcrumb -->
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3 flex-wrap">
                <li class="inline-flex items-center">
                    <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{ route('admin.fasilitas.index') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white md:ml-2">Fasilitas</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 dark:text-gray-400 md:ml-2">Edit</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Form Card -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl overflow-hidden">
                <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 dark:from-gray-700 dark:to-gray-700 px-6 py-4 border-b border-yellow-200 dark:border-gray-600">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-white flex items-center">
                        <svg class="w-6 h-6 mr-2 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Formulir Edit Data Fasilitas
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Semua field bertanda <span class="text-red-500">*</span> wajib diisi</p>
                </div>

                <form action="{{ route('admin.fasilitas.update', $fasilita->id) }}" method="POST" enctype="multipart/form-data" class="p-6 sm:p-8">
                    @csrf
                    @method('PUT')
                    
                    <div class="space-y-6">
                        <!-- Nama Fasilitas -->
                        <div>
                            <label for="nama" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                    Nama Fasilitas <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <input type="text" 
                                   name="nama" 
                                   id="nama" 
                                   value="{{ old('nama', $fasilita->nama) }}"
                                   class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:text-white transition-all duration-200 @error('nama') border-red-500 ring-2 ring-red-200 @enderror" 
                                   placeholder="Contoh: Perpustakaan, Lab Komputer, Ruang Kelas" 
                                   required>
                            @error('nama')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Deskripsi -->
                        <div>
                            <label for="deskripsi" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                                    </svg>
                                    Deskripsi <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <textarea name="deskripsi" 
                                      id="deskripsi" 
                                      rows="5"
                                      class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:text-white transition-all duration-200 @error('deskripsi') border-red-500 ring-2 ring-red-200 @enderror" 
                                      placeholder="Deskripsikan fasilitas secara detail..." 
                                      required>{{ old('deskripsi', $fasilita->deskripsi) }}</textarea>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Minimal 20 karakter, jelaskan kondisi dan fungsi fasilitas</p>
                            @error('deskripsi')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Foto Saat Ini -->
                        @if($fasilita->foto)
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Foto Saat Ini
                                </span>
                            </label>
                            <div class="relative inline-block group">
                                <img src="{{ asset('storage/' . $fasilita->foto) }}" 
                                     alt="{{ $fasilita->nama }}" 
                                     class="h-48 w-auto object-cover rounded-lg border-4 border-gray-200 dark:border-gray-600 shadow-lg group-hover:shadow-xl transition-all duration-300 cursor-pointer"
                                     onclick="showCurrentImage()">
                                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 rounded-lg transition-all duration-300 flex items-center justify-center">
                                    <span class="text-white font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">Klik untuk melihat</span>
                                </div>
                            </div>
                            <p class="mt-2 text-xs text-gray-500 dark:text-gray-400">Upload foto baru jika ingin mengubah foto saat ini</p>
                        </div>
                        @endif

                        <!-- Upload Foto Baru -->
                        <div>
                            <label for="foto" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    Upload Foto Baru (Opsional)
                                </span>
                            </label>
                            <div class="mt-2">
                                <label for="foto" class="relative flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-xl cursor-pointer bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600 transition-all duration-300 overflow-hidden group">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="mb-3 w-10 h-10 text-gray-400 group-hover:text-yellow-500 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m5 8h4m0 0l-4-4m4 4l-4 4"></path>
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Klik atau drag file</span> untuk mengunggah</p>
                                        <p class="text-xs text-gray-400 dark:text-gray-300">PNG, JPG, atau JPEG (max 2MB)</p>
                                    </div>
                                    <input id="foto" name="foto" type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/*" />
                                </label>
                            </div>
                            @error('foto')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end">
                            <button type="submit" class="px-6 py-3 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg font-semibold transition-colors duration-200 shadow-md">
                                Simpan Perubahan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Script Preview Current Image -->
<script>
function showCurrentImage() {
    const src = "{{ asset('storage/' . $fasilita->foto) }}";
    const imgWindow = window.open("", "_blank");
    imgWindow.document.write(`<img src="${src}" style="width:100%;height:auto;">`);
}
</script>
@endsection
