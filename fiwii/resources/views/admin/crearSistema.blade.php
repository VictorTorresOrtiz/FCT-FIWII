@extends('templates.template-admin')
@section('create')
    <header id="header" class="shock-header">
        <!-- Navbar -->
        <nav id="navbar" class="navbar navbar-expand-lg nfixed-scroll smart-scroll hover-line scheme-2 primary">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="/">
                    <img src="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
                        data-logo-alt="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
                        data-logo-mobile="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}" class="logo" />
                    <span class="logo-after-text">Añadir Sistema Contraincendios</span>
                </a>
                <!-- Responsive menu toggle -->
                <button class="navbar-toggler" data-bs-target="#navbar-items" data-bs-toggle="collapse"
                    aria-expanded="false">
                    <span class="navbar-toggler-icon">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </span>
                </button>
                <!-- Navbar links -->
                <div id="navbar-items" class="collapse navbar-collapse focus-trigger">
                    <!-- Link -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Action -->
                        <div class="navbar-action">
                            <div class="nav-item">
                                <a href="{{ url('/admin.app-dashboard') }}"
                                    class="button small-button rounded primary-15 accent-hover button-collision">
                                    <span class="button-text accent white-hover">Volver atrás</span>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </nav>
    </header>
    <main id="main" class="shock-main bg-color gray-10 p-2">
        <div id="medio" class="form-area scheme-1 secondary">
            <form action="{{ route('addSystem') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <h3 class="title text-style-11 black">Nombre:</h3>
                    <input type="text" id="name" name="sistemaNombre" value="{{old('sistemaNombre')}}" required>

                    <h3 class="title text-style-11 black">Ubicación:</h3>
                    <input type="text" id="ubicacion" name="sistemaUbicacion" value="{{old('sistemaUbicacion')}}" required>

                    <h3 class="title text-style-11 black">Descripción:</h3>
                    <input type="text" id="description" name="sistemaDesc" value="{{old('sistemaDesc')}}" required>

                    <div class="form-row row mt-0">
                        <div class="form-col form-floating col-12 col-md-6">
                            <h3 class="title text-style-11 black">Status:</h3>
                            <select id="status" name="sistemaStatus" value="{{old('sistemaStatus')}}" required>
                                <option value="Mantenimiento">Mantenimiento</option>
                                <option value="Revisado">Revisado</option>
                                <option value="Averiado">Averiado</option>
                            </select>
                        </div>

                        <div class="form-col form-floating col-12 col-md-6">
                            <h3 class="title text-style-11 black">Prioridad:</h3>
                            <select id="prioridad" name="sistemaPrioridad">
                                <option value="Alta">Alta</option>
                                <option value="Media">Media</option>
                                <option value="Baja">Baja</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
                    <a href="{{ url('/admin.crearSistema') }}"><button type="submit"
                            class="button outline rounded accent accent-hover">
                            <span class="button-text accent white-hover">Añadir</span>
                    </button></a>
            </form>
        </main>

@endsection
