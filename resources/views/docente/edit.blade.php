@extends('adminlte::page')

@section('title', 'LR')

@section('content_header')
<h3><p>Editar Docente</p></h3>
@stop

@section('content')
    <form action="{{url('/docentes/'.$docente->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Cod_usu</label>
        <input type="number" id="id_usuario" name="id_usuario" value="{{@$docente->id_usuario}}" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre"  value="{{@$docente->nombre}}" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input type="text" id="apellido" name="apellido" value="{{@$docente->apellido}}" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Block</label>
        <input type="text" id="block" name="block" value="{{@$docente->block}}" class="form-control" tabindex="7">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Profesional</label>
        <input type="text" id="profesional" name="profesional" value="{{@$docente->profesional}}" class="form-control" tabindex="8">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Escaloron</label>
        <input type="text" id="escalaron" name="escalaron" value="{{@$docente->escalaron}}" class="form-control" tabindex="9">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Idioma</label>
        <input type="text" id="idioma" name="idioma" value="{{@$docente->idioma}}" class="form-control" tabindex="10">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Años_exp</label>
        <input type="text" id="anios_experiencia" name="anios_experiencia" value="{{@$docente->anios_experiencia}}" class="form-control" tabindex="11">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">area_trab</label>
        <input type="text" id="area_trabajo" name="area_trabajo" value="{{@$docente->area_trabajo}}" class="form-control" tabindex="12">
    </div>
    
    <a href="/docentes" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop