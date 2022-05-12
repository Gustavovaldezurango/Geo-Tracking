@extends('layouts.plantillabase');

@section('contenido')


<table class="  table table-dart table-striped mt-4" id="table-index">

    <thead>
        <tr>
            <th scope= "col">Nombre</th>
            <th scope= "col">Apellido</th>
            <th scope= "col">Telefono</th>
            <th scope= "col">Direccion</th>
            <th scope= "col">No. Pase</th>
            <th scope= "col">Pase</th>
            <th scope= "col">cedula</th>
            <th scope= "col">hola de vida</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{$conductor->nombre}}</td>
            <td>{{$conductor->apellido}}</td>
            <td>{{$conductor->telefono}}</td>
            <td>{{$conductor->direccion}}</td>
            <td>{{$conductor->nopase}}</td>
            <td>{{$conductor->pase}}</td>
            <td>{{$conductor->cedula}}</td>
            <td>{{$conductor->hojavida}}</td>



        </tr>


    </tbody>
</table>
<a href="/conductors"  class=" btn btn-success">Devolver</a>


@endsection
