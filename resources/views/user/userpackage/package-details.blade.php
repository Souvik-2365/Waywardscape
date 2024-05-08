@extends('layouts.masterlayout')

@section('content')
<div class="breadcrumb-section"
    style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url(https://demo-egenslab.b-cdn.net/html/triprex/preview/assets/img/innerpage/inner-banner-bg.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="banner-content">
                    <h1>Package Details</h1>
                    <ul class="breadcrumb-list">
                        <li><a href="/">Home</a></li>
                        <li>Package Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="package-details-area pt-120 mb-120 position-relative">
    <div class="container">
        <div class="row">
            <div class="co-lg-12">
                <div class="package-img-group mb-50">
                    <div class="row align-items-center g-3">
                        @php
                        $firstImage = $package->packageImages->first(); // Get the first image of the package
                        $dates = $package->bookingdates;
                        @endphp
                        <div class="col-lg-6">
                            <div class="gallery-img-wrap">
                                <img src="{{ asset('uploads/package/' . $firstImage->image) }}"
                                    alt="{{ $package->title }}_image" style="width: 100%; height: 100%;">
                                <a data-fancybox="gallery-01"
                                    href="{{ asset('uploads/package/' . $firstImage->image) }}"
                                    alt="{{ $package->title }}_image" style="width: 100%; height: 100%;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                        <path
                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                    </svg></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 h-100">
                            <div class="row g-3 h-100">
                                @foreach ($package->packageImages->skip(1)->take(3) as $image)
                                <div class="col-6">
                                    <div class="gallery-img-wrap">
                                        <img src="{{ asset('uploads/package/' . $image->image) }}"
                                            alt="{{ $package->title }}_image" style="width: 100%; height: 100%;">
                                        <a data-fancybox="gallery-01"
                                            href="{{ asset('uploads/package/' . $image->image) }}"
                                            alt="{{ $package->title }}_image" style="width: 100%; height: 100%;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                            </svg></i></a>
                                    </div>
                                </div>
                                @endforeach
                                @php
                                $secImage = $package->packageImages->skip(4)->first();
                                @endphp
                                @if ($secImage)
                                <div class="col-6">
                                    <div class="gallery-img-wrap active">
                                        <img src="{{ asset('uploads/package/' . $secImage->image) }}"
                                            alt="{{ $package->title }}_image" style="width: 100%; height: 100%;">
                                        <button class="StartSlideShowFirstImage"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                            </svg>
                                            View
                                            More Images</button>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="others-image-wrap d-none">
            @foreach ($package->packageImages as $image)
            <a data-fancybox="images"><img src="{{ asset('uploads/package/' . $image->image) }}"
                    alt="{{ $package->title }}_image"></a>
            @endforeach
        </div>



        <div class="row g-xl-4 gy-5">
            <div class="col-xl-8">
                <h2>{{ $package->title }}</h2>
                <div class="tour-price">
                    <h3>${{ $package->discounted_price }}/</h3><span>per person</span>
                </div>
                <ul class="tour-info-metalist">
                    <li>
                        <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14 7C14 8.85652 13.2625 10.637 11.9497 11.9497C10.637 13.2625 8.85652 14 7 14C5.14348 14 3.36301 13.2625 2.05025 11.9497C0.737498 10.637 0 8.85652 0 7C0 5.14348 0.737498 3.36301 2.05025 2.05025C3.36301 0.737498 5.14348 0 7 0C8.85652 0 10.637 0.737498 11.9497 2.05025C13.2625 3.36301 14 5.14348 14 7ZM7 3.0625C7 2.94647 6.95391 2.83519 6.87186 2.75314C6.78981 2.67109 6.67853 2.625 6.5625 2.625C6.44647 2.625 6.33519 2.67109 6.25314 2.75314C6.17109 2.83519 6.125 2.94647 6.125 3.0625V7.875C6.12502 7.95212 6.14543 8.02785 6.18415 8.09454C6.22288 8.16123 6.27854 8.2165 6.3455 8.25475L9.408 10.0048C9.5085 10.0591 9.62626 10.0719 9.73611 10.0406C9.84596 10.0092 9.93919 9.93611 9.99587 9.83692C10.0525 9.73774 10.0682 9.62031 10.0394 9.50975C10.0107 9.39919 9.93982 9.30426 9.842 9.24525L7 7.62125V3.0625Z">
                            </path>
                        </svg>
                        {{ $package->days }} Days/{{ $package->nights }} Nights
                    </li>
                    <li>
                        <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 7C7.92826 7 8.8185 6.63125 9.47487 5.97487C10.1313 5.3185 10.5 4.42826 10.5 3.5C10.5 2.57174 10.1313 1.6815 9.47487 1.02513C8.8185 0.368749 7.92826 0 7 0C6.07174 0 5.1815 0.368749 4.52513 1.02513C3.86875 1.6815 3.5 2.57174 3.5 3.5C3.5 4.42826 3.86875 5.3185 4.52513 5.97487C5.1815 6.63125 6.07174 7 7 7ZM14 12.8333C14 14 12.8333 14 12.8333 14H1.16667C1.16667 14 0 14 0 12.8333C0 11.6667 1.16667 8.16667 7 8.16667C12.8333 8.16667 14 11.6667 14 12.8333Z">
                            </path>
                        </svg>
                        Max People : {{ $package->maxpeople }}
                    </li>
                    <li>
                        <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14 0.43748C14 0.372778 13.9856 0.308889 13.9579 0.250418C13.9302 0.191947 13.8898 0.140348 13.8398 0.0993396C13.7897 0.0583312 13.7312 0.0289339 13.6684 0.0132656C13.6057 -0.00240264 13.5402 -0.00395173 13.4768 0.00872996L9.1875 0.86623L4.89825 0.00872996C4.84164 -0.00258444 4.78336 -0.00258444 4.72675 0.00872996L0.35175 0.88373C0.252608 0.903546 0.163389 0.957088 0.099263 1.03525C0.0351366 1.11342 6.10593e-05 1.21138 0 1.31248L0 13.5625C3.90711e-05 13.6272 0.0144289 13.6911 0.0421328 13.7495C0.0698367 13.808 0.110165 13.8596 0.160212 13.9006C0.210259 13.9416 0.268779 13.971 0.331556 13.9867C0.394332 14.0024 0.459803 14.0039 0.52325 13.9912L4.8125 13.1337L9.10175 13.9912C9.15836 14.0025 9.21664 14.0025 9.27325 13.9912L13.6482 13.1162C13.7474 13.0964 13.8366 13.0429 13.9007 12.9647C13.9649 12.8865 13.9999 12.7886 14 12.6875V0.43748ZM4.375 12.3287V0.97123L4.8125 0.88373L5.25 0.97123V12.3287L4.89825 12.2587C4.84165 12.2474 4.78335 12.2474 4.72675 12.2587L4.375 12.3287ZM8.75 13.0287V1.67123L9.10175 1.74123C9.15836 1.75254 9.21664 1.75254 9.27325 1.74123L9.625 1.67123V13.0287L9.1875 13.1162L8.75 13.0287Z">
                            </path>
                        </svg>
                        {{ $package->destinations->destination }}.
                    </li>
                </ul>
                <p>{{ $package->about }}</p>
                <h4>Included and Excluded</h4>
                <div class="includ-and-exclud-area mb-20">
                    <ul>
                        <li><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                </svg></i> Meal as per
                            hotel Plan and drinks free too.</li>
                        <li><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                </svg></i> Return
                            airport and round trip transfers.</li>
                        <li><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                </svg></i> Accommodation
                            on twin sharing basis.</li>
                        <li><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                </svg></i> The above
                            rates are on per day disposal basi</li>
                        <li><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                </svg></i> Enjoy
                            Brussels day tours. Overnight Brussels</li>
                    </ul>
                    <ul class="exclud">
                        <li><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                </svg></i> AC will not be
                            functional on Hills or Slopes.</li>
                        <li><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                </svg></i> Any other service
                            not mentioned</li>
                        <li><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                </svg></i> Additional entry
                            fees other than specified</li>
                        <li><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                </svg></i> Amsterdam canal
                            cruise not included for basic</li>
                    </ul>
                </div>
                <h4>Itinerary</h4>
                <div class="accordion tour-plan" id="tourPlan">


                    @foreach ($package->packageItinerarys as $itinerary)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $itinerary->id }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $itinerary->id }}" aria-expanded="false"
                                aria-controls="collapse{{ $itinerary->id }}">
                                <span>Day: {{ $itinerary->day }}</span> {{ $itinerary->action }}
                            </button>
                        </h2>
                        <div id="collapse{{ $itinerary->id }}" class="accordion-collapse collapse"
                            aria-labelledby="heading{{ $itinerary->id }}" data-bs-parent="#tourPlan">
                            <div class="accordion-body">
                                <p>{{ $itinerary->details }}</p>
                                <div class="itinerary-container"
                                    style="display: flex;  justify-content: space-between; margin-bottom: 10px;">
                                    <ul>
                                        <strong>Meals</strong>
                                        <li style="margin-bottom: 10px;">{{ $itinerary->meals }}.</li>
                                        <strong>Activity</strong>
                                        <li style="margin-bottom: 10px;">{{ $itinerary->activity }}.</li>
                                    </ul>
                                    <ul>
                                        <strong>Sightseeing</strong>
                                        <li style="margin-bottom: 10px;">{{ $itinerary->sightseeing }}.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-4">
                <div class="booking-form-wrap mb-40">
                    <h4>Book Your Tour</h4>
                    <p>Reserve your ideal trip early for a hassle-free
                        trip; secure comfort and convenience!</p>
                    <div class="nav nav-pills mb-40" role="tablist">
                        <button class="nav-link show active" id="v-pills-booking-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-booking" type="button" role="tab" aria-controls="v-pills-booking"
                            aria-selected="true">Online Booking</button>
                        <button class="nav-link" id="v-pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-contact" type="button" role="tab" aria-controls="v-pills-contact"
                            aria-selected="false">Inquiry Form</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent2">
                        <div class="tab-pane fade active show" id="v-pills-booking" role="tabpanel"
                            aria-labelledby="v-pills-booking-tab">
                            <div class="sidebar-booking-form">










































                                <form method="get" action="{{ route('bookinguser', ['id' => $package->id]) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="tour-date-wrap mb-50">
                                        <h6>Select Your Booking Date:</h6>
                                        @foreach ($dates as $item)
                                        @php
                                        $store = json_encode([$item->start_date, $item->end_date]);

                                        @endphp
                                        <div class="form-check mb-25">
                                            <input class="form-check-input" type="radio" name="tourDate[]"
                                                id="{{ $item->id }}" value="{{ $store }}" checked>
                                            <label class="form-check-label" for="{{ $item->id }}">
                                                <span class="tour-date">
                                                    <span class="start-date">
                                                        <span>Check In</span>
                                                        <span> {{ $item->start_date }} </span>

                                                    </span>
                                                    <i class="ti ti-arrow-right"></i>
                                                    <span class="end-date text-end">
                                                        <span>Check Out</span>
                                                        <span>{{ $item->end_date }}</span>

                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        @endforeach
                                        <div class="form-check customdate">
                                            <input class="form-check-input" type="radio" name="tourDate[]" id="Custom"
                                                value="Custom" required>
                                            <label class="form-check-label" for="Custom">
                                                <span class="tour-date">
                                                    <span class="start-date">
                                                        <span>Check In</span>
                                                        <span><input type="date" name="checkin" id="checkin" ></span>
                                                    </span>
                                                    <i class="ti ti-arrow-right"></i>
                                                    <span class="end-date text-end">
                                                        <span>Check Out</span>
                                                        <span><input type="date" name="checkout" id="checkout" ></span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>


                                    </div>







                                    <div class="booking-form-item-type mb-45">
                                        <div class="number-input-item adults">
                                            <label class="number-input-label">Adult: <span>${{ $package->discounted_price }} <del>${{ $package->price }}</del></span></label>
                                            <div class="quantity-counter">
                                                <a href="#" class="quantity__minus"><i class="bi bi-dash"></i></a>
                                                <input name="adult" type="text" class="quantity__input" value="1">
                                                <a href="#" class="quantity__plus"><i class="bi bi-plus"></i></a>
                                            </div>
                                        </div>
                                        @php
                                            $cp = $package->discounted_price - ($package->discounted_price * 20) / 100;
                                        @endphp
                                        <div class="number-input-item children">
                                            <label class="number-input-label">Children: <span>${{ $cp }}</span></label>
                                            <div class="quantity-counter">
                                                <a href="#" class="quantity__minus"><i class="bi bi-dash"></i></a>
                                                <input name="child" type="text" class="quantity__input" value="0">
                                                <a href="#" class="quantity__plus"><i class="bi bi-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>





                                    
            <div class="total-price" style="font-size: 20px;">
    Total Price: $<span id="total-price-display" style="font-size: 20px;"></span>
  </div>

  <!-- Hidden Input for Total Price -->
  <input type="hidden" id="total-price-input" name="total_price" value="">

                                    <button type="submit" class="primary-btn1 two">Book Now</button>
                                </form>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const adultQuantityInput = document.querySelector('.adults .quantity__input');
        const childQuantityInput = document.querySelector('.children .quantity__input');
        const totalDisplay = document.getElementById('total-price-display');
        const totalPriceInput = document.getElementById('total-price-input');
        function updateTotal() {
            const adultCount = parseInt(adultQuantityInput.value) || 0;
            const childCount = parseInt(childQuantityInput.value) || 0;
            const adultPrice = {{ $package->discounted_price }}
            const childPrice = {{ $cp }}
            //console.log(adultPrice,childPrice)
            const total = (adultPrice*adultCount)+(childPrice*childCount);
            //const total = adultCount + childCount;
            totalDisplay.textContent = total;
            totalPriceInput.value = total;
        }

        function calculateTotal() {
            const adultCount = parseInt(adultQuantityInput.value);
            const childCount = parseInt(childQuantityInput.value);
            const total = adultCount + childCount;
           // console.log("Total number of adults and children: " + total);
            updateTotal();
        }

        const adultPlusButton = document.querySelector('.adults .quantity__plus');
        adultPlusButton.addEventListener('click', function(event) {
            event.preventDefault(); 
            adultQuantityInput.value = parseInt(adultQuantityInput.value);
            calculateTotal();
        });

        const adultMinusButton = document.querySelector('.adults .quantity__minus');
        adultMinusButton.addEventListener('click', function(event) {
            event.preventDefault(); 
            const currentValue = parseInt(adultQuantityInput.value);
            if (currentValue > 0) {
                adultQuantityInput.value = currentValue;
                calculateTotal();
            }
        });

        const childPlusButton = document.querySelector('.children .quantity__plus');
        childPlusButton.addEventListener('click', function(event) {
            event.preventDefault(); 
            childQuantityInput.value = parseInt(childQuantityInput.value);
            calculateTotal();
        });

        const childMinusButton = document.querySelector('.children .quantity__minus');
        childMinusButton.addEventListener('click', function(event) {
            event.preventDefault(); 
            const currentValue = parseInt(childQuantityInput.value);
            if (currentValue > 0) {
                childQuantityInput.value = currentValue;
                calculateTotal();
            }
        });

        // Call updateTotal initially to set the initial total
        updateTotal();
        //adultQuantityInput.addEventListener('change', updateTotal);
        //childQuantityInput.addEventListener('change', updateTotal);
    });




</script>

















































                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-contact" role="tabpanel"
                            aria-labelledby="v-pills-contact-tab">
                            <div class="sidebar-booking-form">
                                <form>
                                    <div class="form-inner mb-20">
                                        <label>Full Name <span>*</span></label>
                                        <input type="text" placeholder="Enter your full name">
                                    </div>
                                    <div class="form-inner mb-20">
                                        <label>Email Address <span>*</span></label>
                                        <input type="email" placeholder="Enter your email address">
                                    </div>
                                    <div class="form-inner mb-20">
                                        <label>Phone Number <span>*</span></label>
                                        <input type="text" placeholder="Enter your phone number">
                                    </div>
                                    <div class="form-inner mb-30">
                                        <label>Write Your Massage <span>*</span></label>
                                        <textarea placeholder="Write your quiry"></textarea>
                                    </div>
                                    <div class="form-inner">
                                        <button type="submit" class="primary-btn1 two">Submit Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection