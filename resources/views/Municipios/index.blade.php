@extends('Cruds.master')
@section('contenido_central')
    <h2>Listado de municipios</h2>
    <a href="municipios/create" class="btn btn-success">Crear un nuevo municipio</a>
    {{-- {!! Form::open(['url' => '/municipios', 'method' => 'get', 'class' => 'form-inline']) !!}
    {!! Form::label('search', 'Buscar:', ['class' => 'control-label']) !!}
    {!! Form::text('search', null, ['class' => 'form-control']) !!}
    {!! Form::submit('Buscar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

    @if (isset($search))
        <p>Resultados de búsqueda para: {{ $search }}</p>
    @endif --}}

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="centrado">ID</th>
                <th class="centrado">Entidad</th>
                <th class="centrado">País</th>
                <th class="centrado">Nombre</th>
                <th class="centrado">Status</th>
                <th colspan="3" class="centrado">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($municipios as $municipio)
                <tr>
                    <td class="centrado">{!! $municipio->id !!}</td>
                    <td class="centrado">{!! $municipio->entidades->nombre !!}</td>
                    <td class="centrado">{!! $municipio->entidades->paises->nombre !!}</td>
                    <td class="centrado">{!! $municipio->nombre !!}</td>
                    <td class="centrado">{!! $municipio->status !!}</td>
                    <td><a href="{!! 'municipios/' . $municipio->id !!}" class="btn btn-success">Detalle</a></td>
                    <td><a href="{!! 'municipios/' . $municipio->id . '/edit' !!}" class="btn btn-primary">Actualizar</a></td>
                    <td>{!! Form::open(['method' => 'DELETE', 'url' => '/municipios/' . $municipio->id]) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination-container">
        {{ $municipios->links() }}
    </div>
@endsection()
