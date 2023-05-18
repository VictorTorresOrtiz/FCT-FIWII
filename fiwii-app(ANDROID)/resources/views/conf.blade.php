@extends('templates.template-conf')
@section('conf')
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
<div id="page">
    <!-- header and footer bar go here-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="{{url('fiwii')}}" class="header-title"></a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
    </div>
    <div id="footer-bar" class="footer-bar-5">
        <a href="{{url('profile')}}"><i class="bi bi-person"></i><span>Perfil</span></a>
        <a href="{{url('sistemas')}}"><i class="bi bi-list-nested"></i></i><span>Sistemas</span></a>
        <a href="{{url('fiwii')}}"><i class="bi bi-house"></i><span>Home</span></a>
        <a href="{{url('qrLector')}}"><i class="bi bi-upc-scan"></i><span>QR</span></a>
        <a href="{{url('conf')}}" class="active-nav"><i class="bi bi-gear"></i><span>Configuración</span></a>
    </div>
    <div class="page-content">
        <div class="page-title page-title-small">
            <h2><a href="{{url('fiwii')}}" data-back-button><i class="fa fa-arrow-left"></i></a>Configuración</h2>
            <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img" data-src="{{URL::asset('assets/images/avatars/5s.png')}}"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="210">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="{{URL::asset('assets/images/pictures/20s.jpg')}}"></div>
        </div>
        <div class="card card-style">
            <div class="content mt-0 mb-2">
                <div class="list-group list-custom-large mb-4">
                    <a href="#" data-toggle-theme class="show-on-theme-light">
                        <i class="fa font-14 fa-moon bg-brown-dark rounded-sm"></i>
                        <span>Modo Noche</span>
                        <strong>Cambiar a modo noche</strong>
                        <i class="fa fa-angle-right me-2"></i>
                    </a>
                    <a href="#" data-toggle-theme class="show-on-theme-dark">
                        <i class="fa font-14 fa-lightbulb bg-yellow-dark rounded-sm"></i>
                        <span>Modo Día</span>
                        <strong>Cambiar a modo día</strong>
                        <i class="fa fa-angle-right me-2"></i>
                    </a>
                    <a href="#" data-menu="menu-share">
                        <i class="fa font-14 fa-share-alt bg-red-dark rounded-sm"></i>
                        <span>Compartir Fiwii</span>
                        <strong>Comparte Fiwii en las redes sociales</strong>
                        <i class="fa fa-angle-right me-2"></i>
                    </a>
                    <a href="#" data-menu="menu-language">
                        <i class="fa font-14 fa-globe bg-green-dark rounded-sm"></i>
                        <span>Idiomas</span>
                        <strong>Cambiar Idioma de Fiwii</strong>
                        <i class="fa fa-angle-right me-2"></i>
                    </a>
                    <div class="list-group list-custom-large">
                        <a href="#" data-menu="menu-tips-1" class="border-0">
                            <i class="fa font-14 fa-gift bg-magenta-light rounded-sm"></i>
                            <span>Información Fiwii</span>
                            <strong>Información sobre Fiwii</strong>
                            <i class="fa fa-angle-right me-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-style preload-img" data-src="images/pictures/20.jpg">
            <div class="card-body text-center">
                <h1 class="color-white pt-4">¿Algún Cambio?</h1>
                <p class="color-white mt-n2 mb-3 pb-1">Siempre estamos escuchando sus comentarios.</p>
                <p class="boxed-text-xl color-white opacity-80 pb-2">
                    ¿Te gusta Fiwii, pero quieres una característica específica? ¡Envíenos comentarios y sugerencias de funciones y lo consideraremos para futuras actualizaciones!
                </p>
                <a href="#" class="btn btn-m rounded-sm btn-border btn-center-l border-white color-white font-900 text-uppercase mb-4">Saber más</a>
            </div>
            <div class="card-overlay bg-highlight opacity-95"></div>
        </div>
    </div>
    <!-- end of page content-->
    <!--MENUS-->
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
         data-menu-active="nav-settings"
         data-menu-effect="menu-over">
    </div>

    <div id="menu-language" class="menu menu-box-bottom menu-box-detached rounded-m"
         data-menu-height="345"
         data-menu-effect="menu-over">
        <div class="me-3 ms-3 mt-3">
            <div class="float-start">
            <h3 class="font-700 mb-0 pt-1">Idiomas</h3>
            </div>
            <div class="float-end">
                <a href="#" class="close-menu"><i class="fa fa-times-circle color-red-dark pt-3 font-18"></i></a>
            </div>
                <div class="clearfix"></div>
            <div class="list-group list-custom-small">
                <a href="#"><img class="me-3 mt-n1" width="20" src="{{URL::asset('assets/images/flags/United-States.png')}}"><span>Inglés</span><i class="fa fa-angle-right"></i></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <!-- Tips Menu 1-->
    <div id="menu-tips-1"
         class="menu menu-box-bottom menu-box-detached rounded-m"
         data-menu-height="350"
         data-menu-effect="menu-over">

        <div class="card header-card shape-rounded" data-card-height="200">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="{{URL::asset('assets/images/pictures/20s.jpg')}}"></div>
        </div>

        <div class="mt-3 pt-1 pb-1" style="position:relative; z-index:22;">
            <h1 class="text-center">
                <i data-feather="smartphone"
                   data-feather-line="1"
                   data-feather-size="60"
                   data-feather-color="gray-dark"
                   data-feather-bg="none"></i>
            </h1>
            <h1 class="text-center color-white font-22 font-700">PWA Ready</h1>
            <p class="text-center mt-n3 mb-3 font-11 color-white">¡Simplemente agréguelo a su pantalla de inicio y disfrute!</p>
        </div>
        <div class="card card-style">
            <p class="boxed-text-xl pt-3 mb-3">
                Fiwoo es un sitio web móvil, ¡pero también es una PWA! Puede agregarlo a su pantalla de inicio y navegarlo
                 como si navegara por una aplicación.
            </p>
        </div>
        <div class="row mb-0">
            <div class="col-6">
                <a href="#" class="btn btn-border btn-sm ms-3 rounded-s btn-full shadow-l color-highlight border-highlight close-menu text-uppercase font-900">Cerrar</a>
            </div>
            <div class="col-6">
                <a data-menu="menu-tips-2" href="#" class="btn btn-sm me-3 rounded-s btn-full shadow-l bg-highlight font-900 text-uppercase">1/2 - Siguiente</a>
            </div>
        </div>
    </div>

    <!-- Tips Menu 2-->
    <div id="menu-tips-2"
         class="menu menu-box-bottom menu-box-detached rounded-m"
         data-menu-height="350"
         data-menu-effect="menu-over">

        <div class="card header-card shape-rounded" data-card-height="200">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="{{URL::asset('assets/images/pictures/20s.jpg')}}"></div>
        </div>

        <div class="mt-3 pt-1 pb-1" style="position:relative; z-index:22;">
            <h1 class="text-center">
                <i data-feather="moon"
                   data-feather-line="1"
                   data-feather-size="60"
                   data-feather-color="gray-dark"
                   data-feather-bg="none"></i>
            </h1>
            <h1 class="text-center color-white font-22 font-700">Mode Noche Automático</h1>
            <p class="text-center mt-n2 mb-3 font-11 color-white">Detector automatico de modo noche</p>
        </div>
        <div class="card card-style">
            <p class="boxed-text-xl pt-3 mb-3">
                Con los sistemas operativos modernos, podemos detectar si su dispositivo está en modo oscuro y configurar el tema automáticamente.
            </p>
        </div>
        <div class="row mb-0">
            <div class="col-6">
                <a href="#" class="btn btn-border btn-sm ms-3 rounded-s btn-full shadow-l color-highlight border-highlight close-menu text-uppercase font-900">Cerrar</a>
            </div>
            <div class="col-6">
                <a data-menu="menu-tips-3" href="#" class="btn btn-sm me-3 rounded-s btn-full shadow-l bg-highlight font-900 text-uppercase">2/2 - Siguiente</a>
            </div>
        </div>
    </div>
</div>
@endsection