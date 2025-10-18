<aside id="sidebar"
    class="w-64 bg-white dark:bg-gray-800 text-gray-900 dark:text-white fixed h-full lg:relative lg:translate-x-0 transform -translate-x-full sidebar-transition z-50 shadow-lg lg:shadow-none">
    <div class="p-4 border-b border-gray-200 dark:border-gray-700">
        <h1 class="text-xl font-bold">SDN 4 Jatilaba</h1>
        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Admin Panel</p>
    </div>

    <nav class="mt-4 custom-scrollbar overflow-y-auto h-[calc(100vh-120px)]">
        @php
            $links = [
                ['route' => 'admin.dashboard', 'icon' => 'home', 'label' => 'Dashboard'],
                ['route' => 'admin.berita.index', 'icon' => 'newspaper', 'label' => 'Berita'],
                ['route' => 'admin.pengumuman.index', 'icon' => 'megaphone', 'label' => 'Pengumuman'],
                ['route' => 'admin.prestasi.index', 'icon' => 'check-circle', 'label' => 'Prestasi'],
                ['route' => 'admin.fasilitas.index', 'icon' => 'building', 'label' => 'Fasilitas'],
                ['route' => 'admin.guru.index', 'icon' => 'users', 'label' => 'Kelola Guru'],
                ['route' => 'admin.spmb.index', 'icon' => 'book-open', 'label' => 'Informasi SPMB'],
                ['route' => 'admin.feedback.index', 'icon' => 'message-square', 'label' => 'Feedback'],
            ];
        @endphp

        @foreach ($links as $link)
            <a href="{{ route($link['route']) }}"
                class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white transition-colors duration-200
                    {{ request()->routeIs(Str::beforeLast($link['route'], '.').'*') ? 'bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white' : '' }}">
                <x-dynamic-component :component="'icons.' . $link['icon']" class="w-5 h-5 mr-3" />
                {{ $link['label'] }}
            </a>
        @endforeach

        <form action="{{ route('logout') }}" method="POST" class="mt-6">
            @csrf
            <button type="submit"
                class="flex items-center w-full px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-red-100 dark:hover:bg-red-900/50 hover:text-red-700 dark:hover:text-red-300 transition-colors duration-200">
                <x-icons.logout class="w-5 h-5 mr-3" />
                Logout
            </button>
        </form>
    </nav>
</aside>
