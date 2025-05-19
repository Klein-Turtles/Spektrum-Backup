@extends('layouts.app')

@push('styles')
@vite('resources/sass/pages/portofolio/detail-porto.scss')
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
      @if ($portofolio->gambar)
        <img src="{{ asset('storage/' . $portofolio->gambar) }}" alt="{{ $portofolio->nama }}">
      @else
        <img src="{{ asset('images/default-project.png') }}" alt="Project Preview">
      @endif
  </div>  
  
  <div> <!-- Right column - Project Details -->
    <div class="project-details">
      <h1 class="project-title" >{{ $portofolio->nama }}</h1>
      <div class="project-description">
        <p>{{ $portofolio->deskripsi_singkat ?? 'No description available.' }}</p> 
      </div>

      <div class="project-meta">
        <div class="meta-item">
          <div class="meta-label">Client</div>
          <div class="meta-value">{{ $portofolio->client ?? 'No client available.'}}</div>
        </div>
        
        <div class="meta-item">
          <div class="meta-label">Year</div>
          <div class="meta-value">{{ $portofolio->tahun }}</div>
        </div>
      </div>      
    </div>
  </div>
</div>

<div class="container-detail">
  <div class="grid">
    <div class="cell">
      <h1>Deskripsi Produk</h1>
    </div>
            
  <div class="cell">
    <div class="product-intro">{{ $portofolio->deskripsi?? 'ninuninuninu' }}</div>
   </div>
            
  <div class="cell">
    <h1>Spesifikasi</h1>
  </div>
            
  <div class="cell">
    <div class="product-intro">
      <ul>
        @foreach(explode(',', $portofolio->spesifikasi) as $item)
          <li>{{ trim($item) }}</li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

@endsection
