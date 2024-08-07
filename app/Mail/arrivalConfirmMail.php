<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class arrivalConfirmMail extends Mailable
{
    use Queueable, SerializesModels;
    public $arrival;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($arrival)
    {
        $this->arrival = $arrival;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('CVIEM')->view('backend.emails.arrival_confirm_email');
    }
}
