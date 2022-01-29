@extends('layouts.base')
@section('contenido')
<br>
<br>
<div class="container">
    <form id="adduser" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm">
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
                    <input type="text" name="nombre_user" class="form-control" minlength="8" maxlength="15" pattern="{8,15}" placeholder="Nombre de usuario" required>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label required">Correo</label>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                      <i class="ti ti-mail"></i>
                    </span>
                    <input type="email" name="correo" class="form-control" placeholder="Correo" required pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$">
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label required">Contraseña</label>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                      <i class="ti ti-lock"></i>
                    </span>
                    <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" minlength="8" maxlength="15" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,15}$">
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
        <span class="avatar avatar-xl">
            <img id="imagenSeleccionada">
        </span>
        <br>
        <br>
        <button class="btn btn-teal" type="submit">Crear usuario</button>
    </form>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(e){
        $("#foto").change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $("#imagenSeleccionada").attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });

    $(document).on('submit', '#adduser', function() { 
        //Obtenemos datos.
         var data = $(this).serialize(); 
         $.ajax({  
            type : 'POST',
            url  : '{{ route('usuarios.store') }}',
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,

            success: function(response){
                var jsonData = JSON.parse(response);
                console.log(jsonData);
                  if (jsonData ){
                    let timerInterval
                    Swal.fire({
                        position: 'top-end',
                        title: jsonData.title,
                        html: jsonData.msj,
                        icon: jsonData.type,
                        timer: 5000,
                        timerProgressBar: true,
                        didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                          b.textContent = Swal.getTimerLeft()
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                    }).then((result) => {
                      /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('I was closed by the timer')
                      }
                    })
                  }
                if(jsonData.type == "success"){
                    $("#adduser").trigger('reset');
                }
            }
         });
         return false;
    });
</script>
@endsection
