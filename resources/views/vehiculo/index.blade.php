@extends('layouts.plantillabase');

@section('contenido')
<a href="vehiculos/create" class="btn btn-primary">Crear+</a>
<table class="  table table-dart table-striped mt-4">

    <thead>
        <tr>
            <th scope= "col">Conductor</th>
            <th scope= "col">Modelo</th>
            <th scope= "col">Año</th>
            <th scope= "col">Matricula</th>
            <th scope= "col">Placa</th>
            <th scope= "col">Tecnomecanica</th>
            <th scope= "col">SOAT</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $vehiculos as $vehiculo)
        <tr>
            <td>{{$vehiculo->conductor}}</td>
            <td>{{$vehiculo->modelo}}</td>
            <td>{{$vehiculo->anno}}</td>
            <td>{{$vehiculo->matricula}}</td>
            <td>{{$vehiculo->placa}}</td>
            <td>{{$vehiculo->tecnomecanica}}</td>
            <td>{{$vehiculo->soat}}</td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection
