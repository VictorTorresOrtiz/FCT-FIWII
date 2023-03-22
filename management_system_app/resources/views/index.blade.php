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


<!--PWA READY-->
@laravelPWA

</head>

<body class="theme-light">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <!-- Header -->
    <div class="header-bar header-fixed header-app header-bar-detached">
        <a data-bs-toggle="offcanvas" data-bs-target="#menu-main" href="#"><i class="bi bi-list color-theme"></i></a>
        <a href="#" class="header-title color-theme">Fiwoo</a>
        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-login"><i class="font-14 bi bi-person-fill"></i></a>
        <a href="#" class="show-on-theme-light" data-toggle-theme><i class="bi bi-moon-fill font-13"></i></a>
        <a href="#" class="show-on-theme-dark" data-toggle-theme ><i class="bi bi-lightbulb-fill color-yellow-dark font-13"></i></a>
    </div>

	<!-- Footer Bar-->
    <div id="footer-bar" class="footer-bar footer-bar-detached">
		<a href="{{url('profile')}}"><i class="bi bi-person-fill font-15"></i><span>Perfil</span></a>
        <a href="#"><i class="bi bi-qr-code-scan font-17"></i><span>Escaner</span></a>
        <a href="{{url('/')}} " class="active-nav"><i class="bi bi-house-fill font-16"></i><span>Inicio</span></a>
        <a href="#"><i class="bi bi-image font-16"></i><span>Media</span></a>
        <a href="#"><i class="bi bi-gear font-16"></i><span>Configuración</span></a>
    </div>

	<!-- Main Sidebar-->
	<div id="menu-main" data-menu-active="nav-homes" data-menu-load="{{url('menu-main')}}"
		style="width:280px;" class="offcanvas offcanvas-start offcanvas-detached rounded-m">
	</div>

    <!--Login Modal-->
    <div class="offcanvas offcanvas-modal rounded-m offcanvas-detached bg-theme" style="width:340px" id="menu-login">
		<div class="content">
			<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">Bienvenido</h5>
			<h1 class="font-24 font-800 mb-3">Login</h1>
			<div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
				<i class="bi bi-person-circle font-13"></i>
				<input type="text" class="form-control rounded-xs" id="c1" placeholder="Nombre" name="nombre"/>
				<label for="c1" class="color-theme">Nombre</label>
			</div>
			<div class="form-custom form-label form-border form-icon mb-4 bg-transparent">
				<i class="bi bi-asterisk font-13"></i>
				<input type="password" class="form-control rounded-xs" id="c2" placeholder="Contraseña" name="contraseña" />
				<label for="c2" class="color-theme">Contraseña</label>
			</div>
			<a href="#" class="btn btn-full gradient-green shadow-bg shadow-bg-s mt-4">Acceder a su cuenta</a>
		</div>
   </div>


    <!-- Banner-->
    <div class="page-content header-clear-medium">

		<div class="splide single-slider slider-no-dots slider-no-arrows slider-boxed text-center mt-n2" id="single-slider-3">
			<div class="splide__track">
				<div class="splide__list">
					<div class="splide__slide">
						<div class="card card-style mx-0 shadow-card shadow-card-m bg-14" data-card-height="230">
							<div class="card-bottom pb-3 px-3">
								<h3 class="color-white mb-1">Fiwoo Systems</h3>
								<p class="color-white opacity-80 mb-0 mt-n1 font-14">Gestón y mantenimiento de sistemas</p>
							</div>
							<div class="card-overlay bg-gradient-fade"></div>
						</div>
					</div>
					<div class="splide__slide">
						<div class="card card-style mx-0 shadow-card shadow-card-m bg-2" data-card-height="230">
							<div class="card-bottom pb-3 px-3">
								<h3 class="color-white mb-1">PWA Ready</h3>
								<p class="color-white opacity-80 mb-0 mt-n1 font-14">Disponible en IOS, Android y Web</p>
							</div>
							<div class="card-overlay bg-gradient-fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
    <!-- Cards-->
    <div class="card card-style">
        <div class="content mb-0">
            <div class="row text-center row-cols-3 mb-0">
                <a class="col" href="index.html">
                    <img src="{{URL::asset('images/cards/loading.gif')}}" data-src="{{URL::asset('images/cards/qr-code.png')}}" class="preload-img img-fluid rounded-xs" alt="img">
                    <p class="font-600 color-theme font-12 pb-3">Lector QR</p>
                </a>
                <a class="col" href="{{url('qr-generator')}}">
                    <img src="{{URL::asset('images/cards/loading.gif')}}" data-src="{{URL::asset('images/cards/scan.png')}}" class="preload-img img-fluid rounded-xs" alt="img">
                    <p class="font-600 color-theme font-12 pb-3">Generador QR</p>
                </a>
                <a class="col" href="{{url('equipos')}}">
                    <img src="{{URL::asset('images/cards/loading.gif')}}" data-src="{{URL::asset('images/cards/content-management-system.png')}}" class="preload-img img-fluid rounded-xs" alt="img">
                    <p class="font-600 color-theme font-12 pb-3">Sistemas</p>
                </a>
            </div>
        </div>
    </div>
    <!-- Cards-->


    <!-- Banner-->
    <div class="card card-style py-3">
        <div class="content px-2 text-center">
            <h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase">Soporte</h5>
            <h2>¿Algún Problema?</h2>
            <p class="mb-3">
                ¿Estás teniendo problemas con nuestra Aplicación?.
            </p>
            <a href="#"  data-bs-toggle="offcanvas" data-bs-target="#menu-call" class="default-link btn btn-m rounded-s gradient-highlight shadow-bg shadow-bg-s px-5 mb-0 mt-2">Contacto Gratutito</a>
        </div>
    </div>
   <!-- Call -->
   <div class="offcanvas offcanvas-modal rounded-m offcanvas-detached bg-theme" style="width:340px" id="menu-call">
    <div class="content">
        <div class="d-flex pb-2">
            <div class="align-self-center">
                <h1 class="font-700">Soporte Técnico</h1>
            </div>
            <div class="align-self-center ms-auto">
                <a href="#"  data-bs-dismiss="offcanvas" class="icon icon-m"><i class="bi bi-x-circle-fill color-red-dark font-18 me-n4"></i></a>
            </div>
        </div>
        <p>
         Siempre estamos aquí para ayudar. Llámenos hoy.<br> Simplemente toque el botón y póngase en contacto con nosotros..
        </p>
        <a href="tel:+1 234 567 8021" class="default-link btn btn-full btn-s gradient-green shadow-bg shadow-bg-s">Llamar Ahora</a>
    </div>
