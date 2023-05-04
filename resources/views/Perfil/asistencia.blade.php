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
            @if ($conferencias !== null)
                <div class="col-md-10">
                    @foreach ($conferencias as $conferencia)
                        <div class="row my-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header" style="background-color: #FEF9E7; ">
                                        Ponente: {!! $conferencia->conferencias->expositor !!}
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Tema</h5>
                                        <p class="card-text">{!! $conferencia->conferencias->tema !!}</p>
                                        <h5 class="card-title">Descripción</h5>
                                        <p class="card-text">{!! $conferencia->conferencias->descripcion_tema !!}</p>
                                        <h5 class="card-title">Fecha y hora</h5>
                                        <p class="card-text">{!! $conferencia->conferencias->fecha !!}, {!! $conferencia->conferencias->hora_inicio !!}</p>
                                        <h5 class="card-title">URL</h5>
                                        <a href="{!! $conferencia->conferencias->url !!}"class="card-text">{!! $conferencia->conferencias->url !!}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection()
