@extends('templates.template-app')
<h2>Información del sistema</h2>


<h1>Id: {{ $sistema->id }}</h1>
<h1>Nombre: {{ $sistema->name }}</h1>
<h1>Descripción: {{ $sistema->description }}</h1>
<h1>Ubicación: {{ $sistema->ubicacion }}</h1>
<h1>Estado: {{ $sistema->status }}</h1>
<h1>Prioridad: {{ $sistema->prioridad }}</h1>
<h1>Sistema creado el: {{ $sistema->created_at }}</h1>
<h1>Sistema actualizado por ultima vez el: {{ $sistema->updated_at }}</h1>

<a href="{{ url('sistemas') }}">Volver</a>
