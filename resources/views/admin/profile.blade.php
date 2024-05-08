@extends('layouts.adminlayout')

@section('content')
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">My Profile</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none"
                                            href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">profile</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-3">
                            <div class="text-center mb-n5">
                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/breadcrumb/ChatBc.png"
                                    alt="" class="img-fluid mb-n4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (Session::get('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif
            @if (Session::get('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif

            <div class="card overflow-hidden">
                <div class="card-body p-0">
                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/backgrounds/profilebg.jpg"
                        alt="" class="img-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 mt-n3 mb-5 order-lg-2 order-1">
                            <div class="mt-n5">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <div class="d-flex align-items-center justify-content-center round-100">
                                        <div
                                            class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden round-100">
                                            <img src="{{ asset('uploads/profile/admin/'.auth()->guard('admin')->user()->image) }}"
                                                alt="" class="w-100 h-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h5 class="fs-5 mb-0 fw-semibold">{{ auth()->guard('admin')->user()->name }}</h5>
                                    <p class="mb-0 fs-4">Admin</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-pills user-profile-tab justify-content-end mt-2 bg-primary-subtle rounded-2 rounded-top-0">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" type="button" aria-selected="true" onclick="window.location.href = '{{ route('admin.profile') }}'">
                                <i class="ti ti-user-circle me-2 fs-6"></i>
                                <span class="d-none d-md-block">Profile</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"type="button" onclick="window.location.href = '{{ route('admin.editprofile') }}'">
                                <i class="ti ti-edit me-2 fs-6"></i>
                                <span class="d-none d-md-block">Edit Profile</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="tab-pane fade show active" aria-labelledby="pills-profile-tab" >
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow-none border">
                                <div class="card-body">
                                    <h4 class="fw-semibold mb-3 px-4 py-3 border-bottom">Introduction</h4>
                                    <div class="card-body p-4">
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex align-items-center gap-6 flex-wrap mb-4">
                                                <i class="ti ti-user text-dark fs-6"></i>
                                                <h6 class="fs-4 fw-semibold mb-0">{{ auth()->guard('admin')->user()->name }}
                                                </h6>
                                            </li>
                                            <li class="d-flex align-items-center gap-6 flex-wrap mb-4">
                                                <i class="ti ti-mail text-dark fs-6"></i>
                                                <h6 class="fs-4 fw-semibold mb-0">
                                                    {{ auth()->guard('admin')->user()->email }}

                                                </h6>
                                            </li>
                                            <li class="d-flex align-items-center gap-6 flex-wrap mb-4">
                                                <i class="ti ti-device-mobile text-dark fs-6"></i>
                                                <h6 class="fs-4 fw-semibold mb-0">
                                                    {{ auth()->guard('admin')->user()->mobile }}
                                                </h6>
                                            </li>
                                            <li class="d-flex align-items-center gap-6 flex-wrap mb-2">
                                                <i class="ti ti-map-pin text-dark fs-6"></i>
                                                <h6 class="fs-4 fw-semibold mb-0">
                                                    {{ auth()->guard('admin')->user()->address }}
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <br><br><br><br>
                        </div>
                    </div>
                </div>
                {{-- <div class="tab-pane fade"  aria-labelledby="pills-followers-tab" >
                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <div class="card w-100 position-relative overflow-hidden">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-semibold">Change Profile</h5>
                                    <p class="card-subtitle mb-4">Change your profile picture from here</p>
                                    <div class="text-center">
                                        <form action="{{ route('admin.avatar') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" style="margin-top: 50px !important;">
                                                @error('image')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center my-4 gap-6">
                                                <button type="submit" class="btn btn-primary">Upload</button>
                                                <button type="reset" class="btn bg-danger-subtle text-danger">Cancel</button>
                                            </div>
                                        </form>

                                    <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <div class="card w-100 position-relative overflow-hidden">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-semibold">Change Password</h5>
                                    <p class="card-subtitle mb-4">To change your password please confirm here</p>
                                    <form action="{{ route('admin.password') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Current Password</label>
                                            <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" placeholder="Current Password">
                                            @error('current_password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword2" class="form-label">New Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword3" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password">
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end my-4 gap-6">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <button type="reset" class="btn bg-danger-subtle text-danger">Cancel</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card w-100 position-relative overflow-hidden mb-0">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-semibold">Personal Details</h5>
                                    <p class="card-subtitle mb-4">To change your personal detail , edit and save from here
                                    </p>
                                    <form action="{{ route('admin.update') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="exampleInputtext" class="form-label">Your Name</label>
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                                        value="{{ auth()->guard('admin')->user()->name }}">
                                                    @error('name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputtext3" class="form-label">Phone</label>
                                                    <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                                        value="{{ auth()->guard('admin')->user()->mobile }}">
                                                    @error('mobile')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="exampleInputtext1" class="form-label">Email</label>
                                                    <input class="form-control @error('email') is-invalid @enderror" name="email"
                                                        value="{{ auth()->guard('admin')->user()->email }}" readonly style="background-color: whitesmoke">
                                                    @error('email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div>
                                                    <label for="exampleInputtext4" class="form-label">Address</label>
                                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                                                        value="{{ auth()->guard('admin')->user()->address }}">
                                                    @error('address')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                    <button type="reset" class="btn bg-danger-subtle text-danger">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <br><br><br><br>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
