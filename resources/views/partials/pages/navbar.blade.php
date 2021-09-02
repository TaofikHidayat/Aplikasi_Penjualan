{{-- Navbar --}}
<div id="main" class='layout-navbar'>
    <header class='mb-3'>
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="container-fluid">
                <a href="#" class="burger-btn d-block">
                    <i class="bi bi-justify fs-3"></i>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    </ul>
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="user-menu d-flex">
                                <div class="user-name text-end me-3">
                                    <h6 class="mb-0 text-gray-600">{{ Auth::user()->name }}</h6>
                                    <p class="mb-0 text-sm text-gray-600">
                                        @if (Auth::user()->is_active == '0')
                                        <span class="badge bg-danger">Offline</span>
                                        @else
                                        <span class="badge bg-success">Online</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="user-img d-flex align-items-center">
                                    <div class="avatar avatar-md">
                                        @if (Auth::user()->photo == null)
                                        <i class="fas fa-user-circle fa-2x"></i>
                                        @else
                                        <img class="img-profile rounded-circle" src="{{ asset('photo_profile') . '/' . Auth::user()->photo }}" alt="">

                                        @endif
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li>
                                <a class="dropdown-item" href="/profile">
                                    <i class="icon-mid bi bi-person me-2"></i>
                                    My Profile
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}">
                                    <i class="icon-mid bi bi-box-arrow-left me-2"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>