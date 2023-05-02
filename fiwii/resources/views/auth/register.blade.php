@extends('templates.template-cuenta')
@section('register')
            <form method="POST" action="{{ route('register') }}">
                <h1 class="mt-3">Crear Cuenta Fiwii</h1>
                @csrf
                <label for="name" class="col-md-4 col-form-label text-md-right"></label>
                <input id="name" type="text" placeholder="Nombre" class="@error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="name" class="col-md-4 col-form-label text-md-right"></label>
                <input id="username" type="text" placeholder="Apellidos" class="@error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"
                    required autocomplete="username" autofocus>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="email" class="col-md-4 col-form-label text-md-right"></label>
                <input id="email" type="email" placeholder="Email"
                    class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                    autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                <input id="password" type="password" placeholder="Contraseña" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>
                <input id="password-confirm" type="password" placeholder="Confirmar contraseña" class="@error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                <button type="submit" id="accent" class="justify-content-center1 align-items-center d-flex ">
                    {{ __('Registrarse') }}
                </button>
                <a id="fuera" href="{{ url('login') }}">¿Ya dispones de una cuenta?</a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right ">
                    <h1>¿Tienes ya una cuenta Fiwii?</h1>
                    <p>Inicie sesión con su información personal para continuar usando su perfil</p>
                    <a class="nav-link" href="{{ url('login') }}"><button class="ghost" id="signUp">Iniciar sesión</button></a>
@endsection
