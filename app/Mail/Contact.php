<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use PhpParser\Node\Expr\Array_;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@lahaltebienetre.fr')
            ->view('emails.contact')
            ->with([
                'name' => $this->contact->name,
                'contact' => $this->contact->contact,
                'service' => $this->contact->service,
                'txtmessage' => $this->contact->txtmessage ]);
    }
}
