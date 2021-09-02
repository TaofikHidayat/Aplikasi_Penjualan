@extends('template.admin', ['title' => 'Profile'])

@section('content')
    

    

        
<div id="main-content">

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Vertical Layout with Navbar</h3>
                    <p class="text-subtitle text-muted">Navbar will appear in top of the page.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            {{-- Photo Profile --}}
            <div class="row justify-content-center mt-5">
                <div class="card shadow w-75">
                    <div class="card-header">
                        <div class="col-md-5">
                            <h5>Photo Profile</h5>
                        </div>
                    </div>
                    <div class="card-body pl-5 pr-5">
                        <form action="/update_photo_profile/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                @if (Auth::user()->photo == null)
                                    <i class="fas fa-user fa-3x"></i>
                                    @else
                                    <img class="img-profile ml-3" src="{{ asset('photo_profile') . '/' . Auth::user()->photo }}" alt="" style="width: 70px">
                                        
                                    @endif
                            </div>
                            <div class="form-group pt-2">
                                <label for="photo">Image :</label>
                                <input type="file" class="form-control-file" name="photo" id="photo" value="{{ Auth::user()->photo }}">
                                @error('photo')
                                    <div class="text-danger mb-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-2 pt-5">
                                <button type="submit" class="btn btn-dark btn-block">Save</button>    
                            </div>
                          </form>
                          
                    </div>
                </div>
            </div>
            {{-- End Photo Profile --}}
        </section>

        <section class="section">
           {{-- Change Profile Information --}}
            <div class="row justify-content-center mt-5">
                <div class="card shadow w-75">
                    <div class="card-header">
                        <div class="col-md-5">
                            <h5>Profile Information</h5>
                        </div>
                    </div>
                    <div class="card-body pl-5 pr-5">
                        <form action="/update_profile_information/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" id="name">
                                @error('name')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" id="email">
                                @error('email')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-control" id="gender" name="gender">
                                    <option selected>{{ Auth::user()->gender }}</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('gender')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>   

                            <div class="form-group mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" name="age" id="age" value="{{ Auth::user()->age }}" aria-describedby="age">
                                @error('age')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group position-relative has-icon-left mb-3">
                                <label for="tlp_number" class="form-label">Telephon Number</label>
                                <input type="number" class="form-control" name="tlp_number" id="tlp_number" value="{{ Auth::user()->tlp_number }}" aria-describedby="tlp">
                                <div class="form-control-icon mt-3">
                                    +62
                                </div>
                                @error('tlp_number')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="address">Address</label>
                                <textarea class="form-control" name="address" id="address" style="height: 100px">
                                {{ Auth::user()->address }}
                                </textarea>
                                @error('address')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                              </div>
                            <div class="col-2 pt-3">
                                <button type="submit" class="btn btn-dark btn-block">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- End Change Profile Information --}}
        </section>

        <section class="section">
            {{-- Change Password --}}
            <div class="row justify-content-center mt-5">
                <div class="card shadow w-75">
                    <div class="card-header">
                        <div class="col-md-5">
                            <h5>Change Password</h5>
                        </div>
                    </div>
                    <div class="card-body pl-5 pr-5">
                        <form action="/update_password" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("PATCH")
                            <div class="form-group mb-3">
                                <label for="old_password" class="form-label">Enter Old Password</label>
                                <input type="password" class="form-control" name="old_password" id="old_password">
                                @error('old_password')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Enter New Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                                @error('password')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="password_confirmation" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                            </div>
                            <div class="col-2 pt-3">
                                <button type="submit" class="btn btn-dark btn-block">Save</button>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
            {{-- End Change Password --}}
        </section>

        <section class="section">
           {{-- Delete Account --}}
           <div class="row justify-content-center mt-5">
                <div class="card shadow w-75">
                    <div class="card-header">
                        <div class="col-md-5">
                            <h5>Delete Your Account</h5>
                        </div>
                    </div>
                    <div class="card-body pl-5 pr-5">
                        <div class="col text-right">
                            <a href="/delete_account/{{ Auth::user()->id }}" class="btn btn-danger btn-icon-split btn-lg">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Delete Account</span>
                            </a>      
                        </div>  
                    </div>
                </div>
            </div>
        {{-- End Delete Acount --}}
        </section>
    </div>
    @if ($message = Session::get('success'))
    @include('sweetalert::alert')    
    @endif
    
@endsection