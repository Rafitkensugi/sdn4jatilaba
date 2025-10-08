<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SDN 4 Jatilaba</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 via-yellow-50 to-green-50">

    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-md border border-green-100">
        <!-- Logo dan Judul -->
        <div class="text-center mb-8">
            <div class="flex justify-center mb-3">
                <img src="{{ asset('logo.png') }}" alt="Logo SDN 4 Jatilaba" class="w-16 h-16 rounded-full border-2 border-green-400 shadow-md">
            </div>
            <h1 class="text-2xl font-bold text-green-700">SD Negeri Jatilaba 4</h1>
            <p class="text-sm text-yellow-700 mt-1 font-medium">Selamat Datang</p>
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
                <label for="email" class="block text-sm font-semibold text-green-700 mb-1">Email</label>
                <input id="email" type="email" name="email" required autofocus
                    class="w-full px-4 py-2 rounded-lg border border-green-300 focus:border-green-500 focus:ring focus:ring-green-200 outline-none placeholder:text-green-400"
                    placeholder="Masukan email">
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold text-green-700 mb-1">Kata Sandi</label>
                <input id="password" type="password" name="password" required
                    class="w-full px-4 py-2 rounded-lg border border-green-300 focus:border-green-500 focus:ring focus:ring-green-200 outline-none placeholder:text-green-400"
                    placeholder="Masukan Password">
            </div>

            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center space-x-2 text-green-700">
                    <input type="checkbox" name="remember" class="text-green-500 border-green-400 focus:ring-green-300">
                    <span>Ingat saya</span>
                </label>
                <a href="#" class="text-yellow-700 hover:text-yellow-800 font-medium">Lupa sandi?</a>
            </div>

            <button type="submit"
                class="w-full bg-gradient-to-r from-green-600 to-yellow-500 text-white font-semibold py-2.5 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 hover:scale-[1.02]">
                Masuk
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            © 2025 <span class="text-green-600 font-semibold">SDN Jatilaba 4</span>. Semua hak dilindungi.
        </p>
    </div>

     <script>
        if (window.location.hash === '#stack') {
            history.replaceState(null, null, window.location.pathname);
        }
    </script>

</body>
</html>
