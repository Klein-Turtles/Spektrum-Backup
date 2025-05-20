@extends('layouts.app')

@push('styles')
@vite('resources/sass/pages/services/detail-services.scss')
@endpush

@section('title', 'Detail Portofolio')

@section('content')
<div class="portfolio-container">
  {{-- <!-- Back navigation -->
  <div class="back-navigation">
    <a href="{{ route('portofolio') }}"><i class="fas fa-arrow-left"></i> Back to Portfolio</a>
  </div> --}}
  

  <!-- Project Showcase -->
    <div class="project-showcase">
      <!-- Left column - Project Image/Laptop Mockup -->
      <div class="project-image">
        @if ($layanan->gambar)
          <img src="{{ asset('storage/' . $layanan->gambar) }}" alt="{{ $layanan->nama }}">
        @else
          <img src="{{ asset('images/default-project.png') }}" alt="Project Preview">
        @endif
    </div>  
    
    <div> <!-- Right column - Project Details -->
      <div class="project-details">
        <h1 class="project-title" >{{ $layanan->nama }}</h1>
        <h5 >{{ $layanan->kategori }}</h5>
        <p class="text-secondary mt-3">
         Falcon Pro V8 adalah drone mini profesional dengan kamera 4K, teknologi stabilisasi gyro, serta kemampuan terbang hingga 30 menit. Cocok untuk pemula maupun kreator konten. 
        </p>
        <div class="project-meta py-3">
          <div class="meta-item ">
            <div class="meta-label">Harga</div>
            <div class="meta-value">{{ number_format($layanan->harga, 0, ',', '.') ?? 'No client available.'}}</div>
          </div>
        </div>      
      </div>
          <div>
              @php
                  $pesan = "Halo, saya ingin memesan layanan $layanan->nama, apakah tersedia?";
                  $link = "https://wa.me/6285730220374?text=" . urlencode($pesan);   
              @endphp
                <a href="{{ $link }}" type="button" class="btn btn-primary">Pesan Disini</a>
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
        @foreach(explode(',', $layanan->deskripsi) as $item)
          <li>{{ trim($item) }}</li>
        @endforeach
      </ul>
    </div>
  </div>
  </div>

@endsection
