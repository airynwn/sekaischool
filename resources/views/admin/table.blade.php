<table>
    <thead>
        <tr>
            @foreach($columnas as $columna)
            <th>{{ $columna }}</th>
            @endforeach
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
        </tr>
        @endforeach
    </tbody>
</table>
