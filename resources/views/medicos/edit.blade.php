@extends('layouts.main')
@section('title', 'Inicio')
@section('content')
<div id="main-container" class="container">
<div class="container">
    <br>
    <form action="{{ url('/medicos/'.$medico->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="row">
        <div class="col-md-4 form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $medico->nombre ?>">
        </div>
        <div class="col-md-4 form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?= $medico->apellidos ?>">
        </div>
        <div class="col-md-4 form-group">
            <label for="fecha_nacimiento">Fecha Nacimiento</label>
            <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                <input type="text" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="<?= $medico->fecha_nacimiento ?>">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 form-group">
        <br>
        <button type="submit" class="btn btn-primary mb-2">Editar</button>
        <a class="btn btn-success mb-2" href="{{ url('/medicos') }}">Regresar</a>
    </div>

    </form>
</div>
</div>
@endsection