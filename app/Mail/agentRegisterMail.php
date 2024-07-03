<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class agentRegisterMail extends Mailable
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
        return $this->subject('CVIEM')->view('backend.emails.agent_register_email');
    }
}
