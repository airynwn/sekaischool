<table class="table table-dark table-striped table-bordered">
    <thead>
        <tr>
            @foreach($columnas as $columna)
            <th>{{ ucfirst($columna) }}</th>
            @endforeach
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datos as $fila)
        <tr>
            @foreach($columnas as $columna)
                @if ($columna == 'imagen' || $columna == 'logo')
                    <td><img src={{ asset($fila->$columna) }} width=100 alt={{ $columna }}></td>
                @else
                    <td>{{ $fila->$columna }}</td>
                @endif
            @endforeach
            <td>
                <a href={{ route(str_replace('index', 'edit', Route::current()->getName()), $fila->id) }}
                    class="btn btn-outline-info">Update</a>
                <br>
                <br>
                <form action={{ route(str_replace('index', 'destroy', Route::current()->getName()), $fila) }} method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
<form action={{ route(str_replace('index', 'create', Route::current()->getName())) }} method="GET">
    @csrf
    <button type="submit" class="btn btn-outline-success">Create</button>
</form>
