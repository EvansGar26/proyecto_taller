@extends('Cruds.master')
@section('contenido_central')
    <h2>Listado de países</h2>
    <a href="entidades/create" class="btn btn-success">Crear un nuevo entidad</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="centrado">ID</th>
                <th class="centrado">ID País</th>
                <th class="centrado">Clave de País</th>
                <th class="centrado">Nombre</th>
                <th class="centrado">Status</th>
                <th colspan="3" class="centrado">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entidades as $entidad)
                <tr>
                    <td class="centrado">{!! $entidad->id !!}</td>
                    <td class="centrado">{!! $entidad->id_pais !!}</td>
                    <td class="centrado">{!! $entidad->paises->clave !!}</td>
                    <td class="centrado">{!! $entidad->nombre !!}</td>
                    <td class="centrado">{!! $entidad->status !!}</td>
                    <td><a href="{!! 'entidades/' . $entidad->id !!}" class="btn btn-success">Detalle</a></td>
                    <td><a href="{!! 'entidades/' . $entidad->id . '/edit' !!}" class="btn btn-primary">Actualizar</a></td>
                    <td>{!! Form::open(['method' => 'DELETE', 'url' => '/entidades/' . $entidad->id]) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination-container">
        {{ $entidades->links() }}
    </div>
@endsection()
