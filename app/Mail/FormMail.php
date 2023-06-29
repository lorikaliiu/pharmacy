<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $lastname;
    public $email;
    public $subject;
    public $formMessage;

    public function __construct($name, $lastname, $email, $subject, $message)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->subject = $subject;
        $this->formMessage = $message;
    }

    // ...

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), 'Apotheke Frutigen')
            ->subject('Neues Kontaktformular')
            ->view('templateforme')
            ->with([
                'name' => $this->name,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'subject' => $this->subject,
                'formMessage' => $this->formMessage,
            ]);
    }
}
