@extends('layouts.main')
@section('title', 'Inicio')
@section('content')
<div id="main-container" class="container">
<br><br>
<h1>Agregar Médico</h1>

<div class="container">
    <form action="{{ url('/medicos') }}" method="POST">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-4 form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" valuel="">
        </div>
        <div class="col-md-4 form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos" valuel="">
        </div>
        <div class="col-md-4 form-group">
            <label for="fecha_nacimiento">Fecha Nacimiento</label>
            <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                <input type="text" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" valuel="">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 form-group">
        <br>
        <button type="submit" class="btn btn-warning mb-2">Enviar</button>
    </div>

    </form>
</div>
</div>
@endsection