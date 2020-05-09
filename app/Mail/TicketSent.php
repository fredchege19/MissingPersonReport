<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TicketSent extends Mailable
{
    use Queueable, SerializesModels;
    public $callid;
    public $sub;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($call, $subject)
    {
        $this->callid=$call;
        $this->sub=$subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Ticket has been received')->view('emails.sent');
    }
}
