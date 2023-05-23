@extends('layouts.guest')
@section('title')
    Editar perfil ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/editperfil.css') }}">
    <script type="text/javascript" src="{{ asset('js/sekaischool.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/validaciones.js') }}" defer></script>
@endsection
{{-- Main --}}
@section('content')
{{-- @include('profile.index') --}}
<div class="container my-5">
    <form
    action="{{ route('profile.update') }}"
    method="POST"
    onsubmit="validarEditarPerfil(event)"
    >
        @method('patch')
        @csrf
        <div class="row">
            <div class="col">
                <details>
                    <summary>Biografía</summary>
                    <div class="details-flex"></div>
                    <textarea name="biografia" rows="3" id="bio">{{ auth()->user()->biografia }}</textarea>
                </details>
            </div>
        </div>
        <div class="espacio"></div>
        <div class="row">
            <div class="col">
                <details>
                    <summary>Discord</summary>
                    <div class="details-flex"></div>
                    <input type="text" name="discord" id="dc" placeholder="User#1234"
                    value="{{ auth()->user()->discord }}">
                </details>
            </div>
        </div>
        <div class="espacio"></div>
        <div class="row">
            <div class="col">
                <details>
                    <summary>Twitter</summary>
                    <div class="details-flex"></div>
                    <input type="text" name="twitter" id="tw" placeholder="@user"
                    value="{{ auth()->user()->twitter }}">
                </details>
            </div>
        </div>
        <div class="espacio"></div>
        <div class="row">
            <div class="col">
                <details>
                    <summary>Personajes</summary>
                    <div class="details-flex">
                    </div>
                    <div class="container caja-content">
                        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-3 justify-content-center">
                            @foreach ($personajes as $pj)
                                <div class="col">
                                    <label>
                                        <input type="radio" name="pj_fav_id" value="{{ $pj->id }}"
                                        {{ $pj->id == auth()->user()->pj_fav_id ? 'checked' : '' }}>
                                        <img src="{{ asset($pj->chibi) }}" alt="Chibi {{ $pj->nombre }}"
                                        class="img-fluid">
                                    </label>
                                </div>
                          @endforeach
                        </div>
                    </div>
                </details>
            </div>
        </div>
        <div class="espacio"></div>
        <div class="row">
            <div class="col">
                <details>
                    <summary>Grupo</summary>
                    <div class="details-flex">
                    </div>
                    <div class="container caja-content">
                        <div class="row row-cols-2 row-cols-md-5 g-3 justify-content-center">
                            @foreach ($grupos as $grupo)
                                <div class="col">
                                    <label>
                                        <input type="radio" name="grupo_fav_id" value="{{ $grupo->id }}"
                                        {{ $grupo->id == auth()->user()->grupo_fav_id ? 'checked' : '' }}>
                                        <img src="{{ asset($grupo->imagen) }}" alt="Imagen {{ $grupo->nombre }}"
                                        class="img-fluid">
                                    </label>
                                </div>
                          @endforeach
                        </div>
                    </div>
                </details>
            </div>
        </div>
        <div class="espacio"></div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <button type="submit">Editar perfil</button>
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
