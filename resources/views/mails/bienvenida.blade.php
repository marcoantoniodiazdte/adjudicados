@extends('mails.layout')

@section('content')
<div class="title">¡Bienvenido a Adjudicados!</div>
<br>

    <div class="body-text">
        <p>Estimado {{ $user->name }},</p>
        <p>Gracias por registrarte, a continuación detallamos los datos de acceso a su cuenta con una contraseña temporal:</p>

        <table>
            <tr>
                <th style="padding-right: 10px;">Usuario:</th>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <th style="padding-right: 10px;">Contraseña:</th>
                <td>{{ $password }}</td>
            </tr>
        </table>


            <p>Para hacer el cambio de contraseña y comenzar el proceso de documentación, accede a nuestra plataforma haciendo click <a href="{!! str_replace('/api','',url('/')) !!}">AQUÍ</a></p>

        <br>
        <p>Atentamente,</p>
    </div>
@endsection