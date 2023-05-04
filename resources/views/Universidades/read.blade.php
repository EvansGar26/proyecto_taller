@extends('Cruds.master_read')
@section('contenido_central')
    <div class="card-header">Detalles del universidad</div>

    <div class="detail">
        <label>Municipio: </label>
        <div class="detail-value">{!! $universidad->municipios->nombre !!}</div>
    </div>

    <div class="detail">
        <label>Nombre: </label>
        <div class="detail-value">{!! $universidad->nombre !!}</div>
    </div>

    <div class="detail">
        <label>Director: </label>
        <div class="detail-value">{!! $universidad->director !!}</div>
    </div>

    <div class="detail">
        <label>Direccion: </label>
        <div class="detail-value">{!! $universidad->direccion !!}</div>
    </div>

    <div class="detail">
        <label>Código postal: </label>
        <div class="detail-value">{!! $universidad->cp !!}</div>
    </div>

    <div class="detail">
        <label>Teléfono: </label>
        <div class="detail-value">{!! $universidad->telefono !!}</div>
    </div>
    
    <div class="detail">
        <label>logotipo: </label>
        <div class="detail-value">{!! $universidad->logotipo !!}</div>
    </div>

    <div class="detail">
        <label>URL: </label>
        <div class="detail-value">{!! $universidad->url !!}</div>
    </div>

    <div class="detail">
        <label>Status: </label>
        <div class="detail-value">{!! $universidad->status !!}</div>
    </div>
@endsection()
