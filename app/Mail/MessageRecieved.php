<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MessageRecieved extends Mailable {
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public String $name, public String $content) {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope {
        return new Envelope(
            subject: 'Thanks for Your Message – Islam Ahmed',
            from: 'eslamkamelforex@gmail.com',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content {
        return new Content(
            markdown: 'mail.message.recieved',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array {
        return [];
    }
}
