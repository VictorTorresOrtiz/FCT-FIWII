@extends('templates.weather-template')
@section('weather')

    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a></h2>
    </div>

    <form id="form">
        <input type="text" id="search" placeholder="Search By Loaction" autocomplete="off">
    </form>
    <main id="main">

    </main>
    
@endsection
