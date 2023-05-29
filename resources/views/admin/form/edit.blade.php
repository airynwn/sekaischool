{{-- validar con js? Errores de prueba de momento --}}
{{-- validar error cuando un string es muy largo --}}
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
    @method('PUT')
    @csrf
    @foreach($columnas as $columna)
        <div class="form-group">
            {{-- LABEL --}}
            @if ($columna !== $fk)
                <label for={{ $columna }}>{{ ucfirst($columna) }}</label>
            @else
                <label for={{ $columna }}>{{ ucfirst(substr($columna, 0, -3)) }}</label>
            @endif
            {{-- FOREIGN KEY --}}
            @if ($columna === $fk)
                @php
                    $fkcol = substr($fk, 0, -3) == 'pj' ? 'personaje' : substr($fk, 0, -3);
                @endphp
                @switch($columna)
                    @case('grupo_id')
                    @case('pj_id')
                        <select name="{{ $columna }}" id="{{ $columna }}">
                            @foreach ($tablafk as $fila)
                                <option {{ $dato->$fkcol->id === $fila->id ? 'selected' : '' }}
                                        value="{{ $fila->id }}">
                                    {{ $fila->nombre }}
                                </option>
                            @endforeach
                        </select>
                        @break
                @endswitch
            {{-- STRING --}}
            @elseif (Schema::getColumnType($tabla, $columna) == 'string')
                <input type="text" name="{{ $columna }}" value="{{ $dato->$columna }}">
            {{-- TEXT --}}
            @elseif (Schema::getColumnType($tabla, $columna) == 'text')
                <textarea name="{{ $columna }}" rows="3" value="{{ $dato->$columna }}">{{ $dato->$columna }}</textarea>
            {{-- INT --}}
            @elseif (Schema::getColumnType($tabla, $columna) == 'integer')
                <input type="number" name="{{ $columna }}" value="{{ $dato->$columna }}">
            @endif
        </div>
    @endforeach
    <br>
    <div>
        <button type="submit" class="btn btn-outline-success">Enviar</button>
    </div>

  </form>
