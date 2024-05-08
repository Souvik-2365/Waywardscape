<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{


    public function login()
    {
        return view('admin.login');
    }

    public function register()
    {
        return view('admin.register');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->passes()) {
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->filled('remember'))) {

                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('admin.login')->with('error', 'Invalid Credentials')->withInput($request->only('email'));
            }
        } else {
            return redirect()->route('admin.login')->withErrors($validator)->withInput($request->only('email'));
        }


    }



    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

}
