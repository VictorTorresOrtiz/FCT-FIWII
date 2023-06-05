@extends('templates.template-cuenta')
@section('login')
<div class="container" id="container">
	<div class="form-container sign-in-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
			<h1>Acceder a Fiwii</h1>
			<label for="email" class="col-md-4 col-form-label text-md-right"></label>
            <input id="email" type="email" placeholder="Email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="password" class="col-md-4 col-form-label text-md-right"></label>
            <input id="password" type="password" placeholder="Contraseña" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </label>
            <button type="submit">
                {{ __('Iniciar sesión') }}
            </button>
		</form>
	</div>
</div>
@endsection
