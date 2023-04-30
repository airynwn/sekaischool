@extends('admin.index')
@section('content')
    <h1>Crear personaje</h1>
    @include('admin.form', [
        'columnas' => [
            'nombre', 'historia', 'personalidad', 'imagen', 'comic',
            'chibi', 'icon', 'stamp', 'sticker', 'grupo_id'
        ],
    ])
@endsection
