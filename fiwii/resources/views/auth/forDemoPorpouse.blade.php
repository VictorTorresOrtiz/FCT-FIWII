@extends('templates.template-account')
@section('account')
  <p>Cuenta Fiwii</p>
  <form method="POST" action="{{ route('create-account') }}">
    @csrf
    <input type="text" placeholder="Usuario" name="username"><br>
    @error('name')
        <span class="alert alert-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <input type="email" placeholder="Email" name="email"><br>
    @error('email')
        <span class="alert alert-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <input type="password" placeholder="Contraseña" name="password"><br>
    @error('password')
        <span class="alert alert-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <input type="submit" value="{{ __('Register') }}"><br>
    <a href="{{ url('/auth.login') }}" class="back">Iniciar Sesión</a>
  </form>

@endsection
