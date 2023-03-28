<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Fiwii - Inicio</title>

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

    <!-- Header y Footer-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="index.html" class="header-title">Menu</a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas fa-brush"></i></a>
    </div>
    <div id="footer-bar" class="footer-bar-5">
        <a href="{{url('profile')}}"><i class="bi bi-person"></i><span>Perfil</span></a>
        <a href="#"><i class="bi bi-list-nested"></i></i><span>Gestión</span></a>
        <a href="{{url('fiwii')}}" class="active-nav"><i class="bi bi-house"></i><span>Home</span></a>
        <a href="#"><i class="bi bi-upc-scan"></i><span>QR</span></a>
        <a href="{{url('conf')}}"><i class="bi bi-gear"></i><span>Configuración</span></a>
    </div>

    <div class="page-content">

        <div class="page-title page-title-large">
            <h2 data-username="Nombre Usuario" class="greeting-text"></h2>
            <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img" data-src="{{URL::asset('assets/images/avatars/5s.png')}}"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="210">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>


        <!-- Homepage Slider-->
        <div class="splide single-slider slider-no-arrows slider-no-dots homepage-slider" id="single-slider-1">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                        <div class="card rounded-l mx-2 text-center shadow-l bg-1" data-card-height="320">
                            <div class="card-bottom">
                                <h1 class="font-24 font-700">Nuevo Diseño</h1>
                                <p class="boxed-text-xl">
                                    Hemos rediseñado la interfaz de Fiwii para su mejor usabilidad.
                                </p>
                            </div>
                            <div class="card-overlay bg-gradient-fade"></div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div class="card rounded-l mx-2 text-center shadow-l bg-2" data-card-height="320">
                            <div class="card-bottom">
                                <h1 class="font-24 font-700">PWA READY</h1>
                                <p class="boxed-text-xl">
                                    ¿Sabías que puedes añadir Fiwii a tu pantalla de inicio de su smartphone?.
                                </p>
                            </div>
                            <div class="card-overlay bg-gradient-fade"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-0">
            <div class="row">
                <div class="col-6">
                    <a href="#" class="btn btn-full btn-m rounded-s text-uppercase font-900 shadow-xl bg-highlight" data-menu="menu-install-pwa-android">Instalar Fiwii</a>
                </div>
                <div class="col-6">
                    <a href="#" class="btn btn-full btn-border btn-m rounded-s text-uppercase font-900 shadow-l border-highlight color-highlight" data-menu="menu-call">Soporte</a>
                </div>
            </div>
        </div>


        <div class="content mb-2">
            <h5 class="float-start font-16 font-500">Herramientas</h5>
            <div class="clearfix"></div>
        </div>

        <div class="splide double-slider visible-slider slider-no-arrows slider-no-dots" id="double-slider-1">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide ps-3">
                        <div class="bg-theme rounded-m shadow-m text-center">
                            <a href="{{url('#')}}">
                                <i class="fa-solid fa-qrcode fa-3x pt-2"></i>
                                <h5 class="font-16">Lector QR</h5>
                                <p class="line-height-s font-11 pb-4">
                                    Leer Código QR <br>en tiempo real
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="splide__slide ps-3">
                        <div class="bg-theme rounded-m shadow-m text-center">
                            <a href="{{url('to-do')}}">
                                <i class="fa-solid fa-list fa-3x pt-2"></i>
                                <h5 class="font-16">Trabajo</h5>
                                <p class="line-height-s font-11 pb-4">
                                    Lista de tareas <br>asignadas para usted
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="splide__slide ps-3">
                        <div class="bg-theme rounded-m shadow-m text-center">
                            <a href="{{url('#')}}">
                                <i class="fa-solid fa-plus fa-3x pt-2"></i>
                                <h5 class="font-16">Generador QR</h5>
                                <p class="line-height-s font-11 pb-4">
                                    Genere QR <br> de forma automática
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="splide__slide ps-3">
                        <div class="bg-theme rounded-m shadow-m text-center">
                            <a href="{{url('#')}}">
                                <i class="fa-solid fa-fire-extinguisher fa-3x pt-2"></i>
                                <h5 class="font-16">Sistemas</h5>
                                <p class="line-height-s font-11 pb-4">
                                    Lista de Sistemas <br> en tiempo real.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card card-style preload-img" data-src="images/pictures/20s.jpg" data-card-height="350">
            <div class="card-center text-center">
                <p class="line-height-xl font-19 font-300 color-white ps-3 pe-3 mb-2">
                    ¿Quieres descargar Fiwii?.
                </p>
                <p class="opacity-50 color-white">Para mejorar su experencia le recomendamos que descargue Fiwii en su dispositivo</p>
                <a href="#" class="btn btn-m rounded-s btn-border color-white border-white text-uppercase font-900" data-menu="menu-install-pwa-android">Descargar</a>
            </div>
            <div class="card-overlay bg-highlight opacity-90"></div>
        </div>

        <!-- footer and footer card-->
        <div class="footer" data-menu-load="{{url('misc.menu-footer')}}"></div>
    </div>
    <!-- end of page content-->


    <!--Menus--->
    <div id="menu-share"
         class="menu menu-box-bottom menu-box-detached rounded-m"
         data-menu-load="{{url('misc.menu-share')}}"
         data-menu-height="420"
         data-menu-effect="menu-over">
    </div>

    <div id="menu-main"
         class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="{{url('misc.menu')}}"
         data-menu-active="nav-welcome"
         data-menu-effect="menu-over">
    </div>

    <!------------->
    <!------------->
    <!--Menu Call-->
    <!------------->
    <!------------->
    <!-- Tips Menu 1-->
    <div id="menu-call" class="menu menu-box-modal rounded-m" data-menu-height="230"  data-menu-width="310">
        <h1 class="text-center font-700 mt-3 pt-2">Soporte Técnico</h1>
        <p class="boxed-text-xl">
            Siempre estamos aquí para ayudar. Llámenos hoy. Simplemente toque el botón y póngase en contacto con nosotros.
        </p>
        <a href="tel:Numero Aqui" class="external-link btn btn-center-m btn-sm shadow-l rounded-s text-uppercase font-900 bg-green-dark">Llamar Ahora</a>
    </div>

    <!-- Install Prompt for Android -->
    <div id="menu-install-pwa-android" class="menu menu-box-bottom menu-box-detached rounded-l" data-menu-height="350" data-menu-effect="menu-parallax">
        <div class="boxed-text-l mt-4">
            <img class="rounded-l mb-3" src="{{URL::asset('assets/images/logo.png')}}" alt="img" width="90">
            <h4 class="mt-3">Fiwii en su pantalla de Inicio</h4>
            <p>
                Instale Fiwii en su pantalla de inicio y acceda a él como una aplicación normal. ¡Es realmente así de simple!
             </p>
            <a href="#" class="pwa-install btn btn-s rounded-s shadow-l text-uppercase font-900 bg-highlight mb-2">Añadir a Pantalla de Inicio</a><br>
            <a href="#" class="pwa-dismiss close-menu color-gray2-light text-uppercase font-900 opacity-60 font-10">Cerrar</a>
            <div class="clear"></div>
        </div>
    </div>

    <!-- Install instructions for iOS -->
    <div id="menu-install-pwa-ios"
        class="menu menu-box-bottom menu-box-detached rounded-l"
         data-menu-height="320"
        data-menu-effect="menu-parallax">
        <div class="boxed-text-xl mt-4">
            <img class="rounded-l mb-3" src="{{URL::asset('assets/app/icons/icon-128x128.png')}}" alt="img" width="90">
            <h4 class="mt-3">Fiwii en su pantalla de Inicio</h4>
            <p class="mb-0 pb-3">
                Instale Fiwii en su pantalla de inicio y acceda a él como una aplicación normal. Abra su menú Safari y toque "Agregar a la pantalla de inicio".
            </p>
            <div class="clear"></div>
            <a href="#" class="pwa-dismiss close-menu color-highlight font-800 opacity-80 text-center text-uppercase">Cerrar</a><br>
            <i class="fa-ios-arrow fa fa-caret-down font-40"></i>
        </div>
    </div>


</div>
</body>
