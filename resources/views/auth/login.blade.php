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
    <div class="container mb-5">
        <div class="row g-5 my-auto justify-content-evenly">
            <div class="col-10 col-md-6">
                <form method="POST" action="{{ route('login') }}" id="login-box">
                    @csrf
                    <h3>Iniciar sesión</h3>
                    <hr>
                    <div class="campo">
                        <a class="text-white center" href="{{ route('register') }}">
                            ¿No tienes cuenta? ¡Regístrate aquí!
                        </a>
                    </div>
                    <hr>
                    <!-- Email Address -->
                    <div class="campo espacio">
                        <x-input-label for="email" :value="__('Correo electrónico')" class="mx-4" />
                        <x-text-input id="email" class="mx-3" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="campo">
                        <x-input-label for="password" :value="__('Contraseña')" class="mx-4" />
                        <x-text-input id="password" class="mx-3" type="password"
                            name="password" required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <hr>
                    <div class="campo">
                        <div class="d-flex justify-content-center espacio">
                            <button type="submit">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
