@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto max-w-xl">
    <h1 class="text-2xl font-bold mb-4">Tambah Layanan Baru</h1>

    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="judul" class="block font-medium">Judul</label>
            <input type="text" name="judul" class="w-full p-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block font-medium">Deskripsi</label>
            <textarea name="deskripsi" class="w-full p-2 border rounded" rows="4" required></textarea>
        </div>

        <div class="mb-4">
            <label for="gambar" class="block font-medium">Gambar</label>
            <input type="file" name="gambar" class="w-full">
        </div>

        <div class="mb-4">
            <label for="category_id" class="block font-medium">Kategori</label>
            <select name="category_id" class="w-full p-2 border rounded" required>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="discount" class="block font-medium">Diskon (%)</label>
            <input type="number" name="discount" class="w-full p-2 border rounded" value="0">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
    </form>
</div>
@endsection
