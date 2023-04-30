@extends('admin.index')
@section('content')
    <h1>Crear carta</h1>
    @include('admin.form', [
        'columnas' => [
            'rareza', 'atributo', 'imagen', 'pj_id'
        ],
    ])
@endsection
