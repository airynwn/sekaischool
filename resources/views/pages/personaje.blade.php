@if (isset($post))
<div class="row">
    <div class="col text-right">
        <a class="text-white" onclick="volverInicio()">
            <i class="fa-solid fa-angles-left"
            data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}"></i>Elegir personaje
        </a>
    </div>
</div>
<div class="row">
    <!-- ! Por defecto último (para que salga en móvil), en el resto primero -->
    <div class="col-lg-4 col-md-auto order-last order-lg-first">
        <div class="trivia-nav" data-color="border-{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
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
            <div class="container-fluid">
                <picture>
                    <img src="{{ asset($personaje->stamp) }}" alt="{{ explode(' ', $personaje->nombre)[0] }} Stamp" width="148" height="128">
                </picture>
            </div>
            <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">Relaciones</h2>
            <div class="panel" data-color="border-{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                <div class="caja-content">
                    <div class="container-fluid">
                {{-- Relación seleccionada --}}
                        <div class="row centrar-fila">
                            <div class="col-4">
                                <picture>
                                    <img src="img/ena-circle.png" alt="Ena Circle" class="img-fluid">
                                </picture>
                            </div>
                            <div class="col-auto">
                                <div class="caja-content">
                                    <span>
                                        <span class="ena">Ena</span>: A Mizuki le gusta molestar a Ena
                                        y la sigue en redes sociales. La mayoría
                                        de las conversaciones de Nightcord son
                                        bromas entre Mizuki y Ena.
                                    </span>
                                </div>
                            </div>
                        </div>
                {{-- Relaciones --}}
                <!-- g-3 (gutter-3) da separación horizontal y vertical entre columnas según pantalla -->
                        <div class="row row-cols-4 row-cols-sm-6 row-cols-md-6 row-cols-lg-5 g-1 centrar-fila">
                            <div class="col">
                                <picture>
                                    <img src="img/kanade-circle.png" alt="Kanade Circle" class="img-fluid">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                        {{ $personaje->nombre }}
                    </h2>
                    <figure class="caja-icons">
                        <picture>
                            <source media="(max-width: 576px)" srcset="{{ asset($personaje->chibi) }}">
                            <img src="{{ asset($personaje->imagen) }}"
                            alt="{{ $personaje->nombre }}"
                            class="img-fluid" width="318" height="670">
                        </picture>
                    </figure>
                </div>
                <!--  -->
                <div class="col">
                    <div class="espacio">
                        <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                            Datos básicos
                        </h2>
                        <div class="panel" data-color="border-{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                            {{-- TODO Preguntas y Respuestas --}}
                            <div class="caja-content">
                                <span><strong data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                                    Grupo</strong>: {{ $personaje->grupo->nombre }}</span>
                                @foreach ($personaje->respuestas()->get() as $respuesta)
                                <span><strong data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                                    {{ $respuesta->pregunta->pregunta }}</strong>: {{ $respuesta->respuesta }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="espacio">
                        <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                            Historia
                        </h2>
                        <div class="panel" data-color="border-{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                            <div class="caja-content">
                                <p>
                                    {{ $personaje->historia }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row centrar-fila">
                <div class="col-auto">
                    <div class="espacio">
                        <h2 data-color="{{ strtolower(explode(' ', $personaje->nombre)[0]) }}">
                            Personalidad
                        </h2>
                        <div class="caja-content">
                            <p>
                                {{ $personaje->personalidad }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="caja cuadrado">
                        <picture>
                            <img src="{{ asset($personaje->comic) }}"
                            alt="{{ explode(' ', $personaje->nombre)[0] }} 1koma"
                            class="img-fluid" style="max-width: 404px">
                        </picture>
                    </div>
                    <div class="tabs">
                        <div class="tab">
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                        <div class="tab">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
