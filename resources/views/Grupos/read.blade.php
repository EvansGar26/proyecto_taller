@extends('Cruds.master_read')
@section('contenido_central')
    <div class="card-header">Detalles del grupo</div>

    <div class="detail">
        <label>Encargado: </label>
        <div class="detail-value">{!! $grupo->users->nombre !!} {!!  $grupo->users->ap_pat !!}</div>
    </div>

    <div class="detail">
        <label>Nombre: </label>
        <div class="detail-value">{!! $grupo->nombre !!}</div>
    </div>

    <div class="detail">
        <label>Status: </label>
        <div class="detail-value">{!! $grupo->status !!}</div>
    </div>
@endsection()
