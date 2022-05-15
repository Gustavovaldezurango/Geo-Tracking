<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Crear+
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear Nueva Empresa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <table>
                    <form action="/empresas" method="post" enctype="multipart/form-data">
                        @csrf




                        <div class="row">

                            <div class="col">

                                <input type="text" class="form-control" placeholder=" Nombre" aria-label="Nombre"
                                    name="nombre" value="{{ old('nombre') }}">
                                @error('nombre')
                                    <small>*{{ $message }}</small>
                                @enderror

                            </div>

                            <div class="col">
                                <input type="text" class="form-control" placeholder="Kit" aria-label="Kit" name="kit"
                                    value="{{ old('kit') }}">
                                @error('Kit')
                                    <small>*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <br>
                        <br>

                        <div class="row">

                            <div class="col">
                                <input type="text" class="form-control" placeholder="Direccion" aria-label="Direccion"
                                    name="direccion" value="{{ old('direccion') }}">
                                @error('personacontacto')
                                    <small>*{{ $message }}</small>
                                @enderror

                            </div>



                            <div class="col">
                                <input type="text" class="form-control" placeholder="Persona de contacto"
                                    aria-label="personacontacto" name="personacontacto"
                                    value="{{ old('personacontacto') }}">
                                @error('personacontacto')
                                    <small>*{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        <br>
                        <br>

                        <div class="row">

                            <div class="col">
                                <input type="text" class="form-control" placeholder="Telefono de contacto"
                                    aria-label="telefonocontacto" name="telefonocontacto"
                                    value="{{ old('telefonocontacto') }}">
                                @error('telefonocontacto')
                                    <small>*{{ $message }}</small>
                                @enderror

                            </div>

                            <div class="col">
                                <input type="file" class="form-control" placeholder="Logo" aria-label="logo"
                                    name="logo">
                                @error('logo')
                                    <small>*{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        <br>
                        <br>

                        <div class="row">

                            <div class="col">

                                <input type="email" class="form-control" placeholder="Correo" aria-label="correo"
                                    name="correo" value="{{ old('correo') }}">
                                @error('correo')
                                    <small>*{{ $message }}</small>
                                @enderror

                            </div>
                            <div class="col">
                                <input type="password" class="form-control" placeholder="Contraseña"
                                    aria-label="contraseña" name="contraseña">
                                @error('contraseña')
                                    <small>*{{ $message }}</small>
                                @enderror

                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" tabindex="4">crear</button>
                        </div>
            </div>
            </form>
            </table>

        </div>
    </div>
</div>
