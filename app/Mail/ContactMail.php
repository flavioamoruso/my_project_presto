<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $emai;
    public $username;
    public $body;

    /**
     * Create a new message instance.
     */
    public function __construct($_email,$_username,$_body)
    {
        //
        $this->email=$_email;
        $this->username=$_email;
        $this->body=$_body;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        from:new Address($this->email,$this->username);
        return new Envelope(
            subject: 'Leggi questa email',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.contactMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
