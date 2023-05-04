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
            @if ($carreras !== null)
                <div class="col-md-10">
                    @foreach ($carreras as $carrera)
                        <div class="row my-3">
                            <div class="col-md-12">
                                <form action="{{ route('elimina-carrera') }}" method="POST">
                                    @csrf
                                    <div class="card">
                                        <div class="card-header">
                                            Carrera: {!! $carrera->carreras->nombre !!}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Objetivo</h5>
                                            <p class="card-text">{!! $carrera->carreras->objetivo !!}</p>
                                            <h5 class="card-title">Descripción</h5>
                                            <p class="card-text">{!! $carrera->carreras->descripcion !!}</p>
                                            <h5 class="card-title">Perfil de egreso</h5>
                                            <p class="card-text">{!! $carrera->carreras->perfil_egreso !!}</p>
                                            <h5 class="card-title">Campo laboral</h5>
                                            <p class="card-text">{!! $carrera->carreras->campo_laboral !!}</p>
                                            <input type="hidden" name="id_carrera" value="{{ $carrera->id_carrera }}">
                                            <button class="btn btn-danger" type="submit">Quitar
                                                carrera de
                                                favoritos</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection()
