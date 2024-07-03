<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\MediaFile;
use Illuminate\Support\Facades\Validator;
use App\Models\WhyCompany;
use Illuminate\Http\Request;

class WhyCompanyController extends Controller
{
    private $root = 'backend.why_companys.';

    public function index()
    {
        //
    }


    public function create()
    {
        $why_companys = WhyCompany::first();
        return view($this->root . 'create', ['why_company' => $why_companys]);
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
                'image' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }
            $why_company = WhyCompany::first();
            if (empty($why_company)) {
                $why_company = new WhyCompany();
            }
            $why_company->title = $request->title;
            $why_company->sub_title = $request->sub_title;
            $why_company->short_description = $request->short_description;
            $why_company->description = $request->description;
            if ($request->hasFile('image')) {
                if (!empty($why_company->image) && file_exists(public_path('storage/why_companys/' . $why_company->image))) {
                    unlink(public_path('storage/why_companys/' . $why_company->image));
                }
                $why_company->image = (new MediaFile)->upload('why_companys/', $request->image);
            }
            if ($why_company->save()) {
                return redirect()->back()->with('success', 'why_company has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }


    public function show(WhyCompany $whyCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WhyCompany  $whyCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(WhyCompany $whyCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WhyCompany  $whyCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WhyCompany $whyCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WhyCompany  $whyCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhyCompany $whyCompany)
    {
        //
    }
}
