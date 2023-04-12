<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Fiwii - Iniciar Sesión</title>

<!--Assets---->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/fonts/css/fontawesome-all.min.css')}} ">

<script defer type="text/javascript" src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script defer type="text/javascript" src="{{URL::asset('assets/js/custom.js')}}"></script>

<!--PWA READY---->
<link rel="manifest" href="{{URL::asset('manifest.json')}}" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>

<body class="detect-theme">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <!-- header and footer bar-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="{{url('/')}}" data-back-button class="header-title header-subtitle">Volver</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
    </div>

    <div class="page-content">

        <div class="page-title page-title-small">
            <h2><a href="{{url('/')}}" data-back-button><i class="fa fa-arrow-left"></i></a>Volver</h2>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="{{URL::asset('assets/images/pictures/20s.jpg')}}"></div>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="card card-style">
            <div class="content mt-2 mb-0">
                <div class="input-style no-borders has-icon validate-field mb-4">
                    <i class="fa fa-user"></i>
                    <label for="form1a" class="color-blue-dark font-10 mt-1">Usuario</label>
                    <input id="name" type="name" class="form-control validate-name" @error('name') is-invalid @enderror"  placeholder="Usuario" @error('user') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>

                <div class="input-style no-borders has-icon validate-field mb-4">
                    <i class="fa fa-lock"></i>
                    <label for="form3a" class="color-blue-dark font-10 mt-1">Contraseña</label>
                    <input id="password" type="password" class="form-control validate-password" @error('password') is-invalid @enderror" id="form3a" placeholder="Contraseña" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>

                {{-- <a href="{{url('fiwii')}}" class="btn btn-m mt-4 mb-4 btn-full bg-green-dark rounded-sm text-uppercase font-900">Acceder</a> --}}
                <button type="submit" class="btn btn-m mt-4 mb-4 btn-full bg-green-dark rounded-sm text-uppercase font-900">
                    {{ __('Acceder') }}
                </button>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
        </form>
                <div class="divider"></div>

                <a href="#" class="btn btn-icon btn-m rounded-sm btn-full shadow-l bg-facebook text-uppercase font-700 text-start"><i class="fab fa-facebook-f text-center"></i>Acceder con Facebook</a>
                <a href="#" class="btn btn-icon btn-m rounded-sm mt-2 btn-full shadow-l bg-twitter text-uppercase font-700 text-start"><i class="fab fa-twitter text-center"></i>Acceder con Twitter</a>

                <div class="divider mt-4 mb-3"></div>

            </div>

        </div>



    </div>
</div>
</body>
