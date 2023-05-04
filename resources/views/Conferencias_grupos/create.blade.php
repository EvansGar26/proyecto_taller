@extends('Cruds.master')
@section('contenido_central')
    <h1>Crear pais</h1>

    {!! Form::open(['url'=>'/paises']) !!}
    <div class="form-group my-2">
        {!! Form::label('nombre', 'Nombre del pais') !!}
        {!! Form::text('nombre', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el nombre del país',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('clave', 'Clave del pais') !!}
        {!! Form::text('clave', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la clave del país']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('status', 'Estatus:') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una opción',
        ]) !!}
    </div>
    {!! Form::submit('Crear País', ['class' => 'btn btn-success my-2']) !!}
    {!! Form::close() !!}
@endsection()
