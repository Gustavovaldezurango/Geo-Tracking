@extends('layouts.plantillabase');

@section('contenido')



<table class="  table table-dart table-striped mt-4" id="table-index">

    <thead>
        <tr>
            <th scope= "col">Nombre</th>
            <th scope= "col">kit</th>
            <th scope= "col">Direccion</th>
            <th scope= "col">nombre de contacto</th>
            <th scope= "col">Telefono de contacto</th>
            <th scope= "col">correo</th>
            <th scope= "col">Logo</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{$empresa->nombre}}</td>
            <td>{{$empresa->kit}}</td>
            <td>{{$empresa->direccion}}</td>
            <td>{{$empresa->personacontacto}}</td>
            <td>{{$empresa->telefonocontacto}}</td>
            <td>{{$empresa->correo}}</td>
            <td>{{$empresa->logo}}</td>
        </tr>


    </tbody>

    <tfoot>
        <tr>
            <td colspan="7" id="boton"><a href="/empresas" class=" btn btn-success">Devolver</a></td>
        </tr>


    </tfoot>
</table>




@endsection
