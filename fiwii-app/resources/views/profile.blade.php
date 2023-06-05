@extends('templates.template-app')
@section('profile')
    <div id="footer-bar" class="footer-bar-5">
        <a href="{{ url('profile') }}" class="active-nav"><i class="bi bi-person"></i><span>Perfil</span></a>
        <a href="{{ url('sistemas') }}"><i class="bi bi-list-nested"></i></i><span>Sistemas</span></a>
        <a href="{{ url('fiwii') }}" class="active-nav"><i class="bi bi-house"></i><span>Home</span></a>
        <a href="{{ url('qrLector') }}"><i class="bi bi-upc-scan"></i><span>QR</span></a>
        <a href="{{ url('conf') }}"><i class="bi bi-gear"></i><span>Configuración</span></a>
    </div>
    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Perfil</h2>
        <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img"
            data-src="{{ URL::asset('assets/images/avatars/5s.png') }}"></a>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ URL::asset('images/pictures/20s.jpg') }} "></div>
    </div>

    <div class="card card-style">
        <div class="content mb-0">
            <h3 class="font-600">Información</h3>
            <p>
                Datos básicos sobre ti. Colócalos aquí.
            </p>
            <form method="POST" action="{{ route('user-profile-information.update') }}">
                @csrf
                @method('PUT')

                <div class="input-style has-borders hnoas-icon input-style-always-active validate-field mb-4">
                    <input type="text" class="form-control validate-name" name="name"
                        placeholder="{{ Auth::user()->name }}" value="{{ Auth::user()->name }}">
                    <label for="form1" class="color-highlight font-400 font-13">Nombre</label>
                </div>

                <div class="input-style has-borders no-icon input-style-always-active validate-field mb-4">
                    <input type="text" class="form-control validate-tel" id="form3" placeholder="{{ Auth::user()->username }}" name="username" value="{{ Auth::user()->username }}">
                    <label for="form3" class="color-highlight font-400 font-13">Nombre de usuario</label>
                </div>

                <div class="input-style has-borders no-icon input-style-always-active validate-field mb-4">
                    <input type="email" class="form-control validate-email" id="form2"
                        placeholder="{{ Auth::user()->email }}" name="email" value="{{ Auth::user()->email }}">
                    <label for="form2" class="color-highlight font-400 font-13">Email</label>
                </div>

                <label for="form1" class="color-highlight font-400 font-13">Para cambiar la contraseña contacta con uno de tus administradores</label> <br> <br>
            </div>
            <button  type="submit"
                class="btn btn-full btn-margins bg-highlight rounded-sm shadow-xl btn-m text-uppercase font-900">Editar
                Perfil</button>
            </form>

    </div>



    <div class="card card-style">
        <div class="content mb-2">
            <h3 class="font-600">Configuración de la Cuenta</h3>
            <p>
                Configuración Basica de la Cuenta.
            </p>

            <div class="list-group list-custom-small">
                <a href="{{ url('#') }}" data-trigger-switch="switch-1">
                    <span>Notificaciones</span>
                    <div class="custom-control scale-switch ios-switch">
                        <input type="checkbox" class="ios-input" id="switch-1" checked>
                        <label class="custom-control-label" for="switch-1"></label>
                    </div>
                    <i class="fa fa-arrow-right"></i>
                </a>
                <a href="#" data-toggle-theme data-trigger-switch="toggle-dark12" class="border-0">
                    <span>Modo oscuro</span>
                    <div class="ms-auto me-4 pe-2">
                        <div class="custom-control ios-switch scale-switch">
                            <input data-toast="switched-color-scheme" data-toggle-theme type="checkbox" class="ios-input"
                                id="toggle-dark12">
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
    <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260"
        data-menu-load="{{ url('misc.menu') }}" data-menu-active="nav-pages" data-menu-effect="menu-over">
    </div>
    </div>
@endsection
