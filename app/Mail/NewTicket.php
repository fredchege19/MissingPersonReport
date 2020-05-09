<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewTicket extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $subject;
    public $id;
    public $company;
    public $description;
    public $probType;
    public $priority;
    public $system;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userName, $email, $company, $callId, $subject,  $priority, $type, $description, $system)
    {
        $this->name = $userName;
        $this->email = $email;
        $this->subject = $subject;
        $this->id = $callId;
        $this->company = $company;
        $this->description = $description;
        $this->probType = $type;
        $this->priority = $priority;
        $this->system = $system;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.newTicket')->subject('New Support Ticket');
    }
}
