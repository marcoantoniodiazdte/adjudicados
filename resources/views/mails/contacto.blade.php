@extends('mails.layout')

@section('content')
    <div class="title">Nuevo Mensaje!</div>
    <br>
    <div class="body-text">
        <p><b>Nombre: </b> {{$data['nombre']}}</p>
        <p><b>Telefono: </b>{{$data['telefono']}}</p>
        <p><b>Correo: </b>{{$data['email']}}</p>
        <p><b>Cod. Referencia:{{$data['codigo']}} </b></p>
        <p><b>Mensaje: </b>{{$data['mensaje']}}</p>
    </div>
@endsection