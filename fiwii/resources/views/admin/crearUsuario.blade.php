@extends('templates.template-admin')
@section('crearUsuario')

    <header id="header" class="shock-header">
        <!-- Navbar -->
        <nav id="navbar" class="navbar navbar-expand-lg nfixed-scroll smart-scroll hover-line scheme-2 primary">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
                        data-logo-alt="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
                        data-logo-mobile="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}" class="logo" />
                    <span class="logo-after-text">Añadir Usuario</span>
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
            <form method="POST" action="{{ route('addUser') }}">
                @csrf
                    <h3 class="title text-style-11 black">Nombre Completo:</h3>
                    <input id="name" type="text" placeholder="Nombre" class="@error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    <h3 class="title text-style-11 black">Nombre Usuario:</h3>
                    <input id="username" type="text" placeholder="Nombre de usuario" class="@error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"
                    required autocomplete="username" autofocus>

                    <h3 class="title text-style-11 black">Email:</h3>
                    <input id="email" type="email" placeholder="Email"
                    class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                    autocomplete="email">

                    <h3 class="title text-style-11 black">Contraseña:</h3>
                    <input id="password" type="password" placeholder="Contraseña" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    <h3 class="title text-style-11 black">Confirmar contraseña:</h3>
                    <input id="password-confirm" type="password" placeholder="Confirmar contraseña" class="@error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                    <div class="form-row row mt-0">
                        <div class="form-col form-floating col-12 col-md-6">
                            <h3 class="title text-style-11 black">Permisos:</h3>
                            <select id="status" name="status" value="{{old('status')}}" required>
                                <option value="User">Técnico</option>
                                <option value="Admin">Administrador</option>
                                <option value="Moderator">Encargado</option>
                            </select>
                        </div>
                    </div>
                <button type="submit"
                            class="button outline rounded accent accent-hover">
                            <span class="button-text accent white-hover">Añadir</span>
                    </button>
            </form>
        </main>

@endsection
