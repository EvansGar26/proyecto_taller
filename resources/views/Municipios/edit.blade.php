@extends('Cruds.master')
@section('contenido_central')
    <h1>Editar municipio</h1>
    {!! Form::open(['method' => 'PATCH', 'url' => '/municipios/' . $municipio->id]) !!}
    <div class="form-group my-2">
        {!! Form::label('id_entidad', 'Entidad:') !!}
        {!! Form::select('id_entidad', $entidades->pluck('nombre', 'id')->all(), $municipio->id_entidad, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una entidad',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('nombre', 'Nombre del municipio') !!}
        {!! Form::text('nombre', $municipio->nombre, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el nombre del país',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('status', 'Estatus:') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], $municipio->status, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una opción',
        ]) !!}
    </div>
    {!! Form::submit('Editar Municipio', ['class' => 'btn btn-success my-2']) !!}
    {!! Form::close() !!}
@endsection()
