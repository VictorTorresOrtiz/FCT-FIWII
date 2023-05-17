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
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-admin" class="full-link"></a>
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
                                            <img class="card-image-icon primary"  src="{{ URL::asset('assets/custom-svg/todoList.svg') }}"  alt="Icon name" data-shock-icon="32" />
                                            <h3 class="title text-style-11 black">Lista de Tareas</h3>
                                            <p class="description">Asignar lista de tareas a sus empleados.</p>
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

        <!-- Modal añadir usuario -->
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
                                <span class="text-1 text-style-7">Gestor de cuentas </span>
                                <span class="text-2 text-style-8 text-italic"><mark class="animated-underline accent">Fiwii</mark></span>
                            </h2>
                            <div class="description gray">
                                <p>Introduce los datos del nuevo Usuario</p>
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
                                        <input type="text" name="nombre-crear" id="InputFloatingName" class="form-control" placeholder="Nombre" required="required">
                                        <label for="InputFloatingName" class="form-label">Nombre</label>
                                        <div class="invalid-feedback">Please enter your name.</div>
                                        <div class="valid-feedback">Looks good.</div>
                                    </div>
                                    <div class="form-col form-floating col-12 col-md-6">
                                        <input type="text" name="nombre-crear" id="InputFloatingUserName" class="form-control" placeholder="Nombre" required="required">
                                        <label for="InputFloatingUserName" class="form-label">Nombre de usuario</label>
                                        <div class="invalid-feedback">Please enter your username.</div>
                                        <div class="valid-feedback">Looks good.</div>
                                    </div>
                                    <div class="form-col form-floating col-12 col-md-6">
                                        <input type="email" name="email-crear" id="InputFloatingEmail" class="form-control" rows="3" placeholder="name@example.com" required="required">
                                        <label for="InputFloatingEmail" class="form-label">Email</label>
                                        <div class="invalid-feedback">Please enter a valid email address.</div>
                                        <div class="valid-feedback">Looks good.</div>
                                    </div>
                                </div>
                                <div class="form-row row">
                                    <div class="form-col form-floating col-12">
                                        <input type="password" name="password-crear" id="InputFloatingName" class="form-control" rows="3" placeholder="Contraseña" required="required">
                                        <label for="InputFloatingMessage" class="form-label">Contraseña</label>
                                        <div class="invalid-feedback">Please enter a valid password.</div>
                                        <div class="valid-feedback">Looks good.</div>
                                    </div>
                                </div>
                                <div class="form-row row">
                                    <div class="form-check">
                                        <input type="radio" name="info" id="InputRadioChecked" class="form-check-input form-radio" checked="checked">
                                        <label class="form-label form-check-label" for="InputRadioChecked">
                                             Cuenta Empleados.
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input type="radio" name="info" id="InputRadioChecked" class="form-check-input form-radio">
                                        <label class="form-label form-check-label" for="InputRadioChecked">
                                            Cuenta Administrador.
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input type="radio" name="info" id="InputRadioChecked" class="form-check-input form-radio">
                                        <label class="form-label form-check-label" for="InputRadioChecked">
                                            Cuenta Trial.
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
                                <span class="form-alert error">Sorry. We were unable to send create your account.</span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Modal de eliminación de usuario -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUserModalLabel">Eliminar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Introduce los datos del usuario que desea eliminar</p>
                <strong>ID:</strong><input class="form-control" placeholder="ID Usuario" required="required" id="IdUser">
                <strong>Email:</strong><input class="form-control" placeholder="Email Usuario" required="required" id="EmailUser">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Eliminar</button>

            </div>
        </div>
    </div>
