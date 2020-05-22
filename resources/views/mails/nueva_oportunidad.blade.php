@extends('mails.layout')

@section('content')
    <div class="title">Nueva Oferta!</div>
    <br>
    <div class="body-text">
        <p>Estimado Analista,</p>
        <p>La plataforma presenta una nueva oferta de oportunidad de tipo {{ucfirst($data['tipo'])}} con el Nro. {{str_pad($data['id'], 6, '0', STR_PAD_LEFT)}} y un valor ofertado de RD${{number_format($data['monto'])}}.</p>
    <p>Para tener mas información sobre la oportunidad haz click <a href="{{str_replace('/api','',url('/'))}}/admin/oportunidades/{{$data['id']}}">AQUÍ</a></p>
        <p>Atentamente,</p>
    </div>
@endsection