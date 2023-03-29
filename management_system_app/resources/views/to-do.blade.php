<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Fiwii - Trabajo Hoy</title>

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
        <a href="{{url('conf')}}" class="header-icon header-icon-3"><i class="fa-solid fa-gear fa-spin"></i></a>
    </div>
    <div id="footer-bar" class="footer-bar-5">
        <a href="{{url('profile')}}"><i class="bi bi-person"></i><span>Perfil</span></a>
        <a href="#"><i class="bi bi-list-nested"></i></i><span>Gestión</span></a>
        <a href="{{url('fiwii')}}" class="active-nav"><i class="bi bi-house"></i><span>Home</span></a>
        <a href="#"><i class="bi bi-upc-scan"></i><span>QR</span></a>
        <a href="{{url('conf')}}"><i class="bi bi-gear"></i><span>Configuración</span></a>
    </div>


    <div class="page-content">

        <div class="page-title page-title-small">
            <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Trabajos Hoy</h2>
            <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img" data-src="{{URL::asset('assets/images/avatars/5s.png')}}"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>

        <div class="card card-style">
            <div class="content">
                Trabajos asignados a NOMBRE USUARIO
            </div>
        </div>

        <div class="card card-style">
            <div class="card header-card shape-rounded" data-card-height="150">
                <div class="card-center text-center">
                    <h1 class="color-white">Lista Detallada</h1>
                    <p class="color-white mb-0 boxed-text-l opacity-70">
                        Pulsar tarea para finalizarla
                    </p>
                </div>
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
            </div>
            <div style="height:150px;"></div>
            <div class="content">
                <div class="todo-list list-group list-custom-large">
                    <a href="#">
                        <i class="fa fa-heart bg-fade-red-dark rounded-xl color-red-dark font-12 font-12"></i>
                        <span>Create Appkit</span>
                        <strong>Essential for Customers</strong>
                        <div class="form-check icon-check">
                            <input class="form-check-input" type="checkbox" value="" id="check1">
                            <label class="form-check-label disabled" for="check1">Checkbox 1</label>
                            <i class="icon-check-1 fa fa-square color-gray-dark font-16"></i>
                            <i class="icon-check-2 fa fa-check-square font-16 color-highlight"></i>
                        </div>
                    </a>
                    <a href="#">
                        <i class="fa fa-check rounded-xl bg-fade-green-dark color-green-dark font-12"></i>
                        <span>Create New Page</span>
                        <strong>With New Design Patterns</strong>
                        <div class="form-check icon-check">
                            <input class="form-check-input" type="checkbox" value="" id="check13">
                            <label class="form-check-label disabled" for="check13">Checkbox 1</label>
                            <i class="icon-check-1 fa fa-circle color-gray-dark font-16"></i>
                            <i class="icon-check-2 fa fa-check-circle font-16 color-highlight"></i>
                        </div>
                    </a>
                    <a href="#">
                        <i class="fa fa-cog rounded-xl bg-fade-magenta-dark color-magenta-dark font-12"></i>
                        <span>Upgrade Components</span>
                        <strong>More Poweful Features</strong>
                        <div class="form-check icon-check">
                            <input class="form-check-input" type="checkbox" value="" id="check134">
                            <label class="form-check-label disabled" for="check134">Checkbox 1</label>
                            <i class="icon-check-1 far fa-square color-gray-dark font-16"></i>
                            <i class="icon-check-2 far fa-check-square font-16 color-highlight"></i>
                        </div>
                    </a>
                    <a href="#">
                        <i class="fa fa-bolt rounded-xl bg-fade-yellow-dark color-yellow-dark font-12"></i>
                        <span>Load Faster</span>
                        <strong>More Poweful Features</strong>
                        <div class="form-check icon-check">
                            <input class="form-check-input" type="checkbox" value="" id="check1345">
                            <label class="form-check-label disabled" for="check1345">Checkbox 1</label>
                            <i class="icon-check-1 far fa-circle color-gray-dark font-16"></i>
                            <i class="icon-check-2 far fa-check-circle font-16 color-highlight"></i>
                        </div>
                    </a>
                    <a href="#">
                        <i class="fa fa-mobile-alt rounded-xl bg-fade-blue-dark color-blue-dark font-12"></i>
                        <span>Release PWA Version</span>
                        <strong>More Poweful Features</strong>
                        <div class="form-check icon-check">
                            <input class="form-check-input" type="checkbox" value="" id="check13456">
                            <label class="form-check-label disabled" for="check13456">Checkbox 1</label>
                            <i class="icon-check-1 far fa-thumbs-down color-gray-dark font-16"></i>
                            <i class="icon-check-2 far fa-thumbs-up font-16 color-highlight"></i>
                        </div>
                    </a>
                    <a href="#" class="border-0">
                        <i class="fa fa-book rounded-xl bg-fade-teal-dark color-blue-dark font-12"></i>
                        <span>Rebuild Doc Files</span>
                        <strong>Easier and More Details</strong>
                        <div class="form-check icon-check">
                            <input class="form-check-input" type="checkbox" value="" id="check134567">
                            <label class="form-check-label disabled" for="check134567">Checkbox 1</label>
                            <i class="icon-check-1 far fa-frown color-gray-dark font-16"></i>
                            <i class="icon-check-2 far fa-smile font-16 color-highlight"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end of page content-->

    <!-- Menus-->
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
         data-menu-active="nav-pages"
         data-menu-effect="menu-over">
    </div>



</div>

</body>
