<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\HomeWhyUs;
use App\Services\MediaFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class HomeWhyUsController extends Controller
{
    private $root = 'backend.home_why_us.';
    public function create()
    {
        $home_why_us = HomeWhyUs::first();
        return view($this->root . 'create', ['home_why_us' => $home_why_us]);
    }
 
    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'sub_title' => 'required',
                'content' => 'required',
                'card_title_1' => 'required',
                'card_icon_class_1' => 'required',
                'card_title_2' => 'required',
                'card_icon_class_2' => 'required',
                'card_title_3' => 'required',
                'card_icon_class_3' => 'required',
                'card_title_4' => 'required',
                'card_icon_class_4' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $home_why_us = HomeWhyUs::first();
            if(empty($home_why_us))
            {
                $home_why_us = new HomeWhyUs();
            }
           
            $home_why_us->title = $request->title;
            $home_why_us->sub_title = $request->sub_title;
            $home_why_us->content = $request->content;
            $home_why_us->card_title_1 = $request->card_title_1;
            $home_why_us->card_icon_class_1 = $request->card_icon_class_1;
            $home_why_us->card_title_2 = $request->card_title_2;
            $home_why_us->card_icon_class_2 = $request->card_icon_class_2;
            $home_why_us->card_title_3 = $request->card_title_3;
            $home_why_us->card_icon_class_3 = $request->card_icon_class_3;
            $home_why_us->card_title_4 = $request->card_title_4;
            $home_why_us->card_icon_class_4 = $request->card_icon_class_4;
            
            if ($home_why_us->save()) {
                return redirect()->back()->with('success', 'Home Why Us has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            
            return redirect()->back()->with('error', $e->getMessage());

        }
    }
}