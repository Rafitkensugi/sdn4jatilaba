@extends('layouts.app')

@section('title', 'Kelola Agenda')

@section('content')
<div class="max-w-6xl mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Daftar Agenda</h1>
        <a href="{{ route('admin.agenda.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            + Tambah Agenda
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white dark:bg-gray-800 rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-left">
                    <th class="p-3">Judul</th>
                    <th class="p-3">Tanggal</th>
                    <th class="p-3">Bulan</th>
                    <th class="p-3">Lokasi</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($agendas as $agenda)
                <tr class="border-t dark:border-gray-700">
                    <td class="p-3">{{ $agenda->judul }}</td>
                    <td class="p-3">{{ $agenda->tanggal->format('d M Y') }}</td>
                    <td class="p-3 capitalize">{{ $agenda->bulan }}</td>
                    <td class="p-3">{{ $agenda->lokasi }}</td>
                    <td class="p-3 flex gap-2">
                        <a href="{{ route('admin.agenda.edit', $agenda->id) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('admin.agenda.destroy', $agenda->id) }}" method="POST" onsubmit="return confirm('Hapus agenda ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
