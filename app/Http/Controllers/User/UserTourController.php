<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Package;

class UserTourController extends Controller
{
    public function index()
    {
        $packages = Package::with('packageImages')->paginate(12);
        return view('user.userpackage.package-sidebar', compact('packages'));
    }
    public function package_details(int $package_id = null)
    {
        $package = Package::where('id', $package_id)->first();

        if ($package == null) {
            abort(404);
        } else {
            return view('user.userpackage.package-details', compact('package'));
        }
    }
}
