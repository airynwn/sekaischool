@extends('admin.index')
@section('content')
    <h1>Lista de Preguntas</h1>
    <br>
    @include('admin.table', [
        'columnas' => ['pregunta',],
        'datos' => $preguntas,
    ])
@endsection
