@extends('tema.principal')

@section('title',"Registro Donador")

@section ('contenido')
<div class="container">
    <div class="abs-center-patrocinador">
        
        <form action="#" class="border p-3 form">
            <center><b>Datos del Patrocinador</b></center> <br>
            <center>¿Es Padre de familia? Registrese <a href="{{ 'cuenta.registro' }}">Aquí</a> </center> <br>
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
                <input type="number" name="nombreusuario" id="telefono" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="rfc">RFC <b style="color: red">*</b></label>
                <input type="text" name="rfc" id="rfc" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Correo <b style="color: red">*</b></label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="necesidad">Domicilio <b style="color: red">*</b></label>
                <textarea class="form-control"  id="floatingTextarea" required></textarea>
            </div>
            <div class="form-group">
                <label for="nombreusuario">Nombre de usuario <b style="color: red">*</b></label>
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
            <center><button type="submit" class="btn btn-success">Iniciar Sesión</button></center> <br>
            <center>¿Ya tienes cuenta? Inicia sesión <a href="{{ 'cuenta.iniciarsesion' }}">Aquí</a></center>
        </form>
        
    </div>
</div>
@endsection
