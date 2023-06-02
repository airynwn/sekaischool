@extends('admin.index')
@section('content')
    <h1>Lista de Trivias</h1>
    <br>
    @include('admin.table', [
        'columnas' => [
            'dato', 'pj_id'
        ],
        'datos' => $trivias,
    ])
@endsection
