@extends('layouts.guest')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
          timeZone: 'local',
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
        buttonText: {
            today:    'hoy',
            month:    'mes',
            week:     'semana',
            day:      'día',
            list:     'lista'
        },
        validRange: {
            start: '2023-01-01',
            end: '2023-12-31'
        }
        });
        calendar.render();
      });

    </script>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div x-data="{ events: [] }"
                x-init="events = await (await fetch('/cumples')).json()">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</div>

@endsection
