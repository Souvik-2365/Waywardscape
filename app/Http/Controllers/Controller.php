<?php

namespace App\Http\Controllers;

use App\Models\Admin\Package;
use App\Models\Admin\Destination;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function index()
    {
        // $destinations = Destination::get();
        $destinations = Destination::latest()->limit(10)->get();

        $packages = Package::with('packageImages')->get();

        return view('user.home', compact('destinations', 'packages'));
    }
    public function about()
    {
        return view('user.about');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function balchal()
    {
        return view('user.userpackage.balchalform');
    }
}
