@extends('layouts.app')

@push('styles')
@vite('resources/sass/pages/product/main_product.scss')
<style>
/* Additional styles for the new elements */
.search-dropdown-row {
    background-color: #f8f9fa;
    padding: 15px 0;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.search-box {
    position: relative;
}

.search-box .form-control {
    padding-left: 40px;
    border-radius: 25px;
    border: 2px solid #e0e0e0;
    padding-right: 60px;
    height: 50px;
    font-size: 1rem;
}

.search-box .search-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #6c757d;
    font-size: 1.1rem;
}

.search-box .btn-search {
    position: absolute;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
    border-radius: 20px;
    padding: 6px 12px;
}

.category-dropdown .dropdown-toggle {
    border-radius: 25px;
    padding: 12px 20px;
    background-color: white;
    border: 2px solid #e0e0e0;
    height: 50px;
    display: flex;
    align-items: center;
    font-size: 1rem;
}

/* Custom carousel caption positioning */
.custom-caption {
    text-align: left;
    left: 5%;
    right: auto;
    bottom: auto;
    top: 50%;
    transform: translateY(-50%);
    max-width: 45%;
}

@media (max-width: 768px) {
    .custom-caption {
        left: 3%;
        max-width: 90%;
        top: 60%;
    }
    
    .custom-caption h2 {
        font-size: 1.8rem;
    }
    
    .custom-caption p {
        font-size: 1rem;
    }
}
</style>
@endpush

@section('content')
    <!-- Search Bar and Category Dropdown Section -->
    <div class="search-dropdown-row">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 mb-3 mb-md-0">
                    <div class="search-box">
                        <i class="bi bi-search search-icon"></i>
                        <input type="text" class="form-control" id="searchInput" placeholder="Cari layanan terbaik disini!">
                        <button class="btn btn-primary btn-search" type="button" id="searchBtn">
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mb-3 mb-md-0">
                    <div class="category-dropdown">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle w-100" type="button" id="categoryDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-funnel"></i> Pilih Kategori
                            </button>
                            <ul class="dropdown-menu w-100" aria-labelledby="categoryDropdown">
                                <li><a class="dropdown-item" href="#" data-category="sistem">Internet Of Things</a></li>
                                <li><a class="dropdown-item" href="#" data-category="nutrisi">Industrial Automatic Controls</a></li>
                                <li><a class="dropdown-item" href="#" data-category="peralatan">3D Printing</a></li>
                                <li><a class="dropdown-item" href="#" data-category="konsultasi">Robotics</a></li>
                                <li><a class="dropdown-item" href="#" data-category="konsultasi">Renewable Energy</a></li>
                                <li><a class="dropdown-item" href="#" data-category="konsultasi">Lasser Cutting</a></li>
                                <li><a class="dropdown-item" href="#" data-category="konsultasi">Tech Farm</a></li>
                                <li><a class="dropdown-item" href="#" data-category="konsultasi">Workshop IoT</a></li>
                                <li><a class="dropdown-item" href="#" data-category="all">Semua Kategori</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Trending Products Section HTML -->
    <section class="trending-products py-5 pt-3">
        <div class="container">
            <h2 class="category-title text-center mb-5">Layanan Populer Kami</h2>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4" id="productContainer">
                <!-- Product Cards - Each card in its own column -->
                @foreach ($layananPerKategori as $layanan)
                <div class="col service-item" data-category="{{ $layanan->kategori }}" data-name="{{ strtolower($layanan->nama) }}">
                    <div class="product-card h-100">
                        <div class="position-relative">
                            <span class="badge bg-primary discount-badge">13% Off</span>
                            <img src="{{ asset('storage/' . $layanan->gambar)}}" class="card-img-top product-img"
                                alt="{{ $layanan->nama }}">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h3 class="product-name category-name">{{ $layanan->nama }}</h3>
                            <div class="price-container">
                                <span class="fs-5 font-weight-bold">{{ $layanan->harga }}</span>
                            </div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <a href="{{ route('detail-service', $layanan->slug) }}" class="btn btn-primary buy-now-btn mt-auto">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        // Search functionality
        document.getElementById('searchBtn').addEventListener('click', function() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            filterServices();
        });

        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                filterServices();
            }
        });

        // Category filter functionality
        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const category = this.dataset.category;
                document.getElementById('categoryDropdown').textContent = this.textContent;
                filterServices();
            });
        });

        function filterServices() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const selectedCategory = document.getElementById('categoryDropdown').textContent.toLowerCase();
            const serviceItems = document.querySelectorAll('.service-item');

            serviceItems.forEach(item => {
                const itemName = item.dataset.name;
                const itemCategory = item.dataset.category;
                
                const matchesSearch = searchTerm === '' || itemName.includes(searchTerm);
                const matchesCategory = selectedCategory === 'pilih kategori' || 
                                      selectedCategory === 'semua kategori' || 
                                      itemCategory === selectedCategory;

                if (matchesSearch && matchesCategory) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
@endsection