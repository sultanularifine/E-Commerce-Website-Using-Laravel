<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ihmApplicationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $application;
    public $time;
    public $image;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($application, $time, $image)
    {
        $this->application = $application;
        $this->time = $time;
        $this->image = $image;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->subject('IHM')->view('backend.emails.ihm_application_email');

        // $attachments is an array with file paths of attachments
        $email->attach('storage/ihm/'. $this->application->passport. '_'. $this->time . '/IHM_Application.pdf');

        if (!empty($this->image['photo'])) {
            $email->attach('storage/ihm/' . $this->application->passport . '_' . $this->time . '/' . $this->image['photo']);
        }
        if (!empty($this->image['passport_info'])) {
            $email->attach('storage/ihm/' . $this->application->passport . '_' . $this->time . '/' . $this->image['passport_info']);
        }
        if (!empty($this->image['academic_docs'])) {
            $email->attach('storage/ihm/' . $this->application->passport . '_' . $this->time . '/' . $this->image['academic_docs']);
        }
        if (!empty($this->image['passport_all'])) {
            $email->attach('storage/ihm/' . $this->application->passport . '_' . $this->time . '/' . $this->image['passport_all']);
        }
        if (!empty($this->image['health'])) {
            $email->attach('storage/ihm/' . $this->application->passport . '_' . $this->time . '/' . $this->image['health']);
        }
        if (!empty($this->image['others'])) {
            $email->attach('storage/ihm/' . $this->application->passport . '_' . $this->time . '/' . $this->image['others']);
        }

        return $email;
    }
}
