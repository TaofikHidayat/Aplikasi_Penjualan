@extends('template.admin', ['title' => 'User Data'])

@section('content')

<div id="main-content">

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>User Table Data</h3>
                    <p class="text-subtitle text-muted">For user to check they list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Data</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Simple Datatable
                </div>
                <div class="card-body">
                    <table class="table table-dark table-striped" id="table1">
                        <thead>
                            <tr>
                                <th width="50">#.</th>
                                <th width="150">Name</th>
                                <th width="150">Email</th>
                                <th width="100">Gender</th>
                                <th width="180">Tlp. Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $index => $user)
                            <tr>
                                <td>{{ $index + 1 . '.'}}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>+62{{ $user->tlp_number }}</td>
                                <td>
                                    <a href="/detail_user/{{ $user->id }}" class="btn btn-sm btn-info mr-2">
                                        <i class="fas fa-address-card"></i>
                                        Detail
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