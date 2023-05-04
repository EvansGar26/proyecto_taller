@extends('Cruds.master_read')
@section('contenido_central')
    <div class="card-header">Detalles del país</div>

    <div class="detail">
        <label>Nombre: </label>
        <div class="detail-value">{!! $pais->nombre !!}</div>
    </div>

    <div class="detail">
        <label>Clave: </label>
        <div class="detail-value">{!! $pais->clave !!}</div>
    </div>

    <div class="detail">
        <label>Status: </label>
        <div class="detail-value">{!! $pais->status !!}</div>
    </div>
@endsection()
