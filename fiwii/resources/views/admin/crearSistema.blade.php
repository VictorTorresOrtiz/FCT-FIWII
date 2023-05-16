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
    <main id="main" class="shock-main bg-color gray-10 p-4">
        <h2 class="title black">
            <span class="text-1 text-dark text-style-5">Añade sistemas a tu </span>
            <span class="text-2 text-dark text-style-6 text-italic"><mark class="animated-underline accent">base de datos</mark>.</span>
        </h2>
        <div class="form-area scheme-1 secondary">
            <form action="{{ route('addSystem') }}" method="POST" enctype="multipart/form-data" class="form-fields needs-validation ajax-form">
                @csrf
                <div class="form-row row">
                    <div class="form-col form-floating col-12 col-md-6">
                        <input type="text" name="" id="InputFloatingName" class="form-control" placeholder="Nombre" required="required">
                        <label for="InputFloatingName" class="form-label">Nombre</label>
                    </div>
                </div>
                <div class="form-row row">
                    <div class="form-col form-floating col-12 col-md-6">
                        <textarea type="text" class="form-control" id="inputPassword4" placeholder="Descripción" required></textarea>
                        <label for="InputFloatingName" class="form-label">Descripción</label>
                    </div>
                </div>
                <div class="form-row row">
                    <div class="form-col form-floating col-12 col-md-6">
                        <input type="text" name="" id="InputFloatingName" class="form-control" placeholder="Ubicación" required>
                        <label for="InputFloatingName" class="form-label">Ubicación</label>
                    </div>
                </div>
                <div class="form-row row">
                    <div class="col-md-2">
                        <label for="inputState" class="form-label">Estado</label>
                        <select id="inputState" class="form-select">
                            <option selected>Mantenimiento</option>
                            <option>Revisado</option>
                            <option>Averiado</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputState" class="form-label">Prioridad</label>
                        <select id="inputState" class="form-select">
                            <option selected>Alta</option>
                            <option>Media</option>
                            <option>Baja</option>
                        </select>
                    </div>
                </div>
                    <div class="col-12">
                        <a href="{{ url('/admin.crearSistema') }}"><button type="submit" class="button mt-3 outline rounded accent accent-hover">
                            <span class="button-text accent white-hover">Añadir</span>
                        </button></a>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
