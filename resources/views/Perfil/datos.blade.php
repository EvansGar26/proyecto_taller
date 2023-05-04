@extends('Cruds.master')
@section('contenido_central')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-2 mt-5">
                <div class="list-group">
                    <a href="{{ route('datos-user') }}"
                        class="list-group-item list-group-item-action{{ $currentUrl == route('datos-user') ? ' active' : '' }}"{{ $currentUrl == route('datos-user') ? ' aria-current="true"' : '' }}>
                        Mis datos</a>
                    <a href="{{ route('conferencias-user') }}"
                        class="list-group-item list-group-item-action{{ $currentUrl == route('conferencias-user') ? ' active' : '' }}"{{ $currentUrl == route('conferencias-user') ? ' aria-current="true"' : '' }}>
                        Mis conferencias</a>
                    <a href="{{ route('favoritas-user') }}"
                        class="list-group-item list-group-item-action{{ $currentUrl == route('favoritas-user') ? ' active' : '' }}"{{ $currentUrl == route('favoritas-user') ? ' aria-current="true"' : '' }}>
                        Mis carreras favoritas</a>
                </div>
            </div>
            <div class="col-md-10">
                <form method="POST" action="{{route ('actualiza-user')}}">
                    @csrf
                    @method('PATCH')
                    <h1>Mis datos</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" value="{!! $usuario->nombre !!}">
                        </div>
                        <div class="col-md-6">
                            <label for="username">Username:</label>
                            <input type="text" name="username" value="{!! $usuario->username !!}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="ap_pat">Apellido paterno:</label>
                            <input type="text" name="ap_pat" value="{!! $usuario->ap_pat !!}">
                        </div>
                        <div class="col-md-6">
                            <label for="ap_mat">Apellido materno:</label>
                            <input type="text" name="ap_mat" value="{!! $usuario->ap_mat !!}">
                        </div>
                    </div>

                    <label for="email">Email:</label>
                    <input type="email" name="email" value="{!! $usuario->email !!}" readonly>

                    <label for="telefono">Teléfono:</label>
                    <input type="text" name="telefono" value="{!! $usuario->telefono !!}">

                    <label for="direccion">Dirección:</label>
                    <textarea name="direccion" rows="3">{!! $usuario->direccion !!}</textarea>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="cp">Código postal:</label>
                            <input type="text" name="cp" value="{!! $usuario->cp !!}">
                        </div>
                        <div class="col-md-6">
                            <label for="colonia">Colonia:</label>
                            <input type="text" name="colonia" value="{!! $usuario->colonia !!}">
                        </div>
                    </div>
                    <input type="hidden" name="id_rol" value="{!! $usuario->id_rol !!}">
                    <input type="hidden" name="password" value="{!! $usuario->password !!}">
                    <input type="submit" class="btn btn-success" value="Actualizar información">
                </form>
            </div>
        </div>
    </div>
@endsection()
