@extends('admin.index')
@section('content')
    <h1>Lista de Respuestas</h1>
    <br>
    <div class="table-responsive">
        <table class="table table-admin mx-5 my-5">
            <thead>
                <tr>
                    <th>Pregunta</th>
                    <th>Respuesta</th>
                    <th>Personaje</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($respuestas as $fila)
                <tr>
                    <td>
                        <div>
                            {{ $fila->pregunta->pregunta }}
                        </div>
                    </td>
                    <td>
                        <div>
                            {{ $fila->respuesta }}
                        </div>
                    </td>
                    <td>
                        <div>
                            {{ $fila->personaje->nombre }}
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
            {{ $respuestas->links('pagination::bootstrap-4') }}
        </div>
        <br>
        <form action={{ route(str_replace('index', 'create', Route::current()->getName())) }} method="GET">
            @csrf
            <button type="submit" class="btn btn-outline-success">Crear</button>
        </form>

@endsection
