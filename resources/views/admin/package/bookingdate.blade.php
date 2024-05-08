@extends('layouts.adminlayout')

@section('content')
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Create Destination</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none"
                                            href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Create Destination</li>
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
            <div class="collapsible-section mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card w-100 position-relative overflow-hidden">
                            <form method="post" action="{{ route('admin.adddate', [$package->id]) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="px-4 py-3 border-bottom">
                                    <h5>Add Package</h5>
                                    <p class="card-subtitle mb-1">Create New Package</p>
                                </div>
                                <div class="border-top">
                                    <div class="row m-auto">
                                        {{-- ------------------package info---------------- --}}
                                        <div class="card-body p-4">
                                            <h5 class="fs-4 fw-semibold mb-4">Package Info</h5>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-4">
                                                        <label for="location" class="form-label fw-semibold">Tour
                                                            Location</label>
                                                        <input type="text" name="location" id="location"
                                                            class="form-control @error('location') is-invalid @enderror"
                                                            value="{{ $package->location }}" placeholder="Tour Location"
                                                            readonly>
                                                        @error('location')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-4">
                                                        <label for="title" class="form-label fw-semibold">Title</label>
                                                        <input type="text" name="title" id="title"
                                                            class="form-control @error('title') is-invalid @enderror"
                                                            value="{{ $package->title }}" placeholder="Give a title"
                                                            readonly>
                                                        @error('title')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <label for="days" class="form-label fw-semibold">Days</label>
                                                        <input type="test" name="days" id="days"
                                                            class="form-control @error('days') is-invalid @enderror"
                                                            value="{{ $package->days }}"
                                                            placeholder="(e.g- 4 Days/5 Nights)" readonly>
                                                        @error('days')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <label for="nights" class="form-label fw-semibold">Nights</label>
                                                        <input type="text" name="nights" id="nights"
                                                            class="form-control @error('nights') is-invalid @enderror"
                                                            value="{{ $package->nights }}"
                                                            placeholder="(e.g- 4 Days/5 Nights)" readonly>
                                                        @error('nights')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="maxpeople" class="form-label fw-semibold">Max
                                                            people</label>
                                                        <input class="form-control @error('maxpeople') is-invalid @enderror"
                                                            value="{{ $package->maxpeople }}" name="maxpeople"
                                                            id="maxpeople" type="text" placeholder="Maximum People"
                                                            readonly>
                                                        @error('maxpeople')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        {{-- -----------------Dates---------------- --}}
                                        <div class="card-body p-4">
                                            <h5 class="fs-4 fw-semibold mb-4">Add Dates</h5>
                                            <div class="email-repeater mb-3">
                                                <div data-repeater-list="repeater-group">
                                                    <div data-repeater-item class="row mb-3">
                                                        <div class="row">

                                                            <div class="mb-3 col-md-5">
                                                                <label for="start" class="form-label">Start
                                                                    Date</label>
                                                                <input type="date" name="start"
                                                                    class="form-control @error('start') is-invalid @enderror"
                                                                    placeholder="Description" required>
                                                                @error('start')
                                                                    {{ $message }}
                                                                @enderror
                                                            </div>
                                                            <div class="mb-3 col-md-5">
                                                                <label for="end" class="form-label">End Date</label>
                                                                <input type="date" name="end"
                                                                    class="form-control @error('end') is-invalid @enderror"
                                                                    placeholder="Description" required>
                                                                @error('end')
                                                                    {{ $message }}
                                                                @enderror
                                                            </div>
                                                            <div class="mb-3 col-md-1">
                                                                <label for="abc" class="form-label"
                                                                    style="color: white">&nbsp;-
                                                                    &nbsp;</label>
                                                                <button data-repeater-delete="" class="btn btn-danger"
                                                                    id="abc" type="button">
                                                                    <i class="ti ti-circle-x fs-5 d-flex"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" data-repeater-create="repeater-group"
                                                    class="btn btn-success">
                                                    <div class="d-flex align-items-center">
                                                        Add Itinerary
                                                        <i class="ti ti-circle-plus ms-1 fs-5"></i>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>











                                    </div>
                                    <div class="p-3 border-top">
                                        <div class="d-flex flex-wrap gap-6 align-items-center">
                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn bg-success-subtle text-success mb-2 active">
                                                    <i class="ti ti-settings fs-4 text-active"></i>
                                                    <span class="text-active">Upload</span>
                                                </button>

                                                <button type="reset"
                                                    class="btn bg-danger-subtle text-danger ms-6  px-4 mb-2">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
