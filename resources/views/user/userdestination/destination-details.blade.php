@extends('layouts.masterlayout')


@section('content')
    <div class="breadcrumb-section"
        style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url(https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/innerpage/inner-banner-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="banner-content">
                        <h1>Destination Details</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="/">Home</a></li>
                            <li>Destination Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="destination-details-wrap mb-120 pt-120">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-8">
                    <h2>Welcome To {{ $destination->destination }}</h2>
                    <!-- <p>Egypt has one of the longest histories of any country, tracing its heritage along the Nile Delta
                    back to the 6th–4th millennia BCE. Considered a cradle of civilisation, Ancient Egypt saw some
                    of the earliest developments of writing, agriculture, urbanisation, organised religion and
                    central government.[15] Egypt's long and rich cultural heritage is an integral part of its
                    national identity, which reflects its unique transcontinental location being simultaneously
                    Mediterranean, Middle Eastern and North African.[16] Egypt was an early and important centre of
                    Christianity, but was largely Islamised in the seventh century. Modern Egypt dates back to 1922,
                    when it gained independence from the British Empire as a monarchy. Following the 1952
                    revolution, Egypt declared itself a republic, and in 1958 it merged with Syria to form the
                    United Arab Republic, which dissolved in 1961.</p> -->
                    <div class="destination-gallery mb-40 mt-40">
                        <div class="row g-4">
                            @foreach ($packages->take(6) as $package)
                                @foreach ($package->packageImages->take(1) as $image)
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="gallery-img-wrap">
                                            <img src="{{ asset('uploads/package/' . $image->image) }}"
                                                alt="{{ $package->title }}_image" style="width: 100%; height: 100%;">
                                            <a data-fancybox="gallery-01"
                                                href="{{ asset('uploads/package/' . $image->image) }}"
                                                alt="{{ $package->title }}_image" style="width: 100%; height: 100%;"><i
                                                    class="bi bi-eye"></i> Discover More Images</a>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                    <h2>Heaven On Earth</h2>
                    <p>{{ $destination->description }}</p>
                    <p>Egypt has one of the longest histories of any country, tracing its heritage along the Nile Delta
                        back to the 6th–4th millennia BCE. Considered a cradle of civilisation, Ancient Egypt saw some
                        of the earliest developments of writing, agriculture, urbanisation, organised religion and
                        central government.[15] Egypt's long and rich cultural heritage is an integral part of its
                        national</p>
                </div>
                <div class="col-lg-4">
                    <div class="destination-sidebar">
                        <br><br><br>
                        <div class="banner2-card four">
                            <img src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/home1/banner2-card-img2.png"
                                alt>
                            <div class="banner2-content-wrap">
                                <div class="banner2-content">
                                    <span>Savings worldwide</span>
                                    <h3>50% Off</h3>
                                    <p>For Your First Book</p>
                                </div>
                                <a href="package-grid" class="primary-btn1">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="recommendated-package-area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-30 d-flex align-items-center justify-content-between">
                    <div class="desti-title">
                        <h3>Recommended Package</h3>
                    </div>
                    <div class="slider-btn-grp2 width-100">
                        <div class="slider-btn package-card-tab-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
                                <path
                                    d="M8.83399 0.281832L8.72217 0.16683L0.500652 8.50016L8.72217 16.8335L8.83398 16.7185L8.83398 13.0602L4.33681 8.50016L8.83399 3.94016L8.83399 0.281832Z" />
                            </svg>
                        </div>
                        <div class="slider-btn package-card-tab-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17"
                                fill="none">
                                <path
                                    d="M0.166016 16.7182L0.277828 16.8332L8.49935 8.49984L0.277828 0.166504L0.166016 0.281504V3.93984L4.66319 8.49984L0.166016 13.0598V16.7182Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12  mb-50">
                    <div class="swiper package-card-tab-slider">
                        <div class="swiper-wrapper">


                            @foreach ($packages as $package)
                                @php
                                    $firstImage = $package->packageImages->first(); // Get the first image of the package
                                @endphp
                                <div class="swiper-slide">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="{{ route('package-details', ['id' => $package->id]) }}"
                                                class="card-img">
                                                @if ($firstImage)
                                                    <img src="{{ asset('uploads/package/' . $firstImage->image) }}"
                                                        alt="{{ $package->title }}" style="width: 100%; height: 260px;" />
                                                @else
                                                    <img src="{{ asset('placeholder.jpg') }}" alt="Placeholder Image"
                                                        style="width: 100%; height: 260px;" />
                                                    <!-- Placeholder image if no image available -->
                                                @endif
                                            </a>


                                            <div class="batch">
                                                <span class="date">{{ $package->days }} Days / {{ $package->nights }}
                                                    Nights</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z" />
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
                                                    <a
                                                        href="{{ route('package-details', ['id' => $package->id]) }}">{{ $package->title }}.</a>
                                                </h5>
                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>${{ $package->discounted_price }}</span>
                                                    <strong
                                                        style="text-decoration: line-through; font-size: 15px;">&nbsp;{{ $package->price }}&nbsp;</strong>
                                                    <p>TAXES INCL/PERSON</p>
                                                </div>
                                                <a href="{{ route('package-details', ['id' => $package->id]) }}"
                                                    class="primary-btn2">Book a Trip
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
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 d-flex align-items-center justify-content-center">
                    <a href="{{ route('package-sidebar') }}" class="secondary-btn4">View All Package</a>
                </div>
            </div>
        </div>
    </div>
@endsection
