<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas Sekolah</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased">
    <nav class="bg-blue-600 text-white p-4 text-center font-semibold">
        <a href="{{ route('beranda') }}" class="hover:underline">Beranda</a> |
        <a href="{{ route('fasilitas.index') }}" class="hover:underline">Fasilitas</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
