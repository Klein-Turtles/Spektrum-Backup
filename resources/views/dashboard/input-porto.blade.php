@extends('layouts.admin')

@section('title', 'Input Portofolio')

@section('content')
    <div class="container mt-5">
    <h2>Tambah Portofolio</h2>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    <form action="{{ route('porto_store') }}" method="POST" enctype="multipart/form-data">
        @csrf        
        <div class="form-group mb-3">
            <label for="nama" class="form-label">Nama Portofolio : </label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
            @error('nama')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="deskripsi_singkat_singkat" class="form-label">Deskripsi Singkat (2-3 Kalimat) : </label>
            <textarea class="form-control" id="deskripsi_singkat" name="deskripsi_singkat" rows="4" required>{{ old('deskripsi_singkat') }}</textarea>
            @error('deskripsi_singkat')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="deskripsi" class="form-label">Deskripsi : </label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="client" class="form-label">Client : </label>
            <input type="text" class="form-control" id="client" name="client" value="{{ old('client') }}" required>
            @error('client')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="tahun" class="form-label">Tahun : </label>
            <input type="number" class="form-control" id="tahun" name="tahun" value="{{ old('tahun') }}" required>
            @error('tahun')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="spesifikasi" class="form-label">Spesifikasi : </label>
            <textarea class="form-control" id="spesifikasi" name="spesifikasi" rows="4" required>{{ old('spesifikasi') }}</textarea>
            @error('spesifikasi')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="gambar" class="form-label">Gambar : </label>
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
            @error('gambar')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-3">Tambah Portofolio</button>
    </form>
</div>
@endsection
