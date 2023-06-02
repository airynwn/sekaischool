@extends('admin.index')
@section('content')
    <h1>Crear trivia</h1>
    @include('admin.form', [
        'columnas' => [
            'dato', 'pj_id'
        ],
    ])
@endsection
