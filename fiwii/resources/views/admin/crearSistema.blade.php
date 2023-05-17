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
                    <span class="logo-after-text">Crear Sistema</span>
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
        <h2 class="title black">
            <span class="text-1 text-dark text-style-5">Añade sistemas a tu </span>
            <span class="text-2 text-dark text-style-6 text-italic"><mark class="animated-underline accent">base de
                    datos</mark>.</span>
        </h2>
        <div id="medio" class="form-area scheme-1 secondary">
            <form action="{{ route('addSystem') }}" method="POST" enctype="multipart/form-data"{{-- class="form-fields needs-validation ajax-form" --}}>
                @csrf
                <fieldset>
                    <h3 class="title text-style-11 black">Nombre:</h3>
                    <input type="text" id="name" name="name" required>
                    <h3 class="title text-style-11 black">Ubicación:</h3>
                    <input type="text" id="ubicacion" name="ubicacion" required>
                    <h3 class="title text-style-11 black">Descripción:</h3>
                    <textarea id="description" name="description"></textarea>
                    <div class="form-row row mt-0">
                        <div class="form-col form-floating col-12 col-md-6">
                            <h3 class="title text-style-11 black">Status:</h3>
                            <select id="status" name="status">
                                <option value="Mantenimiento">Mantenimiento</option>
                                <option value="Revisado">Revisado</option>
                                <option value="Averiado">Averiado</option>
                            </select>
                        </div>

                        <div class="form-col form-floating col-12 col-md-6">
                            <h3 class="title text-style-11 black">Prioridad:</h3>
                            <select id="prioridad" name="prioridad">
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
    <form action="{{ route('addSystem') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nombre</label>
            <input type="text" name="sistemaNombre" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Ubicación</label>
            <input type="text" name="sistemaUbicacion" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="sistemaDesc" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
@endsection
