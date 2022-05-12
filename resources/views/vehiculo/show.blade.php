@extends('layouts.plantillabase');

@section('contenido')


<table class="  table table-dart table-striped mt-4" id="table-index">

    <thead>
        <tr>
            <th scope= "col">Conductor</th>
            <th scope= "col">Documento de Conductor</th>
            <th scope= "col">Modelo</th>
            <th scope= "col">Año</th>
            <th scope= "col">Matricula</th>
            <th scope= "col">Placa</th>
            <th scope= "col">Tecnico Mecanica</th>
            <th scope= "col">SOAT</th>
            <th scope= "col">Targeta De Propiedad</th>
            <th scope= "col">Fecha De Vencimiento</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{$vehiculo->conductor}}</td>
            <td>{{$vehiculo->documentoconductor}}</td>
            <td>{{$vehiculo->modelo}}</td>
            <td>{{$vehiculo->anno}}</td>
            <td>{{$vehiculo->matricula}}</td>
            <td>{{$vehiculo->placa}}</td>
            <td>{{$vehiculo->tecnicomecanica}}</td>
            <td>{{$vehiculo->soat}}</td>
            <td>{{$vehiculo->targetapropiedad}}</td>
            <td>{{$vehiculo->fechavencimiento}}</td>
        </tr>


    </tbody>




</table>
<a href="/vehiculos"  class=" btn btn-success">Devolver</a>



@endsection
