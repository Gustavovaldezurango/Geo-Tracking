<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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


        <nav id="nav-index">
            <form action="{{'empresas'}}" method="get">

                 <input type="text" placeholder=" Buscar" id="buscar" name="texto" value="{{$texto}}">
                 <input type="submit" value="Filtar" class="btn btn-primary">
            </form>
        </nav>
        <nav id="lnk-create">
            @include('empresa.form');
        </nav>



    </div>

<table class="  table table-dart table-striped mt-4" id="table-index">

    <thead>
        <tr>
            <th scope= "col">Nombre</th>
            <th scope= "col">Kit</th>
            <th scope= "col">Direccion</th>
            <th scope= "col">Persona Contacto</th>
            <th scope= "col">Telefono</th>
            <th scope= "col">Correo</th>
        </tr>
    </thead>
    <tbody>
        @if(count($empresas) <= 0)
                <tr>
                    <td colspan="6"> no se encuentran registros</td>
                </tr>

       @else
        @foreach ( $empresas as $empresa)
        <tr>
            <td>{{$empresa->nombre}}</td>
            <td>{{$empresa->kit}}</td>
            <td>{{$empresa->direccion}}</td>
            <td>{{$empresa->personacontacto}}</td>
            <td>{{$empresa->telefonocontacto}}</td>
            <td>{{$empresa->correo}}</td>
        </tr>

        @endforeach
        @endif
    </tbody>
</table>
{{$empresas->links()}}
</body>
</html>
