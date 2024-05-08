<form>
    <div class="tour-date-wrap mb-50">
        <h6>Select Your Booking Date:</h6>




        <div class="form-check mb-25">
            <input class="form-check-input" type="radio" name="tourDate" id="checkIn" value="option1" checked>
            <label class="form-check-label" for="checkIn">
                <span class="tour-date">
                    <span class="start-date">
                        <span>Check In</span>
                        <span> Jan 1, 2024 </span>
                    </span>
                    <i class="ti ti-arrow-right"></i>
                    <span class="end-date text-end">
                        <span>Check Out</span>
                        <span>Jan 5, 2024</span>
                    </span>
                </span>
            </label>
        </div>
        <div class="form-check mb-25">
            <input class="form-check-input" type="radio" name="tourDate" id="checkOut" value="option2">
            <label class="form-check-label" for="checkOut">
                <span class="tour-date">
                    <span class="start-date">
                        <span>Check In</span>
                        <span> Jan 10, 2024 </span>
                    </span>
                    <i class="ti ti-arrow-right"></i>
                    <span class="end-date text-end">
                        <span>Check Out</span>
                        <span>Jan 15, 2024</span>
                    </span>
                </span>
            </label>
        </div>
        <div class="form-check customdate">
            <input class="form-check-input" type="radio" name="tourDate" id="Custom" value="custom" checked>
            <label class="form-check-label" for="Custom">Custom Date</label>
            <span class="form-group">
                <input type="text" readonly name="daterange" id="daterange" placeholder="5 Jan, 2024">

                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                    <path
                        d="M10.3125 7.03125C10.3125 6.90693 10.3619 6.7877 10.4498 6.69979C10.5377 6.61189 10.6569 6.5625 10.7812 6.5625H11.7188C11.8431 6.5625 11.9623 6.61189 12.0502 6.69979C12.1381 6.7877 12.1875 6.90693 12.1875 7.03125V7.96875C12.1875 8.09307 12.1381 8.2123 12.0502 8.30021C11.9623 8.38811 11.8431 8.4375 11.7188 8.4375H10.7812C10.6569 8.4375 10.5377 8.38811 10.4498 8.30021C10.3619 8.2123 10.3125 8.09307 10.3125 7.96875V7.03125Z" />
                    <path
                        d="M3.28125 0C3.40557 0 3.5248 0.049386 3.61271 0.137294C3.70061 0.225201 3.75 0.34443 3.75 0.46875V0.9375H11.25V0.46875C11.25 0.34443 11.2994 0.225201 11.3873 0.137294C11.4752 0.049386 11.5944 0 11.7188 0C11.8431 0 11.9623 0.049386 12.0502 0.137294C12.1381 0.225201 12.1875 0.34443 12.1875 0.46875V0.9375H13.125C13.6223 0.9375 14.0992 1.13504 14.4508 1.48667C14.8025 1.83831 15 2.31522 15 2.8125V13.125C15 13.6223 14.8025 14.0992 14.4508 14.4508C14.0992 14.8025 13.6223 15 13.125 15H1.875C1.37772 15 0.900806 14.8025 0.549175 14.4508C0.197544 14.0992 0 13.6223 0 13.125V2.8125C0 2.31522 0.197544 1.83831 0.549175 1.48667C0.900806 1.13504 1.37772 0.9375 1.875 0.9375H2.8125V0.46875C2.8125 0.34443 2.86189 0.225201 2.94979 0.137294C3.0377 0.049386 3.15693 0 3.28125 0V0ZM1.875 1.875C1.62636 1.875 1.3879 1.97377 1.21209 2.14959C1.03627 2.3254 0.9375 2.56386 0.9375 2.8125V13.125C0.9375 13.3736 1.03627 13.6121 1.21209 13.7879C1.3879 13.9637 1.62636 14.0625 1.875 14.0625H13.125C13.3736 14.0625 13.6121 13.9637 13.7879 13.7879C13.9637 13.6121 14.0625 13.3736 14.0625 13.125V2.8125C14.0625 2.56386 13.9637 2.3254 13.7879 2.14959C13.6121 1.97377 13.3736 1.875 13.125 1.875H1.875Z" />
                    <path
                        d="M2.34375 3.75C2.34375 3.62568 2.39314 3.50645 2.48104 3.41854C2.56895 3.33064 2.68818 3.28125 2.8125 3.28125H12.1875C12.3118 3.28125 12.431 3.33064 12.519 3.41854C12.6069 3.50645 12.6562 3.62568 12.6562 3.75V4.6875C12.6562 4.81182 12.6069 4.93105 12.519 5.01896C12.431 5.10686 12.3118 5.15625 12.1875 5.15625H2.8125C2.68818 5.15625 2.56895 5.10686 2.48104 5.01896C2.39314 4.93105 2.34375 4.81182 2.34375 4.6875V3.75Z" />
                </svg>
            </span>
        </div>





    </div>
    {{-- <div class="booking-form-item-type mb-45">
        <div class="number-input-item adults">
            <label class="number-input-lable">Adult:<span>
                </span><span> $60 <del>$80</del></span></label>
            <div class="quantity-counter">
                <a href="#" class="quantity__minus"><i class="bi bi-dash"></i></a>

                <input name="quantity" type="text" class="quantity__input" value="04">
                <a href="#" class="quantity__plus"><i class="bi bi-plus"></i></a>

            </div>
        </div>
        <div class="number-input-item children">
            <label class="number-input-lable">Children:<span>
                </span><span>$15</span></label>
            <div class="quantity-counter">
                <a href="#" class="quantity__minus"><i class="bi bi-dash"></i></a>
                <input name="quantity" type="text" class="quantity__input" value="04">
                <a href="#" class="quantity__plus"><i class="bi bi-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="booking-form-item-type">
        <h5>Other Extra Services</h5>
        <div class="checkbox-container">
            <label class="check-container">Home Pickup
                <input type="checkbox" class="services_check" name="services_list[]" value="0">
                <span class="checkmark"></span>
                <span class="price">$10 </span>
            </label>
            <label class="check-container">Night Food
                <input type="checkbox" class="services_check" name="services_list[]" value="1">
                <span class="checkmark"></span>
                <span class="price">$15 </span>
            </label>
            <label class="check-container">Seaplane Fyling
                <input type="checkbox" class="services_check" name="services_list[]" value="2">
                <span class="checkmark"></span>
                <span class="price">$20 </span>
            </label>
        </div>
    </div>
    <div class="booking-form-item-type">
        <div class="single-total mb-30">
            <span>Adult</span>
            <ul>
                <li><strong>$195</strong> PRICE</li>
                <li><i class="bi bi-x-lg"></i></li>
                <li><strong>02</strong> QTY</li>
                <li><i class="bi bi-x-lg"></i></li>
                <li><strong>04</strong> DAYS</li>
            </ul>
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="15" viewBox="0 0 27 15">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M23.999 5.44668L25.6991 7.4978L23.9991 9.54878H0V10.5743H23.1491L20.0135 14.3575L20.7834 14.9956L26.7334 7.81687L26.9979 7.4978L26.7334 7.17873L20.7834 0L20.0135 0.638141L23.149 4.42114H0V5.44668H23.999Z" />
            </svg>
            <div class="total">$390</div>
        </div>
        <div class="single-total mb-30">
            <span>Children</span>
            <ul>
                <li><strong>$195</strong> PRICE</li>
                <li><i class="bi bi-x-lg"></i></li>
                <li><strong>02</strong> QTY</li>
                <li><i class="bi bi-x-lg"></i></li>
                <li><strong>04</strong> DAYS</li>
            </ul>
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="15" viewBox="0 0 27 15">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M23.999 5.44668L25.6991 7.4978L23.9991 9.54878H0V10.5743H23.1491L20.0135 14.3575L20.7834 14.9956L26.7334 7.81687L26.9979 7.4978L26.7334 7.17873L20.7834 0L20.0135 0.638141L23.149 4.42114H0V5.44668H23.999Z" />
            </svg>
            <div class="total">$390</div>
        </div>
    </div>
    <div class="total-price"><span>Total Price:</span> $470</div>
    <button type="submit" class="primary-btn1 two">Book Now</button> --}}
    {{--
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking Form with Dynamic Total Calculation</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>

    <body>

        <!-- Booking Form Section -->
        <div class="booking-form-item-type mb-45">
            <div class="number-input-item adults">
                <label class="number-input-lable">Adult:<span></span><span class="price"> $60
                        <del>$80</del></span></label>
                <div class="quantity-counter">
                    <a href="#" class="quantity__minus"><i class="bi bi-dash"></i></a>
                    <input name="quantity" type="text" class="quantity__input" value="4">
                    <a href="#" class="quantity__plus"><i class="bi bi-plus"></i></a>
                </div>
            </div>
            <div class="number-input-item children">
                <label class="number-input-lable">Children:<span></span><span class="price">$15</span></label>
                <div class="quantity-counter">
                    <a href="#" class="quantity__minus"><i class="bi bi-dash"></i></a>
                    <input name="quantity" type="text" class="quantity__input" value="4">
                    <a href="#" class="quantity__plus"><i class="bi bi-plus"></i></a>
                </div>
            </div>
        </div>

        <div class="booking-form-item-type">
            <h5>Other Extra Services</h5>
            <div class="checkbox-container">
                <label class="check-container">Home Pickup
                    <input type="checkbox" class="services_check" name="services_list[]" value="10">
                    <span class="checkmark"></span>
                    <span class="price">$10 </span>
                </label>
                <label class="check-container">Night Food
                    <input type="checkbox" class="services_check" name="services_list[]" value="15">
                    <span class="checkmark"></span>
                    <span class="price">$15 </span>
                </label>
                <label class="check-container">Seaplane Fyling
                    <input type="checkbox" class="services_check" name="services_list[]" value="20">
                    <span class="checkmark"></span>
                    <span class="price">$20 </span>
                </label>
            </div>
        </div>

        <div class="total-price"><span>Total Price:</span> <span id="total-price">$470</span></div>

        <button type="submit" class="primary-btn1 two">Book Now</button>

        <!-- Script Section -->
        <script>
            $(document).ready(function() {
                // Function to calculate total price
                function calculateTotal() {
                    var totalPrice = 0;

                    // Calculate total for adult and children
                    $('.number-input-item').each(function() {
                        var price = parseFloat($(this).find('.price').text().replace('$', ''));
                        var quantity = parseInt($(this).find('.quantity__input').val());
                        totalPrice += price * quantity;
                    });

                    // Calculate total for selected services
                    $('.services_check:checked').each(function() {
                        totalPrice += parseInt($(this).val());
                    });

                    // Update total price
                    $('#total-price').text('$' + totalPrice);
                }

                // Calculate total price initially
                calculateTotal();

                // Listen for changes in quantity inputs
                $('.quantity__input').on('input', calculateTotal);

                // Listen for changes in checkbox states
                $('.services_check').on('change', calculateTotal);
            });
        </script> --}}

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Booking Form</title>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        </head>

        <body>

            <div class="booking-form-item-type mb-45">
                <div class="number-input-item adults">
                    <label class="number-input-lable">Adult:<span>
                        </span><span class="price">${{ $package->discounted_price }}<del>${{ $package->price
                                }}</del></span></label>
                    <div class="quantity-counter">
                        <a href="#" class="quantity__minus" data-type="adult"><i class="bi bi-dash"></i></a>
                        <input name="quantity" type="text" class="quantity__input" value="4">
                        <a href="#" class="quantity__plus" data-type="adult"><i class="bi bi-plus"></i></a>
                    </div>
                </div>
                @php
                $cp = $package->discounted_price - ($package->discounted_price * 20) / 100;
                // echo $cp;
                @endphp
                <div class="number-input-item children">
                    <label class="number-input-lable">Children:<span>
                        </span><span class="price">${{ $cp }}</span></label>
                    <div class="quantity-counter">
                        <a href="#" class="quantity__minus" data-type="children"><i class="bi bi-dash"></i></a>
                        <input name="quantity" type="text" class="quantity__input" value="4">
                        <a href="#" class="quantity__plus" data-type="children"><i class="bi bi-plus"></i></a>
                    </div>
                </div>
            </div>


            <div class="total-price" style="display: none;"><span>Total Price:</span>
                <span id="total-price">$0</span>

            </div>
            <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(After
                Including All Taxes)</span>

            <button type="submit" class="primary-btn1 two">Book Now</button>
            <script>
                $(document).ready(function() {
                function calculateTotal() {
                    var totalPrice = 0;

                    $('.number-input-item').each(function() {
                        var price = parseFloat($(this).find('.price').text().replace('$', ''));
                        var quantity = parseInt($(this).find('.quantity__input').val());
                        totalPrice += price * quantity;
                        tp = totalPrice + (totalPrice * 18) / 100;
                    });

                    $('#total-price').text('$' + tp);
                    // echo $('#total-price').text('$' + tp);
                    $('.total-price').show();
                }

                calculateTotal();

                $('.quantity__input').on('input', calculateTotal);

                $('.quantity-counter a').on('click', function(e) {
                    e.preventDefault();
                    var type = $(this).data('type');
                    var input = $(this).siblings('.quantity__input');
                    var value = parseInt(input.val());
                    if ($(this).hasClass('quantity__minus')) {
                        value = value > 1 ? value - 1 + 1 : 0;
                    } else {
                        value += 1 - 1;
                    }
                    input.val(value);
                    calculateTotal();
                });

                $('#calculate-btn').on('click', function() {
                    calculateTotal();
                });
            });
            </script>
            <script>
                // JavaScript code
            document.addEventListener("DOMContentLoaded", function() {
                var customRadio = document.getElementById("Custom");
                var dateRangeInput = document.getElementById("daterange");

                // Add an event listener to the radio button
                customRadio.addEventListener("change", function() {
                    if (this.checked) {
                        // If the radio button is checked, log the value of the date range input
                        console.log("Date Range:", dateRangeInput.value);
                        // Or you can do whatever you want with the value here
                    }
                });
            });
            </script>

        </body>

        </html>




    </body>

    </html>

