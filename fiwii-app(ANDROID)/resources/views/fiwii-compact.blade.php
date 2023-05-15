@extends('templates.walkthrow-template')
@section('compact')

<div class="page-title page-title-small">
    <h2><a href="{{url('fiwii')}}" data-back-button><i class="fa fa-arrow-left"></i></a>Volver</h2>
</div>

<div class="card header-card shape-rounded" data-card-height="95">
    <div class="card-overlay bg-highlight opacity-95"></div>
</div>

<div data-card-height="cover-card" class="card bg-transparent">
    <div class="card-center text-center">
        <h2 class=" fa-3x font-600 mb-0 color-highlight">Bienvenido {{ Auth::user()->name }}</h2>
        <p class="font-13"></p>

        <div class="row mx-auto mt-3 mb-0" style="max-width:330px;">
            <a href="{{url('fiwii')}}" class="col-4">
                <i data-feather="home" data-feather-line="1" data-feather-size="55" data-feather-color="green-dark" data-feather-bg="green-fade-light"></i>
                <p>Inicio</p>
            </a>
            <a href="{{url('qr-generator')}}" data-toggle-theme class="col-4">
                <i data-feather="smartphone" data-feather-line="1" data-feather-size="55" data-feather-color="dark-dark" data-feather-bg="gray-fade-light"></i>
                <p>Generador QR</p>
            </a>
            <a href="{{url('conf')}}" class="col-4">
                <i data-feather="settings" data-feather-line="1" data-feather-size="55" data-feather-color="blue-dark" data-feather-bg="blue-fade-light"></i>
                <p>Configuración</p>
            </a>
            <a href="{{url('qrLector')}}" class="col-4">
                <i data-feather="smartphone" data-feather-line="1" data-feather-size="55" data-feather-color="teal-dark" data-feather-bg="teal-fade-light"></i>
                <p>Lector QR</p>
            </a>
            <a href="tel:+34527290" class="col-4">
                <i data-feather="phone" data-feather-line="1" data-feather-size="55" data-feather-color="red-dark" data-feather-bg="red-fade-light" ></i>
                <p>Soporte</p>
            </a>
            <a href="{{url('sistemas')}}" class="col-4">
                <i data-feather="list" data-feather-line="1" data-feather-size="55" data-feather-color="brown-dark" data-feather-bg="brown-fade-light"></i>
                <p>Sistemas</p>
            </a>
            <a href="{{url('profile')}}" class="col-4">
                <i data-feather="user" data-feather-line="1" data-feather-size="55" data-feather-color="magenta-dark" data-feather-bg="magenta-fade-light"></i>
                <p>Perfil</p>
            </a>
        </div>

        <div class="row mx-auto mt-2 mb-0" style="max-width:230px;">
            <div class="col-4">
                <a href="#" class="icon icon-l color-facebook rounded-xl mb-2"><i class="font-20 fab fa-facebook-f"></i></a>
            </div>
            <div class="col-4">
                <a href="#" class="icon icon-l color-twitter rounded-xl mb-2"><i class="font-20 fab fa-twitter"></i></a>
            </div>
            <div class="col-4">
                <a href="#" class="icon icon-l color-instagram rounded-xl mb-2"><i class="font-20 fab fa-instagram"></i></a>
            </div>
        </div>

        <p class="opacity-60 font-10">Copyright <span class="copyright-year"></span> Fiwii. All rights reserved</p>

    </div>
</div>
</div>
@endsection
