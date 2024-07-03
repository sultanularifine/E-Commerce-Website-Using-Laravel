<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Services\MediaFile;
use Illuminate\Support\Facades\Validator;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    private $root = 'backend.destinations.';

    public function index()
    {
        $destinations = Destination::all();
        return view($this->root . 'index', ['destinations' => $destinations]);
    }

    public function create()
    {
        return view($this->root . 'create');
    }

    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'category' => 'required',
                'country' => 'required',
                'about' => 'required',
                'why_study' => 'required',
                'required_docs' => 'required',
                'process' => 'required',
                'universities' => 'required',
               
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $destination = new Destination();
            $destination->category = $request->category;
            $destination->country = $request->country;
            $destination->about = $request->about;
            $destination->why_study = $request->why_study;
            $destination->required_docs = $request->required_docs;
            $destination->process = $request->process;
            $destination->universities = $request->universities;

            if($request->hasFile('image'))
                $destination->image = (new MediaFile)->upload('destinations/', $request->image);

            if ($destination->save()) {
                return redirect()->back()->with('success', 'Destinations has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function edit($id)
    {
        $destination = Destination::findOrFail($id);
        return view($this->root . 'edit', ['destination' => $destination]);
    }

    public function update(Request $request, $id)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'country' => 'required',
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }
            $destination = Destination::findOrFail($id);
            $destination->category = $request->category;
            $destination->country = $request->country;
            $destination->about = $request->about;
            $destination->why_study = $request->why_study;
            $destination->required_docs = $request->required_docs;
            $destination->process = $request->process;
            $destination->universities = $request->universities;
            
            if($request->hasFile('image')){
                if (!empty($destination->image) && file_exists(public_path('storage/destinations/' . $destination->image))) {
                    unlink(public_path('storage/destinations/' . $destination->image));
                }
                $destination->image = (new MediaFile)->upload('destinations/', $request->image);
            }


            if ($destination->save()) {
                return redirect()->route('destinations.index')->with('success', 'Destinations has been Updated');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function destroy($id)
    {
        try {
            $destination = Destination::findOrFail($id);
            if ($destination->delete()) {
                if (!empty($destination->image) && file_exists(public_path('storage/destinations/' . $destination->image))) {
                    unlink(public_path('storage/destinations/' . $destination->image));
                }
                return redirect()->back()->with('success', 'Destinations has been deleted');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
