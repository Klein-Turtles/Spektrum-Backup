@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
    <h2>Tambah Portofolio</h2>

    <form action="{{ route('update_porto',$portofolio->id) }}" method="POST" enctype="multipart/form-data">
        @csrf        
        @method('PUT')
        <div class="form-group mb-3">
            <label for="nama" class="form-label">Nama Portofolio : </label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama',$portofolio->nama) }}" required>
            @error('nama')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="deskripsi_singkat_singkat" class="form-label">Deskripsi Singkat (2-3 Kalimat) : </label>
            <textarea class="form-control" id="deskripsi_singkat" name="deskripsi_singkat" rows="4" required>{{ old('deskripsi_singkat',$portofolio->deskripsi_singkat) }}</textarea>
            @error('deskripsi_singkat')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="deskripsi" class="form-label">Deskripsi : </label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ old('deskripsi',$portofolio->deskripsi) }}</textarea>
            @error('deskripsi')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="client" class="form-label">Client : </label>
            <input type="text" class="form-control" id="client" name="client" value="{{ old('client',$portofolio->client) }}" required>
            @error('client')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="tahun" class="form-label">Tahun : </label>
            <input type="number" class="form-control" id="tahun" name="tahun" value="{{ old('tahun',$portofolio->tahun) }}" required>
            @error('tahun')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="spesifikasi" class="form-label">Spesifikasi : </label>
            <textarea class="form-control" id="spesifikasi" name="spesifikasi" rows="4" required>{{ old('spesifikasi',$portofolio->spesifikasi) }}</textarea>
            @error('spesifikasi')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="gambar" class="form-label">Gambar : </label>
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" >
            @error('gambar')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Portofolio</button>
    </form>
</div>
@endsection
