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
            <label for="pj_id"><strong>Personaje</strong>: {{ $respuesta->personaje->nombre }}</label>
            <br>
            <label for="pregunta_id"><strong>Pregunta</strong>: {{ $respuesta->pregunta->pregunta }}</label>
            <br>
            <label for="respuesta">Respuesta</label>
            <textarea name="respuesta" rows="3" value="{{ $respuesta->respuesta }}">{{ $respuesta->respuesta }}</textarea>
        </div>
    <br>
    <div>
        <button type="submit" class="btn btn-outline-success">Enviar</button>
    </div>

  </form>

@endsection
