<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class ViewBookingController extends Controller
{
    public function view_bookings(){
        $bookings = Booking::all();
        return view('admin.bookings.booking',compact('bookings'));
    }
}
