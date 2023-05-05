@extends('templates.template-app')
@section('fiwii')

    <div class="page-content">

        <div class="page-title page-title-large">
            <h2 data-username="{{ Auth::user()->name }}" class="greeting-text"></h2>
            <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img"
                data-src="{{ URL::asset('assets/images/avatars/5s.png') }}"></a>
        </div>
        <!---Menu Busqueaa-->
        <div class="content mb-2" style="z-index:10; position: relative;">
            <div class="search-box search-dark shadow-m border-0 mt-4 bg-theme rounded-m bottom-0">
                <i class="fa fa-search ms-n3"></i>
                <input type="text" class="border-0" placeholder="Searching for something? Try 'all'" data-search>
            </div>
            <div class="search-results disabled-search-list shadow-xl rounded-m mt-3">
                <div class="card card-style mx-0 px-3 mt-0 mb-0 shadow-0">
                    <div class="list-group list-custom-large">
                        <a href="#" data-filter-item data-filter-name="all demo smartphone apple iphone ios">
                            <i class="fab fa-apple color-gray-dark"></i>
                            <span>Apple</span>
                            <strong>Works on iOS 10 and Higher</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-filter-item data-filter-name="all demo smartphone samsung android htc oneplus">
                            <i class="fab fa-android color-green-dark"></i>
                            <span>Android</span>
                            <strong>Works on Android 5.1.1 and Higher</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-filter-item data-filter-name="all demo code css3 css">
                            <i class="fab fa-css3 color-blue-dark font-17"></i>
                            <span>CSS3 </span>
                            <strong>Beautiful Design. Simple Code.</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>

                        <a href="#" data-filter-item data-filter-name="fox all demo code html5 html">
                            <i class="fab fa-html5 color-orange-dark"></i>
                            <span>HTML5 </span>
                            <strong>Powerful and Universally Compatible</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-filter-item data-filter-name="all demo support help">
                            <i class="fa fa-life-ring color-red-dark font-17"></i>
                            <span>Support </span>
                            <strong>Elite Quality, 24/7 Support for Buyers</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-filter-item data-filter-name="all demo code js jquery java javascript">
                            <i class="fab fa-js color-yellow-dark font-17"></i>
                            <span>JavaScript </span>
                            <strong>Clean Code, Easy to Use and Modify</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <a href="#" data-filter-item data-filter-name="all demo support elite help documentation">
                            <i class="fa fa-file color-gray-dark font-17"></i>
                            <span>Documentation </span>
                            <strong>Every Feature and Aspect Covered.</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card header-card shape-rounded" data-card-height="210">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>
        <!-- Homepage Slider-->
        <div class="splide single-slider slider-no-arrows slider-no-dots homepage-slider" id="single-slider-1">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                        <div class="card rounded-l mx-2 text-center shadow-l bg-1" data-card-height="320">
                            <div class="card-bottom">
                                <h1 class="font-24 font-700">Nuevo Diseño</h1>
                                <p class="boxed-text-xl">
                                    Hemos rediseñado la interfaz de Fiwii para su mejor usabilidad.
                                </p>
                            </div>
                            <div class="card-overlay bg-gradient-fade"></div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div class="card rounded-l mx-2 text-center shadow-l bg-2" data-card-height="320">
                            <div class="card-bottom">
                                <h1 class="font-24 font-700">PWA READY</h1>
                                <p class="boxed-text-xl">
                                    ¿Sabías que puedes añadir Fiwii a tu pantalla de inicio de su smartphone?.
                                </p>
                            </div>
                            <div class="card-overlay bg-gradient-fade"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-0">
            <div class="row">
                <div class="col-6">
                    <a href="{{ url('to-do') }}" class="btn btn-full btn-m rounded-s text-uppercase font-900 shadow-xl bg-highlight">Tareas</a>
                </div>
                <div class="col-6">
                    <a href="{{ url('walkthrow') }}" class="btn btn-full btn-border btn-m rounded-s text-uppercase font-900 shadow-l border-highlight color-highlight">Diseño compacto</a>
                </div>
            </div>
        </div>


        <div class="content mb-2">
            <h5 class="float-start font-16 font-500">Herramientas</h5>
            <div class="clearfix"></div>
        </div>


        <div class="splide double-slider visible-slider slider-no-arrows slider-no-dots" id="double-slider-1">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide ps-3">
                        <div class="bg-theme rounded-m shadow-m text-center">
                            <a href="{{ url('#') }}">
                                <i class="fa-solid fa-qrcode fa-3x pt-2"></i>
                                <h5 class="font-16">Lector QR</h5>
                                <p class="line-height-s font-11 pb-4">Leer Código QR
                                    <br>en tiempo real
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="splide__slide ps-3">
                        <div class="bg-theme rounded-m shadow-m text-center">
                            <a href="{{ url('#') }}">
                                <i class="fa-solid fa-plus fa-3x pt-2"></i>
                                <h5 class="font-16">Generador QR</h5>
                                <p class="line-height-s font-11 pb-4">
                                    Genere QR <br> de forma automática
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="splide__slide ps-3">
                        <div class="bg-theme rounded-m shadow-m text-center">
                            <a href="{{ url('#') }}">
                                <i class="fa-solid fa-fire-extinguisher fa-3x pt-2"></i>
                                <h5 class="font-16">Sistemas</h5>
                                <p class="line-height-s font-11 pb-4">
                                    Lista de Sistemas <br> en tiempo real.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card card-style preload-img" data-src="images/pictures/20s.jpg" data-card-height="350">
            <div class="card-center text-center">
                <p class="line-height-xl font-19 font-300 color-white ps-3 pe-3 mb-2">
                    ¿Quieres descargar Fiwii?.
                </p>
                <p class="opacity-50 color-white">Para mejorar su experencia le recomendamos que descargue Fiwii en su
                    dispositivo</p>
                <a href="#" class="btn btn-m rounded-s btn-border color-white border-white text-uppercase font-900"
                    data-menu="menu-install-pwa-android">Descargar</a>
            </div>
            <div class="card-overlay bg-highlight opacity-90"></div>
        </div>

        <!-- footer and footer card-->
        <div class="footer" data-menu-load="{{ url('misc.menu-footer') }}"></div>
    </div>
    <!-- end of page content-->

    <!--Menus--->
    <div id="menu-share" class="menu menu-box-bottom menu-box-detached rounded-m"
        data-menu-load="{{ url('misc.menu-share') }}" data-menu-height="420" data-menu-effect="menu-over">
    </div>
    <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260"
        data-menu-load="{{ url('misc.menu') }}" data-menu-active="nav-welcome" data-menu-effect="menu-over">
    </div>

    <!-- Install Prompt for Android -->
    <div id="menu-install-pwa-android" class="menu menu-box-bottom menu-box-detached rounded-l" data-menu-height="350"
        data-menu-effect="menu-parallax">
        <div class="boxed-text-l mt-4">
            <img class="rounded-l mb-3" src="{{ URL::asset('assets/images/logo.png') }}" alt="img" width="90">
            <h4 class="mt-3">Fiwii en su pantalla de Inicio</h4>
            <p>
                Instale Fiwii en su pantalla de inicio y acceda a él como una aplicación normal. ¡Es realmente así de
                simple!
            </p>
            <a href="#"
                class="pwa-install btn btn-s rounded-s shadow-l text-uppercase font-900 bg-highlight mb-2">Añadir a
                Pantalla de Inicio</a><br>
            <a href="#"
                class="pwa-dismiss close-menu color-gray2-light text-uppercase font-900 opacity-60 font-10">Cerrar</a>
            <div class="clear"></div>
        </div>
    </div>

    <!-- Install instructions for iOS -->
    <div id="menu-install-pwa-ios" class="menu menu-box-bottom menu-box-detached rounded-l" data-menu-height="320"
        data-menu-effect="menu-parallax">
        <div class="boxed-text-xl mt-4">
            <img class="rounded-l mb-3" src="{{ URL::asset('assets/app/icons/icon-128x128.png') }}" alt="img"
                width="90">
            <h4 class="mt-3">Fiwii en su pantalla de Inicio</h4>
            <p class="mb-0 pb-3">
                Instale Fiwii en su pantalla de inicio y acceda a él como una aplicación normal. Abra su menú Safari y toque
                "Agregar a la pantalla de inicio".
            </p>
            <div class="clear"></div>
            <a href="#"
                class="pwa-dismiss close-menu color-highlight font-800 opacity-80 text-center text-uppercase">Cerrar</a><br>
            <i class="fa-ios-arrow fa fa-caret-down font-40"></i>
        </div>
    </div>

    <!-- Tutorial diseño compacto -->


</div>
@endsection
