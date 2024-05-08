<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Package;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function packagebooking(Request $request, $id)
    {
        $validatedData = $request->all();
        $package = Package::where('id', $id)->get();
        $name = $package[0]['title'];

        $checkin = null;
        $checkout = null;

        if (isset($validatedData['checkin']) && isset($validatedData['checkout'])) {
            $checkin = $validatedData['checkin'];
            $checkout = $validatedData['checkout'];
        } else {
            foreach ($validatedData['tourDate'] as $item) {
                $obj = json_decode($item);
                $checkin = $obj[0];
                $checkout = $obj[1];
            }
        }

        $stripe = new \Stripe\StripeClient('sk_test_51PCzZdSJwU6NBoI13DdpkWu5wvpIfFrSnQONxoGzvAB9ZO6Nimvs8j1bdpTmIYjXMU8jy4V2n4KKKSQ3ysAG76eV001swLTRP2');

        $response = $stripe->checkout->sessions->create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $name
                        ],
                        'unit_amount' => $validatedData['total_price'] * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('cancel'),
        ]);

        if (isset($response->id) && $response->id != '') {
            session()->put('package_id', $id);
            session()->put('start', $checkin);
            session()->put('end', $checkout);
            session()->put('adult', $validatedData['adult']);
            session()->put('child', $validatedData['child']);
            session()->put('total_price', $validatedData['total_price']);

            return redirect($response->url);
        } else {
            return redirect()->route('cancel');
        }
    }

    public function success(Request $request)
    {
        if ($request->has('session_id')) {
            $stripe = new \Stripe\StripeClient('sk_test_51PCzZdSJwU6NBoI13DdpkWu5wvpIfFrSnQONxoGzvAB9ZO6Nimvs8j1bdpTmIYjXMU8jy4V2n4KKKSQ3ysAG76eV001swLTRP2');
            $response = $stripe->checkout->sessions->retrieve($request->session_id);

            $booking = new Booking;
            $booking->payment_id = $response->id;
            $booking->user_id = auth()->guard('web')->user()->id;
            $booking->package_id = session()->pull("package_id");
            $booking->name = auth()->guard('web')->user()->name;
            $booking->email = auth()->guard('web')->user()->email;
            $booking->start = session()->pull("start");
            $booking->end = session()->pull("end");
            $booking->adult = session()->pull("adult");
            $booking->child = session()->pull("child");
            $booking->amount = session()->pull("total_price");
            $booking->status = $response->status;
            $booking->payment_method = "Stripe";
            $booking->save();

            return "Payment is Successful.";
        } else {
            return redirect()->route('cancel');
        }
    }

    public function cancel()
    {
        return "Payment is Cancelled.";
    }
}
