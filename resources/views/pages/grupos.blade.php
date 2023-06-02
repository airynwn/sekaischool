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
@php
    $grupos = \App\Models\Grupo::all()->sortBy('id');
@endphp
@section('content')
<div class="container-fluid">
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    {{-- Menú de grupos --}}
    <div class="row row-cols-1 row-cols-lg-4 gap-3 justify-content-center">
        @foreach ($grupos as $grupo)
            <div class="col justify-content-center">
                <button class="opcion btn-grupo"
            data-color="bg-grupo-{{ $grupo->id }}"
            data-grupo-id="{{ $grupo->id }}"
            onclick="mostrarGrupo(event)">
                {{ $grupo->nombre }}
            </button>
            </div>
        @endforeach
    </div>
    <hr>
    {{-- <div class="row">
        @foreach ($grupos as $grupo)
        <div class="col d-flex flex-column justify-content-center gap-3">
            <button class="opcion btn-grupo"
            data-color="bg-grupo-{{ $grupo->id }}"
            data-grupo-id="{{ $grupo->id }}"
            onclick="mostrarGrupo(event)">
                {{ $grupo->nombre }}
            </button>
        </div>
        @endforeach
    </div> --}}
</div>
<div class="espacio"></div>
    {{-- Contenido --}}
<div class="container" id="grupo-container">
    @include('pages.grupo', ['grupo' => $grupo])
</div>
@endsection
