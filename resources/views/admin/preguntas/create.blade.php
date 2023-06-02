@extends('admin.index')
@section('content')
    <h1>Crear pregunta</h1>
    @include('admin.form', [
        'columnas' => ['pregunta',],
    ])
@endsection
