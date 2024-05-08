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
                                                    <h6 class="fs-4 fw-semibold mb-0">payment id</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Name</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Email</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Start-End date</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Adult/Child</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Amount</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Status</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Payment Method</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Booking Date</h6>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bookings as $booking)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h5 class="fw-semibold mb-1">
                                                                {{ Str::limit($booking->payment_id, '10', '...') }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h5 class="fw-semibold mb-1">
                                                                {{ $booking->name }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h5 class="fw-semibold mb-1">
                                                                {{ $booking->email }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h5 class="fw-semibold mb-1">
                                                                {{ \Carbon\Carbon::parse($booking->start)->format('dM') }}
                                                                -
                                                                {{ \Carbon\Carbon::parse($booking->end)->format('dM/y') }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h5 class="fw-semibold mb-1">
                                                                {{ $booking->adult }}, {{ $booking->child }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h5 class="fw-semibold mb-1">
                                                                {{ $booking->amount }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h5 class="fw-semibold mb-1">
                                                                {{ $booking->status }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h5 class="fw-semibold mb-1">
                                                                {{ $booking->payment_method }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h5 class="fw-semibold mb-1">
                                                                {{ $booking->created_at->format('d-M-y') }}
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                        <thead class="text-dark fs-4">
                                            <tr>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">payment id</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Name</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Email</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Start-End date</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Adult/Child</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Amount</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Status</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Payment Method</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Booking Date</h6>
                                                </th>

                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
