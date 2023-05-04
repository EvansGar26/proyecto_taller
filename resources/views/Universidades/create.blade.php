@extends('Cruds.master')
@section('contenido_central')
    <h1>Crear universidad</h1>

    {!! Form::open(['url'=>'/universidades']) !!}
    <div class="form-group my-2">
        {!! Form::label('id_municipio', 'Municipio:') !!}
        {!! Form::select('id_municipio', $municipios->pluck('nombre', 'id')->all(), null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione un municipio',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('nombre', 'Nombre de la universidad') !!}
        {!! Form::text('nombre', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el nombre de la universidad',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('director', 'Director de la universidad') !!}
        {!! Form::text('director', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el nombre del director',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('direccion', 'Dirección de la universidad') !!}
        {!! Form::text('direccion', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese la dirección',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('cp', 'Código postal de la universidad') !!}
        {!! Form::text('cp', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el código postal',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('telefono', 'Teléfono de la universidad') !!}
        {!! Form::text('telefono', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el número de télefono',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('logotipo', 'Logotipo de la universidad') !!}
        {!! Form::text('logotipo', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el logotipo de la universidad',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('url', 'Website de la universidad') !!}
        {!! Form::text('url', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el url de la página',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('status', 'Estatus:') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una opción',
        ]) !!}
    </div>
    {!! Form::submit('Crea la universidad', ['class' => 'btn btn-success my-2']) !!}
    {!! Form::close() !!}
@endsection()
