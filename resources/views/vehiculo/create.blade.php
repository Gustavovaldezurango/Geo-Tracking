@extends('layouts.plantillabase');

@section('contenido')
<h3>Crear nuevo Vehiculo</h3>
<form action="/vehiculos" method="post">
    @csrf
    <div class="row">
    <div class="col">
        <input type="text" class="form-control" placeholder=" Nombre Conductor" aria-label="Nombre Conductor"   name="conductor">
      </div>
      <div class="col">
        <input type="number" class="form-control" placeholder="Documeto Conductor" aria-label="Documeto Conductor" name="documentoconductor">
      </div>
    </div>
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Modelo" aria-label="Modelo" name="modelo">
        </div>
        <div class="col">
          <input type="number" class="form-control" placeholder="Año" aria-label="Año" name="anno">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Matricula" aria-label="Matricula" name="matricula">
        </div>
        <div class="col">
          <input type="number" class="form-control" placeholder="Placa" aria-label="Placa" name="placa">
        </div>
      </div>
      <div class="row">

      <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Tecnico-Mecanica" aria-label="Tecnico-Mecanica" name="tecnomecanica">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="SOAT" aria-label="SOAT" name="soat">
          </div>


      </div>
      <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Targeta de Propiedad" aria-label="Targeta de Propiedad" name="targetapropiedad">
          </div>
        <div class="col">
          <input type="date" class="form-control" placeholder="Fecha de Vencimiento" aria-label="Fecha de Vencimiento" name="fechavencimiento">
        </div>
      </div>
       <button type="submit"  class="btn btn-primary" tabindex="4">crear</button>

</form>

@endsection
