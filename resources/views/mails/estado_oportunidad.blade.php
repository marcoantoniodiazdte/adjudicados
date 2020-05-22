@extends('mails.layout')

@section('content')
    <div class="title">¡Confirmación!</div>
    <br>
    <div class="body-text">
        <p>Estimado Cliente,</p>
        <p>Su solicitud de oferta se encuentra en estado: {{$status['nombre']}}.</p>
        @if( $status['notificacion'])
            <p>Nota : {{$status['mensaje']}} </p>
        @endif
        <p>Atentamente,</p>
    </div>
@endsection