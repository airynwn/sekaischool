@extends('layouts.guest')
@section('title')
    Editar perfil ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/editperfil.css') }}">
    <script type="text/javascript" src="{{ asset('js/sekaischool.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/editperfil.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/validaciones.js') }}" defer></script>
@endsection
{{-- Main --}}
@section('content')
{{-- @include('profile.index') --}}
<div class="container my-5">
    <div class="row">
        <div class="col d-flex justify-content-center espacio">
            <a
            class="text-white" onclick="abrirPDF()">Descargar PDF del perfil</a>
        </div>
    </div>
    <form
    action="{{ route('profile.update') }}"
    method="POST"
    onsubmit="validarEditarPerfil(event)"
    enctype="multipart/form-data"
    >
        @method('patch')
        @csrf
        <div class="row">
            <div class="col">
                <details open>
                    <summary>Avatar</summary>
                    <div class="details-flex"></div>
                    <p>Debe pesar menos de 1MB. En caso contrario, se mantendrá el avatar actual.</p>
                    <input type="file" name="avatar" id="avatar" onchange="previsualizar(event)">
                    <br>
                    <img src="" alt="" id="previsualizar-avatar">
                </details>
            </div>
        </div>
        <div class="espacio"></div>
        <div class="row">
            <div class="col">
                <details open>
                    <summary>Biografía</summary>
                    <div class="details-flex"></div>
                    <textarea name="biografia" rows="3" id="bio">{{ auth()->user()->biografia }}</textarea>
                    <p class="error" id="bio-error">
                        La biografía no puede exceder los 200 caracteres
                    </p>
                </details>
            </div>
        </div>
        <div class="espacio"></div>
        <div class="row">
            <div class="col">
                <details open>
                    <summary>Discord</summary>
                    <div class="details-flex"></div>
                    <input type="text" name="discord" id="dc" placeholder="User#1234"
                    value="{{ auth()->user()->discord }}">
                    <p class="error" id="dc-error">
                        El usuario de Discord debe ser mayor a 2 y menor a 32 caracteres e ir seguido de una almohadilla y 4 números
                    </p>
                </details>
            </div>
        </div>
        <div class="espacio"></div>
        <div class="row">
            <div class="col">
                <details open>
                    <summary>Twitter</summary>
                    <div class="details-flex"></div>
                    <input type="text" name="twitter" id="tw" placeholder="@user"
                    value="{{ auth()->user()->twitter }}">
                    <p class="error" id="tw-error">
                        El usuario de Twitter sólo puede incluir letras, números y guión bajo hasta 15 caracteres y debe empezar por @
                    </p>
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
                            <div class="col">
                                <label>
                                    <input type="radio" name="pj_fav_id" value="">
                                    <span>Ninguno</span>
                                </label>
                            </div>
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
                            <div class="col">
                                <label>
                                    <input type="radio" name="grupo_fav_id" value="">
                                    <span>Ninguno</span>
                                </label>
                            </div>
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
    <div class="espacio"></div>
    <hr>
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div class="row">
            <div class="col">
                <details open>
                    <summary>Contraseña</summary>
                    <div class="details-flex"></div>
                    <div>
                        <x-input-label for="current_password" :value="__('Contraseña actual')" />
                        <x-text-input id="current_password" name="current_password" type="password"
                        autocomplete="current-password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" />
                    </div>
                    <div>
                        <x-input-label for="password" :value="__('Nueva contraseña')" />
                        <x-text-input id="password" name="password" type="password"
                        autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password')" />
                    </div>
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />
                        <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                        autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />
                    </div>
                    <div class="col d-flex justify-content-center espacio">
                        <button type="submit">Cambiar contraseña</button>
                    </div>
                    <div class="col d-flex justify-content-center espacio">
                        @if (session('status') === 'password-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600 dark:text-gray-400"
                            >{{ __('Se han guardado los cambios.') }}</p>
                        @endif
                    </div>
                </details>
            </div>
        </div>
        <div class="espacio"></div>
    </form>
</div>
@include('layouts.modal', ['personajes' => $personajes])
@endsection
