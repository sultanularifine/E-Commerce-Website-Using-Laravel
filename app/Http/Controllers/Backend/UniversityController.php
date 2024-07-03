<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\University;
use App\Services\MediaFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Countries;

class UniversityController extends Controller
{
    private $root = 'backend.universities.';

    public function index()
    {
        $universities = University::all();
        $countries = Countries::getList('en', 'php');
        return view($this->root . 'index', ['universities' => $universities, 'countries' => $countries]);
    }

    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'image' => 'mimes:jpg,jpeg,png,bmp,tiff,webp',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $university = new University();
            $university->name = $request->name;
            $university->country = $request->country;
            $university->website = $request->website;

            if($request->hasFile('image')) {
                $university->image = (new MediaFile)->upload('universities/', $request->image);
            }

            if ($university->save()) {
                return redirect()->back()->with('success', 'New university has been added');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'image' => 'mimes:jpg,jpeg,png,bmp,tiff,webp',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $university = University::findOrFail($id);
            $university->name = $request->name;
            $university->country = $request->country;
            $university->website = $request->website;

            if($request->hasFile('image')) {
                if (!empty($university->image) && file_exists(public_path('storage/universities/' . $university->image))) {
                    unlink(public_path('storage/universities/' . $university->image));
                }
                $university->image = (new MediaFile)->upload('universities/', $request->image);
            }

            if ($university->save()) {
                return redirect()->back()->with('success', 'New university has been added');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function destroy($id)
    {
        try {
            $university = University::find($id);
            if ($university->delete()) {
                if (!empty($university->image) && file_exists(public_path('storage/universities/' . $university->image))) {
                    unlink(public_path('storage/universities/' . $university->image));
                }
                return redirect()->back()->with('success', 'University has been deleted');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
