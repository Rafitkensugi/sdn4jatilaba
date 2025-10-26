<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan dari Pengunjung - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            color-scheme: light dark;
        }
        @media (prefers-color-scheme: dark) {
            body {
                background-color: #111827;
                color: #e5e7eb;
            }
        }
    </style>
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white flex">

    <!-- Sidebar -->
    <x-sidebar active-menu="pesan"></x-sidebar>

    <!-- Konten Utama -->
    <main class="flex-1 p-6 overflow-x-auto transition">
        <!-- Header -->
        <div class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow border border-gray-200 dark:border-gray-700">
            <h1 class="text-2xl font-bold">Pesan dari Pengunjung</h1>
            <p class="text-sm text-gray-600 dark:text-gray-400">Kelola pesan masuk dari pengunjung website SDN 4 Jatilaba</p>
        </div>

        <!-- Statistik -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
            <div class="bg-white dark:bg-gray-800 rounded-xl p-4 flex items-center gap-4 shadow border border-gray-200 dark:border-gray-700">
                <div class="bg-gray-800 dark:bg-gray-700 p-3 rounded-lg">
                    <i class="fas fa-envelope text-white text-2xl"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Total Pesan</p>
                    <h3 class="text-2xl font-bold">{{ $pesan->total() }}</h3>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-xl p-4 flex items-center gap-4 shadow border border-gray-200 dark:border-gray-700">
                <div class="bg-gray-800 dark:bg-gray-700 p-3 rounded-lg">
                    <i class="fas fa-check-circle text-white text-2xl"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Sudah Dibaca</p>
                    <h3 class="text-2xl font-bold">{{ $pesan->where('status', 'dibaca')->count() }}</h3>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-xl p-4 flex items-center gap-4 shadow border border-gray-200 dark:border-gray-700">
                <div class="bg-gray-800 dark:bg-gray-700 p-3 rounded-lg">
                    <i class="fas fa-times-circle text-white text-2xl"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Belum Dibaca</p>
                    <h3 class="text-2xl font-bold">{{ $pesan->where('status', 'belum')->count() }}</h3>
                </div>
            </div>
        </div>

        <!-- Tabel Pesan -->
        <div class="mt-6 bg-white dark:bg-gray-800 rounded-xl shadow border border-gray-200 dark:border-gray-700 overflow-hidden">
            @if (session('success'))
                <div class="bg-green-100 dark:bg-green-900 text-green-700 dark:text-green-300 p-3 border-b border-green-200 dark:border-green-800">
                    {{ session('success') }}
                </div>
            @endif

            <table class="min-w-full text-left border-collapse">
                <thead class="bg-gray-100 dark:bg-gray-700">
                    <tr>
                        <th class="px-4 py-3 text-sm uppercase font-semibold border-b border-gray-200 dark:border-gray-600">Nama</th>
                        <th class="px-4 py-3 text-sm uppercase font-semibold border-b border-gray-200 dark:border-gray-600">Email</th>
                        <th class="px-4 py-3 text-sm uppercase font-semibold border-b border-gray-200 dark:border-gray-600">Pesan</th>
                        <th class="px-4 py-3 text-center text-sm uppercase font-semibold border-b border-gray-200 dark:border-gray-600">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse ($pesan as $p)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                            <td class="px-4 py-3 border-b border-gray-200 dark:border-gray-600">{{ $p->nama }}</td>
                            <td class="px-4 py-3 border-b border-gray-200 dark:border-gray-600">{{ $p->email }}</td>
                            <td class="px-4 py-3 truncate max-w-xs border-b border-gray-200 dark:border-gray-600">{{ Str::limit($p->pesan, 50) }}</td>
                            <td class="px-4 py-3 text-center space-x-2 border-b border-gray-200 dark:border-gray-600">
                                <!-- Tombol Lihat -->
                                <button 
                                    class="bg-gray-800 hover:bg-gray-700 text-white px-3 py-1 rounded text-sm border border-gray-700"
                                    onclick="openModal('{{ $p->nama }}', '{{ $p->email }}', `{{ e($p->pesan) }}`)">
                                    <i class="fas fa-eye"></i> Lihat
                                </button>

                                <!-- Tombol Hapus -->
                                <form action="{{ route('admin.pesan.destroy', $p->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus pesan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-gray-800 hover:bg-gray-700 text-white px-3 py-1 rounded text-sm border border-gray-700">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-6 text-gray-500 dark:text-gray-400">Belum ada pesan masuk</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="p-4 bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
                {{ $pesan->links() }}
            </div>
        </div>
    </main>

    <!-- Modal Popup -->
    <div id="pesanModal" class="hidden fixed inset-0 bg-black/60 backdrop-blur-sm flex justify-center items-center z-50">
        <div class="bg-white dark:bg-gray-800 text-gray-900 dark:text-white rounded-xl p-6 shadow-lg w-96 relative border border-gray-200 dark:border-gray-700">
            <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                <i class="fas fa-times text-lg"></i>
            </button>
            <h2 class="text-xl font-bold mb-4">Detail Pesan</h2>
            <div class="space-y-2">
                <p><span class="font-semibold">Nama:</span> <span id="modalNama"></span></p>
                <p><span class="font-semibold">Email:</span> <span id="modalEmail"></span></p>
                <p><span class="font-semibold">Isi Pesan:</span></p>
                <div class="bg-gray-100 dark:bg-gray-700 p-3 rounded max-h-48 overflow-y-auto border border-gray-200 dark:border-gray-600">
                    <p id="modalPesan" class="whitespace-pre-wrap"></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal(nama, email, pesan) {
            document.getElementById('modalNama').textContent = nama;
            document.getElementById('modalEmail').textContent = email;
            document.getElementById('modalPesan').textContent = pesan;
            document.getElementById('pesanModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('pesanModal').classList.add('hidden');
        }

        // Tutup modal dengan klik di luar card
        document.getElementById('pesanModal').addEventListener('click', (e) => {
            if (e.target.id === 'pesanModal') closeModal();
        });
    </script>

</body>
</html>