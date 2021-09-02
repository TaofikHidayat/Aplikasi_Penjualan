@extends('template.admin', ['title' => 'Payment'])

@section('content')

<div id="main-content">

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Payment</h3>
                    <p class="text-subtitle text-muted">Please pay here.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Transaction</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            {{-- Detail User Data --}}
            <div class="card shadow">
                <div class="row">
                    <div class="col"></div>
                    <div class="col pt-4 pl-5">
                        <h3 class="text-center" style="color: black;">Total</h3>
                        <h1 class="text-center" style="color: green;">Rp. {{ $total }}</h1>
                        <form action="/pay/{{ $inventories->id }}" method="post">
                            @csrf
                            <input type="hidden" class="form-control" name="id" id="id" value="{{ $inventories->id }}">
                            <input type="hidden" class="form-control" name="code" id="code" value="{{ $inventories->code }}">
                            <input type="hidden" class="form-control" name="name" id="name" value="{{ $inventories->name }}">
                            <input type="hidden" class="form-control" name="price" id="price" value="{{ $inventories->price }}">
                            <input type="hidden" class="form-control" name="qty" id="qty" value="{{ $qty }}">
                            <input type="hidden" class="form-control" name="total" id="total" value="{{ $total }}">
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row text-center">
                    <div class="col-md-2 ms-auto pb-5 mt-5">
                        <a href="{{ route('transaction') }}" class="btn btn-block btn-danger mr-2">
                            <i class="far fa-times-circle"></i>
                            Cancel
                        </a>
                    </div>
                    <div class="col-md-2 me-auto pb-5 mt-5">
                        <button type="submit" class="btn btn-block btn-success mr-2">
                            <i class="fas fa-money-bill-wave me-2"></i>
                            Pay
                        </button>
                    </div>
                </div>
                </form>
            </div>
            {{-- End Detail User --}}
        </section>
    </div>
    @if ($message = Session::get('success'))
    @include('sweetalert::alert')
    @endif
    @endsection