@extends('admin.index')
@section('content')
    <h1>Modificar user</h1>
    @include('admin.form.edit', [
        'columnas' => ['name', 'valido'],
    ])
@endsection
