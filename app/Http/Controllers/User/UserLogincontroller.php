<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserRegistrationRequest;

class UserLogincontroller extends Controller
{

    public function index()
    {
        return view('user.userprofile.userlog');
    }
    public function register()
    {
        return view('user.userprofile.userreg');
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->back();
    }



    public function authenticate(UserLoginRequest $request)
    {
        $validator = Validator::make($request->all(), $request->rules());

        if ($validator->passes()) {
            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
                return redirect()->route('home');
            } else {
                return redirect()->back()->withInput($request->only('email'))->with('error', 'Invalid Credentials');
            }
        } else {
            return redirect()->back()->withErrors($validator)->withInput($request->only('email'));
        }
    }



    public function store(UserRegistrationRequest $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), $request->rules());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'image' => $request->image,
                'address' => $request->address,
                'password' => $request->password,
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create user. Please try again.');
        }
        return redirect()->route('loginuser')->with('success', 'User registered successfully.');
    }
}
