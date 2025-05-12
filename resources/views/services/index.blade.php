@extends('layouts.app')

@push('styles')
@vite('resources/sass/pages/services/main-services.scss')
@endpush

@section('content')
    <!-- Carousel Container -->
    <div class="carousel-container overflow-hidden position-relative">
        <div id="carouselExampleSlidesOnly" class="carousel slide d-none d-md-block" data-bs-ride="carousel"
            data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('/images/service-page.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption custom-caption">
                        <h2>Automatic Hydroponic System</h2>
                        <p class="mb-0">Solusi pertanian cerdas untuk budidaya tanaman yang efisien dan berkelanjutan.
                            Kontrol otomatis untuk penyiraman, pencahayaan, dan nutrisi — cocok untuk industri pertanian
                            modern.</p>
                        <p class="price-highlight">Mulai dari Rp399.000 – Dukung Pertanian Cerdas Modern</p>
                        <a class="btn btn-primary" href="contact.hmtl" type="button">Booking Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="category-section bg-white mb-0">
        <div class="container">
            <div class="row">
                <!-- Kolom kiri untuk teks heading -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <a href="#"
                        class="text-decoration-none text-uppercase fw-bold text-primary mb-3 d-block">KATEGORI</a>
                    <h2 class="category-title text-start mb-0">Cari Kategori Layanan</h2>
                    <p class="category-subtitle text-start">Menyediakan berbagai layanan teknologi terkini untuk
                        kebutuhan industri dan pendidikan.</p>

                    <!-- Tombol navigasi -->
                    <div class="d-flex mt-4">
                        <button id="prevBtn" class="nav-btn me-2">
                            <i class="fas fa-arrow-left"></i>
                        </button>
                        <button id="nextBtn" class="nav-btn">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Kolom kanan untuk kartu kategori -->
                <div class="col-lg-8">
                    <div class="row category-container">
                        <!-- IoT  -->
                        <div class="col-6 col-md-3 mb-4 category-item">
                            <div class="card category-card">
                                <div class="category-img-container">
                                    <img src="{{ url('/images/categories-services/services/wifi.png')}}" alt="Internet of Things"
                                        class="category-img">
                                </div>
                                <div class="category-info">
                                    <h3 class="category-name">Internet of Things</h3>
                                    <p class="product-count">{{ $categories->where('name', 'Internet of Things')->first()->services_count ?? 0 }} Produk</p>
                                </div>
                            </div>
                        </div>

                        <!-- Perangkat Industri -->
                        <div class="col-6 col-md-3 mb-4 category-item">
                            <div class="card category-card">
                                <div class="category-img-container">
                                    <img src="{{ url('/images/categories-services/services/plc.png')}}" alt="Industrial Automatic Control"
                                        class="category-img">
                                </div>
                                <div class="category-info">
                                    <h3 class="category-name">Industrial Automatic Control</h3>
                                    <p class="product-count">{{ $categories->where('name', 'Industrial Automatic Control')->first()->services_count ?? 0 }} Produk</p>
                                </div>
                            </div>
                        </div>

                        <!-- Robotics -->
                        <div class="col-6 col-md-3 mb-4 category-item">
                            <div class="card category-card">
                                <div class="category-img-container">
                                    <img src="{{ url('/images/categories-services/services/drone.png')}}" alt="Robotics" class="category-img">
                                </div>
                                <div class="category-info">
                                    <h3 class="category-name">Robotics</h3>
                                    <p class="product-count">{{ $categories->where('name', 'Robotics')->first()->services_count ?? 0 }} Produk</p>
                                </div>
                            </div>
                        </div>

                        <!-- 3D Printing -->
                        <div class="col-6 col-md-3 mb-4 category-item">
                            <div class="card category-card">
                                <div class="category-img-container">
                                    <img src="{{ url('/images/categories-services/services/education.png')}}" alt="3D Printing"
                                        class="category-img">
                                </div>
                                <div class="category-info">
                                    <h3 class="category-name">3D Printing</h3>
                                    <p class="product-count">{{ $categories->where('name', '3D Printing')->first()->services_count ?? 0 }} Produk</p>
                                </div>
                            </div>
                        </div>

                        <!-- Renewable Energy -->
                        <div class="col-6 col-md-3 mb-4 category-item">
                            <div class="card category-card">
                                <div class="category-img-container">
                                    <img src="{{ url('/images/categories-services/services/education.png')}}" alt="Renewable Energy"
                                        class="category-img">
                                </div>
                                <div class="category-info">
                                    <h3 class="category-name">Renewable Energy</h3>
                                    <p class="product-count">{{ $categories->where('name', 'Renewable Energy')->first()->services_count ?? 0 }} Produk</p>
                                </div>
                            </div>
                        </div>

                        <!-- Lasser Cutting -->
                        <div class="col-6 col-md-3 mb-4 category-item">
                            <div class="card category-card">
                                <div class="category-img-container">
                                    <img src="{{ url('/images/categories-services/services/education.png')}}" alt="Lasser Cutting"
                                        class="category-img">
                                </div>
                                <div class="category-info">
                                    <h3 class="category-name">Lasser Cutting</h3>
                                    <p class="product-count">{{ $categories->where('name', 'Lasser Cutting')->first()->services_count ?? 0 }} Produk</p>
                                </div>
                            </div>
                        </div>

                        <!-- Tech Farm -->
                        <div class="col-6 col-md-3 mb-4 category-item">
                            <div class="card category-card">
                                <div class="category-img-container">
                                    <img src="{{ url('/images/categories-services/services/education.png')}}" alt="Tech Farm"
                                        class="category-img">
                                </div>
                                <div class="category-info">
                                    <h3 class="category-name">Tech Farm</h3>
                                    <p class="product-count">{{ $categories->where('name', 'Tech Farm')->first()->services_count ?? 0 }} Produk</p>
                                </div>
                            </div>
                        </div>

                        <!-- IoT Training -->
                        <div class="col-6 col-md-3 mb-4 category-item">
                            <div class="card category-card">
                                <div class="category-img-container">
                                    <img src="{{ url('/images/categories-services/services/education.png')}}" alt="IoT Training"
                                        class="category-img">
                                </div>
                                <div class="category-info">
                                    <h3 class="category-name">IoT Training</h3>
                                    <p class="product-count">{{ $categories->where('name', 'IoT Training')->first()->services_count ?? 0 }} Produk</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trending Products Section HTML -->
    <section class="trending-products py-5 pt-3">
        <div class="container">
            <h2 class="category-title text-start mb-0 text-center mb-5">Layanan Populer Kami</h2>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                @foreach($services as $service)
                <div class="col">
                    <div class="product-card h-100">
                        <div class="position-relative">
                            @if($service->discount > 0)
                            <span class="badge bg-primary discount-badge">{{ $service->discount }}% Off</span>
                            @endif
                            <img src="{{ asset('storage/' . $service->gambar) }}" class="card-img-top product-img"
                                alt="{{ $service->nama }}">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h3 class="product-name category-name">{{ $service->nama }}</h3>
                            <div class="price-container">
                                @if($service->discount > 0)
                                <span class="original-price">Rp{{ number_format($service->harga, 0, ',', '.') }}</span>
                                <span class="current-price">Rp{{ number_format($service->harga - ($service->harga * $service->discount / 100), 0, ',', '.') }}</span>
                                @else
                                <span class="current-price">Rp{{ number_format($service->harga, 0, ',', '.') }}</span>
                                @endif
                            </div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <a href="{{ route('services.detail', $service->id) }}" class="btn btn-primary buy-now-btn mt-auto">
                                {{ $service->status == 'pre-order' ? 'Pre Order' : 'Lihat Detail' }}
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {!! $services->links() !!}
    </div>
@endsection