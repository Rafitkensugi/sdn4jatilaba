@extends('layouts.app')

@section('title', 'Dashboard Admin')
@section('header', 'Selamat Datang di Dashboard Admin')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

    <!-- Card 1 -->
    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-lg font-semibold">Total Berita</h3>
        <p class="text-3xl font-bold text-blue-600 dark:text-blue-400 mt-2">{{ $totalBerita ?? 0 }}</p>
        <a href="{{ route('admin.berita.index') }}"
           class="text-sm text-blue-500 hover:underline mt-2 inline-block">Lihat semua</a>
    </div>

    <!-- Card 2 -->
    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-lg font-semibold">Total Pengumuman</h3>
        <p class="text-3xl font-bold text-blue-600 dark:text-blue-400 mt-2">{{ $totalPengumuman ?? 0 }}</p>
        <a href="{{ route('admin.pengumuman.index') }}"
           class="text-sm text-blue-500 hover:underline mt-2 inline-block">Lihat semua</a>
    </div>

    <!-- Card 3 -->
    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-lg font-semibold">Total SPMB</h3>
        <p class="text-3xl font-bold text-blue-600 dark:text-blue-400 mt-2">{{ $totalSPMB ?? 0 }}</p>
        <a href="{{ route('admin.spmb.index') }}"
           class="text-sm text-blue-500 hover:underline mt-2 inline-block">Lihat semua</a>
    </div>

</div>

<div class="mt-10 bg-white dark:bg-gray-800 p-6 rounded-2xl shadow">
    <h3 class="text-lg font-semibold mb-4">Aktivitas Terbaru</h3>
    <p class="text-gray-500 dark:text-gray-400">Belum ada aktivitas terbaru.</p>
</div>
@endsection
