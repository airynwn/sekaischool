@extends('admin.index')
@section('content')
    <h1>Modificar canción</h1>
    @include('admin.form.edit', [
        'columnas' => ['titulo', 'audio'],
    ])
@endsection
