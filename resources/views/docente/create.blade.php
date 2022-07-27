@extends('layouts.plantillabase')

@section('contenido')
<h1>CREAR DOCENTE</h1>
<form action="/docentes" method="POST">
    @csrf
    <div class="mb-3">
        <input type="hidden" id="id" name="id" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cod_usu</label>
        <input type="number" id="id_usuario" name="id_usuario" class="form-control" tabindex="2">
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input type="text" id="apellido" name="apellido" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="email" id="email" name="email" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input type="number" id="telefono" name="telefono" class="form-control" maxlength="10"  pattern="[0-9]+" tabindex="6">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Block</label>
        <input type="text" id="block" name="block" class="form-control" tabindex="7">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Profesional</label>
        <input type="text" id="profesional" name="profesional" class="form-control" tabindex="8">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Escalaron</label>
        <input type="text" id="escalaron" name="escalaron" class="form-control" tabindex="9">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Idioma</label>
        <input type="text" id="idioma" name="idioma" class="form-control" tabindex="10">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Años_exp</label>
        <input type="text" id="anios_experiencia" name="anios_experiencia" class="form-control" tabindex="11">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">area_trab</label>
        <input type="text" id="area_trabajo" name="area_trabajo" class="form-control" tabindex="12">
    </div>
    <a href="/docentes" class="btn btn-secondary" tabindex="13">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="14">Guardar</button>
</form>
@endsection