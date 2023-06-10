@extends('layouts.guest')
@section('title')
    Adivina la canción ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/canciones.css') }}">
    <script type="text/javascript" src="{{ asset('js/canciones.js') }}" defer></script>
@endsection
{{-- Main --}}
@section('content')
<div class="container">
    <div class="row espacio">
        <div class="col d-flex flex-column justify-content-center" id="titulo">
            <hr>
            <h1>Adivina la canción</h1>
            <ul>
                <li>Al principio sólo podrás escuchar 2 segundos</li>
                <li>Cada fallo te dará 2 segundos más para escuchar</li>
                <li>Una vez aciertes, volverás a poder escuchar sólo los 2 primeros segundos</li>
                <li>Podrás seguir jugando con una nueva canción después de acertar</li>
            </ul>
            <em class="text-center">¡Suerte!</em>
            <hr>
        </div>
    </div>
    <div class="row espacio">
        <div class="col d-flex justify-content-center" id="contenedor-audio">
            <audio controls id="audio-player">
                <source src="{{ $random->audio }}" type="audio/ogg">
                Tu navegador no soporta la reproducción de audio.
            </audio>
        </div>
    </div>
    <div class="row espacio">
        <div class="col d-flex justify-content-center">
            <form onsubmit="adivinar(event)" class="d-flex flex-column align-items-center gap-3 w-100">
                @csrf
                <input type="hidden" name="solucion" value="{{ $random->titulo }}" id="cancion-random">
                <input list="canciones" name="cancion" id="cancion-guess">
                <datalist id="canciones">
                    @foreach ($canciones as $cancion)
                    <option value="{{ $cancion->titulo }}">
                    @endforeach
                </datalist>
                <button type="submit">Enviar</button>
            </form>
            <br>
        </div>
    </div>
    <div class="row espacio">
        <div class="col d-flex flex-column text-center" id="respuesta">
        </div>
    </div>
</div>
@endsection
