<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Agenda</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
    <style>
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header Section -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4 fade-in">
            <div>
                <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Kelola Agenda</h1>
                <p class="text-gray-600 dark:text-gray-400 mt-2">Kelola semua agenda dan kegiatan Anda di sini</p>
            </div>
            <a href="{{ route('admin.agenda.create') }}" 
               class="flex items-center gap-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-5 py-3 rounded-xl hover:from-blue-600 hover:to-indigo-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                <i class="fas fa-plus-circle"></i>
                <span>Tambah Agenda Baru</span>
            </a>
        </div>

        <!-- Alert Section -->
        @if (session('success'))
        <div class="mb-6 p-4 bg-green-50 dark:bg-green-900/30 border border-green-200 dark:border-green-800 rounded-xl flex items-start gap-3 fade-in">
            <div class="flex-shrink-0 mt-0.5">
                <i class="fas fa-check-circle text-green-500 text-lg"></i>
            </div>
            <div class="text-green-800 dark:text-green-300">
                {{ session('success') }}
            </div>
        </div>
        @endif

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-sm border border-gray-100 dark:border-gray-700 card-hover">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">Total Agenda</p>
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-white mt-1">{{ $agendas->count() }}</h3>
                    </div>
                    <div class="p-3 bg-blue-50 dark:bg-blue-900/30 rounded-lg">
                        <i class="fas fa-calendar-alt text-blue-500 text-xl"></i>
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-sm border border-gray-100 dark:border-gray-700 card-hover">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">Agenda Bulan Ini</p>
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-white mt-1">
                            {{ $agendas->where('bulan', strtolower(now()->format('F')))->count() }}
                        </h3>
                    </div>
                    <div class="p-3 bg-green-50 dark:bg-green-900/30 rounded-lg">
                        <i class="fas fa-calendar-day text-green-500 text-xl"></i>
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-sm border border-gray-100 dark:border-gray-700 card-hover">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">Agenda Mendatang</p>
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-white mt-1">
                            {{ $agendas->where('tanggal', '>=', now())->count() }}
                        </h3>
                    </div>
                    <div class="p-3 bg-purple-50 dark:bg-purple-900/30 rounded-lg">
                        <i class="fas fa-clock text-purple-500 text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 overflow-hidden fade-in">
            <!-- Table Header -->
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Daftar Agenda</h2>
                
                <div class="flex items-center gap-3">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input type="text" id="searchInput" placeholder="Cari agenda..." 
                               class="pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-800 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200">
                    </div>
                    
                    <div class="flex items-center gap-2 bg-gray-100 dark:bg-gray-700 rounded-lg p-1">
                        <button id="tableView" class="p-2 rounded-md bg-white dark:bg-gray-600 shadow-sm text-blue-600 dark:text-blue-400">
                            <i class="fas fa-table"></i>
                        </button>
                        <button id="cardView" class="p-2 rounded-md text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                            <i class="fas fa-th-large"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Table View -->
            <div id="tableContainer" class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700/50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Judul Agenda</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Tanggal</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Bulan</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Lokasi</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach($agendas as $agenda)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/30 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-calendar text-blue-600 dark:text-blue-400"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $agenda->judul }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 dark:text-white">{{ $agenda->tanggal->format('d M Y') }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 capitalize">
                                    {{ $agenda->bulan }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-gray-400 mr-2"></i>
                                    {{ $agenda->lokasi }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center space-x-3">
                                    <a href="{{ route('admin.agenda.edit', $agenda->id) }}" 
                                       class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-300 transition-colors duration-200 flex items-center gap-1">
                                        <i class="fas fa-edit"></i>
                                        <span>Edit</span>
                                    </a>
                                    <form action="{{ route('admin.agenda.destroy', $agenda->id) }}" method="POST" 
                                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus agenda ini?')" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300 transition-colors duration-200 flex items-center gap-1">
                                            <i class="fas fa-trash-alt"></i>
                                            <span>Hapus</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Card View (Hidden by default) -->
            <div id="cardContainer" class="hidden p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($agendas as $agenda)
                <div class="bg-gray-50 dark:bg-gray-700/30 rounded-xl p-5 border border-gray-200 dark:border-gray-600 card-hover">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center gap-3">
                            <div class="h-12 w-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center">
                                <i class="fas fa-calendar text-blue-600 dark:text-blue-400"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800 dark:text-white line-clamp-1">{{ $agenda->judul }}</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1 flex items-center gap-1">
                                    <i class="fas fa-map-marker-alt text-xs"></i>
                                    {{ $agenda->lokasi }}
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-200 dark:border-gray-600">
                        <div class="flex items-center gap-2">
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $agenda->tanggal->format('d M Y') }}</span>
                            <span class="px-2 py-1 text-xs rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 capitalize">
                                {{ $agenda->bulan }}
                            </span>
                        </div>
                        
                        <div class="flex items-center gap-2">
                            <a href="{{ route('admin.agenda.edit', $agenda->id) }}" 
                               class="p-2 text-indigo-600 dark:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-indigo-900/30 rounded-lg transition-colors duration-200">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.agenda.destroy', $agenda->id) }}" method="POST" 
                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus agenda ini?')" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="p-2 text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/30 rounded-lg transition-colors duration-200">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Empty State -->
            @if($agendas->isEmpty())
            <div class="text-center py-12">
                <div class="mx-auto h-24 w-24 text-gray-400 mb-4">
                    <i class="fas fa-calendar-times text-6xl"></i>
                </div>
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Belum ada agenda</h3>
                <p class="text-gray-500 dark:text-gray-400 mb-6">Mulai dengan menambahkan agenda pertama Anda</p>
                <a href="{{ route('admin.agenda.create') }}" class="inline-flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200">
                    <i class="fas fa-plus-circle"></i>
                    <span>Tambah Agenda</span>
                </a>
            </div>
            @endif
        </div>
    </div>

    <script>
        // Toggle between table and card view
        document.getElementById('tableView').addEventListener('click', function() {
            document.getElementById('tableContainer').classList.remove('hidden');
            document.getElementById('cardContainer').classList.add('hidden');
            document.getElementById('tableView').classList.add('bg-white', 'dark:bg-gray-600', 'shadow-sm', 'text-blue-600', 'dark:text-blue-400');
            document.getElementById('cardView').classList.remove('bg-white', 'dark:bg-gray-600', 'shadow-sm', 'text-blue-600', 'dark:text-blue-400');
            document.getElementById('cardView').classList.add('text-gray-500', 'dark:text-gray-400');
        });

        document.getElementById('cardView').addEventListener('click', function() {
            document.getElementById('tableContainer').classList.add('hidden');
            document.getElementById('cardContainer').classList.remove('hidden');
            document.getElementById('cardView').classList.add('bg-white', 'dark:bg-gray-600', 'shadow-sm', 'text-blue-600', 'dark:text-blue-400');
            document.getElementById('tableView').classList.remove('bg-white', 'dark:bg-gray-600', 'shadow-sm', 'text-blue-600', 'dark:text-blue-400');
            document.getElementById('tableView').classList.add('text-gray-500', 'dark:text-gray-400');
        });

        // Simple search functionality
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
            
            // Also search in card view
            const cards = document.querySelectorAll('#cardContainer > div');
            cards.forEach(card => {
                const text = card.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>