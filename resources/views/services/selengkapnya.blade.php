@extends('layouts.app')

@push('styles')
@vite('resources/sass/pages/product/main_product.scss')

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
                                    <img src="{{ url('/images/categories-services/wifi.png')}}" alt="Internet of Things"
                                        class="category-img">
                                </div>
                                <div class="category-info">
                                    <h3 class="category-name">Internet of Things</h3>
                                    <p class="product-count">6 Produk</p>
                                </div>
                            </div>
                        </div>

                        <!-- Perangkat Industri -->
                        <div class="col-6 col-md-3 mb-4 category-item">
                            <div class="card category-card">
                                <div class="category-img-container">
                                    <img src="{{ url('/images/categories-services/plc.png')}}" alt="Industrial Automatic Control"
                                        class="category-img">
                                </div>
                                <div class="category-info">
                                    <h3 class="category-name">Industrial Automatic Control</h3>
                                    <p class="product-count">8 Produk</p>
                                </div>
                            </div>
                        </div>

                        <!-- Robotics -->
                        <div class="col-6 col-md-3 mb-4 category-item">
                            <div class="card category-card">
                                <div class="category-img-container">
                                    <img src="{{ url('/images/categories-services/drone.png')}}" alt="Robotics" class="category-img">
                                </div>
                                <div class="category-info">
                                    <h3 class="category-name">Robotics</h3>
                                    <p class="product-count">4 Produk</p>
                                </div>
                            </div>
                        </div>

                        <!-- 3D Printing -->
                        <div class="col-6 col-md-3 mb-4 category-item">
                            <div class="card category-card">
                                <div class="category-img-container">
                                    <img src="{{ url('/images/categories-services/education.png')}}" alt="3D Printing"
                                        class="category-img">
                                </div>
                                <div class="category-info">
                                    <h3 class="category-name">3D Printing</h3>
                                    <p class="product-count">5 Produk</p>
                                </div>
                            </div>
                        </div>

                        <!-- Renewable Energy -->
                        <div class="col-6 col-md-3 mb-4 category-item">
                            <div class="card category-card">
                                <div class="category-img-container">
                                    <img src="{{ url('/images/categories-services/education.png')}}" alt="Renewable Energy"
                                        class="category-img">
                                </div>
                                <div class="category-info">
                                    <h3 class="category-name">Renewable Energy</h3>
                                    <p class="product-count">5 Produk</p>
                                </div>
                            </div>
                        </div>

                        <!-- Lasser Cutting -->
                        <div class="col-6 col-md-3 mb-4 category-item">
                            <div class="card category-card">
                                <div class="category-img-container">
                                    <img src="{{ url('/images/categories-services/education.png')}}" alt="Lasser Cutting"
                                        class="category-img">
                                </div>
                                <div class="category-info">
                                    <h3 class="category-name">Lasser Cutting</h3>
                                    <p class="product-count">5 Produk</p>
                                </div>
                            </div>
                        </div>

                        <!-- Tech Farm -->
                        <div class="col-6 col-md-3 mb-4 category-item">
                            <div class="card category-card">
                                <div class="category-img-container">
                                    <img src="{{ url('/images/categories-services/education.png')}}" alt="Tech Farm"
                                        class="category-img">
                                </div>
                                <div class="category-info">
                                    <h3 class="category-name">Tech Farm</h3>
                                    <p class="product-count">5 Produk</p>
                                </div>
                            </div>
                        </div>

                        <!-- IoT Training -->
                        <div class="col-6 col-md-3 mb-4 category-item">
                            <div class="card category-card">
                                <div class="category-img-container">
                                    <img src="{{ url('/images/categories-services/education.png')}}" alt="IoT Training"
                                        class="category-img">
                                </div>
                                <div class="category-info">
                                    <h3 class="category-name">IoT Training</h3>
                                    <p class="product-count">5 Produk</p>
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
                <!-- Product 1 -->
                <div class="col">
                    <div class="product-card h-100">
                        <div class="position-relative">
                            <span class="badge bg-primary discount-badge">13% Off</span>
                            <img src="{{ url('/images/categories-services/services/mg90s-servo.png')}}" class="card-img-top product-img"
                                alt="mg90s-servo">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h3 class="product-name category-name">MG 90S Servo Metal</h3>
                            <div class="price-container">
                                <span class="original-price">Rp51.500</span>
                                <span class="current-price">Rp33.000</span>
                            </div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <button class="btn btn-primary buy-now-btn mt-auto">Pre Order</button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col">
                    <div class="product-card h-100">
                        <div class="position-relative">
                            <!-- <span class="badge bg-primary discount-badge">17% Off</span> -->
                            <img src="{{ url('/images/categories-services/services/adapter-ic-TQFP32-1.png')}}" class="card-img-top product-img"
                                alt="adapter-ic-TQFP32">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h3 class="product-name category-name">Adapter IC Programmer Chip Test Socket Burning TQFP32
                            </h3>
                            <div class="price-container">
                                <!-- <span class="original-price">Rp662.000</span> -->
                                <span class="current-price">Rp290.000</span>
                            </div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <button class="btn btn-primary buy-now-btn mt-auto">Buy Now</button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col">
                    <div class="product-card h-100">
                        <div class="position-relative">
                            <!-- <span class="badge bg-primary discount-badge">7% Off</span> -->
                            <img src="{{ url('/images/categories-services/services/bme230-humidity.png')}}" class="card-img-top product-img"
                                alt="bme230-humidity">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h3 class="product-name category-name">BME280 Humidity Sensor</h3>
                            <div class="price-container">
                                <!-- <span class="original-price">Rp1.200.000</span> -->
                                <span class="current-price">Rp210.000</span>
                            </div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <button class="btn btn-primary buy-now-btn mt-auto">Pre Order</button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col">
                    <div class="product-card h-100">
                        <div class="position-relative">
                            <span class="badge bg-primary discount-badge">26% Off</span>
                            <img src="{{ url('/images/categories-services/services/gas-sensor-tgs2600.png')}}" class="card-img-top product-img"
                                alt="gas-sensor-tgs2600">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h3 class="product-name category-name">GAS SENSOR TGS2600</h3>
                            <div class="price-container">
                                <span class="original-price">Rp400.000</span>
                                <span class="current-price">Rp350.000</span>
                            </div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <button class="btn btn-primary buy-now-btn mt-auto">Buy Now</button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col">
                    <div class="product-card h-100">
                        <div class="position-relative">
                            <span class="badge bg-primary discount-badge">26% Off</span>
                            <img src="{{ url('/images/categories-services/services/l298n-dual-motor-driver-module.png')}}"
                                class="card-img-top product-img" alt="gas-sensor-tgs2600">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h3 class="product-name category-name">L298N Dual Motor Driver Module</h3>
                            <div class="price-container">
                                <span class="original-price">Rp44.000</span>
                                <span class="current-price">Rp35.599</span>
                            </div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <button class="btn btn-primary buy-now-btn mt-auto">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection
