@extends('layouts.app')

@push('styles')
@vite('resources/sass/pages/product/detail-product.scss')
@endpush

@section('title', 'Detail Produk')

@section('content')
<div class="portfolio-container">

  <!-- Project Showcase -->
  <div class="project-showcase">
    <!-- Left column - Project Image/Laptop Mockup -->
    <div class="project-image">
      @if ($product->gambar)
        <img src="{{ asset('storage/' . $product->gambar) }}" alt="{{ $product->nama }}">
      @else
        <img src="{{ asset('images/default-project.png') }}" alt="Project Preview">
      @endif
  </div>  
  
  
  <div> <!-- Right column - Project Details -->
    <div class="project-details">
      <h1 class="project-title" >{{ $product->nama }}</h1>
      <h5 >{{ $product->kategori }}</h5>
      <p class="text-secondary mt-3">
      Falcon Pro V8 adalah drone mini profesional dengan kamera 4K, teknologi stabilisasi gyro, serta kemampuan terbang hingga 30 menit. Cocok untuk pemula maupun kreator konten.
      </p>
      <div class="project-meta py-3">
        <div class="meta-item ">
          <div class="meta-label">Harga</div>
          <div class="meta-value">{{ number_format($product->harga, 0, ',', '.') ?? 'No client available.'}}</div>
        </div>
      </div>      
    </div>
        <div>
            <button class="btn btn-primary">Pesan Disini</button>
        </div>
  </div>
</div>

<div class="container-detail">
  <div class="grid">
    <div class="cell">
      <h1>Deskripsi Produk</h1>
    </div>      
  <div class="cell">
    <div class="product-intro">      
      <ul>
        @foreach(explode(',', $product->deskripsi) as $item)
          <li>{{ trim($item) }}</li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

@endsection
