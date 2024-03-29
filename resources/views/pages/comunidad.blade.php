@extends('layouts.guest')
@section('title')
    Comunidad ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/comunidad.css') }}">
    <script type="text/javascript" src="{{ asset('js/comunidad.js') }}"></script>
@endsection
{{-- Main --}}
@section('content')
<div class="container-fluid">
    @if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif
@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
    <div class="row">
        <!-- *** COMUNIDAD *** -->
    <div class="col-lg-8 col-12 order-1">
        <div class="container-fluid contenedor">
            <div class="row alinear-altura">
                <div class="col">
                    <div class="container-fluid">
                        <div class="row caja">
                            <form onsubmit="enviarPost(event)">
                            @csrf
                            <div class="espacio"></div>
                            <div class="post-contenedor">
                                <div class="col-2 me-2">
                                    <picture>
                                        <img src="{{ asset('storage/'.auth()->user()->avatar) }}"
                                        alt="{{ auth()->user()->name . ' Avatar' }}" class="foro-avatar">
                                    </picture>
                                </div>
                                <div class="col post-box">
                                    <div>
                                        <p class="post post-info">
                                            <strong>Enviar post</strong>
                                        </p>
                                    </div>
                                    <textarea name="contenido" class="escribir-post" rows="1" placeholder="Escribe tu post aquí" required></textarea>
                                </div>
                            </div>
                            <div class="caja-icons">
                                <div></div>
                                <div>
                                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                    <button type="submit" class="vacio">
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  --}}
        <div class="container-fluid contenedor">
            <div class="row alinear-altura">
                <div class="tabs">
                    <button data-modo="reciente"
                        class="tab" id="tab-reciente"
                        onclick="mostrarPosts(event)">
                        Reciente
                    </button>
                    <button data-modo="popular"
                        class="tab" id="tab-popular"
                        onclick="mostrarPosts(event)">
                        Popular
                </button>
                </div>
                <div class="col">
                    <div class="container-fluid" id="post-container">
                        @include('pages.posts', ['posts' => $posts])
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col order-0 order-lg-2 contenedor">
        <h2>Clasificación de usuarios</h2>
        <div class="caja">
            <div class="espacio"></div>
            <ol>
                @foreach (\App\Models\User::ranking() as $user)
                <li>
                    {{ $user->name }}
                    <i class="fa-regular fa-heart"></i>
                    {{ $user->likes_totales }}
                </li>
                @endforeach
            </ol>
        </div>
        <div class="espacio"></div>
        <!--  -->
    </div>
</div>
</div>
{{-- Modal Enviar Post --}}
<div class="modal fade" id="enviarPostModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header modal-dark">
            <h5 class="modal-title" id="titulo"></h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal-dark" id="mensaje"></div>
        <div class="modal-footer modal-dark"></div>
      </div>
    </div>
  </div>
{{-- ------------------ --}}
{{-- Modal Eliminar Post --}}
<div class="modal fade" id="eliminarPostModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header modal-dark">
            <h5 class="modal-title">Eliminar post</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal-dark">¿Estás seguro de que deseas eliminar este post?</div>
        <div class="modal-footer modal-dark">
            <form onsubmit="eliminarPost(event)">
                @csrf
                @method('DELETE')
                <input type="hidden" name="post_id" id="hidden-post-id">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    No, volver
                </button>
                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">
                    Sí, estoy seguro
                </button>
            </form>
        </div>
      </div>
    </div>
  </div>
{{-- ------------------ --}}
@endsection
