{{-- validar con js? --}}
<form>
    @foreach($columnas as $columna)
        <div class="form-group">
            <label for={{ $columna }}>{{ ucfirst($columna) }}</label>
            @if (Schema::getColumnType($tabla, $columna) == 'string')
                <input type="text" class="form-control" id={{ $columna . '-input' }}>
            @if (Schema::getColumnType($tabla, $columna) == 'text')
                <textarea class="form-control" id="{{ $columna . '-input' }}" rows="3"></textarea>
            @endif
        </div>
    @endforeach
    <br>
    <div>
        <button type="button" class="btn btn-outline-success">Create</button>
    </div>

  </form>
