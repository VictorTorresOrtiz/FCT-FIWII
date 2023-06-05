@extends('templates.template-app')
@section('sistemas')
<div id="footer-bar" class="footer-bar-5">
    <a href="{{ url('profile') }}"><i class="bi bi-person"></i><span>Perfil</span></a>
    <a href="{{ url('sistemas') }}" class="active-nav"><i class="bi bi-list-nested"></i></i><span>Sistemas</span></a>
    <a href="{{ url('fiwii') }}"><i class="bi bi-house"></i><span>Home</span></a>
    <a href="{{ url('qrLector') }}"><i class="bi bi-upc-scan"></i><span>QR</span></a>
    <a href="{{ url('conf') }}"><i class="bi bi-gear"></i><span>Configuración</span></a>
</div>
<div class="page-title page-title-small">
    <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Sistemas</h2>
</div>
<div class="card header-card shape-rounded" data-card-height="150">
    <div class="card-overlay bg-highlight opacity-95"></div>
    <div class="card-overlay dark-mode-tint"></div>

</div>

<div class="card card-style">
    <div class="content mb-0">
        <div class="float-start">
            <p class=" text-uppercase font-900 mt-2 font-15">Sistemas Disponibles</p>
        </div>
        <p href="#" class="float-end btn btn-primary rounded-xl shadow-xl text-uppercase font-900 mt-2 font-11">Fiwii</p>
        <div class="clearfix"></div>
        <div class="divider mt-2 mb-3"></div>

    </div>
</div>

@foreach ($systems as $system)
<div class="card card-style">
    <div class="content mb-0">
        <div class="float-start">
            <h1 class="mb-0">{{ $system->name }}</h1>
            <p class="font-10"><i class="fa fa-map-marker-alt me-2"></i>{{ $system->ubicacion }}</p>
        </div>
        @if ($system->status == 'Mantenimiento')
        <p href="#" class="float-end btn btn-warning rounded-xl shadow-xl text-uppercase font-900 mt-2 font-11">Mantenimiento</p>
        @elseif ($system->status == 'Revisado')
        <p href="#" class="float-end btn btn-success rounded-xl shadow-xl text-uppercase font-900 mt-2 font-11">Revisado</p>
        @elseif ($system->status == 'Averiado')
        <p href="#" class="float-end btn btn-danger rounded-xl shadow-xl text-uppercase font-900 mt-2 font-11">Averiado</p>
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
                <p class="font-12"><i class="fa fa-bolt" aria-hidden="true"></i> {{ $system->prioridad }}</p>
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
