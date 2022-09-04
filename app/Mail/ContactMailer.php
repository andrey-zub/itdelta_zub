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

    public function __construct(Contact $data){
        $this->data= $data; // пеедача данных из объекта, для работы с формой обратной связи, конструктору класса для отправки письма
    }


    public function build(){
        return $this->view('contactMailer', ['data' => $this->data]); // передача полученных данных в тело письма
    }

}
