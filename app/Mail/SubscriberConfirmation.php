<?php

namespace App\Mail;

use App\Models\NotifySubscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SubscriberConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public NotifySubscriber $subscriber,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'You are on the list!',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.subscriber-confirmation',
        );
    }
}
