<!-- Con esto extendemos nuesto panel de administreacion adminlte -->

@extends('adminlte::page')

@section('title', 'LR')

@section('')
    <h1>Config usuarios</h1>
@stop

@section('content')
    <p><h2>Panel administración Usuario</h2></p>
    <!-- refertenciamos al metodo crear crearUsuario que se encuntra en la clase  UsuarioController -->
<a href="usuarios/create" class="btn btn-primary mb-3 shadow-lg mt-4">CREAR</a>
<table id="usuarios" class="table table-striped" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Cedula</th>
            <th scope="col">Clave</th>
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Acciones</th>
        </tr>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->cedula}}</td>
            <td>{{$usuario->clave}}</td>
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->telefono}}</td>
            <td>{{$usuario->email}}</td>
            <td>
                @if($errors->any())
                <p class="error-message">{{$errors->first('mensaje')}}</p>
                @endif
                <form action="{{route ('usuarios.destroy',@$usuario->id)}}" method="POST">
                    <a href="/usuarios/{{$usuario->id}}/edit" class="btn btn-info">Editar</a>
                    <!-- Se utliza esta notación para evitar errores de http que se convierten en vulnerabilidad -->
                    @csrf
                    <!-- El metodo del envio del formulario es post, pero laravel recomienda
                     que se ponga esta notacion DELETE de esta forma para que se pueda completar la acción -->
                    @method('DELETE')
                    <button type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar Usuario')" class="btn btn-danger">Elimnar</button>
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<!-- Aqui inicializamos nusestro dataTable -->
<script>
    $(document).ready(function () {
    $('#usuarios').DataTable({
        "lengthMenu":[[5,10,15, -1], [5, 10, 50, "ALL"]]
    });
});
</script>
@stop