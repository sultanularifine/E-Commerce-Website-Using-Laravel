<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\MediaFile;
use Illuminate\Support\Facades\Validator;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    private $root = 'backend.about.';

    public function index()
    {
    }

    public function create()
    { 
        $abouts = About::first();
        return view($this->root . 'create', ['about' => $abouts]);
    }

    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'sub_title' => 'required',
                'short_description' => 'required',
                'description' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $about = About::first();
            if(empty($about)){
                $about = new About();
            }
            $about->title = $request->title;
            $about->sub_title = $request->sub_title;
            $about->short_description = $request->short_description;
            $about->description = $request->description;

            if ($request->hasFile('image')) {
                if (!empty($about->image) && file_exists(public_path('storage/abouts/' . $about->image))) {
                    unlink(public_path('storage/abouts/' . $about->image));
                }
                $about->image = (new MediaFile)->upload('abouts/', $request->image);
            }

            if ($about->save()) {
                return redirect()->back()->with('success', 'abouts has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }


    
}
