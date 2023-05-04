@extends('Cruds.master')
@section('contenido_central')
    <h1>Crear municipio</h1>

    {!! Form::open(['url'=>'/municipios']) !!}
    <div class="form-group my-2">
        {!! Form::label('id_entidad', 'Entidad:') !!}
        {!! Form::select('id_entidad', $entidades->pluck('nombre', 'id')->all(), null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una entidad',
        ]) !!}
    </div>
    <div class="form-group my-2">
        {!! Form::label('nombre', 'Nombre del municipio') !!}
        {!! Form::text('nombre', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el nombre del municipio',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('status', 'Estatus:') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una opción',
        ]) !!}
    </div>
    {!! Form::submit('Crear Municipio', ['class' => 'btn btn-success my-2']) !!}
    {!! Form::close() !!}
@endsection()
