<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Fiwoo - System Management</title>
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

    <!-- Main-->
    <div class="page-content pb-0 overflow-hidden bg-dark-dark">

		<div class="splide single-slider slider-no-dots slider-no-arrows" id="single-slider-walkthrough" data-splide='{"interval":6000}'>
			<div class="splide__track">
				<div class="splide__list">
					<div class="splide__slide">
						<div class="card bg-dark-dark rounded-0" style="background-image:url(images/pictures/3l.jpg); background-size:cover;" data-card-height="cover">
							<div class="card-center">
								<h1 class="color-white font-40 text-center">Fiwoo Empresas</h1>
								<p class="color-white text-center opacity-70">Acceso a cuenta empresarial</p>
								<p class="color-white font-16 text-center boxed-text-xl">
                                    <a href="{{url('/fiwoo')}}" class="btn btn-full gradient-green m-4 font-700 text-uppercase shadow-bg shadow-bg-s">Iniciar Sesión</a>
								</p>
							</div>
							<div class="card-overlay bg-black opacity-40 rounded-0"></div>
							<div class="card-overlay bg-gradient-fade rounded-0"></div>
						</div>
					</div>
					<div class="splide__slide">
						<div class="card bg-dark-dark rounded-0" style="background-image:url(images/pictures/11l.jpg); background-size:cover;" data-card-height="cover">
							<div class="card-center">
								<h1 class="color-white font-40 text-center">Fiwoo Técnicos</h1>
								<p class="color-white text-center opacity-70">Acceso a cuenta técnico</p>
								<p class="color-white font-16 text-center boxed-text-xl">
                                    <a href="{{url('/fiwoo')}}" class="btn btn-full gradient-green m-4 font-700 text-uppercase shadow-bg shadow-bg-s">Iniciar Sesión</a>
								</p>
							</div>
							<div class="card-overlay bg-black opacity-40 rounded-0"></div>
							<div class="card-overlay bg-gradient-fade rounded-0"></div>
						</div>
					</div>

				</div>
			</div>
		</div>
    </div>
</div>
</body>
