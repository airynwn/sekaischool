@extends('admin.index')
@section('content')
    <h1>Crear carta</h1>
    @include('admin.form', [
        'columnas' => [
            'nombre', 'rareza', 'atributo', 'unidolized', 'idolized', 'pj_id'
        ],
    ])
@endsection
