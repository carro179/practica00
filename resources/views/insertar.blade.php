@extends('plantilla1')

@section('contenido')
    <form action="">
<br>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <label for="">Nombre: </label>
                </div>
                <div class="col">
                    <input type="text" name="nomCan" id="nomCan">
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <label for="">Artista: </label>
                </div>
                <div class="col">
                    <input type="text" name="nomArt" id="nomArt">
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row"><hr></div>
            <div class="row">
                <div class="col">
                    <label for="">Plataforma: </label>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radplat" id="radplat" />
                        <label class="form-check-label" for="radplat"> Youtube </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radplat" id="radplat" />
                        <label class="form-check-label" for="radplat"> Spotify </label>
                    </div>
                </div>
            </div>
            <div class="row"><hr></div>
            <div class="row">
                <div class="col">
                    <label for="">Enlace: </label>
                </div>
                <div class="col">
                    <input type="text" name="link" id="link">
                </div>
            </div>
        </div>
        <input type="submit" value="Insertar">

    </form>
@endsection
