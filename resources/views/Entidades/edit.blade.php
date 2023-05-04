@extends('Cruds.master')
@section('contenido_central')
    <h1>Editar entidad</h1>
    {!! Form::open(['method' => 'PATCH', 'url' => '/entidades/' . $entidad->id]) !!}

    <div class="form-group my-2">
        {!! Form::label('id_pais', 'Pais:') !!}
        {!! Form::select('id_pais', $paises->pluck('nombre', 'id')->all(), $entidad->id_pais, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione un país',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('nombre', 'Nombre del entidad') !!}
        {!! Form::text('nombre', $entidad->nombre, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el nombre del país',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('status', 'Estatus:') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], $entidad->status, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una opción',
        ]) !!}
    </div>
    {!! Form::submit('Editar Entidad', ['class' => 'btn btn-success my-2']) !!}
    {!! Form::close() !!}
@endsection()
