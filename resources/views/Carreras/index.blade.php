@extends('Cruds.master')
@section('contenido_central')
    <h2>Listado de carreras</h2>
    <a href="carreras/create" class="btn btn-success">Crear una nueva carrera</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="centrado">ID</th>
                <th class="centrado">Nombre</th>
                <th class="centrado">Objetivo</th>
                <th class="centrado">Status</th>
                <th colspan="3" class="centrado">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carreras as $carrera)
                <tr>
                    <td class="centrado">{!! $carrera->id !!}</td>
                    <td class="centrado">{!! $carrera->nombre !!}</td>
                    <td class="centrado">{!! $carrera->objetivo !!}</td>
                    <td class="centrado">{!! $carrera->status !!}</td>
                    <td><a href="{!! 'carreras/' . $carrera->id !!}" class="btn btn-success">Detalle</a></td>
                    <td><a href="{!! 'carreras/' . $carrera->id . '/edit' !!}" class="btn btn-primary">Actualizar</a></td>
                    <td>{!! Form::open(['method' => 'DELETE', 'url' => '/carreras/' . $carrera->id]) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination-container">
        {{ $carreras->links() }}
    </div>
@endsection()
