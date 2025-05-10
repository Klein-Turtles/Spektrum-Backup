@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Tambah Produk</h2>
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Produk</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" class="form-control" required>
                <option value="Elektronika & Sensor">Elektronika & Sensor</option>
                <option value="IoT & Otomasi">IoT & Otomasi</option>
                <option value="Perangkat Industri">Perangkat Industri</option>
                <option value="Energi Terbarukan">Energi Terbarukan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="diskon" class="form-label">Diskon (%)</label>
            <input type="number" name="diskon" class="form-control" placeholder="Misal: 13">
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Produk</label>
            <input type="file" name="gambar" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Produk</label>
            <textarea name="deskripsi" class="form-control" rows="4"></textarea>
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Produk</button>
    </form>
</div>
@endsection
