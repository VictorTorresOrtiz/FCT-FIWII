@extends('templates.template-account')
@section('account')
  <p>Cuenta Fiwoo</p>
  <input type="text" placeholder="Usuario" name="user"><br>
  <input type="email" placeholder="Email" name="email"><br>
  <input type="password" placeholder="Contraseña" name="pass"><br>
  <input type="button" value="Cuenta"><br>
  <a href="{{ url('/') }}" class="back">Volver al Inicio</a>
@endsection