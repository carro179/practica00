@extends('plantilla1')

@section('contenido')
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <label for="">Nombre: </label>
            </div>
            <div class="col">
                <input type="text" name="nomPly" id="nomPly">
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <label for="">Descrición: </label>
            </div>
            <div class="col">
                <input type="text" name="desc" id="desc">
            </div>
        </div>
    </div>
    <input type="submit" value="Insertar canciones">
    <input type="submit" value="OK">
@endsection
