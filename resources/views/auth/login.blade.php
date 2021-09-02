@extends('template.auth', ['title' => 'Login'])

@section('content')

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="assets/index2.html" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ route('login') }}" method="post">
                    @csrf
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
                    <div class="row mb-2">

                        <!-- /.col -->
                        <div class="col">
                            <button type="submit" class="btn btn-dark btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>

                    <p class="mb-0 text-center">
                        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
                    </p>
                </form>


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    @endsection