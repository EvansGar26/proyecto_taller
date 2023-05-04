@extends('Cruds.master')
@section('contenido_central')
    <h1>Editar universidad</h1>
    {!! Form::open(['method' => 'PATCH', 'url' => '/universidades/' . $universidad->id]) !!}
    <div class="form-group my-2">
        {!! Form::label('id_municipio', 'Municipio:') !!}
        {!! Form::select('id_municipio', $municipios->pluck('nombre', 'id')->all(), $universidad->id_municipio, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione un municipio',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('nombre', 'Nombre de la universidad') !!}
        {!! Form::text('nombre', $universidad->nombre, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el nombre de la universidad',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('director', 'Director de la universidad') !!}
        {!! Form::text('director', $universidad->director, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el nombre del director',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('direccion', 'Dirección de la universidad') !!}
        {!! Form::text('direccion', $universidad->direccion, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese la dirección',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('cp', 'Código postal de la universidad') !!}
        {!! Form::text('cp', $universidad->cp, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el código postal',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('telefono', 'Teléfono de la universidad') !!}
        {!! Form::text('telefono', $universidad->telefono, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el número de télefono',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('logotipo', 'Logotipo de la universidad') !!}
        {!! Form::text('logotipo', $universidad->logotipo, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el logotipo de la universidad',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('url', 'Website de la universidad') !!}
        {!! Form::text('url', $universidad->url, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el url de la página',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('status', 'Estatus:') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], $universidad->status, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una opción',
        ]) !!}
    </div>
    {!! Form::submit('Editar Universidad', ['class' => 'btn btn-success my-2']) !!}
    {!! Form::close() !!}
@endsection()
