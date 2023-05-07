@extends('layouts.guest')
@section('title')
    Perfil ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
@endsection
{{-- Main --}}
@section('content')
{{--  --}}
@php
    $user = auth()->user();
@endphp
<div class="container px-0 contenedor glassmorphism">
    <div class="row gx-0">
        <div class="col-lg-3 col-md-6">
            <picture class="avatar-bg">
                <img src="{{ asset($user->avatar) }}" alt="{{ 'Avatar de ' . $user->name }}" class="avatar">
            </picture>
        </div>
            <!--  -->
        <div class="col px-3">
            <h2>Perfil de {{ $user->name }}</h2>
            <!-- flex de media object bootstrap para colocar texto bio + chibi -->
            <div class="caja d-flex" style="flex-direction: initial;">
                <div class="caja-content flex-grow-1 ms-3">
                    <span>
                        {{ $user->biografia ?? $user->name . ' todavía no ha escrito una biografía.'}}
                    </span>
                </div>
                <!-- chibi de personaje favorito -->
                @if (isset($user->pj_fav))
                    <div class="flex-shrink-0 align-self-end align-self-center">
                        <picture>
                            <img src="{{ asset($user->pj_fav_id->imagen) }}" alt="{{ $user->pj_fav_id->nombre . 'Chibi' }}">
                        </picture>
                    </div>
                @endif
            </div>

            <div class="botones">
                <div class="espacio">
                    <button id="cumple"><i class="fa-solid fa-cake-candles"></i> {{ $user->cumple ?? '01/01/1970'}}</button>
                    <button id="grupo">{{ $user->grupo_fav_id->nombre ?? 'Grupo favorito' }}</button>
                </div>
                <div class="espacio">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-brands fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                    <span><a href="https://twitter.com/airynwn" target="_blank">{{ $user->twitter ?? 'Twitter' }}</a></span>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-brands fa-discord fa-stack-1x fa-inverse"></i>
                    </span>
                    <span><a href="https://discord.com" target="_blank">{{ $user->discord ?? 'Discord' }}</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col contenedor contenedor-padding">
            <span class="tab">Publicaciones</span>
            <div class="caja">
                <span class="titulo">Post</span>
                <div class="caja-content">
                    <span>post content</span>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="col-md-9 order-1 order-sm-last order-md-last contenedor contenedor-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col tabs">
                        <span class="tab">Lista de cartas</span>
                    </div>
                    <div class="col tabs">
                        <span class="tab">Lista de deseos</span>
                    </div>
                </div>
                <div class="espacio"></div>
                <!-- g-3 (gutter-3) da separación horizontal y vertical entre columnas según pantalla -->
                @if ($user->cartas !== null)
                {{-- DESEOS: Hacer una variable según el botón onclick --}}
                @foreach ($user->cartas()->where('estado', 'coleccion')->get() as $carta)
                    <div class="row row-cols-3 row-cols-md-4 row-cols-lg-5 g-3">
                        <div class="col">
                            <picture>
                                <img src="{{ asset($carta->unidolized) }}" alt="{{ $carta->nombre . ' Icon' }}" class="img-fluid brillo">
                            </picture>
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
{{--  --}}
@endsection
