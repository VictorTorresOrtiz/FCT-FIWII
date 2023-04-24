<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/auth.css') }}" />

</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-in-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
			<h1>Login</h1>
			<label for="email" class="col-md-4 col-form-label text-md-right"></label>
            <input id="email" type="email" placeholder="Email Address" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="password" class="col-md-4 col-form-label text-md-right"></label>
            <input id="password" type="password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            </label>
            <button type="submit">
                {{ __('Login') }}
            </button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>¿No tienes cuenta Fiwii?</h1>
				<p>Ingresa tus datos personales y comienza tu viaje con nosotros</p>
				<a class="nav-link" href="{{url ('register')}}"><button class="ghost" id="signUp">Crear cuenta</button></a>
			</div>
		</div>
	</div>
</div>
</body>
</html>

