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
    {{-- Contenido --}}
<div class="container-fluid" id="pj-container">
    <div class="row">
        <div class="col">
            <h2>Elige un personaje para mostrar su información</h2>
            <div class="container justify-content-center d-flex">
                <div class="row">
                    <div class="col caja">
                        <div class="container caja-content">
                            <div class="row row-cols-3 row-cols-md-5 row-cols-lg-6 g-3">
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
