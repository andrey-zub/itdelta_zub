<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailer;

class ContactController extends Controller{ // контроллер для работы с формой обратной связи

  public function submit(ContactRequest $req) {

      $contact= new Contact();  //объект для хранения данных из формы обратной связи с именем, телефоном и email
      $contact->name = $req->input('name'); // поле для хранения имени из формы
      $contact->email = $req->input('email');// поле для хранения почты из формы
      $contact->phone = $req->input('phone');// поле для хранения телефона из формы
      $contact->subject = $req->input('subject');// поле для хранения темы сообщения из формы
      $contact->message = $req->input('message');// поле для хранения тела сообщения из формы

      // $contact->save();

      $toEmail = "prog@it-delta.ru";
      Mail::to($toEmail)->send(new ContactMailer($contact));// отправка сообщения на  prog@it-delta.ru


      return redirect()->route('contact')->with('success',"message send from   $contact->email  to   $toEmail");// редирект на форму обратной связи при успешной отправке
    //  dd($req->all());

  }

}
