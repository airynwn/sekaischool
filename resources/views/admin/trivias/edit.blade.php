@extends('admin.index')
@section('content')
    <h1>Modificar trivias</h1>
    @include('admin.form.edit', [
        'columnas' => [
            'dato', 'pj_id'
        ],
    ])
@endsection
