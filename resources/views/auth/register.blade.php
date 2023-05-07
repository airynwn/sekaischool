@extends('layouts.guest')
@section('title')
    Registro ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row g-5 my-auto justify-content-evenly">
    <div class="col-auto" id="registro-box">
        <h3>Registro</h3>
        <hr>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="campo">
            <x-input-label for="name" :value="__('Nombre de usuario')" />
            <br>
            <x-text-input id="name" type="text" name="name"
                :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="campo">
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <br>
            <x-text-input id="email" type="email" name="email"
                :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="campo">
            <x-input-label for="password" :value="__('Contraseña')" />
<br>
            <x-text-input id="password" type="password" name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="campo">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />
            <br>

            <x-text-input id="password_confirmation" type="password" name="password_confirmation"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="campo">
            <a class="text-white" href="{{ route('login') }}">
                {{ __('¿Ya estás registrado?') }}
            </a>
        </div>
        <div class="campo">
            <button type="submit" class="button-form">Registrarse</button>
        </div>
    </form>
@endsection
