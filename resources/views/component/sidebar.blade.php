{{-- Off canvas navbar --}}
{{-- <nav class="navbar bg-body-tertiary fixed-top ps-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('category.index') }}">Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('category.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Other</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav> --}}

<aside class="main-sidebar sidebar-dark-primary elevation-4 z-1">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary vh-100" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <i class="bi bi-shop fs-1 me-2"></i>
            <span class="fs-4">Toko</span>
        </a>
        <hr>
        {{-- Dropdown profile --}}
        <div class="dropdown ms-2">
            @if (Auth::check())
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="" alt="" width="32" height="32"
                        class="rounded-circle me-2">
                    <strong>{{ Auth::user()->name }}</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" style="">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                        @csrf
                            <button type="submit" class="dropdown-item" href="{{ route('logout') }}" onclick="return confirm('Are you sure you want to delete this category?')">Sign out</button>
                        </form>
                    </li>
                </ul>
            @else
                <div class="d-flex justify-content-around">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                </div>
            @endif
        </div>
        <hr>
        {{-- Menu sidebar --}}
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link d-flex align-items-center" aria-current="page">
                    <i class="bi bi-speedometer me-2 fs-4"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link d-flex align-items-center {{ Request::is('category', 'category/create', 'category/edit/*', 'category/*') ? 'active' : '' }}">
                    <i class="bi bi-inboxes me-2 fs-4"></i>
                    <span>Category</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link d-flex align-items-center">
                    <i class="bi bi-receipt me-2 fs-4"></i>
                    <span>Transaction</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('product.index') }}" class="nav-link d-flex align-items-center {{ Request::is('product', 'product/create', 'product/edit/*', 'product/*') ? 'active' : '' }}" class="nav-link">
                    <i class="bi bi-bag me-2 fs-4"></i>
                    <span>Products</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link d-flex align-items-center">
                    <i class="bi bi-people me-2 fs-4"></i>
                    <span>Member</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link d-flex align-items-center">
                    <i class="bi bi-box-seam me-2 fs-4"></i>
                    <span>Package</span>
                </a>
            </li>
        </ul>
    </div>
</aside>