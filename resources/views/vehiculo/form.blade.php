

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Crear+
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear nuevo vehiculo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="/vehiculos" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                <div class="col">

                    <input type="text" class="form-control" placeholder=" Nombre Conductor" aria-label="Nombre Conductor"   name="conductor"  value="{{ old('conductor')}}">
                    @error('conductor')
                    <small>*{{$message}}</small>
                    @enderror
                </div>


                <div class="col">
                    <input type="text" class="form-control" placeholder="Documeto Conductor" aria-label="Documeto Conductor" name="documentoconductor" value="{{old('documentoconductor')}}">
                    @error('documentoconductor')
                    <small>*{{'el campo Documento de Conductor  es obligatorio'}}</small>
                    @enderror
                </div>
                </div>

                <br>
                <br>

                <div class="row">

                    <div class="col">
                      <input type="text" class="form-control" placeholder="Modelo" aria-label="Modelo" name="modelo" value="{{old('modelo')}}">
                      @error('modelo')
                      <small>*{{$message}}</small>
                      @enderror
                    </div>

                    <div class="col">
                      <input type="text" class="form-control" placeholder="Año" aria-label="Año" name="anno" value="{{old('anno')}}">
                       @error('anno')
                        <small>*{{'El campo año es obligatorio.'}}</small>
                        @enderror
                    </div>
                </div>

                <br>
                <br>

                  <div class="row">

                    <div class="col">
                      <input type="text" class="form-control" placeholder="Matricula" aria-label="Matricula" name="matricula" value="{{old('matricula')}}">
                      @error('matricula')
                      <small>*{{$message}}</small>
                      @enderror
                    </div>

                    <div class="col">
                      <input type="text" class="form-control" placeholder="Placa" aria-label="Placa" name="placa" value="{{old('placa')}}">
                      @error('placa')
                      <small>*{{$message}}</small>
                      @enderror
                    </div>
                </div>

                <br>
                <br>

                <div class="row">


                    <div class="col">
                        <input type="file" class="form-control" placeholder="Tecnico-Mecanica" aria-label="Tecnico-Mecanica" name="tecnomecanica" value="{{old('tecnomecanica')}}">
                        @error('tecnomecanica')
                        <small>*{{'El campo tecnico mecanica es obligatorio.'}}</small>
                        @enderror
                    </div>

                    <div class="col">
                        <input type="file" class="form-control" placeholder="SOAT" aria-label="SOAT" name="soat" value="{{old('soat')}}">
                        @error('soat')
                      <small>*{{$message}}</small>
                      @enderror
                    </div>
                </div>

                <br>
                <br>

                <div class="row">

                    <div class="col">
                        <input type="file" class="form-control" placeholder="Targeta de Propiedad" aria-label="Targeta de Propiedad" name="targetapropiedad" value="{{old('targetapropiedad')}}">
                        @error('targetapropiedad')
                        <small>*{{'El campo targeta de propiedad es obligatorio.'}}</small>
                        @enderror
                    </div>

                    <br>
                    <br>

                    <div class="col">
                      <input type="date" class="form-control" placeholder="Fecha de Vencimiento" aria-label="Fecha de Vencimiento" name="fechavencimiento" value="{{old('fechavencimiento')}}">
                      @error('fechavencimiento')
                      <small>*{{'El campo fecha de vencimiento es obligatorio.'}}</small>
                    @enderror
                    </div>
                  </div>
                  <br>
                  <br>
                  <div class="modal-footer">
                    <button type="submit"  class="btn btn-primary"  tabindex="4">crear</button>
                  </div>
        </div>
            </form>
      </div>
    </div>
  </div>

</body>
</html>
