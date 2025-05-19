    <!-- Sidebar -->
    <div id="sidebar" >
        <div class="sidebar-logo">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="d-flex align-items-center">
                    <a href="{{ route('home') }}" class="text-decoration-none text-white d-flex align-items-center">
                        <div class="bg-primary text-white rounded d-flex justify-content-center align-items-center me-2" style="width: 30px; height: 30px;">
                                S
                        </div>
                        <span class="sidebar-logo-text h5 mb-0">
                                Spektrum
                        </span>
                     </a>
                </div>
            </div>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link ">
                    <i class="bi bi-speedometer2"></i>
                    <span class="sidebar-item-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin_product') }}"
                class="nav-link">
                <i class="bi bi-people"></i>
                <span class="sidebar-item-text">Products</span>
            </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin_porto') }}"
                    class="nav-link">
                    <i class="bi bi-box"></i>
                    <span class="sidebar-item-text">Portofolio</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin_service') }}"
                    class="nav-link">
                    <i class="bi bi-box"></i>
                    <span class="sidebar-item-text">Service</span>
                </a>
            </li>
        </ul>
        
        <div class="mt-auto sidebar-footer">
            <div class="px-3">
                <hr class="border-light">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link w-full text-start bg-transparent border-0 p-0">
                        <i class="bi bi-box-arrow-right"></i>
                        <span class="sidebar-item-text">Keluar</span>
                    </button>
                </form>
            </div>
        </div>
    </div>