</div>

         <!-- Modal Visualizacion sistemas -->
        <div id="modal-añadir-sistemas" class="modal fade" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog max-w-50">
                <div class="modal-content shadow">
                    <div class="modal-header">
                        <i class="fa-solid fa-xmark close-button black secondary-hover" data-bs-dismiss="modal"
                            aria-label="Close"></i>
                        <!-- Intro -->
                        <div class="basic-intro">
                            <h2 class="title black">
                                <span class="text-1 text-style-7">Gestor de sistemas </span>
                                <span class="text-2 text-style-8 text-italic"><mark
                                        class="animated-underline accent">Fiwii</mark></span>
                            </h2>
                            <div class="description gray">
                                <p>Introduce los datos del nuevo sistema</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <!-- Form -->
                        <div class="form-area scheme-1 secondary">
                            <form action="{{ route('addSystem') }}" method="POST" enctype="multipart/form-data" class="form-fields needs-validation ajax-form" novalidate="novalidate">
                                @csrf
                                <div class="form-row row">
                                    <div class="form-col form-floating col-12 col-md-6">
                                        <input type="text" name="sistemaNombre" id="InputFloatingName" class="form-control" placeholder="Nombre" required="required">
                                        <label for="InputFloatingName" class="form-label">Nombre</label>
                                        <div class="invalid-feedback">Please enter your name.</div>
                                        <div class="valid-feedback">Looks good.</div>
                                    </div>
                                    <div class="form-col form-floating col-12 col-md-6">
                                        <input type="text" name="sistemaUbicacion" id="InputFloatingEmail" class="form-control" placeholder="Ubicación" required="required">
                                        <label for="InputFloatingEmail" class="form-label">Ubicación</label>
                                        <div class="invalid-feedback">Please enter a valid ubication.</div>
                                        <div class="valid-feedback">Looks good.</div>
                                    </div>
                                </div>
                                <div class="form-row row">
                                    <div class="form-col form-floating col-12">
                                        <textarea type="text" name="sistemaDesc" id="InputFloatingName" class="form-control form-textarea" rows="3" placeholder="Descripción" required="required"></textarea>
                                        <label for="InputFloatingMessage" class="form-label">Descripción</label>
                                        <div class="invalid-feedback">Please enter a valid description.</div>
                                        <div class="valid-feedback">Looks good.</div>
                                    </div>
                                </div>
                                <div class="form-row row">
                                    <div class="form-col col-12 col-md-8">
                                        <div class="form-check">
                                            <input type="radio" name="check-averiado" id="InputRadioChecked" class="form-check-input form-radio" checked="checked">
                                            <label class="form-label form-check-label" for="InputRadioChecked">
                                                 Averiado.
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" name="check-mantenimiento" id="InputRadioChecked" class="form-check-input form-radio">
                                            <label class="form-label form-check-label" for="InputRadioChecked">
                                                Mantenimiento.
                                            </label>
                                        </div>

                                        <div class="form-check"></div>
                                    </div>
                                    <div class="form-col col-12 col-md-4 align-h-right">
                                        <!-- Button -->
                                        <button class="button arrow-button next scheme-1 secondary" type="submit">
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
                                <span class="form-alert error">Sorry. We were unable to send create your account.</span>
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
                                        <th scope="col" class="black">Status</th>
                                        <th scope="col" class="black">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($systems as $system)
                                        <tr>
                                            <th scope="row" class="black">{{ $system->id }}</th>
                                            <td>{{ $system->name }}</td>
                                            <td>{{ $system->description }}</td>
                                            <td>{{ $system->ubicacion }}</td>
                                            <td>
                                                @if ($system->status == 'Mantenimiento')
                                                <a href="#" class="btn btn-warning btn-sm">Mantenimiento</a>
                                                @elseif ($system->status == 'Revisado')
                                                <a href="#" class="btn btn-success btn-sm ">Revisado</a>
                                                @elseif ($system->status == 'Averiado')
                                                <a href="#" class="btn btn-danger btn-sm">Averiado</a>
                                                @endif
                                            </td>
                                            <form action="{{ route('sistema_eliminar', $system->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este sistema?')">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{ $system->id }}">
                                                <td ><button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></button></td>
                                            </form>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <div class="button-wrapper">
                                <!-- Button -->
                                <button class="button shadow rounded-3 black accent-hover" data-bs-dismiss="modal">
                                    <span class="button-text accent white-hover">Cerrar</span>
                                    <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
