@extends('template.admin', ['title' => 'Edit Transaction'])

@section('content')





<div id="main-content">

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Data Transaction</h3>
                    <p class="text-subtitle text-muted">Please change data as needed.</p>
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
            {{-- Change Profile Information --}}
            <div class="row justify-content-center mt-5">
                <div class="card shadow w-75">
                    <div class="card-header">
                        <div class="col mb-4 text-center">
                            <h5>Form Edit Transaction</h5>
                        </div>
                    </div>
                    <div class="card-body pl-5 pr-5">
                        <form action="/update_transaction/{{ $transactions->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group position-relative mb-3">
                                <label for="code" class="form-label">Code</label>
                                <input type="text" class="form-control" name="code" id="code" value="{{$transactions->code}}">
                                @error('code')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$transactions->name}}">
                                @error('name')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group position-relative mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" name="price" id="price" value="{{$transactions->price}}">
                                <div class="form-control-icon mt-3">

                                </div>
                                @error('price')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group position-relative mb-3">
                                <label for="qty" class="form-label">Qty</label>
                                <input type="number" class="form-control" name="qty" id="qty" value="{{$transactions->qty}}">
                                <div class="form-control-icon mt-3">

                                </div>
                                @error('qty')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group position-relative mb-3">
                                <label for="qty" class="form-label">Total</label>
                                <input type="number" class="form-control" name="total" id="total" value="{{$transactions->total}}">
                                <div class="form-control-icon mt-3">

                                </div>
                                @error('total')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row my-4">
                                <div class="col pt-3">
                                    <a href="{{ route('transaction_data') }}" class="btn btn-lg btn-block btn-primary mr-2">
                                        <i class="far fa-arrow-alt-circle-left"></i>
                                        Back
                                    </a>
                                </div>
                                <div class="col pt-3">
                                    <button type="submit" class="btn btn-dark btn-lg btn-block">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- End Change Profile Information --}}
        </section>

    </div>
    @if ($message = Session::get('success'))
    @include('sweetalert::alert')
    @endif

    @endsection