<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Admin\Package;
use App\Models\Admin\Destination;
use App\Http\Controllers\Controller;

class UserDestinationController extends Controller
{
    public function index()
    {
        // $destinations = Destination::get();
        $destinations = Destination::paginate(12);

        // return $destinations;
        return view('user.userdestination.destination2', compact('destinations'));
    }
    public function destinationdetails(int $id = null)
    {
        $destination = Destination::where('id',$id)->first();
        if ($destination == null) {
            abort(404);
        }else {
            $packages = Package::where('destination_id',$id)->with('packageImages')->get();
            return view('user.userdestination.destination-details',compact('destination','packages'));
        }
    }
}
