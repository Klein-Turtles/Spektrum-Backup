<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
    <div class="container px-3">
      <!-- Logo -->
      <a href="index.html" class="logo d-flex align-items-center me-auto ">
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
            <a class="nav-link " href="{{ route('home') }}" style="color: #003156;" >Home</a>
          </li>

          <!-- Services Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Services<i class="bi bi-chevron-down ms-1 opacity-75"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
              @php
                  $services = [
                      ['item' => 'iot', 'name' => 'Internet of Things'],
                      ['item' => 'iac', 'name' => 'Industrial Automatic Control'],
                      ['item' => 'robotic', 'name' => 'Robotics'],
                      ['item' => '3dprint', 'name' => '3D Printing'],
                      ['item' => 'energy', 'name' => 'Renewable Energy'],
                      ['item' => 'lasercutting', 'name' => 'Laser Cutting'],
                      ['item' => 'iottrain', 'name' => 'IoT Training'],
                      ['item' => 'techfarm', 'name' => 'Tech Farm', 'badge' => 'New'],
                      ['item' => 'selengkapnya', 'name' => 'Selengkapnya' ],
                  ];
              @endphp
          
              @foreach ($services as $service)
                  <li>
                      <a class="dropdown-item" href="{{ route('services.show', ['page' => $service['item']]) }}">
                          {{ $service['name'] }}
                          @if (!empty($service['badge']))
                              <span class="badge-new">{{ $service['badge'] }}</span>
                          @endif
                      </a>
                  </li>
              @endforeach
          </ul>
          
          </li>

          <!-- Products Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Products
              <i class="bi bi-chevron-down ms-1 opacity-75"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="productsDropdown">
              @php
                $products = [
                  ['item' => 'sensor', 'name' => 'Elektronika & Sensor'],
                  ['item' => 'iot', 'name' => 'IoT & Otomasi'],
                  ['item' => 'industry', 'name' => 'Perangkat Industri'],
                  ['item' => 'energy', 'name' => 'Energi Terbarukan'],
                  ['item' => 'edukasi', 'name' => 'Edukasi & Aksesoris', 'badge' => 'New'],
                  ['item' => 'selengkapnya', 'name' => 'Selengkapnya'],
                ];
              @endphp

              @foreach ($products as $product )
              <li>
                <a href="{{ route('products.show', ['page' => $product['item']]) }}" class="dropdown-item">
                  {{ $product['name'] }}
                  @if (!empty($product['badge']))
                      <span class="badge-new">{{ $product['badge'] }}</span>
                  @endif
                </a>            
              </li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('portofolio') }}">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About Us </a>
          </li>
        </ul>
        <!-- Contact Button -->
        <a href="contact.html" class="contact-btn ms-lg-3 d-none d-lg-inline-block">Hubungi Kami</a>
      </div>
    </div>
  </nav>