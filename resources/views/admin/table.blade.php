<div class="table-responsive">
<table class="table table-admin mx-5 my-5">
    <thead>
        <tr>
            @foreach($columnas as $columna)
                <th>{{ $columna == $fk ? ucfirst(substr($columna, 0, -3)) : ucfirst($columna) }}</th>
            @endforeach
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datos as $fila)
        <tr>
            @foreach($columnas as $columna)
                @if (in_array($columna, [
                    'imagen', 'logo', 'comic', 'stamp', 'chibi', 'icon', 'sticker', 'unidolized', 'idolized', 'unidolized_icon', 'idolized_icon'
                ]))
                    <td>
                        <div>
                            <img src="{{ asset($fila->$columna) }}" width=100 alt="{{ $columna }}">
                        </div>
                    </td>
                @elseif ($columna == 'audio')
                    <td>
                        <audio controls>
                            <source src="{{ asset($fila->$columna) }}" type="audio/ogg">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
                    </td>
                @elseif ($columna == $fk)
                    @php
                        $fkcol = substr($fk, 0, -3) == 'pj' ? 'personaje' : substr($fk, 0, -3);
                    @endphp
                    <td>{{ $fila->$fkcol->descripcion ?? $fila->$fkcol->nombre }}</td>
                @else
                    <td>
                        <div>
                            {{ $fila->$columna }}
                        </div>
                    </td>
                @endif
            @endforeach
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
    {{ $datos->links('pagination::bootstrap-4') }}
</div>
<br>
<form action={{ route(str_replace('index', 'create', Route::current()->getName())) }} method="GET">
    @csrf
    <button type="submit" class="btn btn-outline-success">Crear</button>
</form>
