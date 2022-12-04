@extends('tema.principal')

@section('title',"Inicio de Sesión")

@section ('contenido')
<div class="container">
    <div class="abs-center">
        
        <form action="#" class="border p-3 form">
            <center><img src="{{ asset('img/user.png') }}" alt="" width="100px" height="100px"></center> <br>
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" required>
                <a href="#">¿Olvidé mi contraseña?</a>
            </div> 
            <br>
            <center><button type="submit" class="btn btn-success">Iniciar Sesión</button></center> <br>
            <center>¿Aun no tienes cuenta? Registrate <a href="{{ 'cuenta.registro' }}">Aquí</a></center>
        </form>
        
    </div>
</div>
@endsection
