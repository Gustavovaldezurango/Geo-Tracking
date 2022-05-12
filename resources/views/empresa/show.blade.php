@extends('layouts.plantillabase');

@section('contenido')
<table>
    <tr>
        <th>Nombre:</th>
        <td> {{$empresa->nombre}}</td>
    </tr>
    <tr>
        <th>kit:</th>
        <td> {{$empresa->kit}}</td>
    </tr>
    <tr>
        <th>Direccion:</th>
        <td> {{$empresa->direccion}}</td>
    </tr>
    <tr>
        <th>nombre de contacto:</th>
        <td> {{$empresa->personacontacto}}</td>
    </tr>
    <tr>
        <th>Telefono de contacto:</th>
        <td> {{$empresa->telefonocontacto}}</td>
    </tr>
    <tr>
        <th>correo:</th>
        <td> {{$empresa->correo}}</td>
    </tr>

</table>



@endsection
