@extends('templates.template-app')
@section('qr')
    <div id="footer-bar" class="footer-bar-5">
        <a href="{{ url('profile') }}"><i class="bi bi-person"></i><span>Perfil</span></a>
        <a href="{{ url('sistemas') }}"><i class="bi bi-list-nested"></i></i><span>Sistemas</span></a>
        <a href="{{ url('fiwii') }}"><i class="bi bi-house"></i><span>Home</span></a>
        <a href="{{ url('qrLector') }}" class="active-nav"><i class="bi bi-upc-scan"></i><span>QR</span></a>
        <a href="{{ url('conf') }}"><i class="bi bi-gear"></i><span>Configuración</span></a>
    </div>

    <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260"
        data-menu-load="{{ url('misc.menu') }}" data-menu-active="nav-welcome" data-menu-effect="menu-over">
    </div>

    <div class="page-content">
        <div class="page-title page-title-small">
            <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Lector QR</h2>
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
                    Escanear códigos QR en tiempo real.
                </p>
            </div>
        </div>

        <div class="card card-style">
            <div class="content">
                <video id="preview"></video>
            </div>
        </div>

        <div class="modal" id="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Escaner Exitoso</h5>
                        <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p id="qr-data" class=""></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
@endsection
