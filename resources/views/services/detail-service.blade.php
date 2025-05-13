{{-- Ini masi ngopi dari detail portofolio --}}

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
      <div class="">
        <p>{{ $layanan->kategori ?? 'No description available.' }}</p> 
      </div>
      <div class="project-description">
        <p>{{ $layanan->deskripsi ?? 'No description available.' }}</p> 
      </div>

      <div class="project-meta">
        <div class="meta-item">
          <div class="meta-label">Harga</div>
          <div class="meta-value">{{ $layanan->harga ?? 'No client available.'}}</div>
        </div>
        <div class="order-now">
          <a href="" class="meta-value btn btn-primary" type="button">Order Disini</a>
        </div>
      </div>      
    </div>
</div>

      

</div>

@endsection
