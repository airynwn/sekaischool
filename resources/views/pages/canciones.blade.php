@extends('layouts.guest')
@section('title')
    Adivina la canción ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/gacha.css') }}">
    <script type="text/javascript" src="{{ asset('js/canciones.js') }}"></script>
@endsection
{{-- Main --}}
@section('content')
<div class="container">
    <div class="row espacio">
        <div class="col d-flex flex-column justify-content-center">
            <h3>Adivina la canción</h3>
            <hr>
        </div>
    </div>
    <div class="row espacio">
        <div class="col d-flex justify-content-center" id="contenedor-audio">
            <audio controls start="0" end="5">
                <source src="{{ $random->audio }}" type="audio/ogg">
                Tu navegador no soporta la reproducción de audio.
              </audio>
        </div>
    </div>
    <div class="row espacio">
        <div class="col d-flex justify-content-center">
            <form onsubmit="adivinar(event)">
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
        <div class="col d-flex flex-column text-center">
            <p id="respuesta"></p>
        </div>
    </div>
</div>
@endsection
