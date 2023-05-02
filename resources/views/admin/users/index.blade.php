@extends('admin.index')
@section('content')
    <h1>Users</h1>
    @include('admin.table', [
        'columnas' => ['name', 'valido'],
        'datos' => $users,
    ])
@endsection
