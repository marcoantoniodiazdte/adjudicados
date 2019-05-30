@extends('layouts.app')

@section('navbar_app')
    @component('components.navbar')
    @endcomponent
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard |   {{
                       Auth::user()->inmobiliaria->name
                    }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Opciones</h1>

                        @foreach($opciones as $opcion)
                            <a href="{{ $opcion['url'] }}">{{ $opcion['name'] }}</a><br>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
