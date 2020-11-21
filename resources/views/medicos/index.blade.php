@extends('layouts.main')
@section('title', 'Grid')
@section('content')
<div id="main-container" class="container">
<br><br>
<h1>Ejercicio 2</h1>
<a class="btn btn-success mb-2" href="{{ url('/medicos/create') }}">Agregar</a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach( @$medicos as $medico) : ?>
    <tr>
      <td><?= $medico->nombre; ?></td>
      <td><?= $medico->apellidos; ?></td>
      <td><?= $medico->fecha_nacimiento; ?></td>
      <td>
        <a class="btn btn-warning mb-2" href="{{ url('/medicos/'.$medico->id.'/edit') }}">Editar</a>
        <form method="post" action="{{ url('/medicos/'.$medico->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger mb-2" onClick="return confirm('¿Borrar?')">Borrar</button>
        </form>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>
@endsection