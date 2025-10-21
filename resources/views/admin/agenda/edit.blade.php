<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Agenda - SDN 4 Jatilaba</title>
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
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 min-h-screen transition-colors duration-300">
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-purple-600 to-purple-700 dark:from-purple-800 dark:to-purple-900 shadow-lg">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex items-center">
                <a href="{{ route('admin.agenda.index') }}" class="mr-4 p-2 hover:bg-white/10 rounded-lg transition-colors duration-200">
                    <i class="fas fa-arrow-left text-white text-xl"></i>
                </a>
                <div>
                    <h1 class="text-2xl sm:text-3xl font-bold text-white mb-2 flex items-center">
                        <i class="fas fa-edit mr-3 text-white"></i>
                        Edit Agenda
                    </h1>
                    <p class="text-purple-100 text-sm sm:text-base">Perbarui informasi agenda "{{ $agenda->judul }}"</p>
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
                        <a href="{{ route('admin.agenda.index') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">Agenda</a>
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
        <div class="max-w-4xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl overflow-hidden">
                <div class="bg-gradient-to-r from-purple-50 to-purple-100 dark:from-gray-700 dark:to-gray-700 px-6 py-4 border-b border-purple-200 dark:border-gray-600">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-white flex items-center">
                        <i class="fas fa-calendar-edit mr-2 text-purple-600 dark:text-purple-400"></i>
                        Formulir Edit Agenda
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Semua field bertanda <span class="text-red-500">*</span> wajib diisi</p>
                </div>

                <form action="{{ route('admin.agenda.update', $agenda->id) }}" method="POST" enctype="multipart/form-data" class="p-6 sm:p-8">
                    @csrf
                    @method('PUT')
                    
                    <div class="space-y-6">
                        <!-- Judul Agenda -->
                        <div>
                            <label for="judul" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <i class="fas fa-heading mr-2 text-purple-600 dark:text-purple-400"></i>
                                    Judul Agenda <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <input type="text" 
                                   name="judul" 
                                   id="judul" 
                                   value="{{ old('judul', $agenda->judul) }}"
                                   class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-white transition-all duration-200 @error('judul') border-red-500 ring-2 ring-red-200 @enderror" 
                                   placeholder="Contoh: Upacara Bendera, Rapat Guru, Porseni" 
                                   required>
                            @error('judul')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Tanggal -->
                        <div>
                            <label for="tanggal" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <i class="fas fa-calendar-day mr-2 text-purple-600 dark:text-purple-400"></i>
                                    Tanggal <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <input type="date" 
                                   name="tanggal" 
                                   id="tanggal"
                                   value="{{ old('tanggal', $agenda->tanggal->format('Y-m-d')) }}"
                                   class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-white transition-all duration-200 @error('tanggal') border-red-500 ring-2 ring-red-200 @enderror" 
                                   required>
                            @error('tanggal')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Bulan -->
                        <div>
                            <label for="bulan" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <i class="fas fa-calendar-alt mr-2 text-purple-600 dark:text-purple-400"></i>
                                    Bulan <span class="text-red-500">*</span>
                                </span>
                            </label>
                            <select name="bulan" 
                                    id="bulan" 
                                    class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-white transition-all duration-200 @error('bulan') border-red-500 ring-2 ring-red-200 @enderror">
                                @php
                                    $months = [
                                        'januari', 'februari', 'maret', 'april', 'mei', 'juni',
                                        'juli', 'agustus', 'september', 'oktober', 'november', 'desember'
                                    ];
                                @endphp
                                @foreach($months as $month)
                                    <option value="{{ $month }}" {{ old('bulan', $agenda->bulan) == $month ? 'selected' : '' }}>
                                        {{ ucfirst($month) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('bulan')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Lokasi -->
                        <div>
                            <label for="lokasi" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <i class="fas fa-map-marker-alt mr-2 text-purple-600 dark:text-purple-400"></i>
                                    Lokasi
                                </span>
                            </label>
                            <input type="text" 
                                   name="lokasi" 
                                   id="lokasi" 
                                   value="{{ old('lokasi', $agenda->lokasi) }}"
                                   class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-white transition-all duration-200 @error('lokasi') border-red-500 ring-2 ring-red-200 @enderror" 
                                   placeholder="Contoh: Aula Sekolah, Lapangan Utama, Ruang Guru">
                            @error('lokasi')
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
                                    <i class="fas fa-align-left mr-2 text-purple-600 dark:text-purple-400"></i>
                                    Deskripsi
                                </span>
                            </label>
                            <textarea name="deskripsi" 
                                      id="deskripsi" 
                                      rows="5"
                                      class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-white transition-all duration-200 @error('deskripsi') border-red-500 ring-2 ring-red-200 @enderror" 
                                      placeholder="Jelaskan detail agenda, peserta, dan informasi penting lainnya...">{{ old('deskripsi', $agenda->deskripsi) }}</textarea>
                            <div class="mt-1 flex justify-between items-center">
                                <p class="text-xs text-gray-500 dark:text-gray-400 flex items-center">
                                    <i class="fas fa-info-circle mr-1"></i>
                                    Deskripsi opsional untuk informasi tambahan
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

                        <!-- Gambar Saat Ini -->
                        @if($agenda->gambar)
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <i class="fas fa-image mr-2 text-purple-600 dark:text-purple-400"></i>
                                    Gambar Saat Ini
                                </span>
                            </label>
                            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                                <div class="relative inline-block group">
                                    <img src="{{ asset('storage/' . $agenda->gambar) }}" 
                                         alt="{{ $agenda->judul }}" 
                                         class="h-48 w-auto object-cover rounded-lg border-4 border-gray-200 dark:border-gray-600 shadow-lg group-hover:shadow-xl transition-all duration-300 cursor-pointer"
                                         onclick="showCurrentImage()">
                                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 rounded-lg transition-all duration-300 flex items-center justify-center">
                                        <span class="text-white font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center">
                                            <i class="fas fa-search-plus mr-2"></i>Klik untuk melihat
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-2 flex items-center">
                                        <i class="fas fa-info-circle mr-2 text-purple-500"></i>
                                        Upload gambar baru jika ingin mengubah gambar saat ini
                                    </p>
                                    <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-3">
                                        <p class="text-sm text-blue-700 dark:text-blue-300 flex items-center">
                                            <i class="fas fa-lightbulb mr-2"></i>
                                            Gambar akan diganti secara otomatis ketika Anda mengupload gambar baru
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Upload Gambar Baru -->
                        <div>
                            <label for="gambar" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                <span class="flex items-center">
                                    <i class="fas fa-camera mr-2 text-purple-600 dark:text-purple-400"></i>
                                    Upload Gambar Baru (Opsional)
                                </span>
                            </label>
                            <div class="mt-2">
                                <label for="gambar" class="file-upload relative flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-xl cursor-pointer bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600 transition-all duration-300 overflow-hidden group @error('gambar') border-red-500 @enderror">
                                    <div id="uploadPlaceholder" class="flex flex-col items-center justify-center pt-5 pb-6 px-4 text-center">
                                        <i class="file-upload-icon mb-3 text-4xl text-gray-400 group-hover:text-purple-500 transition-colors duration-200 fas fa-cloud-upload-alt"></i>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                            <span class="font-semibold">Klik untuk upload</span><br>
                                            atau drag & drop file di sini
                                        </p>
                                        <p class="text-xs text-gray-400 dark:text-gray-300">
                                            <i class="fas fa-file-image mr-1"></i>
                                            PNG, JPG, JPEG (maksimal 2MB)
                                        </p>
                                        <p class="text-xs text-purple-600 dark:text-purple-400 mt-2 font-medium">
                                            <i class="fas fa-ruler-combined mr-1"></i>
                                            Rekomendasi: 800x600 px
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
                                <div class="flex items-center">
                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Rasio disarankan: 4:3
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Resolusi minimal: 800x600
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
                                <a href="{{ route('admin.agenda.index') }}" 
                                   class="flex items-center justify-center px-6 py-3 border-2 border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg font-semibold hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                                    <i class="fas fa-arrow-left mr-2"></i>
                                    Kembali
                                </a>
                                <button type="button" 
                                        onclick="resetForm()"
                                        class="flex items-center justify-center px-6 py-3 border-2 border-purple-300 dark:border-purple-600 text-purple-700 dark:text-purple-300 rounded-lg font-semibold hover:bg-purple-50 dark:hover:bg-purple-900/20 transition-colors duration-200">
                                    <i class="fas fa-undo mr-2"></i>
                                    Reset
                                </button>
                            </div>
                            <div class="flex gap-3">
                                <button type="submit" 
                                        class="flex items-center justify-center px-8 py-3 bg-gradient-to-r from-purple-600 to-purple-700 hover:from-purple-700 hover:to-purple-800 text-white rounded-lg font-semibold shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                                    <i class="fas fa-save mr-2"></i>
                                    Update Agenda
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
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
    // Fungsi untuk menampilkan gambar saat ini
    function showCurrentImage() {
        const src = "{{ asset('storage/' . $agenda->gambar) }}";
        const imgWindow = window.open("", "_blank");
        imgWindow.document.write(`
            <!DOCTYPE html>
            <html>
            <head>
                <title>Gambar {{ $agenda->judul }}</title>
                <style>
                    body { 
                        margin: 0; 
                        padding: 20px; 
                        display: flex; 
                        justify-content: center; 
                        align-items: center; 
                        min-height: 100vh; 
                        background: #1f2937;
                    }
                    img { 
                        max-width: 90vw; 
                        max-height: 90vh; 
                        border-radius: 8px;
                        box-shadow: 0 10px 25px rgba(0,0,0,0.5);
                    }
                </style>
            </head>
            <body>
                <img src="${src}" alt="{{ $agenda->judul }}">
            </body>
            </html>
        `);
    }

    // Fungsi preview gambar baru
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
            document.getElementById('charCount').textContent = document.getElementById('deskripsi').value.length + ' karakter';
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
    });

    // Initialize character counter on page load
    document.addEventListener('DOMContentLoaded', function() {
        const deskripsi = document.getElementById('deskripsi');
        const charCount = document.getElementById('charCount');
        charCount.textContent = deskripsi.value.length + ' karakter';
    });

    // Auto update bulan berdasarkan tanggal
    document.getElementById('tanggal').addEventListener('change', function(e) {
        const date = new Date(e.target.value);
        const monthNames = [
            'januari', 'februari', 'maret', 'april', 'mei', 'juni',
            'juli', 'agustus', 'september', 'oktober', 'november', 'desember'
        ];
        const month = monthNames[date.getMonth()];
        document.getElementById('bulan').value = month;
    });
    </script>
</body>
</html>