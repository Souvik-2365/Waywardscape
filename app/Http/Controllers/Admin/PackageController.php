<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Models\Admin\Destination;
use App\Models\Admin\BookingDate;
use App\Http\Controllers\Controller;
use App\Http\Requests\PackageFormRequest;
use App\Http\Requests\DateFormRequest;
use App\Models\Admin\Image;
use App\Models\Admin\Itinerary;
use App\Models\Admin\Package;

class PackageController extends Controller
{
    public function index()
    {
        $destination = Destination::orderBy('destination')->get();
        return view('admin.package.create_package',compact('destination'));
    }
    public function view()
    {
        $package = Package::paginate(12);
        return view('admin.package.view_package',compact('package'));
    }
    public function store(PackageFormRequest $request)
    {
        $validatedData = $request->validated();
        $repeaterGroup = $validatedData['repeater-group'];
        $repeaterImage = $validatedData['repeater-image'];

        $destination = Destination::findOrFail($validatedData['destination_id']);

        $package = $destination->packages()->create([
            'destination_id' => $validatedData['destination_id'],
            'location' => $validatedData['location'],
            'title' => $validatedData['title'],
            'days' => $validatedData['days'],
            'nights' => $validatedData['nights'],
            'maxpeople' => $validatedData['maxpeople'],
            'about' => $validatedData['about'],
            'price' => $validatedData['price'],
            'discounted_price' => $validatedData['discounted_price'],
        ]);

        $i = 1;
        foreach ($repeaterImage as $imageData) {
            $uploadPath = 'uploads/package/';
            foreach ($imageData as $imageFile) {
                print_r($imageFile);
                $ext = $imageFile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$ext;
                $imageFile->move($uploadPath,$filename);
                $package->packageImages()->create([
                    'package_id' => $package->id,
                    'image' => $filename,
                    ]);
            }
        }

        foreach ($repeaterGroup as $groupData) {
            $package->packageItinerarys()->create([
                'package_id' => $package->id,
                'day' => $groupData['day'],
                'action' => $groupData['action'],
                'details' => $groupData['details'],
                'meals' => $groupData['meals'],
                'activity' => $groupData['activity'],
                'sightseeing' => $groupData['sightseeing'],
            ]);
        }
        return redirect()->route('admin.createpackage')->with('message','Package Added.');
    }

    public function view_package()
    {
        return "view";
    }
    public function edit_package($package_id)
    {
        $package = Package::findOrFail($package_id);
        $destination = Destination::orderBy('destination')->get();
        return view('admin.package.edit_package',compact('package','destination'));
    }


    public function detete_package(int $item_id)
    {
        $package = Package::findOrFail($item_id);

        $package->delete();
        return redirect()->back();
    }


    public function booking_package(int $item_id)
    {
        $package = Package::findOrFail($item_id);
        return view('admin.package.bookingdate',compact('package'));
    }

    public function add_date(Request $request,$id)
    {
        $validatedData = $request->all();
        $repeaterGroup = $validatedData['repeater-group'];

        $package = Package::findOrFail($id);
        foreach ($repeaterGroup as $groupData) {
            $package->bookingdates()->create([
                'package_id' => $package->id,
                'start_date' => $groupData['start'],
                'end_date' => $groupData['end'],
            ]);
        }
        return redirect()->back();
    }

    public function update(PackageFormRequest $request,$id)
    {
        $validatedData = $request->validated();

        $package = Package::findOrFail($id);

        $package->update([
            'destination_id' => $validatedData['destination_id'],
            'location' => $validatedData['location'],
            'title' => $validatedData['title'],
            'days' => $validatedData['days'],
            'nights' => $validatedData['nights'],
            'maxpeople' => $validatedData['maxpeople'],
            'about' => $validatedData['about'],
            'price' => $validatedData['price'],
            'discounted_price' => $validatedData['discounted_price'],
        ]);
        if ($request->has('repeater-image')) {
            $i = 1;
            foreach ($validatedData['repeater-image'] as $imageData) {
                $uploadPath = 'uploads/package/';
                foreach ($imageData as $imageFile) {
                    print_r($imageFile);
                    $ext = $imageFile->getClientOriginalExtension();
                    $filename = time().$i++.'.'.$ext;
                    $imageFile->move($uploadPath,$filename);
                    $package->packageImages()->create([
                        'package_id' => $package->id,
                        'image' => $filename,
                        ]);
                }
            }
        }



        Itinerary::where('package_id', $package->id)->delete();
        if($request->has('repeater-group')){

            foreach ($request['repeater-group'] as $groupData) {

                $package->packageItinerarys()->create([
                    'package_id' => $package->id,
                    'day' => $groupData['day'],
                    'action' => $groupData['action'],
                    'details' => $groupData['details'],
                    'meals' => $groupData['meals'],
                    'activity' => $groupData['activity'],
                    'sightseeing' => $groupData['sightseeing'],
                ]);
            }
        }


        return redirect()->route('admin.packageedit',[$id])->with('message','Package Updated Successfully.');
    }


    public function image_delete(int $id)
    {
        $image = Image::findOrFail($id);

        $image->delete();
        return redirect()->back();
    }


}

