@extends('layouts.guest')
@section('title')
    Editar perfil ♪ SekaiSchool
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
    <script type="text/javascript" src="{{ asset('js/editarPerfil.js') }}" defer></script>
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
@endsection
