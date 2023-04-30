@extends('admin.index')
@section('content')
    <h1>Modificar personaje</h1>
    @include('admin.form.edit', [
        'columnas' => [
            'nombre', 'historia', 'personalidad', 'imagen', 'comic',
            'chibi', 'icon', 'stamp', 'sticker', 'grupo_id'
        ],
    ])
@endsection
