@extends('mails.layout')

@section('content')
    <div class="title">Nueva Oferta!</div>
    <br>
    <div class="body-text">
        <p>Estimado Analista,</p>
        <p>La plataforma presenta una nueva coontra oferta.</p>
        <p>Para tener mas información sobre la oportunidad haz click <a href="{{str_replace('/api','',url('/'))}}/admin/oportunidades/{{$data['id']}}">AQUÍ</a></p>
        <p>Atentamente,</p>
    </div>
@endsection