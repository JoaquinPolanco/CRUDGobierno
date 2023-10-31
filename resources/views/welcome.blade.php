@extends('layouts.app')

@section('content')
    <div class="text-center">
    <div class="text-center">
        <img src="{{ asset('imgs/gob.png') }}" alt="Logo del Gobierno" style="width: 100px; height: auto; display: inline-block; vertical-align: middle;">
        <h1 style="display: inline-block; vertical-align: middle;">Curso de PHP/LAravel</h1>
    </div>
        <h1>Este es mi CRUD de proyectos de gobierno. Mi nombre es Joaquin Ernesto Rodriguez Polanco</h1>
        <a href="{{ url('/proyectos') }}" class="btn btn-primary">Ir al CRUD</a>
    </div>
@endsection
