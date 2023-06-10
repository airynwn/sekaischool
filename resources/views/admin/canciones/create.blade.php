@extends('admin.index')
@section('content')
    <h1>Crear canción</h1>
    @include('admin.form', [
        'columnas' => ['titulo', 'audio'],
    ])
@endsection
