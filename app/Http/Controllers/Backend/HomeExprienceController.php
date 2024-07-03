<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HomeExprience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeExprienceController extends Controller
{
    private $root = 'backend.home_expriences.';
    public function index()
    {
        $home_exprience = HomeExprience::first();
        return view($this->root . 'index', ['home_exprience' => $home_exprience]);
    }
    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'card_title_1' => 'required',
                'card_sub_title_1' => 'required',
                'card_icon_class_1' => 'required',
                'card_title_2' => 'required',
                'card_sub_title_2' => 'required',
                'card_icon_class_2' => 'required',
                'card_title_3' => 'required',
                'card_sub_title_3' => 'required',
                'card_icon_class_3' => 'required',
                'card_title_4' => 'required',
                'card_sub_title_4' => 'required',
                'card_icon_class_4' => 'required',
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $home_exprience = HomeExprience::first();
            if(empty($home_exprience))
            {
                $home_exprience = new HomeExprience();
            }
           
            $home_exprience->card_title_1 = $request->card_title_1;
            $home_exprience->card_sub_title_1 = $request->card_sub_title_1;
            $home_exprience->card_icon_class_1 = $request->card_icon_class_1;
            $home_exprience->card_title_2 = $request->card_title_2;
            $home_exprience->card_sub_title_2 = $request->card_sub_title_2;
            $home_exprience->card_icon_class_2 = $request->card_icon_class_2;
            $home_exprience->card_title_3 = $request->card_title_3;
            $home_exprience->card_sub_title_3 = $request->card_sub_title_3;
            $home_exprience->card_icon_class_3 = $request->card_icon_class_3;
            $home_exprience->card_title_4 = $request->card_title_4;
            $home_exprience->card_sub_title_4 = $request->card_sub_title_4;
            $home_exprience->card_icon_class_4 = $request->card_icon_class_4;
            
            if ($home_exprience->save()) {
                return redirect()->back()->with('success', 'Home Exprience has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            
            return redirect()->back()->with('error', $e->getMessage());

        }
    }

    
}
