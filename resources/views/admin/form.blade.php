{{-- validar con js? Errores de prueba de momento --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="" method="POST">
    @csrf
    @foreach($columnas as $columna)
        <div class="form-group">
            @if ($columna !== $fk)
                <label for="{{ $columna }}">{{ ucfirst($columna) }}</label>
            @else
                <label for="{{ $columna }}">{{ ucfirst(substr($columna, 0, -3)) }}</label>
            @endif
            {{-- STRING --}}
            @if (Schema::getColumnType($tabla, $columna) == 'string')
                <input type="text" class="form-control" name="{{ $columna }}">
            {{-- TEXT --}}
            @elseif (Schema::getColumnType($tabla, $columna) == 'text')
                <textarea class="form-control" name="{{ $columna }}" rows="3"></textarea>
            {{-- FOREIGN KEY --}}
            @elseif ($columna === $fk)
                @switch($columna)
                    @case('grupo_id')
                    <select name="{{ $columna }}" id="{{ $columna }}">
                        @foreach ($tablafk as $fila)
                            <option value="{{ $fila->id }}">{{ $fila->nombre }}</option>
                        @endforeach
                    </select>
                        @break
                @endswitch
            @endif

        </div>
    @endforeach
    <br>
    <div>
        <button type="submit" class="btn btn-outline-success">Enviar</button>
    </div>

  </form>
