<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Fasilitas - SDN 4 Jatilaba</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes fade-in-down {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fade-in {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .animate-fade-in-down {
            animation: fade-in-down 0.5s ease-out;
        }

        .animate-fade-in {
            animation: fade-in 0.3s ease-out;
        }

        .file-upload:hover .file-upload-icon {
            transform: translateY(-2px);
            transition: transform 0.2s ease;
        }

        .drag-over {
            background-color: #eff6ff;
            border-color: #3b82f6;
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 transition-colors duration-300">
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-700 dark:from-blue-800 dark:to-blue-900 shadow-lg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex items-center">
                <a href="{{ route('admin.fasilitas.index') }}" class="mr-4 p-2 hover:bg-white/10 rounded-lg transition-colors duration-200">
                    <i class="fas fa-arrow-left text-white text-xl"></i>
                </a>
                <div>
                    <h1 class="text-2xl sm:text-3xl font-bold text-white mb-2 flex items-center">
                        <i class="fas fa-plus-circle mr-3 text-white"></i>
                        Tambah Fasilitas Baru
                    </h1>
                    <p class="text-blue-100 text-sm sm:text-base">Lengkapi formulir di bawah ini untuk menambahkan fasilitas</p>
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
                        <i class="fas fa-home mr-2"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <a href="{{ route('admin.fasilitas.index') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">Fasilitas</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <span class="ml-1 text-sm font-medium text-gray-500 dark:text-gray-400">Tambah</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Form Card -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl overflow-hidden">
                <div class="bg-gradient-to-r from-blue-50 to-blue-100 dark:from-gray-700 dark:to-gray-700 px-6 py-4 border-b border-blue-200 dark:border-gray-600">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-white flex items-center">
                        <i class="fas fa-file-alt mr-2 text-blue-600 dark:text-blue-400"></i>
                        Formulir Data Fasilitas
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Semua field bertanda <span class="text-red-500">*</span> wajib diisi</p>
                </div>

                <form action="{{ route('admin.fasilitas.store') }}" method="POST" enctype="multipart/form-data" class="p-6 sm:p-8">
                    @csrf
                    
                    <div class="space-y-6">
                        <!-- Nama Fasilitas -->
                        <div>
                            <label for="nama" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <i class="fas fa-tag mr-2 text-blue-600 dark:text-blue-400"></i>
                                    Nama Fasilitas <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <input type="text" 
                                   name="nama" 
                                   id="nama" 
                                   value="{{ old('nama') }}"
                                   class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-all duration-200 @error('nama') border-red-500 ring-2 ring-red-200 @enderror" 
                                   placeholder="Contoh: Perpustakaan, Lab Komputer, Ruang Kelas" 
                                   required>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400 flex items-center">
                                <i class="fas fa-info-circle mr-1"></i>
                                Gunakan nama yang jelas dan mudah dipahami
                            </p>
                            @error('nama')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Deskripsi -->
                        <div>
                            <label for="deskripsi" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <i class="fas fa-align-left mr-2 text-blue-600 dark:text-blue-400"></i>
                                    Deskripsi <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <textarea name="deskripsi" 
                                      id="deskripsi" 
                                      rows="5"
                                      class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-all duration-200 @error('deskripsi') border-red-500 ring-2 ring-red-200 @enderror" 
                                      placeholder="Deskripsikan fasilitas secara detail (kondisi, fungsi, kapasitas, dll.)..." 
                                      required>{{ old('deskripsi') }}</textarea>
                            <div class="mt-1 flex justify-between items-center">
                                <p class="text-xs text-gray-500 dark:text-gray-400 flex items-center">
                                    <i class="fas fa-info-circle mr-1"></i>
                                    Minimal 20 karakter, jelaskan kondisi dan fungsi fasilitas
                                </p>
                                <span id="charCount" class="text-xs text-gray-400">0 karakter</span>
                            </div>
                            @error('deskripsi')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Upload Foto -->
                        <div>
                            <label for="foto" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <i class="fas fa-camera mr-2 text-blue-600 dark:text-blue-400"></i>
                                    Foto Fasilitas <span class="text-red-500">*</span>
                                </span>
                            </label>
                            
                            <div class="mt-2">
                                <label for="foto" class="file-upload relative flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-xl cursor-pointer bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600 transition-all duration-300 overflow-hidden group @error('foto') border-red-500 @enderror">
                                    <div id="uploadPlaceholder" class="flex flex-col items-center justify-center pt-5 pb-6 px-4 text-center">
                                        <i class="file-upload-icon mb-3 text-4xl text-gray-400 group-hover:text-blue-500 transition-colors duration-200 fas fa-cloud-upload-alt"></i>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                            <span class="font-semibold">Klik untuk upload</span><br>
                                            atau drag & drop file di sini
                                        </p>
                                        <p class="text-xs text-gray-400 dark:text-gray-300">
                                            <i class="fas fa-file-image mr-1"></i>
                                            PNG, JPG, JPEG (maksimal 2MB)
                                        </p>
                                        <p class="text-xs text-blue-600 dark:text-blue-400 mt-2 font-medium">
                                            <i class="fas fa-ruler-combined mr-1"></i>
                                            Rekomendasi: 800x600 px
                                        </p>
                                    </div>
                                    <div id="imagePreviewContainer" class="hidden absolute inset-0">
                                        <img id="imagePreview" class="w-full h-full object-cover" alt="Preview">
                                        <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                            <p class="text-white font-semibold text-center">
                                                <i class="fas fa-sync-alt mr-2"></i>Klik untuk ganti foto
                                            </p>
                                        </div>
                                    </div>
                                    <input id="foto" name="foto" type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/*" required onchange="previewImage(event)" />
                                </label>
                            </div>
                            
                            <!-- File Requirements -->
                            <div class="mt-3 grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs text-gray-500 dark:text-gray-400">
                                <div class="flex items-center">
                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Format: PNG, JPG, JPEG
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Ukuran maksimal: 2MB
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Rasio disarankan: 4:3
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Resolusi minimal: 800x600
                                </div>
                            </div>
                            
                            @error('foto')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row justify-between gap-4 pt-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex gap-3">
                                <a href="{{ route('admin.fasilitas.index') }}" 
                                   class="flex items-center justify-center px-6 py-3 border-2 border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg font-semibold hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                                    <i class="fas fa-arrow-left mr-2"></i>
                                    Kembali
                                </a>
                                <button type="button" 
                                        onclick="resetForm()"
                                        class="flex items-center justify-center px-6 py-3 border-2 border-blue-300 dark:border-blue-600 text-blue-700 dark:text-blue-300 rounded-lg font-semibold hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors duration-200">
                                    <i class="fas fa-undo mr-2"></i>
                                    Reset Form
                                </button>
                            </div>
                            <button type="submit" 
                                    class="flex items-center justify-center px-8 py-3 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white rounded-lg font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200">
                                <i class="fas fa-save mr-2"></i>
                                Simpan Fasilitas
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Info Card -->
            <div class="mt-6 bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-xl p-4">
                <div class="flex">
                    <i class="fas fa-lightbulb text-blue-600 dark:text-blue-400 text-xl mr-3 flex-shrink-0 mt-1"></i>
                    <div class="text-sm text-blue-800 dark:text-blue-300">
                        <p class="font-semibold mb-2 flex items-center">
                            <i class="fas fa-tips mr-2"></i>
                            Tips Mengisi Form:
                        </p>
                        <ul class="list-none space-y-2 text-xs">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                <span>Gunakan nama fasilitas yang jelas dan mudah dipahami</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                <span>Deskripsi minimal 20 karakter untuk penjelasan yang detail</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                <span>Upload foto dengan kualitas baik dan pencahayaan yang cukup</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                <span>Pastikan ukuran foto tidak melebihi 2MB</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Alert (jika ada) -->
    @if (session('success'))
    <div id="successAlert" class="fixed top-4 right-4 bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg animate-fade-in-down z-50">
        <div class="flex items-center">
            <i class="fas fa-check-circle mr-3 text-xl"></i>
            <div>
                <p class="font-semibold">Berhasil!</p>
                <p class="text-sm">{{ session('success') }}</p>
            </div>
            <button onclick="closeAlert()" class="ml-4 text-white hover:text-gray-200">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    @endif

    <script>
    // Fungsi preview gambar
    function previewImage(event) {
        const file = event.target.files[0];
        const placeholder = document.getElementById('uploadPlaceholder');
        const previewContainer = document.getElementById('imagePreviewContainer');
        const preview = document.getElementById('imagePreview');
        
        if (file) {
            // Validasi ukuran file
            if (file.size > 2097152) { // 2MB dalam bytes
                alert('Ukuran file terlalu besar! Maksimal 2MB');
                event.target.value = '';
                return;
            }
            
            // Validasi tipe file
            if (!file.type.match('image.*')) {
                alert('File harus berupa gambar!');
                event.target.value = '';
                return;
            }
            
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                placeholder.classList.add('hidden');
                previewContainer.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    }

    // Fungsi reset form
    function resetForm() {
        if (confirm('Apakah Anda yakin ingin mengatur ulang form? Semua data yang telah diisi akan hilang.')) {
            document.querySelector('form').reset();
            // Reset preview gambar
            document.getElementById('uploadPlaceholder').classList.remove('hidden');
            document.getElementById('imagePreviewContainer').classList.add('hidden');
            // Reset character counter
            document.getElementById('charCount').textContent = '0 karakter';
        }
    }

    // Fungsi tutup alert
    function closeAlert() {
        const alert = document.getElementById('successAlert');
        if (alert) {
            alert.style.transition = 'opacity 0.3s ease';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 300);
        }
    }

    // Auto close success alert setelah 5 detik
    setTimeout(() => {
        closeAlert();
    }, 5000);

    // Character counter untuk deskripsi
    document.getElementById('deskripsi').addEventListener('input', function(e) {
        const charCount = e.target.value.length;
        const counter = document.getElementById('charCount');
        counter.textContent = charCount + ' karakter';
        
        if (charCount < 20) {
            counter.classList.add('text-red-500');
            counter.classList.remove('text-green-500');
        } else {
            counter.classList.remove('text-red-500');
            counter.classList.add('text-green-500');
        }
    });

    // Drag and drop functionality
    const fileUpload = document.querySelector('.file-upload');
    const fileInput = document.getElementById('foto');

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        fileUpload.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    ['dragenter', 'dragover'].forEach(eventName => {
        fileUpload.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        fileUpload.addEventListener(eventName, unhighlight, false);
    });

    function highlight() {
        fileUpload.classList.add('drag-over');
    }

    function unhighlight() {
        fileUpload.classList.remove('drag-over');
    }

    fileUpload.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        fileInput.files = files;
        previewImage({ target: fileInput });
    }

    // Form validation sebelum submit
    document.querySelector('form').addEventListener('submit', function(e) {
        const nama = document.getElementById('nama').value.trim();
        const deskripsi = document.getElementById('deskripsi').value.trim();
        const foto = document.getElementById('foto').files[0];
        
        let isValid = true;
        let errorMessage = '';

        if (nama.length < 3) {
            isValid = false;
            errorMessage = 'Nama fasilitas minimal 3 karakter!';
            document.getElementById('nama').focus();
        } else if (deskripsi.length < 20) {
            isValid = false;
            errorMessage = 'Deskripsi minimal 20 karakter!';
            document.getElementById('deskripsi').focus();
        } else if (!foto) {
            isValid = false;
            errorMessage = 'Foto fasilitas wajib diupload!';
        }

        if (!isValid) {
            e.preventDefault();
            alert(errorMessage);
            return false;
        }
    });

    // Initialize character counter on page load
    document.addEventListener('DOMContentLoaded', function() {
        const deskripsi = document.getElementById('deskripsi');
        const charCount = document.getElementById('charCount');
        charCount.textContent = deskripsi.value.length + ' karakter';
        
        if (deskripsi.value.length < 20) {
            charCount.classList.add('text-red-500');
        } else {
            charCount.classList.add('text-green-500');
        }
    });
    </script>
</body>
</html>