<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailer extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    public function __construct(Contact $data)
    {
        $this->data= $data;
    }


    public function build()
    {
      return $this->from('noreply@itdelta_zub.com', 'itdelta_zub')
          ->subject('Форма обратной связи')
          ->view('email.contact', ['data' => $this->data]);
    }
}
