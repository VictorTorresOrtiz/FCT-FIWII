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
        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#modal-search"><i class="font-14 bi bi-search"></i></a>
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

    <!--Search Modal-->
    <div class="offcanvas offcanvas-modal rounded-m offcanvas-detached bg-theme" style="width:340px" id="modal-search">
		<div class="content">
			<div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
				<i class="bi bi-search font-13"></i>
				<input type="text" class="form-control rounded-xs" id="c1" placeholder="Nombre Sistema" name="nombre-sistema"/>
				<label for="c1" class="color-theme">Nombre Sistema</label>
			</div>
			<a href="#" class="btn btn-full gradient-green shadow-bg shadow-bg-s mt-4">Realizar Busqueda</a>
		</div>
   </div>


	<!-- Main Sidebar-->
	<div id="menu-main" data-menu-active="nav-homes" data-menu-load="{{url('menu-main')}}"
		style="width:280px;" class="offcanvas offcanvas-start offcanvas-detached rounded-m">
	</div>
    <!-- Systems-->
	<div class="page-content header-clear-medium">

		<div class="card card-style">
			<div class="content m-2 p-1">
				<div class="d-flex">
					<div class="align-self-center">
						<img src="images/pictures/3s.jpg" width="50" class="rounded-s me-2">
					</div>
					<div class="align-self-center ps-1">
						<h5 class="mb-n1">Nombre Sistema</h5>
						<p class="font-12">
							Desc Sistema
						</p>
					</div>
					<div class="align-self-center ms-auto">
						<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-new-message">
							<span class="icon icon-xs rounded-s gradient-highlight shadow-bg shadow-bg-xs">
								<i class="bi bi-pencil-square font-16 color-white"></i>
							</span>
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-pdf">
                                <span class="icon icon-xs rounded-s gradient-highlight shadow-bg shadow-bg-xs">
                                    <i class="bi bi-file-earmark-arrow-down font-16 color-white"></i>
                                </span>
                            </a>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Systems-->

<!-- EDIT MODAL-->
<div id="menu-new-message" style="height:410px" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m bg-theme">
    <div class="content">
        <div class="d-flex pb-2">
            <div class="align-self-center">
                <h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">Just tap and</h5>
                <h1 class="font-700">New Message</h1>
            </div>
            <div class="align-self-center ms-auto">
                <a href="#"  data-bs-dismiss="offcanvas" class="icon icon-m"><i class="bi bi-x-circle-fill color-red-dark font-18 me-n4"></i></a>
            </div>
        </div>
        <div class="form-custom form-label mb-3 mt-3">
            <input type="text" class="form-control rounded-xs" id="c1" placeholder="John Doe" pattern="[A-Za-z ]{1,32}" required />
            <div class="valid-feedback">Excellent!<!-- text for field valid--></div>
            <div class="invalid-feedback">Name is Missing or Invalid</div>
            <span>(required)</span>
        </div>
        <div class="form-custom form-label mb-3">
            <textarea class="form-control rounded-xs" placeholder="Leave a comment here" id="c7" style="min-height:150px;"></textarea>
            <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
        </div>
        <a href="#" class="btn btn-full btn-m rounded-sm gradient-highlight shadow-bg shadow-bg-xs px-5 mb-0 mt-4">Send Message</a>
    </div>
</div>
<!-- EDIT MODAL-->

<!-- Info Modal PDF-->
<div class="offcanvas offcanvas-modal rounded-m offcanvas-detached bg-theme" style="width:340px" id="menu-pdf">
    <div class="gradient-blue px-3 py-3">
        <div class="d-flex mt-1">
            <div class="align-self-center">
                 <i class="bi bi-info-circle-fill font-22 pe-2 scale-box color-white"></i>
             </div>
            <div class="align-self-center">
                <h1 class="font-800 color-white mb-0">Exportar Datos a PDF </h1>
            </div>
        </div>
        <p class="color-white opacity-80 pt-2">
            Importación completa de datos de (Nombre de Sistema)
        </p>
        <a href="#"  data-bs-dismiss="offcanvas" class="default-link btn btn-full btn-s bg-white color-black">Importar Ahora</a>
    </div>
</div>
<!-- Info Modal PDF-->
</div>
</body>