</form>





















































































































<form method="get" action="{{ route('bookinguser', ['id' => $package->id]) }}" enctype="multipart/form-data">
    @csrf
    <div class="tour-date-wrap mb-50">
        <h6>Select Your Booking Date:</h6>
        @foreach ($dates as $item)
        @php
        $store = json_encode([$item->start_date, $item->end_date]);
        @endphp
        <div class="form-check mb-25">
            <input class="form-check-input" type="radio" name="tourDate[]" id="{{ $item->id }}" value="{{ $store }}">
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
            <input class="form-check-input" type="radio" name="tourDate[]" id="Custom" value="Custom">
            <label class="form-check-label" for="Custom">
                <span class="tour-date">
                    <span class="start-date">
                        <span>Check In</span>
                        <span><input type="date" name="checkin" id="checkin"></span>
                    </span>
                    <i class="ti ti-arrow-right"></i>
                    <span class="end-date text-end">
                        <span>Check Out</span>
                        <span><input type="date" name="checkout" id="checkout"></span>
                    </span>
                </span>
            </label>
        </div>
    </div>

    <div class="booking-form-item-type mb-45">
        <div class="number-input-item adults">
            <label class="number-input-lable">Adult:<span>
                </span><span> ${{ $package->discounted_price }} <del>${{ $package->price }}</del></span></label>
            <div class="quantity-counter">
                <a href="#" class="quantity__minus"><i class="bi bi-dash"></i></a>
                <input name="adult" type="text" class="quantity__input" value="0">
                <a href="#" class="quantity__plus"><i class="bi bi-plus"></i></a>
            </div>
        </div>
        @php
        $cp = $package->discounted_price - ($package->discounted_price * 20) / 100;
        @endphp
        <div class="number-input-item children">
            <label class="number-input-lable">Children:<span>
                </span><span>${{ $cp }}</span></label>
            <div class="quantity-counter">
                <a href="#" class="quantity__minus"><i class="bi bi-dash"></i></a>
                <input name="child" type="text" class="quantity__input" value="0">
                <a href="#" class="quantity__plus"><i class="bi bi-plus"></i></a>
            </div>
        </div>
    </div>

    <div class="total-price"><span>Total Price:</span> $<span id="totalPrice">0</span></div>
    <button type="submit" class="primary-btn1 two">Book Now</button>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const adultInput = document.querySelector("input[name='adult']");
        const childInput = document.querySelector("input[name='child']");
        const totalPriceSpan = document.getElementById("totalPrice");

        function calculateTotalPrice() {
            const adultPrice = 60;
            const childPrice = 15;
            const adultCount = parseInt(adultInput.value);
            const childCount = parseInt(childInput.value);
            const totalPrice = (adultPrice * adultCount) + (childPrice * childCount);
            totalPriceSpan.textContent = totalPrice;
        }

        adultInput.addEventListener("change", calculateTotalPrice);
        childInput.addEventListener("change", calculateTotalPrice);
    });
