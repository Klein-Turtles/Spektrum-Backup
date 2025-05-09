@extends('layouts.app')

    @push('styles')
        @vite('resources/sass/pages/portofolio/portofolio.scss')
    @endpush

@section('content')
    <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        @foreach ($portofolio as $porto)
            <div class="col">
                <a href="{{ route('detail-porto', $porto->slug) }}" class="portfolio-card-link">
                    <div class="portfolio-card">
                        <div class="portfolio-img-container">
                            <img src="{{ asset('storage/' . $porto->gambar) }}" class="portfolio-img" alt="{{ $porto->nama }}">
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
