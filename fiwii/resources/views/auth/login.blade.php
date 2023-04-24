@extends('templates.template-cuenta')
@section('login')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <h1 class="mt-3">Inicio de sesión</h1>
    <label for="email" class="col-md-4 col-form-label text-md-right"></label>
    <input id="email" type="email" placeholder="Email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    <span id="email-message"></span>
    {{-- @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror --}}
    <label for="password" class="col-md-4 col-form-label text-md-right"></label>
    <input id="password" type="password" placeholder="Contraseña" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </label>
    <button id="accent" type="submit">
        {{ __('Iniciar sesión') }}
    </button>
    <a id="fuera" href="{{ url('register') }}">Crear Cuenta</a>
</form>

</div>
<div class="overlay-container">
    <div class="overlay">
        <div class="overlay-panel overlay-right">
            <h1>¿No tienes cuenta Fiwii?</h1>
            <p>Ingresa tus datos personales y comienza tu viaje con nosotros</p>
            <a class="nav-link" href="{{ url('register') }}"><button class="ghost" id="signUp">Crear cuenta</button></a>
@endsection
