@extends('admin.index')
@section('content')
    <h1>Modificar grupo</h1>
    @include('admin.form.edit', [
        'columnas' => ['nombre', 'logo', 'imagen', 'historia'],
    ])
@endsection
