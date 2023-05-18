<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Fiwii - Configuración</title>
<!--Assets---->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/highlights/highlights/red.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/fonts/css/fontawesome-all.min.css')}} ">
<script defer type="text/javascript" src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script defer type="text/javascript" src="{{URL::asset('assets/js/custom.js')}}"></script>
<!--PWA READY---->
<link rel="manifest" href="{{URL::asset('assets/_manifest.json')}}" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
<body class="detect-theme">
    @yield('conf')
</body>
</html>