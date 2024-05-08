<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Destination;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\DestinationFormRequest;

class DestinationController extends Controller
{
    public function create()
    {
        return view('admin.destination.add_destination');
    }
    public function view()
    {
        $destination = Destination::paginate(12);
        return view('admin.destination.view_destination',compact('destination'));
    }


    public function store(DestinationFormRequest $request)
    {
        $validatedData = $request->validated();

        $destination = new Destination;
        $destination->destination = $validatedData['destination'];
        $destination->description = $validatedData['description'];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/destination/',$filename);

            $destination->image = $filename;
        }

        $destination->save();

        return redirect()->route('admin.createdestination')->with('success','Destination Added Successfully');

    }

    public function delete(int $item_id)
    {
        $destination = Destination::findOrFail($item_id);

        $destination->delete();
        return redirect()->back();

    }
    public function edit(int $item_id)
    {
        $destination = Destination::findOrFail($item_id);

        return view('admin.destination.edit_destination',compact('destination'));

    }

    public function update(DestinationFormRequest $request, $id)
    {
        $validatedData = $request->validated();

        $destination = Destination::findOrFail($id);
        $destination->destination = $validatedData['destination'];
        $destination->description = $validatedData['description'];

        if($request->hasFile('image')){

            $path = 'uploads/destination/'.$destination->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/destination/',$filename);

            $destination->image = $filename;
        }

        $destination->save();

        return redirect()->route('admin.editdestination',[$id])->with('success','Destination Updated Successfully');

    }
}
