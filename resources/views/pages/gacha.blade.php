@extends('layouts.guest')
@section('title')
    Simulador de gacha ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script type="text/javascript" src="{{ asset('js/gacha.js') }}"></script>
@endsection
{{-- Main --}}
@section('content')
<div class="container">
    <div class="row justify-content-center espacio">
        <button id="btn-gacha">Tirar al gacha</button>
    </div>
    <div class="row row-cols-auto justify-content-center gap-3" id="pull-result">
        @foreach ($pull as $carta)
        <div class="col">
            <img src="{{ asset($carta->unidolized_icon) }}" alt="{{ $carta->nombre }}"
            class="card img-fluid">
            <div class="d-flex flex-column align-items-center gap-1">
                <img src="img/icons/{{ $carta->rareza }}_star.png" alt="Rareza {{ $carta->rareza}}"
                class="img-fluid">
                <img src="img/icons/{{ $carta->atributo }}.png" alt="Atributo {{ $carta->atributo }}"
                class="img-fluid">
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
