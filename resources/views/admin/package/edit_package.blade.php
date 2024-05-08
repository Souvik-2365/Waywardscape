@extends('layouts.adminlayout')

@section('content')

    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Edit Package</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none"
                                            href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none"
                                            href="{{ route('admin.viewpackage') }}">View Packages</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Edit Package</li>
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

                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            @if (session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif

                            <form method="post" action="{{ route('admin.updatepackage',[$package->id]) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="px-4 py-3 border-bottom">
                                    <h5>Add Package</h5>
                                    <p class="card-subtitle mb-1">Create New Package</p>
                                </div>
                                <div class="border-top">
                                    <div class="row m-auto">
                                        {{-- ---------------------------------- --}}
                                        <div class="card-body p-4">
                                            <h5 class="fs-4 fw-semibold mb-4">Select Destination</h5>
                                            <div class="col-12">
                                                <div class="mb-2">
                                                    <label for="destination_id"
                                                        class="control-label col-form-label">Destination</label>
                                                    <select name="destination_id" id="destination_id"
                                                        class="form-select @error('destination_id') is-invalid @enderror"
                                                        aria-label="Default select example">
                                                        <option value="{{ $package->destinations->destination }}">{{ $package->destinations->destination }}</option>
                                                        @foreach ($destination as $item)
                                                            <option value="{{ $item->id }}">{{ $item->destination }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('destination_id')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        {{-- ------------------package info---------------- --}}
                                        <div class="card-body p-4">
                                            <h5 class="fs-4 fw-semibold mb-4">Package Info</h5>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-4">
                                                        <label for="location"
                                                            class="form-label fw-semibold">Tour
                                                            Location</label>
                                                        <input type="text" name="location" id="location"
                                                            class="form-control @error('location') is-invalid @enderror" value="{{ $package->location }}"
                                                            placeholder="Tour Location">
                                                        @error('location')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-4">
                                                        <label for="title" class="form-label fw-semibold">Title</label>
                                                        <input type="text" name="title" id="title"
                                                            class="form-control @error('title') is-invalid @enderror" value="{{ $package->title }}"
                                                            placeholder="Give a title">
                                                        @error('title')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <label for="days"
                                                            class="form-label fw-semibold">Days</label>
                                                        <input type="test" name="days" id="days"
                                                            class="form-control @error('days') is-invalid @enderror" value="{{ $package->days }}"
                                                            placeholder="(e.g- 4 Days/5 Nights)">
                                                        @error('days')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <label for="nights"
                                                            class="form-label fw-semibold">Nights</label>
                                                        <input type="text" name="nights" id="nights"
                                                            class="form-control @error('nights') is-invalid @enderror" value="{{ $package->nights }}"
                                                            placeholder="(e.g- 4 Days/5 Nights)">
                                                        @error('nights')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="maxpeople" class="form-label fw-semibold">Max
                                                            people</label>
                                                        <input class="form-control @error('maxpeople') is-invalid @enderror" value="{{ $package->maxpeople }}"
                                                            name="maxpeople" id="maxpeople" type="text" placeholder="Maximum People">
                                                        @error('maxpeople')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-4">
                                                        <label for="about"
                                                            class="control-label col-form-label">About</label>
                                                        <textarea class="form-control @error('about') is-invalid @enderror" name="about" id="about" placeholder="Enter description"
                                                            rows="3">{{ $package->location }}</textarea>
                                                        @error('about')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-4">
                                                        <label for="price" class="form-label fw-semibold">Cost Per
                                                            Person</label>
                                                        <input type="text" name="price" id="price"
                                                            class="form-control @error('price') is-invalid @enderror" value="{{ $package->price }}"
                                                            placeholder="Cost per person">
                                                        @error('price')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-4">
                                                        <label for="Discounted_Price"
                                                            class="form-label fw-semibold">Discounted
                                                            Price</label>
                                                        <input type="text" name="discounted_price" id="discounted_price"
                                                            class="form-control @error('discounted_price') is-invalid @enderror" value="{{ $package->discounted_price }}"
                                                            placeholder="Discounted price">
                                                        @error('discounted_price')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        {{-- -----------------Itinerary---------------- --}}
                                        <div class="card-body p-4">
                                            <h5 class="fs-4 fw-semibold mb-4">Itinerary</h5>
                                            <div class="email-repeater mb-3">
                                                <div   data-repeater-list="repeater-group">
                                                    @foreach ($package->packageItinerarys as $itinerary)
                                                        <div data-repeater-item class="row mb-3">
                                                            <div class="row">
                                                                <div class="mb-3 col-md-2">
                                                                    <label for="day" class="form-label" >Day</label>
                                                                    <input type="text" name="day" id="day"
                                                                        class="form-control @error('day') is-invalid @enderror" value="{{ $itinerary->day }}"
                                                                        placeholder="(e.g-01,02,...)" required>
                                                                    @error('day')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </div>
                                                                <div class="mb-3 col-md-3">
                                                                    <label for="action" class="form-label">Action</label>
                                                                    <input type="text" name="action" id="action"
                                                                        class="form-control @error('action') is-invalid @enderror" value="{{ $itinerary->action }}"
                                                                        placeholder="What will do today..." required>
                                                                </div>
                                                                <div class="mb-3 col-md-7">
                                                                    <label for="details" class="form-label"
                                                                    >Details/Description</label>
                                                                    <input type="text" name="details" id="details"
                                                                        class="form-control @error('details') is-invalid @enderror" value="{{ $itinerary->details }}"
                                                                        placeholder="Description" required>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3 col-md-3">
                                                                    <label for="meals" class="form-label">Meals</label>
                                                                    <input type="text" name="meals" id="meals"
                                                                        class="form-control @error('meals') is-invalid @enderror" value="{{ $itinerary->meals }}"
                                                                        placeholder="Meal">
                                                                </div>
                                                                <div class="mb-3 col-md-3">
                                                                    <label for="activity" class="form-label">Activity</label>
                                                                    <input type="text" name="activity" id="activity"
                                                                        class="form-control @error('activity') is-invalid @enderror" value="{{ $itinerary->activity }}"
                                                                        placeholder="Activity">
                                                                </div>
                                                                <div class="mb-3 col-md-3">
                                                                    <label for="sightseeing" class="form-label"
                                                                    >Sightseeing</label>
                                                                    <input type="text" name="sightseeing" id="sightseeing"
                                                                        class="form-control @error('sightseeing') is-invalid @enderror" value="{{ $itinerary->sightseeing }}"
                                                                        placeholder="Sightseeing">
                                                                </div>
                                                                <div class="mb-3 col-md-1">
                                                                    <label for="abc" class="form-label"
                                                                        style="color: white">&nbsp;-
                                                                        &nbsp;</label>
                                                                    <button data-repeater-delete="" class="btn btn-danger" id="abc"
                                                                        type="button">
                                                                        <i class="ti ti-circle-x fs-5 d-flex"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <button type="button" data-repeater-create="repeater-group" class="btn btn-success">
                                                    <div class="d-flex align-items-center">
                                                        Add Itinerary
                                                        <i class="ti ti-circle-plus ms-1 fs-5"></i>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                        {{-- -----------------Image-------------------- --}}
                                        <div class="card-body p-4">
                                            <h5 class="fs-4 fw-semibold mb-4">Images</h5>
                                            <div class="email-repeater mb-3">
                                                <div data-repeater-list="repeater-image">
                                                    <div class="row">
                                                        @foreach ($package->packageImages as $images)

                                                            <div class="mb-3 col-md-2">
                                                                    <img
                                                                        src="{{ asset('uploads/package/'. $images->image) }}"
                                                                        class="img-fluid rounded-top rounded-bottom mt-3 mb-3" width="100px" height="100px"
                                                                        alt=""
                                                                    />
                                                                    <a href="{{ route('admin.deletepackageimage',[$images->id]) }}" class="btn btn-rounded btn-outline-danger">
                                                                        <i class="ti ti-trash fs-4"></i>
                                                                    </a>
                                                            </div>
                                                    @endforeach
                                                    </div>

                                                    <div data-repeater-item="" class="row mb-3" style="">
                                                        <div class="col-md-10">
                                                            <div class="custom-file">
                                                                <input type="file" name="image"
                                                                    class="form-control @error('image') is-invalid @enderror"
                                                                    >
                                                                @error('image')
                                                                    {{ $message }}
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mt-3 mt-md-0">
                                                            <button data-repeater-delete="" class="btn btn-danger"
                                                                type="button">
                                                                <i class="ti ti-circle-x fs-5 d-flex"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                                <button type="button" data-repeater-create="" class="btn btn-success">
                                                    <div class="d-flex align-items-center">
                                                        Add More Image
                                                        <i class="ti ti-circle-plus ms-1 fs-5"></i>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="p-3 border-top">
                                    <div class="d-flex flex-wrap gap-6 align-items-center">
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-success-subtle text-success mb-2 active">
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
    <script>
        function reloadPage() {
            window.location.reload();
        }
    </script>
@endsection
