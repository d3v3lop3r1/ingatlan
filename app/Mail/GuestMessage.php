<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GuestMessage extends Mailable
{
    use Queueable, SerializesModels;
    public $guest;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($guest)
    {
        $this->guest = $guest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@ingatlanfox.hu')->view('emails.guest-message');
    }
}
