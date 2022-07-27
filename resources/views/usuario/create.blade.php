@extends('layouts.plantillabase')

@section('contenido')
<h1>CREAR USUARIO</h1>
<form action="/usuarios" method="POST">
    @csrf
    <div class="mb-3">
        <input type="hidden" id="codigo" name="codigo" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cedula</label>
        <input type="number" id="cedula" name="cedula" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Clave</label>
        <input type="password" id="clave" name="clave" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input type="number" id="telefono" name="telefono" class="form-control" maxlength="10"  pattern="[0-9]+" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="email" id="email" name="email" class="form-control" tabindex="6">
    </div>
    <a href="/usuarios" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form>
@endsection