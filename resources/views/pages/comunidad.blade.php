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
    <div class="col-lg-3 col-sm-5 order-0 contenedor">
        <h2>Tendencias</h2>
        <div class="caja">
            <div class="espacio"></div>
            <ol>
                <li>Navidad</li>
                <li>Gacha</li>
                <li>Tier 1</li>
                <li>Aniversario</li>
                <li>Collab</li>
            </ol>
        </div>
        <div>
            <button type="submit" class="buscar">
                <span class="fa-stack">
                    <i class="fa-regular fa-circle fa-stack-2x"></i>
                    <i class="fa fa-magnifying-glass fa-stack-1x"></i>
                  </span>
                Buscar
            </button>
        </div>
    </div>
        <!-- *** COMUNIDAD *** -->
    <div class="col-lg-6 col-12 order-1">
        {{-- PRUEBA 1 PRIMERA CAJA --}}
        {{-- <div class="caja espacio">
            <span class="opcion">Escribir post</span>
            <div class="caja-content">
                <p>Escribe tu comentario aquí</p>
                <div class="caja-icons">
                    <div>
                        <i class="fa-solid fa-square-poll-vertical"></i>
                        <i class="fa-regular fa-file"></i>
                    </div>
                    <div>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa-solid fa-minimize"></i>
                    </div>
                </div>
            </div>

        </div> --}}
        {{-- prueba 2 como los posts --}}
        <div class="container-fluid contenedor">
            <div class="row alinear-altura">
                <div class="col">
                    <div class="container-fluid">
                        <div class="row caja">
                            <form onsubmit="enviarPost(event)">
                            @csrf
                            <!-- ? Comentario 1 -->
                            <div class="espacio"></div>
                            <!-- Avatar -->
                            <div class="post-contenedor">
                                <div class="col-2 me-2">
                                    <picture>
                                        <img src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->name . ' Avatar' }}" class="foro-avatar">
                                    </picture>
                                </div>
                                <div class="col post-box">
                                    <!-- @user, fecha -->
                                    <div>
                                        <p class="post post-info">
                                            <strong>Enviar post</strong>
                                        </p>
                                    </div>
                                    <!-- Contenido del post -->
                                    <textarea name="contenido" class="escribir-post" rows="1" placeholder="Escribe tu post aquí" required></textarea>
                                </div>
                            </div>
                            <!-- Iconos de interacción -->
                            <div class="caja-icons">
                                <div></div>
                                <div>
                                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                    <button type="submit" class="vacio">
                                        <i class="fa-solid fa-pen-to-square"></i>
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
                    <span class="tab">Reciente</span>
                    <span class="tab">Popular</span>
                </div>
                <div class="col">
                    <div class="container-fluid">
                        @foreach ($posts as $post)
                        <div class="row caja">
                            <!-- ? Comentario 1 -->
                            <div class="espacio"></div>
                            <!-- Avatar -->
                            <div class="post-contenedor">
                                <div class="col-2 me-2">
                                    <picture>
                                        <img src="{{ $post->user->avatar; }}" alt="{{ $post->user->name . ' Avatar' }}" class="foro-avatar">
                                    </picture>
                                </div>
                                <div class="col post-box">
                                    <!-- @user, fecha -->
                                    <div>
                                        <p class="post post-info">
                                            <strong>{{ '@' . $post->user->name }}</strong>, <span>{{ $post->tiempo() }}</span>
                                        </p>
                                    </div>
                                    <!-- Contenido del post -->
                                    <div>
                                        <p class="post">
                                            {{ $post->contenido }}
                                        </p>
                                    </div>
                                <!-- Iconos de interacción -->
                                    <div class="caja-icons">
                                        <!-- Compartir y comentar -->
                                        <div>
                                            <i class="fa-solid fa-share-nodes"></i>
                                        </div>
                                        <!-- Likes -->
                                        <div>
                                            <form onsubmit="valorarPost(event)"
                                            data-post-id="{{ $post->id }}">
                                            @csrf
                                                <button type="submit" class="vacio">
                                                    @if ($post->fans()->where('user_id',
                                                        auth()->user()->id)->exists())
                                                    <i class="fa-solid fa-heart"></i>
                                                    @else
                                                    <i class="fa-regular fa-heart"></i>
                                                    @endif
                                                    {{ $post->fans()->count() }}
                                                </button>
                                            </form>
                                        </div>
                                        {{-- Eliminar --}}
                                        @if ($post->user_id == auth()->user()->id)
                                        <form onsubmit="return confirm('test')"
                                        action="{{ route('pages.comunidad.delete', $post) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                &times;
                                            </button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="espacio"></div>
                        @endforeach
                        <!-- ? Comentario 1 -->

                    </div>
                </div>
                <div class="col-auto g-1 columna position-relative">
                    <i class="fa-regular fa-circle-up"></i>
                    <div class="abajo">
                      <i class="fa-regular fa-circle-down"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *** TEMAS Y ESCRIBIR POST *** -->
    <div class="col order-0 order-lg-2 contenedor">
        {{-- <div class="container">
            <div class="row">
                <div class="col-auto order-0 contenedor"> --}}
                    <h2>Clasificación de usuarios</h2>
                    <div class="caja">
                        <div class="espacio"></div>
                        <ol>
                            <li>Navidad</li>
                            <li>Gacha</li>
                            <li>Tier 1</li>
                            <li>Aniversario</li>
                            <li>Collab</li>
                        </ol>
                    </div>
                {{-- </div>
            </div>
        </div> --}}
        <div class="espacio"></div>
        <!--  -->
        {{-- <div class="caja order-last espacio">
            <span class="opcion">Escribir post</span>
            <div class="caja-content">
                <p>Escribe tu comentario aquí</p>
                <div class="caja-icons">
                    <div>
                        <i class="fa-solid fa-square-poll-vertical"></i>
                        <i class="fa-regular fa-file"></i>
                    </div>
                    <div>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa-solid fa-minimize"></i>
                    </div>
                </div>
            </div>
        </div> --}}
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
@endsection
