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
    <div class="col-3 alert alert-danger alert-dismissable fade show">
        {{'Por favor llenar todos los campos correctamente'}}
    </div>
    @endif





@if($message = Session::get('Listo'))
<div class="col-3 alert alert-success alert-dismissable fade show">
    <small>{{$message}}</small>
</div>
@endif


        <nav id="nav-index">
            <form action="get">
                 <input type="text" placeholder=" Buscar" id="buscar">
                 <input type="submit" value="Filtar" class="btn btn-primary">
            </form>
        </nav>
<nav id="lnk-create">
    @include('conductor.form');
</nav>



    </div>

<table class="  table table-dart table-striped mt-4" id="table-index">

    <thead>
        <tr>
            <th scope= "col">Nombre</th>
            <th scope= "col">Apellido</th>
            <th scope= "col">Telefono</th>
            <th scope= "col">Direccion</th>
            <th scope= "col">No. Pase</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $conductors as $conductor)
        <tr>
            <td>{{$conductor->nombre}}</td>
            <td>{{$conductor->apellido}}</td>
            <td>{{$conductor->telefono}}</td>
            <td>{{$conductor->direccion}}</td>
            <td>{{$conductor->nopase}}</td>
        </tr>

        @endforeach
    </tbody>
</table>
</body>
</html>
