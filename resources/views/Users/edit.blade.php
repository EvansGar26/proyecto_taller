@extends('Cruds.master')
@section('contenido_central')
    <h1>Editar user</h1>
    {!! Form::open(['method' => 'PATCH', 'url' => '/users/' . $user->id]) !!}
    <div class="form-group my-2">
        {!! Form::label('nombre', 'Nombre del user') !!}
        {!! Form::text('nombre', $user->nombre, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el nombre del país'
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('ap_pat', 'Apellido Paterno:') !!}
        {!! Form::text('ap_pat', $user->ap_pat, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el apellido paterno'
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('ap_mat', 'Apellido materno:') !!}
        {!! Form::text('ap_mat', $user->ap_mat, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese el apellido materno'
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', $user->email, [
            'class' => 'form-control',
            'placeholder' => 'Ingrese un email'
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('username', 'Username: ') !!}
        {!! Form::text('username', $user->username, ['class' => 'form-control', 'placeholder' => 'Ingrese un username']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('password', 'Contraseña: ') !!}
        {!! Form::text('password', $user->password, ['class' => 'form-control', 'placeholder' => 'Ingrese la contraseña']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('telefono', 'Teléfono del user') !!}
        {!! Form::text('telefono', $user->telefono, ['class' => 'form-control', 'placeholder' => 'Ingrese el teléfono']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('direccion', 'Dirección del user') !!}
        {!! Form::text('direccion', $user->direccion, ['class' => 'form-control', 'placeholder' => 'Ingrese la dirección']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('id_municipio', 'Municipio:') !!}
        {!! Form::select('id_municipio', $municipios->pluck('nombre', 'id')->all(), $user->id_municipio, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione un municipio',
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('colonia', 'Colonia del user') !!}
        {!! Form::text('colonia', $user->colonia, ['class' => 'form-control', 'placeholder' => 'Ingrese la colonia']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('cp', 'Código postal del user') !!}
        {!! Form::text('cp', $user->cp, ['class' => 'form-control', 'placeholder' => 'Ingrese el código postal']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('fecha_naci', 'Fecha de nacimiento: ') !!}
        {!! Form::input('date','fecha_naci', $user->fecha_naci, ['class' => 'form-control', 'placeholder' => 'Ingrese una fecha']) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('id_rol', 'Rol:') !!}
        {!! Form::select('id_rol', $roles->pluck('nombre','id')->all(), $user->id_rol, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione un rol'
        ]) !!}
    </div>

    <div class="form-group my-2">
        {!! Form::label('status', 'Estatus:') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], $user->status, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una opción'
        ]) !!}
    </div>
    {!! Form::submit('Editar Usuario', ['class' => 'btn btn-success my-2']) !!}
    {!! Form::close() !!}
@endsection()
