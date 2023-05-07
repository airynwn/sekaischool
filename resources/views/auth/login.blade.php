@extends('layouts.guest')
@section('title')
    Iniciar sesión ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('content')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container">
        <div class="row g-5 my-auto justify-content-evenly">
            <div class="col-auto">
                <form method="POST" action="{{ route('login') }}" id="login-box">
                    @csrf
                    <h3>Iniciar sesión</h3>
                    <hr>
                    <!-- Email Address -->
                    <div class="campo">
                        <x-input-label for="email" :value="__('Correo electrónico')" />
                        <br>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="campo">
                        <x-input-label for="password" :value="__('Contraseña')" />
                        <br>
                        <x-text-input id="password" class="block mt-1 w-full" type="password"
                            name="password" required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="campo">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" name="remember">
                            <span>{{ __('Recuérdame') }}</span>
                        </label>
                    </div>
                    <div class="campo">
                        @if (Route::has('password.request'))
                            <a class="text-white" href="{{ route('password.request') }}">
                                {{ __('¿Has olvidado tu contraseña?') }}
                            </a>
                        @endif
                    </div>
                    <div class="campo">
                        <a class="text-white" href="{{ route('register') }}">
                            {{ __('¿No tienes cuenta? ¡Regístrate aquí!') }}
                        </a>
                    </div>
                    <div class="campo">
                        <button type="submit" class="button-form">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
