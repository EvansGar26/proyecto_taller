@extends('Cruds.master')
@section('contenido_central')
    <h2>Listado de las imagenes de las universidades</h2>
    <a href="universidades_imagenes/create" class="btn btn-success">Agregar una nueva imagen</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="centrado">ID</th>
                <th class="centrado">Universidad</th>
                <th class="centrado">Ruta</th>
                <th class="centrado">Status</th>
                <th colspan="3" class="centrado">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($universidades_imagenes as $imagen)
                <tr>
                    <td class="centrado">{!! $imagen->id !!}</td>
                    <td class="centrado">{!! $imagen->universidades->nombre !!}</td>
                    <td class="centrado">{!! $imagen->ruta !!}</td>
                    <td class="centrado">{!! $imagen->status !!}</td>
                    <td><a href="{!! 'universidades_imagenes/' . $imagen->id !!}" class="btn btn-success">Detalle</a></td>
                    <td><a href="{!! 'universidades_imagenes/' . $imagen->id . '/edit' !!}" class="btn btn-primary">Actualizar</a></td>
                    <td>{!! Form::open(['method' => 'DELETE', 'url' => '/universidades_imagenes/' . $imagen->id]) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination-container">
        {{ $universidades_imagenes->links() }}
    </div>
@endsection()
