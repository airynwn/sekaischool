@foreach ($cartas as $carta)
<div class="col">
    <picture class="col-carta position-relative">
        <form onsubmit="eliminarCarta(event)">
            @csrf
            <input type="hidden" name="carta" value="{{ $carta->id }}">
            <button type="submit" class="btn-close position-absolute"></button>
        </form>
        <img src="{{ asset($carta->idolized_icon) }}" alt="{{ $carta->nombre . ' Icon' }}" class="img-fluid">
    </picture>
</div>
@endforeach
