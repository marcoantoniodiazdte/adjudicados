@extends('mails.layout')

@section('content')
    <div class="title">¡Confirmación!</div>
    <br>
    <div class="body-text">
        <p>Estimado Cliente,</p>
        <p>Hemos recibido su solicitud de oferta, pronto nos comunicaremos con usted.</p>
        <p>Favor tener a la mano los siguientes requisitos para formalizar tu oferta:</p>
        <ul>
            @foreach($requisitos as $requisito)
                <li> {{$requisito->nombre}}</li>
            @endforeach
        </ul>
        <p>Atentamente,</p>
    </div>
@endsection