@extends('admin.index')
@section('content')
    <h1>Cartas</h1>
    @include('admin.table', [
        'columnas' => [
            'rareza', 'atributo', 'imagen', 'pj_id'
        ],
        'datos' => $cartas,
    ])
@endsection
