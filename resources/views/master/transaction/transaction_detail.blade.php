@extends('template.admin', ['title' => 'Detail Transaction'])

@section('content')

<div id="main-content">

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail Transaction</h3>
                    <p class="text-subtitle text-muted">Please input quantity.</p>
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
                        <form action="/count/{{ $inventories->id }}" method="post">
                            @csrf
                            <table width="80%" border="0" cellspacing="0" cellpadding="0" class="ms-4 mt-3">
                                <tr>
                                    <td>
                                        <input type="hidden" class="form-control" name="id" id="id" value="{{ $inventories->id }}" style="height: 25px; width: 100px">
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td>Code</td>
                                    <td class="name px-2 pb-2"> : </td>
                                    <td>
                                        {{ $inventories->code }}
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td>Name</td>
                                    <td class="email px-2 pb-2"> : </td>
                                    <td>
                                        {{ $inventories->name }}
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td>Price</td>
                                    <td class="gender px-2 pb-2"> : </td>
                                    <td>
                                        {{ $inventories->price }}
                                    </td>
                                </tr>
                                <tr class="align-top">
                                    <td>Qty</td>
                                    <td class="age px-2 pb-2"> : </td>
                                    <td>
                                        <input type="number" class="form-control" name="qty" id="qty" value="1" style="height: 25px; width: 100px">
                                    </td>
                                </tr>
                            </table>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row text-center">
                    <div class="col-md-2 ms-auto pb-5 mt-5">
                        <a href="{{ route('transaction') }}" class="btn btn-block btn-primary mr-2">
                            <i class="far fa-arrow-alt-circle-left"></i>
                            Back
                        </a>
                    </div>
                    <div class="col-md-2 me-auto pb-5 mt-5">
                        <button type="submit" class="btn btn-block btn-dark mr-2">
                            <i class="fas fa-calculator"></i>
                            Count
                        </button>
                    </div>
                </div>
                </form>
            </div>
            {{-- End Detail User --}}

        </section>
    </div>

    @endsection