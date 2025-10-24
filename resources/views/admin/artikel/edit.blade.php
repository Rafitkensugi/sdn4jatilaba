<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artikel - SDN 4 Jatilaba</title>
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
            background-color: #fef3c7;
            border-color: #d97706;
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 min-h-screen transition-colors duration-300">
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-amber-500 to-orange-600 dark:from-amber-700 dark:to-orange-800 shadow-lg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex items-center">
                <a href="{{ route('admin.artikel.index') }}" class="mr-4 p-2 hover:bg-white/10 rounded-lg transition-colors duration-200">
                    <i class="fas fa-arrow-left text-white text-xl"></i>
                </a>
                <div>
                    <h1 class="text-2xl sm:text-3xl font-bold text-white mb-2 flex items-center">
                        <i class="fas fa-edit mr-3 text-white"></i>
                        Edit Artikel
                    </h1>
                    <p class="text-orange-100 text-sm sm:text-base">Perbarui informasi artikel SDN 4 Jatilaba</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Breadcrumb -->
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3 flex-wrap">
                <li class="inline-flex items-center">
                    <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-amber-600 dark:text-gray-400 dark:hover:text-white">
                        <i class="fas fa-home mr-2"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <a href="{{ route('admin.artikel.index') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-amber-600 dark:text-gray-400 dark:hover:text-white">Artikel</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <span class="ml-1 text-sm font-medium text-gray-500 dark:text-gray-400">Edit</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Form Card -->
        <div class="max-w-6xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl overflow-hidden">
                <div class="bg-gradient-to-r from-amber-50 to-orange-100 dark:from-gray-700 dark:to-gray-700 px-6 py-4 border-b border-amber-200 dark:border-gray-600">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-white flex items-center">
                        <i class="fas fa-newspaper mr-2 text-amber-600 dark:text-amber-400"></i>
                        Formulir Edit Artikel
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Semua field bertanda <span class="text-red-500">*</span> wajib diisi</p>
                </div>

                <form action="{{ route('admin.artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data" class="p-6 sm:p-8">
                    @csrf
                    @method('PUT')
                    
                    <div class="space-y-6">
                        <!-- Judul Artikel -->
                        <div>
                            <label for="judul" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <i class="fas fa-heading mr-2 text-amber-600 dark:text-amber-400"></i>
                                    Judul Artikel <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <input type="text" 
                                   name="judul" 
                                   id="judul" 
                                   value="{{ old('judul', $artikel->judul) }}"
                                   class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 dark:bg-gray-700 dark:text-white transition-all duration-200 @error('judul') border-red-500 ring-2 ring-red-200 @enderror" 
                                   placeholder="Contoh: Kegiatan Belajar Mengajar Semester Genap" 
                                   required>
                            @error('judul')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Isi Artikel -->
                        <div>
                            <label for="isi" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <i class="fas fa-align-left mr-2 text-amber-600 dark:text-amber-400"></i>
                                    Isi Artikel <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <textarea name="isi" 
                                      id="isi" 
                                      rows="12"
                                      class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 dark:bg-gray-700 dark:text-white transition-all duration-200 @error('isi') border-red-500 ring-2 ring-red-200 @enderror" 
                                      placeholder="Tulis isi artikel lengkap di sini..." 
                                      required>{{ old('isi', $artikel->isi) }}</textarea>
                            <div class="mt-1 flex justify-between items-center">
                                <p class="text-xs text-gray-500 dark:text-gray-400 flex items-center">
                                    <i class="fas fa-info-circle mr-1"></i>
                                    Gunakan format yang jelas dan mudah dibaca
                                </p>
                                <span id="charCount" class="text-xs text-gray-400">{{ strlen(old('isi', $artikel->isi)) }} karakter</span>
                            </div>
                            @error('isi')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Gambar Saat Ini -->
                        @if ($artikel->gambar)
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <i class="fas fa-image mr-2 text-amber-600 dark:text-amber-400"></i>
                                    Gambar Saat Ini
                                </span>
                            </label>
                            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 p-4 bg-amber-50 dark:bg-amber-900/20 rounded-lg border border-amber-200 dark:border-amber-800">
                                <img src="{{ asset('storage/' . $artikel->gambar) }}" 
                                     alt="{{ $artikel->judul }}" 
                                     class="w-40 h-28 object-cover rounded-lg shadow-md">
                                <div class="flex-1">
                                    <p class="text-sm text-amber-800 dark:text-amber-300 font-medium mb-2">
                                        <i class="fas fa-info-circle mr-2"></i>
                                        Gambar artikel saat ini
                                    </p>
                                    <p class="text-xs text-amber-600 dark:text-amber-400">
                                        Ukuran gambar akan disesuaikan secara otomatis
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Upload Gambar Baru -->
                        <div>
                            <label for="gambar" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <i class="fas fa-camera mr-2 text-amber-600 dark:text-amber-400"></i>
                                    Ganti Gambar (Opsional)
                                </span>
                            </label>
                            <div class="mt-2">
                                <label for="gambar" class="file-upload relative flex flex-col items-center justify-center w-full h-48 border-2 border-gray-300 border-dashed rounded-xl cursor-pointer bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600 transition-all duration-300 overflow-hidden group @error('gambar') border-red-500 @enderror">
                                    <div id="uploadPlaceholder" class="flex flex-col items-center justify-center pt-5 pb-6 px-4 text-center">
                                        <i class="file-upload-icon mb-3 text-3xl text-gray-400 group-hover:text-amber-500 transition-colors duration-200 fas fa-cloud-upload-alt"></i>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                            <span class="font-semibold">Klik untuk upload gambar baru</span><br>
                                            atau drag & drop file di sini
                                        </p>
                                        <p class="text-xs text-gray-400 dark:text-gray-300">
                                            <i class="fas fa-file-image mr-1"></i>
                                            PNG, JPG, JPEG (maksimal 2MB)
                                        </p>
                                    </div>
                                    <div id="imagePreviewContainer" class="hidden absolute inset-0">
                                        <img id="imagePreview" class="w-full h-full object-cover" alt="Preview">
                                        <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                            <p class="text-white font-semibold text-center">
                                                <i class="fas fa-sync-alt mr-2"></i>Klik untuk ganti gambar
                                            </p>
                                        </div>
                                    </div>
                                    <input id="gambar" name="gambar" type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/*" onchange="previewImage(event)" />
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
                            </div>
                            
                            @error('gambar')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row justify-between gap-4 pt-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex gap-3">
                                <a href="{{ route('admin.artikel.index') }}" 
                                   class="flex items-center justify-center px-6 py-3 border-2 border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg font-semibold hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                                    <i class="fas fa-arrow-left mr-2"></i>
                                    Kembali
                                </a>
                                <button type="button" 
                                        onclick="resetForm()"
                                        class="flex items-center justify-center px-6 py-3 border-2 border-amber-300 dark:border-amber-600 text-amber-700 dark:text-amber-300 rounded-lg font-semibold hover:bg-amber-50 dark:hover:bg-amber-900/20 transition-colors duration-200">
                                    <i class="fas fa-undo mr-2"></i>
                                    Reset Perubahan
                                </button>
                            </div>
                            <button type="submit" 
                                    class="flex items-center justify-center px-8 py-3 bg-gradient-to-r from-amber-500 to-orange-600 hover:from-amber-600 hover:to-orange-700 text-white rounded-lg font-semibold shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                                <i class="fas fa-save mr-2"></i>
                                Update Artikel
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Info Card -->
            <div class="mt-6 bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-800 rounded-xl p-4">
                <div class="flex">
                    <i class="fas fa-lightbulb text-amber-600 dark:text-amber-400 text-xl mr-3 flex-shrink-0 mt-1"></i>
                    <div class="text-sm text-amber-800 dark:text-amber-300">
                        <p class="font-semibold mb-2 flex items-center">
                            <i class="fas fa-tips mr-2"></i>
                            Tips Edit Artikel:
                        </p>
                        <ul class="list-none space-y-2 text-xs">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                <span>Periksa kembali judul dan isi artikel sebelum menyimpan</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                <span>Ganti gambar jika diperlukan untuk memperbarui tampilan</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                <span>Pastikan format tulisan tetap konsisten dan mudah dibaca</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-0.5 flex-shrink-0"></i>
                                <span>Simpan perubahan hanya jika semua sudah sesuai</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        if (confirm('Apakah Anda yakin ingin mengatur ulang form? Semua perubahan yang belum disimpan akan hilang.')) {
            document.querySelector('form').reset();
            // Reset preview gambar
            document.getElementById('uploadPlaceholder').classList.remove('hidden');
            document.getElementById('imagePreviewContainer').classList.add('hidden');
            // Reset character counter
            document.getElementById('charCount').textContent = document.getElementById('isi').value.length + ' karakter';
        }
    }

    // Character counter untuk isi artikel
    document.getElementById('isi').addEventListener('input', function(e) {
        const charCount = e.target.value.length;
        const counter = document.getElementById('charCount');
        counter.textContent = charCount + ' karakter';
    });

    // Drag and drop functionality
    const fileUpload = document.querySelector('.file-upload');
    const fileInput = document.getElementById('gambar');

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
        const judul = document.getElementById('judul').value.trim();
        const isi = document.getElementById('isi').value.trim();
        
        let isValid = true;
        let errorMessage = '';

        if (judul.length < 5) {
            isValid = false;
            errorMessage = 'Judul artikel minimal 5 karakter!';
            document.getElementById('judul').focus();
        } else if (isi.length < 50) {
            isValid = false;
            errorMessage = 'Isi artikel minimal 50 karakter!';
            document.getElementById('isi').focus();
        }

        if (!isValid) {
            e.preventDefault();
            alert(errorMessage);
            return false;
        }
    });
    </script>
</body>
</html>