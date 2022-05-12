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
    @if($message = Session::get('ErrorInsert'))
<div class="col-4 alert alert-danger alert-dismissable fade show">
    <small>{{'Por favor llenar todos los campos correctamente'}}</small>
</div>
@endif

@if($message = Session::get('Listo'))
<div class="col-3 alert alert-success alert-dismissable fade show">
    <small>{{$message}}</small>
</div>


@endif
<div id="div-index">
    <nav id="nav-index">
        <form action="get">
             <input type="text" placeholder=" Buscar" id="buscar">
             <input type="submit" value="Filtar" class="btn btn-primary">
        </form>
    </nav>
<nav id="lnk-create">
@include('vehiculo.form')
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
        <td>
            <form action="{{ route('vehiculos.destroy',$vehiculo->id)}}"  method ="post">

                <a href="/vehiculos/{{$vehiculo->id}}/edit" class="btn btn-success  btn-sm">Editar</a>
                <a href={{ route('vehiculos.show',$vehiculo->id)}} class="btn btn-success  btn-sm">Ver</a>

                @csrf
                 @method('delete')
               <button  type="submit" class="btn btn-danger  btn-sm"> Borrar</button>
           </form>
        </td>
    </tr>

    @endforeach
</tbody>
</table>
</body>
</html>
