<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Fiwoo - System Management</title>
<!--CSS, JS AND Fonts-->
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/bootstrap-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
<script  defer src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script  defer src="{{URL::asset('js/custom.js')}}"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


<!--PWA READY-->
<link rel="manifest" href="_manifest.json">
<meta id="theme-check" name="theme-color" content="#FFFFFF">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">

<body class="theme-light">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <!-- Header -->
    <div class="header-bar header-fixed header-app header-bar-detached">
		<a data-back-button href="#"><i class="bi bi-caret-left-fill font-11 color-theme ps-2"></i></a>
		<a href="#" class="header-title color-theme font-13">Volver al Inicio</a>
		<a href="#" class="show-on-theme-light" data-toggle-theme><i class="bi bi-moon-fill font-13"></i></a>
		<a href="#" class="show-on-theme-dark" data-toggle-theme ><i class="bi bi-lightbulb-fill color-yellow-dark font-13"></i></a>
	</div>

	<!-- Footer Bar-->
    <div id="footer-bar" class="footer-bar footer-bar-detached">
        <a href="{{url('profile')}}"><i class="bi bi-person-fill font-15"></i><span>Perfil</span></a>
        <a href="#" class="active-nav"><i class="bi bi-qr-code-scan font-17"></i><span>Escaner</span></a>
        <a href="{{url('/')}} "><i class="bi bi-house-fill font-16"></i><span>Inicio</span></a>
        <a href="#"><i class="bi bi-image font-16"></i><span>Media</span></a>
        <a href="#"><i class="bi bi-gear font-16"></i><span>Configuración</span></a>
    </div>

    <!-- Main Sidebar-->
    <div id="menu-main" data-menu-active="nav-homes" data-menu-load="{{url('menu-main')}}"
        style="width:280px;" class="offcanvas offcanvas-start offcanvas-detached rounded-m">
    </div>
    <!-- Your Page Content Goes Here-->
    <div class="page-content header-clear-medium">

		<div class="card card-style">
			<div class="content">
				<h6 class="font-700 mb-n1 color-highlight">Generador</h6>
				<h1 class="pb-2">Generador QR</h1>
				<p class="mb-3">
					Genere códigos QR con el link proporcionado para cada Sistema.
				</p>
				<ul class="px-3 mb-0">
					<li>Generar en el enlace ingresado por el usuario</li>
					<li>Generar automáticamente el enlace actual</li>
				</ul>
			</div>
		</div>

		<div class="card card-style">
			<div class="content">
				<h4>QR</h4>
				<p class="mb-3">
					Ingrese una URL válida a continuación para generar un código QR.
				</p>
				<form class="needs-validation" novalidate>
					<div class="generate-qr-result"></div>
					<div class="form-custom form-border form-icon mb-3">
						<i class="no-label bi bi-qr-code"></i>
						<input type="url" class="form-control" id="qr-generator-value" placeholder="Introducir URL" pattern="(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})" required />
						<div class="valid-feedback"><!-- text for field valid--></div>
						<div class="invalid-feedback">URL INVALIDA</div>

					</div>
					<div>
						<button class="btn btn-full bg-blue-dark rounded-xs text-uppercase font-700 w-100 btn-s mt-3" type="submit">Generar Codigo QR</button>
					</div>
				</form>
			</div>
		</div>
    </div>
	<!-- End of Page Content-->
</div>
<!--End of Page ID-->

</body>
