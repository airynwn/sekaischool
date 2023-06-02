@extends('layouts.guest')
@section('title')
    Personajes ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/personaje.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colores.css') }}">
    <script type="text/javascript" src="{{ asset('js/sekaischool.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/personajes.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cooltipz-css@2.2.2/cooltipz.min.css">
@endsection
{{-- Main --}}
@section('content')
    {{-- Contenido --}}
<div class="container-fluid" id="pj-container">
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="row">
        <div class="col">
            <h2>Elige un personaje para mostrar su información</h2>
            <div class="espacio"></div>
            <div class="container justify-content-center d-flex">
                <div class="row">
                    <div class="col panel">
                        <div class="container">
                            <div class="row row-cols-2 row-cols-md-4 g-3">
                                @foreach ($personajes as $pj)
                                <div class="col">
                                    <button class="vacio btn-pj" data-pj-id="{{ $pj->id }}"
                                    onclick="mostrarPj(event)">
                                        <img src="{{ $pj->chibi }}" alt="Chibi {{ $pj->nombre }}"
                                        class="img-fluid select-personaje" data-pj-id="{{ $pj->id }}">
                                    </button>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
