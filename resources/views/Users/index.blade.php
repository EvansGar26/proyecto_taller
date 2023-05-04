@extends('Cruds.master')
@section('contenido_central')
    <h2>Listado de usuarios</h2>
    <a href="users/create" class="btn btn-success">Crear un nuevo usuario</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="centrado">ID</th>
                <th class="centrado">Nombre</th>
                <th class="centrado">Apellido Paterno</th>
                <th class="centrado">Email</th>
                <th class="centrado">Teléfono</th>
                <th class="centrado">ID_Rol</th>
                <th colspan="3" class="centrado">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="centrado">{!! $user->id !!}</td>
                    <td class="centrado">{!! $user->nombre !!}</td>
                    <td class="centrado">{!! $user->ap_pat !!}</td>
                    <td class="centrado">{!! $user->email !!}</td>
                    <td class="centrado">{!! $user->telefono !!}</td>
                    <td class="centrado">{!! $user->roles->id !!}</td>
                    <td><a href="{!! 'users/' . $user->id !!}" class="btn btn-success">Detalle</a></td>
                    <td><a href="{!! 'users/' . $user->id . '/edit' !!}" class="btn btn-primary">Actualizar</a></td>
                    <td>{!! Form::open(['method' => 'DELETE', 'url' => '/users/' . $user->id]) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination-container">
        {{ $users->links() }}
    </div>
@endsection()
