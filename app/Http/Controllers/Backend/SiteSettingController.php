<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use App\Services\MediaFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiteSettingController extends Controller
{
    private $root = 'backend.site_settings.';

    public function index()
    {
        $site_settings = SiteSetting::first();
        return view($this->root . 'index', ['site_settings' => $site_settings]);
    }

    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'site_title' => 'required',
                'logo' => 'required',
                'primary_email' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }
            $site_settings = SiteSetting::first();
            if (empty($site_settings)) {
                $site_settings = new SiteSetting();
            }

            $site_settings->site_title = $request->site_title;
            $site_settings->site_tagline = $request->site_tagline;
            $site_settings->facebook = $request->facebook;
            $site_settings->whatsapp = $request->whatsapp;
            $site_settings->linkedin = $request->linkedin;
            $site_settings->twitter = $request->twitter;
            $site_settings->instagram = $request->instagram;
            $site_settings->primary_email = $request->primary_email;
            if ($request->hasFile('logo')) {
                if (!empty($site_settings->logo) && file_exists(public_path('storage/site_settings/' . $site_settings->logo))) {
                    unlink(public_path('storage/site_settings/' . $site_settings->logo));
                }
                $site_settings->logo = (new MediaFile)->upload('site_settings/', $request->logo);
            }
            if ($request->hasFile('fav_icon')) {
                if (!empty($site_settings->fav_icon) && file_exists(public_path('storage/site_settings/' . $site_settings->fav_icon))) {
                    unlink(public_path('storage/site_settings/' . $site_settings->fav_icon));
                }
                $site_settings->fav_icon = (new MediaFile)->upload('site_settings/', $request->fav_icon);
            }
            if ($site_settings->save()) {
                return redirect()->back()->with('success', 'Site information has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
