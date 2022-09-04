<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ContactRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|min:11',
            'subject'=>'required|min:5|max:100',
            'message'=>'required|min:15|max:250',

        ];
    }

    public function attributes(){
      return [
        'name'=>' Name',
        'email'=>' Email',
        'subject'=>' Subject',
        'message'=>'Message',

      ];
    }

    public function messages(){
      return [
        'name.required'=>'Your name is required',
          'email.required'=>'Your email is required',
            'subject.required'=>'Subject is required',
              'message.required'=>'Message is required',
              'phone.required'=>'Phone is required',

      ];
    }
}
