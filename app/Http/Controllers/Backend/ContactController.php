<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Services\MediaFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    private $root = 'backend.contact.';
    public function index()
    {
        $contact = Contact::first();
        return view($this->root . 'index', ['contact' => $contact]);
    }

    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'subtitle' => 'required',
                'address1_country' => 'required',
                'address1_phone' => 'required',
                'address1_email' => 'required',
                'address1_location' => 'required',
                'address1_image' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $contact = Contact::first();
            if(empty($contact))
            {
                $contact = new Contact();
            }
           
            $contact->title = $request->title;
            $contact->subtitle = $request->subtitle;
            $contact->location_title = $request->location_title;
            $contact->location_content = $request->location_content;
            $contact->address1_country = $request->address1_country;
            $contact->address1_phone = $request->address1_phone;
            $contact->address1_email = $request->address1_email;
            $contact->address1_location = $request->address1_location;
            $contact->address2_country = $request->address2_country;
            $contact->address2_phone = $request->address2_phone;
            $contact->address2_email = $request->address2_email;
            $contact->address2_location = $request->address2_location;
            $contact->address3_country = $request->address3_country;
            $contact->address3_phone = $request->address3_phone;
            $contact->address3_email = $request->address3_email;
            $contact->address3_location = $request->address3_location;

            if($request->hasFile('address1_image')){
                if (!empty($contact->address1_image) && file_exists(public_path('storage/contacts/' . $contact->address1_image))) {
                    unlink(public_path('storage/contacts/' . $contact->address1_image));
                }
                $contact->address1_image = (new MediaFile)->upload('contacts/', $request->address1_image);
            }
            if($request->hasFile('address2_image')){
                if (!empty($contact->address2_image) && file_exists(public_path('storage/contacts/' . $contact->address2_image))) {
                    unlink(public_path('storage/contacts/' . $contact->address2_image));
                }
                $contact->address2_image = (new MediaFile)->upload('contacts/', $request->address2_image);
            }
            if($request->hasFile('address3_image')){
                if (!empty($contact->address3_image) && file_exists(public_path('storage/contacts/' . $contact->address3_image))) {
                    unlink(public_path('storage/contacts/' . $contact->address3_image));
                }
                $contact->address3_image = (new MediaFile)->upload('contacts/', $request->address3_image);
            }

            if ($contact->save()) {
                return redirect()->back()->with('success', 'contacts has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            
            return redirect()->back()->with('error', $e->getMessage());

        }
    }
}
