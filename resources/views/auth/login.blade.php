<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SDN 4 Jatilaba</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            200: '#ddd6fe',
                            300: '#c4b5fd',
                            400: '#a78bfa',
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                            800: '#5b21b6',
                            900: '#4c1d95',
                        }
                    },
                    animation: {
                        fadeIn: 'fadeIn 0.8s ease-out',
                        float: 'float 6s ease-in-out infinite'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #5a2a8a 0%, #8b5cc9 50%, #c5a9e6 100%);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .dark .glass-card {
            background: rgba(15, 23, 42, 0.95);
            border: 1px solid rgba(120, 119, 198, 0.3);
        }
        .input-glow {
            box-shadow: 0 0 0 0 rgba(139, 92, 246, 0.2);
            transition: box-shadow 0.3s ease-in-out;
        }
        .input-glow:focus {
            box-shadow: 0 0 0 4px rgba(139, 92, 246, 0.3);
        }
        .btn-gradient {
            background: linear-gradient(135deg, #5a2a8a 0%, #8b5cc9 100%);
            transition: all 0.3s ease;
        }
        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(139, 92, 246, 0.4);
        }
        .pulse-ring {
            position: relative;
        }
        .pulse-ring::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: rgba(139, 92, 246, 0.2);
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: translate(-50%, -50%) scale(0.8); opacity: 1; }
            100% { transform: translate(-50%, -50%) scale(1.2); opacity: 0; }
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center">

    <div class="glass-card shadow-2xl rounded-3xl p-8 w-full max-w-md animate-fadeIn relative overflow-hidden">
        <!-- Efek dekoratif -->
        <div class="absolute top-0 left-0 w-32 h-32 bg-primary-500/10 blur-3xl rounded-full -z-10 animate-float"></div>
        <div class="absolute bottom-0 right-0 w-40 h-40 bg-primary-300/20 blur-3xl rounded-full -z-10 animate-float" style="animation-delay: 2s;"></div>

        <!-- Logo & Judul -->
        <div class="text-center mb-8">
            <div class="flex justify-center mb-4">
                <div class="pulse-ring">
                    <img src="{{ asset('images/logosekolah.jpg') }}" alt="Logo SDN 4 Jatilaba" class="w-20 h-20 rounded-full border-4 border-primary-500 shadow-lg">
                </div>
            </div>
            <h1 class="text-2xl font-bold text-black dark:text-white">SD Negeri Jatilaba 4</h1>
            <p class="text-sm text-black mt-2 font-medium dark:text-gray-200">Silahkan Login</p>
        </div>

        {{-- ✅ ALERT --}}
        @if (session('error'))
            <div class="bg-red-500/10 border border-red-500/30 text-red-700 dark:text-red-300 px-4 py-3 rounded-lg mb-5 text-sm animate-fadeIn">
                <strong>Gagal:</strong> {{ session('error') }}
            </div>
        @endif

        @if ($errors->has('email'))
            <div class="bg-red-500/10 border border-red-500/30 text-red-700 dark:text-red-300 px-4 py-3 rounded-lg mb-5 text-sm animate-fadeIn">
                <strong>Email tidak terdaftar:</strong> Email yang Anda masukkan belum terdaftar dalam sistem.
            </div>
        @endif

        @if ($errors->has('password'))
            <div class="bg-red-500/10 border border-red-500/30 text-red-700 dark:text-red-300 px-4 py-3 rounded-lg mb-5 text-sm animate-fadeIn">
                <strong>Password salah:</strong> Kata sandi yang Anda masukkan tidak sesuai.
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-500/10 border border-green-500/30 text-green-700 dark:text-green-300 px-4 py-3 rounded-lg mb-5 text-sm animate-fadeIn">
                {{ session('success') }}
            </div>
        @endif

        <!-- FORM LOGIN -->
        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <div>
                <label for="email" class="block text-sm font-semibold text-black mb-2 dark:text-gray-100">Email</label>
                <input id="email" type="email" name="email" required autofocus value="{{ old('email') }}"
                    class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-primary-500 focus:ring-0 outline-none placeholder:text-gray-400 transition-all bg-white dark:bg-gray-800 dark:border-gray-600 dark:text-white input-glow"
                    placeholder="Masukan email Anda">
            </div>

            <div class="relative">
                <label for="password" class="block text-sm font-semibold text-black mb-2 dark:text-gray-100">Kata Sandi</label>
                <input id="password" type="password" name="password" required
                    class="w-full px-4 py-3 pr-12 rounded-xl border border-gray-300 focus:border-primary-500 focus:ring-0 outline-none placeholder:text-gray-400 transition-all bg-white dark:bg-gray-800 dark:border-gray-600 dark:text-white input-glow"
                    placeholder="Masukan kata sandi">

                <!-- 👁️ Tombol toggle password -->
                <button type="button" id="togglePassword" aria-label="Tampilkan kata sandi"
                    class="absolute right-3 top-[42px] text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 focus:outline-none transition-colors">
                    <svg id="iconEye" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <svg id="iconEyeOff" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.964 9.964 0 012.223-3.592M6.18 6.18A9.966 9.966 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.986 9.986 0 01-4.255 5.525" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
                    </svg>
                </button>
            </div>

            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center space-x-3 text-black dark:text-gray-100 cursor-pointer">
                    <input type="checkbox" name="remember" class="sr-only peer">
                    <div class="w-5 h-5 flex items-center justify-center rounded border-2 border-gray-400 peer-checked:border-primary-600 peer-checked:bg-primary-600 transition-colors">
                        <svg class="w-3 h-3 text-white hidden peer-checked:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <span>Ingat saya</span>
                </label>
                <a href="#" class="text-primary-700 hover:underline dark:text-primary-400">Lupa sandi?</a>
            </div>

            <button type="submit" class="w-full btn-gradient text-white font-semibold py-3.5 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 group">
                <span class="flex items-center justify-center space-x-2">
                    <span>Masuk</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </span>
            </button>
        </form>

        <div class="text-center mt-6">
            <a href="{{ route('beranda') }}" class="inline-flex items-center space-x-2 text-sm text-primary-700 hover:underline dark:text-primary-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                <span>Kembali ke Beranda</span>
            </a>
        </div>

        <p class="text-center text-xs text-gray-600 mt-6 dark:text-gray-300">
            © 2025 <span class="text-primary-700 font-semibold dark:text-primary-400">SDN 4 Jatilaba</span>. Semua hak dilindungi.
        </p>
    </div>

    <script>
        // Dark mode mengikuti sistem
        function setTheme() {
            if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
        setTheme();
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setTheme);

        // 👁️ Toggle Password
        const pwd = document.getElementById('password');
        const toggle = document.getElementById('togglePassword');
        const iconEye = document.getElementById('iconEye');
        const iconEyeOff = document.getElementById('iconEyeOff');

        if (toggle) {
            toggle.addEventListener('click', () => {
                const isPassword = pwd.type === 'password';
                pwd.type = isPassword ? 'text' : 'password';
                iconEye.classList.toggle('hidden', !isPassword);
                iconEyeOff.classList.toggle('hidden', isPassword);
            });
        }
    </script>
</body>
</html>