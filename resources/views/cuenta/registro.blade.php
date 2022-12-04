@extends('tema.principal')

@section('title',"Registro Padres")

@section ('contenido')
<div class="container">
    <div class="abs-center-2">

        <form action="#" class="border p-3 form-2">
            <center>
                <h5><b>Registo de Padre de Familia</b></h5>
            </center> <br>
            <center>¿Desea ser Patrocionador? Registrese <a href="{{ 'cuenta.registroDonador' }}">Aquí</a> </center> <br>

            <div class="form-group">
                <label for="nombre">Nombre <b style="color: red">*</b></label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="apaterno">Apellido Paterno <b style="color: red">*</b></label>
                <input type="text" name="apaterno" id="apaterno" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="amaterno">Apellido materno <b style="color: red">*</b></label>
                <input type="text" name="amaterno" id="amaterno" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono <b style="color: red">*</b></label>
                <input type="number" name="telefono" id="telefono" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="credencial">Credencial del DIF de su hijo <b style="color: red">*</b></label>
                <input type="text" name="credencial" id="credencial" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Correo <b style="color: red">*</b></label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="necesidad">Domicilio <b style="color: red">*</b></label>
                <textarea class="form-control" id="floatingTextarea" required></textarea>
            </div>
            <div class="form-group">
                <label for="nombreusuario">Nombre de Usuario <b style="color: red">*</b></label>
                <input type="text" name="nombreusuario" id="nombreusuario" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña <b style="color: red">*</b></label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="confpassword">Confirmacion de Contraseña <b style="color: red">*</b></label>
                <input type="password" name="confpassword" id="confpassword" class="form-control" required>
            </div>
            <br>
            <div class="col">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">Acepto <a href="#">Terminos y condiciones</a></label>
            </div> <br>
            <div class="col">
                <div class="g-recaptcha" data-sitekey="6LdpBlIjAAAAAAovCL8nR-TQMS9EoAEQFjk6g1N5"></div>
            </div>
            <br>

            <center><button type="submit" class="btn btn-success">Registrar</button></center> <br>
            <center>¿Ya tienes cuenta? Inicia sesión <a href="{{ 'cuenta.iniciarsesion' }}">Aquí</a></center>
    </div>
    </form>

</div>
</div>
@endsection
