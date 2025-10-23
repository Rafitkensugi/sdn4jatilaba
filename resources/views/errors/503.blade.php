<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sedang Dalam Pemeliharaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        @keyframes pulse-slow {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        .pulse-slow {
            animation: pulse-slow 2s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-4xl w-full">
        <!-- Main Card -->
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
            <div class="p-8 md:p-12 text-center">
                <!-- Icon/Illustration -->
                <div class="flex justify-center mb-8">
                    <div class="relative">
                        <div class="absolute inset-0 bg-indigo-200 rounded-full blur-2xl opacity-50"></div>
                        <div class="relative float-animation">
                            <svg class="w-32 h-32 md:w-40 md:h-40 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Heading -->
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                    Sedang Dalam Pemeliharaan
                </h1>
                
                <!-- Description -->
                <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                    Kami sedang melakukan pemeliharaan sistem untuk meningkatkan kualitas layanan. 
                    Mohon maaf atas ketidaknyamanannya.
                </p>

                <!-- Progress Indicator -->
                <div class="mb-8">
                    <div class="flex items-center justify-center space-x-2 mb-4">
                        <div class="w-3 h-3 bg-indigo-600 rounded-full pulse-slow"></div>
                        <div class="w-3 h-3 bg-indigo-600 rounded-full pulse-slow" style="animation-delay: 0.2s;"></div>
                        <div class="w-3 h-3 bg-indigo-600 rounded-full pulse-slow" style="animation-delay: 0.4s;"></div>
                    </div>
                    <p class="text-sm text-gray-500">Estimasi selesai: 2-3 jam</p>
                </div>

                <!-- Info Boxes -->
                <div class="grid md:grid-cols-3 gap-4 mb-8">
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6">
                        <svg class="w-8 h-8 text-blue-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="font-semibold text-gray-800 mb-1">Kembali Segera</h3>
                        <p class="text-sm text-gray-600">Website akan aktif kembali secepatnya</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6">
                        <svg class="w-8 h-8 text-purple-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        <h3 class="font-semibold text-gray-800 mb-1">Data Aman</h3>
                        <p class="text-sm text-gray-600">Semua data Anda tetap aman</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl p-6">
                        <svg class="w-8 h-8 text-indigo-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <h3 class="font-semibold text-gray-800 mb-1">Peningkatan</h3>
                        <p class="text-sm text-gray-600">Meningkatkan performa sistem</p>
                    </div>
                </div>

                <!-- Contact Section -->
                <div class="border-t pt-8">
                    <p class="text-gray-600 mb-4">
                        Perlu bantuan darurat?
                    </p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="mailto:support@example.com" class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors duration-200 shadow-lg hover:shadow-xl">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Email Kami
                        </a>
                        <a href="tel:+62123456789" class="inline-flex items-center px-6 py-3 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition-colors duration-200">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-8 text-gray-600">
            <p>&copy; 2025 Your Company. All rights reserved.</p>
        </div>
    </div>

    <script>
        // Auto refresh setiap 5 menit
        setTimeout(function() {
            location.reload();
        }, 300000);

        // Countdown timer (opsional)
        let timeLeft = 7200; // 2 jam dalam detik
        
        function updateTimer() {
            const hours = Math.floor(timeLeft / 3600);
            const minutes = Math.floor((timeLeft % 3600) / 60);
            timeLeft--;
            
            if (timeLeft < 0) {
                location.reload();
            }
        }
        
        setInterval(updateTimer, 1000);
    </script>
</body>
</html>