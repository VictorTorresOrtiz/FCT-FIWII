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

    <!-- header and footer bar go here-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="#" data-back-button class="header-title header-subtitle">Volver al Inicio</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-3"><i class="fas fa-bars"></i></a>
    </div>
    <div id="footer-bar" class="footer-bar-5">
        <a href="{{url('profile')}}" class="active-nav"><i class="bi bi-person"></i><span>Perfil</span></a>
        <a href="#"><i class="bi bi-list-nested"></i></i><span>Gestión</span></a>
        <a href="{{url('fiwii')}}"><i class="bi bi-house"></i><span>Home</span></a>
        <a href="#"><i class="bi bi-upc-scan"></i><span>QR</span></a>
        <a href="{{url('conf')}}"><i class="bi bi-gear"></i><span>Configuración</span></a>
    </div>

    <div class="page-content">

        <div class="page-title page-title-small">
            <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Perfil</h2>
            <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img" data-src="{{URL::asset('assets/images/avatars/5s.png')}}"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="{{URL::asset('images/pictures/20s.jpg')}} "></div>
        </div>

        <div class="card card-style">
            <div class="content mb-0">
                <h3 class="font-600">Información</h3>
                <p>
                    Datos básicos sobre ti. Colócalos aquí.
                </p>

                <div class="input-style has-borders hnoas-icon input-style-always-active validate-field mb-4">
                    <input type="name" class="form-control validate-name" id="form1" placeholder="Nombre Actual">
                    <label for="form1" class="color-highlight font-400 font-13">Nombre</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>

                <div class="input-style has-borders no-icon input-style-always-active validate-field mb-4">
                    <input type="email" class="form-control validate-email" id="form2" placeholder="Email Actual">
                    <label for="form2" class="color-highlight font-400 font-13">Email</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>

                <div class="input-style has-borders no-icon input-style-always-active validate-field mb-4">
                    <input type="tel" class="form-control validate-tel" id="form3" placeholder="Numero actual">
                    <label for="form3" class="color-highlight font-400 font-13">Numero de Teléfono</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>

                <div class="input-style has-borders no-icon input-style-always-active validate-field mb-4">
                    <input type="password" class="form-control validate-passord" id="form4" placeholder="******">
                    <label for="form4" class="color-highlight font-400 font-13">Contraseña</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
            </div>
            <a href="#" class="btn btn-full btn-margins bg-highlight rounded-sm shadow-xl btn-m text-uppercase font-900">Guardar Cambios</a>
        </div>

        <div class="card card-style">
            <div class="content mb-2">
                <h3 class="font-600">Configuración de la Cuenta</h3>
                <p>
                    Configuración Basica de la Cuenta.
                </p>

                <div class="list-group list-custom-small">
                    <a href="#" data-trigger-switch="switch-1">
                        <span>Notifications</span>
                        <div class="custom-control scale-switch ios-switch">
                            <input type="checkbox" class="ios-input" id="switch-1" checked>
                            <label class="custom-control-label" for="switch-1"></label>
                        </div>
                        <i class="fa fa-arrow-right"></i>
                    </a>
                    <a href="#" data-trigger-switch="switch-1a">
                        <span>Newsletter</span>
                        <div class="custom-control scale-switch ios-switch">
                            <input type="checkbox" class="ios-input" id="switch-1a" checked>
                            <label class="custom-control-label" for="switch-1"></label>
                        </div>
                        <i class="fa fa-arrow-right"></i>
                    </a>
                    <a href="#" data-toggle-theme data-trigger-switch="toggle-dark12" class="border-0">
                        <span>Dark Mode</span>
                        <div class="ms-auto me-4 pe-2">
                            <div class="custom-control ios-switch scale-switch">
                                <input data-toast="switched-color-scheme" data-toggle-theme type="checkbox" class="ios-input" id="toggle-dark12">
                                <label class="custom-control-label" for="toggle-dark12"></label>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end of page content-->

    <!--MENUS--->
    <div id="menu-main"
         class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="{{url('misc.menu')}}"
         data-menu-active="nav-pages"
         data-menu-effect="menu-over">
    </div>
</div>
</body>
