<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Services\MediaFile;
use App\Models\AboutMessage;
use Illuminate\Http\Request;

class AboutMessageController extends Controller
{
    private $root = 'backend.messages.';
    public function index()
    {
        //
    }

    public function create()
    {
        $messages = AboutMessage::first();
        return view($this->root . 'create', ['message' => $messages]);
    }

    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'description1' => 'required',
                'highlighter_text' => 'required',
                'description2' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $message = AboutMessage::first();
            if(empty($message)){
                $message = new AboutMessage();
            }
            $message->title = $request->title;
            $message->description1 = $request->description1;
            $message->highlighter_text = $request->highlighter_text;
            $message->description2 = $request->description2;

            if ($request->hasFile('image')) {
                if (!empty($message->image) && file_exists(public_path('storage/messages/' . $message->image))) {
                    unlink(public_path('storage/messages/' . $message->image));
                }
                $message->image = (new MediaFile)->upload('messages/', $request->image);
            }

            if ($message->save()) {
                return redirect()->back()->with('success', 'messages has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    
   
}
