@extends('layouts.guest')
@section('title')
    Adivina la canción ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/canciones.css') }}">
    <script type="text/javascript" src="{{ asset('js/canciones.js') }}"></script>
@endsection
{{-- Main --}}
@section('content')
<div class="container">
    <div class="row espacio">
        <div class="col d-flex flex-column justify-content-center" id="titulo">
            <hr>
            <h1>Adivina la canción</h1>
            <em class="text-center">Podrás seguir jugando con una nueva canción después de acertar</em>
            <hr>
        </div>
    </div>
    <div class="row espacio">
        <div class="col d-flex justify-content-center" id="contenedor-audio">
            <audio controls>
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
