<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AuthMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $template;

    /**
     * Create a new message instance.
     *
     * @param array $details
     * @param string $template
     */
    public function __construct($details, $template = 'emails.login_notification')
    {
        $this->details = $details;
        $this->template = $template;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        // Set the subject based on the template
        $subject = $this->template === 'emails.registration_notification'
            ? 'Registration Notification'
            : 'Login Successful';

        return new Envelope(subject: $subject);
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
       // Set the view based on the template
       $view = $this->template === 'emails.registration_notification'
       ? 'Mails.AuthMail'
       : 'Mails.AuthMail'; // Default view if needed

        return new Content(view: $view, with: ['details' => $this->details]);
        
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return []; // No attachments for this email
    }
}
