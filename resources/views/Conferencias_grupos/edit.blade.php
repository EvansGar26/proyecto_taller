@extends('Cruds.master')
@section('contenido_central')
    <h1>Editar pais</h1>
    {!! Form::open(['method' => 'PATCH', 'url' => '/paises/' . $pais->id]) !!}
    <div class="form-group my-2">
        {!! Form::label('nombre', 'Nombre del pais') !!}
        {!! Form::text('nombre', $pais->nombre, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el nombre del país'
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('clave', 'Clave del pais') !!}
        {!! Form::text('clave', $pais->clave, ['class' => 'form-control', 'placeholder' => 'Ingrese la clave del país']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('status', 'Estatus:') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], $pais->status, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una opción'
        ]) !!}
    </div>
    {!! Form::submit('Editar País', ['class' => 'btn btn-success my-2']) !!}
    {!! Form::close() !!}
@endsection()
