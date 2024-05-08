@extends('layouts.masterlayout')


@section('content')
    <div class="breadcrumb-section"
        style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url(https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/innerpage/inner-banner-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="banner-content">
                        <h1>Destination</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="/">Home</a></li>
                            <li>Destination</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="destination-section pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5 mb-70">


                @foreach ($destinations as $destination)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="destination-card2">
                        <a href="{{ route('destination-details',['id' => $destination->id]) }}" class="destination-card-img">
                            {{-- <img src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/home2/destination-card2-img1.jpg" alt> --}}
                            <img src="{{ asset('uploads/destination/'. $destination->image) }}" alt="" style="width: 100%; height: 375px;" />
                        </a>
                        <div class="destination-card2-content">
                            <span>Travel To</span>
                            <h4><a href="{{ route('destination-details',['id' => $destination->id]) }}">{{ $destination->destination }}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach



                {{-- <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="destination-card2">
                        <a href="{{ route('destination-details') }}" class="destination-card-img"><img
                                src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/home2/destination-card2-img2.jpg"
                                alt></a>
                        <div class="destination-card2-content">
                            <span>Travel To</span>
                            <h4><a href="{{ route('destination-details') }}">Switzerland</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="destination-card2">
                        <a href="{{ route('destination-details') }}" class="destination-card-img"><img
                                src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/home2/destination-card2-img3.jpg"
                                alt></a>
                        <div class="destination-card2-content">
                            <span>Travel To</span>
                            <h4><a href="{{ route('destination-details') }}">Saudi
                                    Arab</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="destination-card2">
                        <a href="{{ route('destination-details') }}" class="destination-card-img"><img
                                src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/home2/destination-card2-img4.jpg"
                                alt></a>
                        <div class="destination-card2-content">
                            <span>Travel To</span>
                            <h4><a href="{{ route('destination-details') }}">Indonesia</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="destination-card2">
                        <a href="{{ route('destination-details') }}" class="destination-card-img"><img
                                src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/home2/destination-card2-img5.jpg"
                                alt></a>
                        <div class="destination-card2-content">
                            <span>Travel To</span>
                            <h4><a href="{{ route('destination-details') }}">Brazil</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="destination-card2">
                        <a href="{{ route('destination-details') }}" class="destination-card-img"><img
                                src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/home2/destination-card2-img6.jpg"
                                alt></a>
                        <div class="destination-card2-content">
                            <span>Travel To</span>
                            <h4><a href="{{ route('destination-details') }}">Spain</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="destination-card2">
                        <a href="{{ route('destination-details') }}" class="destination-card-img"><img
                                src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/home2/destination-card2-img7.jpg"
                                alt></a>
                        <div class="destination-card2-content">
                            <span>Travel To</span>
                            <h4><a href="{{ route('destination-details') }}">Australia</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="destination-card2">
                        <a href="{{ route('destination-details') }}" class="destination-card-img"><img
                                src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/innerpage/destination2-img1.jpg"
                                alt></a>
                        <div class="destination-card2-content">
                            <span>Travel To</span>
                            <h4><a href="{{ route('destination-details') }}">Italy</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="destination-card2">
                        <a href="{{ route('destination-details') }}" class="destination-card-img"><img
                                src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/innerpage/destination2-img2.jpg"
                                alt></a>
                        <div class="destination-card2-content">
                            <span>Travel To</span>
                            <h4><a href="{{ route('destination-details') }}">France</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="destination-card2">
                        <a href="{{ route('destination-details') }}" class="destination-card-img"><img
                                src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/innerpage/destination2-img3.jpg"
                                alt></a>
                        <div class="destination-card2-content">
                            <span>Travel To</span>
                            <h4><a href="{{ route('destination-details') }}">Japan</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="destination-card2">
                        <a href="{{ route('destination-details') }}" class="destination-card-img"><img
                                src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/innerpage/destination2-img4.jpg"
                                alt></a>
                        <div class="destination-card2-content">
                            <span>Travel To</span>
                            <h4><a href="{{ route('destination-details') }}">Switzerland</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="destination-card2">
                        <a href="{{ route('destination-details') }}" class="destination-card-img"><img
                                src="https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/innerpage/destination2-img5.jpg"
                                alt></a>
                        <div class="destination-card2-content">
                            <span>Travel To</span>
                            <h4><a href="{{ route('destination-details') }}">India</a></h4>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <nav class="inner-pagination-area">
                        <ul class="pagination-list">
                            <li>
                                <a href="#" class="shop-pagi-btn"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-chevron-left"
                                        viewBox="0 0 16 16">
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
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                        <path
                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                    </svg></i></a>
                            </li>
                            <li>
                                <a href="#">6</a>
                            </li>
                            <li>
                                <a href="#" class="shop-pagi-btn"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-chevron-right"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                    </svg></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
</div @endsection
