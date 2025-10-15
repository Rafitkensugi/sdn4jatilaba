<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SDN 4 Jatilaba</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#5a2a8a] via-[#8b5cc9] to-[#c5a9e6] text-gray-800">

    <div class="bg-white/95 dark:bg-gray-900/90 backdrop-blur-md shadow-2xl rounded-2xl p-8 w-full max-w-md border border-purple-200/40 animate-fadeIn relative overflow-hidden">
        <!-- Efek dekoratif -->
        <div class="absolute top-0 left-0 w-24 h-24 bg-[#8b5cc9]/10 blur-2xl rounded-full -z-10"></div>
        <div class="absolute bottom-0 right-0 w-32 h-32 bg-[#c5a9e6]/20 blur-3xl rounded-full -z-10"></div>

        <!-- Logo dan judul -->
        <div class="text-center mb-8">
            <div class="flex justify-center mb-3">
                <img src="{{ asset('images/logosekolah.jpg') }}" alt="Logo SDN 4 Jatilaba" class="w-16 h-16 rounded-full border-2 border-[#67308b] shadow-md">
            </div>
            <h1 class="text-2xl font-bold text-[#5a2a8a]">SD Negeri Jatilaba 4</h1>
            <p class="text-sm text-[#8b5cc9] mt-1 font-medium">Selamat Datang di Portal Login</p>
        </div>

        <!-- Error -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-2 rounded mb-4 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Form Login -->
        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <div>
                <label for="email" class="block text-sm font-semibold text-[#5a2a8a] mb-1">Email</label>
                <input id="email" type="email" name="email" required autofocus
                    class="w-full px-4 py-2 rounded-lg border border-purple-300 focus:border-[#5a2a8a] focus:ring focus:ring-purple-200 outline-none placeholder:text-purple-400 transition-all"
                    placeholder="Masukan email Anda">
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold text-[#5a2a8a] mb-1">Kata Sandi</label>
                <input id="password" type="password" name="password" required
                    class="w-full px-4 py-2 rounded-lg border border-purple-300 focus:border-[#5a2a8a] focus:ring focus:ring-purple-200 outline-none placeholder:text-purple-400 transition-all"
                    placeholder="Masukan kata sandi">
            </div>

            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center space-x-2 text-[#5a2a8a]">
                    <input type="checkbox" name="remember" class="text-[#5a2a8a] border-purple-400 focus:ring-purple-300">
                    <span>Ingat saya</span>
                </label>
                <a href="#" class="text-[#8b5cc9] hover:text-[#5a2a8a] font-medium transition">Lupa sandi?</a>
            </div>

            <button type="submit"
                class="w-full bg-gradient-to-r from-[#5a2a8a] to-[#8b5cc9] text-white font-semibold py-2.5 rounded-lg shadow-md hover:shadow-xl hover:scale-[1.03] transition-transform duration-200">
                Masuk
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            © 2025 <span class="text-[#5a2a8a] font-semibold">SDN 4 Jatilaba</span>. Semua hak dilindungi.
        </p>
    </div>

    <!-- Animasi halus -->
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn {
            animation: fadeIn 0.8s ease-out;
        }
    </style>

    <script>
        if (window.location.hash === '#stack') {
            history.replaceState(null, null, window.location.pathname);
        }
    </script>
</body>
</html>
