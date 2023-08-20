<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class mail_mail extends Mailable
{
    use Queueable, SerializesModels;

    public $emaildata;

    /**
     * Create a new message instance.
     */
    public function __construct($emaildata)
    {
        $this->emaildata=$emaildata;
    }



    public function build()
    {

        return $this
        ->from('abhiraldubey@gmail.com', 'Testing')
        ->replyTo('reply_to_mail@mail.com', 'Reply To Email')
        ->subject($this->emaildata['subject'])
        ->with(['body' => $this->emaildata['body']])


    
        
;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->emaildata['subject'])
        ;
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail_messages',
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
