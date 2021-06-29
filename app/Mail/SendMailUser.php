<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailUser extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $name, $title, $bodyMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $title, $bodyMessage)
    {
        $this->name     = $name;
        $this->title    = $title;
        $this->bodyMessage  = $bodyMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.alert')->subject('Nova Notificação')->with([
            'name'          => $this->name,
            'title'         => $this->title,
            'bodyMessage'   => $this->bodyMessage
        ]);
    }
}
