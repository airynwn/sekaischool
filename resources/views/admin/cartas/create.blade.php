@extends('admin.index')
@section('content')
    <h1>Crear carta</h1>
    @include('admin.form', [
        'columnas' => [
            'nombre', 'rareza', 'atributo', 'unidolized', 'idolized', 'unidolized_icon', 'idolized_icon', 'pj_id'
        ],
    ])
@endsection
