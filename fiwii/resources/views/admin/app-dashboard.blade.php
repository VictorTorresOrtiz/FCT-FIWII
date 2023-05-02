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
                        {{-- <li class="nav-item dropdown has-megamenu hover">
                            <a class="nav-link dropdown-toggle has-icon" href="#" data-bs-toggle="dropdown">
                                <span class="text">Configuración</span><img class="image-icon dropdown-icon"
                                    src="assets/svg/chevron-down-outline.svg" alt="Icon name" data-shock-icon="32" />
                            </a>
                            <div class="dropdown-menu megamenu animate fade-down" role="menu">
                                <div class="container">
                                    <div class="section-inner-expanded">
                                        <div class="horizontal-tab scheme-1 primary">
                                            <!-- Tab navigation -->
                                            <ul id="elements-tab" class="nav nav-tabs js-tabs-event" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button id="elements-1-tab" class="title nav-link active"
                                                        aria-selected="true" aria-controls="elements-1"
                                                        data-bs-target="#elements-1" data-bs-toggle="tab"
                                                        role="tab">
                                                        Cuenta
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button id="elements-2-tab" class="title nav-link"
                                                        aria-selected="false" aria-controls="elements-2"
                                                        data-bs-target="#elements-2" data-bs-toggle="tab"
                                                        role="tab">
                                                        Fiwii App
                                                    </button>
                                                </li>
                                            </ul>
                                            <!-- Cuenta Content -->
                                            <div class="tab-content">
                                                <div id="elements-1" class="tab-pane fade show active"
                                                    role="tabpanel">
                                                    <div class="row g-3">
                                                        <div class="col-12 col-md-6 col-lg-2"></div>
                                                        <div class="col-12 col-md-6 col-lg-2"></div>
                                                        <div class="col-12 col-md-6 col-lg-2">
                                                            <div class="megamenu-item">
                                                                <ul class="nav-list list-unstyled">
                                                                    <li class="nav-item">
                                                                        <a href="#" class="nav-link parent">
                                                                            <span class="text">Actualizar Plan</span>
                                                                            <span
                                                                                class="badge ms-05 primary-15 primary-15-hover">
                                                                                <span
                                                                                    class="badge-text primary primary-hover">Ofertas</span>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-2">
                                                            <div class="megamenu-item">
                                                                <ul class="nav-list list-unstyled">
                                                                    <li class="nav-item">
                                                                        <a href="#" class="nav-link parent">
                                                                            <span class="text">Configuración</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-2"></div>
                                                        <div class="col-12 col-md-6 col-lg-2"></div>
                                                    </div>
                                                </div>
                                                <div id="elements-2" class="tab-pane fade" role="tabpanel">
                                                    <div class="row g-3">
                                                        <div class="col-12 col-md-6 col-lg-2"></div>
                                                        <div class="col-12 col-md-6 col-lg-2">
                                                            <ul class="nav-list list-unstyled">
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link parent">
                                                                        <span class="text">Gestor de Cuentas</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-2">
                                                            <div class="megamenu-item">
                                                                <ul class="nav-list list-unstyled">
                                                                    <li class="nav-item">
                                                                        <a href="#" class="nav-link parent">
                                                                            <span class="text">Añadir
                                                                                Administrador</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-2">
                                                            <div class="megamenu-item">
                                                                <ul class="nav-list list-unstyled">
                                                                    <li class="nav-item">
                                                                        <a href="#" class="nav-link parent">
                                                                            <span class="text">Añadir Técnico</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-2">
                                                            <ul class="nav-list list-unstyled">
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link parent">
                                                                        <span class="text">Añadir To-do list</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                        </li> --}}

                        <li class="nav-item dropdown has-megamenu hover">
                            <a class="nav-link dropdown-toggle has-icon" href="#" data-bs-toggle="dropdown">
                                <span class="text">Sistemas</span><img class="image-icon dropdown-icon"
                                    src="assets/svg/chevron-down-outline.svg" alt="Icon name" data-shock-icon="32" />
                            </a>
                            <div class="dropdown-menu megamenu animate fade-down" role="menu">
                                <div class="container">
                                    <div class="section-inner-expanded">
                                        <div class="row g-3">
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="megamenu-item">
                                                    <h6 class="title">Información</h6>
                                                    <ul class="nav-list list-unstyled">
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link parent">
                                                                <span class="text">Listado Sistemas</span>
                                                                <em class="tag hover-up-down">sistemas dados de
                                                                    alta</em>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="megamenu-item">
                                                    <h6 class="title">Descargar Bases de Datos</h6>
                                                    <ul class="nav-list list-unstyled">
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">
                                                                <span class="text">Sistemas</span>
                                                                <em class="tag hover-up-down">Base de Datos de
                                                                    Sistemas</em>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">
                                                                <span class="text">Usuarios</span>
                                                                <em class="tag hover-up-down">Base de Datos de
                                                                    Usuarios</em>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="megamenu-item">
                                                    <h6 class="title">Añadir Sistemas</h6>
                                                    <ul class="nav-list list-unstyled">
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">
                                                                <span class="text">Añadir un Sistema</span>
                                                                <em class="tag hover-up-down">Dar de alta un
                                                                    sistema</em>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">
                                                                <span class="text">Eliminar un Sistema</span>
                                                                <em class="tag hover-up-down">Elimina un sistema</em>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

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
                                Gestor de Cuentas
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" aria-selected="false" data-bs-toggle="modal"
                                data-bs-target="#modal-1">
                                Gestor de Sistemas
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" aria-selected="false" aria-controls="v-3" data-bs-target="#v-3"
                                data-bs-toggle="tab" role="tab">
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
                                            <img class="card-image-icon primary"
                                                src="{{ URL::asset('assets/custom-svg/addAdmin.svg') }}"
                                                alt="Icon name" data-shock-icon="32" />
                                            <h3 class="title text-style-11 black">Añadir Administrador</h3>
                                            <p class="description">Dar de alta una cuenta de Administrador Fiwii.</p>
                                            <!-- Button -->
                                            <div class="button-wrapper align-h-right">
                                                <span class="button simple">
                                                    <span class="button-text black black-hover"><mark
                                                            class="animated-underline accent when-hover">Read
                                                            More</mark></span>
                                                    <i
                                                        class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                                </span>
                                            </div>
                                            <!-- Link -->
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-admin"
                                                class="full-link"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card has-icon hover-up parent">
                                        <div class="card-body rounded-3 small-shadow bg-color white">
                                            <img class="card-image-icon primary"
                                                src="{{ URL::asset('assets/custom-svg/addUser.svg') }}"
                                                alt="Icon name" data-shock-icon="32" />
                                            <h3 class="title text-style-11 black">Añadir Usuario</h3>
                                            <p class="description">Dar de alta una cuenta para sus empleados.</p>
                                            <!-- Button -->
                                            <div class="button-wrapper align-h-right">
                                                <span class="button simple">
                                                    <span class="button-text black black-hover"><mark
                                                            class="animated-underline accent when-hover">Read
                                                            More</mark></span>
                                                    <i
                                                        class="fa-solid fa-arrow-right button-icon black black-hover"></i>
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
                                            <img class="card-image-icon primary"
                                                src="{{ URL::asset('assets/custom-svg/todoList.svg') }}"
                                                alt="Icon name" data-shock-icon="32" />
                                            <h3 class="title text-style-11 black">Lista de Tareas</h3>
                                            <p class="description">Asignar lista de tareas a sus empleados.</p>
                                            <!-- Button -->
                                            <div class="button-wrapper align-h-right">
                                                <span class="button simple">
                                                    <span class="button-text black black-hover"><mark
                                                            class="animated-underline accent when-hover">Read
                                                            More</mark></span>
                                                    <i
                                                        class="fa-solid fa-arrow-right button-icon black black-hover"></i>
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
                                            <img class="card-image-icon primary"
                                                src="{{ URL::asset('assets/custom-svg/deleteUser.svg') }}"
                                                alt="Icon name" data-shock-icon="32" />
                                            <h3 class="title text-style-11 black">Eliminar Cuentas</h3>
                                            <p class="description">Dar de baja cualquier cuenta asociada a su empresa
                                            </p>
                                            <!-- Button -->
                                            <div class="button-wrapper align-h-right">
                                                <span class="button simple">
                                                    <span class="button-text black black-hover"><mark
                                                            class="animated-underline accent when-hover">Read
                                                            More</mark></span>
                                                    <i
                                                        class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                                </span>
                                            </div>
                                            <!-- Link -->
                                            <a href="#your-link" class="full-link"></a>
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
                                            <h3 class="title text-style-11 black">Base de Datos Sistemas</h3>
                                            <p class="description">Descargar base de datos completa de todos los
                                                Sistemas</p>
                                            <!-- Button -->
                                            <div class="button-wrapper align-h-right">
                                                <span class="button simple">
                                                    <span class="button-text black black-hover"><mark class="animated-underline accent when-hover">Descargar</mark></span>
                                                    <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                                </span>
                                            </div>
                                            <!-- Link -->
                                            <a href="{{ route('descargar.base-de-datos') }}" class="full-link"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card has-icon hover-up parent">
                                        <div class="card-body rounded-3 small-shadow bg-color white">
                                            <img class="card-image-icon primary"
                                                src="{{ URL::asset('assets/custom-svg/downloadDB.svg') }}"
                                                alt="Icon name" data-shock-icon="32" />
                                            <h3 class="title text-style-11 black">Base de datos Usuarios</h3>
                                            <p class="description">Descargar base de datos completa de sus empleados.
                                            </p>
                                            <!-- Button -->
                                            <div class="button-wrapper align-h-right">
                                                <span class="button simple">
                                                    <span class="button-text black black-hover"><mark  class="animated-underline accent when-hover">Descargar</mark></span>
                                                    <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                                                </span>
                                            </div>
                                            <!-- Link -->
                                            <a href="#your-link" class="full-link"></a>
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

        <!-- Modal añadir admin -->
        <!-- Modal -->
        <div id="modal-admin" class="modal fade" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog max-w-50">
                <div class="modal-content shadow">
                    <div class="modal-header">
                        <i class="fa-solid fa-xmark close-button black secondary-hover" data-bs-dismiss="modal"
                            aria-label="Close"></i>
                        <!-- Intro -->
                        <div class="basic-intro">
                            <h2 class="title black">
                                <span class="text-1 text-style-7">Añadir cuenta Fiwii </span>
                                <span class="text-2 text-style-8 text-italic"><mark
                                        class="animated-underline accent">Admin</mark></span>
                            </h2>
                            <div class="description gray">
                                <p>Introduce los datos del nuevo Administrador</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <!-- Form -->
                        <div class="form-area scheme-1 secondary">
                            <form action="php/sender.php" class="form-fields needs-validation ajax-form"
                                novalidate="novalidate">
                                <div class="form-row row">
                                    <div class="form-col form-floating col-12 col-md-6">
                                        <input type="text" name="name" id="InputFloatingName"
                                            class="form-control" placeholder="Nombre" required="required">
                                        <label for="InputFloatingName" class="form-label">Nombre</label>
                                        <div class="invalid-feedback">Please enter your name.</div>
                                        <div class="valid-feedback">Looks good.</div>
                                    </div>
                                    <div class="form-col form-floating col-12 col-md-6">
                                        <input type="email" name="email" id="InputFloatingEmail"
                                            class="form-control" placeholder="name@example.com" required="required">
                                        <label for="InputFloatingEmail" class="form-label">Email</label>
                                        <div class="invalid-feedback">Please enter a valid email address.</div>
                                        <div class="valid-feedback">Looks good.</div>
                                    </div>
                                </div>
                                <div class="form-row row">
                                    <div class="form-col form-floating col-12">
                                        <textarea type="password" name="password" id="InputFloatingName" class="form-control form-textarea" rows="3"
                                            placeholder="Contraseña" required="required"></textarea>
                                        <label for="InputFloatingMessage" class="form-label">Contraseña</label>
                                        <div class="invalid-feedback">Please enter a valid password.</div>
                                        <div class="valid-feedback">Looks good.</div>
                                    </div>
                                </div>
                                <div class="form-row row">
                                    <div class="form-col col-12 col-md-8">
                                        <div class="form-check">
                                            <input type="radio" name="info" id="InputRadioChecked"
                                                class="form-check-input form-radio" checked="checked"
                                                required="required">
                                            <label class="form-label form-check-label" for="InputRadioChecked">
                                                Default Admin Account.
                                            </label>
                                        </div>
                                        <div class="form-check">

                                        </div>
                                    </div>
                                    <div class="form-col col-12 col-md-4 align-h-right">
                                        <!-- Button -->
                                        <button class="button arrow-button next scheme-1 secondary">
                                            <span class="arrow">
                                                <span class="item"></span>
                                                <span class="item"></span>
                                            </span>
                                            <span class="line"></span>
                                            <span class="text">Crear Cuenta</span>
                                        </button>
                                    </div>
                                </div>
                                <input type="hidden" name="subject" value="Message sent through the contact form.">
                                <span class="form-alert success">Your account was create successful. Thanks.</span>
                                <span class="form-alert error">Sorry. We were unable to send create your
                                    account.</span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Gestor de sistemas -->
        <div id="modal-1" class="modal fade" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog max-w-50">
                <div class="modal-content shadow rounded-3">
                    <div class="modal-header pb-0">
                        <i class="fa-solid fa-xmark close-button black primary-hover" data-bs-dismiss="modal"
                            aria-label="Close"></i>
                        <!-- Intro -->
                        <div class="basic-intro">
                            <h2 class="title text-style-7 black">Lista de Sistemas</h2>
                            <hr class="gray-25">
                        </div>
                    </div>
                    <div class="modal-body pt-0 pb-0">
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table scheme-1">
                                <thead>
                                    <tr>
                                        <th scope="col" class="black">ID</th>
                                        <th scope="col" class="black">Nombre</th>
                                        <th scope="col" class="black">Descripción</th>
                                        <th scope="col" class="black">Ubicación</th>
                                        <th scope="col" class="black">Visualizar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($systems as $system)
                                        <tr>
                                            <th scope="row" class="black">{{ $system->id }}</th>
                                            <td>{{ $system->name }}</td>
                                            <td>{{ $system->description }}</td>
                                            <td>{{ $system->ubicacion }}</td>
                                            <td><a href="#" class="btn btn-success btn-sm"> <i
                                                        class="bi bi-eye"></i> </a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <div class="button-wrapper">
                                <!-- Button -->
                                <button class="button shadow rounded-3 black primary-hover" data-bs-dismiss="modal">
                                    <span class="button-text white white-hover">Cerrar</span>
                                    <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
