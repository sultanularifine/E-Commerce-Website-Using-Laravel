<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\ihmApplicationEmail;
use App\Models\Agent;
use App\Models\User;
use App\Services\MediaFile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Countries;
use PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class IHMController extends Controller
{
    private $root = 'backend.ihm.';

    public function form()
    {
        $agents = Agent::where('status', 1)->get();
        $earliest_year = Carbon::now()->format('Y');
        $countries = Countries::getList('en', 'php');
        return view($this->root . 'form', ['agents' => $agents, 'earliest_year' => $earliest_year, 'countries' => $countries]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $agents = Agent::where('status', 1)->get();
            $time = time();
            $data = [
                'application' => $request,
                'agents' => $agents
            ];
            $pdf = PDF::loadView('backend.pdf.ihmApplication', $data);
            $pdf->download('IHM_' . $request->passport . '_' . $time . '.pdf');
            Storage::put('public/ihm/' . $request->passport . '_' . $time . '/IHM_Application.pdf', $pdf->output());

            // store images
            $image = [];
            if ($request->hasFile('photo')) 
                $image['photo'] = (new MediaFile)->upload('ihm/' . $request->passport . '_' . $time, $request->photo);

            if ($request->hasFile('passport_info')) 
                $image['passport_info'] = (new MediaFile)->upload('ihm/' . $request->passport . '_' . $time, $request->passport_info);

            if ($request->hasFile('academic_docs')) 
                $image['academic_docs'] = (new MediaFile)->upload('ihm/' . $request->passport . '_' . $time, $request->academic_docs);

            if ($request->hasFile('passport_all')) 
                $image['passport_all'] = (new MediaFile)->upload('ihm/' . $request->passport . '_' . $time, $request->passport_all);

            if ($request->hasFile('health')) 
                $image['health'] = (new MediaFile)->upload('ihm/' . $request->passport . '_' . $time, $request->health);

            if ($request->hasFile('others')) 
                $image['others'] = (new MediaFile)->upload('ihm/' . $request->passport . '_' . $time, $request->others);

            $admin = User::role('Super Admin')->first();
            if (Mail::to(env("IHM_ADMIN", $admin->email))->send(new ihmApplicationEmail($request, $time, $image))) {
                // Delete file
                Storage::deleteDirectory('public/ihm/' . $request->passport . '_' . $time );
 
                DB::commit();
                return redirect()->back()->with('success', 'Application submitted successfully');
            }

            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
