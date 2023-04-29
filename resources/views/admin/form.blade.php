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
            <label for={{ $columna }}>{{ ucfirst($columna) }}</label>
            @if (Schema::getColumnType($tabla, $columna) == 'string')
                <input type="text" class="form-control"name={{ $columna }}>
            @elseif (Schema::getColumnType($tabla, $columna) == 'text')
                <textarea class="form-control" name={{ $columna }} rows="3"></textarea>
            @endif
        </div>
    @endforeach
    <br>
    <div>
        <button type="submit" class="btn btn-outline-success">Enviar</button>
    </div>

  </form>