</script>






































































































<form method="get" action="{{ route('bookinguser', ['id' => $package->id]) }}" enctype="multipart/form-data">
    @csrf
    <div class="tour-date-wrap mb-50">
        <h6>Select Your Booking Date:</h6>
        @foreach ($dates as $item)
        @php
        $store = json_encode([$item->start_date, $item->end_date]);
        @endphp
        <div class="form-check mb-25">
            <input class="form-check-input" type="radio" name="tourDate[]" id="{{ $item->id }}" value="{{ $store }}">
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
            <input class="form-check-input" type="radio" name="tourDate[]" id="Custom" value="Custom">
            <label class="form-check-label" for="Custom">
                <span class="tour-date">
                    <span class="start-date">
                        <span>Check In</span>
                        <span><input type="date" name="checkin" id="checkin"></span>
                    </span>
                    <i class="ti ti-arrow-right"></i>
                    <span class="end-date text-end">
                        <span>Check Out</span>
                        <span><input type="date" name="checkout" id="checkout"></span>
                    </span>
                </span>
            </label>
        </div>
    </div>

    <div class="booking-form-item-type mb-45">
        <div class="number-input-item adults">
            <label class="number-input-lable">Adult:<span>
                </span><span> ${{ $package->discounted_price }} <del>${{ $package->price }}</del></span></label>
            <div class="quantity-counter">
                <a href="#" class="quantity__minus"><i class="bi bi-dash"></i></a>
                <input name="adult" type="text" class="quantity__input" value="0">
                <a href="#" class="quantity__plus"><i class="bi bi-plus"></i></a>
            </div>
        </div>
        @php
        $cp = $package->discounted_price - ($package->discounted_price * 20) / 100;
        @endphp
        <div class="number-input-item children">
            <label class="number-input-lable">Children:<span>
                </span><span>${{ $cp }}</span></label>
            <div class="quantity-counter">
                <a href="#" class="quantity__minus"><i class="bi bi-dash"></i></a>
                <input name="child" type="text" class="quantity__input" value="0">
                <a href="#" class="quantity__plus"><i class="bi bi-plus"></i></a>
            </div>
        </div>
    </div>

    <div class="total-price"><span>Total Price:</span> $<span id="totalPrice">0</span>
    </div>
    <button type="submit" class="primary-btn1 two">Book Now</button>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const adultInput = document.querySelector("input[name='adult']");
        const childInput = document.querySelector("input[name='child']");
        const totalPriceSpan = document.getElementById("totalPrice");

        function calculateTotalPrice() {
            const adultPrice = parseFloat({{ $package->discounted_price }});
            const childPrice = parseFloat({{ $cp }});
            const adultCount = parseInt(adultInput.value);
            const childCount = parseInt(childInput.value);
            const totalPrice = (adultPrice * adultCount) + (childPrice * childCount);
            totalPriceSpan.textContent = totalPrice.toFixed(2);
        }

        adultInput.addEventListener("change", calculateTotalPrice);
        childInput.addEventListener("change", calculateTotalPrice);
    });
</script>