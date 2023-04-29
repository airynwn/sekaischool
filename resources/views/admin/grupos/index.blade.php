@extends('admin.index')
@section('content')
    <h1>Grupos</h1>
    @include('admin.table', [
        'columnas' => ['nombre', 'logo', 'imagen', 'historia'],
        'datos' => $grupos,
    ])
@endsection
