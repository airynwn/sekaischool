@extends('admin.index')
@section('content')
    <h1>Modificar respuesta</h1>
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
    @method('PUT')
    @csrf
        <div class="form-group">
            <label for="pj1_id">Personaje 1</label>
            <select name="pj1_id" id="pj1_id">
                @foreach ($personajes as $fila)
                    <option {{ $relacion->pj1_id === $fila->id ? 'selected' : '' }}
                            value="{{ $fila->id }}">
                        {{ $fila->nombre }}
                    </option>
                @endforeach
            </select>
            <br>
            <label for="pj2_id">Personaje 2</label>
            <select name="pj2_id" id="pj2_id">
                @foreach ($personajes as $fila)
                    <option {{ $relacion->pj2_id === $fila->id ? 'selected' : '' }}
                            value="{{ $fila->id }}">
                        {{ $fila->nombre }}
                    </option>
                @endforeach
            </select>
            <br>
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" rows="3" value="{{ $relacion->descripcion }}">{{ $relacion->descripcion }}</textarea>
        </div>
    <br>
    <div>
        <button type="submit" class="btn btn-outline-success">Enviar</button>
    </div>

  </form>

@endsection
