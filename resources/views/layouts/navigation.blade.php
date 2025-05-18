<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
    <div class="container px-3">
      <!-- Logo -->
      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto ">
        <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="Logo">
      </a>

      <!-- Mobile Toggle Button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Content - Centered -->
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav gap-3">
          <li class="nav-item">
            <a class="nav-link " href="{{ route('home') }}" >Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('product') }}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('services') }}">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('portofolio') }}">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About Us </a>
          </li>
        </ul>
        <!-- Contact Button -->
        <a href="https://wa.me/085730220374" class="contact-btn ms-lg-3 d-none d-lg-inline-block">Hubungi Kami</a>
      </div>
    </div>
  </nav>