@extends('adminlte::page')

@section('title', 'LR')

@section('content_header')

@stop

@section('content')
    <h2><p>Panel Administración Docentes</p></h2>
    <!-- refertenciamos al metodo crear crearUsuario que se encuntra en la clase  UsuarioController -->
<a href="docentes/create" class="btn btn-primary mb-3 shadow-lg mt-4">CREAR</a>
<table id="docentes" class="table table-striped" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Cod_usu</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Block</th>
            <th scope="col">Profesional</th>
            <th scope="col">Escalaron</th>
            <th scope="col">Idioma</th>
            <th scope="col">Años_exp</th>
            <th scope="col">Area_trab</th>
            <th scope="col">Accion</th>
        </tr>
    <tbody>
        @foreach($docentes as $docente)
        <tr>
            <td>{{$docente->id_usuario}}</td>
            <td>{{$docente->nombre}}</td>
            <td>{{$docente->apellido}}</td>
            <td>{{$docente->block}}</td>
            <td>{{$docente->profesional}}</td>
            <td>{{$docente->escalaron}}</td>
            <td>{{$docente->idioma}}</td>
            <td>{{$docente->anios_experiencia}}</td>
            <td>{{$docente->area_trabajo}}</td>
            <td>
                <form action="{{route ('docentes.destroy',@$docente->id)}}" method="POST">
                    <a href="/docentes/{{$docente->id}}/edit" ><i class="fa fa-pencil-square-o"></i></a>
                    <!-- Se utliza esta notación para evitar errores de http que se convierten en vulnerabilidad -->
                    @csrf
                    <!-- El metodo del envio del formulario es post, pero laravel recomienda
                     que se ponga esta notacion DELETE de esta forma para que se pueda completar la acción -->
                    @method('DELETE')
                    <button type="submit" value="Eliminar"><i class="fa fa-trash-o"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </thead>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <!-- referenciamos los estilos de bootstrao de dataTable -->
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <!-- Referenciamos los archivos de js y jq de dataTable, son
los que le daran la funcionalidad a nuestro dataTable -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://kit.fontawesome.com/240d17eb81.js" crossorigin="anonymous"></script>
<!-- Aqui inicializamos nusestro dataTable -->
<script>
    $(document).ready(function () {
    $('#docentes').DataTable({
        "lengthMenu":[[5,10,15, -1], [5, 10, 50, "ALL"]]
    });
});
</script>
@stop