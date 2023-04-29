@extends('admin.index')
@section('content')
    <h1>Crear grupo</h1>
    @include('admin.form', [
        'columnas' => ['nombre', 'logo', 'imagen', 'historia'],
    ])
@endsection
