@extends('layouts.masterlayout')


@section('content')
    <div class="breadcrumb-section"
        style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url(https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/innerpage/inner-banner-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="banner-content">
                        <h1>Package Sidebar</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Tours</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="package-grid-with-sidebar-section pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-12">
                    <div class="package-inner-title-section mb-40">
                        <p>Showing 1–12 of 101 results</p>
                        <div class="selector-and-grid">
                            <div class="selector">
                                <select>
                                    <option>Default Sorting</option>
                                    <option>Price Low to High</option>
                                    <option>Price High to Low</option>
                                </select>
                            </div>
                            <ul class="grid-view">
                                <li class="grid active">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 14 14">
                                        <mask id="mask0_1631_19" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="14" height="14">
                                            <rect width="14" height="14" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_1631_19)">
                                            <path
                                                d="M5.47853 6.08726H0.608726C0.272536 6.08726 0 5.81472 0 5.47853V0.608726C0 0.272536 0.272536 0 0.608726 0H5.47853C5.81472 0 6.08726 0.272536 6.08726 0.608726V5.47853C6.08726 5.81472 5.81472 6.08726 5.47853 6.08726Z">
                                            </path>
                                            <path
                                                d="M13.3911 6.08726H8.52132C8.18513 6.08726 7.9126 5.81472 7.9126 5.47853V0.608726C7.9126 0.272536 8.18513 0 8.52132 0H13.3911C13.7273 0 13.9999 0.272536 13.9999 0.608726V5.47853C13.9999 5.81472 13.7273 6.08726 13.3911 6.08726Z">
                                            </path>
                                            <path
                                                d="M5.47853 14.0013H0.608726C0.272536 14.0013 0 13.7288 0 13.3926V8.52279C0 8.1866 0.272536 7.91406 0.608726 7.91406H5.47853C5.81472 7.91406 6.08726 8.1866 6.08726 8.52279V13.3926C6.08726 13.7288 5.81472 14.0013 5.47853 14.0013Z">
                                            </path>
                                            <path
                                                d="M13.3916 14.0013H8.52181C8.18562 14.0013 7.91309 13.7288 7.91309 13.3926V8.52279C7.91309 8.1866 8.18562 7.91406 8.52181 7.91406H13.3916C13.7278 7.91406 14.0003 8.1866 14.0003 8.52279V13.3926C14.0003 13.7288 13.7278 14.0013 13.3916 14.0013Z">
                                            </path>
                                        </g>
                                    </svg>
                                </li>
                                <li class="lists ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 14 14">
                                        <mask id="mask0_1631_3" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="14" height="14">
                                            <rect width="14" height="14" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_1631_3)">
                                            <path
                                                d="M1.21747 2C0.545203 2 0 2.55848 0 3.24765C0 3.93632 0.545203 4.49433 1.21747 4.49433C1.88974 4.49433 2.43494 3.93632 2.43494 3.24765C2.43494 2.55848 1.88974 2 1.21747 2Z">
                                            </path>
                                            <path
                                                d="M1.21747 5.75195C0.545203 5.75195 0 6.30996 0 6.99913C0 7.68781 0.545203 8.24628 1.21747 8.24628C1.88974 8.24628 2.43494 7.68781 2.43494 6.99913C2.43494 6.30996 1.88974 5.75195 1.21747 5.75195Z">
                                            </path>
                                            <path
                                                d="M1.21747 9.50586C0.545203 9.50586 0 10.0643 0 10.753C0 11.4417 0.545203 12.0002 1.21747 12.0002C1.88974 12.0002 2.43494 11.4417 2.43494 10.753C2.43494 10.0643 1.88974 9.50586 1.21747 9.50586Z">
                                            </path>
                                            <path
                                                d="M13.0845 2.31055H4.42429C3.91874 2.31055 3.50879 2.7305 3.50879 3.24886C3.50879 3.76677 3.91871 4.1867 4.42429 4.1867H13.0845C13.59 4.1867 14 3.76677 14 3.24886C14 2.7305 13.59 2.31055 13.0845 2.31055Z">
                                            </path>
                                            <path
                                                d="M13.0845 6.06055H4.42429C3.91874 6.06055 3.50879 6.48047 3.50879 6.99886C3.50879 7.51677 3.91871 7.9367 4.42429 7.9367H13.0845C13.59 7.9367 14 7.51677 14 6.99886C14 6.48047 13.59 6.06055 13.0845 6.06055Z">
                                            </path>
                                            <path
                                                d="M13.0845 9.81348H4.42429C3.91874 9.81348 3.50879 10.2334 3.50879 10.7513C3.50879 11.2692 3.91871 11.6891 4.42429 11.6891H13.0845C13.59 11.6891 14 11.2692 14 10.7513C14 10.2334 13.59 9.81348 13.0845 9.81348Z">
                                            </path>
                                        </g>
                                    </svg>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="list-grid-product-wrap mb-70">
                        <div class="row gy-4">
                            @foreach ($packages as $package)
                                @php
                                    $firstImage = $package->packageImages->first(); // Get the first image of the package
                                @endphp
                                <div class="col-md-4 item">
                                    {{-- <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="{{ route('package-details') }}" class="card-img"><img
                                                    src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/home1/package-card-img1.png"
                                                    alt></a>
                                            <div class="batch">
                                                <span class="date">{{ $packages->days }} Days/{{ $packages->nights }} Nights</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li>Nepal</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="{{ route('package-details') }}">the Allure Italy's Rich Culture, History,
                                                        and Cuisine.</a></h5>
                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting Form:</h6>
                                                    <span>$2,898 <del>$3000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="{{ route('package-details') }}" class="primary-btn2">Book a Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z" />
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="{{ route('package-details',['id' => $package->id]) }}" class="card-img">
                                                @if ($firstImage)
                                                    <img src="{{ asset('uploads/package/'.$firstImage->image)}}" alt="{{ $package->title }}" style="width: 100%; height: 260px;" />
                                                @else
                                                    <img src="{{ asset('placeholder.jpg') }}" alt="Placeholder Image" style="width: 100%; height: 260px;" /> <!-- Placeholder image if no image available -->
                                                @endif
                                            </a>


                                            <div class="batch">
                                                <span class="date">{{ $package->days }} Days / {{ $package->nights }} Nights</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                        <path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li>{{ $package->location }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5>
                                                    <a href="{{ route('package-details',['id' => $package->id]) }}">{{ $package->title }}.</a>
                                                </h5>
                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>${{ $package->discounted_price }}</span>
                                                    <strong style="text-decoration: line-through; font-size: 15px;">&nbsp;{{ $package->price }}&nbsp;</strong>
                                                    <p>TAXES INCL/PERSON</p>
                                                </div>
                                                <a href="{{ route('package-details',['id' => $package->id]) }}" class="primary-btn2">Book a Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                        <path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z" />
                                                        <path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="col-md-4 item">
                                <div class="package-card">
                                    <div class="package-card-img-wrap">
                                        <a href="{{ route('package-details',['id' => $package->id]) }}" class="card-img"><img
                                                src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/home1/package-card-img1.png"
                                                alt></a>
                                        <div class="batch">
                                            <span class="date">3 Days / 4 Night</span>
                                            <div class="location">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 18 18">
                                                    <path
                                                        d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
                                                </svg>
                                                <ul class="location-list">
                                                    <li>Nepal</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="package-card-content">
                                        <div class="card-content-top">
                                            <h5><a href="{{ route('package-details') }}">the Allure Italy's Rich Culture, History,
                                                    and Cuisine.</a></h5>
                                        </div>
                                        <div class="card-content-bottom">
                                            <div class="price-area">
                                                <h6>Starting Form:</h6>
                                                <span>$2,898 <del>$3000</del></span>
                                                <p>TAXES INCL/PERS</p>
                                            </div>
                                            <a href="{{ route('package-details') }}" class="primary-btn2">Book a Trip
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 18 18" fill="none">
                                                    <path
                                                        d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z" />
                                                    <path
                                                        d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item">
                                <div class="package-card">
                                    <div class="package-card-img-wrap">
                                        <a href="{{ route('package-details') }}" class="card-img"><img
                                                src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/home1/package-card-img1.png"
                                                alt></a>
                                        <div class="batch">
                                            <span class="date">3 Days / 4 Night</span>
                                            <div class="location">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 18 18">
                                                    <path
                                                        d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
                                                </svg>
                                                <ul class="location-list">
                                                    <li>Nepal</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="package-card-content">
                                        <div class="card-content-top">
                                            <h5><a href="{{ route('package-details') }}">the Allure Italy's Rich Culture, History,
                                                    and Cuisine.</a></h5>
                                        </div>
                                        <div class="card-content-bottom">
                                            <div class="price-area">
                                                <h6>Starting Form:</h6>
                                                <span>$2,898 <del>$3000</del></span>
                                                <p>TAXES INCL/PERS</p>
                                            </div>
                                            <a href="{{ route('package-details') }}" class="primary-btn2">Book a Trip
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 18 18" fill="none">
                                                    <path
                                                        d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z" />
                                                    <path
                                                        d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item">
                                <div class="package-card">
                                    <div class="package-card-img-wrap">
                                        <a href="{{ route('package-details') }}" class="card-img"><img
                                                src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/home1/package-card-img1.png"
                                                alt></a>
                                        <div class="batch">
                                            <span class="date">3 Days / 4 Night</span>
                                            <div class="location">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 18 18">
                                                    <path
                                                        d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
                                                </svg>
                                                <ul class="location-list">
                                                    <li>Nepal</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="package-card-content">
                                        <div class="card-content-top">
                                            <h5><a href="{{ route('package-details') }}">the Allure Italy's Rich Culture, History,
                                                    and Cuisine.</a></h5>
                                        </div>
                                        <div class="card-content-bottom">
                                            <div class="price-area">
                                                <h6>Starting Form:</h6>
                                                <span>$2,898 <del>$3000</del></span>
                                                <p>TAXES INCL/PERS</p>
                                            </div>
                                            <a href="{{ route('package-details') }}" class="primary-btn2">Book a Trip
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 18 18" fill="none">
                                                    <path
                                                        d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z" />
                                                    <path
                                                        d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item">
                                <div class="package-card">
                                    <div class="package-card-img-wrap">
                                        <a href="{{ route('package-details') }}" class="card-img"><img
                                                src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/home1/package-card-img1.png"
                                                alt></a>
                                        <div class="batch">
                                            <span class="date">3 Days / 4 Night</span>
                                            <div class="location">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 18 18">
                                                    <path
                                                        d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
                                                </svg>
                                                <ul class="location-list">
                                                    <li>Nepal</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="package-card-content">
                                        <div class="card-content-top">
                                            <h5><a href="{{ route('package-details') }}">the Allure Italy's Rich Culture, History,
                                                    and Cuisine.</a></h5>
                                        </div>
                                        <div class="card-content-bottom">
                                            <div class="price-area">
                                                <h6>Starting Form:</h6>
                                                <span>$2,898 <del>$3000</del></span>
                                                <p>TAXES INCL/PERS</p>
                                            </div>
                                            <a href="{{ route('package-details') }}" class="primary-btn2">Book a Trip
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 18 18" fill="none">
                                                    <path
                                                        d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z" />
                                                    <path
                                                        d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item">
                                <div class="package-card">
                                    <div class="package-card-img-wrap">
                                        <a href="{{ route('package-details') }}" class="card-img"><img
                                                src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/home1/package-card-img1.png"
                                                alt></a>
                                        <div class="batch">
                                            <span class="date">3 Days / 4 Night</span>
                                            <div class="location">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 18 18">
                                                    <path
                                                        d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
                                                </svg>
                                                <ul class="location-list">
                                                    <li>Nepal</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="package-card-content">
                                        <div class="card-content-top">
                                            <h5><a href="{{ route('package-details') }}">the Allure Italy's Rich Culture, History,
                                                    and Cuisine.</a></h5>
                                        </div>
                                        <div class="card-content-bottom">
                                            <div class="price-area">
                                                <h6>Starting Form:</h6>
                                                <span>$2,898 <del>$3000</del></span>
                                                <p>TAXES INCL/PERS</p>
                                            </div>
                                            <a href="{{ route('package-details') }}" class="primary-btn2">Book a Trip
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 18 18" fill="none">
                                                    <path
                                                        d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z" />
                                                    <path
                                                        d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="inner-pagination-area">
                                <ul class="pagination-list">
                                    <li>
                                        <a href="#" class="shop-pagi-btn"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-chevron-left" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="active">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-three-dots"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                            </svg></i></a>
                                    </li>
                                    <li>
                                        <a href="#">6</a>
                                    </li>
                                    <li>
                                        <a href="#" class="shop-pagi-btn"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                            </svg></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="sidebar-area">

                        <div class="single-widget mb-30">
                            <h5 class="widget-title">Activity</h5>
                            <ul class="category-list">
                                <li>
                                    All Package
                                </li>
                                <li>
                                    Beaches
                                </li>
                                <li>
                                    City Tours
                                </li>
                                <li>
                                    Cruises
                                </li>
                                <li>
                                    Hiking
                                </li>
                                <li>
                                    Historical
                                </li>
                                <li>
                                    Museum Tours
                                </li>
                                <li>
                                    Adventure
                                </li>
                            </ul>
                        </div>
                        <div class="single-widget mb-30">
                            <h5 class="widget-title">Destination</h5>
                            <ul class="category-list two">
                                <li>
                                    Indonesia
                                </li>
                                <li>
                                    Switzerland
                                </li>
                                <li>
                                    Egypt
                                </li>
                                <li>
                                    Saudi Arab
                                </li>
                                <li>
                                    Europe
                                </li>
                                <li>
                                    Bangladesh
                                </li>
                                <li>
                                    Luxury Retreat
                                </li>
                                <li>
                                    Photography Expedition
                                </li>
                            </ul>
                        </div>
                        <div class="single-widget mb-30">
                            <h5 class="widget-title">Durations</h5>
                            <ul class="category-list">
                                <li>
                                    1 - 2 Days Tour
                                </li>
                                <li>
                                    2 - 3 Days Tour
                                </li>
                                <li>
                                    4 - 5 Days Tour
                                </li>
                                <li>
                                    6 - 7 Days Tour
                                </li>
                                <li>
                                    8 - 9 Days Tour
                                </li>
                                <li>
                                    10 - 13 Days Tour
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
