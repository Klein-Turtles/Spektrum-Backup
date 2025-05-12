@extends('layouts.app')

@push('styles')
@vite('resources/sass/pages/services/detail-service.scss')
@endpush

@section('content')
<div class="service-container">
  <!-- Back navigation -->
  <div class="back-navigation">
    <a href="{{ route('services.index') }}"><i class="fas fa-arrow-left"></i> Back to Services</a>
  </div>
  
  <!-- Service Showcase -->
  <div class="service-showcase">
    <!-- Left column - Service Image -->
    <div class="service-image">
      @if ($service->gambar)
        <img src="{{ asset('storage/' . $service->gambar) }}" alt="{{ $service->nama }}">
      @else
        <img src="{{ asset('images/default-service.png') }}" alt="Service Preview">
      @endif
    </div>  
    
    <!-- Right column - Service Details -->
    <div class="service-details">
      <h1 class="service-title">{{ $service->nama }}</h1>
      
      <!-- Price Section -->
      <div class="service-price">
        @if($service->discount > 0)
          <div class="price-container">
            <span class="original-price">Rp{{ number_format($service->harga, 0, ',', '.') }}</span>
            <span class="current-price">Rp{{ number_format($service->harga - ($service->harga * $service->discount / 100), 0, ',', '.') }}</span>
            <span class="discount-badge">{{ $service->discount }}% OFF</span>
          </div>
        @else
          <div class="current-price">Rp{{ number_format($service->harga, 0, ',', '.') }}</div>
        @endif
      </div>

      <!-- Service Description -->
      <div class="service-description">
        <h3>Deskripsi</h3>
        <p>{{ $service->deskripsi ?? 'Tidak ada deskripsi tersedia.' }}</p>
      </div>

      <!-- Service Specifications -->
      @if($service->spesifikasi)
      <div class="service-specifications">
        <h3>Spesifikasi</h3>
        <div class="spec-content">
          {!! nl2br(e($service->spesifikasi)) !!}
        </div>
      </div>
      @endif

      <!-- Service Meta Information -->
      <div class="service-meta">
        <div class="meta-item">
          <div class="meta-label">Kategori</div>
          <div class="meta-value">{{ $service->category->name ?? 'Tidak Dikategorikan' }}</div>
        </div>
        
        <div class="meta-item">
          <div class="meta-label">Status</div>
          <div class="meta-value">
            <span class="badge {{ $service->status == 'pre-order' ? 'bg-warning' : 'bg-success' }}">
              {{ $service->status == 'pre-order' ? 'Pre Order' : 'Available' }}
            </span>
          </div>
        </div>
      </div>

      <!-- Action Buttons -->
      <div class="service-actions">
        <button class="btn btn-primary btn-lg order-now-btn">
          <i class="fas fa-shopping-cart me-2"></i>
          {{ $service->status == 'pre-order' ? 'Pre Order Now' : 'Order Now' }}
        </button>
        <button class="btn btn-outline-primary btn-lg contact-btn">
          <i class="fas fa-phone me-2"></i>
          Hubungi Kami
        </button>
      </div>
    </div>
  </div>

  <!-- Related Services Section -->
  @if($relatedServices && $relatedServices->count() > 0)
  <div class="related-services">
    <h2>Layanan Terkait</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      @foreach($relatedServices as $related)
      <div class="col">
        <div class="service-card h-100">
          <div class="position-relative">
            @if($related->discount > 0)
            <span class="badge bg-primary discount-badge">{{ $related->discount }}% Off</span>
            @endif
            <img src="{{ asset('storage/' . $related->gambar) }}" class="card-img-top service-img"
                alt="{{ $related->nama }}">
          </div>
          <div class="card-body d-flex flex-column">
            <h3 class="service-name">{{ $related->nama }}</h3>
            <div class="price-container">
              @if($related->discount > 0)
              <span class="original-price">Rp{{ number_format($related->harga, 0, ',', '.') }}</span>
              <span class="current-price">Rp{{ number_format($related->harga - ($related->harga * $related->discount / 100), 0, ',', '.') }}</span>
              @else
              <span class="current-price">Rp{{ number_format($related->harga, 0, ',', '.') }}</span>
              @endif
            </div>
            <a href="{{ route('services.detail', $related->id) }}" class="btn btn-outline-primary mt-auto">Lihat Detail</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  @endif
</div>
@endsection