@extends('admin.index')
@section('content')
    <h1>Modificar cartas</h1>
    @include('admin.form.edit', [
        'columnas' => [
            'nombre', 'rareza', 'atributo', 'unidolized', 'idolized', 'pj_id'
        ],
    ])
@endsection
