<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserProfileController extends Controller
{
    public function index()
    {
        $bookings = Booking::where('user_id', auth()->guard('web')->user()->id)->get();
        // dd($bookings);
        return view('user.userprofile.userprofile', compact('bookings'));
    }

    public function user_update(UserUpdateRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $user = User::findOrFail(Auth::guard('web')->user()->id);
            $path = 'uploads/profile/user/' . $user->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = 'changed/' . time() . '.' . $ext;

            $file->move('uploads/profile/user/changed', $filename);

            User::where('id', Auth::guard('web')->user()->id)->update(['name' => $validatedData['name'], 'image' => $filename, 'mobile' => $validatedData['mobile'], 'address' => $validatedData['address']]);
            return redirect()->back()->with('success', 'Profile Image Updated.');
        }

        User::where('id', Auth::guard('web')->user()->id)->update(['name' => $validatedData['name'], 'mobile' => $validatedData['mobile'], 'address' => $validatedData['address']]);
        return redirect()->back()->with('success', 'Profile Updated.');
    }
}
