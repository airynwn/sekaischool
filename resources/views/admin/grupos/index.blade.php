@extends('admin.index')
@section('content')
    <h1>Lista de Grupos</h1>
    <br>
    @include('admin.table', [
        'columnas' => ['nombre', 'logo', 'imagen', 'historia'],
        'datos' => $grupos,
    ])
@endsection
