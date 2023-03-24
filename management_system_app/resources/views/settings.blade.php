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

    <!-- Header -->
    <div class="header-bar header-fixed header-app header-bar-detached">
		<a data-back-button href="#"><i class="bi bi-caret-left-fill font-11 color-theme ps-2"></i></a>
		<a href="#" class="header-title color-theme font-13">Volver al Inicio</a>
		<a data-bs-toggle="offcanvas" data-bs-target="#menu-color" href="#"><i class="bi bi-palette-fill font-13 color-highlight"></i></a>
		<a href="#" class="show-on-theme-light" data-toggle-theme><i class="bi bi-moon-fill font-13"></i></a>
		<a href="#" class="show-on-theme-dark" data-toggle-theme ><i class="bi bi-lightbulb-fill color-yellow-dark font-13"></i></a>
	</div>

    <!-- Footer Bar-->
    <div id="footer-bar" class="footer-bar footer-bar-detached">
        <a href="{{url('profile')}}"><i class="bi bi-person-fill font-15"></i><span>Perfil</span></a>
        <a href="#"><i class="bi bi-qr-code-scan font-17"></i><span>Escaner</span></a>
        <a href="{{url('/')}} " class="active-nav"><i class="bi bi-house-fill font-16"></i><span>Inicio</span></a>
        <a href="#"><i class="bi bi-image font-16"></i><span>Media</span></a>
        <a href="{{url('settings')}}"><i class="bi bi-gear font-16"></i><span>Configuración</span></a>
    </div>

	<!-- Main Sidebar-->
	<div id="menu-main" data-menu-active="nav-comps" data-menu-load="menu-main.html"
		style="width:280px;" class="offcanvas offcanvas-start offcanvas-detached rounded-m">
	</div>


    <!-- Content-->
    <div class="page-content header-clear-medium">

		<div class="card card-style">
			<div class="content">
				<h6 class="font-700 mb-n1 color-highlight">Configuración</h6>
				<h1 class="pb-2">Configuración Global</h1>
				<p class="mb-2">
					Configure a su estilo Fiwoo.
				</p>
				<div class="divider mt-4 mb-0"></div>

				<div class="list-group list-custom list-group-m rounded-xs list-group-flush bg-theme mb-n3">
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-share-list" class="list-group-item">
						<i class="bi bi-facebook color-facebook font-15"></i>
						<div>Compartir Fiwoo</div>
						<i class="bi bi-chevron-right pe-1"></i>
					</a>
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-share-thumbs" class="list-group-item">
						<i class="bi bi-translate color-twitter font-15"></i>
						<div>Idiomas</div>
						<i class="bi bi-chevron-right pe-1"></i>
					</a>
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-call" class="list-group-item">
						<i class="bi bi-telephone-fill color-green-dark font-15"></i>
						<div>Call</div>
						<i class="bi bi-chevron-right pe-1"></i>
					</a>
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-login" class="list-group-item">
						<i class="bi bi-unlock-fill color-red-dark font-15"></i>
						<div>Login</div>
						<i class="bi bi-chevron-right pe-1"></i>
					</a>
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-register" class="list-group-item">
						<i class="bi bi-lock-fill color-blue-dark font-15"></i>
						<div>Register</div>
						<i class="bi bi-chevron-right pe-1"></i>
					</a>
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-forgot" class="list-group-item">
						<i class="bi bi-question-circle-fill color-teal-dark font-15"></i>
						<div>Forgot</div>
						<i class="bi bi-chevron-right pe-1"></i>
					</a>
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-warning" class="list-group-item">
						<i class="bi bi-x-circle-fill color-red-dark font-15"></i>
						<div>Warning</div>
						<i class="bi bi-chevron-right pe-1"></i>
					</a>
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-information" class="list-group-item">
						<i class="bi bi-info-circle-fill color-blue-dark font-15"></i>
						<div>Information</div>
						<i class="bi bi-chevron-right pe-1"></i>
					</a>
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-success" class="list-group-item">
						<i class="bi bi-check-circle-fill color-green-dark font-15"></i>
						<div>Success</div>
						<i class="bi bi-chevron-right pe-1"></i>
					</a>
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-video" class="list-group-item">
						<i class="bi bi-youtube color-red-dark font-15"></i>
						<div>Videos</div>
						<i class="bi bi-chevron-right pe-1"></i>
					</a>
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-gallery" class="list-group-item">
						<i class="bi bi-image color-magenta-dark font-15"></i>
						<div>Gallery</div>
						<i class="bi bi-chevron-right pe-1"></i>
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

	<!-- Register-->
	<div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached bg-theme" id="menu-register">
		<div class="content">
			<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">Welcome</h5>
			<h1 class="font-24 font-800 mb-3">Register</h1>
			<div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
				<i class="bi bi-person-circle font-13"></i>
				<input type="text" class="form-control rounded-xs" id="c1" placeholder="Username" />
				<label for="c1" class="color-theme">Username</label>
				<span>(required)</span>
			</div>
			<div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
				<i class="bi bi-at font-17"></i>
				<input type="text" class="form-control rounded-xs" id="c1" placeholder="Email" />
				<label for="c1" class="color-theme">Email</label>
				<span>(required)</span>
			</div>
			<div class="form-custom form-label form-border form-icon mb-4 bg-transparent">
				<i class="bi bi-asterisk font-13"></i>
				<input type="password" class="form-control rounded-xs" id="c2" placeholder="Password" />
				<label for="c2" class="color-theme">Password</label>
				<span>(required)</span>
			</div>
			<a href="#" class="btn btn-full gradient-blue shadow-bg shadow-bg-s mt-4">SIGN IN</a>
			<div class="row">
				<div class="col-6 text-start">
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-forgot" class="font-11 color-theme opacity-40 pt-3 d-block">Forgot Password?</a>
				</div>
				<div class="col-6 text-end">
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-login" class="font-11 color-theme opacity-40 pt-3 d-block">Login Account</a>
				</div>
			</div>
		</div>
   </div>


	<div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached bg-theme" id="menu-forgot">
		<div class="content">
			<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">Welcome</h5>
			<h1 class="font-24 font-800 mb-3">Forgot</h1>
			<div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
				<i class="bi bi-at font-14"></i>
				<input type="text" class="form-control rounded-xs" id="c1" placeholder="Email Address" />
				<label for="c1" class="color-theme">Email Address</label>
				<span>(required)</span>
			</div>
			<a href="#" class="btn btn-full gradient-red shadow-bg shadow-bg-s mt-4">SIGN IN</a>
			<div class="row">
				<div class="col-6 text-start">
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-login" class="font-11 color-theme opacity-40 pt-3 d-block">Account Login</a>
				</div>
				<div class="col-6 text-end">
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-register" class="font-11 color-theme opacity-40 pt-3 d-block">Create Account</a>
				</div>
			</div>
		</div>
   </div>

    <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached bg-theme" id="menu-login">
		<div class="content">
			<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">Welcome</h5>
			<h1 class="font-24 font-800 mb-3">Login</h1>
			<div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
				<i class="bi bi-person-circle font-13"></i>
				<input type="text" class="form-control rounded-xs" id="c1" placeholder="Username" />
				<label for="c1" class="color-theme">Username</label>
				<span>(required)</span>
			</div>
			<div class="form-custom form-label form-border form-icon mb-4 bg-transparent">
				<i class="bi bi-asterisk font-13"></i>
				<input type="password" class="form-control rounded-xs" id="c2" placeholder="Password" />
				<label for="c2" class="color-theme">Password</label>
				<span>(required)</span>
			</div>
			<a href="#" class="btn btn-full gradient-green shadow-bg shadow-bg-s mt-4">SIGN IN</a>
			<div class="row">
				<div class="col-6 text-start">
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-forgot" class="font-11 color-theme opacity-40 pt-3 d-block">Forgot Password?</a>
				</div>
				<div class="col-6 text-end">
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-register" class="font-11 color-theme opacity-40 pt-3 d-block">Create Account</a>
				</div>
			</div>
		</div>
   </div>

   <!-- Login -->
   <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached bg-theme" id="menu-share-list">
		<div class="content">
			<div class="d-flex pb-2">
				<div class="align-self-center">
					<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">Just tap and</h5>
					<h1 class="font-700">Share Duo</h1>
				</div>
				<div class="align-self-center ms-auto">
					<a href="#"  data-bs-dismiss="offcanvas" class="icon icon-m"><i class="bi bi-x-circle-fill color-red-dark font-18 me-n4"></i></a>
				</div>
			</div>
			<div class="list-group list-custom list-group-m rounded-xs list-group-flush bg-theme">
				<a href="auto_generated" class="shareToFacebook list-group-item">
					<i class="bi bi-facebook color-facebook font-16"></i>
					<div>Facebook</div>
					<i class="bi bi-chevron-right pe-1"></i>
				</a>
				<a href="auto_generated" class="shareToTwitter list-group-item">
					<i class="bi bi-twitter color-twitter font-16"></i>
					<div>Twitter</div>
					<i class="bi bi-chevron-right pe-1"></i>
				</a>
				<a href="auto_generated" class="shareToLinkedIn list-group-item">
					<i class="bi bi-linkedin color-linkedin font-16"></i>
					<div>LinkedIn</div>
					<i class="bi bi-chevron-right pe-1"></i>
				</a>
				<a href="auto_generated" class="shareToPinterest list-group-item">
					<i class="bi bi-pinterest color-pinterest font-16"></i>
					<div>Pinterest</div>
					<i class="bi bi-chevron-right pe-1"></i>
				</a>
				<a href="auto_generated" class="shareToWhatsApp list-group-item">
					<i class="bi bi-whatsapp color-whatsapp font-16"></i>
					<div>WhatsApp</div>
					<i class="bi bi-chevron-right pe-1"></i>
				</a>
				<a href="auto_generated" class="shareToMail list-group-item">
					<i class="bi bi-envelope-open-fill color-blue-dark font-16"></i>
					<div>Mail</div>
					<i class="bi bi-chevron-right pe-1"></i>
				</a>
			</div>
		</div>
   </div>


   <!-- Languages Thumbs-->
   <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached bg-theme" id="menu-share-thumbs">
	   <div class="content">
		   <div class="text-center pb-3">
			   <h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">Selecciona</h5>
			   <h1 class="font-700">Para cambiar idioma</h1>
		   </div>
		   <div class="d-flex px-4">
			   <div class="me-auto">
				   <a href="#" class="shareToFacebook icon icon-xl rounded-m bg-facebook"><i class="bi bi-globe font-18"></i></a>
				   <span class="d-block text-center font-10 color-theme font-600 text-uppercase pt-1">Ingles</span>
			   </div>
			   <div class="m-auto">
				   <a href="#" class="icon icon-xl rounded-m bg-twitter"><i class="bi bi-globe font-18"></i></a>
				   <span class="d-block text-center font-10 color-theme font-600 text-uppercase pt-1">Francés</span>
			   </div>
			   <div class="ms-auto">
				   <a href="#" class=" icon icon-xl rounded-m bg-linkedin"><i class="bi bi-globe font-18"></i></a>
				   <span class="d-block text-center font-10 color-theme font-600 text-uppercase pt-1">Aleman</span>
			   </div>
		   </div>
	   </div>
  </div>

   <!-- Call -->
   <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached bg-theme" id="menu-call">
	   <div class="content">
		   <div class="d-flex pb-2">
			   <div class="align-self-center">
				   <h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">Just tap to</h5>
				   <h1 class="font-700">Call Now</h1>
			   </div>
			   <div class="align-self-center ms-auto">
				   <a href="#"  data-bs-dismiss="offcanvas" class="icon icon-m"><i class="bi bi-x-circle-fill color-red-dark font-18 me-n4"></i></a>
			   </div>
		   </div>
		   <p>
			   We're always here to help. Give us a Call Today. Just tap the button and get in touch with us.
		   </p>
		   <a href="tel:+1 234 567 8021" class="default-link btn btn-full btn-s gradient-green shadow-bg shadow-bg-s">Tap to Call</a>
	   </div>
  </div>


   <!-- Success-->
   <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-success">
	   <div class="gradient-green px-3 py-3">
		   <div class="d-flex mt-1">
			   <div class="align-self-center">
					<i class="bi bi-check-circle-fill font-22 pe-2 scale-box color-white"></i>
				</div>
			   <div class="align-self-center">
				   <h1 class="font-700 color-white mb-0">Success</h1>
			   </div>
		   </div>
		   <p class="color-white opacity-90 pt-2">
			   Your task was successfully completed! Great work! Tap the button to dismiss this box.
		   </p>
		   <a href="#"  data-bs-dismiss="offcanvas" class="default-link btn btn-full btn-s bg-white color-black">Great</a>
	   </div>
  </div>

   <!-- Warning-->
   <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-warning">
	   <div class="gradient-red px-3 py-3">
		   <div class="d-flex mt-1">
			   <div class="align-self-center">
					<i class="bi bi-x-circle-fill font-22 pe-2 scale-box color-white"></i>
				</div>
			   <div class="align-self-center">
				   <h1 class="font-800 color-white mb-0">Warning</h1>
			   </div>
		   </div>
		   <p class="color-white opacity-60 pt-2">
			   Something's not right. You can add extra actions to this sheet or just tap to dismiss.
		   </p>
		   <a href="#"  data-bs-dismiss="offcanvas" class="default-link btn btn-full btn-s bg-white color-black">Try again...</a>
	   </div>
  </div>

   <!-- Info-->
   <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-information">
	   <div class="gradient-blue px-3 py-3">
		   <div class="d-flex mt-1">
			   <div class="align-self-center">
					<i class="bi bi-info-circle-fill font-22 pe-2 scale-box color-white"></i>
				</div>
			   <div class="align-self-center">
				   <h1 class="font-800 color-white mb-0">Did you Know?</h1>
			   </div>
		   </div>
		   <p class="color-white opacity-80 pt-2">
			   Enabled is the best selling author on the Envato Market Mobile category. We love our customers and provide
			   the best support!
		   </p>
		   <a href="#"  data-bs-dismiss="offcanvas" class="default-link btn btn-full btn-s bg-white color-black">Awesome</a>
	   </div>
  </div>

   <!-- Video-->
   <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-video">
	   <div class='responsive-iframe max-iframe'><iframe src='https://www.youtube.com/embed/c9MnSeYYtYY' frameborder='0' allowfullscreen></iframe></div>
	   <div class="content mt-n2">
		   <h1 class="font-800 font-22 mt-2 mb-0 pt-3">Watch Now</h1>
		   <p>
		   		It's super easy to embed videos. Just copy the embed!
		   </p>
	   <a href="#" data-bs-dismiss="offcanvas" class="close-menu btn btn-full btn-m shadow-l rounded-s text-uppercase font-600 gradient-green shadow-bg-s shadow-bg mt-n2">Awesome</a>
	   </div>
  </div>

   <!-- Lightbox-->
   <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-gallery">
   		<div class="content">
			<div class="d-flex pb-2">
				   <div class="align-self-center">
					   <h5 class="mb-n2 font-12 color-highlight font-700 text-uppercase pt-1">Just tap to</h5>
					   <h1 class="font-800 font-22">Show Gallery</h1>
				   </div>
				   <div class="align-self-center ms-auto">
					   <a href="#"  data-bs-dismiss="offcanvas" class="icon icon-m"><i class="bi bi-x-circle-fill color-red-dark font-18 me-n4"></i></a>
				   </div>
		    </div>
			<div class="divider"></div>
	   		<div class="row text-center row-cols-3 mb-n3">
			   <a class="col" data-gallery="gallery-1" href="images/pictures/23t.jpg" title="Vynil and Typerwritter">
				   <img src="images/empty.png" data-src="images/pictures/23t.jpg" class="preload-img img-fluid rounded-l" alt="img">
				   <p class="font-600 pb-3">Writer</p>
			   </a>
			   <a class="col" data-gallery="gallery-1" href="images/pictures/14t.jpg" title="Cream Cookie">
				   <img src="images/empty.png" data-src="images/pictures/14s.jpg" class="preload-img img-fluid rounded-l" alt="img">
				   <p class="font-600 pb-3">Cream</p>
			   </a>
			   <a class="col" data-gallery="gallery-1" href="images/pictures/3t.jpg" title="Cookies and Flowers">
				   <img src="images/empty.png" data-src="images/pictures/3s.jpg" class="preload-img img-fluid rounded-l" alt="img">
				   <p class="font-600 pb-3">Cookie</p>
			   </a>
			   <a class="col" data-gallery="gallery-1" href="images/pictures/1t.jpg" title="Vynil and Typerwritter">
				   <img src="images/empty.png" data-src="images/pictures/1t.jpg" class="preload-img img-fluid rounded-l" alt="img">
				   <p class="font-600 pb-3">Writer</p>
			   </a>
			   <a class="col" data-gallery="gallery-1" href="images/pictures/2t.jpg" title="Cream Cookie">
				   <img src="images/empty.png" data-src="images/pictures/2s.jpg" class="preload-img img-fluid rounded-l" alt="img">
				   <p class="font-600 pb-3">Cream</p>
			   </a>
			   <a class="col" data-gallery="gallery-1" href="images/pictures/7t.jpg" title="Cookies and Flowers">
				   <img src="images/empty.png" data-src="images/pictures/7s.jpg" class="preload-img img-fluid rounded-l" alt="img">
				   <p class="font-600 pb-3">Cookie</p>
			   </a>
			   <a class="col" data-gallery="gallery-1" href="images/pictures/9t.jpg" title="Vynil and Typerwritter">
				   <img src="images/empty.png" data-src="images/pictures/9t.jpg" class="preload-img img-fluid rounded-l" alt="img">
				   <p class="font-600 pb-3">Writer</p>
			   </a>
			   <a class="col" data-gallery="gallery-1" href="images/pictures/14t.jpg" title="Cream Cookie">
				   <img src="images/empty.png" data-src="images/pictures/14s.jpg" class="preload-img img-fluid rounded-l" alt="img">
				   <p class="font-600 pb-3">Cream</p>
			   </a>
			   <a class="col" data-gallery="gallery-1" href="images/pictures/13t.jpg" title="Cookies and Flowers">
				   <img src="images/empty.png" data-src="images/pictures/13s.jpg" class="preload-img img-fluid rounded-l" alt="img">
				   <p class="font-600 pb-3">Cookie</p>
			   </a>
		    </div>
	   </div>
  </div>




</div>
</body>
