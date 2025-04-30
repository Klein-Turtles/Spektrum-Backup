@extends('layouts.app')

@push('styles')
    @vite('resources/sass/pages/home.scss')
@endpush

@section('content')
    <!-- Header -->
  <!-- Carousel Container -->
  <div class="carousel-container overflow-hidden ">
    <div id="carouselExampleSlidesOnly" class="carousel slide d-none d-md-block" data-bs-ride="carousel"
      data-bs-interval="3000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ url('/images/home/solar-panel2.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption custom-caption">
            <h2>CV. Spektrum Teknologi</h2>
            <p>Teknologi pintar bertemu energi bersih, membangun masa depan di mana inovasi menghadirkan kenyamanan,
              keberlanjutan, dan kehidupan yang lebih baik untuk semua.</p>
            <a class="btn btn-primary" href="contact.hmtl" type="button">Hubungi Kami</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ url('/images/home/1.png') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption custom-caption">
            <h2>Solusi Otomasi & Kendali Cerdas</h2>
            <p>Kami menghadirkan teknologi otomatisasi yang memudahkan operasional, meningkatkan efisiensi, dan
              mendukung produktivitas industri Anda.</p>
            <button class="btn btn-primary" type="button">Pelajari Lebih Lanjut</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ url('/images/home/2.png') }}" class="d-block w-100" alt="...">
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


  <!-- Floating Card Section (Koleksi) -->
  <section class="section-services">
    <div class="features card-floating-home">
      <h5 class="mb-4">Layanan Terbaik Kami!</h5>
      <div class="features-container">
        <a href="iot.html" class="feature-box-link">
          <div class="feature-box">
            <div class="feature-icon"><i class="fas fa-microchip"></i></div>
            <h3>Internet of Things</h3>
            <p>Mengintegrasikan perangkat fisik dengan internet untuk memungkinkan pemantauan real-time, pengumpulan
              data, dan pengendalian sistem secara efisien dari jarak jauh.</p>
          </div>
        </a>

        <a href="layanan-industrial.html" class="feature-box-link">
          <div class="feature-box">
            <div class="feature-icon"><i class="fas fa-industry"></i></div>
            <h3>Industrial Automatic Control</h3>
            <p>Mengotomatiskan proses industri dengan sistem kendali cerdas untuk meningkatkan efisiensi, akurasi, dan
              keselamatan operasional.</p>
          </div>
        </a>

        <a href="layanan-robotic.html" class="feature-box-link">
          <div class="feature-box">
            <div class="feature-icon"><i class="fas fa-network-wired"></i></div>
            <h3>Robotic</h3>
            <p>Solusi robotika untuk mengotomatisasi tugas berulang, meningkatkan efisiensi kerja, dan menghadirkan
              inovasi dalam berbagai lini industri dan edukasi.</p>
          </div>
        </a>

        <a href="layanan-techfarm.html" class="feature-box-link">
          <div class="feature-box">
            <div class="feature-icon"><i class="fas fa-laptop-code"></i></div>
            <h3>Tech Farm</h3>
            <p>Inovasi teknologi pertanian berbasis IoT dan otomasi untuk meningkatkan hasil panen, efisiensi irigasi,
              serta monitoring kondisi tanaman secara real-time.</p>
          </div>
        </a>

        <a href="layanan-3dprinting.html" class="feature-box-link">
          <div class="feature-box">
            <div class="feature-icon"><i class="fas fa-robot"></i></div>
            <h3>3D Printing</h3>
            <p>Layanan cetak objek 3D presisi tinggi untuk prototyping, desain produk, dan kebutuhan industri kreatif
              dengan berbagai material pilihan.</p>
          </div>
        </a>

        <a href="layanan-laser.html" class="feature-box-link">
          <div class="feature-box">
            <div class="feature-icon"><i class="fas fa-cogs"></i></div>
            <h3>Laser Cutting</h3>
            <p>Pemotongan material akurat dan cepat menggunakan teknologi laser untuk hasil desain yang presisi,
              bersih, dan profesional.</p>
          </div>
        </a>
      </div>
      <div class="text-center mt-4">
        <a href="services.html" class="btn-selengkapnya">Selengkapnya <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

  <section class="cek-layanan-section py-5">
    <div class="container text-center">
      <h5 class="mb-4">Cari Layanan Murah Terbaik Anda!</h5>
      <div class="d-flex justify-content-center">
        <div class="input-group" style="max-width: 800px;">
          <input type="text" class="form-control"
            style="height: 50px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;"
            placeholder="Dapatkan teknologi pintar anda hanya di sini!">
          <button class="btn btn-primary rounded-end-pill px-6" type="button"
            style=" width: 60px;height: 50px; border-top-right-radius: 10px; border-bottom-right-radius: 10px;">Cari</button>
        </div>
      </div>

      <section class="promo-section py-5">
        <div class="container text-center">
          <h2 class="mb-4">Promo Layanan Paling Murah</h2>
          <div class="row g-2 justify-content-center promo-row">
            <!-- Card 1 -->
            <div class="col-md-5 col-lg-3 position-relative">
              <div class="promo-card text-center rounded-5">
                <div class="promo-card-content pt-4">
                  <h5 class="fw-bold text-promo mb-3">Smart Home Control</h5>
                  <p class="mb-1"><del class="text-muted">Rp 2.500.000</del></p>
                  <h4 class="fw-bold text-primary">Rp 1.750.000</h4>
                  <ul class="list-unstyled mt-3">
                    <li>• Kontrol Lampu & AC</li>
                    <li>• Monitoring Keamanan</li>
                    <li>• Akses Remote dari HP</li>
                  </ul>
                  <a href="#" class="btn btn-outline-light btn-promo mt-4">Selengkapnya</a>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-5 col-lg-3 position-relative">
              <div class="promo-card text-center rounded-5">
                <!-- Div baru untuk konten card -->
                <div class="promo-card-content pt-4">
                  <!-- Badge Most Popular -->
                  <div class="ribbon-container position-absolute">
                    <div class="sale-ribbon">
                      <span>Most Popular</span>
                    </div>
                  </div>
                  <h5 class="fw-bold text-promo mb-3">Smart Agriculture System</h5>
                  <p class="mb-1"><del class="text-muted">Rp 3.000.000</del></p>
                  <h4 class="fw-bold text-primary">Rp 2.100.000</h4>
                  <ul class="list-unstyled mt-3">
                    <li>• Monitoring Tanaman</li>
                    <li>• Kontrol Irigasi Otomatis</li>
                    <li>• Data Real-Time</li>
                  </ul>
                  <a href="#" class="btn btn-outline-light btn-promo mt-4">Selengkapnya</a>
                </div>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-5 col-lg-3 position-relative">
              <div class="promo-card text-center rounded-5">
                <div class="promo-card-content pt-4">
                  <h5 class="fw-bold text-promo mb-3">Industrial Monitoring IoT</h5>
                  <p class="mb-1"><del class="text-muted">Rp 5.000.000</del></p>
                  <h4 class="fw-bold text-primary">Rp 3.500.000</h4>
                  <ul class="list-unstyled mt-3">
                    <li>• Monitoring Mesin</li>
                    <li>• Deteksi Kesalahan Otomatis</li>
                    <li>• Dashboard Realtime</li>
                  </ul>
                  <a href="#" class="btn btn-outline-light btn-promo mt-4">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
              <a href="#" class="btn btn-offering">Konsultasi Gratis</a>
            </div>
          </div>
          <div class="col-lg-5 position-relative">
            <div class="offering-bg-right"></div>
            <img src="{{ url('/images/home/offering.png') }}" alt="Person" class="img-fluid position-relative" style="z-index: 1;">
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
            <img src="{{ url('/images/home/satelite-training-system.png') }}" class="w-100 h-100 object-fit-cover card-img">
            <div class="position-absolute top-50 start-50 translate-middle text-white text-center z-2">
              <span
                class="position-absolute top-50 start-50 translate-middle text-white px-3 py-2 rounded-3 fw-bold fs-5 text-nowrap text-bg">
                Satellite Training System
              </span>
            </div>
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
            <img src="{{ url('/images/home/trainer-panel.png') }}" class="w-100 h-100 object-fit-cover card-img">
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
            <img src="{{ url('/images/home/smart-sorting-conveyor.png') }}" class="w-100 h-100 object-fit-cover card-img">
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
            <img src="{{ url('/images/home/lift_trainer.png') }}" class="w-100 h-100 object-fit-cover card-img">
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
            <img src="{{ url('/images/home/plc_trainer.png') }}" class="w-100 h-100 object-fit-cover card-img">
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
            <img src="{{ url('/images/home/solar-panel.png') }}" class="w-100 h-100 object-fit-cover card-img">
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
          <a href="services.html" class="btn-selengkapnya-bottom">Selengkapnya <i class="fas fa-arrow-right"></i>
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
        <img src="{{ url('/images/home/nasa.svg') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
      </div>

      <!-- Logo 2 -->
      <div class="col-md-4 col-lg-2 col-6 mb-4 d-flex justify-content-center">
        <img src= "{{ url('/images/home/jatimpark.svg') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
      </div>

      <!-- Logo 3 -->
      <div class="col-md-4 col-lg-2 col-6 mb-4 d-flex justify-content-center">
        <img src="{{ url('/images/home/um.svg') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
      </div>

      <!-- Logo 4 -->
      <div class="col-md-4 col-lg-2 col-6 mb-4 d-flex justify-content-center">
        <img src="{{ url('/images/home/indigospace.png') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
      </div>

      <!-- Logo 5 -->
      <div class="col-md-4 col-lg-2 col-6 mb-4 d-flex justify-content-center">
        <img src="{{ url('/images/home/asjk.png') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
      </div>

      <!-- Logo 6 -->
      <div class="col-md-4 col-lg-2 col-6 mb-4 d-flex justify-content-center">
        <img src="{{ url('/images/home/drt.png') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
      </div>
    </div>
  </div>


  <!-- Section Testimonials -->
  <section class="testimonials bg-white">
    <div class="container py-5">
      <div class="tagembed-widget" style="width:100%;height:100%" data-widget-id="2166922" data-tags="false"
        view-url="https://widget.tagembed.com/2166922"></div>
    </div>
  </section>


  <section id="faq" class="py-0 pb-0 bg-white">
    <div class="container pb-0">
      <div class="row align-items-center">
        <!-- Gambar FAQ -->
        <div class="col-lg-5 mb-0 text-center">
          <img src="{{ url('/images/home/wondering.png') }}" alt="FAQ Image" class="img-fluid">
        </div>
        <!-- Pertanyaan FAQ -->
        <div class="col-lg-7">
          <h2 class="mb-3">FAQ</h2>
          <p class="mb-4">Pertanyaan yang sering diajukan oleh pelanggan Spektrum Teknologi</p>
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                Apa itu layanan Spektrum Teknologi?
              </button>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Layanan teknologi inovatif mulai dari website development, IoT, hingga integrasi sistem berbasis AI.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Apakah bisa custom project sesuai kebutuhan?
              </button>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Bisa banget! Kami menyediakan layanan yang fleksibel sesuai kebutuhan Anda, dari skala kecil hingga
                  enterprise.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Bagaimana cara konsultasi dengan Spektrum Teknologi?
              </button>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Anda bisa menghubungi kami melalui halaman kontak, email resmi, atau WhatsApp business kami.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection