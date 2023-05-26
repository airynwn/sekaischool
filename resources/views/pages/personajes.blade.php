@extends('layouts.guest')
@section('title')
    Personajes ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/personaje.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colores.css') }}">
    <script type="text/javascript" src="{{ asset('js/sekaischool.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/personajes.js') }}"></script>
@endsection
{{-- Main --}}
@section('content')
<div class="container-fluid">
    {{-- Menú de grupos --}}
    <div class="row">
        <div class="col d-flex flex-column flex-md-row justify-content-between gap-3">
        @foreach ($personajes as $personaje)
            <button class="opcion btn-pj"
            data-color="bg-pj-{{ $personaje->id }}"
            data-pj-id="{{ $personaje->id }}"
            onclick="mostrarPj(event)">
                {{ $personaje->nombre }}
            </button>
        @endforeach
        </div>
    </div>
</div>
<div class="espacio"></div>
    {{-- Contenido --}}
<div class="container-fluid" id="pj-container">
    @include('pages.personaje', ['personaje' => $personaje])
</div>
@endsection
