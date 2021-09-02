@extends('template.admin', ['title' => 'Add Inventory'])

@section('content')





<div id="main-content">

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Add Inventory</h3>
                    <p class="text-subtitle text-muted">Please enter item data here.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Inventory</li>
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
                            <h5>Form Add Inventory</h5>
                        </div>
                    </div>
                    <div class="card-body pl-5 pr-5">
                        <form action="{{ route('inventory_insert') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group position-relative mb-3">
                                <label for="code" class="form-label">Code</label>
                                <input type="text" class="form-control" name="code" id="code">
                                @error('price')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                                @error('name')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group position-relative mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" name="price" id="price">
                                <div class="form-control-icon mt-3">

                                </div>
                                @error('price')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group position-relative mb-3">
                                <label for="qty" class="form-label">Qty</label>
                                <input type="number" class="form-control" name="qty" id="price">
                                <div class="form-control-icon mt-3">

                                </div>
                                @error('qty')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row my-4">
                                <div class="col pt-3">
                                    <a href="{{ route('inventory') }}" class="btn btn-lg btn-block btn-primary mr-2">
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