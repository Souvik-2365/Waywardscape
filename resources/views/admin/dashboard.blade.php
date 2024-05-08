@extends('layouts.adminlayout')

@section('content')

<div class="body-wrapper">
    <div class="container-fluid">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100 bg-primary-subtle overflow-hidden shadow-none">
                <div class="card-body position-relative" style="height: 200px;">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="d-flex align-items-center mb-7">
                                <div class="rounded-circle overflow-hidden me-6">
                                    <img src="{{ asset('uploads/profile/admin/'.auth()->guard('admin')->user()->image) }}"
                                        alt="" width="40" height="40">
                                </div>
                                <h5 class="fw-semibold mb-0 fs-5">Welcome back {{ auth()->guard('admin')->user()->name }}!</h5>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="welcome-bg-img mb-n7 text-end">
                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/backgrounds/welcome-bg.svg"
                                    alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection
