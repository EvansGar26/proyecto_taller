@extends('Cruds.master')
@section('contenido_central')
    <h2>Listado de conferencias</h2>
    <a href="conferencias/create" class="btn btn-success">Crear una nueva conferencia</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="centrado">ID</th>
                <th class="centrado">Tema</th>
                <th class="centrado">Fecha</th>
                <th class="centrado">Hora</th>
                <th class="centrado">Estado</th>
                <th colspan="3" class="centrado">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($conferencias as $conferencia)
                <tr>
                    <td class="centrado">{!! $conferencia->id !!}</td>
                    <td class="centrado">{!! $conferencia->tema !!}</td>
                    <td class="centrado">{!! $conferencia->fecha !!}</td>
                    <td class="centrado">{!! $conferencia->hora_inicio !!}</td>
                    <td class="centrado">{!! $conferencia->estado !!}</td>
                    <td><a href="{!! 'conferencias/' . $conferencia->id !!}" class="btn btn-success">Detalle</a></td>
                    <td><a href="{!! 'conferencias/' . $conferencia->id . '/edit' !!}" class="btn btn-primary">Actualizar</a></td>
                    <td>{!! Form::open(['method' => 'DELETE', 'url' => '/conferencias/' . $conferencia->id]) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination-container">
        {{ $conferencias->links() }}
    </div>
@endsection()
