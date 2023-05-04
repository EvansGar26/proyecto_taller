@extends('Cruds.master')
@section('contenido_central')
    <h1>Crear usuario</h1>

    {!! Form::open(['url'=>'/users']) !!}
    <div class="form-group my-2">
        {!! Form::label('nombre', 'Nombre del user') !!}
        {!! Form::text('nombre', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el nombre del país'
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('ap_pat', 'Apellido Paterno:') !!}
        {!! Form::text('ap_pat', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el apellido paterno'
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('ap_mat', 'Apellido materno:') !!}
        {!! Form::text('ap_mat', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el apellido materno'
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese un email'
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('username', 'Username: ') !!}
        {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un username']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('password', 'Contraseña: ') !!}
        {!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la contraseña']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('telefono', 'Teléfono del user') !!}
        {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el teléfono']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('direccion', 'Dirección del user') !!}
        {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dirección']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('id_municipio', 'Municipio:') !!}
        {!! Form::select('id_municipio', $municipios->pluck('nombre', 'id')->all(), null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione un municipio',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('colonia', 'Colonia del user') !!}
        {!! Form::text('colonia', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la colonia']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('cp', 'Código postal del user') !!}
        {!! Form::text('cp', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el código postal']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('fecha_naci', 'Fecha de nacimiento: ') !!}
        {!! Form::input('date','fecha_naci', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una fecha']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('id_rol', 'Rol:') !!}
        {!! Form::select('id_rol', $roles->pluck('nombre','id')->all(), null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione un rol'
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('status', 'Estatus:') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una opción'
        ]) !!}
    </div>
    {!! Form::submit('Crear Usuario', ['class' => 'btn btn-success my-2']) !!}
    {!! Form::close() !!}
@endsection()
