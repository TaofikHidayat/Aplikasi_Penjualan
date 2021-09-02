@extends('template.admin', ['title' => 'User Detail'])

@section('content')

<div id="main-content">

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>User Table</h3>
                    <p class="text-subtitle text-muted">For user to check they list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            {{-- Detail User Data --}}
            <div class="card shadow">
                <div class="row">
                    <div class="col text-center pt-5">
                        <div class="avatar avatar-md">
                            @if ($users->photo == null)
                            <i class="fas fa-5x fa-user-circle fa-2x"></i>
                            @else
                            <img class="img-profile rounded-circle" src="{{ asset('photo_profile') . '/' . Auth::user()->photo }}" alt="" style="width: 100px; height: 100px;">

                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center mt-2">
                        @if ($users->is_active == '0')
                        <span class="badge bg-danger">Offline</span>
                        @else
                        <span class="badge bg-success">Online</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col pt-4 pl-5">
                        <table width="80%" border="0" cellspacing="0" cellpadding="0" class="ms-4">
                            <tr class="align-top">
                                <td>Full Name</td>
                                <td class="name px-2 pb-2"> : </td>
                                <td>{{ $users->name }}</td>
                            </tr>
                            <tr class="align-top">
                                <td>Email</td>
                                <td class="email px-2 pb-2"> : </td>
                                <td>{{ $users->email }}</td>
                            </tr>
                            <tr class="align-top">
                                <td>Gender</td>
                                <td class="gender px-2 pb-2"> : </td>
                                <td>{{ $users->gender }}</td>
                            </tr>
                            <tr class="align-top">
                                <td>Age</td>
                                <td class="age px-2 pb-2"> : </td>
                                <td>{{ $users->age }}</td>
                            </tr>
                            <tr class="align-top">
                                <td>Tlp.Number</td>
                                <td class="tlp_number px-2 pb-2"> : </td>
                                <td>+62{{ $users->tlp_number }}</td>
                            </tr>
                            <tr class="align-top">
                                <td>Address</td>
                                <td class="address px-2 pb-2"> : </td>
                                <td>{{ $users->address }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row text-center">
                    <div class="col-md-2 mx-auto pb-5 mt-5">
                        <a href="{{ route('user_data') }}" class="btn btn-block btn-primary mr-2">
                            <i class="far fa-arrow-alt-circle-left"></i>
                            Back
                        </a>
                    </div>
                </div>
            </div>
            {{-- End Detail User --}}

        </section>
    </div>

    @endsection