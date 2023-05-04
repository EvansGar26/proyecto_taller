@extends('Cruds.master_read')
@section('contenido_central')
    <div class="card-header">Detalles de la conferencia</div>

    <div class="detail">
        <label>Encargado: </label>
        <div class="detail-value">{!! $conferencia->users->nombre !!} {!! $conferencia->users->ap_pat !!}</div>
    </div>

    <div class="detail">
        <label>Fecha: </label>
        <div class="detail-value">{!! $conferencia->fecha !!}</div>
    </div>

    <div class="detail">
        <label>Hora de inicio: </label>
        <div class="detail-value">{!! $conferencia->hora_inicio !!}</div>
    </div>

    <div class="detail">
        <label>Hora de inicio: </label>
        <div class="detail-value">{!! $conferencia->hora_termino !!}</div>
    </div>

    <div class="detail">
        <label>Estado: </label>
        <div class="detail-value">{!! $conferencia->estado !!}</div>
    </div>

    <div class="detail">
        <label>Tema: </label>
        <div class="detail-value">{!! $conferencia->tema !!}</div>
    </div>

    <div class="detail">
        <label>Descripción del tema: </label>
        <div class="detail-value">{!! $conferencia->descripcion_tema !!}</div>
    </div>

    <div class="detail">
        <label>Ponente: </label>
        <div class="detail-value">{!! $conferencia->expositor !!}</div>
    </div>

    <div class="detail">
        <label>Descripción del ponente: </label>
        <div class="detail-value">{!! $conferencia->descripcion_expositor !!}</div>
    </div>

    <div class="detail">
        <label>Ciclo escolar: </label>
        <div class="detail-value">{!! $conferencia->ciclo_escolar !!}</div>
    </div>

    <div class="detail">
        <label>URL: </label>
        <div class="detail-value">{!! $conferencia->url !!}</div>
    </div>

    <div class="detail">
        <label>Status: </label>
        <div class="detail-value">{!! $conferencia->status !!}</div>
    </div>
@endsection()
