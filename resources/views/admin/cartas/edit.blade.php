@extends('admin.index')
@section('content')
    <h1>Modificar cartas</h1>
    @include('admin.form.edit', [
        'columnas' => [
            'rareza', 'atributo', 'imagen', 'pj_id'
        ],
    ])
@endsection
