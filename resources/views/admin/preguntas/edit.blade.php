@extends('admin.index')
@section('content')
    <h1>Modificar pregunta</h1>
    @include('admin.form.edit', [
        'columnas' => ['pregunta',],
    ])
@endsection
