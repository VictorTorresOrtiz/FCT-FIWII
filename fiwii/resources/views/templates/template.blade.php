<!DOCTYPE HTML>
<html lang="es">
<head>
    <!-- Display -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/logo/favicon.ico') }}" type="image/x-icon" />
    <!-- Identity -->
    <title>Fiwii Systems</title>
    <!-- Vendor Style Sheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/preloader.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/font-family.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/menu-engine.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/menu-grid.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/dynamic-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/bricklayer.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/lightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/aos.min.css') }}" />
    <!-- Main Style Sheet -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/theme.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/core.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}" />
    <!-- Vendor JavaScript -->
    <script defer src="{{ URL::asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/preloader.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/inview.min.js ') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/menu-engine.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/menu-grid.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/swiper.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/anime.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/dynamic-slider.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/shuffle.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/stickybits.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/bricklayer.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/lightbox.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/typed.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/progressbar.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/map-styles.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/magnetic-effect.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/gsap.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/aos.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/lax.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/vendor/cursor-effect.min.js') }}"></script>
    <script defer src="{{ URL::asset('assets/js/custom.js') }}"></script>
    <!-- Main JavaScript -->
    <script defer src="{{ URL::asset('assets/js/main.js') }}"></script>
</head>
<body class="shock-body">
    @yield('index')
    <!-- Footer -->
    <footer id="footer" class="shock-footer scheme-1 primary">
        <div class="footer-content focus-trigger">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footer-item">
                            <!-- Brand -->
                            <a href="{{ url('/') }}" class="footer-brand">
                                <img src="{{ URL::asset('assets/images/logo/logo_white_transparent.png') }}" alt="Shock Theme" class="logo" />
                                <span class="logo-after-text">Fiwii</span>
                            </a>
                            <!-- Text -->
                            <div class="footer-text">
                                <p>The Future is Now</p>
                            </div>
                        </div>
                        <div class="footer-item">
                            <!-- Icon list -->
                            <div class="list-wrapper">
                                <ul class="icon-h-list">
                                    <li class="item ms-0">
                                        <a href="https://es-es.facebook.com/" target="__blank" class="link gray accent-hover hover-rotate"><i class="icon fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="item">
                                        <a href="https://twitter.com/" target="__blank" class="link gray accent-hover hover-rotate"><i class="icon fab fa-twitter"></i></a>
                                    </li>
                                    <li class="item">
                                        <a href="https://www.linkedin.com/" target="__blank" class="link gray accent-hover hover-rotate"><i class="icon fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-item">
                            <!-- Button -->
                            <div class="hover-up-down">
                                <a href="tel:+34random" class="button outline rounded gray accent-hover">
                                    <i class="fa-solid fa-phone button-icon left-icon gray white-hover"></i>
                                    <span class="button-text gray white-hover">+34 691 333 444</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footer-item">
                            <h6 class="title">Menu</h6>
                            <!-- Links list -->
                            <ul class="nav-list list-unstyled">
                                <li class="nav-item">
                                    <a href="{{ url('Fiwii-app') }}" class="nav-link">
                                        <span class="text">Fiwii App</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#about" class="nav-link">
                                        <span class="text">Sobre Nosotros</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#pricing" class="nav-link">
                                        <span class="text">Precios</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footer-item">
                            <h6 class="title">Info</h6>
                            <ul class="nav-list list-unstyled">
                                <li class="nav-item">
                                    <a href="https://policies.google.com/terms?hl=es" target="__blank" class="nav-link">
                                        <span class="text">Términos de uso</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://policies.google.com/privacy?hl=es" target="__blank" class="nav-link">
                                        <span class="text">Aviso legal</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footer-item">
                            <h6 class="title">Newsletter</h6>
                            <!-- Text -->
                            <div class="footer-text">
                                <p>Suscríbete a nuestro boletín y mantente al día con lo que sucede en el mundo.</p>
                                <p>Al enviar este formulario, usted acepta los <a href="https://policies.google.com/terms?hl=es" target="__blank"
                                        class="link gray accent-hover"><u>terminos de uso</u>.</a></p>
                            </div>
                            <!-- Form -->
                            <div class="form-area scheme-2">
                                <form class="form-fields needs-validation" novalidate="novalidate">
                                    <div class="form-row row has-icon">
                                        <div class="form-col form-floating">
                                            <button class="button overlay-button"><img class="overlay-image-icon" src="assets/svg/send-outline.svg" alt="Icon name" data-shock-icon="32" /></button>
                                            <input id="InputFloatingFooter" class="form-control focus-trigger-field" name="InputFloatingFooter" placeholder="Type your email..." required>
                                            <label for="InputFloatingFooter" class="form-label">Email...</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="text">© 2023 - All rights reserved. Ilerna Daw Team</div>
        </div>
    </footer>
</body>
</html>
