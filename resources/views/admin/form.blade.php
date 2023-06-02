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
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    @foreach($columnas as $columna)
        <div class="form-group">
            {{-- LABEL --}}
            @if ($columna !== $fk)
                <label for="{{ $columna }}">{{ ucfirst($columna) }}</label>
            @else
                <label for="{{ $columna }}">{{ ucfirst(substr($columna, 0, -3)) }}</label>
            @endif
            {{-- FOREIGN KEY --}}
            @if ($columna === $fk)
                @switch($columna)
                    @case('grupo_id')
                    @case('pj_id')
                        <select name="{{ $columna }}" id="{{ $columna }}">
                            @foreach ($tablafk as $fila)
                                <option value="{{ $fila->id }}">{{ $fila->nombre }}</option>
                            @endforeach
                        </select>
                        @break
                @endswitch
            {{-- STRING --}}
            @elseif (Schema::getColumnType($tabla, $columna) == 'string')
                <input type="text" name="{{ $columna }}">
            {{-- FILE --}}
            @elseif ($columna == 'imagen' || $columna == 'logo' || $columna == 'comic' || $columna == 'chibi'
            || $columna == 'icon' || $columna == 'stamp' || $columna == 'sticker' || $columna == 'unidolized' ||
            $columna == 'idolized' || $columna == 'unidolized_icon' || $columna == 'idolized_icon')
                <input type="file" name="{{ $columna }}" accept="image/*">
            {{-- TEXT --}}
            @elseif (Schema::getColumnType($tabla, $columna) == 'text')
                <textarea name="{{ $columna }}" rows="1"></textarea>
            {{-- INT --}}
            @elseif (Schema::getColumnType($tabla, $columna) == 'integer')
                <input type="number" name="{{ $columna }}">
            @endif
        </div>
    @endforeach
    <br>
    <div>
        <button type="submit" class="btn btn-outline-success">Enviar</button>
    </div>

  </form>
