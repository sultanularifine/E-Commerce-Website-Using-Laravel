<?php

namespace App\Http\Controllers;

use App\Mail\contactMessageMail;
use App\Models\Course;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    private $root = 'frontend.pages.';

    public function home()
    {
        return view($this->root . 'index');
    }

    public function about()
    {
        return view($this->root . 'about.index');
    }

    public function message()
    {
        return view($this->root . 'about.message');
    }

    public function companyProfile()
    {
        return view($this->root . 'about.profile');
    }

    public function whyUs()
    {
        return view($this->root . 'about.why_us');
    }

    public function destination(Request $request)
    {
        $countryInfo = Destination::where('country', $request->country)->first();
        return view($this->root . 'destination', ['countryInfo' => $countryInfo, 'page_title' => $countryInfo->country]);
    }

    public function partners()
    {
        return view($this->root . 'partners');
    }

    public function courses()
    {
        $courses = Course::whereNotIn('id', [1,2])->get();
        return view($this->root . 'courses.index', ['courses' => $courses]);
    }

    public function courseDetails($id, $name)
    {
        $courseDetail = Course::findOrFail($id);
        $courses = Course::whereNotIn('id', [1,2])->take(5)->get();
        return view($this->root . 'courses.details', ['courseDetail' => $courseDetail, 'courses' => $courses]);
    }

    public function contact()
    {
        return view($this->root . 'contact');
    }

    public function contactForm(Request $request)
    {
        try {
            if (Mail::to(env("Contact_Email", 'info@cviedu.my'))->send(new contactMessageMail($request))) {
                return redirect()->back()->with('success', 'Message sent successfully');
            }

            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
