@extends('layouts.guest')
@section('title')
    Grupos ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/grupo.css') }}">
    <script type="text/javascript" src="{{ asset('js/sekaischool.js') }}"></script>
@endsection
{{-- Main --}}
@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <img src="{{ asset($grupo->logo) }}" alt="Logo {{ $grupo->nombre }}" class="img-fluid" width="150">
    </div>
  </div>
  <div class="row">
  <!--  -->
    <div class="col-12 col-md-6">
      <img src="{{ asset($grupo->imagen) }}" alt="Imagen {{ $grupo->nombre }}" class="img-fluid" width="75%">
    </div>
  <!--  -->
    <div class="col order-last order-md-first order-lg-first align-self-center">
    <!--  -->
      <div class="panel espacio">
        <span class="titulo">Miembros</span>
        <div class="panel-content">
          @foreach ($grupo->personajes()->get() as $pj)
          <span data-color="{{ strtolower(explode(' ', $pj->nombre)[0]) }}">{{ $pj->nombre }}</span>
          @endforeach
        </div>
      </div>
    </div>
  <!--  -->
    <div class="col align-self-center">
      <div class="panel espacio">
        <span class="titulo">Virtual Singers</span>
        <div class="panel-content">
          <span data-color="miku">Miku Hatsune</span>
          <span data-color="rin">Rin Kagamine</span>
          <span data-color="len">Len Kagamine</span>
          <span data-color="luka">Luka Megurine</span>
          <span data-color="meiko">MEIKO</span>
          <span data-color="kaito">KAITO</span>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="panel espacio">
        <h2>Historia</h2>
        <div class="panel-content">
          {{-- antes caja-content --}}
          <p>{{ $grupo->historia }}</p>
      </div>
    </div>
  </div>
  </div>
  <div class="row row-cols-2 row-cols-md-4 espacio">
    @foreach ($grupo->personajes()->get() as $pj)
    <div class="col center">
      <figure>
        <picture>
          <img src="{{ asset($pj->sticker) }}" alt="{{ $pj->nombre }} Sticker">
        </picture>
      </figure>
    </div>
    @endforeach
  </div>
</div>
@endsection
