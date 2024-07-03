<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\MediaFile;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyProfileController extends Controller
{
    private $root = 'backend.company_profile.';

    public function index()
    {
        //
    }

    public function create()
    {
        $profiles = CompanyProfile::first();
        return view($this->root . 'create', ['profile' => $profiles]);
    }


    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'sub_title' => 'required',
                'registration_no' => 'required',
                'registration_date' => 'required',
                'company_type' => 'required',
                'mission' => 'required',
                'mission' => 'required',
                'vision' => 'required',
                'value' => 'required',
                'goal' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }
            $profile = CompanyProfile::first();
            if (empty($profile)) {
                $profile = new CompanyProfile();
            }
            $profile->title = $request->title;
            $profile->sub_title = $request->sub_title;
            $profile->registration_no = $request->registration_no;
            $profile->registration_date = $request->registration_date;
            $profile->company_type = $request->company_type;
            $profile->mission = $request->mission;
            $profile->vision = $request->vision;
            $profile->value = $request->value;
            $profile->goal = $request->goal;

            if ($profile->save()) {
                return redirect()->back()->with('success', 'profiles has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }


    public function show(CompanyProfile $companyProfile)
    {
        //
    }

    public function edit(CompanyProfile $companyProfile)
    {
        //
    }


    public function update(Request $request, CompanyProfile $companyProfile)
    {
        //
    }

    public function destroy(CompanyProfile $companyProfile)
    {
        //
    }
}
