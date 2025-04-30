
@extends('layouts.app')

@push('styles')
@vite('resources/sass/pages/about.scss')
<style>
  .image-side {
      width: 350px;
      height: 400px;
      background: url(' {{  url('/images/about/hah.jpg') }} ') no-repeat center center;
      background-size: cover;
      border-radius: 15px;
      margin-left: 50px;
    }
    .stats {
        background: 
            linear-gradient(to bottom, 
                rgba(255,255,255,0.1) 0%,    /* Very subtle light top */
                rgba(51,51,51,0.95) 100%),   /* Matching #333 footer */
            url('{{ url('/images/about/lassercut.jpg') }} ') center center/cover no-repeat;
        padding: 100px 0 80px;
        position: relative;
        color: white;
        text-align: center;
        border-top: 1px solid rgba(255,255,255,0.05);
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('content')
      <!-- Hero -->
  <section class="header-about">
    <div class="container">
        <div><h1 class="display-3 fw-bold">About Us.</h1></div>
        <div class="d-flex align-items-center mb-3">Membangun Dunia yang Lebih Pintar dengan Solusi IoT Inovatif</div>
    </div>
</section>

<!-- Sejarah -->
<section class="sejarah">
    <p>CV. Spektrum Teknologi didirikan pada 20 Februari 2019 dan berlokasi di Malang, Jawa Timur. Perusahaan ini bergerak di bidang Internet of Things (IoT), Robotika, Renewable Energy, dan Edukasi teknologi. Selain pengerjaan proyek, mereka juga membuka pelatihan untuk siswa, mahasiswa, dan karyawan di bidang IoT, Robotik, dan PLC. Spektrum Teknologi terus berinovasi memberikan solusi berbasis teknologi untuk berbagai kebutuhan industri dan pendidikan.</p>
    
    <section class="features-container history">

        <div class="feature-box">
          <div class="icon-circle">
            <i class="bi bi-calendar-event"></i>
          </div>
          <h3>Didirikan 2019</h3>
          <p>Resmi berdiri pada 20 Februari 2019 di Malang, fokus pada inovasi teknologi berbasis IoT dan Robotika.</p>
        </div>
        
        <div class="feature-box">
          <div class="icon-circle">
            <i class="bi bi-cpu"></i>
          </div>
          <h3>Fokus Bidang</h3>
          <p>Internet of Things, Robotika, Renewable Energy, dan Edukasi Teknologi menjadi layanan unggulan kami.</p>
        </div>
        
        <div class="feature-box">
          <div class="icon-circle">
            <i class="bi bi-mortarboard"></i>
          </div>
          <h3>Layanan & Pelatihan</h3>
          <p>Melayani proyek-proyek teknologi dan menyediakan pelatihan IoT, Robotik, serta PLC untuk siswa dan profesional.</p>
        </div>
    </section>
</section>

<!-- Visi Misi -->
<div class="vm-section">
<h2 class="vm-title">OUR VISION AND MISSION</h2>

<div class="vm">
    <div class="row g-4">
        <!-- Vision Card -->
        <div class="col-lg-6">
            <div class="vm-card">
                <div class="vm-card-inner">
                    <h2 class="vm-card-title">Visi Kami</h2>
                    <p class="vm-card-text">
                        Tumbuh menjadi perusahaan yang sehat, terhormat, inovatif, dan kreatif di setiap bidang usahanya.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Mission Card -->
        <div class="col-lg-6">
            <div class="vm-card">
                <div class="vm-card-inner">
                    <h2 class="vm-card-title">Misi Kami</h2>
                    <p class="vm-card-text">
                        Memberikan solusi dan layanan berkualitas terbaik bagi customer, menciptakan teknologi dengan kepedulian terhadap lingkungan dan sosial, serta memberikan keuntungan yang bermanfaat bagi perusahaan, customer, dan stakeholder.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>          
</div>


<div class="custom-container">
<div class="image-side"></div>

<div class="text-side">
  <h2>WHY US?</h2>
  <p>
    Kami berkomitmen untuk terus mengembangkan solusi inovatif, menjaga kualitas dan keandalan layanan, 
    melindungi privasi pelanggan, serta fokus pada pengembangan berkelanjutan melalui kolaborasi yang saling menguntungkan.
  </p>
  
  <div class="card-item">Inovasi Teknologi</div>
  <div class="card-item">Kualitas dan Keandalan</div>
  <div class="card-item">Keamanan dan Privasi</div>
  <div class="card-item">Kepuasan Pelanggan</div>
  
</div>
</div>

<!-- MERCHANT SECTION -->
<section class="merchant">
<div class="container-mrc">
  <h2>OUR MERCHANT</h2>
  <div class="d-flex flex-wrap justify-content-center">
    <!-- Circle merchants -->
    <div class="circle">
      <img src="{{ url('/images/about/shopee.png') }}" alt="Shopee">
    </div>
    <div class="circle">
      <img src="{{  url('/images/about/tokped.png')}}" alt="Tokopedia">
    </div>
    <div class="circle">
      <img src="{{  url('/images/about/grabmart.png')}}" alt="GrabMart">
    </div>
    <div class="circle">
        <img src="{{  url('/images/about/lazada.jpg')}}" alt="Lazada">
    </div>
  </div>
</div>
</section>
 
<div class="container py-5 text-center">
<h2 class="mb-5 fw-bold">Tim Kami</h2>
<div class="row row-cols-2 row-cols-md-4 g-4 justify-content-center">
  
  <!-- Card 1 -->
  <div class="col">
    <div class="team-card">
      <div class="team-image">
        <i class="fas fa-user"></i>
      </div>
      <div class="team-name">Tim 1</div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="col">
    <div class="team-card">
      <div class="team-image">
        <i class="fas fa-user"></i>
      </div>
      <div class="team-name">Tim 2</div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="col">
    <div class="team-card">
      <div class="team-image">
        <i class="fas fa-user"></i>
      </div>
      <div class="team-name">Tim 3</div>
    </div>
  </div>

  <!-- Card 4 -->
  <div class="col">
    <div class="team-card">
      <div class="team-image">
        <i class="fas fa-user"></i>
      </div>
      <div class="team-name">Tim 4</div>
    </div>
  </div>

  <!-- Card 5 -->
  <div class="col">
    <div class="team-card">
      <div class="team-image">
        <i class="fas fa-user"></i>
      </div>
      <div class="team-name">Tim 5</div>
    </div>
  </div>

  <!-- Card 6 -->
  <div class="col">
    <div class="team-card">
      <div class="team-image">
        <i class="fas fa-user"></i>
      </div>
      <div class="team-name">Tim 6</div>
    </div>
  </div>

  <!-- Card 7 -->
  <div class="col">
    <div class="team-card">
      <div class="team-image">
        <i class="fas fa-user"></i>
      </div>
      <div class="team-name">Tim 7</div>
    </div>
  </div>

  <!-- Card 8 -->
  <div class="col">
    <div class="team-card">
      <div class="team-image">
        <i class="fas fa-user"></i>
      </div>
      <div class="team-name">Tim 8</div>
    </div>
  </div>

</div>
</div>


<section class="office-section">
  <div class="container">
      <div class="row">
          <!-- Central Office -->
          <div class="col-lg-6 mb-4">
              <div class="office-card">
                  <h2>Central Office</h2>
                  <div class="office-map">
                      <iframe
                          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.061452837542!2d112.62079937505655!3d-7.938155592070939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6297f740fb7b7%3A0x1e859bb6764ac2de!2sJl.%20Bantaran%20Indah%20Blok%20A%20No.14A%2C%20Tulusrejo%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065141!5e0!3m2!1sid!2sid!4v1714467850000!5m2!1sid!2sid"
                          width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                          referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  <div class="contact-info">
                      <div class="contact-item">
                          <div class="contact-icon">
                              <i class="fas fa-phone"></i>
                          </div>
                          <div class="contact-text">
                              <strong>Telepon</strong>
                              082151150554
                          </div>
                      </div>
                      <div class="contact-item">
                          <div class="contact-icon">
                              <i class="fas fa-mobile-alt"></i>
                          </div>
                          <div class="contact-text">
                              <strong>Mobile</strong>
                              +62 85 655 655 813
                          </div>
                      </div>
                      <div class="contact-item">
                          <div class="contact-icon">
                              <i class="fas fa-envelope"></i>
                          </div>
                          <div class="contact-text">
                              <strong>Email</strong>
                              spektrum.teknologi@gmail.com
                          </div>
                      </div>
                      <div class="contact-item">
                          <div class="contact-icon">
                              <i class="fas fa-map-marker-alt"></i>
                          </div>
                          <div class="contact-text">
                              <strong>Alamat</strong>
                              Jl. Bantaran Indah Blok A No.14A, Kel. Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Branch Office -->
          <div class="col-lg-6 mb-4">
              <div class="office-card">
                  <h2>Branch Office</h2>
                  <div class="office-map">
                      <iframe
                          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.114185849909!2d112.61119887505643!3d-7.951944992056117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6296e2ebfd6b7%3A0x30f5e62157f8d43f!2sJl.%20Letjen%20Sutoyo%20IV%20No.707%2C%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065141!5e0!3m2!1sid!2sid!4v1714467920000!5m2!1sid!2sid"
                          width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                          referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  <div class="contact-info">
                      <div class="contact-item">
                          <div class="contact-icon">
                              <i class="fas fa-phone"></i>
                          </div>
                          <div class="contact-text">
                              <strong>Telepon</strong>
                              082151150554
                          </div>
                      </div>
                      <div class="contact-item">
                          <div class="contact-icon">
                              <i class="fas fa-mobile-alt"></i>
                          </div>
                          <div class="contact-text">
                              <strong>Mobile</strong>
                              +62 85 655 655 813
                          </div>
                      </div>
                      <div class="contact-item">
                          <div class="contact-icon">
                              <i class="fas fa-envelope"></i>
                          </div>
                          <div class="contact-text">
                              <strong>Email</strong>
                              info@myspektrum-teknologi.com
                          </div>
                      </div>
                      <div class="contact-item">
                          <div class="contact-icon">
                              <i class="fas fa-map-marker-alt"></i>
                          </div>
                          <div class="contact-text">
                              <strong>Alamat</strong>
                              Jl. Letjend Soetoyo IV No.707, Lowokwaru, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>


<!-- Statistik Section -->
<div class="stats">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="stat-number">+6</h3>
                <p>Merek tepercaya selama lebih dari 6 tahun</p>
            </div>
            <div class="col-md-4">
                <h3 class="stat-number">+1000</h3>
                <p>Melayani lebih dari 1.000 pelanggan</p>
            </div>
            <div class="col-md-4">
                <h3 class="stat-number">+1000</h3>
                <p>Telah membuat costum barang lebih dari 1.000</p>
            </div>
        </div>
    </div>
</div>

@endsection