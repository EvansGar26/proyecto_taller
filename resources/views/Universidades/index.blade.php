@extends('Cruds.master')
@section('contenido_central')
    <h2>Listado de universidades</h2>
    <a href="universidades/create" class="btn btn-success">Crear una nueva universidad</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="centrado">ID</th>
                <th class="centrado">Municipio</th>
                <th class="centrado">Nombre</th>
                <th class="centrado">Status</th>
                <th colspan="3" class="centrado">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($universidades as $universidad)
                <tr>
                    <td class="centrado">{!! $universidad->id !!}</td>
                    <td class="centrado">{!! $universidad->municipios->nombre !!}</td>
                    <td class="centrado">{!! $universidad->nombre !!}</td>
                    <td class="centrado">{!! $universidad->status !!}</td>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <td><a href="{!! 'universidades/' . $universidad->id !!}" class="btn btn-outline-success">Detalle</a></td>
                        <td><a href="{!! 'universidades/' . $universidad->id . '/edit' !!}" class="btn btn-outline-primary">Actualizar</a></td>
                        <td>{!! Form::open(['method' => 'DELETE', 'url' => '/universidades/' . $universidad->id]) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-outline-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </div>

                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination-container">
        {{ $universidades->links() }}
    </div>
@endsection()
