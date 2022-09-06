<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContact extends Mailable
{
    use Queueable, SerializesModels;

    public $messageDetails;
    /**
     * Create a new message instance.
     *
     */
     public function __construct(Array $messageDetails)
     {
         $this->messageDetails = $messageDetails;
     }

    /**
     * Build the message.
     *
     * @return $this
     */
     public function build()
     {
        $this->from('admin@k1zautosales.ca', 'K1Z Website')
          ->subject('Website Contact | k1zautosales.ca')
          ->replyTo($this->messageDetails['email'])
          ->view('contactEmail');

         return $this;
     }
}
