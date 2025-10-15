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
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .dark .glass-card {
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid rgba(120, 119, 198, 0.3);
        }
        
        .input-glow {
            box-shadow: 0 0 0 0 rgba(139, 92, 246, 0.2);
            transition: box-shadow 0.3s ease-in-out;
        }
        
        .input-glow:focus {
            box-shadow: 0 0 0 4px rgba(139, 92, 246, 0.3);
        }
        
        .dark .input-glow:focus {
            box-shadow: 0 0 0 4px rgba(120, 119, 198, 0.4);
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
            0% {
                transform: translate(-50%, -50%) scale(0.8);
                opacity: 1;
            }
            100% {
                transform: translate(-50%, -50%) scale(1.2);
                opacity: 0;
            }
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center text-gray-800 dark:text-gray-200">

    <div class="glass-card shadow-2xl rounded-3xl p-8 w-full max-w-md animate-fadeIn relative overflow-hidden">
        <!-- Efek dekoratif -->
        <div class="absolute top-0 left-0 w-32 h-32 bg-primary-500/10 blur-3xl rounded-full -z-10 animate-float"></div>
        <div class="absolute bottom-0 right-0 w-40 h-40 bg-primary-300/20 blur-3xl rounded-full -z-10 animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-primary-400/5 rounded-full -z-10"></div>

        <!-- Logo dan judul -->
        <div class="text-center mb-8">
            <div class="flex justify-center mb-4">
                <div class="pulse-ring">
                    <img src="{{ asset('images/logosekolah.jpg') }}" alt="Logo SDN 4 Jatilaba" class="w-20 h-20 rounded-full border-4 border-primary-500 shadow-lg">
                </div>
            </div>
            <h1 class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-primary-800 bg-clip-text text-transparent dark:from-primary-400 dark:to-primary-300">
                SD Negeri Jatilaba 4
            </h1>
            <p class="text-sm text-primary-600 mt-2 font-medium dark:text-primary-300">
                Selamat Datang di Portal Login
            </p>
        </div>

        <!-- Error -->
        <div class="bg-red-500/10 border border-red-500/30 text-red-700 dark:text-red-300 px-4 py-3 rounded-lg mb-5 text-sm hidden">
            Email atau password salah
        </div>

        <!-- Form Login -->
        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            <div>
                <label for="email" class="block text-sm font-semibold text-primary-700 mb-2 dark:text-primary-300">Email</label>
                <input id="email" type="email" name="email" required autofocus
                    class="w-full px-4 py-3 rounded-xl border border-primary-200 focus:border-primary-500 focus:ring-0 outline-none placeholder:text-primary-400 transition-all bg-white/80 dark:bg-gray-800/80 dark:border-primary-700/50 dark:placeholder:text-primary-500 input-glow"
                    placeholder="Masukan email Anda">
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold text-primary-700 mb-2 dark:text-primary-300">Kata Sandi</label>
                <input id="password" type="password" name="password" required
                    class="w-full px-4 py-3 rounded-xl border border-primary-200 focus:border-primary-500 focus:ring-0 outline-none placeholder:text-primary-400 transition-all bg-white/80 dark:bg-gray-800/80 dark:border-primary-700/50 dark:placeholder:text-primary-500 input-glow"
                    placeholder="Masukan kata sandi">
            </div>

            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center space-x-3 text-primary-700 dark:text-primary-300">
                    <div class="relative">
                        <input type="checkbox" name="remember" class="sr-only peer">
                        <div class="w-5 h-5 flex items-center justify-center rounded border-2 border-primary-400 peer-checked:border-primary-600 peer-checked:bg-primary-600 transition-colors cursor-pointer">
                            <svg class="w-3 h-3 text-white hidden peer-checked:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    <span>Ingat saya</span>
                </label>
                <a href="#" class="text-primary-600 hover:text-primary-800 font-medium transition hover:underline dark:text-primary-400 dark:hover:text-primary-300">
                    Lupa sandi?
                </a>
            </div>

            <button type="submit"
                class="w-full btn-gradient text-white font-semibold py-3.5 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 group">
                <span class="flex items-center justify-center space-x-2">
                    <span>Masuk</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </span>
            </button>
        </form>

        <p class="text-center text-xs text-gray-500 mt-6 dark:text-gray-400">
            © 2025 <span class="text-primary-600 font-semibold dark:text-primary-400">SDN 4 Jatilaba</span>. Semua hak dilindungi.
        </p>
    </div>

    <script>
        if (window.location.hash === '#stack') {
            history.replaceState(null, null, window.location.pathname);
        }
        
        // Otomatis mengikuti tema browser
        function setTheme() {
            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
        
        // Set tema awal
        setTheme();
        
        // Dengarkan perubahan tema sistem
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setTheme);
    </script>
</body>
</html>