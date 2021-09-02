<div id="app">
    {{-- Sidebar --}}
    <div id="sidebar" class="active">
        <nav class="sidebar sidebar-wrapper bg-light active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="col text-center">
                        <a href="{{ route('dashboard') }}" class="fs-4"><i class="fab fa-4x fa-laravel"></i>
                            <br>
                            Aplikasi Penjualan</a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item  ">
                        <a href="{{ route('dashboard') }}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-folder-fill"></i>
                            <span>Master Data</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{ route('user_data') }}">User Data</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('inventory')}}">Inventory</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('transaction')}}">Transaction</a>
                            </li>
                        </ul>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </nav>
    </div>