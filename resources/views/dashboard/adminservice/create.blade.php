@extends('layouts.admin')

@section('title', 'Input Services')

@section('content')
<div class="container mt-5">
    <h1 class="h3 mb-4">Insert Service</h1>

    <form action="{{ route('service_store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">harga</label>
            <textarea name="harga" id="harga" class="form-control"  required></textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" id="kategori" class="form-select" required>
                @foreach ($kategori as $cat)
                    <option value="{{ $cat }}">{{ $cat }}</option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
