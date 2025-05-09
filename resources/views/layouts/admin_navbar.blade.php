    <!-- Sidebar -->
    <div id="sidebar" :class="{ 'collapsed': !isSidebarOpen }">
        <div class="sidebar-logo">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="d-flex align-items-center">
                    <a href="{{ route('home') }}" class="text-decoration-none text-white d-flex align-items-center">
                    <div class="bg-primary text-white rounded d-flex justify-content-center align-items-center me-2" style="width: 30px; height: 30px;">B</div>
                    <span class="sidebar-logo-text h5 mb-0">Spektrum</span>
                </div>
                    </a>
                <button class="btn btn-link text-white p-0 toggle-sidebar-btn" id="toggleSidebar" @click="isSidebarOpen = !isSidebarOpen">
                    <i class="bi bi-list fs-4"></i>
                </button>
            </div>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <i class="bi bi-speedometer2"></i>
                    <span class="sidebar-item-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin_product') }}"
                class="nav-link"
                :class="{ 'active': activePage === 'admin_product' }"
                @click="activePage = 'admin_product'; if (window.innerWidth < 768) isSidebarOpen = false">
                <i class="bi bi-people"></i>
                <span class="sidebar-item-text">Products</span>
            </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin_porto') }}"
                    class="nav-link"
                    :class="{ 'active': activePage === 'admin_porto' }"
                    @click="activePage = 'admin_porto'; if (window.innerWidth < 768) isSidebarOpen = false">
                    <i class="bi bi-box"></i>
                    <span class="sidebar-item-text">Portofolio</span>
                </a>
            </li>
        </ul>
        
        <div class="mt-auto sidebar-footer">
            <div class="px-3">
                <hr class="border-light">
                <a href="#" class="nav-link">
                    <i class="bi bi-box-arrow-right"></i>
                    <span class="sidebar-item-text">Keluar</span>
                </a>
            </div>
        </div>
    </div>