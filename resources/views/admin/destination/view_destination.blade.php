@extends('layouts.adminlayout')

@section('content')

<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">View Destinations</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none"
                                        href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">View Destinations</li>
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

                        <div class="px-4 py-3 border-bottom">
                            <h5 class="card-title fw-semibold mb-0 lh-sm">Destinations</h5>

                        </div>
                        <div class="card-body p-4">
                            <div class="table-responsive">

                                <table class="table border text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Destination</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Location</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Edit Records</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Delete Records</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($destination as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    {{-- Image Path: {{ $item->image }} --}}
                                                    <img src="{{ asset('uploads/destination/'. $item->image) }}" class="rounded-2" width="42" height="42" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <h5 class="fw-semibold mb-1">{{ Str::limit($item->destination, '10', '...')  }}</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.editdestination',['id' => $item->id]) }}" type="button" class="btn btn-rounded btn-outline-warning"> Edit </a>
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/destination/delete',[$item->id]) }}" onclick="return confirm('Are you sure you want to delete the record?')" type="button" class="btn btn-rounded btn-outline-danger">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Destination</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Location</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Edit Records</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Delete Records</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                {{ $destination->links('vendor.pagination.bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

