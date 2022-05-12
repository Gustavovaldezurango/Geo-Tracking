

@extends('layouts.plantillabase');

@section('contenido')

<form action="/conductors/{{$conductor->id}}" method="post">
    @csrf
    @method('put')


    <div class="row">

    <div class="col">
        <input type="text" class="form-control" placeholder=" Nombre" aria-label="Nombre"   name="nombre"  value="{{ $conductor->nombre}}">
        @error('nombre')
        <small>*{{$message}}</small>
        @enderror
    </div>

    <div class="col">
        <input type="text" class="form-control" placeholder="Apellido" aria-label="apellido" name="apellido" value="{{$conductor->apellido }}">
        @error('apellido')
        <small>*{{$message}}</small>
        @enderror
    </div>

    <br>
    <br>

    <div class="row">

        <div class="col">
          <input type="text" class="form-control" placeholder="3004567812" aria-label="Telefono" name="telefono" value="{{$conductor->telefono}}">
          @error('telefono')
          <small>*{{$message}}</small>
          @enderror
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="calle  00 #00-00" aria-label="Direccion" name="direccion" value="{{$conductor->direccion}}">
          @error('direccion')
          <small>*{{$message}}</small>
          @enderror

        </div>
    </div>

    <br>
    <br>

      <div class="row">

        <div class="col">
          <input type="text" class="form-control" placeholder="03266545646" aria-label="nopase" name="nopase" value="{{$conductor->nopase}}">
          @error('nopase')
          <small>*{{$message}}</small>
          @enderror

        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="pase" aria-label="pase" name="pase" value="{{$conductor->pase}}">
          @error('pase')
          <small>*{{$message}}</small>
          @enderror

        </div>
    </div>

    <br>
    <br>

    <div class="row">


        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="cedula" name="cedula" value="{{$conductor->cedula}}">
            @error('cedula')
            <small>*{{$message}}</small>
            @enderror

        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="hojavida" aria-label="hojavida" name="hojavida" value="{{$conductor->hojavida}}">
            @error('hojavida')
            <small>*{{$message}}</small>
            @enderror

        </div>
    </div>
      <br>
      <br>
      <div class="modal-footer">
        <button type="submit"  class="btn btn-primary" tabindex="4">crear</button>
      </div>
</div>
</form>

@endsection
