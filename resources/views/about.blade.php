@extends('layouts.app')

@push('styles')
@vite('resources/sass/pages/about.scss')

@section('title', 'About')

@section('content')

<script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.min.js"></script>

<!-- Hero -->
<div class="carousel-container overflow-hidden position-relative">
        <div id="carouselExampleSlidesOnly" class="carousel slide d-none d-md-block" data-bs-ride="carousel"
            data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('/images/aboutUs-page.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption custom-caption">
                        <h2>About Us</h2>
                        <p class="mb-0">Perusahaan ini bergerak di bidang IoT, Robotika, Renewable Energy, dan Edukasi teknologi, serta menyediakan pelatihan untuk siswa, mahasiswa, dan karyawan di bidang IoT, Robotik, dan PLC. Spektrum Teknologi terus berinovasi memberikan solusi berbasis teknologi untuk industri dan pendidikan.</p>
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- Section Client -->
<div class="container py-5 bg-white">
  <div class="row justify-content-center">
    <!-- Logo 1 -->
    <div class="col-4 col-sm-3 col-md-2 mb-3 d-flex justify-content-center">
      <img src="{{ url('/images/logo-nasa.svg') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
    </div>

    <!-- Logo 2 -->
    <div class="col-4 col-sm-3 col-md-2 mb-3 d-flex justify-content-center">
      <img src="{{ url('/images/logo-jatimpark.svg') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
    </div>

    <!-- Logo 3 -->
    <div class="col-4 col-sm-3 col-md-2 mb-3 d-flex justify-content-center">
      <img src="{{ url('/images/logo-um.svg') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
    </div>

    <!-- Logo 4 -->
    <div class="col-4 col-sm-3 col-md-2 mb-3 d-flex justify-content-center">
      <img src="{{ url('/images/logo-indigospace.png') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
    </div>

    <!-- Logo 5 -->
    <div class="col-4 col-sm-3 col-md-2 mb-3 d-flex justify-content-center">
      <img src="{{ url('/images/logo-asjk.png') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
    </div>

    <!-- Logo 6 -->
    <div class="col-4 col-sm-3 col-md-2 mb-3 d-flex justify-content-center">
      <img src="{{ url('/images/logo-drt.png') }}" class="client-icon" alt="" style="width: 100px; height: auto;">
    </div>
  </div>
</div>

<div class="container">        
    <div class="laptop-mockup">
        <div class="logo">CC</div>
        <div class="screen">
            <iframe src="https://www.youtube.com/embed/hyyTBqjcQGw?autoplay=1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div class="laptop-base"></div>
</div>

    <div class="container">
        <div class="header">
            <div>
                 <h1 class="page-title">PRINCIPAL</h1>
                <p class="page-subtitle">CV. Spektrum Teknologi menjunjung tinggi prinsip inovasi berkelanjutan, tanggung jawab sosial, dan integritas dalam setiap aspek operasionalnya. Perusahaan berkomitmen untuk tidak hanya menciptakan solusi teknologi berbasis Internet of Things, Robotika, dan Energi Terbarukan, tetapi juga memastikan bahwa setiap produk dan layanan yang diberikan berdampak positif bagi masyarakat dan lingkungan. Dengan pendekatan kolaboratif, Spektrum Teknologi mengutamakan kualitas, keandalan, serta edukasi dalam membangun ekosistem teknologi yang adaptif dan berdaya saing tinggi.</p>
            </div>
        </div>
        
        <div class="principles-container">
            <div class="principle-card">
                <h3 class="principle-title">VISI</h3>
                <p class="principle-text">
                    Tumbuh menjadi perusahaan yang sehat, terhormat, inovatif, dan kreatif di setiap bidang usahanya.
                </p>
                
                <ul class="principle-points">                 
                    <li class="point-item">
                        <div class="point-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                        </div>
                        <p class="point-text">Menjadi perusahaan yang sehat secara operasional dan finansial.</p>
                    </li>
                    
                    <li class="point-item">
                        <div class="point-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                        </div>
                        <p class="point-text">Menjadi perusahaan yang terhormat dalam menjunjung etika dan profesionalitas.</p>
                    </li>

                    <li class="point-item">
                        <div class="point-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                        </div>
                        <p class="point-text">Menjadi perusahaan yang inovatif dalam pengembangan teknologi dan produk.</p>
                    </li>

                    <li class="point-item">
                        <div class="point-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                        </div>
                        <p class="point-text">Menjadi perusahaan yang kreatif dalam memberikan solusi untuk kebutuhan industri dan masyarakat.</p>
                    </li>

                </ul>
            </div>
            
            <div class="principle-card">
                <h3 class="principle-title">MISI</h3>
                <p class="principle-text">
                    CV. Spektrum Teknologi memiliki misi untuk memberikan solusi dan layanan dengan kualitas terbaik kepada pelanggan, serta menciptakan teknologi yang berlandaskan kepedulian terhadap lingkungan dan tanggung jawab sosial. Perusahaan juga berupaya menciptakan nilai yang bermanfaat bagi seluruh pemangku kepentingan demi kehidupan yang lebih baik.
                </p>
                
                <ul class="principle-points">
                    <li class="point-item">
                        <div class="point-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                        </div>
                        <p class="point-text">Memberikan solusi dan layanan berkualitas tinggi bagi pelanggan.</p>
                    </li>
                    
                    <li class="point-item">
                        <div class="point-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                        </div>
                        <p class="point-text">Mengembangkan teknologi dengan kepedulian terhadap lingkungan dan tanggung jawab sosial.</p>
                    </li>
                    
                    <li class="point-item">
                        <div class="point-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                            </svg>
                        </div>
                        <p class="point-text">Memberikan manfaat yang optimal bagi perusahaan, pelanggan, dan stakeholder.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

<!-- MERCHANT SECTION -->
<section class="merchant">
<div class="container">
        <div class="header">
                <h1 class="page-title">OUR MERCHANT</h1>
                <p class="page-subtitle">CV. Spektrum Teknologi menjalin kerja sama strategis dengan berbagai merchant dan mitra bisnis guna mendukung kualitas dan keberhasilan setiap proyek yang kami kerjakan. Melalui kolaborasi dengan penyedia komponen, vendor teknologi, institusi pendidikan, dan sektor industri lainnya, kami memastikan ketersediaan produk dan layanan yang andal, inovatif, serta sesuai kebutuhan pelanggan. Kemitraan ini menjadi fondasi penting dalam membangun solusi berbasis Internet of Things, robotika, dan energi terbarukan yang berkelanjutan dan berdampak nyata.</p>
        </div>
  <div class="d-flex flex-wrap justify-content-center">
    <!-- Circle merchants -->
    {{-- <div class="circle">
      <img  src="{{ url('/images/about/merchant/shopee.png') }}" alt="Shopee">
    </div>
    <div class="circle">
      <img src="{{  url('/images/about/merchant/tokped.png')}}" alt="Tokopedia">
    </div>
    <div class="circle">
      <img src="{{  url('/images/about/merchant/grabmart.png')}}" alt="GrabMart">
    </div>
    <div class="circle">
        <img src="{{  url('/images/about/merchant/lazada.jpg')}}" alt="Lazada">
    </div> --}}
    <!-- Circle merchants -->
        <div class="circle">
        <a href="https://shopee.co.id/spektrum_store">
        <img src="{{ url('/images/about/merchant/shopee.png') }}" alt="Shopee">
        </a>
        </div>
        <div class="circle">
            <a  href="https://www.tokopedia.com/spektrum-store">
        <img src="{{  url('/images/about/merchant/tokped.png')}}" alt="Tokopedia">
        </a>
        </div>
        <div class="circle">
            <a href="https://mart.grab.com/my/en/merchant/1-C2ECTK6ZC4NZCA">
        <img src="{{  url('/images/about/merchant/grabmart.png')}}" alt="GrabMart">
        </a>
        </div>
        <div class="circle">
            <a href="https://www.lazada.co.id/shop/cncstore-bandung?path=profile.htm&pageTypeId=3">
        <img src="{{  url('/images/about/merchant/lazada.jpg')}}" alt="Lazada">
        </a>
        </div>
    </div>
</div>
</section>

<div class="container">
    <div class="header">
            <div>
                <h1 class="page-title">OUR TEAM</h1>
                <p class="page-subtitle">Setiap pencapaian CV. Spektrum Teknologi tidak lepas dari peran tim profesional yang berdedikasi, bekerja dengan semangat, kolaborasi, dan tujuan yang sama. Mereka adalah individu-individu berbakat yang menghadirkan inovasi, keahlian, dan komitmen dalam setiap langkah perusahaan. Dengan perpaduan pengalaman industri dan perspektif baru yang segar, tim kami siap memberikan solusi teknologi terbaik bagi setiap klien dan mitra, serta terus mendorong terciptanya karya yang berdampak dan berkelanjutan.</p>
            </div>
    </div>
        
        <!-- Filter system using CSS only -->
        <input type="radio" id="leaders-radio" name="filter" class="filter-radio" checked>
        <input type="radio" id="team-radio" name="filter" class="filter-radio">
        
        <div class="filter-tabs">
            <label for="leaders-radio" class="filter-tab leaders-tab active">Leadership</label>
            <label for="team-radio" class="filter-tab team-tab">Team Members</label>
        </div>

        <!-- Leaders content (shown first) -->
        <div id="leaders-content" class="team-carousel-container">
            <div class="team-cards" id="leaders-carousel">
                <!-- Leader Card 1 -->
                <div class="team-card" id="leader1">
                    <div class="team-card-image">
                        <img src="/images/about/team/image.png" alt="Dr. Alexander Chen">
                    </div>
                    <div class="team-card-info">
                        <h3>Dr. Alexander Chen</h3>
                        <p>Chief Executive Officer</p>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/danang-arengga-3239a6201/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://x.com/sevirarizky?t=zxlVLF1BDMqTiKFSE80-Fw&s=09"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/myspektrum.teknologi/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Leader Card 2 -->
                <div class="team-card" id="leader2">
                    <div class="team-card-image">
                        <img src="/images/about/team/image.png" alt="Jessica Reynolds">
                    </div>
                    <div class="team-card-info">
                        <h3>Jessica Reynolds</h3>
                        <p>Chief Financial Officer</p>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/danang-arengga-3239a6201/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://x.com/sevirarizky?t=zxlVLF1BDMqTiKFSE80-Fw&s=09"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/myspektrum.teknologi/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Leader Card 3 -->
                <div class="team-card" id="leader3">
                    <div class="team-card-image">
                        <img src="/images/about/team/image.png" alt="Dr. Maya Patel">
                    </div>
                    <div class="team-card-info">
                        <h3>Dr. Maya Patel</h3>
                        <p>Chief Technology Officer</p>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/danang-arengga-3239a6201/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://x.com/sevirarizky?t=zxlVLF1BDMqTiKFSE80-Fw&s=09"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/myspektrum.teknologi/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Leader Card 4 -->
                <div class="team-card" id="leader4">
                    <div class="team-card-image">
                        <img src="/images/about/team/image.png" alt="Robert Johnson">
                    </div>
                    <div class="team-card-info">
                        <h3>Robert Johnson</h3>
                        <p>Chief Marketing Officer</p>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/danang-arengga-3239a6201/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://x.com/sevirarizky?t=zxlVLF1BDMqTiKFSE80-Fw&s=09"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/myspektrum.teknologi/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Leader Card 5 -->
                <div class="team-card" id="leader5">
                    <div class="team-card-image">
                        <img src="/images/about/team/image.png" alt="Sarah Wilson">
                    </div>
                    <div class="team-card-info">
                        <h3>Sarah Wilson</h3>
                        <p>Chief Operating Officer</p>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/danang-arengga-3239a6201/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://x.com/sevirarizky?t=zxlVLF1BDMqTiKFSE80-Fw&s=09"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/myspektrum.teknologi/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team content -->
        <div id="team-content" class="team-carousel-container">            
            <div class="team-cards" id="team-carousel">
                <!-- Team Card 1 -->
                <div class="team-card" id="team-member1">
                    <div class="team-card-image">
                        <img src="/images/about/team/image2.png" alt="Daniel Park">
                    </div>
                    <div class="team-card-info">
                        <h3>Daniel Park</h3>
                        <p>Senior Developer</p>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/danang-arengga-3239a6201/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://x.com/sevirarizky?t=zxlVLF1BDMqTiKFSE80-Fw&s=09"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/myspektrum.teknologi/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Card 2 -->
                <div class="team-card" id="team-member2">
                    <div class="team-card-image">
                        <img src="/images/about/team/image2.png" alt="Elena Rodriguez">
                    </div>
                    <div class="team-card-info">
                        <h3>Elena Rodriguez</h3>
                        <p>UX Researcher</p>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/danang-arengga-3239a6201/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://x.com/sevirarizky?t=zxlVLF1BDMqTiKFSE80-Fw&s=09"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/myspektrum.teknologi/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Card 3 -->
                <div class="team-card" id="team-member3">
                    <div class="team-card-image">
                        <img src="/images/about/team/image2.png" alt="Michael Zhang">
                    </div>
                    <div class="team-card-info">
                        <h3>Michael Zhang</h3>
                        <p>Product Manager</p>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/danang-arengga-3239a6201/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://x.com/sevirarizky?t=zxlVLF1BDMqTiKFSE80-Fw&s=09"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/myspektrum.teknologi/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Card 4 -->
                <div class="team-card" id="team-member4">
                    <div class="team-card-image">
                        <img src="/images/about/team/image2.png" alt="Aisha Johnson">
                    </div>
                    <div class="team-card-info">
                        <h3>Aisha Johnson</h3>
                        <p>Marketing Specialist</p>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/danang-arengga-3239a6201/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://x.com/sevirarizky?t=zxlVLF1BDMqTiKFSE80-Fw&s=09"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/myspektrum.teknologi/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Card 5 -->
                <div class="team-card" id="team-member5">
                    <div class="team-card-image">
                        <img src="/images/about/team/image2.png" alt="Thomas Garcia">
                    </div>
                    <div class="team-card-info">
                        <h3>Thomas Garcia</h3>
                        <p>Financial Analyst</p>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/danang-arengga-3239a6201/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://x.com/sevirarizky?t=zxlVLF1BDMqTiKFSE80-Fw&s=09"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/myspektrum.teknologi/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<section class="merchant">
  <div class="container">
    <div class="header">
      <h1 class="page-title">OUR SOCIAL MEDIA</h1>
      <p class="page-subtitle">
        Sebagai perusahaan yang bergerak di bidang teknologi dan inovasi, CV. Spektrum Teknologi aktif membagikan informasi, edukasi, dan update kegiatan melalui media sosial. Kami menggunakan platform digital untuk terhubung lebih dekat dengan pelanggan, mitra, dan masyarakat luas. Ikuti perjalanan kami, dapatkan insight seputar Internet of Things, robotika, energi terbarukan, serta pelatihan teknologi melalui konten-konten informatif dan inspiratif yang kami sajikan secara rutin.
      </p>
    </div>

{{-- social media --}}
    <div class="d-flex flex-wrap justify-content-center">
      <div class="circle">
        <a href="https://www.tiktok.com/@mukaa.romah?_t=ZS-8wLPmu32yES&_r=1 " target="_blank">
          <img src="/images/about/social/tiktok.png" alt="TikTok">
        </a>
      </div>
      <div class="circle">
        <a href="https://www.instagram.com/myspektrum.teknologi/" target="_blank">
          <img src="/images/about/social/insta.png" alt="Instagram">
        </a>
      </div>
      <div class="circle">
        <a href="https://www.facebook.com/share/19zWDdt5Zq/ " target="_blank">
          <img src="/images/about/social/facebook.png" alt="Facebook">
        </a>
      </div>
      <div class="circle">
        <a href="https://www.youtube.com/@spektrumteknologi3276" target="_blank">
          <img src="/images/about/social/youtube.png" alt="Youtube">
        </a>
      </div>
      <div class="circle">
        <a href="https://x.com/sevirarizky?t=zxlVLF1BDMqTiKFSE80-Fw&s=09" target="_blank">
          <img src="/images/about/social/x.png" alt="X (Twitter)">
        </a>
      </div>
    </div>
  </div>
</section>


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

<section class="section-office">
  <div class="container">
        <div class="header">
        <div>
            <h1 class="page-title">OUR OFFICE</h1>
        </div>
    </div>
      <div class="row">
          <!-- Central Office -->
          <div class="col-lg-6 mb-4">
              <div class="office">
                  <h3>Central Office</h3>
                  <div class="map-office">
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
              <div class="office">
                  <h3>Branch Office</h3>
                  <div class="map-office">
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Langsung saja arahkan ke card tengah untuk kedua carousel
    setTimeout(function() {
        // Untuk leaders carousel
        const leadersCarousel = document.getElementById('leaders-carousel');
        if (leadersCarousel) {
            const leadersCards = leadersCarousel.querySelectorAll('.team-card');
            const totalCards = leadersCards.length;
            
            // Jika ada card, scroll ke tengah koleksi
            if (totalCards > 0) {
                // Menghitung total lebar carousel
                const totalWidth = leadersCarousel.scrollWidth;
                // Scroll ke tengah carousel
                leadersCarousel.scrollLeft = (totalWidth - leadersCarousel.clientWidth) / 2;
                // Update tampilan card
                updateCardAppearance(leadersCarousel);
            }
        }
        
        // Untuk team carousel
        const teamCarousel = document.getElementById('team-carousel');
        if (teamCarousel) {
            const teamCards = teamCarousel.querySelectorAll('.team-card');
            const totalCards = teamCards.length;
            
            // Jika ada card, scroll ke tengah koleksi
            if (totalCards > 0) {
                // Menghitung total lebar carousel
                const totalWidth = teamCarousel.scrollWidth;
                // Scroll ke tengah carousel
                teamCarousel.scrollLeft = (totalWidth - teamCarousel.clientWidth) / 2;
                // Update tampilan card
                updateCardAppearance(teamCarousel);
            }
        }
    }, 100);
    
    // Lakukan hal yang sama saat window fully loaded
    window.addEventListener('load', function() {
        // Untuk leaders carousel
        const leadersCarousel = document.getElementById('leaders-carousel');
        if (leadersCarousel) {
            // Menghitung total lebar carousel
            const totalWidth = leadersCarousel.scrollWidth;
            // Scroll ke tengah carousel
            leadersCarousel.scrollLeft = (totalWidth - leadersCarousel.clientWidth) / 2;
            // Update tampilan card
            updateCardAppearance(leadersCarousel);
        }
        
        // Untuk team carousel
        const teamCarousel = document.getElementById('team-carousel');
        if (teamCarousel) {
            // Menghitung total lebar carousel
            const totalWidth = teamCarousel.scrollWidth;
            // Scroll ke tengah carousel
            teamCarousel.scrollLeft = (totalWidth - teamCarousel.clientWidth) / 2;
            // Update tampilan card
            updateCardAppearance(teamCarousel);
        }
    });
    
    // Juga lakukan ini saat tab diubah
    document.getElementById('team-radio').addEventListener('change', function() {
        setTimeout(() => {
            const teamCarousel = document.getElementById('team-carousel');
            if (teamCarousel) {
                const totalWidth = teamCarousel.scrollWidth;
                teamCarousel.scrollLeft = (totalWidth - teamCarousel.clientWidth) / 2;
                updateCardAppearance(teamCarousel);
            }
        }, 100);
    });
    
    document.getElementById('leaders-radio').addEventListener('change', function() {
        setTimeout(() => {
            const leadersCarousel = document.getElementById('leaders-carousel');
            if (leadersCarousel) {
                const totalWidth = leadersCarousel.scrollWidth;
                leadersCarousel.scrollLeft = (totalWidth - leadersCarousel.clientWidth) / 2;
                updateCardAppearance(leadersCarousel);
            }
        }, 100);
    });

    // Tambahkan event listener untuk scroll pada carousel
    const carousels = [
        document.getElementById('leaders-carousel'),
        document.getElementById('team-carousel')
    ];
    
    carousels.forEach(carousel => {
        if (carousel) {
            carousel.addEventListener('scroll', function() {
                updateCardAppearance(this);
            });
        }
    });
});

