<table class="table table-dark table-striped table-bordered">
    <thead>
        <tr>
            @foreach($columnas as $columna)
            <th>{{ $columna }}</th>
            @endforeach
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach($datos as $fila)
                @foreach($columnas as $columna)
                    @if ($columna == 'imagen' || $columna == 'logo')
                        <td><img src={{ asset($fila->$columna) }} width=100 alt={{ $columna }}></td>
                    @else
                        <td>{{ $fila->$columna }}</td>
                    @endif
                @endforeach
            @endforeach
            <td>
                <button type="button" class="btn btn-outline-info">Update</button>
                <br>
                <br>
                <button type="button" class="btn btn-outline-danger">Delete</button>
            </td>
        </tr>
    </tbody>
</table>
