<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject="Información de contacto";
    /**
     * Create a new message instance.
     */
    public $usuario;
    public $username;
    public $rol;
    public function __construct($usuario,$username,$rol)
    {
        $this->usuario=$usuario;
        $this->username=$username;
        $this->rol=$rol;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Bienvenido a su cuenta de Fiwii',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'Contactanos',
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
