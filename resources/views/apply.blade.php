@extends('layouts.layout')

@section('title', 'apply')

@section('main')
<div id="contact-page">
  <p>お問い合わせ画面</p>
  <form class="apply-form" action="/apply" method="post">
    @csrf
    <div>
      <label for="name">Name:</label>
      <input type="text" name="user_name" id="name">
    </div>
    <div>
      <label for="mail">mail:</label>
      <input type="text" name="user_mail" id="mail">
    </div>
    <div>
      <label for="msg">message:</label>
      <textarea  name="message" id="msg"></textarea>
    </div>
  <button class="button" type="submit">申し込み</button>
  </form>
</div>
@endsection