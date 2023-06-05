@extends('templates.template-app')
@section('detalles')

<div class="page-title page-title-small">
    <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Detalles Sistema   </h2>
    <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img" data-src="images/avatars/5s.png"></a>
</div>
<div class="card header-card shape-rounded" data-card-height="150">
    <div class="card-overlay bg-highlight opacity-95"></div>
    <div class="card-overlay dark-mode-tint"></div>
    <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
</div>

<div class="card card-style">
    <div class="content mt-3 mb-2">
        <h1 class="vcard-title text-capitalize font-18  color-highlight">Información General</h1>
        <div class="vcard-field"><strong>Nombre</strong><a href="#">{{ $sistema->name }}</a></div>
        <div class="vcard-field"><strong>Estado</strong><a href="#">{{ $sistema->status }}</a></div>
        <div class="vcard-field border-0"><strong>Prioridad</strong><a href="#">{{ $sistema->prioridad }}</a></div>
    </div>
</div>
<div class="card card-style">
    <div class="content mt-3 mb-2">
        <h1 class="vcard-title text-capitalize font-18  color-highlight pb-3">Informaciób Detallada</h1>
        <div class="vcard-field line-height-l pb-3"><strong>Ubicación</strong><a href="#">{{ $sistema->ubicacion }}</a></div>
        <div class="vcard-field line-height-l pb-3 pt-4 border-0"><strong>Descripción</strong><a href="#">{{ $sistema->description }}</a></div>
    </div>
</div>
<div class="card card-style">
    <div class="content mt-3 mb-2">
        <h1 class="vcard-title text-capitalize font-18  color-highlight">Información Dashboard</h1>
        <div class="vcard-field"><strong>Creado</strong><a href="#">{{ $sistema->created_at }}</a></div>
        <div class="vcard-field"><strong>Actualizado</strong><a href="#">{{ $sistema->updated_at }}</a></div>
    </div>
</div>

<!-- footer and footer card-->
<div class="footer" data-menu-load="menu-footer.html"></div>
</div>
<!-- end of page content-->

@endsection
