<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas Sekolah</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-100">
    <x-navbar />
    <main>
        @yield('content')
    </main>
    <x-footer />
</body>
</html>
