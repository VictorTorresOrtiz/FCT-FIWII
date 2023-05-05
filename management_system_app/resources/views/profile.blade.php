@extends('templates.template-app')
@section('profile')

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
            <div class="input-style has-borders hnoas-icon input-style-always-active validate-field mb-4">
                <input type="name" class="form-control validate-name" id="form1"
                    placeholder="{{ Auth::user()->name }}" readonly>
                <label for="form1" class="color-highlight font-400 font-13">Nombre Actual</label>
            </div>

            <div class="input-style has-borders no-icon input-style-always-active validate-field mb-4">
                <input type="email" class="form-control validate-email" id="form2"
                    placeholder="{{ Auth::user()->email }}" readonly>
                <label for="form2" class="color-highlight font-400 font-13">Email Actual</label>
            </div>

            <div class="input-style has-borders no-icon input-style-always-active validate-field mb-4">
                <input type="tel" class="form-control validate-tel" id="form3" placeholder="Numero actual" readonly>
                <label for="form3" class="color-highlight font-400 font-13">Teléfono Actual</label>
            </div>

            <div class="input-style has-borders no-icon input-style-always-active validate-field mb-4">
                <input type="password" class="form-control validate-passord" id="form4" placeholder="******" readonly>
                <label for="form4" class="color-highlight font-400 font-13">Contraseña Actual</label>
            </div>
        </div>
        <a href="#profile-modal" data-bs-toggle="modal" type="submit"
            class="btn btn-full btn-margins bg-highlight rounded-sm shadow-xl btn-m text-uppercase font-900">Editar
            Perfil</a>
    </div>


    <!--  Edit profile modal -->
    <div class="modal fade" id="profile-modal" tabindex="-1">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content overflow-hidden border-0">
                <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-0">
                    <div class="row align-items-stretch">
                        <div class="p-4 my-md-4">
                            <form action="{{ route('edit-profile') }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div
                                    class="input-style has-borders hnoas-icon input-style-always-active validate-field mb-4">
                                    <input type="name" class="form-control validate-name" id="form1" name="name"
                                        placeholder="{{ Auth::user()->name }}">
                                    <label for="form1" class="color-highlight font-400 font-13">Nombre</label>
                                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                                    <i class="fa fa-check disabled valid color-green-dark"></i>
                                    <em>(required)</em>
                                </div>

                                <div class="input-style has-borders no-icon input-style-always-active validate-field mb-4">
                                    <input type="email" class="form-control validate-email" id="form2" name="email"
                                        placeholder="{{ Auth::user()->email }}">
                                    <label for="form2" class="color-highlight font-400 font-13">Email</label>
                                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                                    <i class="fa fa-check disabled valid color-green-dark"></i>
                                    <em>(required)</em>
                                </div>

                                <div class="input-style has-borders no-icon input-style-always-active validate-field mb-4">
                                    <input type="tel" class="form-control validate-tel" id="form3"
                                        placeholder="Numero actual">
                                    <label for="form3" class="color-highlight font-400 font-13">Numero de
                                        Teléfono</label>
                                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                                    <i class="fa fa-check disabled valid color-green-dark"></i>
                                    <em>(required)</em>
                                </div>

                                <div class="input-style has-borders no-icon input-style-always-active validate-field mb-4">
                                    <input type="password" class="form-control validate-passord" id="form4"
                                        placeholder="******">
                                    <label for="form4" class="color-highlight font-400 font-13">Contraseña</label>
                                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                                    <i class="fa fa-check disabled valid color-green-dark"></i>
                                    <em>(required)</em>
                                </div>
                                <div class="col-lg-12">
                                    <input
                                        class="btn btn-full btn-margins bg-highlight rounded-sm shadow-xl btn-m text-uppercase font-900"
                                        type="submit" name="Guardar cambios">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-style">
        <div class="content mb-2">
            <h3 class="font-600">Configuración de la Cuenta</h3>
            <p>
                Configuración Basica de la Cuenta.
            </p>

            <div class="list-group list-custom-small">
                <a href="#" data-trigger-switch="switch-1">
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
