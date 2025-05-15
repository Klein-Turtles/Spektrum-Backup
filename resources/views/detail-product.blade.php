@extends('layouts.app')

@push('styles')
@vite('resources/sass/pages/portofolio/detail-porto.scss')
@endpush

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
      <div class="project-meta py-3">
        <div class="meta-item ">
          <div class="meta-label">Harga</div>
          <div class="meta-value">{{ $layanan->harga ?? 'No client available.'}}</div>
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
    <div class="product-intro">{{ $layanan->deskripsi?? 'ninuninuninu' }}</div>
   </div>

            
</div>

@endsection
