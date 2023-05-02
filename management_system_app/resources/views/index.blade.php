<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Fiwii</title>

<!--Assets---->
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">

<script defer type="text/javascript" src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script defer type="text/javascript" src="{{URL::asset('assets/js/custom.js')}}"></script>

<!--PWA READY---->
<link rel="manifest" href="{{URL::asset('assets/manifest.json')}}" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>

<body class="detect-theme">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
<div id="page">
    @if (!Auth::user())
    <div class="page-content pb-0">
        <div class="splide single-slider slider-no-arrows slider-no-dots" id="single-slider-1">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">

                        <div class="card bg-9" data-card-height="cover">
                            <div class="card-center text-center">
                                <h1 class="fa-4x color-theme font-900">Fiwii</h1>
                                <h4 class="font-300 color-highlight">Bienvenido al Futuro</h4>
                            </div>
                            <div class="card-bottom mb-5 pb-4">
                                <a href="#" class="slider-next btn btn-center-m btn-m bg-highlight rounded-sm font-900 text-uppercase scale-box">Comenzar</a>
                            </div>
                            <div class="card-overlay bg-theme opacity-95"></div>
                        </div>
                    </div>
                    <div class="splide__slide">

                        <div class="card bg-9" data-card-height="cover">
                            <div class="card-center text-center">
                                <h1 class="font-34 color-theme font-800">Cuenta Fiwii</h1>
                                <p class="font-14 mt-n1 color-highlight">Introduzca su cuenta Fiwii para acceder a la App</p>
                            </div>
                            <div class="card-bottom ms-4 me-4 mb-5">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="#" class="btn-full btn btn-m btn-border border-highlight color-highlight rounded-sm font-900 text-uppercase">Crear Cuenta</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{url('/auth.login')}}" class=" btn-full btn btn-m bg-highlight color-white rounded-sm font-900 text-uppercase scale-box">Acceder</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-overlay bg-theme opacity-95"></div>
                        </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@else
    <div class="page-content pb-0">
        <div class="splide single-slider slider-no-arrows slider-no-dots" id="single-slider-1">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                        <div class="card bg-9" data-card-height="cover">
                            <div class="card-center text-center">
                                <h1 class="fa-4x color-theme font-900">Bienvenido {{ Auth::user()->name }}</h1>
                                <h4 class="font-300 color-highlight">Pulse el botón para acceder a Fiwii</h4>
                            </div>
                            <div class="card-bottom ms-4 me-4 mb-5">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn-full btn btn-m btn-border border-highlight color-highlight rounded-sm font-900 text-uppercase">Cerrar Sesión</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{url('/fiwii')}}" class=" btn-full btn btn-m bg-highlight color-white rounded-sm font-900 text-uppercase scale-box">Acceder</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-overlay bg-theme opacity-95"></div>
                     </div>
                </div>
            </div>
        </div>
@endif

</body>

