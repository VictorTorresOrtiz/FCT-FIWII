@extends('templates.template-admin')
@section('editar')
<header id="header" class="shock-header">
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg nfixed-scroll smart-scroll hover-line scheme-2 primary">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="/">
                <img src="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
                    data-logo-alt="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
                    data-logo-mobile="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}" class="logo" />
                <span class="logo-after-text">Borrar Usuario asociado a su Empresa</span>
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
        <form action="{{ route('eliminar_user') }}" method="POST" enctype="multipart/form-data" >
            @method('DELETE')
            @csrf
            <fieldset>
                <h3 class="title text-style-11 black">ID Usuario:</h3>
                <input type="text" required="required" id="userId" name="userId">

                </div>
            </fieldset>
               <button type="submit" class="button outline rounded accent accent-hover" onclick="return confirm('¿Estás seguro de eliminar al usuario?')">
                    <span class="button-text accent white-hover">Borrar</span>
                </button>
        </form>
@endsection
