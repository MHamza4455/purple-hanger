<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;
    public $country;
    public $name;
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$country,$msg)
    {
        $this->name = $name;
        $this->country = $country;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('show-ContactUs-Data');
    }
}
