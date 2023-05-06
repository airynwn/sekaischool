@extends('admin.index')
@section('content')
    <h1>Lista de Personajes</h1>
    <br>
    @include('admin.table', [
        'columnas' => [
            'nombre', 'historia', 'personalidad', 'imagen', 'comic',
            'chibi', 'icon', 'stamp', 'sticker', 'grupo_id'
        ],
        'datos' => $personajes,
    ])
@endsection
