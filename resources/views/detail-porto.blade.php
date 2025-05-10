@extends('layouts.app')

@push('styles')
@vite('resources/sass/pages/portofolio/detail-porto.scss')
@endpush

@section('content')
<div class="portfolio-container">
  <!-- Back navigation -->
  <div class="back-navigation">
    <a href="{{ route('portofolio') }}"><i class="fas fa-arrow-left"></i> Back to Portfolio</a>
  </div>
  

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
      <h1 class="project-title">{{ $portofolio->nama }}</h1>
      <div class="project-description">
        <p>{{ $portofolio->deskripsi ?? 'No description available.' }}</p>
      </div>

      <div class="project-meta">
        <div class="meta-item">
          <div class="meta-label">Client</div>
          <div class="meta-value">GlobalBank Financial Services</div>
        </div>
        
        <div class="meta-item">
          <div class="meta-label">Year</div>
          <div class="meta-value">2024</div>
        </div>
        
      </div>      
    </div>
  </div>

@endsection