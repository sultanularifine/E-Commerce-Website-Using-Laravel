<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Jobs\NotificationQueueMailJob;
use App\Models\Package;
use App\Services\AgentMail;
use App\Services\MediaFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    private $root = 'backend.packages.';

    public function index()
    {
        $packages = Package::all();
        return view($this->root . 'index', ['packages' => $packages]);
    }

    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'file' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $package = new Package();
            $package->name = $request->name;

            $package->file = (new MediaFile)->upload('packages/', $request->file);

            if ($package->save()) {
                dispatch(new NotificationQueueMailJob($package, 'special promotion')); // send email to every agent to notify
                return redirect()->back()->with('success', 'New package has been uploaded');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function destroy($id)
    {
        try {
            $package = Package::find($id);
            if ($package->delete()) {
                if (file_exists(public_path('storage/packages/' . $package->file))) {
                    unlink(public_path('storage/packages/' . $package->file));
                }
                return redirect()->back()->with('success', 'Package has been deleted');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
