@extends('templates.template-trial')
@section('trial')
<!-- Header -->
<header id="header" class="shock-header">
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-menu-grid scheme-2">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
                    data-logo-alt="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
                    data-logo-mobile="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}" class="logo" />
                <span class="logo-after-text">Fiwii Systems</span>
            </a>
            <!-- Menu toggle -->
            <div id="menu-toggle" class="menu-toggle is-inactive magnetic-effect scheme-2 primary">
                <div class="menu-toggle-icon">
                    <div class="menu-toggle-container">
                        <span class="menu-toggle-line-top"></span>
                        <span class="menu-toggle-line-middle"></span>
                        <span class="menu-toggle-line-bottom"></span>
                    </div>
                </div>
                <div class="menu-toggle-circle">
                    <svg class="menu-toggle-menu-toggle-svg-circle">
                        <path class="menu-toggle-path-circle" fill="none" stroke-miterlimit="10" stroke-width="4"
                            d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
                    </svg>
                </div>
                <svg width="0" height="0">
                    <mask id="menu-toggle-mask">
                        <path class="path-mask" fill="none" stroke-miterlimit="10" stroke-width="4"
                            d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
                    </mask>
                </svg>
                <div class="menu-toggle-path">
                    <div class="path-animation">
                        <div class="path-rotation"></div>
                    </div>
                </div>
            </div>
            <!-- Menu grid -->
            <nav id="menu-grid" class="menu-grid scheme-1 primary">
                <div class="menu-grid-item item-1" data-direction="bt">
                    <div class="menu-grid-item-inner">
                        <!-- Label -->
                        <div class="menu-grid-label top">
                            <span class="label-vertical">
                                <span class="label-line gray"></span>
                                <span class="label-text gray">SINCE 2020</span>
                            </span>
                        </div>
                        <!-- Label -->
                        <div class="menu-grid-label bottom">
                            <span class="label-vertical">
                                <span class="label-line gray"></span>
                                <span class="label-text gray">Ilerna Daw Team</span>
                            </span>
                        </div>
                        <!-- Main menu -->
                        <div class="menu-grid-main">
                            <a href="" class="menu-grid-main-item menu-item">Inicio</a>
                            <a href="" class="menu-grid-main-item menu-item">Fiwii Free</a>
                            <a href="" class="menu-grid-main-item menu-item">Portfolio</a>
                        </div>
                        <!-- Form -->
                        <div class="menu-grid-search focus-trigger">
                            <div class="form-area scheme-2 white">
                                <form class="form-fields needs-validation" novalidate="novalidate">
                                    <div class="form-row row has-icon">
                                        <div class="form-col form-floating">
                                            <button class="button overlay-button"><i
                                                    class="fa-solid fa-magnifying-glass overlay-icon"></i></button>
                                            <input id="InputSearchMenu" class="form-control focus-trigger-field"
                                                placeholder="Buscador..." required="required">
                                            <label for="InputSearchMenu" class="form-label">Buscador...</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-grid-item item-2" data-direction="lr">
                    <div class="menu-grid-item-inner">
                        <!-- Image -->
                        <a href="{{ url('portfolio') }}" class="menu-grid-item-image">
                            <span class="title">Portfolio</span>
                        </a>
                    </div>
                </div>
                <div class="menu-grid-item item-3" data-direction="bt">
                    <div class="menu-grid-item-inner">
                        <!-- Label -->
                        <div class="menu-grid-label">
                            <span class="label-horizontal">
                                <span class="label-line gray"></span>
                                <span class="label-text gray">¿Por que nosotros?</span>
                            </span>
                        </div>
                        <!-- Links -->
                        <div class="menu-grid-minor">
                            <a href="" class="menu-grid-minor-item menu-item"><span
                                    class="menu-grid-minor-item-inner">Seguridad</span></a>
                            <a href="" class="menu-grid-minor-item menu-item"><span
                                    class="menu-grid-minor-item-inner">Rapidez</span></a>
                            <a href="" class="menu-grid-minor-item menu-item"><span
                                    class="menu-grid-minor-item-inner">Soporte 24/7</span></a>
                            <a href="" class="menu-grid-minor-item menu-item"><span
                                    class="menu-grid-minor-item-inner">Confianza asegurada</span></a>
                            <a href="" class="menu-grid-minor-item menu-item"><span
                                    class="menu-grid-minor-item-inner">Escalar tu empresa al futuro</span></a>
                        </div>
                    </div>
                </div>
                <div class="menu-grid-item item-4" data-direction="rl">
                    <div class="menu-grid-item-inner">
                        <!-- Image -->
                        <a href="{{ url('/') }}" class="menu-grid-item-image">
                            <span class="title">Volver al inicio</span>
                        </a>
                    </div>
                </div>
                <div class="menu-grid-item item-5" data-direction="tb">
                    <div class="menu-grid-item-inner">
                        <!-- Contacts -->
                        <div class="menu-grid-minor">
                            <a href="tel:+34691 386 582" class="menu-grid-minor-item"><span
                                    class="menu-grid-minor-item-inner"><i class="fas fa-mobile-alt icon"></i>+34
                                    691 386 582</span></a>
                            <a href="mailto:contact@mail.com" class="menu-grid-minor-item"><span
                                    class="menu-grid-minor-item-inner"><i
                                        class="fas fa-envelope icon"></i>trial@fiwii.com</span></a>
                            <div class="menu-grid-icons">
                                <a href="" class="menu-grid-minor-item"><span
                                        class="menu-grid-minor-item-inner"><i
                                            class="fab fa-facebook-f icon"></i></span></a>
                                <a href="" class="menu-grid-minor-item"><span
                                        class="menu-grid-minor-item-inner"><i
                                            class="fab fa-twitter icon"></i></span></a>
                                <a href="" class="menu-grid-minor-item"><span
                                        class="menu-grid-minor-item-inner"><i
                                            class="fab fa-instagram icon"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </nav>
