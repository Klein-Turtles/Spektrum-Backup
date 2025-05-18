@extends('layouts.app')

@push('styles')
    @vite('resources/sass/pages/home.scss')
@endpush

@section('title', 'Home')

@section('content')

<!-- Carousel Container -->
<div class="carousel-container overflow-hidden position-relative">
  <div id="carouselExampleSlidesOnly" class="carousel slide d-none d-md-block" data-bs-ride="carousel"
    data-bs-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ url('/images/solar-panel-home.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption custom-caption">
          <h2>CV. Spektrum Teknologi</h2>
          <p>Teknologi pintar bertemu energi bersih, membangun masa depan di mana inovasi menghadirkan kenyamanan,
            keberlanjutan, dan kehidupan yang lebih baik untuk semua.</p>
          <a class="btn btn-primary" href="contact.hmtl" type="button">Hubungi Kami</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ url('/images/drone-farm-home.png') }}" class="d-block w-100" alt="Drone Farm">
        <div class="carousel-caption custom-caption">
          <h2>Solusi Otomasi & Kendali Cerdas</h2>
          <p>Kami menghadirkan teknologi otomatisasi yang memudahkan operasional, meningkatkan efisiensi, dan
            mendukung produktivitas industri Anda.</p>
          <button class="btn btn-primary" type="button">Pelajari Lebih Lanjut</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ url('/images/lasser-cutting-home.png') }}" class="d-block w-100" alt="Lasser Cutting">
        <div class="carousel-caption custom-caption">
          <h2>Inovasi IoT untuk Masa Depan</h2>
          <p>Dari rumah pintar hingga sistem industri, kami mengembangkan solusi IoT yang terintegrasi, aman, dan siap
            menghadapi tantangan era digital.</p>
          <button class="btn btn-primary" type="button">Lihat Produk Kami</button>
        </div>
      </div>
    </div>
  </div>
</div> 

<section class="promo-section py-5 pt-3 bg-white">
  <div class="container text-center">
    <h2 class="promo-title">Promo Layanan Spektrum Teknologi</h2>
    <p class="promo-subtitle">Dapatkan diskon terbaik bulan ini!</p>
  
    <div class="poster-row">
      <div class="poster-card">
        <img src="{{ url('/images/promo-poster1-home.png') }}" alt="Promo Poster" class="promo-poster">
        <div class="poster-info">
          <h4>Promo Terbatas!</h4>
          <p>Transformasi bisnismu mulai sekarang</p>
          <button class="promo-button">Gunakan Sekarang</button>
        </div>
      </div>
      
  
      <div class="poster-card">
        <img src="{{ url('/images/promo-poster1-home.png') }}" alt="Promo Poster" class="promo-poster">
        <div class="poster-info">
          <h4>Diskon 30%</h4>
          <p>Untuk pemasangan awal<br>Periode Promo: Juni 2025</p>
          <button class="promo-button">Gunakan Sekarang</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section Offering -->
