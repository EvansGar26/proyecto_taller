@extends('Cruds.master')
@section('contenido_central')
    <h2>Listado de países</h2>
    <a href="paises/create" class="btn btn-success">Crear un nuevo pais</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="centrado">ID</th>
                <th class="centrado">Nombre</th>
                <th class="centrado">Clave</th>
                <th class="centrado">Status</th>
                <th colspan="3" class="centrado">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paises as $pais)
                <tr>
                    <td class="centrado">{!! $pais->id !!}</td>
                    <td class="centrado">{!! $pais->nombre !!}</td>
                    <td class="centrado">{!! $pais->clave !!}</td>
                    <td class="centrado">{!! $pais->status !!}</td>
                    <td><a href="{!! 'paises/' . $pais->id !!}" class="btn btn-success">Detalle</a></td>
                    <td><a href="{!! 'paises/' . $pais->id . '/edit' !!}" class="btn btn-primary">Actualizar</a></td>
                    <td>{!! Form::open(['method' => 'DELETE', 'url' => '/paises/' . $pais->id]) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection()
