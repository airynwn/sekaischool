@extends('layouts.guest')
@section('title')
    Inicio ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colores.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            themeSystem: 'bootstrap5',
            locale: 'es',
            // timeZone: 'local',
            aspectRatio: 1.75,
            events: function(fetchInfo, successCallback, failureCallback) {
                fetch('/cumples')
                    .then(response => response.json())
                    .then(data => {
                        successCallback(data);
                        // console.log(data)
                    })
                    .catch(error => {
                        failureCallback(error);
                    });
            },
            eventDidMount: function(info) {
                info.el.setAttribute("data-bs-toggle", "tooltip");
                info.el.setAttribute("title", "");
                info.el.setAttribute("data-bs-original-title", `Cumpleaños de ${info.event.title}`);
                const tooltip = new bootstrap.Tooltip(info.el);
            },
            buttonText: {
                today:    'hoy',
                month:    'mes',
                week:     'semana',
                day:      'día',
                list:     'lista'
            },
            validRange: {
                start: new Date().getFullYear()+'-01-01',
                end: new Date().getFullYear()+'-12-31'
            }
        });
        calendar.render();
      });

    </script>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col text-center">
            <img src="{{ asset('img/logo.png') }}" alt="Logo SekaiSchool" class="img-fluid">
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <h1>Comunidad y base de datos de <br>Project SEKAI: COLORFUL STAGE!</h1>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <div class="row row-cols-1 row-cols-md-3">
        @foreach ($cartas as $carta)
        <div class="col text-center my-2">
            <img src="{{ asset($carta->idolized) }}" alt="{{ $carta->nombre }}" class="img-fluid carta">
        </div>
        @endforeach
    </div>
    <br>
    <hr>
    <br>
    <div class="row">
        <div class="col mx-5 presentacion p-3">
            <p>
                Project SEKAI es un videojuego de ritmo desarrollado por SEGA, Craft Egg, Colorful Palette y Crypton Future Media.
                La versión japonesa salió el 30 de septiembre de 2020 y, la global, el 7 de diciembre de 2021.
            </p>
            <p class="text-center">
                ¡Conoce a los personajes en la página de <a href="{{ route('pages.personajes') }}">Personajes</a>!
            </p>
            <p>
                Situado en Japón, Project SEKAI reúne a los populares VOCALOID (llamados Virtual Singers) como Miku Hatsune
                y a los personajes originales del juego. Existen unos mundos alternativos llamados SEKAI creados a partir
                de los verdaderos sentimientos de los personajes. De esta forma, los personajes deben encontrar sus sentimientos
                con la ayuda de los Virtual Singers, quienes cantarán con ellos.
            </p>
            <p class="text-center">
                ¡Descubre los distintos grupos existentes en la pestaña de <a href="{{ route('pages.grupos') }}">Grupos</a>!
            </p>
            <p>
                El juego cuenta con un sistema de gacha que permite a los usuarios coleccionar cartas
                que conseguirán con cierta probabilidad al usar cristales.
            </p>
            <p class="text-center">
                <a href="{{ route('pages.cartas') }}">Base de datos de cartas</a> | <a href="{{ route('pages.gacha') }}">Simulador Gacha</a>
            </p>
            @if (!auth()->check())
            <p class="text-center">
                <strong>
                    ¡<a href="{{ route('login') }}">Regístrate o inicia sesión</a> para acceder a la comunidad y conectar con otros usuarios,
                    personalizar tu perfil y guardar tus cartas favoritas!
                </strong>
            </p>
            @endif
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <img src="{{ asset('img/inicio.png') }}" alt="Inicio" class="img-fluid img-inicio">
                    </div>
                    <div class="col">
                        <img src="{{ asset('img/gameplay.jpg') }}" alt="Gameplay" class="img-fluid img-inicio">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <div class="row">
        <div class="col text-center">
            <h1>Calendario de cumpleaños</h1>
        </div>
    </div>
</div>
<div id="calendar"></div>
@endsection
