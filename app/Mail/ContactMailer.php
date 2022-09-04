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

    public $data;

    public function __construct(Contact $data)
    {
        $this->data= $data;
    }


    public function build()
    {
      // return $this->from('noreply@itdelta_zub.com', 'itdelta_zub')
      //     ->subject('Форма обратной связи')
      //     ->view('emails.contactMailer', [
      //           'name' => $this->data->name,
      //           'email' => $this->data->email,
      //           'message' => $this->data->message,]);

        return $this->view('contactMailer', ['data' => $this->data]);
    }
    //
    // public function send() {
    //       $comment = 'Это сообщение отправлено из формы обратной связи';
    //       $toEmail = "krabik358@outlook.com";
    //       Mail::to($toEmail)->send(new ContactMail($comment));
    //       return 'Сообщение отправлено на адрес '. $toEmail;
    // }
}
