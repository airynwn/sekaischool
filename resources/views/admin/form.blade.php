{{-- nombre: string, logo-img-historia: text --}}
<form>
    @foreach($columnas as $columna)
        <div class="form-group">
            <label for={{ $columna }}>{{ $columna }}</label>
            <input type="text" class="form-control" id={{ $columna . '-input' }}>
        </div>
    @endforeach
    {{-- <div class="form-group">
      <label for="exampleFormControlTextarea1">Example textarea</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div> --}}
  </form>
