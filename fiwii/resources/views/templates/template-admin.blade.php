<!DOCTYPE HTML>
<html lang="en">
<!-- Preloader -->
<div id="preloader" class="preloader" data-delay="0" data-limit="3000">
    <img src="{{ URL::asset('assets/images/logo/logo_loader.png') }}" class="emblem" alt="Emblem" hidden="hidden" />
</div>
<head>
    <!-- Display -->
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/logo/favicon.ico') }}" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Identity -->
    <title>Fiwii Dashboard</title>
    <!-- Vendor Style Sheet -->
    @notifyCss
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/preloader.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/font-family.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/menu-engine.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/menu-grid.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/customadmin.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/dynamic-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/bricklayer.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/lightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/aos.min.css') }}" />
    <!-- Main Style Sheet -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/theme.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/core.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}" />

    <!-- Vendor JavaScript -->
    <script defer src="{{ URL::asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/preloader.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/inview.min.js ') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/menu-engine.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/menu-grid.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/swiper.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/anime.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/dynamic-slider.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/shuffle.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/stickybits.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/bricklayer.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/lightbox.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/typed.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/progressbar.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/map-styles.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/magnetic-effect.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/gsap.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/aos.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/lax.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/cursor-effect.min.js') }}"></script>
    <!-- Main JavaScript -->
    <script defer src="{{ URL::asset('assets/js/main.js') }}"></script>
    <script defer src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body class="shock-body">

    @yield('dashboard')
    @yield('app-dashboard')
    @yield('web-dashboard')
    @yield('create')
    @yield('editar')
    @yield('crearUsuario')
    <x-notify::notify />
    @notifyJs
</body>
</html>

