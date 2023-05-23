@extends('templates.template-admin')
@section('app-dashboard')
<!-- Header -->
    <header id="header" class="shock-header">
        <!-- Navbar -->
        <nav id="navbar" class="navbar navbar-expand-lg nfixed-scroll smart-scroll hover-line scheme-2 primary">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="/">
                    <img src="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
                        data-logo-alt="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
                        data-logo-mobile="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
                        class="logo" />
                    <span class="logo-after-text">Dashboard</span>
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
                        <ul class="navbar-nav navbar-icons">
                            <!-- Search icon -->
                            <li class="search-bar nav-item d-only-desktop">
                                <a href="#shock-search-bar" class="nav-link" rel="nofollow"
                                    data-bs-toggle="offcanvas" data-bs-target="#shock-search-bar"
                                    aria-controls="shock-search-bar">
                                    <i class="fa-solid fa-user icon"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- Action -->
                        <div class="navbar-action">
                            <div class="nav-item">
                                <a href="{{ url('/admin.dashboard') }}"
                                    class="button small-button rounded primary-15 accent-hover button-collision">
                                    <span class="button-text accent white-hover">Volver al inicio </span>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main -->
    <main id="main" class="shock-main bg-color gray-10">
        <!-- Vertical tab -->
        <section class="shock-section pt-5">
            <div class="container max-w-85">
                <div class="vertical-tab scheme-1 primary">
                    <!-- Tab navigation -->
                    <ul id="v-tab" class="nav nav-pills" role="tablist" aria-orientation="vertical"
                        data-sticky="30">
                        <li class="nav-item" role="presentation">
                            <button id="v-1-tab" class="nav-link active" aria-selected="true" aria-controls="v-1"
                                data-bs-target="#v-1" data-bs-toggle="tab" role="tab">
                                Dashboard
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" aria-selected="false" data-bs-toggle="modal" data-bs-target="#modal-1">
                                Gestor de Sistemas
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" aria-selected="false" aria-controls="v-3" data-bs-target="#v-3" data-bs-toggle="tab" role="tab">
                                Bases de Datos
                            </button>
                        </li>
                    </ul>
                    <!-- Gestor de Cuentas -->
                    <div class="tab-content pt-0">
                        <div id="v-1" class="tab-pane fade show active" role="tabpanel">
                            <!-- Services -->
                            <div class="row g-2">
                                <div class="col-12 col-md-6">
                                    <div class="card has-icon hover-up parent">
                                        <div class="card-body rounded-3 small-shadow bg-color white">
                                            <img class="card-image-icon primary" src="{{ URL::asset('assets/custom-svg/addUser.svg') }}"  alt="Icon name" data-shock-icon="32" />
                                            <h3 class="title text-style-11 black">Añadir Usuarios</h3>
                                            <p class="description">Dar de alta una cuenta de Administrador Fiwii.</p>
                                            <!-- Button -->
                                            <div class="button-wrapper align-h-right">
                                                <span class="button simple">
                                                    <span class="button-text black black-hover"><mark class="animated-underline accent when-hover">Crear</mark></span>
                                                    <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                                </span>
                                            </div>
                                            <!-- Link -->
                                            <a href="{{url('/admin.crearUsuario')}}"  class="full-link"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card has-icon hover-up parent">
                                        <div class="card-body rounded-3 small-shadow bg-color white">
                                            <img class="card-image-icon primary" src="{{ URL::asset('assets/custom-svg/deleteUser.svg') }}" alt="Icon name" data-shock-icon="32" />
                                            <h3 class="title text-style-11 black">Eliminar usuario</h3>
                                            <p class="description">Dar de baja cuentas Fiwii.</p>
                                            <!-- Button -->
                                            <div class="button-wrapper align-h-right">
                                                <span class="button simple">
                                                    <span class="button-text black black-hover"><mark class="animated-underline accent when-hover">Eliminar</mark></span>
                                                    <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                                </span>
                                            </div>
                                            <!-- Link -->
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#deleteUserModal" class="full-link"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card has-icon hover-up parent">
                                        <div class="card-body rounded-3 small-shadow bg-color white">
                                            <img class="card-image-icon primary"  src="{{ URL::asset('assets/custom-svg/camera.svg') }}"  alt="Icon name" data-shock-icon="32" />
                                            <h3 class="title text-style-11 black">Sistemas de Vigilancía</h3>
                                            <p class="description">Añade un sistema de vigilancia.</p>
                                            <!-- Button -->
                                            <div class="button-wrapper align-h-right">
                                                <span class="button simple">
                                                    <span class="button-text black black-hover"><mark
                                                            class="animated-underline accent when-hover">Read
                                                            More</mark></span>
                                                    <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                                </span>
                                            </div>
                                            <!-- Link -->
                                            <a href="#your-link" class="full-link"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card has-icon hover-up parent">
                                        <div class="card-body rounded-3 small-shadow bg-color white">
                                            <img class="card-image-icon primary" src="{{ URL::asset('assets/custom-svg/sistema.svg') }}" alt="Icon name" data-shock-icon="32" />
                                            <h3 class="title text-style-11 black">Crear Sistema</h3>
                                            <p class="description">Dar de alta un sistema </p>
                                            <!-- Button -->
                                            <div class="button-wrapper align-h-right">
                                                <span class="button simple">
                                                    <span class="button-text black black-hover"><mark class="animated-underline accent when-hover">Crear</mark></span>
                                                    <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                                </span>
                                            </div>
                                            <!-- Link -->
                                            <a href="{{url('admin.crearSistema')}}" class="full-link"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="v-3" class="tab-pane fade" role="tabpanel">
                            <!-- Bases de datos -->
                            <div class="row g-2">
                                <div class="col-12 col-md-6">
                                    <div class="card has-icon hover-up parent">
                                        <div class="card-body rounded-3 small-shadow bg-color white">
                                            <img class="card-image-icon primary" src="{{ URL::asset('assets/custom-svg/downloadDB.svg') }}" alt="Icon name" data-shock-icon="32" />
                                            <h3 class="title text-style-11 black">Base de Datos Usuarios</h3>
                                            <p class="description">Descargar base de datos completa de todos los Sistemas</p>
                                            <!-- Button -->
                                            <div class="button-wrapper align-h-right">
                                                <span class="button simple">
                                                    <span class="button-text black black-hover"><mark class="animated-underline accent when-hover">Descargar</mark></span>
                                                    <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                                </span>
                                            </div>
                                            <!-- Link -->
                                            <a href="{{ route('download.database') }}" class="full-link"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card has-icon hover-up parent">
                                        <div class="card-body rounded-3 small-shadow bg-color white">
                                            <img class="card-image-icon primary"
                                                src="{{ URL::asset('assets/custom-svg/downloadDB.svg') }}"
                                                alt="Icon name" data-shock-icon="32" />
                                            <h3 class="title text-style-11 black">Base de datos Completa</h3>
                                            <p class="description">Descargar base de datos completa de su empresa.
                                            </p>
                                            <!-- Button -->
                                            <div class="button-wrapper align-h-right">
                                                <span class="button simple">
                                                    <span class="button-text black black-hover"><mark  class="animated-underline accent when-hover">Descargar</mark></span>
                                                    <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                                </span>
                                            </div>
                                            <!-- Link -->
                                            <a href="{{ route('download.database2') }}" class="full-link"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Progress bar circle -->
        <section class="shock-section pt-5 pb-3" data-aos="fade-up" data-aos-delay="400">
            <div class="container">
                <div class="row g-5">
                    <div class="col-6 col-lg-3">
                        <div class="radial-progress-bar accent">
                            <div class="item">
                                <h3 class="title text-style-11 black">Fiwii-App Server Status</h3>
                                <div class="counter" data-value="100" data-symbol="%" data-duration="2500"
                                    data-bar-stroke="4" data-bar-stroke-empty="1"
                                    data-bar-color="var(--accent-color)" data-empty-bar-color="var(--black-25-color)"
                                    data-text-bg-color="var(--black-color)" data-text-color="var(--white-color)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="radial-progress-bar">
                            <div class="item">
                                <h3 class="title text-style-11 black">Fiwii-Web Server Status</h3>
                                <div class="counter" data-value="99" data-symbol="%" data-duration="2500"
                                    data-bar-stroke="4" data-bar-stroke-empty="1"
                                    data-bar-color="var(--accent-color)" data-empty-bar-color="var(--black-25-color)"
                                    data-text-bg-color="var(--black-color)" data-text-color="var(--white-color)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="radial-progress-bar">
                            <div class="item">
                                <h3 class="title text-style-11 black">Laravel Server Status</h3>
                                <div class="counter" data-value="79" data-symbol="%" data-duration="2500"
                                    data-bar-stroke="4" data-bar-stroke-empty="1"
                                    data-bar-color="var(--accent-color)" data-empty-bar-color="var(--black-25-color)"
                                    data-text-bg-color="var(--black-color)" data-text-color="var(--white-color)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="radial-progress-bar">
                            <div class="item">
                                <h3 class="title text-style-11 black">DBB Server Status</h3>
                                <div class="counter" data-value="95" data-symbol="%" data-duration="2500"
                                    data-bar-stroke="4" data-bar-stroke-empty="1"
                                    data-bar-color="var(--accent-color)" data-empty-bar-color="var(--black-25-color)"
                                    data-text-bg-color="var(--black-color)" data-text-color="var(--white-color)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- Modal de eliminación de usuario -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUserModalLabel">Eliminar Usuario</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('eliminar_user') }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <h3>Introduce los datos del usuario que desea eliminar</h3>
                    <strong>ID:</strong><input class="form-control mb-2" placeholder="ID Usuario" required="required" id="userId" name="userId">
                    <div class="modal-footer"></div>
                    <button type="submit" onclick="return confirm('¿Estás seguro de eliminar al usuario?')"
                     class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
