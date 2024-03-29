<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Fiwii</title>
    <!--Assets---->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/weather.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/fonts/css/fontawesome-all.min.css') }} ">
    <!--PWA READY---->
    <link rel="manifest" href="{{ URL::asset('assets/manifest.json') }}" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
    <script defer type="text/javascript" src="{{ URL::asset('assets/load.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/weather.js') }}"></script>
</head>
<body>
    <div class="page-title page-title-small">
        <h2><a href="{{ url('fiwii') }}" data-back-button><i class="fa fa-arrow-left"></i></a> Tiempo</h2>
    </div>
    <div id="atras">
        @yield('weather')
    </div>
</body>
</html>