@extends('layouts.guest')
@section('title')
    Editar perfil ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
    <script type="text/javascript" src="{{ asset('js/sekaischool.js') }}" defer></script>
@endsection
{{-- Main --}}
@section('content')
{{-- @include('profile.index') --}}
<div class="container">
    <form action="{{ route('profile.update') }}" method="POST">
        @method('patch')
        @csrf
        <div class="row">
            <div class="col">
                <label for="biografia">Biografía</label>
                <textarea class="form-control" name="biografia" rows="3">{{ auth()->user()->biografia }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="discord">Discord</label>
                <input type="text" name="discord" class="form-control"
                value="{{ auth()->user()->discord }}">
            </div>
            <div class="col">
                <label for="twitter">Twitter</label>
                <input type="text" name="twitter" class="form-control"
                value="{{ auth()->user()->twitter }}">
            </div>
        </div>
        {{-- <div class="row espacio">
            <div class="col">
                <a class="opcion opcion-redondeado" href="#modal-personajes">Personaje</a>
                <img src="{{ auth()->user()->pj_fav->chibi ?? '' }}"
                alt="{{ auth()->user()->name . ' Personaje Fav' }}">
            </div>
            {{-- aquilo s grpos --}}
            {{-- TODO details? --}}
            <div class="col">
                <a class="opcion opcion-redondeado" href="#modal-personajes">Grupo</a>
                <img src="{{ auth()->user()->grupo_fav->imagen ?? '' }}"
                alt="{{ auth()->user()->name . ' Grupo Fav' }}">
            </div>
        </div> --}}
        {{-- TESTESTEST --}}
        <div class="row espacio">
            <div class="col">
                <details>
                    <summary>Personajes</summary>
                    <div class="details-flex">
                    </div>
                    <div class="container caja-content">
                        <div class="row row-cols-3 row-cols-md-5 row-cols-lg-6 g-3">
                            @foreach ($personajes as $pj)
                                <div class="col">
                                    <label>
                                        <input type="radio" name="pj_fav_id" value="{{ $pj->id }}"
                                        {{ $pj->id == auth()->user()->pj_fav_id ? 'checked' : '' }}
                                        {{-- TODO estilar radio --}}
                                        {{-- style="appearance: none;" --}}
                                        >
                                        <img src="{{ asset($pj->chibi) }}" alt="Chibi {{ $pj->nombre }}"
                                        class="img-fluid"
                                        {{-- TODO funcion que solo permita 1 selected --}}
                                        {{-- onclick="seleccionarUnico(this)" --}}
                                        >
                                    </label>
                                </div>
                          @endforeach
                        </div>
                    </div>
                </details>
            </div>
        </div>
        {{-- TESTESTEST --}}
        <div class="row espacio">
            <div class="col">
                <details>
                    <summary>Grupo</summary>
                    <div class="details-flex">
                    </div>
                    <div class="container caja-content">
                        <div class="row row-cols-3 row-cols-md-5 row-cols-lg-6 g-3">
                            @foreach ($grupos as $grupo)
                                <div class="col">
                                    <label>
                                        <input type="radio" name="grupo_fav_id" value="{{ $grupo->id }}"
                                        {{ $grupo->id == auth()->user()->grupo_fav_id ? 'checked' : '' }}
                                        {{-- TODO estilar radio --}}
                                        {{-- style="appearance: none;" --}}
                                        >
                                        <img src="{{ asset($grupo->imagen) }}" alt="Imagen {{ $grupo->nombre }}"
                                        class="img-fluid"
                                        {{-- TODO funcion que solo permita 1 selected --}}
                                        {{-- onclick="seleccionarUnico(this)" --}}
                                        >
                                    </label>
                                </div>
                          @endforeach
                        </div>
                    </div>
                </details>
            </div>
        </div>
        {{--  --}}
        <div class="row espacio">
            <div class="col">
                <button type="submit">Enviar</button>
            </div>
        </div>
    </form>
</div>
{{-- TODO email + password
<div>
    @include('profile.partials.update-profile-information-form')
</div>
<div>
    @include('profile.partials.update-password-form')
</div> --}}
@include('layouts.modal', ['personajes' => $personajes])
@endsection
