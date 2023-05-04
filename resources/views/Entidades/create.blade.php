@extends('Cruds.master')
@section('contenido_central')
    <h1>Crear entidad</h1>

    {!! Form::open(['url' => '/entidades']) !!}
    <div class="form-group my-2">
        {!! Form::label('id_pais', 'Pais:') !!}
        {!! Form::select('id_pais', $paises->pluck('nombre', 'id')->all(), null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione un país',
        ]) !!}
    </div>
    <div class="form-group my-2">
        {!! Form::label('nombre', 'Nombre de la entidad') !!}
        {!! Form::text('nombre', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el nombre del país',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('status', 'Estatus:') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una opción',
        ]) !!}
    </div>
    {!! Form::submit('Crear Entidad', ['class' => 'btn btn-success my-2']) !!}
    {!! Form::close() !!}
@endsection()