</div>
<!-- Call -->


     <!-- Info-->
		<div class="card card-style">
			<div class="card-body text-center">
				<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">The Future is Now</h5>
				<h2>Potentes Herramientas</h2>
				<p class="mb-3">
					Duo brings best in class features for your website. Speed and flexibility plus ease of use.
				</p>
				<div class="row mb-n3 pt-4">
					<div class="col-6">
						<i class="bi bi-lightning-charge color-yellow-dark font-50 d-block pb-2"></i>
						<h5 class="pt-2">Rápido</h5>
						<p>
							Fiwoo esta totalmente optimizado para un rendimiento excepcional.
						</p>
					</div>
					<div class="col-6">
						<i class="bi bi-lock color-red-light font-50 d-block pb-2"></i>
						<h5 class="pt-2">Seguridad</h5>
						<p>
							Protección y Seguridad para sus bases de datos etc...
						</p>
					</div>
					<div class="col-6">
						<i class="bi bi-phone color-gray-dark font-50 d-block pb-2"></i>
						<h5 class="pt-2">PWA Ready</h5>
						<p>
							Compatibilidad en dispositivos móbiles.
						</p>
					</div>
					<div class="col-6">
						<i class="bi bi-gear color-green-light font-50 d-block pb-2"></i>
						<h5 class="pt-2">Soporte</h5>
						<p>
							Soporte 24/7.
						</p>
					</div>
				</div>
			</div>
		</div>
        <!-- Info-->
    </div>
	<!-- End of Page Content-->

	<div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-install-pwa-ios">
	   <div class="content">
			 <img src="app/icons/icon-128x128.png" alt="img" width="80" class="rounded-l mx-auto my-4">
		  <h1 class="text-center font-800 font-20">Add Duo to Home Screen</h1>
		  <p class="boxed-text-xl">
			  Install Duo on your home screen, and access it just like a regular app. Open your Safari menu and tap "Add to Home Screen".
		  </p>
		   <a href="#" class="pwa-dismiss close-menu gradient-blue shadow-bg shadow-bg-s btn btn-s btn-full text-uppercase font-700  mt-n2" data-bs-dismiss="offcanvas">Maybe Later</a>
	   </div>
   </div>

   <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-install-pwa-android">
	   <div class="content">
		   <img src="app/icons/icon-128x128.png" alt="img" width="80" class="rounded-m mx-auto my-4">
		   <h1 class="text-center font-700 font-20">Install Duo</h1>
		   <p class="boxed-text-l">
			   Install Duo to your Home Screen to enjoy a unique and native experience.
		   </p>
		   <a href="#" class="pwa-install btn btn-m rounded-s text-uppercase font-900 gradient-highlight shadow-bg shadow-bg-s btn-full">Add to Home Screen</a><br>
		   <a href="#" data-bs-dismiss="offcanvas" class="pwa-dismiss close-menu color-theme text-uppercase font-900 opacity-50 font-11 text-center d-block mt-n1">Maybe later</a>
	   </div>
   </div>

</div>
<!--End of Page ID-->

</body>
</html>

