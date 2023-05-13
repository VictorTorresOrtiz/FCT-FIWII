<!DOCTYPE HTML>
<html lang="es">

  <!-- Preloader -->
  <div id="preloader" class="preloader" data-delay="0" data-limit="3000">
    <img src="{{ URL::asset('ssets/images/logo.svg') }}" class="emblem" alt="Emblem" hidden="hidden" />
  </div>

  <head>
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/logo/favicon.ico') }}" type="image/x-icon" />
    <!-- Display -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Identity -->
    <title>Fiwii Web - Dashboard Home</title>
    <meta name="description" content="Shock is a creative multipurpose theme for building websites. It is based on Bootstrap 5 and other of the best and most up-to-date code libraries used by professional developers in the world.">
    <meta name="author" content="Codings">
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
<!-- Header -->
<header id="header" class="shock-header">
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg nfixed-scroll smart-scroll hover-line scheme-2 primary">
      <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="/">
          <img src="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
          data-logo-alt="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
          data-logo-mobile="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
          class="logo" />
      <span class="logo-after-text">Dashboard</span>
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
                                      <span class="badge ms-05 white">
                                          <span class="badge-text accent accent-hover">Ofertas</span>
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

          <ul class="navbar-nav navbar-icons">
            <!-- Search icon -->
            <li class="search-bar nav-item d-only-desktop">
              <a href="#shock-search-bar" class="nav-link" rel="nofollow" data-bs-toggle="offcanvas" data-bs-target="#shock-search-bar" aria-controls="shock-search-bar">
                <i class="fa-solid fa-user icon"></i>
              </a>
            </li>
          </ul>
          <!-- Action -->
          <div class="navbar-action">
            <div class="nav-item">
              <a href="{{url('/admin.dashboard')}}"  class="button small-button rounded primary-15 accent-hover button-collision">
                <span class="button-text accent white-hover">Volver al inicio </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

    <!-- Main -->
    <main id="main" class="shock-main bg-color gray-10">
      <!-- Vertical tab -->
      <section class="shock-section pt-5">
        <div class="container max-w-85">
          <div class="vertical-tab scheme-1 primary">
            <!-- Tab navigation -->
            <ul id="v-tab" class="nav nav-pills" role="tablist" aria-orientation="vertical" data-sticky="30">
              <li class="nav-item" role="presentation">
                <button id="v-1-tab" class="nav-link active" aria-selected="true" aria-controls="v-1" data-bs-target="#v-1" data-bs-toggle="tab" role="tab">
                  Configuración
                </button>
              </li>
            </ul>
            <!-- Configuración -->
            <div class="tab-content pt-0">
              <div id="v-1" class="tab-pane fade show active" role="tabpanel">
                <!-- Services -->
                <div class="row g-2">
                  <div class="col-12 col-md-6">
                    <div class="card has-icon hover-up parent">
                      <div class="card-body rounded-3 small-shadow bg-color white">
                        <img class="card-image-icon primary" src="assets/svg/bar-chart-outline.svg" alt="Icon name" data-shock-icon="32" />
                        <h3 class="title text-style-11 black">Añadir Administrador</h3>
                        <p class="description">Dar de alta una cuenta de Administrador Fiwii.</p>
                        <!-- Button -->
                        <div class="button-wrapper align-h-right">
                          <span class="button simple">
                            <span class="button-text black black-hover"><mark class="animated-underline accent when-hover">Ir</mark></span>
                            <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                          </span>
                        </div>
                        <!-- Link -->
                        <a href="#your-link" class="full-link"></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="card has-icon hover-up parent">
                      <div class="card-body rounded-3 small-shadow bg-color white">
                        <img class="card-image-icon primary" src="assets/svg/boat-outline.svg" alt="Icon name" data-shock-icon="32" />
                        <h3 class="title text-style-11 black">Añadir Usuario</h3>
                        <p class="description">Dar de alta un usuario por defecto para sus empleados.</p>
                        <!-- Button -->
                        <div class="button-wrapper align-h-right">
                          <span class="button simple">
                            <span class="button-text black black-hover"><mark class="animated-underline accent when-hover">Ir</mark></span>
                            <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                          </span>
                        </div>
                        <!-- Link -->
                        <a href="#your-link" class="full-link"></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="card has-icon hover-up parent">
                      <div class="card-body rounded-3 small-shadow bg-color white">
                        <img class="card-image-icon primary" src="assets/svg/earth-outline.svg" alt="Icon name" data-shock-icon="32" />
                        <h3 class="title text-style-11 black">Lista de Tareas</h3>
                        <p class="description">Asignar lista de tareas a sus empleados.</p>
                        <!-- Button -->
                        <div class="button-wrapper align-h-right">
                          <span class="button simple">
                            <span class="button-text black black-hover"><mark class="animated-underline accent when-hover">Ir</mark></span>
                            <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                          </span>
                        </div>
                        <!-- Link -->
                        <a href="#your-link" class="full-link"></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="card has-icon hover-up parent">
                      <div class="card-body rounded-3 small-shadow bg-color white">
                        <img class="card-image-icon primary" src="assets/svg/cube-outline.svg" alt="Icon name" data-shock-icon="32" />
                        <h3 class="title text-style-11 black">Eliminar Cuentas</h3>
                        <p class="description">Dar de baja cualquier cuenta asociada a su empresa</p>
                        <!-- Button -->
                        <div class="button-wrapper align-h-right">
                          <span class="button simple">
                            <span class="button-text black black-hover"><mark class="animated-underline accent when-hover">Ir</mark></span>
                            <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                          </span>
                        </div>
                        <!-- Link -->
                        <a href="#your-link" class="full-link"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="v-3" class="tab-pane fade" role="tabpanel">
            </div>
          </div>
        </div>
      </section>
      <!-- Progress bar circle -->
      <section class="shock-section pt-5 pb-6" data-aos="fade-up" data-aos-delay="400">
        <div class="container">
          <div class="row g-5">
            <div class="col-6 col-lg-3">
              <div class="radial-progress-bar">
                <div class="item">
                  <h3 class="title text-style-11 black">Fiwii-App Server Status</h3>
                  <div class="counter" data-value="98" data-symbol="%" data-duration="2500" data-bar-stroke="4" data-bar-stroke-empty="1" data-bar-color="var(--accent-color)" data-empty-bar-color="var(--black-25-color)" data-text-bg-color="var(--black-color)" data-text-color="var(--white-color)"></div>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class="radial-progress-bar">
                <div class="item">
                  <h3 class="title text-style-11 black">Fiwii-Web Server Status</h3>
                  <div class="counter" data-value="89" data-symbol="%" data-duration="2500" data-bar-stroke="4" data-bar-stroke-empty="1" data-bar-color="var(--accent-color)" data-empty-bar-color="var(--black-25-color)" data-text-bg-color="var(--black-color)" data-text-color="var(--white-color)"></div>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class="radial-progress-bar">
                <div class="item">
                  <h3 class="title text-style-11 black">Laravel Server Status</h3>
                  <div class="counter" data-value="88" data-symbol="%" data-duration="2500" data-bar-stroke="4" data-bar-stroke-empty="1" data-bar-color="var(--accent-color)" data-empty-bar-color="var(--black-25-color)" data-text-bg-color="var(--black-color)" data-text-color="var(--white-color)"></div>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class="radial-progress-bar">
                <div class="item">
                  <h3 class="title text-style-11 black">DBB Server Status</h3>
                  <div class="counter" data-value="94" data-symbol="%" data-duration="2500" data-bar-stroke="4" data-bar-stroke-empty="1" data-bar-color="var(--accent-color)" data-empty-bar-color="var(--black-25-color)" data-text-bg-color="var(--black-color)" data-text-color="var(--white-color)"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Image --
      <section class="shock-section pt-5 pb-5">
        <div class="container max-w-85">
          <div class="row g-4">
            <div class="col-12 col-md-5">
              <!-- Image --
              <div class="gallery" data-lax="inertia-top">
                <a href="https://vimeo.com/222990241" class="item active lightbox-link">
                  <i class="fa-solid fa-circle-play gallery-icon white"></i>
                  <div class="image-wrapper shadow rounded">
                    <img src="assets/images/jpg/b-34.jpg" class="image" alt="Image name" />
                  </div>
                </a>
              </div>
            </div>
            <div class="col-12 col-md-7 align-v-center">
              <div class="holder">
                <!-- Intro --
                <div class="basic-intro mb-35">
                  <h2 class="title black">
                    <span class="text-1 text-style-5">We seek </span>
                    <span class="text-2 text-style-6 text-italic">the <mark class="animated-underline primary">extraordinary</mark>.</span>
                  </h2>
                  <div class="description gray">
                    <p>We keep in mind that we always need to improve everything we do, aiming to help people with our products and services, prioritizing quality.</p>
                  </div>
                </div>
                <!-- Table --
                <div class="table-responsive">
                  <table class="table scheme-1">
                    <thead>
                      <tr>
                        <th scope="col" class="black">#</th>
                        <th scope="col" class="black">Phases</th>
                        <th scope="col" class="black">Follow-up</th>
                        <th scope="col" class="black">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" class="black">1</th>
                        <td>Prototyping</td>
                        <td>With the client</td>
                        <td>From 1 to 2 days</td>
                      </tr>
                      <tr>
                        <th scope="row" class="black">2</th>
                        <td>Development</td>
                        <td>Technology team</td>
                        <td>From 1 to 5 days</td>
                      </tr>
                      <tr>
                        <th scope="row" class="black">3</th>
                        <td>Validation</td>
                        <td>Management team</td>
                        <td>Project ready</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <small class="opacity-75">* This is an example note about a table item.</small>
              </div>
            </div>
          </div>
        </div>
      </section>
      !---->

    </main>
  </body>
</html>
