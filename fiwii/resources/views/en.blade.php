@extends('templates.template')
@section('index_en')
    <!-- Preloader -->
    <div id="preloader" class="preloader white" data-delay="0" data-limit="3000">
        <img src="assets/images/logo-gradient.svg" class="emblem" alt="Emblem" />
    </div>

    <!-- Popup Bar -->
    <div id="popup-bar" class="popup-bar bg-gradient scheme-1 shadow d-none">
        <p class="description white-85">Take advantage of our offers! in Fiwii App.</p>
        <a href="{{ url('account-en') }}" target="_blank" class="button simple">
            <span class="button-text white white-hover"><mark class="animated-underline tertiary active">Buy</mark></span>
            <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
        </a>
        <button id="popup-bar-dismiss" class="button close-button">
            <i class="fa-solid fa-xmark button-icon white tertiary-hover"></i>
        </button>
    </div>

    <!-- Header -->
    <header id="header" class="shock-header">
        <!-- Navbar -->
        <nav id="navbar" class="navbar navbar-extended navbar-expand-lg absolute scheme-2 primary">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <!-- Navbar-top -->
                    <div class="navbar-top-wrapper">
                        <div class="container">
                            <div class="navbar-top">
                                <div class="navbar-left">
                                    <!-- Link -->
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown hover">
                                            <a href="#" class="nav-link dropdown-toggle has-icon"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-earth-americas icon"></i>
                                                <span class="text">English</span><img class="image-icon dropdown-icon"
                                                    src="assets/svg/chevron-down-outline.svg" alt="Icon name"
                                                    data-shock-icon="32" />
                                            </a>
                                            <ul class="dropdown-menu animate fade-down">
                                                <li class="nav-item">
                                                    <a href="{{ url('/') }}" class="nav-link">
                                                        <span>Spanish</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link has-icon">
                                                <i class="fa-solid fa-envelope icon"></i>
                                                <span class="text">fiwiiapp@fiwii.com</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="navbar-right">
                                    <!-- Link -->
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="https://goo.gl/maps/Lu3LjtCtgaxDCTrx9" class="nav-link has-icon" target="__blank">
                                                <i class="fa-solid fa-location-dot icon"></i>
                                                <span class="text">Ilerna Sevilla</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tel:+34random" class="nav-link has-icon">
                                                <i class="fa-solid fa-phone icon"></i>
                                                <span class="text">+34 691 333 444</span>
                                            </a>
                                        </li>
                                        <li class="nav-item d-only-desktop">
                                            <a href="https://es-es.facebook.com/" target="__blank" class="nav-link hover-up-down">
                                                <i class="icon fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item d-only-desktop">
                                            <a href="https://twitter.com/" target="__blank" class="nav-link hover-up-down">
                                                <i class="icon fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item d-only-desktop">
                                            <a href="https://www.linkedin.com/" target="__blank" class="nav-link hover-up-down">
                                                <i class="icon fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-divider horizontal-line-animate"></div>
                    <!-- Navbar-bottom -->
                    <div class="navbar-bottom-wrapper fixed-on-scroll">
                        <div class="container">
                            <div class="navbar-bottom">
                                <!-- Brand -->
                                <a class="navbar-brand" href="/">
                                    <!-- <div class="site-title">Site Title</div> -->
                                    <img src="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
                                        data-logo-alt="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}"
                                        data-logo-mobile="{{ URL::asset('assets/images/logo/logo_small_icon_blue.png') }}" alt="Shock Theme"
                                        class="logo" />
                                    <span class="logo-after-text">Fiwii Systems</span>
                                </a>
                                <!-- Responsive menu toggle -->
                                <button class="navbar-toggler" data-bs-target="#navbar-items" data-bs-toggle="collapse"
                                    aria-expanded="false">
                                    <span class="navbar-toggler-icon">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </span>
                                </button>
                                <!-- Navbar links -->
                                <div id="navbar-items" class="collapse navbar-collapse">
                                    <!-- Responsive search form -->
                                    <div class="navbar-collapse-form">
                                        <div class="form-area d-only-mobile d-none scheme-1">
                                            <form class="form-fields needs-validation" novalidate="novalidate">
                                                <div class="form-row row has-icon">
                                                    <div class="form-col form-floating">
                                                        <button class="button overlay-button"><img
                                                                class="overlay-image-icon"
                                                                src="{{ URL::asset('assets/svg/send-outline.svg') }}"
                                                                alt="Icon name" data-shock-icon="32" /></button>
                                                        <input id="InputSearchMobile"
                                                            class="form-control focus-trigger-field"
                                                            name="InputSearchMobile" placeholder="Search Engine..."
                                                            required="required">
                                                        <label for="InputSearchMobile" class="form-label">Search
                                                            Engine...</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Link -->
                                    <ul class="navbar-nav ms-auto">
                                        <li class="nav-item dropdown has-megamenu hover">
                                            <a class="nav-link dropdown-toggle has-icon flutter-underline" href="#"
                                                data-bs-toggle="dropdown">
                                                <span class="text">Fiwii App</span><img class="image-icon dropdown-icon"
                                                    src="{{ URL::asset('assets/svg/chevron-down-outline.svg') }} "
                                                    alt="Icon name" data-shock-icon="32" />
                                                <svg class="flutter-underline-graphic" width="300%" height="100%"
                                                    viewBox="0 0 1200 60" preserveAspectRatio="none">
                                                    <path
                                                        d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0">
                                                    </path>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu megamenu animate fade-down" role="menu">
                                                <div class="container">
                                                    <div class="section-inner-expanded">
                                                        <div class="row g-3">
                                                            <div class="col-12 col-md-6">
                                                                <div class="megamenu-item h-auto">
                                                                    <h6 class="title">Information</h6>
                                                                </div>
                                                                <div class="row g-3">
                                                                    <div class="col-12 col-md-6">
                                                                        <div class="megamenu-item">
                                                                            <ul class="nav-list list-unstyled">
                                                                                <li class="nav-item">
                                                                                    <a href="home-6.html" class="nav-link parent">
                                                                                        <span class="text">Digital Agency</span>
                                                                                        <em class="tag hover-up-down">pricing table</em>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-6">
                                                                        <div class="megamenu-item">
                                                                            <ul class="nav-list list-unstyled">
                                                                                <li class="nav-item">
                                                                                    <a href="home-9.html"
                                                                                        class="nav-link parent">
                                                                                        <span class="text">Personal portfolio</span>
                                                                                        <em class="tag hover-up-down">stylish dark</em>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-3">
                                                                <div class="megamenu-item side-image">
                                                                    <a href="{{ url('account-en') }}" target="_blank"
                                                                        class="megamenu-image black">
                                                                        <img src="{{ URL::asset('assets/images/walpapers/comprar.gif') }}" alt="Image name" class="image">
                                                                        <span class="title">Buy Fiwii</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--MENU TWO--->
                                        <li class="nav-item dropdown has-megamenu hover">
                                            <a class="nav-link dropdown-toggle has-icon flutter-underline" href="#about">
                                                <span class="text">About Us</span>
                                                <svg class="flutter-underline-graphic" width="300%" height="100%"
                                                    viewBox="0 0 1200 60" preserveAspectRatio="none">
                                                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown has-megamenu hover">
                                            <a class="nav-link dropdown-toggle has-icon flutter-underline"
                                                href="#pricing">
                                                <span class="text">Pricing</span>
                                                <svg class="flutter-underline-graphic" width="300%" height="100%"
                                                    viewBox="0 0 1200 60" preserveAspectRatio="none">
                                                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Action -->
                                    <div class="navbar-nav navbar-action">
                                        <div class="nav-item">
                                            <a href="#pricing" class="button small-button rounded primary-15 accent-hover button-collision">
                                                <span class="button-text accent white-hover">Buy Fiwii</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main -->
    <main id="main" class="shock-main">

        <!-- Banner -->
        <section class="shock-section has-holder pt-2 pb-3 bg-color gray-10">
            <div class="container">
                <div class="banner mb-3">
                    <div class="row">
                        <div class="col-12 col-lg-3 align-v-center d-only-desktop">
                            <!-- Image -->
                            <div class="image-wrapper p-2">
                                <img src="{{ URL::asset('assets/images/walpapers/c-1.png') }}" alt="Image name" class="image floating-item" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 align-v-center">
                            <!-- Intro -->
                            <div class="basic-intro text-center">
                                <h1 class="title black">
                                    <span class="text-1 d-block text-style-3">Fiwii Systems </span>
                                    <span class="text-2 text-style-4 text-italic">The future is <mark class="animated-underline accent">now</mark>.</span>
                                </h1>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 align-v-center">
                            <!-- Image -->
                            <div class="image-wrapper p-2">
                                <img src="{{ URL::asset('assets/images/walpapers/c-2.png') }}" alt="Image name" class="image floating-item" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row g-2">
                    <div class="col-12 col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="200">
                        <div class="card hover-up">
                            <div class="card-body small-shadow rounded-3 bg-color white">
                                <div class="title align-v-center text-style-11 black">
                                    <i class="bi bi-phone"></i>
                                    <span class="text ms-05">PWA Ready</span>
                                </div>
                                <p class="description">Native application for IOS and Android.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="400">
                        <div class="card hover-up">
                            <div class="card-body small-shadow rounded-3 bg-color white">
                                <div class="title align-v-center text-style-11 black">
                                    <i class="fa-regular fa-pen-to-square icon"></i>
                                    <span class="text ms-05">Real time data </span>
                                </div>
                                <p class="description">Edit, drop or create systems in real time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="600">
                        <div class="card hover-up">
                            <div class="card-body small-shadow rounded-3 bg-color white">
                                <div class="title align-v-center text-style-11 black">
                                    <i class="bi bi-lightning"></i>
                                    <span class="text ms-05">Fast</span>
                                </div>
                                <p class="description">Application optimized to offer the best experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-delay="800">
                        <div class="card hover-up">
                            <div class="card-body small-shadow rounded-3 bg-color white">
                                <div class="title align-v-center text-style-11 black">
                                    <i class="bi bi-shield-check"></i>
                                    <span class="text ms-05">Secure</span>
                                </div>
                                <p class="description">Total protection in all of your databases.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us -->
        <section class="shock-section pt-3 pb-3 bg-color gray-10">
            <a name="about"></a>
            <div class="container">
                <div class="row g-4">
                    <div class="col-12 col-md-7 align-v-center">
                        <div class="holder">
                            <!-- Intro -->
                            <div class="basic-intro">
                                <h2 class="title black">
                                    <span class="text-1 text-style-5">About </span>
                                    <span class="text-2 text-style-6 text-italic"><mark class="animated-underline accent">us</mark>.</span>
                                </h2>
                                <div class="description gray">
                                    <p>We keep in mind that we always need to improve everything we do, aiming to help people with our products and services, prioritizing quality and security.</p>
                                    <p>To connect the brand with the target audience, we give our best. Your security is save in our hands.</p>
                                </div>
                            </div>
                            <hr class="gray-25">
                            <figure class="blockquote">
                                <blockquote class="blockquote-body text-style-11 black">
                                    <p>"Don’t let yesterday take up too much of today".</p>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    <cite title="Source Title">Steve Jobs / Apple's creator</cite>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <!-- Image -->
                        <div class="image-wrapper" data-lax="inertia-top">
                            <img src="{{ URL::asset('assets/images/walpapers/app.png') }}" class="image" alt="Image name" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial -->
        <section class="shock-section pt-3 pb-3 bg-color gray-10">
            <div class="container">
                <div class="row g-2">
                    <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in-up" data-aos-delay="200">
                        <div class="card">
                            <div class="card-body small-shadow rounded-3 bg-color white">
                                <i class="fas fa-quote-right overlay-icon gray-50"></i>
                                <div class="title align-v-center text-style-11 black">
                                    <div class="image-wrapper circular-image me-05">
                                        <img src="{{URL::asset('assets/images/clients/laura-garcia.png')}}" alt="Image name"
                                            class="image small-shadow" />
                                    </div>
                                    <span class="text ms-05">Laura García</span>
                                </div>
                                <p class="description">I am very satisfied with the service provided. Congratulations to
                                    the development team.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in-up" data-aos-delay="400">
                        <div class="card">
                            <div class="card-body small-shadow rounded-3 bg-color white">
                                <i class="fas fa-quote-right overlay-icon gray-50"></i>
                                <div class="title align-v-center text-style-11 black">
                                    <div class="image-wrapper circular-image me-05">
                                        <img src="{{URL::asset('assets/images/clients/alice-johnson.png')}}" alt="Image name"
                                            class="image small-shadow" />
                                    </div>
                                    <span class="text ms-05">Alice Johnson</span>
                                </div>
                                <p class="description">This is the most amazing product I have ever seen. I am very happy
                                    with the delivery time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in-up" data-aos-delay="600">
                        <div class="card">
                            <div class="card-body small-shadow rounded-3 bg-color white">
                                <i class="fas fa-quote-right overlay-icon gray-50"></i>
                                <div class="title align-v-center text-style-11 black">
                                    <div class="image-wrapper circular-image me-05">
                                        <img src="{{URL::asset('assets/images/clients/eric-dier.png')}}" alt="Image name"
                                            class="image small-shadow" />
                                    </div>
                                    <span class="text ms-05">Eric Dier</span>
                                </div>
                                <p class="description">I had some problems, but the staff helped me to fix everything and
                                    now everything is fine.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing table -->
        <a name="pricing"></a>
        <section class="shock-section pt-3 pb-3 bg-color gray-10 js-switch-price">
            <a name="pricing"></a>
            <div class="container">
                <!-- Intro -->
                <div class="basic-intro mb-35 text-center">
                    <h2 class="title black">
                        <span class="text-1 text-style-5">Fiwii </span>
                        <span class="text-2 text-style-6 text-italic"><mark class="animated-underline accent">join the
                                future</mark>.</span>
                    </h2>
                    <div class="description">
                        <!-- Plan switcher -->
                        <div class="form-area scheme-1 black">
                            <div class="plan-switcher">
                                <label class="form-label">Annually</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input form-switch js-switch-price-button" type="checkbox"
                                        id="InputSwitchChecked" checked="checked">
                                </div>
                                <label class="form-label">Monthly</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in-up" data-aos-delay="200">
                        <div class="card has-price rounded shadow parent">
                            <!-- Header -->
                            <div class="card-header rounded-top text-center bg-color accent">
                                <h3 class="title m-0 text-style-11 text-italic white">
                                    <span>Basic</span>
                                    <span class="zzz mt-1 mb-1 scheme-3 accent"></span>
                                </h3>
                                <!-- Price -->
                                <div class="price-wrapper">
                                    <span class="currency text-style-8 white-75">€</span>
                                    <span class="price text-style-3 white hover-up-down" data-annual="16"
                                        data-monthly="24">24</span>
                                    <span class="billing text-style-8 white-75">/mo</span>
                                </div>
                            </div>
                            <div class="card-body rounded-bottom bg-color white">
                                <!-- List -->
                                <ul class="checklist">
                                    <li class="item">
                                        <span class="text">2 data bases</span>
                                        <img class="image-icon primary" src="{{ URL::asset('assets/svg/checkmark-outline.svg') }}" alt="Icon name" data-shock-icon="32" />
                                    </li>
                                    <li class="item">
                                        <span class="text">125GB storage</span>
                                        <img class="image-icon primary" src="{{ URL::asset('assets/svg/checkmark-outline.svg') }}" alt="Icon name" data-shock-icon="32" />
                                    </li>
                                    <li class="item">
                                        <span class="text">10 users accounts</span>
                                        <img class="image-icon primary" src="{{ URL::asset('assets/svg/checkmark-outline.svg') }}" alt="Icon name" data-shock-icon="32" />
                                    </li>
                                    <li class="item">
                                        <span class="text">1 admin account</span>
                                        <img class="image-icon primary" src="{{ URL::asset('assets/svg/checkmark-outline.svg') }}" alt="Icon name" data-shock-icon="32" />
                                    </li>
                                    <li class="item">
                                        <span class="text">Lifetime support</span>
                                        <img class="image-icon primary" src="{{ URL::asset('assets/svg/close-outline.svg') }}" alt="Icon name" data-shock-icon="32" />
                                    </li>
                                </ul>
                                <!-- Button -->
                                <div class="button-wrapper align-h-center hover-up-down">
                                    <span class="button w-100 rounded accent accent-hover">
                                        <span class="button-text white white-hover">Buy Fiwii Basic </span>
                                        <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                                    </span>
                                </div>
                            </div>
                            <!-- Link -->
                            <a href="{{ url('plans.basic-en') }}" class="full-link"></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in-up" data-aos-delay="400">
                        <div class="card has-price rounded shadow parent">
                            <!-- Header -->
                            <div class="card-header rounded-top text-center bg-color secondary">
                                <!-- Label -->
                                <span class="label-vertical to-bottom-right-out">
                                    <span class="label-line gray"></span>
                                    <span class="label-text gray">Most popular</span>
                                </span>
                                <h3 class="title m-0 text-style-11 text-italic white">
                                    <span class="bg-color secondary">Enterprise</span>
                                    <span class="zzz mt-1 mb-1 scheme-3 secondary"></span>
                                </h3>
                                <!-- Price -->
                                <div class="price-wrapper">
                                    <span class="currency text-style-8 white-75">€</span>
                                    <span class="price text-style-3 white hover-up-down" data-annual="28"
                                        data-monthly="39">39</span>
                                    <span class="billing text-style-8 white-75">/mo</span>
                                </div>
                            </div>
                            <div class="card-body rounded-bottom bg-color white">
                                <!-- List -->
                                <!-- List -->
                                <ul class="checklist">
                                    <li class="item">
                                        <span class="text">10 data bases</span>
                                        <img class="image-icon primary"
                                            src="{{ URL::asset('assets/svg/checkmark-outline.svg') }}" alt="Icon name"
                                            data-shock-icon="32" />
                                    </li>
                                    <li class="item">
                                        <span class="text">500GB storage</span>
                                        <img class="image-icon primary"
                                            src="{{ URL::asset('assets/svg/checkmark-outline.svg') }}" alt="Icon name"
                                            data-shock-icon="32" />
                                    </li>
                                    <li class="item">
                                        <span class="text">30 users accounts</span>
                                        <img class="image-icon primary"
                                            src="{{ URL::asset('assets/svg/checkmark-outline.svg') }}" alt="Icon name"
                                            data-shock-icon="32" />
                                    </li>
                                    <li class="item">
                                        <span class="text">2 admin accounts</span>
                                        <img class="image-icon primary"
                                            src="{{ URL::asset('assets/svg/checkmark-outline.svg') }}" alt="Icon name"
                                            data-shock-icon="32" />
                                    </li>
                                    <li class="item">
                                        <span class="text">Lifetime support</span>
                                        <img class="image-icon primary"
                                            src="{{ URL::asset('assets/svg/checkmark-outline.svg') }}" alt="Icon name"
                                            data-shock-icon="32" />
                                    </li>
                                </ul>
                                <!-- Button -->
                                <div class="button-wrapper align-h-center hover-up-down">
                                    <span class="button w-100 rounded secondary secondary-hover">
                                        <span class="button-text white white-hover">Buy Fiwii Enterprise</span>
                                        <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                                    </span>
                                </div>
                            </div>
                            <!-- Link -->
                            <a href="{{ url('plans.enterprise-en') }}" class="full-link"></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in-up" data-aos-delay="600">
                        <div class="card has-price rounded shadow parent">
                            <!-- Header -->
                            <div class="card-header rounded-top text-center bg-color tertiary">
                                <h3 class="title m-0 text-style-11 text-italic white">
                                    <span class="bg-color tertiary">Premium</span>
                                    <span class="zzz mt-1 mb-1 scheme-3 tertiary"></span>
                                </h3>
                                <!-- Price -->
                                <div class="price-wrapper">
                                    <span class="currency text-style-8 white-75">€</span>
                                    <span class="price text-style-3 white hover-up-down" data-annual="46"
                                        data-monthly="60">60</span>
                                    <span class="billing text-style-8 white-75">/mo</span>
                                </div>
                            </div>
                            <div class="card-body rounded-bottom bg-color white">
                                <!-- List -->
                                <ul class="checklist">
                                    <li class="item">
                                        <span class="text">Unlimited databases</span>
                                        <img class="image-icon primary"
                                            src="{{ URL::asset('assets/svg/checkmark-outline.svg') }}" alt="Icon name"
                                            data-shock-icon="32" />
                                    </li>
                                    <li class="item">
                                        <span class="text">Unlimited storage</span>
                                        <img class="image-icon primary"
                                            src="{{ URL::asset('assets/svg/checkmark-outline.svg') }}" alt="Icon name"
                                            data-shock-icon="32" />
                                    </li>
                                    <li class="item">
                                        <span class="text">Unlimited user account</span>
                                        <img class="image-icon primary"
                                            src="{{ URL::asset('assets/svg/checkmark-outline.svg') }}" alt="Icon name"
                                            data-shock-icon="32" />
                                    </li>
                                    <li class="item">
                                        <span class="text">Unlimited admin account</span>
                                        <img class="image-icon primary"
                                            src="{{ URL::asset('assets/svg/checkmark-outline.svg') }}" alt="Icon name"
                                            data-shock-icon="32" />
                                    </li>
                                    <li class="item">
                                        <span class="text">Lifetime support</span>
                                        <img class="image-icon primary"
                                            src="{{ URL::asset('assets/svg/checkmark-outline.svg') }}" alt="Icon name"
                                            data-shock-icon="32" />
                                    </li>
                                </ul>
                                <!-- Button -->
                                <div class="button-wrapper align-h-center hover-up-down">
                                    <span class="button w-100 rounded tertiary tertiary-hover">
                                        <span class="button-text white white-hover">Buy Fiwii Premium</span>
                                        <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                                    </span>
                                </div>
                            </div>
                            <!-- Link -->
                            <a href="{{ url('plans.premium-en') }}" class="full-link"></a>
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
                <a href="https://es-es.facebook.com/" target="__blank" class="link black black-hover"><i class="icon fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/" target="__blank" class="link black black-hover"><i class="icon fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/" target="__blank" class="link black black-hover"><i class="icon fab fa-linkedin-in"></i></a>
                <span class="label-line black"></span>
            </span>
        </div>
    </div>

    <!-- Side Widget -->
    <div class="side-widget to-right invert-color mix-blend-difference d-only-desktop">
        <div class="item">
            <a href="#" class="link black black-hover hover-up">
                <span class="widget label-vertical">
                    <span class="label-text black"><i class="fa-solid fa-arrow-right-long icon"></i>Scroll to top</span>
                </span>
            </a>
        </div>
    </div>

    <!-- Cursor -->
    <svg class="cursor-effect secondary" width="220" height="220" viewBox="0 0 220 220">
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
