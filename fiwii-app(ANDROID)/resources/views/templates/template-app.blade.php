<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Fiwii</title>
    <!--Assets---->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/fonts/css/fontawesome-all.min.css') }} ">
    <script defer type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <script defer type="text/javascript" src="{{ URL::asset('assets/js/custom.js') }}"></script>
    <script defer type="text/javascript" src="{{ URL::asset('assets/js/qr.js') }}"></script>

    <!--PWA READY---->
    <link rel="manifest" href="{{ URL::asset('manifest.json') }}" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
<body class="detect-theme">
    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>
    <div id="page">
        <!-- Header y Footer-->
        <div class="header header-fixed header-auto-show header-logo-app">
            <a href="index.html" class="header-title">Menu</a>
            <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
            <a href="{{ url('conf') }}" class="header-icon header-icon-3"><i class="fa-solid fa-gear fa-spin"></i></a>
        </div>
        <div id="footer-bar" class="footer-bar-5">
            <a href="{{ url('profile') }}"><i class="bi bi-person"></i><span>Perfil</span></a>
            <a href="{{ url('sistemas') }}"><i class="bi bi-list-nested"></i></i><span>Sistemas</span></a>
            <a href="{{ url('fiwii') }}" class="active-nav"><i class="bi bi-house"></i><span>Home</span></a>
            <a href="{{url('qrLector')}}"><i class="bi bi-upc-scan"></i><span>QR</span></a>
            <a href="{{ url('conf') }}"><i class="bi bi-gear"></i><span>Configuración</span></a>
        </div>

        <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260"
        data-menu-load="{{ url('misc.menu') }}" data-menu-active="nav-welcome" data-menu-effect="menu-over">
        </div>

        <div class="page-content">
            @yield('fiwii')
            @yield('to-do')
            @yield('profile')
            @yield('sistemas')
            @yield('compact')
            @yield('qr')
            @yield('generator')
</body>
</html>
