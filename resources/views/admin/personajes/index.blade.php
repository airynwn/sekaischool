@extends('admin.index')
@section('content')
    <h1>Personajes</h1>
    @include('admin.table', [
        'columnas' => [
            'nombre', 'historia', 'personalidad', 'imagen', 'comic',
            'chibi', 'icon', 'stamp', 'sticker', 'grupo_id'
        ],
        'datos' => $personajes,
    ])
@endsection
