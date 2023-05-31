@extends('admin.index')
@section('content')
    <h1>Lista de Cartas</h1>
    <br>
    @include('admin.table', [
        'columnas' => [
            'nombre', 'rareza', 'atributo', 'unidolized', 'idolized', 'unidolized_icon', 'idolized_icon', 'pj_id'
        ],
        'datos' => $cartas,
    ])
@endsection
