<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use App\Services\MediaFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdvertiseController extends Controller
{
    private $root = 'backend.advertisements.';

    public function index()
    {
        $advertisements = Advertise::all();
        return view($this->root . 'index', ['advertisements' => $advertisements]);
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
                'title' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $advertise = new Advertise();
            $advertise->title = $request->title;
            $advertise->details = $request->details;
            $advertise->link = $request->link;
            $advertise->is_header = ($request->is_header == 'on')? 1 : 0;
            $advertise->is_slider = ($request->is_slider == 'on')? 1 : 0;
            $advertise->is_featured = ($request->is_featured == 'on')? 1 : 0;

            if($request->hasFile('image'))
                $advertise->image = (new MediaFile)->upload('advertise/', $request->image);

            if ($advertise->save()) {
                return redirect()->back()->with('success', 'Advertisement has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function edit($id)
    {
        $advertise = Advertise::findOrFail($id);
        return view($this->root . 'edit', ['advertise' => $advertise]);
    }

    public function update(Request $request, $id)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'title' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $advertise = Advertise::findOrFail($id);
            $advertise->title = $request->title;
            $advertise->details = $request->details;
            $advertise->link = $request->link;
            $advertise->is_header = ($request->is_header == 'on')? 1 : 0;
            $advertise->is_slider = ($request->is_slider == 'on')? 1 : 0;
            $advertise->is_featured = ($request->is_featured == 'on')? 1 : 0;

            if($request->hasFile('image')){
                if (!empty($advertise->image) && file_exists(public_path('storage/advertise/' . $advertise->image))) {
                    unlink(public_path('storage/advertise/' . $advertise->image));
                }
                $advertise->image = (new MediaFile)->upload('advertise/', $request->image);
            }
            if ($advertise->save()) {
                return redirect()->route('advertisements.index')->with('success', 'Advertisement has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function destroy($id)
    {
        try {
            $advertise = Advertise::findOrFail($id);
            if ($advertise->delete()) {
                if (!empty($advertise->image) && file_exists(public_path('storage/advertise/' . $advertise->image))) {
                    unlink(public_path('storage/advertise/' . $advertise->image));
                }
                return redirect()->back()->with('success', 'Advertisement has been deleted');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
