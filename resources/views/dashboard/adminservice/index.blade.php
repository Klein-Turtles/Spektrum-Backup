@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Daftar Layanan</h1>
        <a href="{{ route('services.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Tambah Layanan
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($services as $service)
        <div class="bg-white shadow p-4 rounded">
            <img src="{{ asset('storage/' . $service->gambar) }}" alt="{{ $service->judul }}" class="w-full h-48 object-cover mb-2 rounded">
            <h2 class="text-xl font-semibold">{{ $service->judul }}</h2>
            <p class="text-gray-600 text-sm">{{ $service->deskripsi }}</p>
            <p class="text-sm text-blue-600 mt-2">Kategori: {{ $service->category_name }}</p>
            <div class="mt-4 flex gap-2">
                <a href="{{ route('services.edit', $service->id) }}" class="text-white bg-yellow-500 px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                <form action="{{ route('services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus layanan ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white bg-red-500 px-3 py-1 rounded hover:bg-red-600">Hapus</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $services->links() }}
    </div>
</div>
@endsection
