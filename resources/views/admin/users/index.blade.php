@extends('admin.index')
@section('content')
    <h1>Users</h1>
    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $u)
                <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->valido ? 'Válido' : 'Bloqueado' }}</td>
                    <td>
                        @if (!$u->valido)
                            <form action={{ route(str_replace('index', 'validar', Route::current()->getName()), $u) }} method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success">Validar</button>
                            </form>
                        @else
                            <form action={{ route(str_replace('index', 'bloquear', Route::current()->getName()), $u) }} method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger">Bloquear</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
