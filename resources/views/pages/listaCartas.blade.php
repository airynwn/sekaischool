<div class="row row-cols-sm-2 row-cols-1">
    @foreach ($cartas as $carta)
    <div class="col">
        <figure class="card-box">
            <picture>
                <img src="{{ asset($carta->unidolized) }}"
                alt="{{ $carta->nombre }} Unidolized" class="img-fluid card">
            </picture>
            <picture>
                <img src="{{ asset($carta->idolized) }}"
                alt="{{ $carta->nombre }} Idolized" class="img-fluid card-idolized">
            </picture>
            <img src="img/icons/{{ $carta->rareza }}_star.png" alt="Rareza {{ $carta->rareza}}"
            class="carta-rareza">
            <img src="img/icons/{{ $carta->atributo }}.png" alt="Atributo {{ $carta->atributo }}"
            class="carta-atributo">
        </figure>
        @if (auth()->check())
            <div class="tabs">
                <form onsubmit="anadirCarta(event)" class="tab">
                    @csrf
                    <input type="hidden" name="carta" value="{{ $carta->id }}">
                    <input type="hidden" name="estado" value="coleccion">
                    <button type="submit" class="vacio">
                        <i class="fa-solid fa-bookmark brillo"></i>
                    </button>
                </form>
                <form onsubmit="anadirCarta(event)" class="tab">
                    @csrf
                    <input type="hidden" name="carta" value="{{ $carta->id }}">
                    <input type="hidden" name="estado" value="deseo">
                    <button type="submit" class="vacio">
                        <i class="fa-solid fa-star brillo"></i>
                    </button>
                </form>
            </div>
        @endif
    </div>
@endforeach
</div>