</header>

<!-- Main -->
<main id="main" class="shock-main">

    <!-- Dynamic slider -->
    <section id="home" class="shock-section dynamic-slider scheme-1" data-autoplay="10000">
        <!-- Index -->
        <div id="slide-index" class="slide-index">
            <span class="slide-index-current">
                <span class="slide-index-inner"></span>
            </span>
            <span class="slide-index-total"></span>
        </div>
        <!-- Navigation -->
        <nav class="slide-navigation">
            <a href="#home" class="slide-navigation-item-prev">
                <span class="arrow-button prev scheme-1 primary">
                    <span class="arrow">
                        <span class="item"></span>
                        <span class="item"></span>
                    </span>
                    <span class="line"></span>
                </span>
            </a>
            <a href="#home" class="slide-navigation-item-next">
                <span class="arrow-button next scheme-1 primary">
                    <span class="arrow">
                        <span class="item"></span>
                        <span class="item"></span>
                    </span>
                    <span class="line"></span>
                </span>
            </a>
        </nav>
        <!-- Info toggle -->
        <div class="slide-info-menu parent">
            <div id="slide-info-toggle" class="slide-info-toggle">
                <span class="arrow-button cross scheme-2 primary">
                    <span class="arrow">
                        <span class="item"></span>
                        <span class="item"></span>
                    </span>
                    <span class="line"></span>
                    <a href="#home" id="slide-info-toggle-text" class="text" data-toggle="Ver menos">Ver
                        más</a>
                </span>
            </div>
            <span class="slide-info-menu-close"></span>
        </div>
        <!-- Slide 1 -->
        <div class="slide-item side-intro current-slide">
            <!-- Intro -->
            <div class="slide-content">
                <span class="slide-title text-1 text-style-1 text-outline black">Prueba</span>
                <div class="slide-description">
                    <span class="text-2 text-style-3 text-italic black">nuestra app <mark
                            class="animated-underline primary-50">gratis</mark> !</span>
                    <div class="description gray">
                        <p>Si todavía no te has decido a adquirir Fiwii puedes probar de forma gratuita nuestra
                            Aplicación.</p>
                    </div>
                </div>
            </div>
            <!-- Image -->
            <div class="slide-image-wrapper">
                <div class="slide-image-inner">
                    <img src="{{ URL::asset('assets/images/trial/01.gif') }}" alt="Image name"
                        class="slide-image bg-color primary-50" />
                </div>
            </div>
            <!-- Action -->
            <div class="slide-action">
                <div class="slide-action-inner">
                    <span class="slide-action-title">¿Necesitas ayuda?</span>
                    <a href="" class="slide-action-link animated-text scheme-1 primary" data-bs-toggle="modal"
                        data-bs-target="#modal">Contacto</a>
                </div>
            </div>
            <!-- Info menu -->
            <div class="slide-info">
                <a href="{{ url('fiwii-test') }}" class="slide-info-item">
                    <h3 class="slide-info-title">Probar Fiwii <i class="fas fa-chevron-right icon"></i></h3>
                    <span class="slide-info-detail">Probar fiwii de forma gratuita<span class="ellipse">...</span><br>
                        al pulsar este botón.</span>
                </a>
                <a href="" class="slide-info-item">
                    <h3 class="slide-info-title">Escalar tu empresa <i class="fas fa-chevron-right icon"></i></h3>
                    <span class="slide-info-detail">Utiliza Fiwii app<span class="ellipse">...</span> y podrás
                        escalar tu empresa al futuro.</span>
                </a>
                <a href="" class="slide-info-item">
                    <h3 class="slide-info-title">Seguridad <i class="fas fa-chevron-right icon"></i></h3>
                    <span class="slide-info-detail">Al utilizar nuestra aplicación siempre le garantizamos su
                        seguridad y la de sus empleados.</span>
                </a>
                <a href="" class="slide-info-item">
                    <h3 class="slide-info-title">Protección <i class="fas fa-chevron-right icon"></i></h3>
                    <span class="slide-info-detail">Con nuestro sistema 'Fiwii Vanguard' sus bases de datos están
                        100% seguras.</span>
                </a>
            </div>
            <!-- Expander -->
            <div class="slide-expander"></div>
        </div>
        <!-- Slide 2 -->
        <div class="slide-item side-intro">
            <!-- Intro -->
            <div class="slide-content">
                <span class="slide-title text-1 text-style-1 text-outline black">Fiwii App</span>
                <div class="slide-description">
                    <span class="text-2 text-style-3 text-italic black">Unete al <mark
                            class="animated-underline secondary-50">futuro</mark> !</span>
                    <div class="description gray">
                        <p>Pulse el botón "Empezar prueba" y unete al Futuro.</p>
                    </div>
                </div>
            </div>
            <!-- Image -->
            <div class="slide-image-wrapper">
                <div class="slide-image-inner">
                    <img src="{{ URL::asset('assets/images/trial/02.gif') }}" alt="Image name"
                        class="slide-image bg-color secondary-50" />
                </div>
            </div>
            <!-- Action -->
            <div class="slide-action">
                <div class="slide-action-inner">
                    <span class="slide-action-title">¿Necesitas ayuda?</span>
                    <a href="" class="slide-action-link animated-text scheme-1 primary" data-bs-toggle="modal"
                        data-bs-target="#modal">Contacto</a>
                </div>
            </div>
            <!-- Info menu -->
            <div class="slide-info">
                <a href="{{ url('fiwii-test') }}" class="slide-info-item">
                    <h3 class="slide-info-title">Probar Fiwii <i class="fas fa-chevron-right icon"></i></h3>
                    <span class="slide-info-detail">Probar fiwii de forma gratuita<span class="ellipse">...</span><br>
                        al pulsar este botón.</span>
                </a>
                <a href="" class="slide-info-item">
                    <h3 class="slide-info-title">Escalar tu empresa <i class="fas fa-chevron-right icon"></i></h3>
                    <span class="slide-info-detail">Utiliza Fiwii app<span class="ellipse">...</span> y podrás
                        escalar tu empresa al futuro.</span>
                </a>
                <a href="" class="slide-info-item">
                    <h3 class="slide-info-title">Seguridad <i class="fas fa-chevron-right icon"></i></h3>
                    <span class="slide-info-detail">Al utilizar nuestra aplicación siempre le garantizamos su
                        seguridad y la de sus empleados.</span>
                </a>
                <a href="" class="slide-info-item">
                    <h3 class="slide-info-title">Protección <i class="fas fa-chevron-right icon"></i></h3>
                    <span class="slide-info-detail">Con nuestro sistema 'Fiwii Vanguard' sus bases de datos están
                        100% seguras.</span>
                </a>
            </div>
            <!-- Expander -->
            <div class="slide-expander"></div>
        </div>
        <!-- Slide 3 -->
        <div class="slide-item side-intro">
            <!-- Intro -->
            <div class="slide-content">
                <span class="slide-title text-1 text-style-1 text-outline black">Explora</span>
                <div class="slide-description">
                    <span class="text-2 text-style-3 text-italic black">nuestro <mark
                            class="animated-underline tertiary-50">portfolio</mark> !</span>
                    <div class="description gray">
                        <p>Tenemos siempre presente la necesidad de mejorar todo lo que hacemos, con el objetivo de
                            ayudar a las personas con nuestros productos y servicios, priorizando la calidad.</p>
                    </div>
                </div>
            </div>
            <!-- Image -->
            <div class="slide-image-wrapper">
                <div class="slide-image-inner"></div>
            </div>
            <!-- Action -->
            <div class="slide-action">
                <div class="slide-action-inner">
                    <span class="slide-action-title">¿Necesitas ayuda?</span>
                    <a href="" class="slide-action-link animated-text scheme-1 primary" data-bs-toggle="modal"
                        data-bs-target="#modal">Contacto</a>
                </div>
            </div>
            <!-- Info menu -->
            <div class="slide-info">
                <a href="{{ url('fiwii-test') }}" class="slide-info-item">
                    <h3 class="slide-info-title">Probar Fiwii <i class="fas fa-chevron-right icon"></i></h3>
                    <span class="slide-info-detail">Probar fiwii de forma gratuita<span class="ellipse">...</span><br>
                        al pulsar este botón.</span>
                </a>
                <a href="" class="slide-info-item">
                    <h3 class="slide-info-title">Escalar tu empresa <i class="fas fa-chevron-right icon"></i></h3>
                    <span class="slide-info-detail">Utiliza Fiwii app<span class="ellipse">...</span> y podrás
                        escalar tu empresa al futuro.</span>
                </a>
                <a href="" class="slide-info-item">
                    <h3 class="slide-info-title">Seguridad <i class="fas fa-chevron-right icon"></i></h3>
                    <span class="slide-info-detail">Al utilizar nuestra aplicación siempre le garantizamos su
                        seguridad y la de sus empleados.</span>
                </a>
                <a href="" class="slide-info-item">
                    <h3 class="slide-info-title">Protección <i class="fas fa-chevron-right icon"></i></h3>
                    <span class="slide-info-detail">Con nuestro sistema 'Fiwii Vanguard' sus bases de datos están
                        100% seguras.</span>
                </a>
            </div>
            <!-- Expander -->
            <div class="slide-expander"></div>
        </div>
    </section>
