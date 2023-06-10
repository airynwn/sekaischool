@extends('layouts.guest')
@section('title')
    Adivina la canción ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/gacha.css') }}">
    <script type="text/javascript" src="{{ asset('js/gacha.js') }}"></script>
@endsection
{{-- Main --}}
@section('content')
<div class="container">
    <div class="row espacio">
        <div class="col d-flex flex-column justify-content-center">
            <h3>Adivina la canción</h3>
            <hr>
            <table class="tabla">
                <thead>
                    <tr>
                        <th>Rareza</th>
                        <th>Total</th>
                        <th>Porcentaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="img/icons/2_star.png" alt="Rareza 2" class="img-fluid"></td>
                        <td><span id="count-2">0</span></td>
                        <td><span id="pc-2">0</span></td>
                    </tr>
                    <tr class="fila-cristal">
                        <td><img src="img/icons/crystal.png" alt="Cristal" class="img-fluid"></td>
                        <td><strong>Cartas obtenidas: <span id="cartas">0</span></strong></td>
                        <td><strong>Cristales gastados: <span id="cristales">0</span></strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row espacio gx-3">
        <div class="col d-flex justify-content-evenly">
            <button class="btn-gacha" onclick="gachaPull()">Tirar al gacha</button>
            <button class="btn-gacha" onclick="resetPull()">Empezar de nuevo</button>
        </div>
    </div>
    <div class="row espacio">
        <div class="col d-flex justify-content-center">
            <audio controls start="0" end="5">
                <source src="{{ $random->audio }}" type="audio/ogg">
                Tu navegador no soporta la reproducción de audio.
              </audio>
        </div>
    </div>
    <div class="row espacio">
        <div class="col d-flex justify-content-center">
            <form action="" method="post">
                @csrf
                <input type="hidden" name="solucion" value="{{ $random->titulo }}">
                <input list="canciones" name="cancion">
                <datalist id="canciones">
                    @foreach ($canciones as $cancion)
                    <option value="{{ $cancion->titulo }}">
                    @endforeach
                </datalist>
                <button type="submit">Enviar</button>
            </form>
            @if (isset($post))
            {{ $guess }} = {{ $solucion }}
            @endif
        </div>
    </div>
</div>
@endsection
