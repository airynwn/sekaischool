@extends('admin.index')
@section('content')
    <h1>Crear respuesta</h1>
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
    <div class="form-group">
        <label for="pj_id">Personaje</label>
        <select name="pj_id" id="pj_id">
            @foreach ($personajes as $fila)
                <option value="{{ $fila->id }}">
                    {{ $fila->nombre }}
                </option>
            @endforeach
        </select>
        <br>
        <label for="pregunta_id">Pregunta</label>
        <select name="pregunta_id" id="pregunta_id">
            @foreach ($preguntas as $fila)
                <option value="{{ $fila->id }}">
                    {{ $fila->pregunta }}
                </option>
            @endforeach
        </select>
        <br>
        <label for="respuesta">Respuesta</label>
        <textarea name="respuesta" rows="3"></textarea>
    </div>
    <br>
    <div>
        <button type="submit" class="btn btn-outline-success">Enviar</button>
    </div>

  </form>

@endsection
