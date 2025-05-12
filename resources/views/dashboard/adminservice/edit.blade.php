@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto max-w-xl">
    <h1 class="text-2xl font-bold mb-4">Edit Layanan</h1>

    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="judul" class="block font-medium">Judul</label>
            <input type="text" name="judul" class="w-full p-2 border rounded" value="{{ $service->judul }}" required>
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block font-medium">Deskripsi</label>
            <textarea name="deskripsi" class="w-full p-2 border rounded" rows="4" required>{{ $service->deskripsi }}</textarea>
        </div>

        <div class="mb-4">
            <label for="gambar" class="block font-medium">Gambar</label>
            <input type="file" name="gambar" class="w-full">
            @if ($service->gambar)
                <img src="{{ asset('storage/' . $service->gambar) }}" class="w-32 mt-2 rounded">
            @endif
        </div>

        <div class="mb-4">
            <label for="category_id" class="block font-medium">Kategori</label>
            <select name="category_id" class="w-full p-2 border rounded" required>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $service->category_id == $cat->id ? 'selected' : '' }}>
                        {{ $cat->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="discount" class="block font-medium">Diskon (%)</label>
            <input type="number" name="discount" class="w-full p-2 border rounded" value="{{ $service->discount }}">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
    </form>
</div>
@endsection
