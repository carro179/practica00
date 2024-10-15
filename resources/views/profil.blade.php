@extends('plantilla1')

@section('contenido')
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <label for="">Nombre: </label>
            </div>
            <div class="col">
                <input type="text" name="nomPfp" id="nomPfp">
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <label for="">Fecha de nacimiento </label>
            </div>
            <div class="col">
                <input type="text" name="desc" id="desc">
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <label for="">Correo electrónico </label>
            </div>
            <div class="col">
                <input type="text" name="email" id="email">
            </div>
        </div>
    </div>
    <input type="submit" value="OK">
@endsection