<!-- Section Offering dengan Person di Kanan -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="card card-offering">
      <div class="row g-0">
        <!-- Konten di kiri -->
        <div class="col-lg-7 d-flex align-items-center">
          <div class="card-body p-4 p-lg-5 position-relative text-center">
            <h2 class="mb-3">Solusi Digital Inovatif untuk Bisnis Anda</h2>
            <p class="mb-4">Kembangkan bisnis dengan layanan digital terbaik dari Spektrum Teknologi. Mulai dari
              pengembangan sistem IoT, Robotic, Tech Farm hingga integrasi AI – semua ada dalam satu solusi
              terpercaya!</p>
            <a href="https://wa.me/085730220374" class="btn btn-offering">Konsultasi Gratis</a>
          </div>
        </div>
        <div class="col-lg-5 position-relative">
          <div class="offering-bg-right"></div>
          <img src="{{ url('/images/offering-promo-home.png') }}" alt="Person" class="img-fluid position-relative" style="z-index: 1;">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section id="layanan-csr" class="py-5 bg-white">
  <div class="container ">
    <div class="text-center mb-4">
      <h2 class="fw-bold">Portofolio Kami</h2>
      <p class="text-secondary">Inilah rangkaian proyek unggulan yang menunjukkan kapabilitas kami dalam menghadirkan
        solusi teknologi yang inovatif dan berdampak nyata bagi berbagai sektor industri.</p>
    </div>
    <div class="row g-4">

      <!-- Card 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card-hover position-relative overflow-hidden rounded-4">
          <img src="{{ url('/images/categories-services/satelite-training-system.png') }}" class="w-100 h-100 object-fit-cover card-img">
          <span
            class="position-absolute top-50 start-50 translate-middle text-white px-3 py-2 rounded-3 fw-bold fs-5 text-nowrap text-bg">
            Satellite Training System
          </span>
          <div class="overlay d-flex align-items-center justify-content-center">
            <div class="overlay-bg text-white text-center px-4 py-3 rounded-4">
              <h5 class="fw-bold">Satellite Training System</h5>
              <p>Sistem pelatihan interaktif yang dirancang untuk membantu pengguna memahami cara kerja satelit
                melalui simulasi dan visualisasi data secara real-time.</p>
              <a href="#" class="btn btn-outline-light btn-sm">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="card-hover position-relative overflow-hidden rounded-4">
          <img src="{{ url('/images/categories-services/trainer-panel.png') }}" class="w-100 h-100 object-fit-cover card-img">
          <span
            class="position-absolute top-50 start-50 translate-middle text-white px-3 py-2 rounded-3 fw-bold fs-5 text-nowrap text-bg">
            Panel Training System
          </span>
          <div class="overlay d-flex align-items-center justify-content-center">
            <div class="overlay-bg text-white text-center px-4 py-3 rounded-4">
              <h5 class="fw-bold">Panel Training System</h5>
              <p>Sistem pelatihan interaktif yang dirancang untuk membantu pengguna memahami cara kerja Variable Speed
                Drive (VSD) dalam mengontrol motor 3 fasa melalui simulasi pengaturan kecepatan dan arah putaran
                secara real-time.</p>
              <a href="#" class="btn btn-outline-light btn-sm">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="card-hover position-relative overflow-hidden rounded-4">
          <img src="{{ url('/images/categories-services/smart-sorting-conveyor.png') }}" class="w-100 h-100 object-fit-cover card-img">
          <span
            class="position-absolute top-50 start-50 translate-middle text-white px-3 py-2 rounded-3 fw-bold fs-5 text-nowrap text-bg">
            Smart Sorting Conveyor Trainer
          </span>
          <div class="overlay d-flex align-items-center justify-content-center">
            <div class="overlay-bg text-white text-center px-4 py-3 rounded-4">
              <h5 class="fw-bold">Smart Sorting Conveyor Trainer</h5>
              <p>Sistem pelatihan interaktif yang menggunakan PLC dan pneumatik untuk mensimulasikan proses
                penyortiran otomatis. Trainer ini membantu pengguna memahami cara kerja konveyor, silinder, dan
                kontrol logika dalam otomasi industri.</p>
              <a href="#" class="btn btn-outline-light btn-sm">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="card-hover position-relative overflow-hidden rounded-4">
          <img src="{{ url('/images/categories-services/lift trainer.png') }}" class="w-100 h-100 object-fit-cover card-img">
          <span
            class="position-absolute top-50 start-50 translate-middle text-white px-3 py-2 rounded-3 fw-bold fs-5 text-nowrap text-bg">
            Lift Training System
          </span>
          <div class="overlay d-flex align-items-center justify-content-center">
            <div class="overlay-bg text-white text-center px-4 py-3 rounded-4">
              <h5 class="fw-bold">Lift Training System</h5>
              <p>Simulator elevator edukatif yang memadukan teori dan praktik dalam pemrograman sistem lift.
                Menyediakan pengalaman hands-on dalam pengoperasian, pemeliharaan, dan troubleshooting sistem
                elevator.</p>
              <a href="#" class="btn btn-outline-light btn-sm">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-md-6 col-lg-4">
        <div class="card-hover position-relative overflow-hidden rounded-4">
          <img src="{{ url('/images/categories-services/plc trainer.png') }}" class="w-100 h-100 object-fit-cover card-img">
          <span
            class="position-absolute top-50 start-50 translate-middle text-white px-3 py-2 rounded-3 fw-bold fs-5 text-nowrap text-bg">
            PLC Training System
          </span>
          <div class="overlay d-flex align-items-center justify-content-center">
            <div class="overlay-bg text-white text-center px-4 py-3 rounded-4">
              <h5 class="fw-bold">PLC Training System</h5>
              <p>Sistem pelatihan interaktif untuk mempelajari pemrograman dan aplikasi PLC dalam otomasi industri.
                Dirancang dengan modul praktis yang memungkinkan pengguna mengembangkan keterampilan kontrol logika
                secara langsung.</p>
              <a href="#" class="btn btn-outline-light btn-sm">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-md-6 col-lg-4">
        <div class="card-hover position-relative overflow-hidden rounded-4">
          <img src="{{ url('/images/categories-services/solar-panel.png') }}" class="w-100 h-100 object-fit-cover card-img">
          <span
            class="position-absolute top-50 start-50 translate-middle text-white px-3 py-2 rounded-3 fw-bold fs-5 text-nowrap text-bg">
            Solar Panel
          </span>
          <div class="overlay d-flex align-items-center justify-content-center">
            <div class="overlay-bg text-white text-center px-4 py-3 rounded-4">
              <h5 class="fw-bold">Solar Panel</h5>
              <p>Sistem panel surya yang dirancang untuk mengoptimalkan konversi energi matahari. Proyek ini
                mendemonstrasikan implementasi teknologi terbarukan dengan fokus pada efisiensi energi, pemantauan
                daya, dan integrasi dengan jaringan listrik.</p>
              <a href="#" class="btn btn-outline-light btn-sm">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center mt-4">
        <a href="{{ route('portofolio') }}" class="btn-selengkapnya-bottom">Selengkapnya <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Section Client -->
