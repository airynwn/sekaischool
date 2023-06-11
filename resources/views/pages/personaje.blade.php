@if (isset($post))
<div class="row">
    <div class="col text-right">
        <a class="text-white click" onclick="volverInicio()">
            <i class="fa-solid fa-angles-left"
            data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}"></i>Elegir personaje
        </a>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                        {{ $personaje->nombre }}
                    </h2>
                    <figure class="caja-icons">
                        <picture>
                            <source media="(max-width: 576px)" srcset="{{ asset($personaje->chibi) }}">
                            <img src="{{ asset($personaje->imagen) }}"
                            alt="{{ $personaje->nombre }}"
                            class="img-fluid" id="img-pj">
                        </picture>
                    </figure>
                </div>
                <!--  -->
                <div class="col-12 col-md-6" id="col-mitad">
                    <div class="panel-nav" data-color="border-{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                    <div class="container-fluid overflow-auto" id="col-info">
                        {{-- DATOS BÁSICOS --}}
                        <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                            Datos básicos
                        </h2>
                        <div class="panel scroll-y " id="caja-datos" data-color="border-{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                            <div class="caja-content">
                                <span><strong data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                                    Grupo</strong>: {{ $personaje->grupo->nombre }}</span>
                                @foreach ($personaje->respuestas()->get() as $respuesta)
                                <span><strong data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                                    {{ $respuesta->pregunta->pregunta }}</strong>: {{ $respuesta->respuesta }}</span>
                                @endforeach
                            </div>
                        </div>
                        {{-- PERSONALIDAD --}}
                        <div class="espacio">
                            <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                                Personalidad
                            </h2>
                            <div class="panel scroll-y " id="caja-personalidad" data-color="border-{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                                <div class="caja-content">
                                    <p>
                                        {{ $personaje->personalidad }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- HISTORIA --}}
                        <div class="espacio">
                            <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                                Historia
                            </h2>
                            <div class="panel scroll-y " id="caja-historia" data-color="border-{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                                <div class="caja-content">
                                    <p>
                                        {{ $personaje->historia }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!--  -->
                </div>
            </div>
            <div class="row">
                <div class="col col-md-auto">
                    <div class="panel-nav" data-color="border-{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                        {{-- TRIVIA --}}
                        <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">Trivia</h2>
                        <div class="panel" data-color="border-{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                            <div class="caja-content">
                                <ul>
                                    @foreach ($personaje->trivias()->get() as $trivia)
                                    <li>{{ $trivia->dato }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        {{-- STAMP --}}
                        <div class="container-fluid">
                            <picture>
                                <img src="{{ asset($personaje->stamp) }}" alt="{{ explode(' ', $personaje->nombre)[0] }} Stamp" width="148" height="128">
                            </picture>
                        </div>
                        {{-- RELACIONES --}}
                        <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">Relaciones</h2>
                        <div class="panel" data-color="border-{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                            <div class="caja-content">
                                <div class="container-fluid">
                                    {{-- Relaciones --}}
                                    <div class="row row-cols-4 row-cols-sm-6 row-cols-md-6 row-cols-lg-5 g-1 centrar-fila">
                                        @foreach ($personaje->relaciones() as $relacion)
                                        <div class="col">
                                            {{-- Pantallas grandes --}}
                                            <button aria-label="{{ $relacion->descripcion }}" class="vacio d-none d-lg-block"
                                            data-cooltipz-dir="top" data-cooltipz-size="large"
                                            data-color="tt-{{ strtolower(explode(' ', $relacion->nombre)[0]) }}">
                                                <img src="{{ asset($relacion->icon) }}"
                                                alt="{{ $relacion->nombre }} Icon" class="img-fluid">
                                            </button>
                                            {{-- Pantallas pequeñas --}}
                                            <button aria-label="{{ $relacion->descripcion }}" class="vacio d-block d-lg-none"
                                                data-cooltipz-dir="top" data-cooltipz-size="medium"
                                                data-color="tt-{{ strtolower(explode(' ', $relacion->nombre)[0]) }}">
                                                    <img src="{{ asset($relacion->icon) }}"
                                                    alt="{{ $relacion->nombre }} Icon" class="img-fluid">
                                            </button>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row centrar-fila">
                <div class="col-auto d-flex flex-column align-items-center">
                    <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                        Comics de {{ $personaje->grupo->nombre }}
                    </h2>
                    <div class="comic-container">
                        <picture>
                            <img src="{{ asset($personaje->comic) }}"
                            alt="{{ explode(' ', $personaje->nombre)[0] }} 1koma"
                            class="img-fluid comic active">
                        </picture>
                        @foreach ($personaje->grupo->personajes as $pj)
                        @if ($personaje->comic == $pj->comic)
                            @continue
                        @endif
                        <picture>
                            <img src="{{ asset($pj->comic) }}"
                            alt="{{ explode(' ', $pj->nombre)[0] }} 1koma"
                            class="img-fluid comic">
                        </picture>
                        @endforeach
                    </div>
                    <div class="tabs">
                        <div class="tab click">
                            <i class="fa-solid fa-chevron-left" id="comic-anterior"></i>
                        </div>
                        <div class="tab click">
                            <i class="fa-solid fa-chevron-right" id="comic-siguiente"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
