@extends('templates.template')
@section('to-do')
<!-- Header y Footer-->
<div class="header header-fixed header-auto-show header-logo-app">
    <a href="index.html" class="header-title">Menu</a>
    <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i
            class="fas fa-moon"></i></a>
    <a href="{{ url('conf') }}" class="header-icon header-icon-3"><i class="fa-solid fa-gear fa-spin"></i></a>
</div>
<div id="footer-bar" class="footer-bar-5">
    <a href="{{ url('profile') }}"><i class="bi bi-person"></i><span>Perfil</span></a>
    <a href="{{ url('to-do') }}" class="active-nav"><i class="bi bi-list-nested"></i></i><span>Trabajo</span></a>
    <a href="{{ url('fiwii') }}"><i class="bi bi-house"></i><span>Home</span></a>
    <a href="#"><i class="bi bi-upc-scan"></i><span>QR</span></a>
    <a href="{{ url('conf') }}"><i class="bi bi-gear"></i><span>Configuración</span></a>
</div>


<div class="page-content">

    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Trabajos Hoy</h2>
        <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img"
            data-src="{{ URL::asset('assets/images/avatars/5s.png') }}"></a>
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
                    <i class="fa fa-cog rounded-xl bg-fade-magenta-dark color-magenta-dark font-12"></i>
                    <span>Ejemplo</span>
                    <strong>Desc Ejemplo</strong>
                    <div class="form-check icon-check">
                        <input class="form-check-input" type="checkbox" value="" id="check134">
                        <label class="form-check-label disabled" for="check134">Checkbox 1</label>
                        <i class="icon-check-1 far fa-square color-gray-dark font-16"></i>
                        <i class="icon-check-2 far fa-check-square font-16 color-highlight"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- end of page content-->

<!-- Menus-->
<div id="menu-share" class="menu menu-box-bottom menu-box-detached rounded-m"
    data-menu-load="{{ url('misc.menu-share') }}" data-menu-height="420" data-menu-effect="menu-over">
</div>