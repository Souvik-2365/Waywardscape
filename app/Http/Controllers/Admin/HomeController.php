<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminAvatarRequest;

use App\Http\Requests\AdminUpdateRequest;
use App\Http\Requests\AdminPasswordRequest;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function profile()
    {
        return view('admin.profile');
    }
    public function editprofile()
    {
        return view('admin.editprofile');
    }

    public function avatar(AdminAvatarRequest $request)
    {
        if ($request->hasFile('image')) {

            $admin = Admin::findOrFail(Auth::guard('admin')->user()->id);
            $path = 'uploads/profile/admin/' . $admin->image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = 'changed/' . time() . '.' . $ext;

            $file->move('uploads/profile/admin/changed', $filename);

            Admin::where('id', Auth::guard('admin')->user()->id)->update(['image' => $filename]);
            return redirect()->back()->with('success', 'Profile Image Updated.');
        }
    }

    public function password(AdminPasswordRequest $request)
    {
        $data = $request->all();
        if (Hash::check($data['current_password'], Auth::guard('admin')->user()->password)) {
            Admin::where('id', Auth::guard('admin')->user()->id)->update(['password' => bcrypt($data['password'])]);
            return redirect()->back()->with('success', 'Password Changed.');
        } else {
            return  redirect()->back()->with('error', 'Current Password is Wrong');
        }
    }

    public function update(AdminUpdateRequest $request)
    {
        $validatedData = $request->validated();

        Admin::where('id', Auth::guard('admin')->user()->id)->update(['name' => $validatedData['name'], 'mobile' => $validatedData['mobile'], 'address' => $validatedData['address']]);
        return redirect()->back()->with('success', 'Profile Updated.');
    }
}