<div class="container py-5 bg-white">
  <div class="row">
    <div class="col-12">
      <h5 class="mb-4 text-center">Telah Dipercaya Oleh Beberapa Perusahaan Ternama</h5>
    </div>
  </div>

  <div class="row justify-content-center">
    <!-- Logo 1 -->
    <div class="col-md-4 col-lg-2 col-6 mb-4 d-flex justify-content-center">
      <img src="{{ url('/images/logo-nasa.svg') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
    </div>

    <!-- Logo 2 -->
    <div class="col-md-4 col-lg-2 col-6 mb-4 d-flex justify-content-center">
      <img src="{{ url('/images/logo-jatimpark.svg') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
    </div>

    <!-- Logo 3 -->
    <div class="col-md-4 col-lg-2 col-6 mb-4 d-flex justify-content-center">
      <img src="{{ url('/images/logo-um.svg') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
    </div>

    <!-- Logo 4 -->
    <div class="col-md-4 col-lg-2 col-6 mb-4 d-flex justify-content-center">
      <img src="{{ url('/images/logo-indigospace.png') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
    </div>

    <!-- Logo 5 -->
    <div class="col-md-4 col-lg-2 col-6 mb-4 d-flex justify-content-center">
      <img src="{{ url('/images/logo-asjk.png') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
    </div>

    <!-- Logo 6 -->
    <div class="col-md-4 col-lg-2 col-6 mb-4 d-flex justify-content-center">
      <img src="{{ url('/images/logo-drt.png') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
    </div>
  </div>
</div>

{{-- <!-- Section Testimonials -->
<section class="testimonials bg-white">
  <div class="container py-5">
    <div class="tagembed-widget" style="width:100%;height:100%" data-widget-id="2166922" data-tags="false"
      view-url="https://widget.tagembed.com/2166922"></div>
  </div>
</section> --}}

