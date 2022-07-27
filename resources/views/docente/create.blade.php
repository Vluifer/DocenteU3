@extends('adminlte::page')

@section('title', 'LR')

@section('content_header')
@stop

@section('content')
    <h3><p>Crear Docente</p></h3>
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop