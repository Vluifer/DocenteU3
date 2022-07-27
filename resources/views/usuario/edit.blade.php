@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
       <h3><p>Editar Usuario</p></h3>
    <form action="/usuarios/{{@$usuario->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Cedula</label>
        <input type="number" id="cedula" name="cedula" value="{{@$usuario->cedula}}" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Clave</label>
        <input type="password" id="clave" name="clave " value="{{@$usuario->clave}}" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="{{@$usuario->nombre}}" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input type="number" id="telefono" name="telefono" value="{{@$usuario->telefono}}" class="form-control" maxlength="10"  pattern="[0-9]+" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="email" id="email" name="email" value="{{@$usuario->email}}" class="form-control" tabindex="6">
    </div>
    <a href="/usuarios" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop