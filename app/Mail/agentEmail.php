<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class agentEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $agent;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($agent)
    {
        $this->agent = $agent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->subject('CVIEM')->view('backend.emails.agent_email');

        // $attachments is an array with file paths of attachments
        if (!empty($this->agent->logo)) {
            $email->attach('storage/agents/'.$this->agent->code.'/'.$this->agent->logo);
        }
        if (!empty($this->agent->license)) {
            $email->attach('storage/agents/'.$this->agent->code.'/'.$this->agent->license);
        }
        if (!empty($this->agent->nid_or_passport)) {
            $email->attach('storage/agents/'.$this->agent->code.'/'.$this->agent->nid_or_passport);
        }

        return $email;
    }
}
