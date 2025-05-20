@extends('layouts.app')

@push('styles')
    @vite('resources/sass/pages/portofolio/portofolio.scss')
@endpush

@section('title', 'Portofolio')

@section('content')

    <!-- Carousel Container -->
<div class="carousel-container overflow-hidden position-relative">
        <div id="carouselExampleSlidesOnly" class="carousel slide d-none d-md-block" data-bs-ride="carousel"
            data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('/images/portofolio-page.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption custom-caption">
                        <h2>Portofolio Spektrum Teknologi</h2>
                        <p class="mb-0">Lihat berbagai proyek inovatif yang telah kami kembangkan. Dari sistem hidroponik otomatis hingga solusi IoT, kami bangga telah membantu klien mewujudkan visi teknologi mereka dengan hasil yang terukur dan berkelanjutan.</p>
                        <p class="price-highlight">Lebih dari 50+ proyek sukses telah diselesaikan sejak 2019</p>
                        <a class="btn btn-primary" href="https://wa.me/085730220374" type="button">Konsultasi Gratis</a>
                    </div>
                </div>
            </div>
        </div>
</div>


<div class="container">
        <h2 class="category-title text-center mt-5 mb-1">Portofolio Kami</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        @foreach ($portofolio as $porto)
            <div class="col">
                <a href="{{ route('detail-porto', $porto->slug) }}" class="portfolio-card-link">
                    <div class="portfolio-card">
                        <div class="portfolio-img-container">
                            <img src="{{ asset('storage/' . $porto->gambar) }}" class="portfolio-img" loading="lazy"
                             alt="{{ $porto->nama }}">
                        </div>
                        <div class="portfolio-info">
                            <h3 class="portfolio-title">{{ $porto->nama }}</h3>
                            {{-- <p class="portfolio-subtitle">{{ $produk->deskripsi ?? '-' }}</p> --}}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>


<div class="d-flex justify-content-center mt-4">
        {!! $portofolio->links() !!}
</div>

@endsection
