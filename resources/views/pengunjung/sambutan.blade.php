<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sambutan Kepala Sekolah SDN 4 Jatilaba">
    <title>Sambutan Kepala Sekolah - SDN Jatilaba 4</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-800 bg-gray-50">
    <x-navbar />
    
    <!-- Hero Section -->
    <section id="home" 
        class="relative py-20 md:py-32 bg-center bg-cover bg-no-repeat" 
        style="background-image: url('{{ asset('images/hero.jpeg') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/50"></div>
        <div class="container mx-auto px-4 relative z-10 text-center text-white">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    SAMBUTAN KEPALA SEKOLAH
                </h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto text-gray-100">
                    SD Negeri 4 Jatilaba
                </p>
            </div>
        </div>
    </section>

    <!-- Konten Utama -->
    <main class="max-w-6xl mx-auto py-12 px-4 md:px-6">

        <!-- Profil dan Sambutan -->
        <section class="bg-white rounded-lg shadow-md p-8 mb-8">
            <div class="flex flex-col md:flex-row gap-8 items-center md:items-start">
                
                <!-- Foto Kepala Sekolah -->
                <div class="flex-shrink-0">
                    <div class="w-56 h-56 bg-gray-200 rounded-lg overflow-hidden shadow-lg ring-4 ring-blue-100">
                        <img src="{{ asset('images/SRI NURHAYATI, S.Pd.SD..jpg') }}" 
                             alt="Kepala Sekolah SDN 4 Jatilaba" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="mt-4 text-center">
                        <p class="font-bold text-lg text-blue-900">Sri Nurhayati, S.Pd.SD</p>
                        <p class="text-gray-600">Kepala Sekolah</p>
                    </div>
                </div>

                <!-- Sambutan -->
                <div class="flex-1">
                    <div class="border-l-4 border-yellow-400 pl-4 mb-6">
                        <h2 class="text-2xl font-bold text-blue-900">SAMBUTAN</h2>
                    </div>
                    
                    <div class="space-y-4 text-gray-700 leading-relaxed">
                        <!-- Opening -->
                        <div class="text-center bg-blue-50 rounded-lg p-4">
                            <p class="text-blue-900 font-semibold text-xl mb-2">
                                بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم
                            </p>
                            <p class="text-blue-900 font-semibold text-lg italic">
                                Assalamu'alaikum Warahmatullahi Wabarakatuh
                            </p>
                        </div>

                        <!-- Body -->
                        <p>
                            Puji syukur kita panjatkan ke hadirat Allah SWT atas limpahan rahmat dan karunia-Nya,
                            sehingga website SDN 4 Jatilaba ini dapat terus berkembang dan memberikan informasi
                            kepada masyarakat luas. Kami berkomitmen untuk membangun generasi penerus bangsa yang
                            <span class="font-semibold text-blue-700">berkarakter</span>,
                            <span class="font-semibold text-blue-700">berprestasi</span>, dan
                            <span class="font-semibold text-blue-700">berakhlak mulia</span>.
                        </p>
                        
                        <p>
                            Terima kasih atas dukungan seluruh pihak yang telah berkontribusi terhadap kemajuan sekolah ini.
                            Semoga keberadaan website ini dapat menjadi media komunikasi dan informasi yang bermanfaat
                            bagi kita semua.
                        </p>

                        <!-- Closing -->
                        <div class="pt-4">
                            <p class="text-blue-900 font-semibold italic mb-4">
                                Wassalamu'alaikum Warahmatullahi Wabarakatuh
                            </p>
                            <p class="text-gray-600">Hormat kami,</p>
                            <p class="text-xl font-bold text-blue-900 mt-1">
                                Kepala Sekolah SDN 4 Jatilaba
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Identitas Kepala Sekolah -->
        <section class="bg-white rounded-lg shadow-md p-8">
            <div class="border-l-4 border-yellow-400 pl-4 mb-8">
                <h2 class="text-2xl font-bold text-blue-900">DATA KEPALA SEKOLAH</h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-x-12 gap-y-4">
                <div class="flex border-b border-gray-200 py-3">
                    <span class="font-semibold text-gray-700 w-48">Nama</span>
                    <span class="text-gray-600">: Sri Nurhayati, S.Pd.SD</span>
                </div>
                
                <div class="flex border-b border-gray-200 py-3">
                    <span class="font-semibold text-gray-700 w-48">Jabatan</span>
                    <span class="text-gray-600">: Kepala Sekolah</span>
                </div>
                
                <div class="flex border-b border-gray-200 py-3">
                    <span class="font-semibold text-gray-700 w-48">Pendidikan</span>
                    <span class="text-gray-600">: S1 Pendidikan Guru Sekolah Dasar</span>
                </div>
                
                <div class="flex border-b border-gray-200 py-3">
                    <span class="font-semibold text-gray-700 w-48">Masa Jabatan</span>
                    <span class="text-gray-600">: 2020 - Sekarang</span>
                </div>
                
                <div class="flex border-b border-gray-200 py-3">
                    <span class="font-semibold text-gray-700 w-48">Email</span>
                    <span class="text-gray-600">: sdnjatilaba4@gmail.com</span>
                </div>
                
                <div class="flex border-b border-gray-200 py-3">
                    <span class="font-semibold text-gray-700 w-48">Telepon</span>
                    <span class="text-gray-600">: (0283) 123456</span>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <x-footer />
</body>
</html>