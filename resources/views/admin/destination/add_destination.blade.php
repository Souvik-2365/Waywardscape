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
        @if (Session::get('success'))
                <div class="alert bg-primary-subtle text-primary alert-dismissible fade show" role="alert">
                    <div class="d-flex align-items-center text-primary ">
                        <i class="ti ti-info-circle me-2 fs-4"></i>
                            {{ Session::get('success') }}
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
            @endif

        <div class="collapsible-section mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card w-100 position-relative overflow-hidden">
                        <form action="{{ route('admin.storedestination') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="px-4 py-3 border-bottom">
                                <h5>Add Destination</h5>
                                <p class="card-subtitle mb-1">Create New Destination</p>
                            </div>
                            <div class="border-top">
                                <div class="row m-auto">
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label for="destination"
                                                class="control-label col-form-label">Destination</label>
                                            <input type="text" class="form-control @error('destination') is-invalid @enderror" name="destination" id="destination"  placeholder="Enter Destination">
                                            @error('destination')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label for="description"
                                                class="control-label col-form-label">Description</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Enter description"
                                                rows="3"></textarea>
                                            @error('description')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label for="image"
                                                class="control-label col-form-label">Image</label>
                                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                                            @error('image')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="p-3 border-top">
                                <div class="d-flex flex-wrap gap-6 align-items-center">
                                   <div class="text-center">
                                            <button type="submit" class="btn bg-success-subtle text-success mb-2 active "  >
                                                <i class="ti ti-settings fs-4 text-active"></i>
                                                <span class="text-active">Upload</span>
                                            </button>

                                            <button type="reset"
                                                class="btn bg-danger-subtle text-danger ms-6 rounded-pill px-4">
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
