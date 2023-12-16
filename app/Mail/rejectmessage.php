<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class rejectmessage extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

        public function __construct($data)
        {
            $this->data = $data;
        }



    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Rejectmessage',
        );
    }

    public function build()
{
    return $this->from($this->data['email'])
        ->subject('New Contact Form Submission')
        ->view('emails.reject')
        ->with(['data' => $this->data]); // Pass data to the view
}

}
