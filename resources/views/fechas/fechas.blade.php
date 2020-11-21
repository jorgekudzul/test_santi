@extends('layouts.main')
@section('title', 'Inicio')
@section('content')
<div id="main-container" class="container">
<br><br>
<h1>Ejercicio 1</h1>
<div class="container">
    <br>
    <form id="facturacion"  action="{{ url('/fechas') }}" method="POST">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-4 form-group">
            <label for="fecha_inicial">Fecha Inicial</label>
            <div class="input-group date" data-provide="datepicker" data-date-format="mm/dd/yyyy">
                <input type="text" class="form-control" name="fecha_inicial" id="fecha_inicial" valuel="">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
        <div class="col-md-4 form-group">
            <label for="fecha_final">Fecha Final</label>
            <div class="input-group date" data-provide="datepicker" data-date-format="mm/dd/yyyy">
                <input type="text" class="form-control" name="fecha_final" id="fecha_final" valuel="">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
        <div class="col-md-4 form-group">
            <label for="periodicidad">Periodicidad</label>
            <select class="custom-select form-control" name="periodicidad" id="periodicidad" value="">
                <option selected>Seleccionar periodicidad</option>
                <option value="1">Mensual</option>
                <option value="2">Bimestral</option>
                <option value="6">Semestral</option>
                <option value="12">Anual</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 form-group">
            <label for="dia_corte">Día de corte</label>
            <input type="text" class="form-control" name="dia_corte" id="dia_corte" valuel="">
        </div>
        <div class="col-md-4 form-group">
            <label for="dia_impresion">Día impresión factura</label>
            <input type="text" class="form-control" name="dia_impresion" id="dia_impresion" valuel="">
        </div>

        <div class="col-md-4 form-group">
            <br>
            <button type="submit" class="btn btn-warning mb-2">Consultar</button>
        </div>
    </div>

    </form>
</div>

<div class="section">
    <div id="grid-container"></div>
</div>
</div>
@endsection