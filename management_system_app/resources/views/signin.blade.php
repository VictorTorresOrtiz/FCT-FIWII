<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Fiwoo - Iniciar Sesión</title>
<!--CSS, JS AND Fonts-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/bootstrap-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
<script defer src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script defer src="{{URL::asset('js/custom.js')}}"></script>

<body class="theme-light">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <!-- Login modal-->
    <div class="page-content mb-0 pb-0">

		<div class="card card-style mb-0 bg-transparent shadow-0 bg-3 mx-0 rounded-0" data-card-height="cover">
			<div class="card-center">
				<div class="card card-style">
					<div class="content">
						<h1 class="text-center font-800 font-30 mb-2">Iniciar Sesión</h1>
						<p class="text-center font-13 mt-n2 mb-3">Introduce su cuenta Fiwoo</p>
						<div class="form-custom form-label form-icon mb-3">
							<i class="bi bi-person-circle font-14"></i>
							<input type="text" class="form-control rounded-xs" id="c1" placeholder="Nombre usuario"/>
							<label for="c1" class="color-theme">Nombre</label>
						</div>
						<div class="form-custom form-label form-icon mb-3">
							<i class="bi bi-asterisk font-12"></i>
							<input type="text" class="form-control rounded-xs" id="c2" placeholder="Contraseña"/>
							<label for="c2" class="color-theme">Contraseña</label>
						</div>
						<a href="#" class='btn rounded-sm btn-m gradient-blue text-uppercase font-700 mt-4 mb-3 btn-full shadow-bg shadow-bg-s'>Acceder</a>
				</div>
			</div>
		</div>

    </div>
	<!-- End of Page Content-->

</div>
</body>
