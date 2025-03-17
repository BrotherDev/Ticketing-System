<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Mail\Mailable as MailableContract;


class TicketReplied extends Mailable implements MailableContract

{
    use Queueable, SerializesModels;


    public $ticket;
    public $reply;

    public function __construct($ticket, $reply)
    {
        $this->ticket = $ticket;
        $this->reply = $reply;
    }



    public function build()
    {
        return $this->view('emails.ticket_replied')
                    ->with([
                        'ticket' => $this->ticket,
                        'reply' => $this->reply,
                    ]);
    }
}
