@extends('template.admin', ['title' => 'Inventory'])

@section('content')

<div id="main-content">

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 mt-5 order-last">
                    <h3>Inventory Table Data</h3>
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
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('inventory_add') }}" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Add Data</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-dark table-striped" id="table1">
                        <thead>
                            <tr>
                                <th width="20px">#.</th>
                                <th width="50px">Code</th>
                                <th width="170px">Name</th>
                                <th width="200px">Price</th>
                                <th width="130px">Qty</th>
                                <th width="180px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inventories as $index => $inventory)
                            <tr>
                                <td>{{ $index + 1 . '.'}}</td>
                                <td>{{ $inventory->code }}</td>
                                <td>{{ $inventory->name }}</td>
                                <td>{{ $inventory->price }}</td>
                                <td>{{ $inventory->qty }}</td>
                                <td>
                                    <a href="/edit_inventory/{{ $inventory->id }}" class="btn btn-sm btn-warning mr-2 ">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>

                                    <a href="/delete_inventory/{{ $inventory->id }}" class="btn btn-sm btn-danger ml-2">
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