// Fungsi untuk mengupdate tampilan card berdasarkan posisinya
function updateCardAppearance(carousel) {
    if (!carousel) return;
    
    const cards = carousel.querySelectorAll('.team-card');
    const carouselRect = carousel.getBoundingClientRect();
    const centerX = carouselRect.left + carouselRect.width / 2;
    
    cards.forEach(card => {
        const cardRect = card.getBoundingClientRect();
        const cardCenterX = cardRect.left + cardRect.width / 2;
        const distance = Math.abs(cardCenterX - centerX);
        
        // Reset transformasi dan opacity
        // Semakin dekat ke tengah, semakin besar dan jelas cardnya
        const maxDistance = carouselRect.width / 2;
        const scale = Math.max(0.85, 1 - (distance / maxDistance) * 0.15);
        const opacity = Math.max(0.7, 1 - (distance / maxDistance) * 0.3);
        const zIndex = Math.round((1 - distance / maxDistance) * 10);
        const shadow = `0 ${Math.round(4 + (1 - distance / maxDistance) * 4)}px ${Math.round(8 + (1 - distance / maxDistance) * 8)}px rgba(0, 0, 0, ${0.1 + (1 - distance / maxDistance) * 0.05})`;
        
        card.style.transform = `scale(${scale})`;
        card.style.opacity = opacity;
        card.style.zIndex = zIndex;
        card.style.boxShadow = shadow;
        card.style.transition = 'transform 0.3s, opacity 0.3s, box-shadow 0.3s';
    });
}

</script>

@endsection