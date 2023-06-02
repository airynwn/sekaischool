@extends('admin.index')
@section('content')
    <h1>Lista de Relaciones</h1>
    <br>
    <div class="table-responsive">
        <table class="table table-admin mx-5 my-5">
            <thead>
                <tr>
                    <th>Personaje 1</th>
                    <th>Personaje 2</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($relaciones as $fila)
                <tr>
                    <td>
                        <div>
                            {{ $fila->pj1->nombre }}
                        </div>
                    </td>
                    <td>
                        <div>
                            {{ $fila->pj2->nombre }}
                        </div>
                    </td>
                    <td>
                        <div>
                            {{ $fila->descripcion }}
                        </div>
                    </td>
                    <td>
                        <br>
                        <a href={{ route(str_replace('index', 'edit', Route::current()->getName()), $fila->id) }}
                            class="btn btn-info text-white">Modificar</a>
                        <br>
                        <br>
                        <form action={{ route(str_replace('index', 'destroy', Route::current()->getName()), $fila) }}
                            method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        </div>
        <div class="pagination justify-content-center">
            {{ $relaciones->links('pagination::bootstrap-4') }}
        </div>
        <br>
        <form action={{ route(str_replace('index', 'create', Route::current()->getName())) }} method="GET">
            @csrf
            <button type="submit" class="btn btn-outline-success">Crear</button>
        </form>

@endsection
