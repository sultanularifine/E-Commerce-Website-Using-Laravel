<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HomeService;
use App\Services\MediaFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeServiceController extends Controller
{
    private $root = 'backend.home_services.';

    public function index()
    {
        $home_services = HomeService::all();
        return view($this->root . 'index', ['home_services' => $home_services]);
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
                'description' => 'required',
                'bg_image' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }
            $home_service = new HomeService();
            $home_service->title = $request->title;
            $home_service->description = $request->description;
            $home_service->icon_class = $request->icon_class;
            $home_service->is_featured = ($request->is_featured == 'on')? 1 : 0;

        
            if($request->hasFile('bg_image')){
                if (!empty($home_service->bg_image) && file_exists(public_path('storage/home_services/' . $home_service->bg_image))) {
                    unlink(public_path('storage/home_services/' . $home_service->bg_image));
                }
                $home_service->bg_image = (new MediaFile)->upload('home_services/', $request->bg_image);
            }
            if ($home_service->save()) {
                return redirect()->back()->with('success', 'home Service has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $home_services = HomeService::findOrFail($id);
        return view($this->root . 'edit', ['home_services' => $home_services]);
    }

    public function update(Request $request, $id)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'description' => 'required',
                'bg_image' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }
            $home_service = HomeService::find($id);
            $home_service->title = $request->title;
            $home_service->description = $request->description;
            $home_service->icon_class = $request->icon_class;
            $home_service->is_featured = ($request->is_featured == 'on')? 1 : 0;

        
            if($request->hasFile('bg_image')){
                if (!empty($home_service->bg_image) && file_exists(public_path('storage/home_services/' . $home_service->bg_image))) {
                    unlink(public_path('storage/home_services/' . $home_service->bg_image));
                }
                $home_service->bg_image = (new MediaFile)->upload('home_services/', $request->bg_image);
            }
            if ($home_service->save()) {
                return redirect()->back()->with('success', 'home Service has been updated');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $home_service = HomeService::find($id);
            if ($home_service->delete()) {
                if (!empty($home_service->image) && file_exists(public_path('storage/services/' .  $home_service->image))) {
                    unlink(public_path('storage/services/' . $home_service->image));
                }
                return redirect()->back()->with('success', 'This home service has been deleted');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
