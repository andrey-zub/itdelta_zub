@extends('layouts.app')

@section('content')
<h1 class="text-muted" >Contact form</h1>

<form action="{{  route('contact-form')  }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="your name" id="name"  class="form-control">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="example@mail.ru" id="email"  class="form-control">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="tel" name="phone" placeholder="89000000000" id="phone"  class="form-control">
  </div>
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" name="subject" placeholder="subject" id="subject"  class="form-control">
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea name="message" id="message"  placeholder="enter your message" class="form-control"></textarea>
  </div>
<br>
<button type="submit" class="btn btn-success">Send</button>

</form>


@endsection
