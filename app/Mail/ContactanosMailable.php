<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

use App\Models\Area;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    //protected Area $area;

    /**
     * Create a new message instance.
     */
    public function __construct(protected Area $area)
    {
        //$this->mailData = $mailData;
        $this->area = $area;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('coordimador@tutoriasutcam.net', 'Coordinador de tutorias'),
            subject: 'Gracias por contactarse...',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.recibe',

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
