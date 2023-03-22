<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Fiwoo - Perfil</title>
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
		<a href="#" class="header-title color-theme font-13">Back to Pages</a>
		<a href="#" class="show-on-theme-light" data-toggle-theme><i class="bi bi-moon-fill font-13"></i></a>
		<a href="#" class="show-on-theme-dark" data-toggle-theme ><i class="bi bi-lightbulb-fill color-yellow-dark font-13"></i></a>
	</div>

	<!-- Footer Bar-->
    <div id="footer-bar" class="footer-bar footer-bar-detached">
        <a href="{{url('profile')}}" class="active-nav"><i class="bi bi-person-fill font-15"></i><span>Perfil</span></a>
        <a href="#"><i class="bi bi-qr-code-scan font-17"></i><span>Escaner</span></a>
        <a href="{{url('/')}} "><i class="bi bi-house-fill font-16"></i><span>Inicio</span></a>
        <a href="#"><i class="bi bi-image font-16"></i><span>Media</span></a>
        <a href="#"><i class="bi bi-gear font-16"></i><span>Configuración</span></a>
    </div>

	<!-- Main Sidebar-->
	<div id="menu-main" data-menu-active="nav-pages" data-menu-load="menu-main.html"
		style="width:280px;" class="offcanvas offcanvas-start offcanvas-detached rounded-m">
	</div>

    <div class="page-content header-clear-medium">

		<div class="card card-style mt-5 overflow-visible">
			<img src="images/empty.png" data-src="images/pictures/7t.jpg" width="150" height="150" class="mt-n5 preload-img mx-auto rounded-circle shadow-xl">
			<div class="content text-center">
				<div class="px-3 mb-n3">
					<h1 class="font-700">Karla Black</h1>
					<p class="mb-2 opacity-60 font-13">
						Karla Black is a name used when you generate a text with an anonymous name.
					</p>
					<p class="font-10">
						<strong class="color-theme pe-1">1k</strong>Followers
						<strong class="color-theme ps-3 pe-1">342</strong>Following
					</p>
				</div>
			</div>

			<div class="content">
				<div class="row mb-0">
					<div class="col-6">
						<a href="#" class="btn btn-full btn-s rounded-s text-uppercase font-900 gradient-highlight shadow-bg shadow-bg-s">Follow</a>
					</div>
					<div class="col-6">
						<a href="#" class="btn btn-full btn-s btn-border rounded-s text-uppercase font-900 color-highlight border-blue-dark shadow-l">Message</a>
					</div>
				</div>
			</div>
			<div class="divider mb-4 mx-3 mt-1"></div>
			<div class="row mb-0 px-3">
				<div class="col-6">
					<a data-bs-toggle="offcanvas" data-bs-target="#menu-gallery-1" href="#"><img src="images/pictures/3s.jpg" class="rounded-m img-fluid d-block"></a>
					<span class="font-700 color-theme font-14 text-center d-block mb-3">Album Sheet 1</span>
				</div>
				<div class="col-6">
					<a data-bs-toggle="offcanvas" data-bs-target="#menu-gallery-2"  href="#"><img src="images/pictures/5s.jpg" class="rounded-m img-fluid d-block"></a>
					<span class="font-700 color-theme font-14 text-center d-block mb-3">Album Sheet 2</span>
				</div>
				<div class="col-6">
					<a data-bs-toggle="offcanvas" data-bs-target="#menu-gallery-3" href="#"><img src="images/pictures/12s.jpg" class="rounded-m img-fluid d-block"></a>
					<span class="font-700 color-theme font-14 text-center d-block mb-3">Album Sidebar 1</span>
				</div>
				<div class="col-6">
					<a data-bs-toggle="offcanvas" data-bs-target="#menu-gallery-4"  href="#"><img src="images/pictures/22s.jpg" class="rounded-m img-fluid d-block"></a>
					<span class="font-700 color-theme font-14 text-center d-block mb-3">Album Sidebar 2</span>
				</div>
				<div class="col-6">
					<a data-bs-toggle="offcanvas" data-bs-target="#menu-gallery-5" href="#"><img src="images/pictures/1s.jpg" class="rounded-m img-fluid d-block"></a>
					<span class="font-700 color-theme font-14 text-center d-block mb-3">Album Modal 1</span>
				</div>
				<div class="col-6">
					<a data-bs-toggle="offcanvas" data-bs-target="#menu-gallery-6"  href="#"><img src="images/pictures/4s.jpg" class="rounded-m img-fluid d-block"></a>
					<span class="font-700 color-theme font-14 text-center d-block mb-3">Album Modal 2</span>
				</div>
				<div class="col-6">
					<a data-bs-toggle="offcanvas" data-bs-target="#menu-gallery-7" href="#"><img src="images/pictures/18s.jpg" class="rounded-m img-fluid d-block"></a>
					<span class="font-700 color-theme font-14 text-center d-block mb-3">Album Top 1</span>
				</div>
				<div class="col-6">
					<a data-bs-toggle="offcanvas" data-bs-target="#menu-gallery-8"  href="#"><img src="images/pictures/19s.jpg" class="rounded-m img-fluid d-block"></a>
					<span class="font-700 color-theme font-14 text-center d-block mb-3">Album Top 2</span>
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

	<!-- Sheet 1-->
	<div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-gallery-1">
		<div class="content mb-0">
			<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">3 x 3 Image Grid</h5>
			<h1 class="font-24 font-800 mb-2">Album Thumbs</h1>
			<p>
				Simple thumbnails with caption attached to them. These will all open an album gallery when tapped.
			</p>
			<div class="row text-center row-cols-3 mb-0">
				<a class="col" data-gallery="gallery-1" href="images/pictures/7t.jpg" title="Portrait">
					<img src="images/empty.png" data-src="images/pictures/7t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Portrait</p>
				</a>
				<a class="col" data-gallery="gallery-1" href="images/pictures/10t.jpg" title="Abstracts">
					<img src="images/empty.png" data-src="images/pictures/10s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Abstract</p>
				</a>
				<a class="col" data-gallery="gallery-1" href="images/pictures/11t.jpg" title="Red Leafs">
					<img src="images/empty.png" data-src="images/pictures/11s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Red Leafs</p>
				</a>
				<a class="col" data-gallery="gallery-1" href="images/pictures/23t.jpg" title="Gamer Girl">
					<img src="images/empty.png" data-src="images/pictures/23t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Gamer Girl</p>
				</a>
				<a class="col" data-gallery="gallery-1" href="images/pictures/14t.jpg" title="Jelly Fish">
					<img src="images/empty.png" data-src="images/pictures/14s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Jelly Fish</p>
				</a>
				<a class="col" data-gallery="gallery-1" href="images/pictures/3t.jpg" title="Ice Cube">
					<img src="images/empty.png" data-src="images/pictures/3s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Ice Cube</p>
				</a>
			</div>
			<a href="#" data-bs-dismiss="offcanvas" class="btn btn-full gradient-red shadow-bg shadow-bg-s mb-3">Close Album</a>
		</div>
	</div>

	<!-- Sheet 2-->
	<div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-gallery-2">
		<div class="content mb-0">
			<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">2 x 2 Image Grid</h5>
			<h1 class="font-24 font-800 mb-3">Album Thumbs</h1>
			<p>
				Simple thumbnails with caption attached to them. These will all open an album gallery when tapped.
			</p>

			<div class="row text-center row-cols-2 mb-0">
				<a class="col" data-gallery="gallery-2" href="images/pictures/7t.jpg" title="Model Portrait">
					<img src="images/empty.png" data-src="images/pictures/7t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Selfie</p>
				</a>
				<a class="col" data-gallery="gallery-2" href="images/pictures/11t.jpg" title="Red Leafs">
					<img src="images/empty.png" data-src="images/pictures/11s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Nature</p>
				</a>
				<a class="col" data-gallery="gallery-2" href="images/pictures/2t.jpg" title="Smoke Flow">
					<img src="images/empty.png" data-src="images/pictures/2t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Smoke Flow</p>
				</a>
				<a class="col" data-gallery="gallery-2" href="images/pictures/4t.jpg" title="Color Doughnuts">
					<img src="images/empty.png" data-src="images/pictures/4s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Color Doughnuts</p>
				</a>
			</div>
			<a href="#" data-bs-dismiss="offcanvas" class="btn btn-full gradient-red shadow-bg shadow-bg-s mb-3">Close Album</a>
		</div>
	</div>

	<!-- Sidebar 1-->
	<div class="offcanvas offcanvas-start rounded-m offcanvas-detached" style="width:300px"  id="menu-gallery-3">
		<div class="content mb-0">
			<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">3 x 3 Image Grid</h5>
			<h1 class="font-24 font-800 mb-2">Album Thumbs</h1>
			<p>
				Simple thumbnails with caption attached to them. These will all open an album gallery when tapped.
			</p>
			<div class="row text-center row-cols-3 mb-0">
				<a class="col" data-gallery="gallery-1a" href="images/pictures/7t.jpg" title="Portrait">
					<img src="images/empty.png" data-src="images/pictures/7t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Portrait</p>
				</a>
				<a class="col" data-gallery="gallery-1a" href="images/pictures/10t.jpg" title="Abstracts">
					<img src="images/empty.png" data-src="images/pictures/10s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Abstract</p>
				</a>
				<a class="col" data-gallery="gallery-1a" href="images/pictures/11t.jpg" title="Red Leafs">
					<img src="images/empty.png" data-src="images/pictures/11s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Red Leafs</p>
				</a>
				<a class="col" data-gallery="gallery-1a" href="images/pictures/23t.jpg" title="Gamer Girl">
					<img src="images/empty.png" data-src="images/pictures/23t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Gamer Girl</p>
				</a>
				<a class="col" data-gallery="gallery-1a" href="images/pictures/14t.jpg" title="Jelly Fish">
					<img src="images/empty.png" data-src="images/pictures/14s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Jelly Fish</p>
				</a>
				<a class="col" data-gallery="gallery-1a" href="images/pictures/3t.jpg" title="Ice Cube">
					<img src="images/empty.png" data-src="images/pictures/3s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Ice Cube</p>
				</a>
				<a class="col" data-gallery="gallery-1a" href="images/pictures/7t.jpg" title="Portrait">
					<img src="images/empty.png" data-src="images/pictures/7t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Portrait</p>
				</a>
				<a class="col" data-gallery="gallery-1a" href="images/pictures/10t.jpg" title="Abstracts">
					<img src="images/empty.png" data-src="images/pictures/10s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Abstract</p>
				</a>
				<a class="col" data-gallery="gallery-1a" href="images/pictures/11t.jpg" title="Red Leafs">
					<img src="images/empty.png" data-src="images/pictures/11s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Red Leafs</p>
				</a>
				<a class="col" data-gallery="gallery-1a" href="images/pictures/23t.jpg" title="Gamer Girl">
					<img src="images/empty.png" data-src="images/pictures/23t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Gamer Girl</p>
				</a>
				<a class="col" data-gallery="gallery-1a" href="images/pictures/14t.jpg" title="Jelly Fish">
					<img src="images/empty.png" data-src="images/pictures/14s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Jelly Fish</p>
				</a>
				<a class="col" data-gallery="gallery-1a" href="images/pictures/3t.jpg" title="Ice Cube">
					<img src="images/empty.png" data-src="images/pictures/3s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Ice Cube</p>
				</a>
			</div>
			<div class="divider mt-3"></div>
			<a href="#" data-bs-dismiss="offcanvas" class="btn btn-full gradient-red shadow-bg shadow-bg-s">Close Album</a>
		</div>
	</div>

	<!-- Sidebar 2-->
	<div class="offcanvas offcanvas-end rounded-m offcanvas-detached" style="width:300px" id="menu-gallery-4">
		<div class="content mb-0">
			<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">2 x 2 Image Grid</h5>
			<h1 class="font-24 font-800 mb-3">Album Thumbs</h1>
			<p>
				Simple thumbnails with caption attached to them. These will all open an album gallery when tapped.
			</p>

			<div class="row text-center row-cols-2 mb-0">
				<a class="col" data-gallery="gallery-2a" href="images/pictures/7t.jpg" title="Model Portrait">
					<img src="images/empty.png" data-src="images/pictures/7t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Selfie</p>
				</a>
				<a class="col" data-gallery="gallery-2a" href="images/pictures/11t.jpg" title="Red Leafs">
					<img src="images/empty.png" data-src="images/pictures/11s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Nature</p>
				</a>
				<a class="col" data-gallery="gallery-2a" href="images/pictures/2t.jpg" title="Smoke Flow">
					<img src="images/empty.png" data-src="images/pictures/2t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Smoke Flow</p>
				</a>
				<a class="col" data-gallery="gallery-2a" href="images/pictures/4t.jpg" title="Color Doughnuts">
					<img src="images/empty.png" data-src="images/pictures/4s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Color Doughnuts</p>
				</a>
				<a class="col" data-gallery="gallery-2a" href="images/pictures/7t.jpg" title="Model Portrait">
					<img src="images/empty.png" data-src="images/pictures/7t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Selfie</p>
				</a>
				<a class="col" data-gallery="gallery-2a" href="images/pictures/11t.jpg" title="Red Leafs">
					<img src="images/empty.png" data-src="images/pictures/11s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Nature</p>
				</a>
				<a class="col" data-gallery="gallery-2a" href="images/pictures/2t.jpg" title="Smoke Flow">
					<img src="images/empty.png" data-src="images/pictures/2t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Smoke Flow</p>
				</a>
				<a class="col" data-gallery="gallery-2a" href="images/pictures/4t.jpg" title="Color Doughnuts">
					<img src="images/empty.png" data-src="images/pictures/4s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-2">Color Doughnuts</p>
				</a>
			</div>
			<div class="divider mt-3"></div>
			<a href="#" data-bs-dismiss="offcanvas" class="btn btn-full gradient-red shadow-bg shadow-bg-s">Close Album</a>
		</div>
	</div>

	<!-- Modal 1-->
	<div class="offcanvas offcanvas-modal rounded-m offcanvas-detached" style="width:300px" id="menu-gallery-5">
		<div class="content mb-0">
			<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">3 x 3 Image Grid</h5>
			<h1 class="font-24 font-800 mb-2">Album Thumbs</h1>
			<p>
				Simple thumbnails with caption attached to them. These will all open an album gallery when tapped.
			</p>
			<div class="row text-center row-cols-3 mb-0">
				<a class="col" data-gallery="gallery-1b" href="images/pictures/7t.jpg" title="Portrait">
					<img src="images/empty.png" data-src="images/pictures/7t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Portrait</p>
				</a>
				<a class="col" data-gallery="gallery-1b" href="images/pictures/10t.jpg" title="Abstracts">
					<img src="images/empty.png" data-src="images/pictures/10s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Abstract</p>
				</a>
				<a class="col" data-gallery="gallery-1b" href="images/pictures/11t.jpg" title="Red Leafs">
					<img src="images/empty.png" data-src="images/pictures/11s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Red Leafs</p>
				</a>
				<a class="col" data-gallery="gallery-1b" href="images/pictures/23t.jpg" title="Gamer Girl">
					<img src="images/empty.png" data-src="images/pictures/23t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Gamer Girl</p>
				</a>
				<a class="col" data-gallery="gallery-1b" href="images/pictures/14t.jpg" title="Jelly Fish">
					<img src="images/empty.png" data-src="images/pictures/14s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Jelly Fish</p>
				</a>
				<a class="col" data-gallery="gallery-1b" href="images/pictures/3t.jpg" title="Ice Cube">
					<img src="images/empty.png" data-src="images/pictures/3s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Ice Cube</p>
				</a>
			</div>
			<a href="#" data-bs-dismiss="offcanvas" class="btn btn-full gradient-red shadow-bg shadow-bg-s mb-4">Close Album</a>
		</div>
	</div>

	<!-- Modal 2-->
	<div class="offcanvas offcanvas-modal rounded-m offcanvas-detached" style="width:300px" id="menu-gallery-6">
		<div class="content mb-0">
			<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">2 x 2 Image Grid</h5>
			<h1 class="font-24 font-800 mb-3">Album Thumbs</h1>
			<p>
				Simple thumbnails with caption attached to them. These will all open an album gallery when tapped.
			</p>

			<div class="row text-center row-cols-2 mb-0">
				<a class="col" data-gallery="gallery-2b" href="images/pictures/7t.jpg" title="Model Portrait">
					<img src="images/empty.png" data-src="images/pictures/7t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Selfie</p>
				</a>
				<a class="col" data-gallery="gallery-2b" href="images/pictures/11t.jpg" title="Red Leafs">
					<img src="images/empty.png" data-src="images/pictures/11s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Nature</p>
				</a>
				<a class="col" data-gallery="gallery-2b" href="images/pictures/2t.jpg" title="Smoke Flow">
					<img src="images/empty.png" data-src="images/pictures/2t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Smoke Flow</p>
				</a>
				<a class="col" data-gallery="gallery-2b" href="images/pictures/4t.jpg" title="Color Doughnuts">
					<img src="images/empty.png" data-src="images/pictures/4s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Color Doughnuts</p>
				</a>
			</div>
			<a href="#" data-bs-dismiss="offcanvas" class="btn btn-full gradient-red shadow-bg shadow-bg-s mb-4">Close Album</a>
		</div>
	</div>

	<!-- Top 1-->
	<div class="offcanvas offcanvas-top rounded-m offcanvas-detached" style="height:480px" id="menu-gallery-7">
		<div class="content mb-0">
			<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">3 x 3 Image Grid</h5>
			<h1 class="font-24 font-800 mb-2">Album Thumbs</h1>
			<p>
				Simple thumbnails with caption attached to them. These will all open an album gallery when tapped.
			</p>
			<div class="row text-center row-cols-3 mb-0">
				<a class="col" data-gallery="gallery-1bc" href="images/pictures/7t.jpg" title="Portrait">
					<img src="images/empty.png" data-src="images/pictures/7t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Portrait</p>
				</a>
				<a class="col" data-gallery="gallery-1bc" href="images/pictures/10t.jpg" title="Abstracts">
					<img src="images/empty.png" data-src="images/pictures/10s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Abstract</p>
				</a>
				<a class="col" data-gallery="gallery-1bc" href="images/pictures/11t.jpg" title="Red Leafs">
					<img src="images/empty.png" data-src="images/pictures/11s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Red Leafs</p>
				</a>
				<a class="col" data-gallery="gallery-1bc" href="images/pictures/23t.jpg" title="Gamer Girl">
					<img src="images/empty.png" data-src="images/pictures/23t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Gamer Girl</p>
				</a>
				<a class="col" data-gallery="gallery-1bc" href="images/pictures/14t.jpg" title="Jelly Fish">
					<img src="images/empty.png" data-src="images/pictures/14s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Jelly Fish</p>
				</a>
				<a class="col" data-gallery="gallery-1bc" href="images/pictures/3t.jpg" title="Ice Cube">
					<img src="images/empty.png" data-src="images/pictures/3s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Ice Cube</p>
				</a>
			</div>
			<a href="#" data-bs-dismiss="offcanvas" class="btn btn-full gradient-red shadow-bg shadow-bg-s mb-4">Close Album</a>
		</div>
	</div>

	<!-- Top 2-->
	<div class="offcanvas offcanvas-top rounded-m offcanvas-detached" style="height:600px" id="menu-gallery-8">
		<div class="content mb-0">
			<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">2 x 2 Image Grid</h5>
			<h1 class="font-24 font-800 mb-3">Album Thumbs</h1>
			<p>
				Simple thumbnails with caption attached to them. These will all open an album gallery when tapped.
			</p>

			<div class="row text-center row-cols-2 mb-0">
				<a class="col" data-gallery="gallery-2bd" href="images/pictures/7t.jpg" title="Model Portrait">
					<img src="images/empty.png" data-src="images/pictures/7t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Selfie</p>
				</a>
				<a class="col" data-gallery="gallery-2bd" href="images/pictures/11t.jpg" title="Red Leafs">
					<img src="images/empty.png" data-src="images/pictures/11s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Nature</p>
				</a>
				<a class="col" data-gallery="gallery-2bd" href="images/pictures/2t.jpg" title="Smoke Flow">
					<img src="images/empty.png" data-src="images/pictures/2t.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Smoke Flow</p>
				</a>
				<a class="col" data-gallery="gallery-2bd" href="images/pictures/4t.jpg" title="Color Doughnuts">
					<img src="images/empty.png" data-src="images/pictures/4s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
					<p class="font-600 color-theme font-12 pb-3">Color Doughnuts</p>
				</a>
			</div>
			<a href="#" data-bs-dismiss="offcanvas" class="btn btn-full gradient-red shadow-bg shadow-bg-s mb-4">Close Album</a>
		</div>
	</div>

</div>
<!--End of Page ID-->
</body>
