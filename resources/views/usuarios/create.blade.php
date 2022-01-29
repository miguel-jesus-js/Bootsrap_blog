@extends('layouts.base')
@section('contenido')
<br>
<br>
<div class="container">
    <form action="{{ route('usuarios.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label class="form-label required">Nombre</label>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                      <i class="ti ti-signature"></i>
                    </span>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label required">Apellido materno</label>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                      <i class="ti ti-writing"></i>
                    </span>
                    <input type="text" name="app" class="form-control" placeholder="Apellido paterno" required>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label required">Apellido materno</label>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                      <i class="ti ti-writing"></i>
                    </span>
                    <input type="text" name="apm" class="form-control" placeholder="Apellido materno" required>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label required">Sexo</label>
                <select class="form-select" name="sexo" required>
                    <option value="" disabled selected> Elige una opción</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label required">Nombre de usuario</label>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                      <i class="ti ti-user"></i>
                    </span>
                    <input type="text" name="nombre_user" class="form-control" placeholder="Nombre de usuario" required>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label required">Correo</label>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                      <i class="ti ti-mail"></i>
                    </span>
                    <input type="email" name="correo" class="form-control" placeholder="Correo" required>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label required">Contraseña</label>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                      <i class="ti ti-lock"></i>
                    </span>
                    <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label required">Foto</label>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                      <i class="ti ti-photo"></i>
                    </span>
                    <input type="file" name="foto_perfil" id="foto" class="form-control" placeholder="Foto" required>
                </div>
            </div>
        </div>
        <div class="imagen-reload">
            <img id="imagenSeleccionada" style="max-height: 300px;">
        </div>
        <button class="btn btn-teal" type="submit">Crear usuario</button>
    </form>
</div>
<script>
    $(document).ready(function(e){
        $("#foto").change(function(){
            let reader = new Filareader();
            reader.onload = (e) => {
                $("#imagenSeleccionada").attr('src', e.target.result);
            }
            reader.readAsdataURL(this.files[0]);
        });
    });
</script>
@endsection
