@extends('layouts.plantillabase');

@section('contenido')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="div-index">
        <nav id="nav-index">
            <form action="get">
                 <input type="text" placeholder=" Buscar" id="buscar">
                 <input type="submit" value="Filtar" class="btn btn-primary">
            </form>
        </nav>
<nav id="lnk-create">
    <a href="vehiculos/create" class="btn btn-primary">Crear+</a>
</nav>



    </div>

<table class="  table table-dart table-striped mt-4" id="table-index">

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
</body>
</html>
@endsection
