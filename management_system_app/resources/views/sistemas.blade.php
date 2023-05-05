@extends('templates.template-app')
@section('sistemas')

<div class="page-title page-title-small">
    <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Sistemas</h2>
</div>
<div class="card header-card shape-rounded" data-card-height="150">
    <div class="card-overlay bg-highlight opacity-95"></div>
    <div class="card-overlay dark-mode-tint"></div>

</div>

@foreach ($systems as $system)
<div class="card card-style">
    <div class="content mb-0">
        <div class="float-start">
            <h1 class="mb-0">{{ $system->name }}</h1>
            <p class="font-10"><i class="fa fa-map-marker-alt me-2"></i>{{ $system->ubicacion }}</p>
        </div>
        @if ($system->status == 'Mantenimiento')
        <a href="#" class="float-end btn btn-warning rounded-xl shadow-xl text-uppercase font-900 mt-2 font-11">Mantenimiento</a>
        @elseif ($system->status == 'Revisado')
        <a href="#" class="float-end btn btn-xs bg-highlight rounded-xl shadow-xl text-uppercase font-900 mt-2 font-11">Revisado</a>
        @elseif ($system->status == 'Averiado')
        <a href="#" class="float-end btn btn-danger rounded-xl shadow-xl text-uppercase font-900 mt-2 font-11">Averiado</a>
        @endif
        <div class="clearfix"></div>
        <div class="divider mt-2 mb-3"></div>

        <div class="row">
            <div class="col-4">
                <strong class="color-theme">Reporte:</strong>
                <p class="font-12"><i class="far fa-calendar me-2"></i>{{ $system->created_at }}</p>
            </div>
            <div class="col-4">
                <strong class="color-theme">Hora:</strong>
                <p class="font-12"><i class="far fa-clock me-2"></i>{{ $system->time }}</p>
            </div>
            <div class="col-4">
                <strong class="color-theme">Prioridad:</strong>
                <p class="font-12"><i class="fa fa-dollar-sign me-2"></i>{{ $system->prioridad }}</p>
            </div>
        </div>

        <h5>Descripción del reporte</h5>
        <p>
            {{ $system->description }}
        </p>


        <a href="#" class="btn btn-m btn-full rounded-sm shadow-xl bg-highlight text-uppercase mb-3 font-900">Más información</a>
    </div>
</div>
@endforeach

@endsection
