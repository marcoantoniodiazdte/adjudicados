@extends('welcome.layouts.layout')
@section('content')
<div class="contact-3 content-area-7">
    <div class="container">
        <div class="main-title mb-60">
            <h1>Verifica tu correo electrónico</h1>
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    <p class="lead">Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.</p>
                </div>
            @endif
            <p class="lead">Antes de continuar, revise su correo electrónico para obtener un enlace de verificación.</p>
            <p class="lead"> Si no recibiste el correo electrónico, haz click <a style="color: blue" href="{{ route('verification.resend') }}">aquí</a></p>
        </div>
    </div>
</div>

@endsection
