@extends('layouts.guest')
@section('title')
    Login ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('content')
<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />
<div class="container">
    <!-- margen vertical, gutter y separación uniforme -->
    <div class="row g-5 my-auto justify-content-evenly">
        <div class="col-auto">
            <form method="POST" action="{{ route('login') }}" id="login-box">
                @csrf
            <h3>Iniciar sesión</h3>
            <hr>
                <div class="campo">
                    <x-input-label for="email" :value="__('Correo electrónico')" />
                    <br>
                    <x-text-input id="email" type="email" name="email" :value="old('email')"
                                    required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="campo">
                    <x-input-label for="password" :value="__('Contraseña')" />
                    <br>
                    <x-text-input id="password" type="password" name="password"
                                    required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <!-- Remember Me -->
                <div class="campo">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" name="remember">
                        <span>{{ __('Recuérdame') }}</span>
                    </label>
                </div>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('¿Has olvidado tu contraseña?') }}
                        </a>
                    @endif
                </div>
                <br>
                <button type="submit" class="button-form">Entrar</button>
            </form>
            <figure id="figure-box">
                <picture>
                    <img src="{{ asset('img/personajes/chibi-ichika.png') }}" alt="chibi" id="chibi-login">
                </picture>
            </figure>
        </div>
        <div class="col-auto" id="registro-box">
            <h3>Registro</h3>
            <hr>
            <form method="POST" action="{{ route('register') }}">
                <div class="campo">
                    <x-input-label for="usuario" :value="__('Usuario')" />
                    <br>
                    <x-text-input id="name" type="text" name="usuario" :value="old('usuario')"
                                    required autofocus autocomplete="usuario" />
                    <x-input-error :messages="$errors->get('usuario')" class="mt-2" />
                </div>
                <div class="campo">
                    <x-input-label for="password" :value="__('Contraseña')" />
                    <br>
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="campo">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <br>
                    <x-text-input id="password_confirmation" type="password" name="password_confirmation"
                                    required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="campo">
                    <x-input-label for="email" :value="__('Correo electrónico')" />
                    <br>
                    <x-text-input id="email" type="email" name="email" :value="old('email')"
                                    required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <br>
                <button type="submit" class="button-form">Registrarse</button>
            </form>
        </div>
    </div>
</div>
@endsection
