@extends('templates.general')
<body class="theme-light">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <!-- Header -->
    <div class="header-bar header-fixed header-app header-bar-detached">
        <a data-bs-toggle="offcanvas" data-bs-target="#menu-main" href="#"><i class="bi bi-list color-theme"></i></a>
        <a href="#" class="header-title color-theme">Features</a>
        <a data-bs-toggle="offcanvas" data-bs-target="#menu-color" href="#"><i class="bi bi-palette-fill font-13 color-highlight"></i></a>
        <a href="#" class="show-on-theme-light" data-toggle-theme><i class="bi bi-moon-fill font-13"></i></a>
        <a href="#" class="show-on-theme-dark" data-toggle-theme ><i class="bi bi-lightbulb-fill color-yellow-dark font-13"></i></a>
    </div>

	<!-- Footer Bar-->
    <div id="footer-bar" class="footer-bar footer-bar-detached">
		<a href="index-pages.html" class="active-nav"><i class="bi bi-heart-fill font-15"></i><span>Pages</span></a>
        <a href="index-components.html"><i class="bi bi-star-fill font-17"></i><span>Features</span></a>
        <a href="index.html"><i class="bi bi-house-fill font-16"></i><span>Home</span></a>
        <a href="index-media.html"><i class="bi bi-image font-16"></i><span>Media</span></a>
        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-main"><i class="bi bi-list"></i><span>Menu</span></a>
    </div>

	<!-- Main Sidebar-->
	<div id="menu-main" data-menu-active="nav-pages" data-menu-load="menu-main.html"
		style="width:280px;" class="offcanvas offcanvas-start offcanvas-detached rounded-m">
	</div>
	<!-- Menu Highlights-->
	<div id="menu-color" data-menu-load="menu-highlights.html"
		style="height:340px" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
	</div>

    <!-- Your Page Content Goes Here-->
    <div class="page-content header-clear-medium">

		<div class="card card-style">
			<div class="card-body text-center">
				<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">Bootstrap 5 & Vanilla JS</h5>
				<h1>Duo Pages</h1>
				<p class="mb-3">
					Ready built for you to use. Add any extra component you want from the Features page.
				</p>
			</div>
		</div>

		<div class="card card-style">
			<div class="content mb-0">
				<h6 class="text-uppercase mt-n2">Site Pages</h6>
				<div class="list-group list-custom list-group-m list-group-flush rounded-xs check-visited">
					<a href="page-about.html" class="list-group-item"><i class="has-bg rounded-s bi bg-blue-dark bi-person-fill"></i><div>About</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-careers.html" class="list-group-item"><i class="has-bg rounded-s bi bg-green-dark bi-check-circle-fill"></i><div>Careers</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-team.html" class="list-group-item"><i class="has-bg rounded-s bi bg-red-dark bi-person-square"></i><div>Team Page</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-timeline-center.html" class="list-group-item"><i class="has-bg rounded-s bi bg-teal-dark bi-list-columns"></i><div>Timeline Cards</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-timeline-left.html" class="list-group-item"><i class="has-bg rounded-s bi bg-yellow-dark bi-list-columns"></i><div>Timeline Lists</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-goals.html" class="list-group-item"><i class="has-bg rounded-s bi bg-magenta-dark bi-arrows-fullscreen"></i><div>Task Progress</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-terms.html" class="list-group-item"><i class="has-bg rounded-s bi bg-orange-dark bi-type-bold"></i><div>Terms of Service</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-activity.html" class="list-group-item"><i class="has-bg rounded-s bi bg-pink-dark bi-exclamation-circle-fill"></i><div>Notifications</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-contact.html" class="list-group-item"><i class="has-bg rounded-s bi bg-mint-dark bi-envelope"></i><div>Contact</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-article-list.html" class="list-group-item"><i class="has-bg rounded-s bi bg-green-dark bi-newspaper"></i><div>Article Lists</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-article-cards.html" class="list-group-item"><i class="has-bg rounded-s bi bg-blue-dark bi-square-fill"></i><div>Article Cards</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-profile-1.html" class="list-group-item"><i class="has-bg rounded-s bi bg-blue-dark bi-person-circle"></i><div>Profile Page 1</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-profile-2.html" class="list-group-item"><i class="has-bg rounded-s bi bg-mint-dark bi-person-circle"></i><div>Profile Page 2</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-profile-admin.html" class="list-group-item"><i class="has-bg rounded-s bi bg-gray-dark bi-gear"></i><div>Profile Admin</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-status.html" class="list-group-item"><i class="has-bg rounded-s bi bg-red-dark bi-server"></i><div>System Status</div><i class="bi bi-chevron-right"></i></a>
					<a href="walkthrough.html" class="list-group-item"><i class="has-bg rounded-s bi bg-yellow-dark bi-brightness-high-fill"></i><div>Starter Page</div><span class="badge bg-green-dark">NEW - v3.1</span></a>
					<a href="page-vcard.html" class="list-group-item"><i class="has-bg rounded-s bi bg-brown-dark bi-chevron-contract"></i><div>V-Card</div><i class="bi bi-chevron-right"></i></a>
				</div>
			</div>
			<div class="content mb-0 mt-4">
				<h6 class="text-uppercase mt-n2">System Pages</h6>
				<div class="list-group list-custom list-group-m list-group-flush rounded-xs check-visited">
					<a href="page-otp-1.html" class="list-group-item"><i class="has-bg rounded-s bi bg-green-dark bi-code"></i><div>One Time Passcode - 1</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-otp-2.html" class="list-group-item"><i class="has-bg rounded-s bi bg-red-dark bi-code-slash"></i><div>One Time Passcode - 2</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-login-1.html" class="list-group-item"><i class="has-bg rounded-s bi bg-blue-dark bi-box-arrow-in-left"></i><div>Sign In / Login - 1</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-login-2.html" class="list-group-item"><i class="has-bg rounded-s bi bg-yellow-dark bi-box-arrow-in-right"></i><div>Sign In / Login - 2</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-register-1.html" class="list-group-item"><i class="has-bg rounded-s bi bg-orange-dark bi-lock-fill"></i><div>Sign Up / Register - 1</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-register-2.html" class="list-group-item"><i class="has-bg rounded-s bi bg-brown-dark bi-lock"></i><div>Sign Up / Register - 2</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-forgot-1.html" class="list-group-item"><i class="has-bg rounded-s bi bg-teal-dark bi-arrow-clockwise"></i><div>Forgot / Reset - 1</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-forgot-2.html" class="list-group-item"><i class="has-bg rounded-s bi bg-mint-dark bi-arrow-counterclockwise"></i><div>Forgot / Reset - 2</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-maintenance-1.html" class="list-group-item"><i class="has-bg rounded-s bi bg-magenta-dark bi-tools"></i><div>Maintenance - 1</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-maintenance-2.html" class="list-group-item"><i class="has-bg rounded-s bi bg-orange-dark bi-wrench"></i><div>Maintenance - 2</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-soon-1.html" class="list-group-item"><i class="has-bg rounded-s bi bg-brown-dark bi-hourglass"></i><div>Coming Soon - 1</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-soon-2.html" class="list-group-item"><i class="has-bg rounded-s bi bg-gray-dark bi-hourglass"></i><div>Coming Soon - 2</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-error-1.html" class="list-group-item"><i class="has-bg rounded-s bi bg-red-dark bi-exclamation-circle"></i><div>Error Page / 404 - 1</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-error-2.html" class="list-group-item"><i class="has-bg rounded-s bi bg-orange-dark bi-exclamation-diamond"></i><div>Error Page / 404 - 2</div><i class="bi bi-chevron-right"></i></a>
				</div>
			</div>
			<div class="content mb-0 mt-4 pt-2">
				<h6 class="text-uppercase mt-n2">Chat Pages <span class="badge bg-green-dark float-end">NEW - v3.2</span></h6>
				<div class="list-group list-custom list-group-m list-group-flush rounded-xs check-visited">
					<a href="page-chat-list-2.html" class="list-group-item"><i class="has-bg rounded-s bi bg-green-dark bi-list-ul"></i><div>Chat List Small</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-chat-list-1.html" class="list-group-item"><i class="has-bg rounded-s bi bg-red-dark bi-list-stars"></i><div>Chat List Large</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-chat-message-2.html" class="list-group-item"><i class="has-bg rounded-s bi bg-blue-dark bi-chat-fill"></i><div>Chat Bubbles Texts</div><i class="bi bi-chevron-right"></i></a>
					<a href="page-chat-message-1.html" class="list-group-item"><i class="has-bg rounded-s bi bg-green-dark bi-chat-right-fill"></i><div>Chat Bubble Images</div><i class="bi bi-chevron-right"></i></a>
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
</div>
<!--End of Page ID-->
</body>
