@extends('template.auth', ['title' => 'Register'])

@section('content')



<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h1><b>Admin</b>LTE</h1>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="{{ route('register') }}" method="post">
                    @csrf
                    @error('name')
                    <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>

                    @error('email')
                    <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    @error('password')
                    <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                        <div class="col-8">
                            <a href="{{ route('login') }}" class="text-center align-middle">I already have a membership</a>
                        </div>
                        <div class="col text-right">
                            <button id="success" type="submit" class="btn btn-dark center-block">Register</button>
                        </div>
                    </div>
                    <div class="column mr-4 pt-1">

                    </div>
                    <div class="col-4 pr-0">

                    </div>
                    <!-- /.col -->
            </div>
            </form>


        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
    @include('sweetalert::alert')

    @endsection