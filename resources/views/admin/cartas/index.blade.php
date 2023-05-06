@extends('admin.index')
@section('content')
    <h1>Cartas</h1>
    @include('admin.table', [
        'columnas' => [
            'nombre', 'rareza', 'atributo', 'unidolized', 'idolized', 'pj_id'
        ],
        'datos' => $cartas,
    ])
@endsection
