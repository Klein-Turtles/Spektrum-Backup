@extends('layouts.app')


@push('styles')
@vite('resources/sass/pages/product/main_product.scss')

@section('title', 'Produk')

@section('content')
    <!-- Carousel Container -->
    <div class="carousel-container overflow-hidden position-relative">
        <div id="carouselExampleSlidesOnly" class="carousel slide d-none d-md-block" data-bs-ride="carousel"
            data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('/images/product-page.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption custom-caption">
                        <h2>Automatic Solar Panel</h2>
                        <p class="mb-0">Solusi Modern & Efisien untuk Berbagai Kebutuhan Industri</p>
                        <p class="price-highlight">Mulai dari Rp699.000 – Instalasi Cepat & Support Penuh</p>
                        <a class="btn btn-primary" href="contact.hmtl" type="button">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


         <!-- Search Bar and Category Dropdown Section -->
    <div class="search-dropdown-row">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 mb-3 mb-md-0">
                    <form action="{{ route('product') }}" method="GET" class="w-100">
                        <div class="search-box d-flex">
                            <i class="bi bi-search search-icon"></i>
                            <input type="text" class="form-control" name="q" placeholder="Cari produk terbaik disini!" value="{{ request('q') }}">
                            @if (request('kategori'))
                                <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                            @endif
                            <button class="btn btn-primary btn-search" type="submit">
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>  
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 mb-3 mb-md-0">
                    <div class="category-dropdown">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle w-100" type="button" id="categoryDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-funnel"></i> {{ request('kategori') ?? 'Semua Kategori' }}
                            </button>
                            <ul class="dropdown-menu w-100" aria-labelledby="categoryDropdown">                                                               <li>
                                    <a class="dropdown-item" href="{{ route('product') }}">
                                        Semua Kategori
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                @foreach ($kategorilist as $kategori)
                                    <li>
                                        <a class="dropdown-item" href="{{ route('product', ['kategori' => $kategori]) }}">
                                            {{ $kategori }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <!-- Trending Products Section HTML -->
    <section class="trending-products py-5 pt-3">
        <div class="container">
            <h2 class="category-title text-center mb-5">Produk Populer</h2>

            <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4" id="productContainer">
                <!-- Product Cards - Each card in its own column -->
                @foreach ($products as $product)
                <div class="col service-item" data-category="{{ $product->kategori }}" data-name="{{ strtolower($product->nama) }}">
                    <div class="product-card h-100">
                        <div class="position-relative">
                            {{-- <span class="badge bg-primary discount-badge">13% Off</span> --}}
                            <img src="{{ asset('storage/' . $product->gambar)}}" class="card-img-top product-img" loading="lazy"
                                alt="{{ $product->nama }}">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h3 class="product-name category-name">{{ $product->nama }}</h3>
                            <h4 style="font-size: 15px">{{ $product->kategori }}</h4>
                            <div class="price-container">
                                <span class="fs-5 font-weight-bold">{{ number_format($product->harga, 0, ',', '.')  }}</span>
                            </div>
                            <a href="{{ route('detail-product', $product->slug) }}" class="btn btn-primary buy-now-btn mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        <div class="d-flex justify-content-center mt-4">
        {!! $products->links() !!}
        </div>
    </div>
</section>

    
@endsection
