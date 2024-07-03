<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HomeCountry;
use App\Services\MediaFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeCountryController extends Controller
{
    private $root = 'backend.home_countrys.';
    public function index()
    {
        $home_countrys = HomeCountry::all();
        return view($this->root . 'index', ['home_countrys' => $home_countrys]);
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
                'sub_title' => 'required',
                'image' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }
            $home_country = new HomeCountry();
            $home_country->title = $request->title;
            $home_country->sub_title = $request->sub_title;
            $home_country->link = $request->link;
        
            if($request->hasFile('image')){
                if (!empty($home_country->image) && file_exists(public_path('storage/home_countrys/' . $home_country->image))) {
                    unlink(public_path('storage/home_countrys/' . $home_country->image));
                }
                $home_country->image = (new MediaFile)->upload('home_countrys/', $request->image);
            }
            if ($home_country->save()) {
                return redirect()->back()->with('success', 'home country has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $home_country = HomeCountry::findOrFail($id);
        return view($this->root . 'edit', ['home_country' => $home_country]);
    }

    public function update(Request $request, $id)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'sub_title' => 'required',
                
            ]);
            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $home_country = HomeCountry::findOrFail($id);
            $home_country->title = $request->title;
            $home_country->sub_title = $request->sub_title;
            $home_country->link = $request->link;
        
            if($request->hasFile('image')){
                if (!empty($home_country->image) && file_exists(public_path('storage/home_countrys/' . $home_country->image))) {
                    unlink(public_path('storage/home_countrys/' . $home_country->image));
                }
                $home_country->image = (new MediaFile)->upload('home_countrys/', $request->image);
            }
            if ($home_country->save()) {
                return redirect()->route('home_country.index')->with('success', 'home countrys has been updated');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $home_country = HomeCountry::find($id);
            if ($home_country->delete()) {
                if (!empty($home_country->image) && file_exists(public_path('storage/home_countrys/' .  $home_country->image))) {
                    unlink(public_path('storage/home_countrys/' . $home_country->image));
                }
                return redirect()->back()->with('success', 'This home country has been deleted');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
