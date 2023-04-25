<!DOCTYPE HTML>
<html lang="en">

  <!-- Preloader -->
  <div id="preloader" class="preloader" data-delay="0" data-limit="3000">
    <img src="assets/images/logo.svg" class="emblem" alt="Emblem" hidden="hidden" />
  </div>

  <head>

    <!-- Display -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Identity -->
    <title>Fiwii Systems</title>
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/logo/favicon.ico') }}" type="image/x-icon" />
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
    <!-- Main JavaScript -->
    <script defer src="{{ URL::asset('assets/js/main.js') }}"></script>

  </head>

  <body class="shock-body">

    <!-- Popup Box -->
    <div id="popup-box" class="popup-box d-none">
      <div class="card parent">
        <div class="card-body rounded-3 small-shadow text-center bg-color white">
          <h3 class="title max-w-85 mx-auto text-style-11 black">
            <span class="bg-color white">Do you like cookies? 🍪</span>
            <span class="zzz over-text scheme-1 gray"></span>
          </h3>
          <p class="description">We use cookie technology to provide you with a better browsing experience. You accept our terms if you continue to use this site.</p>
          <!-- Button -->
          <div class="button-wrapper align-h-center">
            <a href="#your-link" target="_blank" class="button simple">
              <span class="button-text black black-hover">Read more</span>
            </a>
            <button id="popup-box-dismiss" class="button simple">
              <span class="button-text black black-hover"><mark class="animated-underline accent">Accept terms</mark></span>
              <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Header -->
    <header id="header" class="shock-header">
      <!-- Navbar -->
      <nav id="navbar" class="navbar navbar-expand-lg nfixed-scroll smart-scroll hover-line scheme-2 primary">
        <div class="container">
          <!-- Brand -->
          <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
            data-logo-alt="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
            data-logo-mobile="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
            class="logo" />
        <span class="logo-after-text">Fiwii Dashboard</span>
          </a>
          <!-- Responsive menu toggle -->
          <button class="navbar-toggler" data-bs-target="#navbar-items" data-bs-toggle="collapse" aria-expanded="false">
            <span class="navbar-toggler-icon">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </span>
          </button>
          <!-- Navbar links -->
          <div id="navbar-items" class="collapse navbar-collapse focus-trigger">
            <!-- Responsive search form -->
            <div class="search-bar navbar-collapse-form">
              <div class="form-area d-only-mobile d-none scheme-1">
                <form class="form-fields needs-validation" novalidate="novalidate">
                  <div class="form-row row has-icon">
                    <div class="form-col mb-0 form-floating">
                      <button class="button overlay-button"><img class="overlay-image-icon" src="assets/svg/send-outline.svg" alt="Icon name" data-shock-icon="32" /></button>
                      <input id="InputSearchMobile" class="form-control focus-trigger-field" name="InputSearchMobile" placeholder="Type keywords..." required="required">
                      <label for="InputSearchMobile" class="form-label">Type keywords...</label>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- Link -->
            <ul class="navbar-nav ms-auto">

              <li class="nav-item dropdown has-megamenu hover">
                <a class="nav-link dropdown-toggle has-icon" href="#" data-bs-toggle="dropdown">
                  <span class="text">Configuración</span><img class="image-icon dropdown-icon" src="assets/svg/chevron-down-outline.svg" alt="Icon name" data-shock-icon="32" />
                </a>
                <div class="dropdown-menu megamenu animate fade-down" role="menu">
                  <div class="container">
                    <div class="section-inner-expanded">
                      <div class="horizontal-tab scheme-1 primary">
                        <!-- Tab navigation -->
                        <ul id="elements-tab" class="nav nav-tabs js-tabs-event" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button id="elements-1-tab" class="title nav-link active" aria-selected="true" aria-controls="elements-1" data-bs-target="#elements-1" data-bs-toggle="tab" role="tab">
                              Cuenta
                            </button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button id="elements-2-tab" class="title nav-link" aria-selected="false" aria-controls="elements-2" data-bs-target="#elements-2" data-bs-toggle="tab" role="tab">
                              Fiwii App
                            </button>
                          </li>
                        </ul>
                        <!-- Cuenta Content -->
                        <div class="tab-content">
                          <div id="elements-1" class="tab-pane fade show active" role="tabpanel">
                            <div class="row g-3">
                              <div class="col-12 col-md-6 col-lg-2"></div>
                              <div class="col-12 col-md-6 col-lg-2"></div>
                              <div class="col-12 col-md-6 col-lg-2">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="#" class="nav-link parent">
                                        <span class="text">Actualizar Plan</span>
                                        <span class="badge ms-05 primary-15 primary-15-hover">
                                            <span class="badge-text primary primary-hover">Ofertas</span>
                                          </span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-2">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="#" class="nav-link parent">
                                        <span class="text">Configuración</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-2"></div>
                              <div class="col-12 col-md-6 col-lg-2"></div>
                            </div>
                          </div>
                          <div id="elements-2" class="tab-pane fade" role="tabpanel">
                            <div class="row g-3">
                                <div class="col-12 col-md-6 col-lg-2"></div>
                                <div class="col-12 col-md-6 col-lg-2">
                                    <ul class="nav-list list-unstyled">
                                        <li class="nav-item">
                                          <a href="#" class="nav-link parent">
                                            <span class="text">Gestor de Cuentas</span>
                                          </a>
                                        </li>
                                      </ul>
                                </div>
                                <div class="col-12 col-md-6 col-lg-2">
                                  <div class="megamenu-item">
                                    <ul class="nav-list list-unstyled">
                                      <li class="nav-item">
                                        <a href="#" class="nav-link parent">
                                          <span class="text">Añadir Administrador</span>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-2">
                                  <div class="megamenu-item">
                                    <ul class="nav-list list-unstyled">
                                      <li class="nav-item">
                                        <a href="#" class="nav-link parent">
                                          <span class="text">Añadir Técnico</span>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-2">
                                    <ul class="nav-list list-unstyled">
                                        <li class="nav-item">
                                          <a href="#" class="nav-link parent">
                                            <span class="text">Añadir To-do list</span>
                                          </a>
                                        </li>
                                      </ul>
                                </div>
                                <div class="col-12 col-md-6 col-lg-2"></div>
                              </div>
                            </div>
                        </div>
                    </li>

              <li class="nav-item dropdown has-megamenu hover">
                <a class="nav-link dropdown-toggle has-icon" href="#" data-bs-toggle="dropdown">
                  <span class="text">Sistemas</span><img class="image-icon dropdown-icon" src="assets/svg/chevron-down-outline.svg" alt="Icon name" data-shock-icon="32" />
                </a>
                <div class="dropdown-menu megamenu animate fade-down" role="menu">
                  <div class="container">
                    <div class="section-inner-expanded">
                      <div class="row g-3">
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="megamenu-item">
                            <h6 class="title">Información</h6>
                            <ul class="nav-list list-unstyled">
                              <li class="nav-item">
                                <a href="#" class="nav-link parent">
                                  <span class="text">Listado Sistemas</span>
                                  <em class="tag hover-up-down">sistemas dados de alta</em>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="megamenu-item">
                            <h6 class="title">Descargar Bases de Datos</h6>
                            <ul class="nav-list list-unstyled">
                              <li class="nav-item">
                                <a href="#" class="nav-link">
                                  <span class="text">Sistemas</span>
                                  <em class="tag hover-up-down">Base de Datos de Sistemas</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link">
                                  <span class="text">Usuarios</span>
                                  <em class="tag hover-up-down">Base de Datos de Usuarios</em>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="megamenu-item">
                            <h6 class="title">Añadir Sistemas</h6>
                            <ul class="nav-list list-unstyled">
                              <li class="nav-item">
                                <a href="#" class="nav-link">
                                  <span class="text">Añadir un Sistema</span>
                                  <em class="tag hover-up-down">Dar de alta un sistema</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link">
                                  <span class="text">Eliminar un Sistema</span>
                                  <em class="tag hover-up-down">Elimina un sistema</em>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            <!-- Action -->
            <div class="navbar-action">
              <div class="nav-item">
                <a href="{{url('/')}}"  class="button small-button rounded primary black-hover button-collision">
                  <span class="button-text white white-hover">Volver al inicio </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <!-- Main -->
    <main id="main" class="shock-main">

      <!-- Banner -->
      <section class="shock-section has-holder pt-5 pb-2">
        <div class="container max-w-75">
          <!-- Intro -->
          <div class="basic-intro text-center">
            <h1 class="title black">
              <span class="text-1 text-style-3">Fiwii </span>
              <span class="text-2 text-style-4 text-italic">Project <mark class="animated-underline accent">Admin Panel</mark>.</span>
            </h1>
          </div>
        </div>
      </section>
        <!-- Card boxed -->
        <section class="shock-section pt-5 pb-5">
            <div class="container">
              <div class="row mb-35">
                <div class="col-12 col-md-8"></div>
              <div class="row g-4">
                <div class="col-12 col-md-6">
                  <div class="card boxed parent">
                    <!-- Image -->
                    <div class="image-wrapper shadow rounded">
                      <img src="{{ URL::asset('assets/images/walpapers/dashboardFiwii.gif') }}" alt="Image name" class="image min-vh-50 fit-cover" />
                    </div>
                    <!-- Box -->
                    <div class="card-body box shadow rounded bg-color white">
                      <!-- Label -->
                      <span class="label-vertical outline">
                        <span class="label-line gray"></span>
                        <span class="label-text gray">Fiwii App</span>
                      </span>
                      <!-- Link -->
                      <h3 class="title text-style-11 black">
                        <a href="{{url('/admin.app-dashboard')}}" target="_blank" class="link align-v-center black black-hover hover-up-down">
                          <i class="fa-solid fa-mobile icon"></i>
                          <span class="text ms-05">Fiwii App Admin Panel</span>
                          <span class="badge ms-05 warning warning-hover">
                            <span class="badge-text white white-hover">Beta</span>
                          </span>
                        </a>
                      </h3>
                      <p class="description gray">Panel de administrador para Fiwii management systems app</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="card boxed parent">
                    <!-- Image -->
                    <div class="image-wrapper shadow rounded">
                      <img src="{{ URL::asset('assets/images/walpapers/fiwiiWeb.gif') }}" alt="Image name" class="image min-vh-50 fit-cover" />
                    </div>
                    <!-- Box -->
                    <div class="card-body box shadow rounded bg-color white">
                      <!-- Label -->
                      <span class="label-vertical outline">
                        <span class="label-line gray"></span>
                        <span class="label-text gray">Fiwii Web</span>
                      </span>
                      <!-- Link -->
                      <h3 class="title text-style-11 white">
                        <a href="{{url('/admin.web-dashboard')}}" class="link align-v-center black black-hover hover-up-down">
                          <i class="fa-solid fa-globe icon"></i>
                          <span class="text ms-05">Fiwii Web Admin Panel</span>
                          <span class="badge ms-05 primary primary-hover">
                            <span class="badge-text white white-hover">v1.0</span>
                          </span>
                        </a>
                      </h3>
                      <p class="description gray">Panel de administrador para la Web principal de Fiwii.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </main>

    <!-- Scroll to Top -->
    <div class="side-widget to-right invert-color mix-blend-difference">
      <div class="item align-v-bottom">
        <a href="#" class="link hover-up">
          <span class="widget float-icon">
            <i class="fa-solid fa-arrow-up-long icon"></i>
          </span>
        </a>
      </div>
    </div>

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
                                <a href="tel:+19912345678" class="button outline rounded gray accent-hover">
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
                            <h6 class="title">Quick Links</h6>
                            <!-- Links list -->
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
