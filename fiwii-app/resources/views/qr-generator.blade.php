@extends('templates.template-app')
@section('generator')
    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>QR Generator</h2>
        <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img"
            data-src="images/avatars/5s.png"></a>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
    </div>

    <div class="card card-style">
        <div class="content">
            <p>
                Genere códigos QR basados en un enlace, o créelos automáticamente para la página que está viendo
                actualmente.
            </p>
        </div>
    </div>

    <div class="card card-style">
        <div class="content">
            <h4>Introduce un link</h4>
            <p>
                Simplemente ingrese un enlace a continuación para generar automáticamente un código QR.
            </p>
            <div class="input-style no-borders no-icon validate-field mb-4">
                <input type="url" class="qr-url form-control validate-text" id="f4"
                    placeholder="Enter Valid URL">
                <label for="f4" class="color-highlight">Enter Valid URL</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <a href="#"
                class="generate-qr-button btn btn-m btn-full shadow-l rounded-s bg-highlight text-uppercase font-700 mt-4">Create
                QR Code</a>
            <div class="generate-qr-result"></div>
        </div>
    </div>

    <div class="card card-style bg-20">
        <div class="card-body text-center pt-4 pb-4">
            <h1 class="color-white">QR Página actual</h1>
            <p class="color-white">
                El siguiente código se genera para la página que está viendo actualmente. Al escanearlo, se le llevará a
                esta página.
            </p>
            <img width="200" class="qr-image generate-qr-auto mx-auto polaroid-effect shadow-l mb-3" src="">
        </div>
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
    </div>
@endsection
