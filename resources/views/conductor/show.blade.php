@extends('layouts.plantillabase');

@section('contenido')
<table>
    <tr>
        <th>Nombre:</th>
        <td>{{$conductor->nombre}}</td>
    </tr>
    <tr>
        <th>Apellido:</th>
        <td>{{$conductor->apellido}}</td>
    </tr>
    <tr>
        <th>Telefono:</th>
        <td>{{$conductor->telefono}}</td>
    </tr>
    <tr>
        <th>Direccion:</th>
        <td>{{$conductor->direccion}}</td>
    </tr>
    <tr>
        <th>Numero De Pase:</th>
        <td>{{$conductor->nopase}}</td>
    </tr>


</table>



@endsection
