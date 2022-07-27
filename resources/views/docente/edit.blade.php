@extends('layouts.plantillabase')

@section('contenido')
<h1>EDITAR DOCENTE</h1>
<form action="/docentes/{{@$docentes->id}}" method="POST">
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
        <label for="" class="form-label">Email</label>
        <input type="email" id="email" name="email" value="{{@$docente->email}}" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input type="number" id="telefono" name="telefono" value="{{@$docente->telefono}}" class="form-control" maxlength="10"  pattern="[0-9]+" tabindex="6">
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
@endsection