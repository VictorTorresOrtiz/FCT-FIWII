<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>System Management</title>
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
</head>

<body class="theme-light">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <!-- Header -->
    <div class="header-bar header-fixed header-app header-bar-detached">
        <a data-bs-toggle="offcanvas" data-bs-target="#menu-main" href="#"><i class="bi bi-list color-theme"></i></a>
        <a href="#" class="header-title color-theme">Gestión de Sistemas</a>
		<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-bell"><em class="badge bg-highlight ms-1">3</em><i class="font-14 bi bi-bell-fill"></i></a>
        <a href="#" class="show-on-theme-light" data-toggle-theme><i class="bi bi-moon-fill font-13"></i></a>
        <a href="#" class="show-on-theme-dark" data-toggle-theme ><i class="bi bi-lightbulb-fill color-yellow-dark font-13"></i></a>
    </div>

	<!-- Footer Bar-->
    <div id="footer-bar" class="footer-bar footer-bar-detached">
		<a href="#"><i class="bi bi-heart-fill font-15"></i><span>Pages</span></a>
        <a href="index-components.html"><i class="bi bi-star-fill font-17"></i><span>Features</span></a>
        <a href="index.html" class="active-nav"><i class="bi bi-house-fill font-16"></i><span>Home</span></a>
        <a href="index-media.html"><i class="bi bi-image font-16"></i><span>Media</span></a>
        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-main"><i class="bi bi-list"></i><span>Menu</span></a>
    </div>

	<!-- Main Sidebar-->
	<div id="menu-main" data-menu-active="nav-homes" data-menu-load="{{url('menu-main')}}"
		style="width:280px;" class="offcanvas offcanvas-start offcanvas-detached rounded-m">
	</div>

	<!-- Main Bell-->
	<div id="menu-bell"	data-menu-load="menu-bell.html"
		style="height:400px;" class="offcanvas offcanvas-top offcanvas-detached rounded-m">
	</div>

    <!-- Content-->
    <div class="page-content header-clear-medium">

		<div class="splide single-slider slider-no-dots slider-no-arrows slider-boxed text-center mt-n2" id="single-slider-3">
			<div class="splide__track">
				<div class="splide__list">
					<div class="splide__slide">
						<div class="card card-style mx-0 shadow-card shadow-card-m bg-14" data-card-height="230">
							<div class="card-bottom pb-3 px-3">
								<h3 class="color-white mb-1">Fiwoo System</h3>
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


		<div class="card card-style bg-14 text-center shadow-card shadow-card-l" data-card-height="340">
			<div class="card-center">
				<h1 class="color-white mb-0">35k+ Happy Customers</h1>
				<p class="color-white opacity-60 mb-2">No stone left unturned, no aspect overlooked!</p>
				<p class="text-center color-yellow-dark py-2 mb-2">
					<i class="bi bi-star-fill color-yellow-light font-20"></i>
					<i class="bi bi-star-fill color-yellow-light font-24 px-1"></i>
					<i class="bi bi-star-fill color-yellow-light font-28 px-1"></i>
					<i class="bi bi-star-fill color-yellow-light font-24 px-1"></i>
					<i class="bi bi-star-fill color-yellow-light font-20"></i>
				</p>
				<div class="splide single-slider slider-no-arrows slider-no-dots" id="single-slider-quotes">
					<div class="splide__track">
						<div class="splide__list">
							<div class="splide__slide">
								<p class="font-16 font-400 color-white line-height-xl mx-4 mb-0">
									The best support I have ever had, it's so good I purchased another template. Highlighy Recommended.
									<br>
									<a href="#" class="pt-4 color-highlight font-13 mb-0">Envato Customer</a>
								</p>
							</div>
							<div class="splide__slide">
								<p class="font-16 font-400 color-white line-height-xl mx-4 mb-0">
									The code is always great with any Enabled template, but it's the customer support that wins me over.<br>
									<a href="#" class="pt-4 color-highlight font-13 mb-0">Envato Customer</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-overlay bg-black opacity-70"></div>
		</div>

		<div class="card card-style">
			<div class="content px-2 text-center">
				<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase">Things we do</h5>
				<h2>Featured Projects</h2>
				<p class="mb-3">
					Products we are proud to showcase and show off to the world. We think you'll love them!
				</p>
				<div class="row text-center row-cols-3 mb-n1">
					<a class="col p-1" data-gallery="gallery-1" href="images/pictures/7t.jpg" title="Vynil and Typerwritter">
						<img src="images/empty.png" data-src="images/pictures/7s.jpg" class="preload-img img-fluid rounded-m" alt="img">
					</a>
					<a class="col p-1" data-gallery="gallery-1" href="images/pictures/23t.jpg" title="Cream Cookie">
						<img src="images/empty.png" data-src="images/pictures/23s.jpg" class="preload-img img-fluid rounded-m" alt="img">
					</a>
					<a class="col p-1" data-gallery="gallery-1" href="images/pictures/3t.jpg" title="Cookies and Flowers">
						<img src="images/empty.png" data-src="images/pictures/3s.jpg" class="preload-img img-fluid rounded-m" alt="img">
					</a>
					<a class="col p-1" data-gallery="gallery-1" href="images/pictures/11t.jpg" title="Vynil and Typerwritter">
						<img src="images/empty.png" data-src="images/pictures/11s.jpg" class="preload-img img-fluid rounded-m" alt="img">
					</a>
					<a class="col p-1" data-gallery="gallery-1" href="images/pictures/5t.jpg" title="Cream Cookie">
						<img src="images/empty.png" data-src="images/pictures/5s.jpg" class="preload-img img-fluid rounded-m" alt="img">
					</a>
					<a class="col p-1" data-gallery="gallery-1" href="images/pictures/15t.jpg" title="Cookies and Flowers">
						<img src="images/empty.png" data-src="images/pictures/14s.jpg" class="preload-img img-fluid rounded-m" alt="img">
					</a>
				</div>
			</div>
		</div>

		<div class="card card-style py-3">
			<div class="content px-2 text-center">
				<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase">Time to Go Mobile</h5>
				<h2>Get Duo Mobile Today</h2>
				<p class="mb-3">
					Start your next project with Duo and enjoy the power of a Progressive Web App.
				</p>
				<a href="https://1.envato.market/2ryjKA" target="_blank" class="default-link btn btn-m rounded-s gradient-highlight shadow-bg shadow-bg-s px-5 mb-0 mt-2">Get Duo Now</a>
			</div>
		</div>

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

