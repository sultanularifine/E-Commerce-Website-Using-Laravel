<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class offerLetterEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->subject('CVIEM')->view('backend.emails.offer_letter_email');
        if(!empty($this->details['offer_letter']))
            $email->attach('storage/applications/'.$this->details['application']['code'].'/'.$this->details['offer_letter']);

        return $email;
    }
}
