@extends('Cruds.master')
@section('contenido_central')
    <h1>Crear conferencias</h1>

    {!! Form::open(['url' => '/conferencias']) !!}
    <div class="form-group my-2">
        {!! Form::label('id_user', 'Docente Encargado:') !!}
        {!! Form::select(
            'id_user',
            $users->map(function ($user) {
                    return ['id' => $user->id, 'nombre' => $user->nombre . ' ' . $user->ap_pat];
                })->pluck('nombre', 'id')->all(),
            null,
            [
                'class' => 'form-control',
                'placeholder' => 'Seleccione un docente',
            ],
        ) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('fecha', 'Fecha de la conferencia') !!}
        {!! Form::date('fecha', null, ['class' => 'form-control', 'placeholder' => 'Elija una fecha']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('hora_inicio', 'Hora de inicio de la conferencia') !!}
        {!! Form::time('hora_inicio', null, [
            'class' => 'form-control',
            'placeholder' => 'Elija una hora de inicio',
            'data-mask' => '99:99:99',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('hora_termino', 'Hora de termino de la conferencia') !!}
        {!! Form::time('hora_termino', null, [
            'class' => 'form-control',
            'placeholder' => 'Elija una hora de termino',
            'data-mask' => '99:99:99',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('estado', 'Estatus:') !!}
        {!! Form::select('estado', ['A' => 'Activo', 'R' => 'Retrasado', 'C' => 'Cancelado'], null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una opción',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('tema', 'Tema de la conferencia') !!}
        {!! Form::text('tema', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tema de la conferencia']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('descripcion_tema', 'Descripcion del tema') !!}
        {!! Form::text('descripcion_tema', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese la descripcion del tema',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('expositor', 'Ponente de la conferencia') !!}
        {!! Form::text('expositor', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del ponente']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('descripcion_expositor', 'Descripcion del ponente') !!}
        {!! Form::text('descripcion_expositor', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese la descripcion del ponente',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('ciclo_escolar', 'Ciclo escolar') !!}
        {!! Form::text('ciclo_escolar', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el ciclo escolar']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('url', 'URL de la conferencia') !!}
        {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el URL de la conferencia']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('status', 'Estado de la conferencias') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el estado de la conferencia',
        ]) !!}
    </div>

    {!! Form::submit('Crear Conferencia', ['class' => 'btn btn-success my-2']) !!}
    {!! Form::close() !!}
@endsection()
