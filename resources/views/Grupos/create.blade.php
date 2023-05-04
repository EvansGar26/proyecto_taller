@extends('Cruds.master')
@section('contenido_central')
    <h1>Crear grupos</h1>

    {!! Form::open(['url' => '/grupos']) !!}
    <div class="form-group my-2">
        {!! Form::label('id_user', 'Docente Encargado:') !!}
        {!! Form::select('id_user', $users->map(function ($user) {
            return ['id' => $user->id, 'nombre' => $user->nombre . ' ' . $user->ap_pat];
        })->pluck('nombre', 'id')->all(), null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione un docente',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('nombre', 'Nombre del grupo') !!}
        {!! Form::text('nombre', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el nombre del grupo',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('status', 'Estatus:') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una opción',
        ]) !!}
    </div>
    {!! Form::submit('Crear Grupo', ['class' => 'btn btn-success my-2']) !!}
    {!! Form::close() !!}
@endsection()
