@extends('layouts.guest')
@section('title')
    Lista de cartas ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/cartas.css') }}">
    <script type="text/javascript" src="{{ asset('js/cartas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sekaischool.js') }}"></script>
@endsection
{{-- Main --}}
@section('content')
@if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif
@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12" id="filter-nav">
        <form id="filter-wrapper" onsubmit="buscarCartas(event)">
            @csrf
            <h2>Opciones de búsqueda</h2>
            <div class="caja">
                <!-- Grupos -->
                <span class="opcion">Grupo</span>
                <div class="caja-content">
                    @foreach ($grupos as $grupo)
                        <span data-id="{{ $grupo->id }}"  class="select-grupos"
                            onclick="seleccionar(this)">
                            {{ $grupo->nombre }}
                        </span>
                    @endforeach
                </div>
            </div>
            <div class="caja">
                <!-- Rareza -->
                <span class="opcion">Rareza</span>
                <div class="caja-icons d-flex flex-column">
                    <span>
                        <picture>
                            <img src="img/icons/1_star.png" alt="Estrella"
                            data-id="1" onclick="seleccionar(this)" class="select-rareza rareza">
                        </picture>
                    </span>
                    <span>
                        <picture>
                            <img src="img/icons/2_star.png" alt="Estrella"
                            data-id="2" onclick="seleccionar(this)" class="select-rareza rareza">
                        </picture>
                    </span>
                    <span>
                        <picture>
                            <img src="img/icons/3_star.png" alt="Estrella"
                            data-id="3" onclick="seleccionar(this)" class="select-rareza rareza">
                        </picture>
                    </span>
                    <span>
                        <picture>
                            <img src="img/icons/4_star.png" alt="Estrella"
                            data-id="4" onclick="seleccionar(this)" class="select-rareza rareza">
                        </picture>
                    </span>
                    <span>
                        <picture>
                            <img src="img/icons/5_star.png" alt="Cumpleaños/Aniversario"
                            data-id="5" onclick="seleccionar(this)" class="select-rareza rareza">
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
                            <img src="img/icons/cute.png" alt="Cute" class="select-atributos"
                            data-id="cute" onclick="seleccionar(this)">
                        </picture>
                    </span>
                    <span>
                        <picture>
                            <img src="img/icons/mysterious.png" alt="Mysterious" class="select-atributos"
                            data-id="mysterious" onclick="seleccionar(this)">
                        </picture>
                    </span>
                    <span>
                        <picture>
                            <img src="img/icons/cool.png" alt="Cool" class="select-atributos"
                            data-id="cool" onclick="seleccionar(this)">
                        </picture>
                    </span>
                    <span>
                        <picture>
                            <img src="img/icons/happy.png" alt="Happy" class="select-atributos"
                            data-id="happy" onclick="seleccionar(this)">
                        </picture>
                    </span>
                    <span>
                        <picture>
                            <img src="img/icons/pure.png" alt="Pure" class="select-atributos"
                            data-id="pure" onclick="seleccionar(this)">
                        </picture>
                    </span>
                </div>
            </div>
            <a class="opcion opcion-redondeado" href="#modal-personajes">Personaje</a>
            <div class="caja-icons">
                <button type="submit" class="buscar">
                    <span class="fa-stack">
                        <i class="fa-regular fa-circle fa-stack-2x"></i>
                        <i class="fa fa-magnifying-glass fa-stack-1x"></i>
                    </span>
                    Buscar
                </button>
            </div>
            <div class="caja-icons">
                <button type="reset" class="buscar" onclick="limpiarFiltros(event)">
                <span class="fa-stack">
                    <i class="fa-regular fa-circle fa-stack-2x"></i>
                    <i class="fa-solid fa-filter-circle-xmark fa-stack-1x"></i>
                </span>
                Limpiar filtros
                </button>
            </div>
        </form>
    </div>
    <div class="col" id="cartas">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="container" id="cartas-container">
                @include('pages.listaCartas', ['cartas' => $cartas])
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
