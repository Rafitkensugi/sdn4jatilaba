<!-- Sidebar -->
<aside 
    id="sidebar"
    class="w-64 bg-white dark:bg-gray-800 text-gray-900 dark:text-white fixed h-full 
           lg:relative lg:translate-x-0 transform -translate-x-full sidebar-transition 
           z-50 shadow-lg lg:shadow-none">

    <!-- Header Sidebar -->
    <div class="p-4 border-b border-gray-200 dark:border-gray-700">
        <h1 class="text-xl font-bold">SDN 4 Jatilaba</h1>
        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Admin Panel</p>
    </div>

    <!-- Navigasi -->
    <nav class="mt-4 custom-scrollbar overflow-y-auto h-[calc(100vh-120px)]">

        @php
            $links = [
                ['route' => 'admin.dashboard', 'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10h14V10', 'label' => 'Dashboard', 'match' => 'admin.dashboard'],
                ['route' => 'admin.berita.index', 'icon' => 'M19 20H5a2 2 0 01-2-2V6h14v1h2v13z', 'label' => 'Berita', 'match' => 'admin.berita.*'],
                ['route' => 'admin.pengumuman.index', 'icon' => 'M11 5.882V19.24l-2.147-6.15M18 13a3 3 0 100-6', 'label' => 'Pengumuman', 'match' => 'admin.pengumuman.*'],
                ['route' => 'admin.prestasi.index', 'icon' => 'M9 12l2 2 4-4', 'label' => 'Prestasi', 'match' => 'admin.prestasi.*'],
                ['route' => 'admin.fasilitas.index', 'icon' => 'M19 21V5H5v16h14z', 'label' => 'Fasilitas', 'match' => 'admin.fasilitas.*'],
                ['route' => 'admin.guru.index', 'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1z', 'label' => 'Kelola Guru', 'match' => 'admin.guru.*'],
                ['route' => 'admin.spmb.index', 'icon' => 'M9 5h6v14H9z', 'label' => 'Informasi SPMB', 'match' => 'admin.spmb.*'],
                ['route' => 'admin.feedback.index', 'icon' => 'M8 10h.01M12 10h.01M16 10h.01M9 16H5', 'label' => 'Feedback', 'match' => 'admin.feedback.*'],
            ];
        @endphp

        @foreach ($links as $link)
            <a href="{{ route($link['route']) }}"
               class="flex items-center px-4 py-3 transition-colors duration-200 
                      text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 
                      hover:text-gray-900 dark:hover:text-white
                      {{ request()->routeIs($link['match']) ? 'bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white' : '' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $link['icon'] }}"></path>
                </svg>
                {{ $link['label'] }}
            </a>
        @endforeach

        <!-- Logout -->
        <form action="{{ route('logout') }}" method="POST" class="mt-6">
            @csrf
            <button type="submit"
                class="flex items-center w-full px-4 py-3 transition-colors duration-200
                       text-gray-700 dark:text-gray-300 hover:bg-red-100 dark:hover:bg-red-900/50
                       hover:text-red-700 dark:hover:text-red-300">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4-4-4M7 12h14M7 12V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
                Logout
            </button>
        </form>
    </nav>
</aside>
