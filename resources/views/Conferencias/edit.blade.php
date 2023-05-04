@extends('Cruds.master')
@section('contenido_central')
    <h1>Editar conferencia</h1>
    {!! Form::open(['method' => 'PATCH', 'url' => '/conferencias/' . $conferencia->id]) !!}
    <div class="form-group my-2">
        {!! Form::label('id_user', 'Docente Encargado:') !!}
        {!! Form::select(
            'id_user',
            $users->map(function ($user) {
                    return ['id' => $user->id, 'nombre' => $user->nombre . ' ' . $user->ap_pat];
                })->pluck('nombre', 'id')->all(),
            $conferencia->id_user,
            [
                'class' => 'form-control',
                'placeholder' => 'Seleccione un docente',
            ],
        ) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('fecha', 'Fecha de la conferencia') !!}
        {!! Form::date('fecha', $conferencia->fecha, ['class' => 'form-control', 'placeholder' => 'Elija una fecha']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('hora_inicio', 'Hora de inicio de la conferencia') !!}
        {!! Form::time('hora_inicio', $conferencia->hora_inicio, [
            'class' => 'form-control',
            'placeholder' => 'Elija una hora de inicio',
            'data-mask' => '99:99:99',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('hora_termino', 'Hora de termino de la conferencia') !!}
        {!! Form::time('hora_termino', $conferencia->hora_termino, [
            'class' => 'form-control',
            'placeholder' => 'Elija una hora de termino',
            'data-mask' => '99:99:99',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('estado', 'Estatus:') !!}
        {!! Form::select('estado', ['A' => 'Activo', 'R' => 'Retrasado', 'C' => 'Cancelado'], $conferencia->estado, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una opción',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('tema', 'Tema de la conferencia') !!}
        {!! Form::text('tema', $conferencia->tema, ['class' => 'form-control', 'placeholder' => 'Ingrese el tema de la conferencia']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('descripcion_tema', 'Descripcion del tema') !!}
        {!! Form::text('descripcion_tema', $conferencia->descripcion_tema, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese la descripcion del tema',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('expositor', 'Ponente de la conferencia') !!}
        {!! Form::text('expositor', $conferencia->expositor, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del ponente']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('descripcion_expositor', 'Descripcion del ponente') !!}
        {!! Form::text('descripcion_expositor', $conferencia->descripcion_expositor, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese la descripcion del ponente',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('ciclo_escolar', 'Ciclo escolar') !!}
        {!! Form::text('ciclo_escolar', $conferencia->ciclo_escolar, ['class' => 'form-control', 'placeholder' => 'Ingrese el ciclo escolar']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('url', 'URL de la conferencia') !!}
        {!! Form::text('url', $conferencia->url, ['class' => 'form-control', 'placeholder' => 'Ingrese el URL de la conferencia']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('status', 'Estado de la conferencias') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], $conferencia->status, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el estado de la conferencia',
        ]) !!}
    </div>

    {!! Form::submit('Editar conferencia', ['class' => 'btn btn-success my-2']) !!}
    {!! Form::close() !!}
@endsection()
