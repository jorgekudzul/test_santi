@extends('layouts.main')
@section('title', 'Inicio')
@section('content')
<div id="main-container" class="container">
<br><br>
    <div class="d-flex flex-column">
        <div class="row">
            <div class="col text-center">
                <a class="btn btn-success mb-4" href="{{ url( '/fechas' ) }}">Ejercicio Uno</a>
            </div>
            <div class="col text-center">
                <a class="btn btn-primary mb-4" href="{{ url( '/medicos' ) }}">Ejercicio Dos</a>
            </div>
        </div>
    </div>
</div>
@endsection