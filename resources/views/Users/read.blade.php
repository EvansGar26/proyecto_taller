@extends('Cruds.master_read')
@section('contenido_central')
    <div class="card-header">Detalles del user</div>

    <div class="detail">
        <label>Nombre: </label>
        <div class="detail-value">{!! $user->nombre !!}</div>
    </div>

    <div class="detail">
        <label>Apellido paterno: </label>
        <div class="detail-value">{!! $user->ap_pat !!}</div>
    </div>


    <div class="detail">
        <label>Apellido materno: </label>
        <div class="detail-value">{!! $user->ap_mat !!}</div>
    </div>

    <div class="detail">
        <label>Email: </label>
        <div class="detail-value">{!! $user->email !!}</div>
    </div>

    <div class="detail">
        <label>Username: </label>
        <div class="detail-value">{!! $user->username !!}</div>
    </div>

    <div class="detail">
        <label>Contraseña: </label>
        <div class="detail-value">{!! $user->password !!}</div>
    </div>

    <div class="detail">
        <label>Teléfono: </label>
        <div class="detail-value">{!! $user->telefono !!}</div>
    </div>

    <div class="detail">
        <label>Dirección: </label>
        <div class="detail-value">{!! $user->direccion !!}</div>
    </div>

    <div class="detail">
        <label>Municipio: </label>
        <div class="detail-value">{!! $user->municipios->nombre !!}</div>
    </div>

    <div class="detail">
        <label>Colonia: </label>
        <div class="detail-value">{!! $user->colonia !!}</div>
    </div>

    <div class="detail">
        <label>Código postal: </label>
        <div class="detail-value">{!! $user->cp !!}</div>
    </div>

    <div class="detail">
        <label>Fecha de nacimiento: </label>
        <div class="detail-value">{!! $user->fecha_naci !!}</div>
    </div>

    <div class="detail">
        <label>Rol: </label>
        <div class="detail-value">{!! $user->roles->nombre !!}</div>
    </div>

    <div class="detail">
        <label>Status: </label>
        <div class="detail-value">{!! $user->status !!}</div>
    </div>
@endsection()
