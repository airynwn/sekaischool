@extends('layouts.guest')
@section('title')
    Grupos ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/grupo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colores.css') }}">
    <script type="text/javascript" src="{{ asset('js/sekaischool.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/grupos.js') }}"></script>
@endsection
{{-- Main --}}
@section('content')
<div class="container-fluid">
    {{-- Menú de grupos --}}
    <div class="row">
        <div class="col d-flex flex-column flex-md-row justify-content-between gap-3">
        @foreach ($grupos as $grupo)
            <button class="opcion btn-grupo"
            data-color="bg-grupo-{{ $grupo->id }}"
            data-grupo-id="{{ $grupo->id }}"
            onclick="mostrarGrupo(event)">
                {{ $grupo->nombre }}
            </button>
        @endforeach
        </div>
    </div>
</div>
<div class="espacio"></div>
    {{-- Contenido --}}
<div class="container" id="grupo-container">
    @include('pages.grupo', ['grupo' => $grupo])
</div>
@endsection
