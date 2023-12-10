<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AcceptanceMail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->view('Email.accept-mail')->subject('Your Form is Accepted')->from('forestmel102@gmail.com', 'TIMBER-DEPOT');
    }
}