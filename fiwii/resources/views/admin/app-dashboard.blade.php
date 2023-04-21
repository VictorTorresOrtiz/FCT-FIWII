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
      <nav id="navbar" class="navbar navbar-expand-lg smart-scroll hover-line-left scheme-1 primary">
        <div class="container">
          <!-- Brand -->
          <a class="navbar-brand" href="/">
            <!-- <div class="site-title">Site Title</div> -->
            <img src="assets/images/logo-white.svg" alt="Shock Theme" class="logo main-logo" />
            <img src="assets/images/logo.svg" alt="Shock Theme" class="logo sticky-logo" />
            <img src="assets/images/logo-white.svg" alt="Shock Theme" class="logo mobile-logo" />
            <span class="logo-after-text">SHOCK</span>
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
                  <span class="text">Demos</span><img class="image-icon dropdown-icon" src="assets/svg/chevron-down-outline.svg" alt="Icon name" data-shock-icon="32" />
                </a>
                <div class="dropdown-menu megamenu animate fade-down" role="menu">
                  <div class="container">
                    <div class="section-inner-expanded">
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="megamenu-item h-auto mb-0 pb-0">
                            <h6 class="title">Pre-Built Websites</h6>
                          </div>
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="megamenu-item pt-0">
                                <ul class="nav-list list-unstyled">
                                  <li class="nav-item">
                                    <a href="home-1.html" class="nav-link parent">
                                      <span class="text">Design & Art</span>
                                      <em class="tag hover-up-down">video carousel</em>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="home-2.html" class="nav-link parent">
                                      <span class="text">Creative Agency</span>
                                      <em class="tag hover-up-down">dynamic slider</em>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="home-3.html" class="nav-link parent">
                                      <span class="text">Photography</span>
                                      <em class="tag hover-up-down">scrolling portfolio</em>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="home-4.html" class="nav-link parent">
                                      <span class="text">Education</span>
                                      <em class="tag hover-up-down">product category</em>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="home-5.html" class="nav-link parent">
                                      <span class="text">Technology</span>
                                      <em class="tag hover-up-down">high conversion</em>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="home-6.html" class="nav-link parent">
                                      <span class="text">Digital Agency</span>
                                      <em class="tag hover-up-down">pricing table</em>
                                      <span class="badge ms-05 primary-15 primary-15-hover">
                                        <span class="badge-text primary primary-hover">Hot</span>
                                      </span>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="home-7.html" class="nav-link parent">
                                      <span class="text">Corporate</span>
                                      <em class="tag hover-up-down">modern design</em>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="home-8.html" class="nav-link parent">
                                      <span class="text">Online Store</span>
                                      <em class="tag hover-up-down">offset text</em>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="megamenu-item pt-0">
                                <ul class="nav-list list-unstyled">
                                  <li class="nav-item">
                                    <a href="home-9.html" class="nav-link parent">
                                      <span class="text">Personal portfolio</span>
                                      <em class="tag hover-up-down">stylish dark</em>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="home-10.html" class="nav-link parent">
                                      <span class="text">Architecture</span>
                                      <em class="tag hover-up-down">striking white</em>
                                      <span class="badge ms-05 secondary-15 secondary-15-hover">
                                        <span class="badge-text secondary secondary-hover">Hot</span>
                                      </span>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="home-11.html" class="nav-link parent">
                                      <span class="text">Interior Design</span>
                                      <em class="tag hover-up-down">moving images</em>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="home-12.html" class="nav-link parent">
                                      <span class="text">Social Media</span>
                                      <em class="tag hover-up-down">illustrative</em>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="home-13.html" class="nav-link parent">
                                      <span class="text">Audio & Video</span>
                                      <em class="tag hover-up-down">background video</em>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="home-14.html" class="nav-link parent">
                                      <span class="text">Photographer</span>
                                      <em class="tag hover-up-down">portfolio filter</em>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="home-15.html" class="nav-link parent">
                                      <span class="text">App & Software</span>
                                      <em class="tag hover-up-down">gradient text</em>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="home-16.html" class="nav-link parent">
                                      <span class="text">Product Showcase</span>
                                      <em class="tag hover-up-down">image effects</em>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                          <div class="megamenu-item">
                            <h6 class="title">Inspirations</h6>
                            <ul class="nav-list list-unstyled">
                              <li class="nav-item">
                                <a href="inspiration-1.html" class="nav-link">
                                  <span class="text">Dynamic Slider</span>
                                  <em class="tag hover-up-down">stunning design</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="inspiration-2.html" class="nav-link">
                                  <span class="text">Extended Banner</span>
                                  <em class="tag hover-up-down">background video</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="inspiration-3.html" class="nav-link">
                                  <span class="text">Parallax Scrolling</span>
                                  <em class="tag hover-up-down">image effects</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="inspiration-4.html" class="nav-link">
                                  <span class="text">Full Carousel</span>
                                  <em class="tag hover-up-down">lightbox gallery</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="inspiration-5.html" class="nav-link">
                                  <span class="text">Magnetic Image</span>
                                  <em class="tag hover-up-down">super headings</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="inspiration-6.html" class="nav-link">
                                  <span class="text">Scrolling Text</span>
                                  <em class="tag hover-up-down">background image</em>
                                  <span class="badge ms-05 tertiary-15 tertiary-15-hover">
                                    <span class="badge-text tertiary tertiary-hover">Hot</span>
                                  </span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                          <div class="megamenu-item has-side-image image-absolute-right">
                            <a href="https://codings.dev/?buy=shock-html" target="_blank" class="megamenu-image black">
                              <img src="assets/images/jpg/c-32.jpg" alt="Image name" class="image">
                              <span class="title">Buy Shock</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown has-megamenu hover">
                <a class="nav-link dropdown-toggle has-icon" href="#" data-bs-toggle="dropdown">
                  <span class="text">Elements</span><img class="image-icon dropdown-icon" src="assets/svg/chevron-down-outline.svg" alt="Icon name" data-shock-icon="32" />
                </a>
                <div class="dropdown-menu megamenu animate fade-down" role="menu">
                  <div class="container">
                    <div class="section-inner-expanded">
                      <div class="horizontal-tab scheme-1 primary">
                        <!-- Tab navigation -->
                        <ul id="elements-tab" class="nav nav-tabs js-tabs-event" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button id="elements-1-tab" class="title nav-link active" aria-selected="true" aria-controls="elements-1" data-bs-target="#elements-1" data-bs-toggle="tab" role="tab">
                              Component
                            </button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button id="elements-2-tab" class="title nav-link" aria-selected="false" aria-controls="elements-2" data-bs-target="#elements-2" data-bs-toggle="tab" role="tab">
                              Miscellaneous
                            </button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button id="elements-3-tab" class="title nav-link" aria-selected="false" aria-controls="elements-3" data-bs-target="#elements-3" data-bs-toggle="tab" role="tab">
                              Header & Footer
                            </button>
                          </li>
                        </ul>
                        <!-- Tab content -->
                        <div class="tab-content">
                          <div id="elements-1" class="tab-pane fade show active" role="tabpanel">
                            <div class="row g-3">
                              <div class="col-12 col-md-6 col-lg-2">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-button.html" class="nav-link parent">
                                        <span class="text">Buttons</span>
                                        <span class="badge ms-05 primary-15 primary-15-hover">
                                          <span class="badge-text primary primary-hover">Hot</span>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-collapse.html" class="nav-link parent">
                                        <span class="text">Accordion / Collapse</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-tab.html" class="nav-link parent">
                                        <span class="text">Tab Variation</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-table.html" class="nav-link parent">
                                        <span class="text">Functional Tables</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-2">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-modal.html" class="nav-link parent">
                                        <span class="text">Modal / Lightbox</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-tooltip.html" class="nav-link parent">
                                        <span class="text">Tooltip</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-map-styles.html" class="nav-link parent">
                                        <span class="text">Map Styles</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-2">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-card-shadow.html" class="nav-link parent">
                                        <span class="text">Box Shadow Card</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-card-outline.html" class="nav-link parent">
                                        <span class="text">Outilne Card</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-card-double-edge.html" class="nav-link parent">
                                        <span class="text">Double Edge Card</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-card-image-vertical.html" class="nav-link parent">
                                        <span class="text">Vertical Image Card</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-card-image-horizontal.html" class="nav-link parent">
                                        <span class="text">Simple Image Card</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-2">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-gallery.html" class="nav-link parent">
                                        <span class="text">Media Gallery</span>
                                        <span class="badge ms-05 secondary-15 secondary-15-hover">
                                          <span class="badge-text secondary secondary-hover">Hot</span>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-carousel.html" class="nav-link parent">
                                        <span class="text">Carousel</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-slider-basic.html" class="nav-link parent">
                                        <span class="text">Basic Slider</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-slider-extended.html" class="nav-link parent">
                                        <span class="text">Extended Slider</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-2">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-banner-basic.html" class="nav-link parent">
                                        <span class="text">Basic Banner</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-banner-extended.html" class="nav-link parent">
                                        <span class="text">Extended Banner</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-pricing-table-shadow.html" class="nav-link parent">
                                        <span class="text">Box Shadow Pricing</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-pricing-table-outline.html" class="nav-link parent">
                                        <span class="text">Outline Pricing</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-pricing-table-double-edge.html" class="nav-link parent">
                                        <span class="text">Double Edge Pricing</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-2">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-form-basic.html" class="nav-link parent">
                                        <span class="text">Basic Form</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-form-compact.html" class="nav-link parent">
                                        <span class="text">Compact Form</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-form-floating.html" class="nav-link parent">
                                        <span class="text">Floating Form</span>
                                        <span class="badge ms-05 tertiary-15 tertiary-15-hover">
                                          <span class="badge-text tertiary tertiary-hover">Hot</span>
                                        </span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="elements-2" class="tab-pane fade" role="tabpanel">
                            <div class="row g-3">
                              <div class="col-12 col-md-6 col-lg-3">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-typography.html" class="nav-link parent">
                                        <span class="text">Typography</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-headings.html" class="nav-link parent">
                                        <span class="text">Super Headings</span>
                                        <span class="badge ms-05 primary-15 primary-15-hover">
                                          <span class="badge-text primary primary-hover">Hot</span>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-popup-bar.html" class="nav-link parent">
                                        <span class="text">Popup Bar</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-popup-box.html" class="nav-link parent">
                                        <span class="text">Popup Box</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-3">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-typed-text.html" class="nav-link parent">
                                        <span class="text">Typed Text</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-scrolling-text.html" class="nav-link parent">
                                        <span class="text">Scrolling Text</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-circular-text.html" class="nav-link parent">
                                        <span class="text">Circular Text</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-animated-underline.html" class="nav-link parent">
                                        <span class="text">Animated Underline</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-3">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-preloader.html" class="nav-link parent">
                                        <span class="text">Preloader</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-counter-basic.html" class="nav-link parent">
                                        <span class="text">Counter</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-counter-progress-bar.html" class="nav-link parent">
                                        <span class="text">Line Progressbar</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-counter-progress-bar-radial.html" class="nav-link parent">
                                        <span class="text">Circle Progressbar</span>
                                        <span class="badge ms-05 secondary-15 secondary-15-hover">
                                          <span class="badge-text secondary secondary-hover">Hot</span>
                                        </span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-3">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-card-image-magnetic.html" class="nav-link parent">
                                        <span class="text">Magnetic Image</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-image-mirror.html" class="nav-link parent">
                                        <span class="text">Image Mirror</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-vertical-lines.html" class="nav-link parent">
                                        <span class="text">Vertical Lines</span>
                                        <span class="badge ms-05 tertiary-15 tertiary-15-hover">
                                          <span class="badge-text tertiary tertiary-hover">Hot</span>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-zzz-divider.html" class="nav-link parent">
                                        <span class="text">Zigzag Divider</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="elements-3" class="tab-pane fade" role="tabpanel">
                            <div class="row g-3">
                              <div class="col-12 col-md-6 col-lg-3">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="header-basic-1.html" class="nav-link parent">
                                        <span class="text">Navbar Basic</span><em class="tag hover-up-down">default</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="header-basic-2.html" class="nav-link parent">
                                        <span class="text">Navbar Basic</span><em class="tag hover-up-down">dark</em>
                                        <span class="badge ms-05 primary-15 primary-15-hover">
                                          <span class="badge-text primary primary-hover">Hot</span>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="footer-basic-1.html" class="nav-link parent">
                                        <span class="text">Footer Basic</span><em class="tag hover-up-down">default</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="footer-basic-2.html" class="nav-link parent">
                                        <span class="text">Footer Basic</span><em class="tag hover-up-down">light</em>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-3">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="header-extended-1.html" class="nav-link parent">
                                        <span class="text">Navbar Extended</span><em class="tag hover-up-down">default</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="header-extended-2.html" class="nav-link parent">
                                        <span class="text">Navbar Extended</span><em class="tag hover-up-down">dark</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="footer-extended-1.html" class="nav-link parent">
                                        <span class="text">Footer Extended</span><em class="tag hover-up-down">default</em>
                                        <span class="badge ms-05 secondary-15 secondary-15-hover">
                                          <span class="badge-text secondary secondary-hover">Hot</span>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="footer-extended-2.html" class="nav-link parent">
                                        <span class="text">Footer Extended</span><em class="tag hover-up-down">light</em>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-3">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="header-centered-1.html" class="nav-link parent">
                                        <span class="text">Navbar Centered</span><em class="tag hover-up-down">default</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="header-centered-2.html" class="nav-link parent">
                                        <span class="text">Navbar Centered</span><em class="tag hover-up-down">dark</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="footer-centered-1.html" class="nav-link parent">
                                        <span class="text">Footer Centered</span><em class="tag hover-up-down">default</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="footer-centered-1.html" class="nav-link parent">
                                        <span class="text">Footer Centered</span><em class="tag hover-up-down">light</em>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-3">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="header-grid-1.html" class="nav-link parent">
                                        <span class="text">Grid Menu</span><em class="tag hover-up-down">scheme 1</em>
                                        <span class="badge ms-05 tertiary-15 tertiary-15-hover">
                                          <span class="badge-text tertiary tertiary-hover">Hot</span>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="header-grid-2.html" class="nav-link parent">
                                        <span class="text">Grid Menu</span><em class="tag hover-up-down">scheme 2</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="header-grid-3.html" class="nav-link parent">
                                        <span class="text">Side Menu</span><em class="tag hover-up-down">scheme dark</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="header-grid-4.html" class="nav-link parent">
                                        <span class="text">Side Menu</span><em class="tag hover-up-down">scheme light</em>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown has-megamenu hover">
                <a class="nav-link dropdown-toggle has-icon" href="#" data-bs-toggle="dropdown">
                  <span class="text">Pages</span><img class="image-icon dropdown-icon" src="assets/svg/chevron-down-outline.svg" alt="Icon name" data-shock-icon="32" />
                </a>
                <div class="dropdown-menu megamenu animate fade-down" role="menu">
                  <div class="container">
                    <div class="section-inner-expanded">
                      <div class="row g-3">
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="megamenu-item">
                            <h6 class="title">About Pages</h6>
                            <ul class="nav-list list-unstyled">
                              <li class="nav-item">
                                <a href="page-about-1.html" class="nav-link parent">
                                  <span class="text">Startup</span>
                                  <em class="tag hover-up-down">team description</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="page-about-2.html" class="nav-link parent">
                                  <span class="text">Company</span>
                                  <em class="tag hover-up-down">images & counter</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="page-about-3.html" class="nav-link parent">
                                  <span class="text">Creative</span>
                                  <em class="tag hover-up-down">branches & map</em>
                                </a>
                              </li>
                            </ul>
                            <h6 class="title mt-2">FAQ / Questions</h6>
                            <ul class="nav-list list-unstyled">
                              <li class="nav-item">
                                <a href="page-faq-1.html" class="nav-link">
                                  <span class="text">Modern Business</span>
                                  <em class="tag hover-up-down">search form</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="page-faq-2.html" class="nav-link">
                                  <span class="text">Dark Creative</span>
                                  <em class="tag hover-up-down">stunning design</em>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="megamenu-item">
                            <h6 class="title">Service Showcase</h6>
                            <ul class="nav-list list-unstyled">
                              <li class="nav-item">
                                <a href="page-services-1.html" class="nav-link">
                                  <span class="text">Modern Business</span>
                                  <em class="tag hover-up-down">super detailed</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="page-services-2.html" class="nav-link">
                                  <span class="text">Dark Creative</span>
                                  <em class="tag hover-up-down">gradient text</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="page-services-3.html" class="nav-link">
                                  <span class="text">Design & Art</span>
                                  <em class="tag hover-up-down">stunning images</em>
                                </a>
                              </li>
                            </ul>
                            <h6 class="title mt-2">Contact Pages</h6>
                            <ul class="nav-list list-unstyled">
                              <li class="nav-item">
                                <a href="page-contact-1.html" class="nav-link">
                                  <span class="text">Modern Business</span>
                                  <em class="tag hover-up-down">branches & map</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="page-contact-2.html" class="nav-link">
                                  <span class="text">Dark & Direct</span>
                                  <em class="tag hover-up-down">form in modal</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="page-contact-3.html" class="nav-link">
                                  <span class="text">Design & Art</span>
                                  <em class="tag hover-up-down">stunning images</em>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="megamenu-item">
                            <h6 class="title">Service Description</h6>
                            <ul class="nav-list list-unstyled">
                              <li class="nav-item">
                                <a href="page-single-service-1.html" class="nav-link">
                                  <span class="text">Modern Business</span>
                                  <em class="tag hover-up-down">testimonials</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="page-single-service-2.html" class="nav-link">
                                  <span class="text">Dark Creative</span>
                                  <em class="tag hover-up-down">portfolio filter</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="page-single-service-3.html" class="nav-link">
                                  <span class="text">Design & Art</span>
                                  <em class="tag hover-up-down">brief description</em>
                                </a>
                              </li>
                            </ul>
                            <h6 class="title mt-2">Pricing Table</h6>
                            <ul class="nav-list list-unstyled">
                              <li class="nav-item">
                                <a href="page-pricing-1.html" class="nav-link">
                                  <span class="text">Modern Business</span>
                                  <em class="tag hover-up-down">gradient text</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="page-pricing-2.html" class="nav-link">
                                  <span class="text">Dark Creative</span>
                                  <em class="tag hover-up-down">stunning cards</em>
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
              <li class="nav-item dropdown has-megamenu hover">
                <a class="nav-link dropdown-toggle has-icon" href="#" data-bs-toggle="dropdown">
                  <span class="text">Portfolio</span><img class="image-icon dropdown-icon" src="assets/svg/chevron-down-outline.svg" alt="Icon name" data-shock-icon="32" />
                </a>
                <div class="dropdown-menu megamenu animate fade-down" role="menu">
                  <div class="container">
                  <div class="section-inner-expanded">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="megamenu-item h-auto mb-0 pb-0">
                          <h6 class="title">Portfolio Showcase</h6>
                        </div>
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <div class="megamenu-item pt-0">
                              <ul class="nav-list list-unstyled">
                                <li class="nav-item">
                                  <a href="portfolio-1.html" class="nav-link">
                                    <span class="text">Dynamic Slider</span>
                                    <span class="badge ms-05 primary-15 primary-15-hover">
                                      <span class="badge-text primary primary-hover">Hot</span>
                                    </span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="portfolio-2.html" class="nav-link parent">
                                    <span class="text">Carousel & Tabs</span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="portfolio-3.html" class="nav-link">
                                    <span class="text">Dark Filterable</span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="portfolio-4.html" class="nav-link parent">
                                    <span class="text">Scrolling Images</span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="portfolio-5.html" class="nav-link">
                                    <span class="text">Modern Cards</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="megamenu-item pt-0">
                              <ul class="nav-list list-unstyled">
                                <li class="nav-item">
                                  <a href="portfolio-6.html" class="nav-link">
                                    <span class="text">Fixed Side Filter</span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="portfolio-7.html" class="nav-link">
                                    <span class="text">Stunning Cards</span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="portfolio-8.html" class="nav-link">
                                    <span class="text">Carousel & Logo</span>
                                    <span class="badge ms-05 secondary-15 secondary-15-hover">
                                      <span class="badge-text secondary secondary-hover">Hot</span>
                                    </span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="portfolio-9.html" class="nav-link parent">
                                    <span class="text">Side by Side</span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="portfolio-10.html" class="nav-link parent">
                                    <span class="text">Video Gallery</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-3">
                        <div class="megamenu-item">
                          <h6 class="title">Project Description</h6>
                          <ul class="nav-list list-unstyled">
                            <li class="nav-item">
                              <a href="portfolio-project-1.html" class="nav-link">
                                <span class="text">Modern Usability</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="portfolio-project-2.html" class="nav-link">
                                <span class="text">Moving Images</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="portfolio-project-3.html" class="nav-link">
                                <span class="text">Standard Format</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="portfolio-project-4.html" class="nav-link">
                                <span class="text">Flashy Dark</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="portfolio-project-5.html" class="nav-link">
                                <span class="text">Creative Dark Post</span>
                                <span class="badge ms-05 tertiary-15 tertiary-15-hover">
                                  <span class="badge-text tertiary tertiary-hover">Hot</span>
                                </span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="portfolio-project-6.html" class="nav-link">
                                <span class="text">Thumbnail Slider</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-3">
                        <div class="megamenu-item">
                          <a href="element-gallery.html" target="_blank" class="megamenu-image secondary">
                            <img src="assets/images/jpg/b-10.jpg" alt="Image name" class="image">
                            <span class="title">Media Gallery</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </li>
              <li class="nav-item dropdown has-megamenu hover">
                <a class="nav-link dropdown-toggle has-icon" href="#" data-bs-toggle="dropdown">
                  <span class="text">Blog</span><img class="image-icon dropdown-icon" src="assets/svg/chevron-down-outline.svg" alt="Icon name" data-shock-icon="32" />
                </a>
                <div class="dropdown-menu megamenu animate fade-down" role="menu">
                  <div class="container">
                  <div class="section-inner-expanded">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="megamenu-item h-auto mb-0 pb-0">
                          <h6 class="title">Blog Showcase</h6>
                        </div>
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <div class="megamenu-item pt-0">
                              <ul class="nav-list list-unstyled">
                                <li class="nav-item">
                                  <a href="blog-1.html" class="nav-link">
                                    <span class="text">Light Creative</span>
                                    <span class="badge ms-05 primary-15 primary-15-hover">
                                      <span class="badge-text primary primary-hover">Hot</span>
                                    </span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="blog-2.html" class="nav-link parent">
                                    <span class="text">Elegant Dark</span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="blog-3.html" class="nav-link">
                                    <span class="text">Standard Sidebar</span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="blog-4.html" class="nav-link parent">
                                    <span class="text">Striking White</span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="blog-5.html" class="nav-link">
                                    <span class="text">Magnetic Image</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="megamenu-item pt-0">
                              <ul class="nav-list list-unstyled">
                                <li class="nav-item">
                                  <a href="blog-6.html" class="nav-link">
                                    <span class="text">Flashy Dark</span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="blog-7.html" class="nav-link">
                                    <span class="text">Dark & Gradient</span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="blog-8.html" class="nav-link">
                                    <span class="text">Typed & Search</span>
                                    <span class="badge ms-05 secondary-15 secondary-15-hover">
                                      <span class="badge-text secondary secondary-hover">Hot</span>
                                    </span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="blog-9.html" class="nav-link parent">
                                    <span class="text">Modern Cards</span>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="blog-10.html" class="nav-link parent">
                                    <span class="text">Dark Carousel</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-3">
                        <div class="megamenu-item">
                          <h6 class="title">Blog Post</h6>
                          <ul class="nav-list list-unstyled">
                            <li class="nav-item">
                              <a href="blog-post-1.html" class="nav-link">
                                <span class="text">Creative Clean</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="blog-post-2.html" class="nav-link">
                                <span class="text">Sticky Dark</span>
                                <span class="badge ms-05 tertiary-15 tertiary-15-hover">
                                  <span class="badge-text tertiary tertiary-hover">Hot</span>
                                </span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="blog-post-3.html" class="nav-link">
                                <span class="text">Standard Sidebar</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="blog-post-4.html" class="nav-link">
                                <span class="text">Creative Gradient</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="blog-post-5.html" class="nav-link">
                                <span class="text">Dark Sidebar</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="blog-post-6.html" class="nav-link">
                                <span class="text">Material Design</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-3">
                        <div class="megamenu-item">
                          <a href="element-carousel.html" target="_blank" class="megamenu-image secondary">
                            <img src="assets/images/jpg/b-10.jpg" alt="Image name" class="image">
                            <span class="title">Carousel</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-icons">
              <!-- Cart icon -->
              <li class="nav-item hover-up-down">
                <a href="#" class="nav-link has-counter-badge">
                  <i class="fa-solid fa-cart-shopping icon"></i>
                  <div class="counter-badge">5</div>
                  <span class="d-only-mobile d-none ms-05">Shop Cart</span>
                </a>
              </li>
              <!-- Search icon -->
              <li class="nav-item dropdown has-megamenu hover d-only-desktop">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                  <i class="fa-solid fa-magnifying-glass icon"></i>
                </a>
                <div class="dropdown-menu megamenu animate fade-down focus-trigger" role="menu">
                  <div class="container">
                    <div class="section-inner-expanded">
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="megamenu-item">
                            <h6 class="title">Popular searches</h6>
                            <!-- Tag Cloud -->
                            <div class="tag-cloud">
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                  <span class="badge-text gray white-hover">Environment</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline active gray-50 primary-hover floating-item-smooth">
                                  <span class="badge-text gray white-hover">Events</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                  <span class="badge-text gray white-hover">Technology</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                  <span class="badge-text gray white-hover">Web</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                  <span class="badge-text gray white-hover">Mobile</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                  <span class="badge-text gray white-hover">Design</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                  <span class="badge-text gray white-hover">Branding</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                  <span class="badge-text gray white-hover">Development</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                  <span class="badge-text gray white-hover">Artificial</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                  <span class="badge-text gray white-hover">Intelligence</span>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="megamenu-item">
                            <h6 class="title"><mark class="animated-underline accent">What are you looking for?</mark></h6>
                            <!-- Form -->
                            <div class="form-area scheme-1">
                              <form class="form-fields needs-validation" novalidate="novalidate">
                                <div class="form-row row has-icon">
                                  <div class="form-col form-floating">
                                    <button class="button overlay-button"><img class="overlay-image-icon" src="assets/svg/send-outline.svg" alt="Icon name" data-shock-icon="32" /></button>
                                    <input id="InputSearchNavbar" class="form-control focus-trigger-field" name="InputSearchNavbar" placeholder="Type keywords..." required="required">
                                    <label for="InputSearchNavbar" class="form-label">Type keywords...</label>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <!-- Action -->
            <div class="navbar-action">
              <div class="nav-item">
                <a href="https://codings.dev/?buy=shock-html" target="_blank" class="button small-button outline rounded primary-25 primary-hover">
                  <span class="hover-rotate">
                    <span class="button-text primary white-hover">Buy Shock</span>
                  </span>
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
      <section class="shock-section has-overlay">
        <div class="banner">
          <div class="content-wrapper text-center">
            <div class="container">
              <!-- Intro -->
              <div class="basic-intro text-center">
                <h1 class="title text-style-3 text-italic white">
                  <span class="text-1"><span class="typed-text"></span></span>
                </h1>
                <!-- Srings -->
                <div id="typed-strings">
                  <span>This is our portfolio</span>
                  <span>We create amazing designs</span>
                  <span>Discover our history</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Video -->
          <div class="image-wrapper">
            <video class="video vh-65 fit-cover" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
              <source src="assets/videos/4.mp4" type="video/mp4">
            </video>
          </div>
          <!-- Overlay -->
          <div class="overlay black-50"></div>
        </div>
      </section>

      <!-- Vertical tab -->
      <section class="shock-section pt-4 pb-4">
        <div class="container max-w-85">
          <div class="vertical-tab scheme-1 primary">
            <!-- Tab navigation -->
            <ul id="v-tab" class="nav nav-pills" role="tablist" aria-orientation="vertical" data-sticky="30">
              <li class="nav-item" role="presentation">
                <button id="v-1-tab" class="nav-link active" aria-selected="true" aria-controls="v-1" data-bs-target="#v-1" data-bs-toggle="tab" role="tab">
                  Initiation
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button id="v-2-tab" class="nav-link" aria-selected="false" aria-controls="v-2" data-bs-target="#v-2" data-bs-toggle="tab" role="tab">
                  Planning
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" aria-selected="false" aria-controls="v-1" data-bs-target="#v-1" data-bs-toggle="tab" role="tab">
                  Execution
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" aria-selected="false" aria-controls="v-2" data-bs-target="#v-2" data-bs-toggle="tab" role="tab">
                  Monitoring
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" aria-selected="false" aria-controls="v-1" data-bs-target="#v-1" data-bs-toggle="tab" role="tab">
                  Follow Up
                </button>
              </li>
            </ul>
            <!-- Tab content -->
            <div class="tab-content">
              <!-- Breadcrumb -->
              <div class="breadcrumb-nav scheme-1 primary">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item has-icon">
                      <a href="#" class="breadcrumb-link"><i class="fa-regular fa-calendar-check icon"></i>Jan 2022</a>
                    </li>
                    <li class="breadcrumb-item has-icon">
                      <a href="#" class="breadcrumb-link"><i class="fa-brands fa-apple icon"></i><span class="text">Example Company</span></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Developed by John Young
                    </li>
                  </ol>
                </nav>
              </div>
              <div id="v-1" class="tab-pane fade show active" role="tabpanel">
                <!-- Project -->
                <div class="content max-w-100 scheme-1">
                  <!-- Paragraph -->
                  <h3>After all, why is design important?</h3>
                  <p>Design is a broad concept that represents the process of creating products based on technical and aesthetic excellence, with the aim of <mark class="animated-underline accent text-black">solving problems</mark> and adding value. Good design delivers the best possible user experience.</p>
                  <p>This is the most objective definition possible for the concept, which encompasses numerous forms of idealization, conception, development and specification of objects.</p>
                  <!-- Table -->
                  <div class="block-section">
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
                  </div>
                  <!-- Gallery -->
                  <div class="block-section mb-0">
                    <div class="gallery stretched has-gap">
                      <div class="bricklayer" data-columns="3">
                        <a href="assets/images/jpg/d-1.jpg" class="item lightbox-link">
                          <div class="image-wrapper shadow rounded hover-zoom-rotate">
                            <div class="overlay black-50"></div>
                            <img src="assets/images/jpg/d-1.jpg" class="image rounded shadow" alt="This is an example description for this item." />
                          </div>
                        </a>
                        <a href="assets/images/jpg/d-2.jpg" class="item lightbox-link">
                          <div class="image-wrapper shadow rounded hover-zoom-rotate">
                            <div class="overlay black-50"></div>
                            <img src="assets/images/jpg/d-2.jpg" class="image rounded shadow" alt="This is an example description for this item." />
                          </div>
                        </a>
                        <!-- Video -->
                        <a href="https://vimeo.com/222990241" class="item active lightbox-link">
                          <i class="fa-solid fa-circle-play gallery-icon white floating-item"></i>
                          <div class="image-wrapper shadow rounded hover-zoom-rotate">
                            <div class="overlay black-50"></div>
                            <img src="assets/images/jpg/d-3.jpg" class="image rounded shadow" alt="This is an example description for this item." />
                          </div>
                        </a>
                        <a href="assets/images/jpg/d-4.jpg" class="item lightbox-link">
                          <div class="image-wrapper shadow rounded hover-zoom-rotate">
                            <div class="overlay black-50"></div>
                            <img src="assets/images/jpg/d-4.jpg" class="image rounded shadow" alt="This is an example description for this item." />
                          </div>
                        </a>
                        <a href="assets/images/jpg/d-5.jpg" class="item lightbox-link">
                          <div class="image-wrapper shadow rounded hover-zoom-rotate">
                            <div class="overlay black-50"></div>
                            <img src="assets/images/jpg/d-5.jpg" class="image rounded shadow" alt="This is an example description for this item." />
                          </div>
                        </a>
                        <a href="assets/images/jpg/d-6.jpg" class="item lightbox-link">
                          <div class="image-wrapper shadow rounded hover-zoom-rotate">
                            <div class="overlay black-50"></div>
                            <img src="assets/images/jpg/d-6.jpg" class="image rounded shadow" alt="This is an example description for this item." />
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="v-2" class="tab-pane fade" role="tabpanel">
                <!-- Project -->
                <div class="content max-w-100 scheme-1">
                  <!-- Paragraph -->
                  <h3>The history of design</h3>
                  <p>If we take the term literally, our ancestors already practiced design when creating their chipped stone tools. However, to facilitate understanding, let's place the concept in our age.</p>
                  <!-- Blockquote -->
                  <figure class="blockquote">
                    <blockquote class="blockquote-body text-style-11 black">
                      <p>"The design is not just what it looks like. The design is how it works".</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      <cite title="Source Title">Steve Jobs / Apple Founder</cite>
                    </figcaption>
                  </figure>
                  <!-- Image -->
                  <figure class="figure">
                    <img src="assets/images/jpg/a-11.jpg" class="image shadow rounded" alt="Image name">
                    <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Scrolling text -->
      <section class="shock-section">
        <div class="scrolling-text">
          <!-- Text -->
          <div class="text-wrapper mix-blend-lighter">
            <h2 class="text text-style-1 text-outline gray-75" data-lax="h-left">We provide our art to ensure that human insights work well</h2>
            <h3 class="text text-style-8 text-italic gray-75" data-lax="h-right">ensure that human insights work well together with technology, brand and business, with a focus on fast and assertive results</h3>
          </div>
        </div>
      </section>

      <!-- Form -->
      <section class="shock-section pt-4 pb-4">
        <div class="container">
          <div class="row g-4">
            <div class="col-12 col-md-5">
              <div class="card has-image shadow rounded parent">
                <!-- Image -->
                <div class="image-wrapper rounded-top">
                  <img src="assets/images/jpg/b-35.jpg" alt="Image name" class="image" />
                </div>
                <!-- Body -->
                <div class="card-body rounded-bottom bg-color gray-10">
                  <div class="title align-v-center text-style-11 black">
                    <i class="fa-solid fa-phone icon"></i>
                    <span class="text ms-05">+1 (99) 1234 5678</span>
                    <span class="badge ms-05 primary-25 primary-25-hover">
                      <span class="badge-text primary primary-hover">Mon-Fri</span>
                    </span>
                  </div>
                  <p class="description">Our branch in Spring Valley works for face-to-face from Monday to Friday from 10 am to 6 pm.</p>
                  <!-- Link -->
                  <a href="tel:+19912345678" target="_blank" class="full-link"></a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-7 align-v-center">
              <div class="holder">
                <!-- Intro -->
                <div class="basic-intro mb-35">
                  <h2 class="title black">
                    <span class="text-1 text-style-5">How can </span>
                    <span class="text-2 text-style-6 text-italic">we help you?</span>
                  </h2>
                  <div class="description gray">
                    <p>Please fill in the form below and we will get back to you shortly. 🥳</p>
                  </div>
                </div>
                <!-- Form -->
                <div class="form-area scheme-1 primary">
                  <form action="php/sender.php" class="form-fields needs-validation ajax-form" novalidate="novalidate">
                    <div class="form-row row">
                      <div class="form-col form-floating col-12 col-md-6">
                        <input type="text" name="name" id="InputFloatingName" class="form-control" placeholder="Name" required="required">
                        <label for="InputFloatingName" class="form-label">Name</label>
                        <div class="invalid-feedback">Please enter your name.</div>
                        <div class="valid-feedback">Looks good.</div>
                      </div>
                      <div class="form-col form-floating col-12 col-md-6">
                        <input type="email" name="email" id="InputFloatingEmail" class="form-control" placeholder="name@example.com" required="required">
                        <label for="InputFloatingEmail" class="form-label">Email</label>
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                        <div class="valid-feedback">Looks good.</div>
                      </div>
                    </div>
                    <div class="form-row row">
                      <div class="form-col form-floating col-12">
                        <textarea name="message" id="InputFloatingMessage" class="form-control form-textarea" rows="3" placeholder="Enter your message (optional)."></textarea>
                        <label for="InputFloatingMessage" class="form-label">Message</label>
                        <div class="valid-feedback">It's optional, but we'd like to know about it :)</div>
                      </div>
                    </div>
                    <div class="form-row row">
                      <div class="form-col col-12">
                        <div class="form-check">
                          <input type="radio" name="info" id="InputRadioChecked" class="form-check-input form-radio" checked="checked" required="required">
                          <label class="form-label form-check-label" for="InputRadioChecked">
                            I found this site by searching the internet.
                          </label>
                        </div>
                      </div>
                      <div class="form-col col-12">
                        <div class="form-check">
                          <input type="radio" name="info" id="InputRadio" class="form-check-input form-radio" required="required">
                          <label class="form-label form-check-label" for="InputRadio">
                            A friend recommended this site to me.
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-row row">
                      <div class="form-col form-floating col-12">
                        <!-- Button -->
                        <button class="button arrow-button next scheme-1 primary">
                          <span class="arrow">
                            <span class="item"></span>
                            <span class="item"></span>
                          </span>
                          <span class="line"></span>
                          <span class="text">SEND MESSAGE</span>
                        </button>
                      </div>
                    </div>
                    <input type="hidden" name="subject" value="Message sent through the contact form.">
                    <span class="form-alert success">Your message was sent successful. Thanks.</span>
                    <span class="form-alert error">Sorry. We were unable to send your message.</span>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-12 col-md-6 col-lg-4 align-v-center">
              <!-- Intro -->
              <div class="basic-intro">
                <h2 class="title black">
                  <span class="text-1 text-style-5">Trusted </span>
                  <span class="text-2 text-style-6 text-italic">brands.</span>
                </h2>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-8">
              <!-- Carousel -->
              <div class="swiper slider gapped has-gap has-navigation scheme-2 primary" data-columns="8,6,3,2">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="assets/images/png/a-1.png" class="parent">
                      <div class="image-wrapper hover-opacity">
                        <img src="assets/images/png/a-1.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="assets/images/png/a-2.png" class="parent">
                      <div class="image-wrapper hover-opacity">
                        <img src="assets/images/png/a-2.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="assets/images/png/a-3.png" class="parent">
                      <div class="image-wrapper hover-opacity">
                        <img src="assets/images/png/a-3.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="assets/images/png/a-4.png" class="parent">
                      <div class="image-wrapper hover-opacity">
                        <img src="assets/images/png/a-4.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="assets/images/png/a-5.png" class="parent">
                      <div class="image-wrapper hover-opacity">
                        <img src="assets/images/png/a-5.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="assets/images/png/a-6.png" class="parent">
                      <div class="image-wrapper hover-opacity">
                        <img src="assets/images/png/a-6.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="assets/images/png/a-7.png" class="parent">
                      <div class="image-wrapper hover-opacity">
                        <img src="assets/images/png/a-7.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="assets/images/png/a-8.png" class="parent">
                      <div class="image-wrapper hover-opacity">
                        <img src="assets/images/png/a-8.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="assets/images/png/a-9.png" class="parent">
                      <div class="image-wrapper hover-opacity">
                        <img src="assets/images/png/a-9.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="assets/images/png/a-1.png" class="parent">
                      <div class="image-wrapper hover-opacity">
                        <img src="assets/images/png/a-1.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="assets/images/png/a-2.png" class="parent">
                      <div class="image-wrapper hover-opacity">
                        <img src="assets/images/png/a-2.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="assets/images/png/a-3.png" class="parent">
                      <div class="image-wrapper hover-opacity">
                        <img src="assets/images/png/a-3.png" class="image invert-color hover-up-down" alt="This is an example description for this item." />
                      </div>
                    </a>
                  </div>
                </div>
                <div class="swiper-button-prev simple"></div>
                <div class="swiper-button-next simple"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Card boxed -->
      <section class="shock-section pb-5">
        <div class="container">
          <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card boxed parent">
                <!-- Image -->
                <div class="image-wrapper shadow rounded hover-up-down">
                  <img src="assets/images/jpg/p-1.jpg" alt="Image name" class="image fit-cover" />
                </div>
                <!-- Box -->
                <div class="card-body box shadow rounded bg-color white">
                  <span class="label-vertical-icons">
                    <a href="#your-link" class="link primary-50 primary-hover"><i class="icon far fa-star"></i></a>
                    <a href="#your-link" class="link primary-50 primary-hover"><i class="icon fas fa-star-half-alt"></i></a>
                    <a href="#your-link" class="link primary-50 primary-hover"><i class="icon fas fa-star"></i></a>
                    <a href="#your-link" class="link primary-50 primary-hover"><i class="icon fas fa-star"></i></a>
                    <a href="#your-link" class="link primary-50 primary-hover"><i class="icon fas fa-star"></i></a>
                  </span>
                  <h3 class="title text-style-11 black">Laura Garcia</h3>
                  <p class="description">I am very satisfied with the service provided. Congratulations to the development team.</p>
                  <i class="fas fa-quote-right overlay-icon gray-50"></i>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card boxed parent">
                <!-- Image -->
                <div class="image-wrapper shadow rounded floating-item">
                  <img src="assets/images/jpg/p-2.jpg" alt="Image name" class="image fit-cover" />
                </div>
                <!-- Box -->
                <div class="card-body box shadow rounded bg-color white">
                  <span class="label-vertical-icons">
                    <a href="#your-link" class="link primary-50 primary-hover"><i class="icon fas fa-star"></i></a>
                    <a href="#your-link" class="link primary-50 primary-hover"><i class="icon fas fa-star"></i></a>
                    <a href="#your-link" class="link primary-50 primary-hover"><i class="icon fas fa-star"></i></a>
                    <a href="#your-link" class="link primary-50 primary-hover"><i class="icon fas fa-star"></i></a>
                    <a href="#your-link" class="link primary-50 primary-hover"><i class="icon fas fa-star"></i></a>
                  </span>
                  <h3 class="title text-style-11 black">Alice Johnson</h3>
                  <p class="description">This is the most amazing product I have ever seen. I am very happy with the delivery time.</p>
                  <i class="fas fa-quote-right overlay-icon gray-50"></i>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card boxed parent">
                <!-- Image -->
                <div class="image-wrapper shadow rounded hover-up-down">
                  <img src="assets/images/jpg/p-3.jpg" alt="Image name" class="image fit-cover" />
                </div>
                <!-- Box -->
                <div class="card-body box shadow rounded bg-color white">
                  <span class="label-vertical-icons">
                    <a href="#your-link" class="link primary-50 primary-hover"><i class="icon far fa-star"></i></a>
                    <a href="#your-link" class="link primary-50 primary-hover"><i class="icon fas fa-star"></i></a>
                    <a href="#your-link" class="link primary-50 primary-hover"><i class="icon fas fa-star"></i></a>
                    <a href="#your-link" class="link primary-50 primary-hover"><i class="icon fas fa-star"></i></a>
                    <a href="#your-link" class="link primary-50 primary-hover"><i class="icon fas fa-star"></i></a>
                  </span>
                  <h3 class="title text-style-11 black">Kaled Ahmad</h3>
                  <p class="description">I had some problems, but the staff helped me to fix everything and now everything is fine.</p>
                  <i class="fas fa-quote-right overlay-icon gray-50"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- Side Widget -->
    <div class="side-widget to-left invert-color mix-blend-difference d-only-desktop">
      <div class="item">
        <span class="widget label-icons">
          <a href="#your-link" class="link black black-hover"><i class="icon fab fa-facebook-f"></i></a>
          <a href="#your-link" class="link black black-hover"><i class="icon fab fa-twitter"></i></a>
          <a href="#your-link" class="link black black-hover"><i class="icon fab fa-linkedin-in"></i></a>
          <span class="label-line black"></span>
        </span>
      </div>
    </div>

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
                <a href="/" class="footer-brand floating-item">
                  <!-- <div class="site-title">Site Title</div> -->
                  <img src="assets/images/logo-white.svg" alt="Shock Theme" class="logo" />
                  <span class="logo-after-text">SHOCK</span>
                </a>
                <!-- Text -->
                <div class="footer-text">
                  <p>Shock is a creative multipurpose theme for building websites powered by Bootstrap 5 and other libraries.</p>
                </div>
              </div>
              <div class="footer-item">
                <h6 class="title">Contact Us</h6>
                <!-- Links list -->
                <ul class="nav-list list-unstyled">
                  <li class="nav-item">
                    <a href="tel:+19912345678" class="nav-link has-icon">
                      <img class="image-icon" src="assets/svg/call-sharp.svg" alt="Icon name" data-shock-icon="32" />
                      <span class="text">+1 (99) 1234 5678</span>
                      <span class="badge flex ms-1 primary primary-hover">
                        <span class="badge-text white white-hover">Mon-Fri</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="mailto:contact@mail.com" class="nav-link has-icon">
                      <img class="image-icon" src="assets/svg/mail-sharp.svg" alt="Icon name" data-shock-icon="32" />
                      <span class="text">contact@mail.com</span>
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
                    <a href="#your-link" class="nav-link has-icon">
                      <img class="image-icon" src="assets/svg/chevron-forward-sharp.svg" alt="Icon name" data-shock-icon="32" />
                      <span class="text">Who We Are</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#your-link" class="nav-link has-icon">
                      <img class="image-icon" src="assets/svg/chevron-forward-sharp.svg" alt="Icon name" data-shock-icon="32" />
                      <span class="text">Social Projects</span>
                      <span class="badge flex ms-1 primary primary-hover">
                        <span class="badge-text white white-hover">New</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#your-link" class="nav-link has-icon">
                      <img class="image-icon" src="assets/svg/chevron-forward-sharp.svg" alt="Icon name" data-shock-icon="32" />
                      <span class="text">Our Services</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#your-link" class="nav-link has-icon">
                      <img class="image-icon" src="assets/svg/chevron-forward-sharp.svg" alt="Icon name" data-shock-icon="32" />
                      <span class="text">Privacy Police</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="footer-item">
                <!-- Button -->
                <a href="#your-link" class="button outline gray primary-hover">
                  <span class="hover-rotate">
                    <span class="button-text white white-hover">Get in Touch</span>
                    <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="footer-item">
                <h6 class="title">Popular Searches</h6>
                <!-- Tag Cloud -->
                <div class="tag-cloud">
                  <a href="#your-link" class="link">
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Environment</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">
                    <span class="badge outline gray-50 primary-hover floating-item-smooth">
                      <span class="badge-text gray white-hover">Events</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Technology</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Web</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Mobile</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Design</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Branding</span>
                    </span>
                  </a>
                  <a href="#your-link" class="link">
                    <span class="badge outline gray-50 primary-hover">
                      <span class="badge-text gray white-hover">Development</span>
                    </span>
                  </a>
                </div>
              </div>
              <div class="footer-item">
                <h6 class="title">Follow Us</h6>
                <!-- Icon list -->
                <div class="list-wrapper">
                  <ul class="icon-h-list">
                    <li class="ms-0 item">
                      <a href="#your-link" class="link gray primary-hover hover-rotate"><i class="icon fab fa-facebook-f"></i></a>
                    </li>
                    <li class="item">
                      <a href="#your-link" class="link gray primary-hover hover-rotate"><i class="icon fab fa-twitter"></i></a>
                    </li>
                    <li class="item">
                      <a href="#your-link" class="link gray primary-hover hover-rotate"><i class="icon fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="footer-item">
                <h6 class="title">Inspirations</h6>
                <!-- Image -->
                <a href="#your-link" class="footer-image black">
                  <img src="assets/images/jpg/b-29.jpg" alt="Image name" class="image shadow">
                  <span class="title">View Portfolio</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom-bar">
        <div class="text">© 2023 - All rights reserved. The <a href="https://codings.dev?redirect=shock-html" class="link gray primary-hover"><u>Shock Theme</u></a> is developed and maintained by <a href="https://codings.dev?ref=shock-html" class="link gray primary-hover"><u>Codings Group</u></a>.</div>
      </div>
    </footer>

  </body>
</html>
