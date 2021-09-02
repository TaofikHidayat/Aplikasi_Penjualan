@extends('template.admin', ['title' => 'Data Transaction'])

@section('content')

<div id="main-content">

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 mt-5 order-last">
                    <h3>Data Transaction</h3>
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
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-3" style="width: 190px;">
                            <a href="{{ route('transaction') }}" class="btn btn-primary btn-icon-split me-0">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Add Transaction</span>
                            </a>
                        </div>
                        <div class="col-md-4" style="width: 190px;">
                            <a href="{{ route('print_transaction') }}" class="btn btn-success btn-icon-split btn-block">
                                <span class="icon text-white-50">
                                    <i class="fas fa-print"></i>
                                </span>
                                <span class="text">Print</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-dark table-striped" id="table1">
                        <thead>
                            <tr>
                                <th width="20px">#.</th>
                                <th width="100px">Code</th>
                                <th width="110px">Name</th>
                                <th width="120px">Price</th>
                                <th width="50px">Qty</th>
                                <th width="100px">Total</th>
                                <th width="180px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $index => $transaction)
                            <tr>
                                <td>{{ $index + 1 . '.'}}</td>
                                <td>{{ $transaction->code }}</td>
                                <td>{{ $transaction->name }}</td>
                                <td>{{ $transaction->price }}</td>
                                <td>{{ $transaction->qty }}</td>
                                <td>{{ $transaction->total }}</td>
                                <td>
                                    <a href="/edit_transaction/{{ $transaction->id }}" class="btn btn-sm btn-warning mr-2 ">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>

                                    <a href="/delete_transaction/{{ $transaction->id }}" class="btn btn-sm btn-danger ml-2">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
    @if ($message = Session::get('success'))
    @include('sweetalert::alert')
    @endif

    @endsection