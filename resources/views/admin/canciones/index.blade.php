@extends('admin.index')
@section('content')
    <h1>Lista de Canciones</h1>
    <br>
    @include('admin.table', [
        'columnas' => ['titulo', 'audio'],
        'datos' => $canciones,
    ])
@endsection
