@extends('layouts.adminlayout')

@section('content')
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">View Packages</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none"
                                            href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">View Packages</li>
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
                                <h5 class="card-title fw-semibold mb-0 lh-sm">Packages</h5>

                            </div>
                            <div class="card-body p-4">
                                <div class="table-responsive">

                                    <table class="table border text-nowrap mb-0 align-middle ">
                                        <thead class="text-dark fs-4 text-center">
                                            <tr>
                                                {{-- <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Sl.No.</h6>
                                            </th> --}}
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Destination</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Location</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Title</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Duration</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Actions</h6>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: center">
                                            {{-- $location = Destination::where('destination_id', 1)->value('location'); --}}
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($package as $item)
                                                <tr>
                                                    {{-- <td>
                                                    <div class="align-items-center gap-2">
                                                        <h5 class="fw-semibold mb-1">{{ $i }}</h5>
                                                    </div>
                                                </td> --}}
                                                    <td>
                                                        <div class="align-items-center gap-2">
                                                            <h5 class="fw-semibold mb-1">
                                                                {{ Str::limit($item->destinations->destination, '10', '...') }}
                                                            </h5>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class=" align-items-center gap-2">
                                                            <h5 class="fw-semibold mb-1">
                                                                {{ Str::limit($item->location, '10', '...') }}</h5>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=" align-items-center gap-2">
                                                            <h5 class="fw-semibold mb-1">
                                                                {{ Str::limit($item->title, '10', '...') }}</h5>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=" align-items-center gap-2">
                                                            <h5 class="fw-semibold mb-1">{{ $item->days }}
                                                                Days/{{ $item->nights }} Nights</h5>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{-- <a href="{{ route('admin.packageview',[$item->id]) }}" class="btn btn-rounded btn-outline-success">
                                                        <i class="ti ti-eye fs-4"></i>
                                                    </a> --}}
                                                        <a href="{{ route('admin.packageedit', [$item->id]) }}"
                                                            class="btn btn-rounded btn-outline-warning">
                                                            <i class="ti ti-edit fs-4"></i>
                                                        </a>
                                                        <a href="{{ route('admin.packagedelete', ['id' => $item->id]) }}"
                                                            class="btn btn-rounded btn-outline-danger">
                                                            <i class="ti ti-trash fs-4"></i>
                                                        </a>
                                                        <a href="{{ route('admin.packagebooking', ['id' => $item->id]) }}"
                                                            class="btn btn-rounded btn-outline-info">
                                                            <i class="ti ti-calendar-check fs-4"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                                @php
                                                    $i++;
                                                @endphp
                                            @endforeach
                                        </tbody>
                                    </table>


                                </div>
                                <div class="d-flex justify-content-end mt-4">
                                    {{ $package->links('vendor.pagination.bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

{{-- <button type="button" class="d-inline-flex align-items-center justify-content-center btn btn-danger rounded-circle btn-lg round-48">
    <i class="fs-5 ti ti-file-description"></i>
  </button> --}}
