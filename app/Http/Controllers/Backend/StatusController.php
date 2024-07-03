<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    private $root = 'backend.status.';

    public function index(Request $request)
    {
        if ($request->type == 'application')
            $status = Status::where('type', 1)->get();
        else
            $status = Status::where('type', 2)->get();

        return view($this->root . 'index', ['status' => $status]);
    }

    public function applicantStatus()
    {
        $status = Status::where('type', 2)->get();
        return view($this->root . 'applicant', ['status' => $status]);
    }

    public function store(Request $request)
    {
        try {
            $status = new Status();
            $status->name = $request->name;
            $status->type = $request->type;
            if ($status->save()) {
                return redirect()->back()->with('success', 'New Status created successfully');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function edit($id)
    {
        $status = Status::find($id);
        return view($this->root . 'edit', ['status' => $status]);
    }

    public function update(Request $request, $id)
    {
        try {
            $status = Status::find($id);
            $status->name = $request->name;
            $status->type = $request->type;
            if ($status->save()) {
                return redirect()->back()->with('success', 'Status has been updated');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function destroy($id)
    {
        try {
            $status = Status::find($id);
            if ($status->delete()) {
                return redirect()->back()->with('success', 'Status has been deleted');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
