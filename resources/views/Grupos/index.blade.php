@extends('Cruds.master')
@section('contenido_central')
    <h2>Listado de grupos</h2>
    <a href="grupos/create" class="btn btn-success">Crear un nuevo grupo</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="centrado">ID</th>
                <th class="centrado">Encargado</th>
                <th class="centrado">Nombre</th>
                <th class="centrado">Status</th>
                <th colspan="3" class="centrado">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grupos as $grupo)
                <tr>
                    <td class="centrado">{!! $grupo->id !!}</td>
                    <td class="centrado">{!! $grupo->users->id !!}</td>
                    <td class="centrado">{!! $grupo->nombre !!}</td>
                    <td class="centrado">{!! $grupo->status !!}</td>
                    <td><a href="{!! 'grupos/' . $grupo->id !!}" class="btn btn-success">Detalle</a></td>
                    <td><a href="{!! 'grupos/' . $grupo->id . '/edit' !!}" class="btn btn-primary">Actualizar</a></td>
                    <td>{!! Form::open(['method' => 'DELETE', 'url' => '/grupos/' . $grupo->id]) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination-container">
        {{ $grupos->links() }}
    </div>
@endsection()
