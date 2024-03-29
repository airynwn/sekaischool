@php
    $grupos = \App\Models\Grupo::all();
@endphp
<nav class="navbar navbar-expand-lg navbar-dark header">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <picture>
                <img id="logo" class="brillo" src={{  asset('img/logotipo.svg') }} alt="Logo SekaiSchool">
            </picture>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
                @if (auth()->check() && auth()->user()->admin)
                    <li class="nav-item">
                        <a class="nav-link active brillo" href="{{ route('admin.index' )}}">Admin</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link active brillo" href="{{ route('index') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active brillo" href="{{ route('pages.cartas') }}">Cartas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active brillo" href="{{ route('pages.personajes') }}">Personajes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active brillo" href="{{ route('pages.comunidad') }}">Comunidad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active brillo" href="{{ route('pages.grupos') }}">Grupos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active brillo" href="{{ route('pages.gacha') }}">Gacha</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active brillo" href="{{ route('pages.canciones') }}">Adivinar canciones</a>
                </li>
            </ul>
            @if (auth()->check())
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle brillo" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end header">
                        <li><a class="dropdown-item" href="{{ route('profile.index') }}">Perfil</a></li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">Cerrar sesión</a></li>
                        </form>
                    </ul>
                </li>
            </ul>
            @else
            <span class="navbar-text">
                <a href="{{ route('login') }}" class="login brillo">Iniciar sesión</a>
            </span>
            @endif
        </div>
    </div>
</nav>
