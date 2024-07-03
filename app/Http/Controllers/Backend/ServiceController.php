<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Services\MediaFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    private $root = 'backend.services.';

    public function index()
    {
        $services = Service::all();
        return view($this->root . 'index', ['services' => $services]);
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
                'short_description' => 'required',
                'image' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }
            $service = new Service();
            $service->title = $request->title;
            $service->sub_title = $request->sub_title;
            $service->short_description = $request->short_description;
            $service->description = $request->description;
        
            if($request->hasFile('image')){
                if (!empty($service->image) && file_exists(public_path('storage/services/' . $service->image))) {
                    unlink(public_path('storage/services/' . $service->image));
                }
                $service->image = (new MediaFile)->upload('services/', $request->image);
            }
            if ($service->save()) {
                return redirect()->back()->with('success', 'Service has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view($this->root . 'edit', ['service' => $service]);
    }
    public function update(Request $request, $id)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'sub_title' => 'required',
                'short_description' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }
            $service = Service::find($id);
            $service->title = $request->title;
            $service->sub_title = $request->sub_title;
            $service->short_description = $request->short_description;
            $service->description = $request->description;
        
            if($request->hasFile('image')){
                if (!empty($service->image) && file_exists(public_path('storage/services/' . $service->image))) {
                    unlink(public_path('storage/services/' . $service->image));
                }
                $service->image = (new MediaFile)->upload('services/', $request->image);
            }
            if ($service->save()) {
                return redirect()->route('services.index')->with('success', 'Service has been updated');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function destroy($id)
    {
        try {
            $service = Service::find($id);
            if ($service->delete()) {
                if (!empty($service->image) && file_exists(public_path('storage/services/' .  $service->image))) {
                    unlink(public_path('storage/services/' . $service->image));
                }
                return redirect()->back()->with('success', 'This service has been deleted');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
