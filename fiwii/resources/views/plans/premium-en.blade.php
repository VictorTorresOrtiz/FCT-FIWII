<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.ico')}}" type="image/x-icon" />

    <!---CSS Y JS-->
    <link rel="stylesheet" href="{{URL::asset('assets/css/form.css')}}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <title>Fiwoo - Premium Account</title>
</head>
<body>
    <div class="container">
      {{-- <form >
        <p>Fiwoo Premium</p>
        <input type="text" placeholder="Username" name="user"><br>
        <input type="email" placeholder="Email" name="email"><br>
        <input type="password" placeholder="Password" name="pass"><br>
        <input type="button" value="Cuenta"><br>
        <a href="{{url('en')}}" class="back">Go back</a>
      </form> --}}
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <p>Fiwoo Premium</p>
        <div class="form-group row mb-3">
            {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> --}}
            <div class="col-md-6">
                <input id="name" type="text" placeholder="Username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row mb-3">
            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}
            <div class="col-md-6">
                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row mb-3">
            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}
            <div class="col-md-6">
                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row mb-3">
            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> --}}
            <div class="col-md-6">
                <input id="password-confirm" type="password" placeholder="Confirm password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
        <input id="Plan" type="text" name="Plan" value="Basic" style="display: none">
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                {{-- <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button> --}}
                <input type="submit" value="Create account"><br>
            </div>
            <a href="{{url('/')}}" class="back">Go back</a>
        </div>
    </form>

      <div class="drops">
        <div class="drop drop-1"></div>
        <div class="drop drop-2"></div>
        <div class="drop drop-3"></div>
        <div class="drop drop-4"></div>
        <div class="drop drop-5"></div>
      </div>
    </div>

</body>
</html>
