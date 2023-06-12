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
                        console.log(data)
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
            <h1>SekaiSchool</h1>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <em>Comunidad y base de datos de Project Sekai</em>
        </div>
    </div>
</div>
<div id="calendar"></div>
@endsection
