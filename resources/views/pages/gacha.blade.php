@extends('layouts.guest')
@section('title')
    Simulador de gacha ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/gacha.css') }}">
    <script type="text/javascript" src="{{ asset('js/gacha.js') }}"></script>
@endsection
{{-- Main --}}
@section('content')
<div class="container">
    <div class="row espacio">
        <div class="col text-center">
            <h3>Simulador Gacha</h3>
            <hr>
            <div class="advertencia">
                <p>
                    Este simulador te permite jugar con la probabilidad y ver qué cartas te saldrían en una tirada.
                </p>
                <p>
                    Las probabilidades fijas son: 2* -> 88.5% | 3* -> 8.5% | 4* -> 3%
                </p>
                <strong>
                    ¡Recuerda que sólo es un simulador por diversión y no determina tu suerte real en el juego!
                </strong>
            </div>
            <hr>
        </div>
    <div class="row espacio">
        <div class="col d-flex flex-column justify-content-center">
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
                    <tr>
                        <td><img src="img/icons/3_star.png" alt="Rareza 3" class="img-fluid"></td>
                        <td><span id="count-3">0</span></td>
                        <td><span id="pc-3">0</span></td>
                    </tr>
                    <tr>
                        <td><img src="img/icons/4_star.png" alt="Rareza 4" class="img-fluid"></td>
                        <td><span id="count-4">0</span></td>
                        <td><span id="pc-4">0</span></td>
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
    <div class="row row-cols-auto row-cols-lg-5 justify-content-center gy-3 mx-1 espacio" id="pull-result">
    </div>
</div>
@endsection
