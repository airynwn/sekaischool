@extends('layouts.guest')
@section('title')
    Lista de cartas ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/cartas.css') }}">
    <script type="text/javascript" src="{{ asset('js/cartas.js') }}"></script>
@endsection
{{-- Main --}}
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12" id="filter-nav">
        <form id="filter-wrapper">
            <h2>Opciones de búsqueda</h2>
            <div class="caja">
                <!-- Grupos -->
                <span class="opcion">Grupo</span>
                <div class="caja-content">
                    @foreach ($grupos as $grupo)
                        <span>{{ $grupo->nombre }}</span>
                    @endforeach
                </div>
            </div>
            <div class="caja">
                <!-- Rareza -->
                <span class="opcion">Rareza</span>
                <div class="caja-icons">
                    <span>
                        <picture>
                            <img src="img/icons/rainbow_star.png" alt="Estrella">
                        </picture>
                    </span>
                    <span>
                        <picture>
                            <img src="img/icons/rainbow_star.png" alt="Estrella">
                        </picture>
                    </span>
                    <span>
                        <picture>
                            <img src="img/icons/rainbow_star.png" alt="Estrella">
                        </picture>
                    </span>
                    <span>
                        <picture>
                            <img src="img/icons/rainbow_star.png" alt="Estrella">
                        </picture>
                    </span>
                    <span>
                        <picture>
                            <img src="img/icons/birthday.png" alt="Cumpleaños/Aniversario">
                        </picture>
                    </span>
                </div>
            </div>
            <div class="caja">
                <!-- Atributo -->
                <span class="opcion">Atributo</span>
                <div class="caja-icons">
                    <span>
                        <picture>
                            <img src="img/icons/cute.png" alt="Cute">
                        </picture>
                    </span>
                    <span>
                        <picture>
                            <img src="img/icons/mysterious.png" alt="Mysterious">
                        </picture>
                    </span>
                    <span>
                        <picture>
                            <img src="img/icons/cool.png" alt="Cool">
                        </picture>
                    </span>
                    <span>
                        <picture>
                            <img src="img/icons/happy.png" alt="Happy">
                        </picture>
                    </span>
                    <span>
                        <picture>
                            <img src="img/icons/pure.png" alt="Pure">
                        </picture>
                    </span>
                </div>
            </div>
            <div class="caja">
                {{-- TODO Botón que abre un modal Personaje --}}
                <a class="opcion" href="#modal-personajes">Personaje</a>
                <p>Aquí va el nombre del personaje seleccionado</p>
            </div>
            <div class="caja-icons">
                <button type="submit" class="buscar">
                    <span class="fa-stack">
                        <i class="fa-regular fa-circle fa-stack-2x"></i>
                        <i class="fa fa-magnifying-glass fa-stack-1x"></i>
                    </span>
                    Buscar
                </button>
            </div>
        </form>
    </div>
    <div class="col" id="cartas">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="row row-cols-sm-2 row-cols-1">
                @foreach ($cartas as $carta)
                    <div class="col">
                        <figure class="card-box">
                            <picture>
                                <img src="{{ asset($carta->unidolized) }}"
                                alt="{{ $carta->nombre }} Unidolized" class="img-fluid card">
                            </picture>
                            <picture>
                                <img src="{{ asset($carta->idolized) }}"
                                alt="{{ $carta->nombre }} Idolized" class="img-fluid card-idolized">
                            </picture>
                        </figure>
                        @if (auth()->check())
                            <div class="tabs">
                                <form onsubmit="anadirCarta(event)" class="tab form-coleccion">
                                    @csrf
                                    <input type="hidden" name="carta" value="{{ $carta->id }}">
                                    <input type="hidden" name="estado" value="coleccion">
                                    <button type="submit" class="vacio" id="hola">
                                        <i class="fa-solid fa-bookmark brillo"></i>
                                    </button>
                                </form>
                                <form onsubmit="anadirCarta(event)" class="tab form-deseo">
                                    @csrf
                                    <input type="hidden" name="carta" value="{{ $carta->id }}">
                                    <input type="hidden" name="estado" value="deseo">
                                    <button type="submit" class="vacio">
                                        <i class="fa-solid fa-star brillo"></i>
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
{{-- Modal Añadir Carta --}}
<div class="modal fade" id="anadirCartaModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header modal-dark">
            <h5 class="modal-title">Añadir carta</h5>
            <button type="button"  class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal-dark" id="anadir-body"></div>
        <div class="modal-footer modal-dark"></div>
      </div>
    </div>
  </div>
{{-- ------------------ --}}
@include('layouts.modal', ['personajes' => $tablafk])
@endsection
