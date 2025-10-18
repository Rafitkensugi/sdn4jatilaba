<aside id="sidebar"
       class="w-64 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 fixed h-full transform -translate-x-full lg:translate-x-0 transition-transform duration-300 z-50 shadow-lg lg:shadow-none">

    <div class="p-4 border-b border-gray-200 dark:border-gray-700">
        <h2 class="text-xl font-bold text-blue-600 dark:text-blue-400">Admin Panel</h2>
    </div>

    <nav class="p-4 space-y-2">
        <a href="{{ route('admin.dashboard') }}"
           class="block px-3 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition">🏠 Dashboard</a>

        <a href="{{ route('admin.berita.index') }}"
           class="block px-3 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition">📰 Berita</a>

        <a href="{{ route('admin.pengumuman.index') }}"
           class="block px-3 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition">📢 Pengumuman</a>

        <a href="{{ route('admin.guru.index') }}"
           class="block px-3 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition">👨‍🏫 Guru</a>

        <a href="{{ route('admin.spmb.index') }}"
           class="block px-3 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition">📋 SPMB</a>

        <a href="{{ route('admin.fasilitas.index') }}"
           class="block px-3 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition">🏫 Fasilitas</a>

        <a href="{{ route('admin.prestasi.index') }}"
           class="block px-3 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition">🏆 Prestasi</a>

        <a href="{{ route('admin.feedback.index') }}"
           class="block px-3 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition">💬 Feedback</a>
    </nav>
</aside>
