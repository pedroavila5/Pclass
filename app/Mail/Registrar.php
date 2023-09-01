<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Registrar extends Mailable
{
    use Queueable, SerializesModels;
    public $mensaje;

    public function __construct($mensaje)
    {
        $this->mensaje = $mensaje;
        
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Registrar',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mails.registrar'

        );
    }

    public function attachments(): array
    {
        return [];
    }
}
