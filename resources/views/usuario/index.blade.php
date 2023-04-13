

@extends('layouts.app')

@section('content')
<div class="container">
<h1>Lista de usuarios</h1>
<br>
@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}


@endif

<a href="{{ url('usuario/create') }}" class="btn btn-success">Registrar un nuevo usuario</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Celular</th>
            <th>Edad</th>
            <th>Cedula</th>
            <th>Tipo Usuario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->apellido }}</td>
            <td>{{ $usuario->correo }}</td>
            <td>{{ $usuario->celular }}</td>
            <td>{{ $usuario->edad }}</td>
            <td>{{ $usuario->cedula }}</td>
            <td>{{ $usuario->tipo_usuario }}</td>
            <td>
            <a href="{{ url('/usuario/'.$usuario->id.'/edit') }}" class="btn btn-warning">
                Editar
            </a>    
                <form action="{{ url('/usuario/'.$usuario->id) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger" onclick="return confirm('Estás seguro que deseas borrar?')"
                    value="Borrar">
                </form>
            
        
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection