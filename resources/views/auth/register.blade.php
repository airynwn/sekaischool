@extends('layouts.guest')
@section('title')
    Registro ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script type="text/javascript" src="{{ asset('js/validaciones.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/sekaischool.js') }}"></script>
@endsection
@section('content')
<form method="POST" action="{{ route('register') }}" onsubmit="validarRegistro(event)">
@csrf
<div class="container my-5">
    <details open>
        <summary>Registro</summary>
        <div class="row">
            <div class="col">
            {{-- ---------- DATOS DE LA CUENTA ---------- --}}
                <h3>Datos de la cuenta</h3>
                <hr>
                <div class="campo espacio">
                    <label for="name" class="mx-4">Nombre de usuario</label>
                    <input type="text" name="name" id="name" class="mx-3">
                    <p class="error" id="name-error">
                        El nombre de usuario sólo puede incluir letras y tener hasta 16 caracteres
                    </p>
                </div>
                {{--  --}}
                <div class="campo espacio">
                    <label for="email" class="mx-4">Correo electrónico</label>
                    <input type="text" name="email" id="email" class="mx-3">
                    <p class="error" id="email-error">
                        Debes introducir un formato email válido: ejemplo@dominio.com
                    </p>
                </div>
                {{--  --}}
                <div class="campo espacio">
                    <div class="d-flex">
                        <label for="password" class="mx-4">Contraseña</label>
                        <i class="fa-solid fa-eye d-flex align-items-center"
                        onclick="ver()"></i>
                    </div>
                    <input type="password" name="password" id="password" class="mx-3">
                    <p class="error" id="password-error">
                        La contraseña debe tener al menos 8 caracteres, una letra y un número
                    </p>
                </div>
                {{--  --}}
                <div class="campo espacio">
                    <label for="password_confirmation" class="mx-4">Confirmar contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="mx-3">
                    <p class="error" id="password_confirmation-error">
                        Las contraseñas deben ser iguales
                    </p>
                </div>
            </div>
            <div class="col">
            {{-- ---------- DATOS PERSONALES ---------- --}}
                <h3>Datos personales</h3>
                <hr>
                <div class="campo espacio">
                    <label for="discord" class="mx-4">Discord</label>
                    <input type="text" name="discord" id="dc" class="mx-3" placeholder="User#1234">
                    <p class="error" id="dc-error">
                        El usuario de Discord debe ser mayor a 2 y menor a 32 caracteres e ir seguido de una almohadilla y 4 números
                    </p>
                </div>
                {{--  --}}
                <div class="campo espacio">
                    <label for="twitter" class="mx-4">Twitter</label>
                    <input type="text" name="twitter" id="tw" class="mx-3" placeholder="@user">
                    <p class="error" id="tw-error">
                        El usuario de Twitter sólo puede incluir letras, números y guión bajo hasta 15 caracteres y debe empezar por @
                    </p>
                </div>
                {{--  --}}
                <div class="campo espacio">
                    <label for="cumple" class="mx-4">Fecha de cumpleaños</label>
                    <small class="mx-4">(opcional) Se mostrará en tu perfil y no podrás cambiarla. Debe ser una fecha válida anterior a hoy.</small>
                    <input type="date" name="cumple" id="cumple" class="mx-3" onchange="validarFecha()">
                    <p class="error" id="cumple-error">
                        Debes introducir una fecha válida.
                    </p>
                </div>
                {{--  --}}
                <div class="campo espacio">
                    <label for="name" class="mx-4">Biografía</label>
                    <textarea name="biografia" rows="5" id="bio" class="mx-3"></textarea>
                    <p class="error" id="bio-error">
                        La biografía no puede exceder los 200 caracteres
                    </p>
                </div>
            </div>
        </div>
        <div class="espacio"></div>
        <div class="row">
            <div class="col details-flex">
                <h3>Personalizar perfil</h3>
                <small>Puedes cambiar tu elección más adelante</small>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <details>
                    <summary>Elige tu personaje favorito</summary>
                    <div class="details-flex"></div>
                    <div class="container caja-content">
                        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-3 justify-content-center">
                            <div class="col">
                                <label>
                                    <input type="radio" name="pj_fav_id" value="">
                                    <span>Ninguno</span>
                                </label>
                            </div>
                            @foreach ($personajes as $pj)
                                <div class="col">
                                    <label>
                                        <input type="radio" name="pj_fav_id" value="{{ $pj->id }}">
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
                    <summary>Elige tu grupo favorito</summary>
                    <div class="details-flex">
                    </div>
                    <div class="container caja-content">
                        <div class="row row-cols-2 row-cols-md-5 g-3 justify-content-center">
                            <div class="col">
                                <label>
                                    <input type="radio" name="grupo_fav_id" value="">
                                    <span>Ninguno</span>
                                </label>
                            </div>
                            @foreach ($grupos as $grupo)
                                <div class="col">
                                    <label>
                                        <input type="radio" name="grupo_fav_id" value="{{ $grupo->id }}">
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
        <div class="row">
            {{--  --}}
            <div class="campo espacio">
                <a class="text-white text-center" href="{{ route('login') }}">
                    ¿Ya estás registrado?
                </a>
            </div>
            <div class="d-flex justify-content-center espacio">
                <button type="submit">Registrarse</button>
            </div>
        </div>
        </details>
    </div>
</form>

{{-- <div class="container">
    <div class="row g-5 my-auto justify-content-evenly">
        <div class="col-auto" id="registro-box">

            <div class="campo">
                <a class="text-white" href="{{ route('login') }}">
                    {{ __('¿Ya estás registrado?') }}
            </a>
        </div>
        <div class="campo">
            <button type="submit" class="button-form">Registrarse</button>
        </div>
    </form> --}}
@endsection
