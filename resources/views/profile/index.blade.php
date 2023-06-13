@extends('layouts.guest')
@section('title')
    Perfil ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
    <script type="text/javascript" src="{{ asset('js/perfil.js') }}"></script>
@endsection
{{-- Main --}}
@section('content')
{{--  --}}
<div class="container px-0 contenedor glassmorphism mx-auto">
    <div class="row gx-0">
        <div class="col-lg-3 col-md-6 d-flex justify-content-center d-md-block col-avatar">
            <picture class="avatar-bg" style="background-image: url({{asset('storage/'.$user->avatar)}});">
                {{-- <img src="{{ asset('storage/'.$user->avatar) }}"
                alt="{{ 'Avatar de ' . $user->name }}"> --}}
            </picture>
        </div>
            <!--  -->
        <div class="col px-3">
            <h2>Perfil de {{ $user->name }}</h2>
            <!-- flex de media object bootstrap para colocar texto bio + chibi -->
            <div class="caja d-flex" style="flex-direction: initial;">
                <div class="caja-content flex-grow-1 ms-3">
                    <p class="bio">
                        {{ $user->biografia ?? $user->name . ' todavía no ha escrito una biografía.'}}
                    </p>
                </div>
                <!-- chibi de personaje favorito -->
                @if (isset($user->pj_fav))
                    <div class="flex-shrink-0 align-self-end align-self-center">
                        <picture>
                            <img src="{{ asset($user->pj_fav->chibi) }}" class="img-fluid"
                            alt="{{ $user->pj_fav->nombre . 'Chibi' }}">
                        </picture>
                    </div>
                @endif
            </div>

            <div class="botones">
                <div class="espacio">
                    @if (isset($user->cumple))
                    <button id="cumple"><i class="fa-solid fa-cake-candles"></i> {{ Carbon\Carbon::parse($user->cumple)->format('d/m/Y') }}</button>
                    @endif
                    <button id="grupo" data-color="{{ $user->grupo_fav->nombre ?? 'generico' }}">
                        {{ $user->grupo_fav->nombre ?? 'Grupo favorito' }}
                    </button>
                </div>
                <div class="espacio">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-brands fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                    <span>
                        <a href="https://twitter.com/airynwn" target="_blank">
                            {{ $user->twitter ?? 'Twitter' }}
                        </a>
                    </span>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-brands fa-discord fa-stack-1x fa-inverse"></i>
                    </span>
                    <span>
                        <a href="https://discord.com" target="_blank">
                        {{ $user->discord ?? 'Discord' }}
                        </a>
                    </span>
                </div>
                <div class="espacio">
                    @if ($user->id === auth()->user()->id)
                    <button class="editar-perfil"
                    onclick="location.href='{{ route('profile.edit') }}'">
                        Editar perfil
                    </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif
@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<div class="container-fluid">
    <div class="row">
        <div class="col contenedor contenedor-padding">
            <span class="tab">Publicaciones</span>
            <div id="post-container">
            @foreach ($user->posts()->orderBy('created_at', 'desc')->limit(10)->get() as $post)
            <div class="caja espacio">
                <span class="titulo">{{ $post->tiempo() }}</span>
                <div class="caja-content">
                    <span>{{ $post->contenido }}</span>
                </div>
            </div>
            @endforeach
            </div>
        </div>
        <!--  -->
        <div class="col-12 col-md-9 order-1 order-sm-last order-md-last contenedor contenedor-padding col-cartas">
            <div class="container-fluid">
                <div class="row">
                    <div class="col tabs">
                        <button class="tab" data-modo="coleccion" data-user="{{ $user->name }}"
                        onclick="mostrarCartas(event)">
                            Lista de cartas
                        </button>
                    </div>
                    <div class="col tabs">
                        <button class="tab" data-modo="deseo" data-user="{{ $user->name }}"
                        onclick="mostrarCartas(event)">
                            Lista de deseos
                        </button>
                    </div>
                </div>
                <div class="espacio"></div>
                @if (!$user->cartas->isEmpty())
                <div class="row row-cols-3 row-cols-md-4 row-cols-lg-5 g-3" id="cartas-container">
                    @include('profile.inventario', ['cartas'  => $cartas])
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
{{--  --}}
{{-- Modal Eliminar Carta --}}
<div class="modal fade" id="eliminarCartaModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header modal-dark">
            <h5 class="modal-title">Eliminar carta</h5>
            <button type="button"  class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal-dark" id="eliminar-body"></div>
        <div class="modal-footer modal-dark"></div>
      </div>
    </div>
  </div>
{{-- ------------------ --}}
@include('layouts.modal', ['personajes' => $personajes])
@endsection
