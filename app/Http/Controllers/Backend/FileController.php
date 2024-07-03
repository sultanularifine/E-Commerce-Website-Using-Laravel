<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Jobs\NotificationQueueMailJob;
use App\Models\File;
use App\Services\MediaFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FileController extends Controller
{
    private $root = 'backend.files.';

    public function index()
    {
        $files = File::all();
        return view($this->root . 'index', ['files' => $files]);
    }

    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'name' => 'required|unique:files',
                'date' => 'required',
                'file' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $file = new File();
            $file->name = $request->name;
            $file->date = $request->date;

            $file->file = (new MediaFile)->upload('files/', $request->file);

            if ($file->save()) {
                dispatch(new NotificationQueueMailJob($file, 'file')); // send email to every agent to notify
                return redirect()->back()->with('success', 'New file has been uploaded');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function destroy($id)
    {
        try {
            $file = File::find($id);
            if ($file->delete()) {
                if (file_exists(public_path('storage/files/' . $file->file))) {
                    unlink(public_path('storage/files/' . $file->file));
                }
                return redirect()->back()->with('success', 'File has been deleted');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
