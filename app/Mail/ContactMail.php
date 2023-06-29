<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $lastname;
    /**
     * Create a new message instance.
     */
    public function __construct($name, $lastname)
    {
     $this->name = $name;
     $this->lastname = $lastname;
    }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), 'Apotheke Frutigen')
            ->subject('Vielen Dank für Ihre Kontaktaufnahme')
            ->view('template')
            ->with([
                'name' => $this->name,
                'lastname' => $this->lastname,
            ]);
            
    }
}
