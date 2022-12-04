@extends('tema.principal')

@section('title',"inicio")

@section ('contenido')
<div class="container Larger shadow bg-warning my-3 rounded-3" style="line-height: 50%">

    <div class="row">
        <div class="col-sm-12"> <br>
            <center>
                <h6>¡Donaciones! con tu apoyo puedes hacer feliz alguna familia</h6>
            </center>
        </div> <br><br><br>
        <div class="col-3">
            <label for="cantidad" class="form-label">Cantidad a Donar</label>
            <select name="donacion" id="cantidad" class="form-select">
                <option value="0">$200</option>
                <option value="1">$300</option>
                <option value="2">$500</option>
                <option value="3">$1000</option>
                <option value="4">Otra</option>
            </select>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipodonacion" id="Dunica">
                <label class="form-check-label" for="Dunica">
                    Donación Unica
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipodonacion" id="Dparticipacion" checked>
                <label class="form-check-label" for="Dparticipacion">
                    Participación
                </label>
            </div>

        </div>
        <div class="col-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="col-3">
            <label for="nombre" class="form-label">Apellido Paterno</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="col-3">
            <label for="nombre" class="form-label">Apellido Materno</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
    </div> <br><br>


    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-2">
            <label for="cantidad" class="form-label">Cantidad a Donar</label>
            <select name="donacion" id="cantidad" class="form-select">
                <option value="0">México</option>
                <option value="1">Estados Unidos</option>
            </select>

        </div>
        <div class="col-2">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" name="estado" id="estado" class="form-control">
        </div>
        <div class="col-2">
            <label for="notarjeta" class="form-label">No. de tarjeta</label>
            <input type="text" name="notarjeta" id="notarjeta" class="form-control">
        </div>
        <div class="col-2">
            <label for="Vigencia" class="form-label">Vigencia</label>
            <input type="date" name="Vigencia" id="notarVigenciajeta" class="form-control">
        </div>

        <div class="col-2">
            <label for="vcc" class="form-label">VCC</label>
            <input type="number" name="vcc" id="vcc" class="form-control">
        </div>

    </div> <br><br>
    <input type="checkbox" name="politica" id="politica"> He leído y aceptado los <a href="#">Términos y políticas de privacidad</a>
    <br><br>

    <div class="col-sm-12 text-end my-2">
        <button type="submit" class="btn btn-success">
            Hacer Donativo
        </button>
    </div> <br><br>

</div><br><br><br>
@endsection