</main>

<!-- Vertical Lines -->
<div class="vertical-lines scheme-1 primary">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3 align-h-center">
            <span class="line"></span>
        </div>
        <div class="col-12 col-md-6 col-lg-3 align-h-center">
            <span class="line"></span>
        </div>
        <div class="col-12 col-md-6 col-lg-3 align-h-center">
            <span class="line"></span>
        </div>
        <div class="col-12 col-md-6 col-lg-3 align-h-center">
            <span class="line"></span>
        </div>
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

<!-- Modal -->
<div id="modal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-w-50">
        <div class="modal-content shadow">
            <div class="modal-header">
                <i class="fa-solid fa-xmark close-button black primary-hover" data-bs-dismiss="modal"
                    aria-label="Close"></i>
                <!-- Intro -->
                <div class="basic-intro">
                    <h2 class="title black">
                        <span class="text-1 text-style-7">Como podemos </span>
                        <span class="text-2 text-style-8 text-italic"> <mark
                                class="animated-underline primary-50">ayudarte</mark>?</span>
                    </h2>
                    <div class="description gray">
                        <p>Rellena este formulário y nos pondremos en contacto</p>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <!-- Form -->
                <div class="form-area scheme-1 primary">
                    <form action="#" class="form-fields needs-validation ajax-form" novalidate="novalidate">
                        <div class="form-row row">
                            <div class="form-col form-floating col-12 col-md-6">
                                <input type="text" name="name" id="InputModalName" class="form-control"
                                    placeholder="Nombre" required="required">
                                <label for="InputModalName" class="form-label">Nombre</label>
                                <div class="invalid-feedback">Please enter your name.</div>
                                <div class="valid-feedback">Looks good.</div>
                            </div>
                            <div class="form-col form-floating col-12 col-md-6">
                                <input type="email" name="email" id="InputModalEmail" class="form-control"
                                    placeholder="name@example.com" required="required">
                                <label for="InputModalEmail" class="form-label">Email</label>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                                <div class="valid-feedback">Looks good.</div>
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="form-col form-floating col-12">
                                <textarea name="message" id="InputModalMessage" class="form-control form-textarea" rows="3"
                                    placeholder="Mensaje"></textarea>
                                <label for="InputModalMessage" class="form-label">Mensaje</label>
                                <div class="valid-feedback">It's optional, but we'd like to know about it :)</div>
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="form-col col-12 col-md-8">
                                <div class="form-check">
                                    <input type="radio" name="info" id="InputRadioChecked"
                                        class="form-check-input form-radio" checked="checked" required="required">
                                    <label class="form-label form-check-label" for="InputRadioChecked">
                                        Contacto urgente (24 horas)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="info" id="InputRadio"
                                        class="form-check-input form-radio" required="required">
                                    <label class="form-label form-check-label" for="InputRadio">
                                        No me urge prisa (72 horas)
                                    </label>
                                </div>
                            </div>
                            <div class="form-col col-12 col-md-4 align-h-right">
                                <!-- Button -->
                                <button class="button arrow-button next scheme-1 primary">
                                    <span class="arrow">
                                        <span class="item"></span>
                                        <span class="item"></span>
                                    </span>
                                    <span class="line"></span>
                                    <span class="text">Enviar</span>
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
</div>


<!-- Cursor -->
<svg class="cursor-effect primary" width="220" height="220" viewBox="0 0 220 220">
    <defs>
        <filter id="cursor-effect-filter" x="-50%" y="-50%" width="200%" height="200%"
            filterUnits="objectBoundingBox">
            <feTurbulence type="fractalNoise" baseFrequency="0" numOctaves="1" result="warp"></feTurbulence>
            <feOffset dx="-30" result="warpOffset"></feOffset>
            <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="20" in="SourceGraphic"
                in2="warpOffset"></feDisplacementMap>
        </filter>
    </defs>
    <circle class="cursor-effect-inner" cx="110" cy="110" r="20"></circle>
</svg>
@endsection