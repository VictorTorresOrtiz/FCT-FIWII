@extends('templates.template-app')
@section('to-do')
    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Trabajos Hoy</h2>
        <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img"
            data-src="{{ URL::asset('assets/images/avatars/5s.png') }}"></a>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
    </div>

    <div class="card card-style">
        <div class="content">
            Trabajos asignados a{{ Auth::user()->username }}
        </div>
    </div>

    <div class="card card-style">
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-center text-center">
                <h1 class="color-white">Lista Detallada</h1>
                <p class="color-white mb-0 boxed-text-l opacity-70">
                    Pulsar tarea para finalizarla
                </p>
            </div>
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>
        <div style="height:150px;"></div>
        <div class="content">
            <div class="todo-list list-group list-custom-large">
                <a href="#">
                    <i class="fa fa-cog rounded-xl bg-fade-magenta-dark color-magenta-dark font-12"></i>
                    <span>Ejemplo</span>
                    <strong>Desc Ejemplo</strong>
                    <div class="form-check icon-check">
                        <input class="form-check-input" type="checkbox" value="" id="check134">
                        <label class="form-check-label disabled" for="check134">Checkbox 1</label>
                        <i class="icon-check-1 far fa-square color-gray-dark font-16"></i>
                        <i class="icon-check-2 far fa-check-square font-16 color-highlight"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
