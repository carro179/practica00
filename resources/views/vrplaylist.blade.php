@extends('inicio2')

@section('contenido')

<div class="container text-center">
    <div class="row">
        <div class="col">
            <label for="">Nombre</label>
        </div>
        <div class="col">
            <input type="text" name="nompl" id="nompl">
            <input type="button" value="Buscar">
    </div>
</div>
<tr>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Cantidad de cancipnes</th>
    <th>Creador</th>
</tr>
<tr>
    <td>Nombre1</td>
    <td>Descripción1</td>
    <td>Cantidad de canciones1</td>
    <td>Creador1</td>
</tr>
<tr>
    <td>Nombre2</td>
    <td>Descripción2</td>
    <td>Cantidad de canciones2</td>
    <td>Creador2</td>

@endsection