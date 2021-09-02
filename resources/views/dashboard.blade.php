@extends('template.admin', ['title' => 'Dashboard'])

@section('content')





<div id="main-content">

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Dashboard</h3>
                    <p class="text-subtitle text-muted">Selamat Datang DI Aplikasi Penjualan.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col">
                    <div class="card text-white bg-success" style="max-width: 18rem;">
                        <div class="card-header bg-success">User</div>
                        <div class="card-body text-white">
                            <h1 class="card-title text-white fs-1">
                                <i class="fas fa-users ms-5 me-4"></i>{{ $users }}
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-danger" style="max-width: 18rem;">
                        <div class="card-header bg-danger">Inventory</div>
                        <div class="card-body text-white">
                            <h1 class="card-title text-white fs-1">
                                <i class="fas fa-boxes ms-5 me-4"></i>{{ $inventories }}
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-primary" style="max-width: 18rem;">
                        <div class="card-header bg-primary">Transaction</div>
                        <div class="card-body text-white">
                            <h1 class="card-title text-white fs-1">
                                <i class="fas fa-shopping-cart ms-5 me-4"></i>{{ $transactions }}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
</div>


@endsection