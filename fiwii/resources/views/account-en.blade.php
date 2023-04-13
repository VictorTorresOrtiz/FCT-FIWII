@extends('templates.template-account')
@section('account_en')
  <p>Fiwii Acount</p>
  <input type="text" placeholder="Username" name="user"><br>
  <input type="email" placeholder="Email" name="email"><br>
  <input type="password" placeholder="Password" name="pass"><br>
  <input type="button" value="Cuenta"><br>
  <a href="{{url('en')}}" class="back">Back to Home</a>
@endsection