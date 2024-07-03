<?php

namespace App\Services;

use App\Mail\notificationEmail;
use App\Models\Agent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AgentMail 
{
    public function sendEmail($file, $type) {
        $agents = Agent::where('status', 1)->get();
        foreach($agents as $agent){
            $data = [
                'file_name' => $file->name,
                'agency_name' => $agent->agency_name
            ];
            Mail::to($agent->email)->send(new notificationEmail($data, $type));
        }

        return;
    }
}