<div class="container">
    <div class="header">
        <div>
            <h1 class="page-title">F.A.Q</h1>
            <p class="page-subtitle">Temukan jawaban untuk pertanyaan umum tentang layanan dan profil CV. Spektrum Teknologi</p>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="banner">
            <img src="/images/about/hah.jpg" alt="CV. Spektrum Teknologi" class="banner-image">
        </div>
        
        <div class="faq-container">
            <div class="faq-list" x-data="{ activeAccordion: 0 }">
                <div class="faq-item">
                    <div class="faq-question" :class="{ 'active': activeAccordion === 1 }" @click="activeAccordion = activeAccordion === 1 ? null : 1">
                        <div class="question-content">
                            <span class="faq-number">01</span>
                            <span class="question-text">Apa bidang usaha utama CV. Spektrum Teknologi?</span>
                        </div>
                        <div class="faq-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer" x-show="activeAccordion === 1" x-collapse>
                        CV. Spektrum Teknologi bergerak dalam bidang Internet of Things (IoT), Robotika, dan Renewable Energy. Perusahaan ini melayani pengerjaan proyek dan pembuatan produk-produk berbasis IoT, robotika untuk pabrik dan program pendidikan, serta pemasangan instalasi Pembangkit Listrik Tenaga Surya (PLTS).
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" :class="{ 'active': activeAccordion === 2 }" @click="activeAccordion = activeAccordion === 2 ? null : 2">
                        <div class="question-content">
                            <span class="faq-number">02</span>
                            <span class="question-text">Kapan CV. Spektrum Teknologi didirikan?</span>
                        </div>
                        <div class="faq-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer" x-show="activeAccordion === 2" x-collapse>
                        CV. Spektrum Teknologi didirikan pada tanggal 20 Februari 2019 dan beralamat di Jalan Bantaran Indah Blok A No.14A, Kelurahan Tulusrejo, Kecamatan Lowokwaru, Kota Malang, Jawa Timur 65141.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" :class="{ 'active': activeAccordion === 3 }" @click="activeAccordion = activeAccordion === 3 ? null : 3">
                        <div class="question-content">
                            <span class="faq-number">03</span>
                            <span class="question-text">Apa saja layanan yang ditawarkan oleh CV. Spektrum Teknologi?</span>
                        </div>
                        <div class="faq-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer" x-show="activeAccordion === 3" x-collapse>
                        CV. Spektrum Teknologi menawarkan layanan dalam bidang:
                        <ul>
                            <li>Internet of Things (IoT)</li>
                            <li>Embedded System</li>
                            <li>Industrial Automations</li>
                            <li>Robotics</li>
                            <li>3D Printing</li>
                            <li>Renewable Energy</li>
                            <li>Pelatihan IoT, Robotik, dan PLC</li>
                        </ul>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" :class="{ 'active': activeAccordion === 4 }" @click="activeAccordion = activeAccordion === 4 ? null : 4">
                        <div class="question-content">
                            <span class="faq-number">04</span>
                            <span class="question-text">Bagaimana cara menghubungi CV. Spektrum Teknologi?</span>
                        </div>
                        <div class="faq-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer" x-show="activeAccordion === 4" x-collapse>
                        Anda dapat menghubungi CV. Spektrum Teknologi melalui:
                        <ul>
                            <li>Telepon/WA: +62 85 655 655 813</li>
                            <li>Email: spektrum.teknologi@gmail.com atau info@myspektrum-teknologi.com</li>
                            <li>Instagram: @myspektrum.teknologi</li>
                            <li>Website: www.myspektrum-teknologi.com</li>
                        </ul>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" :class="{ 'active': activeAccordion === 5 }" @click="activeAccordion = activeAccordion === 5 ? null : 5">
                        <div class="question-content">
                            <span class="faq-number">05</span>
                            <span class="question-text">Apakah CV. Spektrum Teknologi memiliki legalitas perusahaan?</span>
                        </div>
                        <div class="faq-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer" x-show="activeAccordion === 5" x-collapse>
                        Ya, CV. Spektrum Teknologi memiliki legalitas perusahaan lengkap:
                        <ul>
                            <li>Akta Notaris: 20</li>
                            <li>Surat Izin Usaha Perdagangan (SIUP): 9120400360755</li>
                            <li>Tanda Daftar Perusahaan: AH-0014584-AH.01.14. Tahun 2019</li>
                            <li>NPWP: 90.693.433.6-652.000</li>
                            <li>Surat Keterangan Terdaftar: S-1827KT/WPJ.12/KP.0103/2019</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.min.js"></script>
@endpush

@endsection