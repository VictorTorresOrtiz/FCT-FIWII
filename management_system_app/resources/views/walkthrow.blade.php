@extends('templates.walkthrow-template')
@section('walk')
<div class="page-content pb-0">

    <div class="splide single-slider slider-no-arrows slider-no-dots" id="single-slider-1"  data-splide='{"interval":5000}'>
        <div class="splide__track">
            <div class="splide__list">
                <div class="splide__slide">

                    <div class="card bg-9" data-card-height="cover">
                        <div class="card-center text-center">
                            <h1 class="fa-4x color-theme font-900">Novedades</h1>
                            <h4 class="font-300 color-highlight">Fiwii compact view</h4>
                        </div>
                        <div class="card-bottom mb-5 pb-4">
                            <a href="#" class="slider-next btn btn-center-m btn-m bg-highlight rounded-sm font-900 text-uppercase scale-box">Información</a>
                        </div>
                        <div class="card-overlay bg-theme opacity-95"></div>
                    </div>

                </div>
                <div class="splide__slide">


                    <div class="card bg-9" data-card-height="cover">
                        <div class="card-center text-center">
                            <h1 class="font-34 color-theme font-800">Compact View</h1>
                            <p class="font-14 mt-n1 color-highlight">Menos espacio mucha información</p>
                            <p class="boxed-text-xl font-14">
                                Para mejorar su esperiencia de usuarios hemos creado el modo compacto donde contará con toda la información necesaria en la palma de su mano
                            </p>
                        </div>
                        <div class="card-bottom ms-4 me-4 mb-5">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{url('/fiwii')}}" class="btn-full btn btn-m btn-border border-highlight color-highlight rounded-sm font-900 text-uppercase">Salir</a>
                                </div>
                                <div class="col-6">
                                    <a href="{{url('/fiwii-compact')}}" class="slider-next btn-full btn btn-m bg-highlight color-white rounded-sm font-900 text-uppercase scale-box">Empezar</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-overlay bg-theme opacity-95"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of page content-->

</div>
@endsection
