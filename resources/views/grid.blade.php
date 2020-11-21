@extends('layouts.main')
@section('title', 'Grid')
@section('content')
<div id="main-container" class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Fecha Inicio</th>
      <th scope="col">Fecha Fin</th>
      <th scope="col">Fecha Impresión</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach( $fechas as $fecha) : ?>
    <tr>
      <td><?= $fecha['fecha_inicial']; ?></td>
      <td><?= $fecha['fecha_final']; ?></td>
      <td><?= $fecha['dia_impresion']; ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>
@endsection